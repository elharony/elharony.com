// Test script to verify your email configuration
// Run with: node test-email.js

import nodemailer from 'nodemailer';
import dotenv from 'dotenv';

// Load environment variables
dotenv.config();

async function testEmailConfig() {
  console.log('Testing email configuration...\n');

  // Check if environment variables are set
  const requiredVars = ['SMTP_HOST', 'SMTP_USER', 'SMTP_PASS'];
  const missingVars = requiredVars.filter(varName => !process.env[varName]);
  
  if (missingVars.length > 0) {
    console.error('‚ùå Missing environment variables:', missingVars.join(', '));
    console.log('\nPlease create a .env file with your email configuration.');
    console.log('See EMAIL_SETUP.md for detailed instructions.');
    return;
  }

  console.log('‚úÖ Environment variables found');
  console.log(`Ì≥ß SMTP Host: ${process.env.SMTP_HOST}`);
  console.log(`Ì±§ SMTP User: ${process.env.SMTP_USER}`);
  console.log(`Ì¥í SMTP Pass: ${'*'.repeat(process.env.SMTP_PASS.length)}`);

  // Create transporter
  const transporter = nodemailer.createTransporter({
    host: process.env.SMTP_HOST,
    port: parseInt(process.env.SMTP_PORT || '587'),
    secure: process.env.SMTP_SECURE === 'true',
    auth: {
      user: process.env.SMTP_USER,
      pass: process.env.SMTP_PASS,
    },
  });

  try {
    // Test connection
    console.log('\nÌ¥å Testing SMTP connection...');
    await transporter.verify();
    console.log('‚úÖ SMTP connection successful!');

    // Send test email
    console.log('\nÌ≥§ Sending test email...');
    const testEmail = {
      from: process.env.SMTP_USER,
      to: process.env.CONTACT_EMAIL || process.env.SMTP_USER,
      subject: 'Test Email from Astro Contact Form',
      text: 'This is a test email to verify your contact form email configuration is working correctly.',
      html: '<p>This is a test email to verify your contact form email configuration is working correctly.</p>',
    };

    await transporter.sendMail(testEmail);
    console.log('‚úÖ Test email sent successfully!');
    console.log(`Ì≥¨ Check your inbox at: ${process.env.CONTACT_EMAIL || process.env.SMTP_USER}`);

  } catch (error) {
    console.error('‚ùå Email test failed:', error.message);
    
    if (error.message.includes('Authentication failed')) {
      console.log('\nÌ≤° Authentication failed. Common solutions:');
      console.log('   - For Gmail: Use an App Password instead of your regular password');
      console.log('   - Enable 2-Factor Authentication first');
      console.log('   - Check your email and password are correct');
    } else if (error.message.includes('ECONNREFUSED')) {
      console.log('\nÌ≤° Connection refused. Common solutions:');
      console.log('   - Check your SMTP_HOST and SMTP_PORT');
      console.log('   - Try port 465 with SMTP_SECURE=true');
      console.log('   - Check your firewall settings');
    }
  }
}

testEmailConfig();
