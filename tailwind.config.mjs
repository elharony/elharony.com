/** @type {import('tailwindcss').Config} */
export default {
  content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#f8f9ff',
          100: '#f0f2ff',
          200: '#e6eaff',
          300: '#d1d9ff',
          400: '#b3bfff',
          500: '#8b9cff',
          600: '#6b7cff',
          700: '#4c2ddb',
          800: '#3212d3',
          900: '#2a0fb8',
          950: '#1a0a7a',
        },
        brand: {
          primary: '#3212d3',
          'primary-light': '#4c2ddb',
          'primary-dark': '#2a0fb8',
        }
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
      typography: {
        DEFAULT: {
          css: {
            maxWidth: 'none',
            color: '#4a4a4a',
            a: {
              color: '#3212d3',
              '&:hover': {
                color: '#2a0fb8',
              },
            },
            'code::before': {
              content: '""',
            },
            'code::after': {
              content: '""',
            },
            h1: {
              color: '#1a1a1a',
              fontWeight: '700',
            },
            h2: {
              color: '#1a1a1a',
              fontWeight: '600',
            },
            h3: {
              color: '#1a1a1a',
              fontWeight: '600',
            },
            h4: {
              color: '#1a1a1a',
              fontWeight: '600',
            },
            strong: {
              color: '#1a1a1a',
            },
          },
        },
      },
      animation: {
        'fade-in-up': 'fadeInUp 0.6s ease-out',
      },
      keyframes: {
        fadeInUp: {
          '0%': {
            opacity: '0',
            transform: 'translateY(30px)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0)',
          },
        },
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
}
