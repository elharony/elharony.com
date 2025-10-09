// @ts-check
import { defineConfig } from 'astro/config';
import netlify from '@astrojs/netlify/functions';
import tailwind from '@astrojs/tailwind';
import sitemap from '@astrojs/sitemap';

// https://astro.build/config
export default defineConfig({
  adapter: netlify(),
  output: 'server',
  site: 'https://elharony.com',
  integrations: [
    tailwind(),
    sitemap()
  ],
  markdown: {
    syntaxHighlight: 'prism',
  },
});
