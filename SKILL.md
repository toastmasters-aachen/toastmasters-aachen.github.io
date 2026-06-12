---
name: blank-php-website-starter
description: Use this skill when turning this prepared blank PHP starter into a real public website.
---

# Blank PHP Website Starter

This folder is a workshop-ready website skeleton. The technical setup is mostly complete; the missing work is the public-facing content, visual layout, CSS and assets.

## Workflow
1. Read `AGENTS.md` and `SETUP.md` first.
2. If `SETUP.md` is not marked as done, ask the setup questions, save the answers in `SETUP.md`, and mark `Status: [x] Setup wurde erledigt`.
3. Read `router.php`, `config/config.php`, `includes/header.php`, `includes/footer.php` and the relevant file in `pages/`.
4. Confirm only missing details that are not already answered in `SETUP.md`.
5. Replace placeholder page text with specific content.
6. Build the frontend in `pages/`, shared includes and `assets/css/style.css`.
7. Add real image assets under `assets/` only when they are needed.
8. Update `robots.txt`, `sitemap.xml`, `llms.txt`, legal pages and config values before launch.

## Guardrails
- Preserve routing, security headers and internal-folder blocking unless there is a clear technical reason to change them.
- Do not add databases, member areas, admin areas or event-registration code unless the user explicitly asks for them.
- Do not copy real content, logos, event links, legal text or personal data from another website.
- Keep the site locally runnable with `php -S localhost:8000 router.php`.
- Do not repeat the full setup questionnaire after `SETUP.md` is marked as done.

## Acceptance checks
- Public routes load: `/`, `/home`, `/ueber-uns`, `/kontakt`, `/datenschutz`, `/impressum`.
- Static assets load from `/assets/`.
- `robots.txt`, `sitemap.xml`, `llms.txt` and `llm.txt` are present and updated.
- `SETUP.md` is filled in and marked done once the initial briefing has happened.
- PHP syntax checks pass.
- No source-project-specific content remains.
