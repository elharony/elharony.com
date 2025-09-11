import nodemailer from 'nodemailer';

export interface ContactFormData {
  firstName: string;
  lastName: string;
  email: string;
  phone?: string;
  helpType: string;
  urgency: string;
  budget: string;
  message: string;
  receiveOffers: boolean;
}

export async function sendContactEmail(formData: ContactFormData) {
  // Create transporter based on environment variables
  const transporter = nodemailer.createTransporter({
    host: process.env.SMTP_HOST || 'smtp.gmail.com',
    port: parseInt(process.env.SMTP_PORT || '587'),
    secure: process.env.SMTP_SECURE === 'true', // true for 465, false for other ports
    auth: {
      user: process.env.SMTP_USER,
      pass: process.env.SMTP_PASS,
    },
  });

  // Verify connection configuration
  try {
    await transporter.verify();
  } catch (error) {
    console.error('SMTP configuration error:', error);
    throw new Error('Email service configuration error');
  }

  const { firstName, lastName, email, phone, helpType, urgency, budget, message, receiveOffers } = formData;

  // Format help type for display
  const helpTypeLabels: Record<string, string> = {
    'build-new-website': 'I want to build a website for my business',
    'improve-existing-website': 'Already have a website, but want to upgrade/renew it',
    'outsource-work': 'We are a company, and want to outsource work to you',
    'opportunity': 'I have an opportunity for you',
    'other': 'Something else!'
  };

  // Format urgency for display
  const urgencyLabels: Record<string, string> = {
    'low': 'Low',
    'medium': 'Medium',
    'high': 'High'
  };

  // Format budget for display
  const budgetLabels: Record<string, string> = {
    'extra_small_project': '0 - 250$',
    'small_project': '250$ - 1000$',
    'medium_project': '1000$ - 5000$',
    'big_project': '+5000$'
  };

  // Email content for you
  const adminEmailContent = `
New Contact Form Submission

Name: ${firstName} ${lastName}
Email: ${email}
Phone: ${phone || 'Not provided'}

How can I help you: ${helpTypeLabels[helpType] || helpType}
Urgency: ${urgencyLabels[urgency] || urgency}
Estimated Budget: ${budgetLabels[budget] || budget}

Message:
${message}

Wants to receive offers/discounts: ${receiveOffers ? 'Yes' : 'No'}

---
Submitted on: ${new Date().toLocaleString()}
IP Address: ${process.env.NODE_ENV === 'production' ? 'Hidden for privacy' : 'Development'}
  `;

  // Send email to yourself
  await transporter.sendMail({
    from: process.env.SMTP_USER,
    to: process.env.CONTACT_EMAIL || process.env.SMTP_USER,
    subject: `New Contact Form Submission from ${firstName} ${lastName}`,
    text: adminEmailContent,
    html: adminEmailContent.replace(/\n/g, '<br>'),
  });

  // Confirmation email content for the user
  const confirmationContent = `
Hi ${firstName},

Thank you for reaching out! I've received your message and will get back to you within 24-48 hours.

Here's a summary of what you submitted:
- Service needed: ${helpTypeLabels[helpType] || helpType}
- Urgency: ${urgencyLabels[urgency] || urgency}
- Budget: ${budgetLabels[budget] || budget}
- Message: ${message}

Best regards,
Yahya Elharony

---
This is an automated response. Please do not reply to this email.
  `;

  // Send confirmation email to the user
  await transporter.sendMail({
    from: process.env.SMTP_USER,
    to: email,
    subject: 'Thank you for contacting Yahya Elharony',
    text: confirmationContent,
    html: confirmationContent.replace(/\n/g, '<br>'),
  });
}
