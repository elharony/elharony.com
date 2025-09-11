# Yahya Elharony - Personal Blog & Portfolio

A modern, fast, and SEO-optimized personal blog and portfolio website built with Astro, TypeScript, and Tailwind CSS.

## �� Features

### Technical Stack
- **Astro** - Static site generator with modern web standards
- **TypeScript** - Type-safe development
- **Tailwind CSS** - Utility-first CSS framework
- **Prism.js** - Syntax highlighting for code blocks
- **Content Collections** - Type-safe content management

### Blog Features
- ✅ Markdown/MDX support with frontmatter
- ✅ Syntax highlighting with copy-to-clipboard functionality
- ✅ Reading time estimation
- ✅ Tag system
- ✅ RSS feed generation
- ✅ SEO optimization with meta tags
- ✅ Open Graph and Twitter Card support
- ✅ JSON-LD structured data

### SEO & Performance
- ✅ Automatic sitemap generation
- ✅ Robots.txt with AI crawler permissions
- ✅ Canonical URLs
- ✅ Responsive design
- ✅ Dark/light mode support
- ✅ Fast loading times
- ✅ Accessible markup

## ��� Project Structure

```
src/
├── components/
│   ├── Header.astro          # Navigation header
│   ├── Footer.astro          # Site footer
│   └── PostCard.astro        # Blog post preview card
├── layouts/
│   ├── BaseLayout.astro      # Base HTML layout
│   └── PostLayout.astro      # Blog post layout
├── pages/
│   ├── index.astro           # Homepage
│   ├── about.astro           # About page
│   ├── contact.astro         # Contact page
│   ├── rss.xml.ts           # RSS feed
│   └── blog/
│       ├── index.astro       # Blog listing
│       └── [slug].astro      # Dynamic blog post pages
├── content/
│   ├── config.ts            # Content collections config
│   └── posts/               # Blog posts (Markdown)
├── styles/
│   └── global.css           # Global styles and Tailwind
└── scripts/
    └── code-enhancements.js # Code block enhancements

public/
├── images/                  # Static images
├── robots.txt              # Search engine instructions
└── favicon.svg             # Site favicon
```

## ���️ Getting Started

### Prerequisites
- Node.js 18+ 
- npm or pnpm

### Installation

1. **Clone and install dependencies:**
```bash
npm install
```

2. **Start development server:**
```bash
npm run dev
```

3. **Build for production:**
```bash
npm run build
```

4. **Preview production build:**
```bash
npm run preview
```

## ��� Content Management

### Adding Blog Posts

Create new Markdown files in `src/content/posts/` with the following frontmatter:

```markdown
---
title: "Your Post Title"
description: "Brief description for SEO and previews"
pubDate: 2025-01-06
tags: ["tag1", "tag2", "tag3"]
draft: false
---

# Your Post Content

Write your blog post content here using Markdown.

## Code Examples

```typescript
// TypeScript code with syntax highlighting
interface User {
  id: string;
  name: string;
  email: string;
}
```

### Customization

#### Site Configuration
Update site details in `astro.config.mjs`:
- Site URL
- Integrations
- Build settings

#### Styling
- Modify `src/styles/global.css` for custom styles
- Update `tailwind.config.mjs` for Tailwind customizations
- Customize components in `src/components/`

#### Content
- Update personal information in layouts and pages
- Replace placeholder profile image in `public/images/`
- Modify social links in Header and Footer components

## ��� Syntax Highlighting

The blog includes enhanced code blocks with:
- Language detection and labeling
- Copy-to-clipboard functionality
- Dark/light theme support
- Line highlighting (can be extended)

## ��� Responsive Design

The site is fully responsive with:
- Mobile-first approach
- Flexible grid layouts
- Optimized typography
- Touch-friendly navigation

## ��� SEO Features

### Automatic Generation
- Sitemap.xml with all pages
- RSS feed for blog posts
- Meta tags for all pages
- JSON-LD structured data for blog posts

### AI Crawler Support
The `robots.txt` includes permissions for:
- GPTBot (OpenAI)
- Google-Extended
- Anthropic AI
- Standard search engines

## ��� Deployment

### Build Command
```bash
npm run build
```

### Deployment Platforms
The site can be deployed to:
- **Netlify** - Zero config deployment
- **Vercel** - Automatic builds from Git
- **GitHub Pages** - Free hosting for public repos
- **Any static hosting** - Upload `dist/` folder

### Environment Variables
Set the following in your deployment platform:
- `SITE_URL` - Your production URL (for sitemap generation)

## ��� Performance

The site is optimized for:
- **Lighthouse Score**: 100/100 (Performance, Accessibility, Best Practices, SEO)
- **Core Web Vitals**: Excellent scores
- **Bundle Size**: Minimal JavaScript
- **Loading Speed**: Sub-second first contentful paint

## ��� Contributing

This is a personal blog template, but improvements are welcome:

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## ��� License

MIT License - feel free to use this template for your own blog!

## ���‍♂️ Support

If you have questions or need help customizing this template:
- Open an issue on GitHub
- Contact me via the contact page
- Follow me on Twitter [@elharony](https://twitter.com/elharony)

---

Built with ❤️ using [Astro](https://astro.build)

## ��� Contact Form

The site includes a fully functional contact form that sends submissions directly to your email without relying on third-party services.

### Features
- ✅ **Direct Email Delivery** - Form submissions sent directly to your inbox
- ✅ **User Confirmation** - Automatic confirmation email to form submitters
- ✅ **Client & Server Validation** - Comprehensive form validation
- ✅ **Spam Protection** - Built-in spam prevention
- ✅ **Responsive Design** - Works perfectly on all devices
- ✅ **Loading States** - User-friendly form interaction
- ✅ **Error Handling** - Graceful error messages

### Setup Instructions

1. **Configure Email Settings**:
   ```bash
   # Copy the example environment file
   cp .env.example .env
   
   # Edit .env with your email configuration
   nano .env
   ```

2. **Test Your Configuration**:
   ```bash
   # Test your email setup
   node test-email.js
   ```

3. **Deploy with Environment Variables**:
   - Add your SMTP configuration to your hosting platform
   - See `EMAIL_SETUP.md` for detailed instructions

### Supported Email Providers
- Gmail (with App Password)
- Outlook/Hotmail
- Custom SMTP servers
- SendGrid, Mailgun, and other email services

For detailed setup instructions, see [EMAIL_SETUP.md](./EMAIL_SETUP.md).

## ��� Deployment

### Environment Variables Required
```env
SMTP_HOST=smtp.gmail.com
SMTP_PORT=587
SMTP_USER=your-email@gmail.com
SMTP_PASS=your-app-password
CONTACT_EMAIL=your-email@gmail.com
```

### Quick Start
1. Set up your email configuration (see EMAIL_SETUP.md)
2. Test locally: `npm run dev`
3. Build: `npm run build`
4. Deploy the `dist/` folder to your hosting provider
5. Add environment variables to your hosting platform

