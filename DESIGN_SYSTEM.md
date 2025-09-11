# Design System - Yahya Elharony Portfolio

## Brand Identity

### Logo
- **Monogram**: "YE" in a square with rounded corners
- **Colors**: Primary brand color (#3212d3) with white text
- **Typography**: Inter font family, bold weight
- **Usage**: Consistent across all touchpoints

### Color Palette

#### Primary Colors
- **Brand Primary**: `#3212d3` - Main brand color for CTAs, links, and accents
- **Brand Light**: `#4c2ddb` - Hover states and lighter accents
- **Brand Dark**: `#2a0fb8` - Active states and darker accents

#### Neutral Colors
- **Text Primary**: `#1a1a1a` - Main text color
- **Text Secondary**: `#4a4a4a` - Secondary text and descriptions
- **Text Muted**: `#6b7280` - Muted text and captions
- **Background Primary**: `#ffffff` - Main background
- **Background Secondary**: `#fafafa` - Section backgrounds
- **Border**: `#e5e7eb` - Borders and dividers

## Typography

### Font Family
- **Primary**: Inter (Google Fonts)
- **Fallback**: system-ui, sans-serif
- **Weights**: 400 (regular), 500 (medium), 600 (semibold), 700 (bold)

### Scale
- **H1**: 3.5rem (56px) - Hero headlines
- **H2**: 2.5rem (40px) - Section headlines
- **H3**: 1.875rem (30px) - Subsection headlines
- **Body**: 1rem (16px) - Main content
- **Small**: 0.875rem (14px) - Captions and metadata

## Components

### Buttons

#### Primary Button
```css
.btn-primary {
  background: #3212d3;
  color: white;
  padding: 12px 24px;
  border-radius: 8px;
  font-weight: 500;
  transition: all 0.2s ease;
}
```

#### Secondary Button
```css
.btn-secondary {
  background: white;
  color: #3212d3;
  border: 1px solid #3212d3;
  padding: 12px 24px;
  border-radius: 8px;
  font-weight: 500;
  transition: all 0.2s ease;
}
```

### Cards

#### Standard Card
```css
.card {
  background: white;
  border: 1px solid #e5e7eb;
  border-radius: 12px;
  padding: 24px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.2s ease;
}
```

#### Elevated Card
```css
.card-elevated {
  background: white;
  border: 1px solid #e5e7eb;
  border-radius: 12px;
  padding: 32px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}
```

### Form Elements

#### Input Fields
```css
.form-input {
  width: 100%;
  padding: 12px 16px;
  border: 1px solid #e5e7eb;
  border-radius: 8px;
  transition: all 0.2s ease;
  focus: ring-2 ring-#3212d3;
}
```

## Layout Principles

### Spacing
- **Section Padding**: 80px (desktop), 48px (mobile)
- **Container Max Width**: 1200px
- **Grid Gaps**: 32px (desktop), 24px (mobile)
- **Component Spacing**: 16px, 24px, 32px, 48px

### Grid System
- **Desktop**: 12-column grid
- **Tablet**: 8-column grid
- **Mobile**: 4-column grid
- **Breakpoints**: 768px, 1024px, 1280px

## Animation & Transitions

### Duration
- **Fast**: 200ms - Hover states, focus states
- **Medium**: 300ms - Card interactions, form transitions
- **Slow**: 600ms - Page transitions, hero animations

### Easing
- **Default**: ease-out
- **Hover**: ease-in-out
- **Focus**: ease-out

## Responsive Design

### Mobile First Approach
1. Design for mobile (320px+)
2. Enhance for tablet (768px+)
3. Optimize for desktop (1024px+)
4. Polish for large screens (1280px+)

### Key Breakpoints
- **Mobile**: 320px - 767px
- **Tablet**: 768px - 1023px
- **Desktop**: 1024px - 1279px
- **Large**: 1280px+

## Accessibility

### Color Contrast
- **AA Compliance**: All text meets WCAG 2.1 AA standards
- **Focus States**: Clear focus indicators on all interactive elements
- **Color Independence**: Information not conveyed by color alone

### Typography
- **Line Height**: 1.6 for body text, 1.2 for headings
- **Font Size**: Minimum 16px for body text
- **Letter Spacing**: Optimized for readability

## Professional Positioning

### Tone & Voice
- **Authoritative**: Confident in expertise without being arrogant
- **Approachable**: Professional yet personable
- **Technical**: Demonstrates deep knowledge without overwhelming
- **Strategic**: Focuses on business outcomes and value

### Content Strategy
- **Problem-Solution**: Addresses real engineering challenges
- **Case Studies**: Concrete examples of success
- **Thought Leadership**: Forward-thinking insights
- **Practical Value**: Actionable advice and frameworks

## Implementation Notes

### Performance
- **Font Loading**: Preconnect to Google Fonts
- **CSS**: Tailwind CSS with custom components
- **Images**: Optimized and lazy-loaded
- **Animations**: Hardware-accelerated transforms

### SEO Optimization
- **Semantic HTML**: Proper heading hierarchy
- **Meta Tags**: Comprehensive Open Graph and Twitter Cards
- **Structured Data**: JSON-LD for blog posts
- **Performance**: Core Web Vitals optimized

This design system creates a professional, trustworthy, and technically sophisticated presence that positions Yahya as a senior engineering leader while remaining approachable and engaging.
