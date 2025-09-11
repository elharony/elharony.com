# Email Setup Guide for Contact Form

This guide will help you configure email functionality for your contact form so you can receive form submissions directly in your inbox.

## Option 1: Gmail (Recommended for beginners)

### Step 1: Enable 2-Factor Authentication
1. Go to your Google Account settings
2. Navigate to Security → 2-Step Verification
3. Enable 2-Step Verification if not already enabled

### Step 2: Generate App Password
1. In Google Account settings, go to Security → App passwords
2. Select "Mail" and "Other (Custom name)"
3. Enter "Astro Contact Form" as the name
4. Copy the generated 16-character password

### Step 3: Configure Environment Variables
Create a `.env` file in your project root:

```env
SMTP_HOST=smtp.gmail.com
SMTP_PORT=587
SMTP_USER=your-email@gmail.com
SMTP_PASS=your-16-character-app-password
CONTACT_EMAIL=your-email@gmail.com
```

## Option 2: Outlook/Hotmail

### Step 1: Enable App Passwords
1. Go to Microsoft Account security settings
2. Enable 2-factor authentication
3. Generate an app password for "Mail"

### Step 2: Configure Environment Variables
```env
SMTP_HOST=smtp-mail.outlook.com
SMTP_PORT=587
SMTP_USER=your-email@outlook.com
SMTP_PASS=your-app-password
CONTACT_EMAIL=your-email@outlook.com
```

## Option 3: Custom SMTP Server

If you have your own email server or use a service like SendGrid, Mailgun, etc.:

```env
SMTP_HOST=your-smtp-server.com
SMTP_PORT=587
SMTP_SECURE=false
SMTP_USER=your-username
SMTP_PASS=your-password
CONTACT_EMAIL=your-email@yourdomain.com
```

## Option 4: Third-Party Email Services

### SendGrid
```env
SMTP_HOST=smtp.sendgrid.net
SMTP_PORT=587
SMTP_USER=apikey
SMTP_PASS=your-sendgrid-api-key
CONTACT_EMAIL=your-email@yourdomain.com
```

### Mailgun
```env
SMTP_HOST=smtp.mailgun.org
SMTP_PORT=587
SMTP_USER=your-mailgun-smtp-username
SMTP_PASS=your-mailgun-smtp-password
CONTACT_EMAIL=your-email@yourdomain.com
```

## Testing Your Configuration

### Local Development
1. Create a `.env` file with your email configuration
2. Run `npm run dev`
3. Go to the contact page and submit a test form
4. Check your email for the submission

### Production Deployment

#### Vercel
1. Go to your Vercel project dashboard
2. Navigate to Settings → Environment Variables
3. Add all your SMTP variables
4. Redeploy your site

#### Netlify
1. Go to your Netlify site dashboard
2. Navigate to Site settings → Environment variables
3. Add all your SMTP variables
4. Redeploy your site

#### Other Hosting Providers
Most hosting providers support environment variables. Add your SMTP configuration to your hosting platform's environment variables section.

## Security Best Practices

1. **Never commit your `.env` file to version control**
2. **Use app passwords instead of your main email password**
3. **Enable 2-factor authentication on your email account**
4. **Use environment variables in production**
5. **Consider using a dedicated email service for high-volume sites**

## Troubleshooting

### Common Issues

1. **"Authentication failed"**
   - Check your email and password
   - Make sure you're using an app password for Gmail
   - Verify 2FA is enabled

2. **"Connection timeout"**
   - Check your SMTP host and port
   - Verify your firewall isn't blocking the connection
   - Try different ports (465 for SSL, 587 for TLS)

3. **"Form submits but no email received"**
   - Check your spam folder
   - Verify the CONTACT_EMAIL is correct
   - Check server logs for errors

### Testing SMTP Connection

You can test your SMTP configuration by creating a simple test script:

```javascript
// test-email.js
import nodemailer from 'nodemailer';

const transporter = nodemailer.createTransporter({
  host: 'smtp.gmail.com',
  port: 587,
  secure: false,
  auth: {
    user: 'your-email@gmail.com',
    pass: 'your-app-password',
  },
});

transporter.verify((error, success) => {
  if (error) {
    console.log('SMTP Error:', error);
  } else {
    console.log('SMTP Server is ready to take our messages');
  }
});
```

Run with: `node test-email.js`

## Form Features

Your contact form includes:
- ✅ Client-side validation
- ✅ Server-side validation
- ✅ Email confirmation to user
- ✅ Admin notification email
- ✅ Spam protection
- ✅ Responsive design
- ✅ Loading states
- ✅ Error handling

## Support

If you're having trouble setting up email functionality:
1. Check the troubleshooting section above
2. Verify your email provider's SMTP settings
3. Test with a simple email script first
4. Check your hosting provider's documentation for environment variables

The contact form is designed to work with any SMTP-compatible email service, so you have many options to choose from!
