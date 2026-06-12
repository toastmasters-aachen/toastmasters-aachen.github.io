# Codex Instructions

This repository is a prepared blank PHP website starter. Treat the backend shell as already set up and focus future work on the public frontend.

## First-run setup
- Always check `SETUP.md` before starting frontend work.
- If `SETUP.md` says `Status: [ ] Setup wurde erledigt`, ask the user the setup questions, write the answers into `SETUP.md`, then change the status to `Status: [x] Setup wurde erledigt`.
- If `SETUP.md` is already checked, use the filled briefing and do not restart the full questionnaire.
- Ask follow-up questions only when the briefing is missing information that materially changes the implementation.

## What is already prepared
- Apache security and routing rules in `.htaccess`.
- Extensionless PHP routing in `router.php`.
- Neutral configuration in `config/config.php`.
- Shared layout shell in `includes/header.php` and `includes/footer.php`.
- Public placeholder pages in `pages/`.
- Neutral local CSS and JS in `assets/`.
- Placeholder `robots.txt`, `sitemap.xml`, `llms.txt` and `llm.txt`.
- A first-run project questionnaire in `SETUP.md`.

## How to work in this starter
- Keep the existing PHP routing and security structure unless the user explicitly asks to change it.
- Replace placeholder page content with real content for the new website topic.
- Build the actual frontend experience directly in PHP, HTML, CSS and local assets.
- Add images only when the website concept requires them; store them under `assets/`.
- Keep configuration values generic until the user provides real domain, contact and legal details.
- Update `robots.txt`, `sitemap.xml`, `llms.txt` and legal pages before publishing.

## Do not reintroduce
- Real club, organization, member, event or personal data from the source project.
- SQLite databases or exported response HTML files.
- Membership/admin/event microsite code unless the user specifically asks for those features.
- Hardcoded production domains other than the user's final domain.
