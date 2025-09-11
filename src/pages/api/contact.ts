import type { APIRoute } from 'astro';
import { sendContactEmail, type ContactFormData } from '../../utils/email';

export const POST: APIRoute = async ({ request }) => {
  try {
    const formData = await request.formData();
    
    // Extract form data
    const contactData: ContactFormData = {
      firstName: formData.get('firstName') as string,
      lastName: formData.get('lastName') as string,
      email: formData.get('email') as string,
      phone: formData.get('phone') as string || undefined,
      helpType: formData.get('helpType') as string,
      urgency: formData.get('urgency') as string,
      budget: formData.get('budget') as string,
      message: formData.get('message') as string,
      receiveOffers: formData.get('receiveOffers') === 'on',
    };

    // Validate required fields
    const requiredFields = ['firstName', 'lastName', 'email', 'helpType', 'urgency', 'budget', 'message'];
    for (const field of requiredFields) {
      if (!contactData[field as keyof ContactFormData]) {
        return new Response(JSON.stringify({ 
          success: false, 
          error: 'Please fill in all required fields.' 
        }), {
          status: 400,
          headers: { 'Content-Type': 'application/json' }
        });
      }
    }

    // Validate email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(contactData.email)) {
      return new Response(JSON.stringify({ 
        success: false, 
        error: 'Please enter a valid email address.' 
      }), {
        status: 400,
        headers: { 'Content-Type': 'application/json' }
      });
    }

    // Send emails
    await sendContactEmail(contactData);

    return new Response(JSON.stringify({ 
      success: true, 
      message: 'Thank you for your message! I\'ll get back to you soon.' 
    }), {
      status: 200,
      headers: { 'Content-Type': 'application/json' }
    });

  } catch (error) {
    console.error('Contact form error:', error);
    return new Response(JSON.stringify({ 
      success: false, 
      error: 'Sorry, there was an error sending your message. Please try again later.' 
    }), {
      status: 500,
      headers: { 'Content-Type': 'application/json' }
    });
  }
};
