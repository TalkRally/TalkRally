# TalkRally WordPress Theme

An editorial WordPress theme designed for TalkRally.com, with a focus on content readability, community engagement, and future scalability toward a community editorial forum.

## Overview

TalkRally is a modern, performance-optimized WordPress theme built for editorial websites. It prioritizes:
- **Readability** — Clean typography and content-first design
- **Performance** — Optimized assets and efficient database queries
- **Accessibility** — WCAG 2.1 Level AA compliance
- **SEO** — Structured data and editorial best practices
- **Community-Ready** — Foundation for future forum features

## Features

- Responsive design for all devices
- Editorial-focused homepage and archive layouts
- Author profiles and bylines
- Advanced comment system
- Built-in schema.org markup for articles
- Customizer support for theme options
- Dark mode support
- Accessibility-ready

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Modern web browser

## Installation

### From GitHub
1. Clone or download this repository
2. Extract to your WordPress `/wp-content/themes/` directory
3. Rename folder to `talkrally`
4. Go to WordPress Admin → Appearance → Themes
5. Activate "TalkRally"

### Configuration
1. Visit Customizer (Appearance → Customize)
2. Configure site identity, colors, and layout options
3. Set up your homepage and blog archive pages

## Theme Structure

```
talkrally/
├── README.md                 # This file
├── LICENSE                   # GPL v2.0 License
├── style.css                 # Main theme stylesheet
├── functions.php             # Core theme functionality
├── index.php                 # Fallback template
├── header.php                # Theme header template
├── footer.php                # Theme footer template
├── page.php                  # Single page template
├── single.php                # Single post template
├── archive.php               # Archive page template
├── search.php                # Search results template
├── 404.php                   # 404 error template
├── sidebar.php               # Sidebar template
├── screenshot.png            # Theme preview image
├── css/                      # Additional stylesheets
├── js/                       # JavaScript files
├── images/                   # Theme images and icons
├── template-parts/           # Reusable template components
└── inc/                      # Helper files and customizer
```

## Audit Plan

This theme is undergoing a comprehensive audit across multiple phases. See [docs/AUDIT.md](docs/AUDIT.md) for detailed information on audit phases and progress.

### Audit Phases:
1. **Phase 1: Foundation & Setup** — Structure, standards, basic security
2. **Phase 2: Critical Performance & Security** — Speed, vulnerabilities, optimization
3. **Phase 3: Accessibility & UX** — WCAG compliance, usability
4. **Phase 4: SEO & Content Optimization** — Search visibility, structured data
5. **Phase 5: Editorial-Specific Features** — Community prep, content workflows
6. **Phase 6: Code Quality & Maintainability** — Standards, documentation

## License

TalkRally is licensed under the GNU General Public License v2 or later.

**Copyright © 01/01/2026 Don Landry**

This theme is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

TalkRally is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this theme. If not, see https://www.gnu.org/licenses/gpl-2.0.html.

## Contributing

We welcome bug reports, feature suggestions, and pull requests! Please:
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request with a clear description

## Support

For issues, feature requests, or questions, please open a GitHub Issue.

## Credits

**Theme Developer:** Don Landry  
**Website:** https://talkrally.com

## Changelog

### Version 1.0.0 (Initial Release)
- Initial theme release
- Phase 1 audit in progress

---

**Status:** 🔄 Under Active Audit — Phase 1 Foundation & Setup
