# mbsTECH — Dark Modern WordPress Theme

A dark-themed WordPress theme built for speed. No page builders, no drag and drop, no bloat. Just clean PHP, HTML, CSS, JavaScript, and Bootstrap 5.3.

> **Public demo note:** Copy, CTAs, buttons, portfolio items, timeline entries, and contact links in this repo are placeholders (`hello@example.com`, `#` socials, lorem labels). Replace with your own content before going live.

## Why This Theme?

Built for developers who want a fast, modern WordPress theme without bloat — aimed at a strong Google PageSpeed score with a small, maintainable codebase.

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
- **[page-work.php](page-work.php)** - Work / portfolio template (demo cards)
- **[page-skillz.php](page-skillz.php)** - Skills grid by category
- **[page-life.php](page-life.php)** - Life / timeline template (demo timeline)
- **[single.php](single.php)** / **[archive.php](archive.php)** / **[404.php](404.php)** - Standard blog templates

### Helper Functions

- **`mbstech_reading_time()`** - Calculates post reading time (200 words per minute)
- **`mbstech_post_categories()`** - Displays category badges
- **`mbstech_post_meta()`** - Shows post date, author, and reading time
- **`mbstech_pagination()`** - Bootstrap-styled pagination with touch swipe
- **`mbstech_excerpt_length()`** - Sets excerpt to 30 words

## The Philosophy

- **Performance matters** - Every kilobyte counts
- **Clean code is maintainable code**
- **Design should enhance content** - Not compete with it
- **Accessibility matters** - Semantic HTML, proper contrast ratios

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

**Version 1.1.0** 2026 @ 20. Feb
- First pass at generic placeholder content and demo portfolio data
- Replaced hardcoded URLs with dynamic WordPress functions
- CSS cleanup ahead of a public repository release

**Version 1.2.0** 2026 @ 18. Sep
- Removed green glow/pulse effects and hover `translateY` lift for a calmer UI
- Tech stack grid keeps 3 columns on mobile
- Skills page: added Zed; removed Mistral
- Footer: Twitter icon next to GitHub
- Shared CTA accent-bar styling; Life “fun years” stamp-style card
- Work toolbox full-width band; Skills alternating full-width bands
- Timeline card width and Life project-row styling tweaks
- CSS cleanup (unused hero/timeline classes, leftover motion rules)

**Version 1.2.1** 2026 @ 19. Sep
- Homepage tech grid: CSS3 tile (aligned with Skills)
- Homepage code snippets shortened; removed snippet scrollbars

**Version 1.2.2** 2026 @ 19. Sep
- Hero `WebDeveloper` preview and services tab code cards tightened
- Footer: 🄯 + “All rights reversed. Steal freely 🙂”
- Skills: Rust, LibreOffice, Qwen, ownCloud, Nextcloud, Synology, nano, Vim

**Version 1.3.0** 2026 @ 19. Sep
- Public demo release: theme copy, CTAs, and buttons use placeholder / lorem text
- Portfolio and Life timeline use demo labels and `#` links (no live client sites)
- Contact email placeholder `hello@example.com`; social links use `#`


## Get Help

- **Name**: Michael Bay Sørensen
- **Website**: [mbsTECH.dk](https://mbstech.dk)
- **Twitter**: [@baysorensen](https://twitter.com/baysorensen)

## License

GNU General Public License v2 or later
[http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

---

A lightweight, fast WordPress theme built for developers who value speed and clean code.
