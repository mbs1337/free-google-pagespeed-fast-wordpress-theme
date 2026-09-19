# Google PageSpeed 100/100 WordPress Theme

A dark-themed WordPress theme built for speed. No page builders, no drag and drop, no bloat. Just clean PHP, HTML, CSS, JavaScript, and Bootstrap 5.3.

![Hero Screenshot](https://mbstech.dk/wp-content/uploads/2025/10/pagespeed-1024x927.png)


## Why This Theme?

After 25+ years in web development, I got tired of bloated themes with features I'll never use. So I built this - a fast, modern WordPress theme that scores **100/100 on Google PageSpeed**.

No fancy page builders. No drag and drop. Just code that works.

## What You Get

- **Dark UI** that looks modern without overwhelming your content
- **Bootstrap 5.3** foundation for responsive design that just works
- **Custom page templates** for Work, Skills, and Life pages
- **Blog support** with categories, archives, and reading time estimates
- **Aurora logo animation** for that subtle personality touch
- **Custom scrollbars** and text selection styling

## The Color Palette

Built around a vibrant green that pops against dark backgrounds:

- **Primary Green**: `#2e981b` (the star of the show)
- **Dark Background**: `#1a1a1a`
- **Darker Background**: `#0d0d0d` (for depth)
- **Light Text**: `#e6e6e6`
- **Muted Text**: `#a0a0a0`
- **Card Background**: `#1f1f1f`
- **Border Color**: `#2a2a2a`

## Getting Started

1. Upload to `/wp-content/themes/mbstech`
2. Go to Appearance → Themes in WordPress admin
3. Activate "mbsTECH"
4. Done

## What's Inside

### Template Files

- **[style.css](style.css)** - All the styling magic. CSS variables for easy customization, dark theme, custom scrollbars, responsive design
- **[functions.php](functions.php)** - Theme setup, menus, post meta, reading time calculation
- **[header.php](header.php)** - Sticky navigation with Bootstrap navbar and Aurora logo animation
- **[footer.php](footer.php)** - Social links and footer content
- **[index.php](index.php)** - Homepage with hero section, services tabs, tech stack slider, blog posts, code snippets, and timeline
- **[single.php](single.php)** - Clean blog post layout
- **[archive.php](archive.php)** - Category and date archives
- **[page-work.php](page-work.php)** - Portfolio showcase template
- **[page-skillz.php](page-skillz.php)** - Skills display with icons and ratings
- **[page-life.php](page-life.php)** - Personal interests and project timeline
- **[page-no-header-footer.php](page-no-header-footer.php)** - Bare template for demos or embeds with no header and footer

### Custom Templates

Want to use a custom template?

1. Create a new page in WordPress
2. In the page editor, find the "Template" dropdown
3. Select your template (Work Page, Skills Page, Life Page, etc.)
4. Add content and publish

### The Homepage Experience

The [index.php](index.php) homepage isn't just a blog roll - it's a full experience:

- Hero section with animated text and code preview card
- Tabbed services covering WordPress Development, Web Applications, and Support
- Tech stack slider showing skills across Frontend, Backend, CMS, and DevOps
- Recent blog posts (first post featured, then 6 more in a grid)
- Code snippet cards with PHP, JavaScript, and SQL examples
- Timeline from 1999 to 2025
- CTA section with Bootstrap popover for contact

## Making It Yours

### Change the Colors

Edit the CSS variables in [style.css](style.css):

```css
:root {
  --primary-green: #2e981b;  /* Change this to your brand color */
  --dark-bg: #1a1a1a;
  --darker-bg: #0d0d0d;
  --light-text: #e6e6e6;
  --muted-text: #a0a0a0;
  --card-bg: #1f1f1f;
  --border-color: #2a2a2a;
}
```

### Add Your Logo

1. Appearance → Customize
2. Site Identity
3. Upload logo
4. Save & Publish

### Set Up Navigation

1. Appearance → Menus
2. Create menu
3. Add items
4. Assign to "Primary Menu" location
5. Save

## Theme Functions

Built-in PHP functions you get out of the box:

- **`mbstech_reading_time()`** - Calculates post reading time (200 words per minute)
- **`mbstech_post_categories()`** - Displays category badges
- **`mbstech_post_meta()`** - Shows post date, author, and reading time
- **`mbstech_pagination()`** - Bootstrap-styled pagination with touch swipe
- **`mbstech_excerpt_length()`** - Sets excerpt to 30 words
- **`Bootstrap_Nav_Walker`** - Custom walker for Bootstrap 5 navigation

## Performance Features

What makes this theme fast:

- Minimal dependencies (just Bootstrap via CDN)
- Clean code structure
- Optimized asset loading
- 100/100 on Google PageSpeed
- No database bloat
- No page builder overhead
- Custom scrollbar styling that doesn't slow things down

![PageSpeed Score](https://mbstech.dk/wp-content/uploads/2025/10/pagespeed-1024x927.png)


## Browser Support

Works on all modern browsers:

- Chrome
- Firefox
- Safari
- Edge

## Dual Purpose Use

Here's something cool - you can use this as a full WordPress theme, OR extract the HTML/CSS/Bootstrap structure and use it as a static site. The templates are clean enough that they work both ways.

## The Philosophy

This theme is built on principles I care about after 25+ years in web dev:

- **Performance matters** - Every kilobyte counts
- **Clean code is maintainable code** - Future me will thank present me
- **Design should enhance content** - Not compete with it
- **Accessibility matters** - Semantic HTML, proper contrast ratios

## Try It Live

See it in action at [mbstech.dk](https://mbstech.dk)

## What I Learned Building This

It's easy to add features, but harder to know when to stop. I wanted something that felt complete without being bloated. The dark theme was deliberate - I spend a lot of time looking at screens and prefer interfaces that are easy on the eyes.

Plus, after 25+ years of web development, you accumulate opinions about how things should work. This theme is those opinions in code form.

## Technical Details

### Motion & effects (current)

Glow/pulse effects and hover lift (`translateY`) have been **removed** for a calmer UI.

What remains:
- Border color changes on hover (no vertical movement)
- Aurora logo text animation (optional; can be disabled in CSS)
- Tab / fade transitions where needed for UI state

### Custom Scrollbars

Styled for both Webkit and Firefox browsers with the primary green color.

### Text Selection Styling
Selected text gets highlighted in the primary green to reinforce the brand.

### Interactive Elements
Interactive elements use simple color/border transitions on hover (no lift or glow).

### Tech Stack Display
Skills organized into clear categories:
- Web Development (HTML5, CSS3, JavaScript, PHP, MySQL, etc.)
- CMS & E-commerce (WordPress, WooCommerce, PrestaShop, etc.)
- Design Tools (GIMP, Figma, Photoshop, etc.)
- LLM Tools (Ollama, Claude, ChatGPT, etc.)
- System & Infrastructure (Linux, Docker, Bash, etc.)
- Development Tools (VS Code, Git, npm, etc.)
- Optimization (Speed, Security, Troubleshooting)

## Credits

- **Design**: Custom dark UI
- **Framework**: Bootstrap 5.3
- **Author**: Michael Bay Sørensen
- **Website**: [mbstech.dk](https://mbstech.dk)
- **GitHub**: [@mbs1337](https://github.com/mbs1337)
- **Twitter**: [@baysorensen](https://twitter.com/baysorensen)

## Changelog

**Version 0.9.0** 2025 @ 5. Oct
- Initial release
- Dark theme with modern UI
- Bootstrap 5.3 integration
- Custom page templates (Work, Skills, Life)
- Responsive navigation with mobile menu
- Post categories and meta display
- Reading time calculation
- Aurora logo animation
- Custom scrollbars
- Social media integration
- 100/100 Google PageSpeed score

**Version 1.1.0** 2026 @ 20. Feb
- Replaced all personal content with Lorem Ipsum placeholder text
- Updated all buttons and headings with generic text
- CSS improvements and cleanup
- Prepared theme for WordPress repository submission
- Replaced hardcoded URLs with dynamic WordPress functions
- Simplified portfolio section with demo data


**Version 1.2.0** 2026 @ 18. Sep
- Removed green glow/pulse effects (timeline markers, CTA card, skill/button glows)
- Removed hover `translateY` lift on cards, buttons, timeline, tech items, etc.
- Tech stack grid keeps **3 columns** on mobile (smaller card padding/gap)
- Homepage tech cards: smaller title + star size on mobile so names like WooCommerce fit
- Skills page: added **Zed** under Development Tools (next to Cursor)
- Skills page: removed **Mistral** (and `lechat-icon` assets)
- Footer: added Twitter icon next to GitHub (`https://twitter.com/baysorensen`)
- CTA: accent-bar instead of green gradient fill (shared with Work/Skills CTAs)
- Life “The fun years” card: dashed green border + slight rotate (stamp style); not accent-bar / fill
- Timeline cards: narrower on desktop (`max-width: 400px`) so they don’t stretch empty
- Life project rows: flat border instead of green rgba wash
- Life quote: uses shared `cta-section` accent-bar (same as Work/Skills); removed `quote-section` wrapper
- Work “My Toolbox”: full-width darker band (`.toolbox-section`, same bg as Life timeline); `7rem` vertical padding; intro block above uses `pb-5 mb-3`
- Work CTA (“Ready to Build…”): moved **inside** the toolbox black band (below the tool grid)
- Skills: alternating full-width bands - odd `.skills-band` (darker/black), even `.skills-plain` (page bg); starts with **Web Development** as black
- Skills section spacing: `padding-top: 5rem` / `padding-bottom: 7rem` on `.skills-band` and `.skills-plain`; category `h2` uses `mb-5 pb-5` for more space above the skill cards; intro uses `pb-5 mb-3`
- CSS cleanup: removed unused `.hero-section`, `.timeline-section-fullwidth`, leftover glow/pulse/translateY; moved Life timeline CSS into `style.css`
- Fixed Yoast SEO indexable mojibake (ÆØÅ in document title / meta)
- README restored and changelog continued

**Version 1.2.1** 2026 @ 19. Sep
- Homepage copy rewrite (human voice): hero, services bullets, section titles, CTA - unique headlines per page (no reused CTAs)
- Homepage timeline rewritten: years/story updated (incl. webshops ~2014, servers/maintenance ~2023, AI/Web3 ~2026); no SysOps buzzword; no emdash
- Homepage frontend tech grid: JavaScript tile replaced with **CSS3** (same icon/rating as Skills)
- Homepage code snippets shortened (PHP / JS / SQL) - modern, safer examples; removed snippet scrollbars (`max-height` / overflow scroll)

**Version 1.2.2** 2026 @ 19. Sep
- Hero code preview (`WebDeveloper`): added missing `$creativity` property; use `.` concatenation instead of `+`
- Services tab code cards: shortened WordPress/Apps snippets so they fit without a tall box or forced scroll
- WordPress tab: compact valid `add_action('init', …)` + `register_post_type` example
- Apps tab: compact Express/`pg` route example
- Work CTA primary button: “Let's build something” (sentence case); secondary “Home”
- Footer: replaced © with 🄯 + “All rights reversed. Steal freely 🙂”
- Skills CTA button: “Let's figure it out” (unique vs homepage/work)
- Replaced em dashes (—) with hyphen (-) in Life page copy and README changelog notes
- Skills: added **Rust** (★★☆☆☆) under Web Development (`rust-icon.png` / `.webp`, 32×32; official logo, white on transparent)
- Skills: added **LibreOffice** (★★★☆☆) under Platforms & Applications, between Sailfish OS and Office 365
- Skills: added **Qwen** (★★☆☆☆) under AI & LLMs (last in section; white on transparent icon)
- Skills: added **ownCloud**, **Nextcloud**, **Synology** (★★★★☆) under System & Infrastructure
- Skills: added **nano** (★★★★★) and **Vim** (★★☆☆☆) under Development Tools
- `.htaccess`: WebP rewrite restored - serve `.png.webp` / `.webp` when `Accept: image/webp` and file exists; otherwise PNG/JPEG fallback

## Get Help

- **Name**: Michael Bay Sørensen
- **Website**: [mbsTECH.dk](https://mbstech.dk)
- **Twitter**: [@baysorensen](https://twitter.com/baysorensen)

## License

GNU General Public License v2 or later
[http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

---

A lightweight, fast WordPress theme built for developers who value speed and clean code.
