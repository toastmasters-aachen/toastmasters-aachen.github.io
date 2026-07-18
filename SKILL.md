---
name: toastmasters-aachen-astro-site
description: Use this project guide when maintaining the static bilingual Astro website for Toastmasters Aachen.
---

# Toastmasters Aachen Astro Website

## Workflow

1. Read `AGENTS.md` and the completed brief in `SETUP.md`.
2. Identify the shared view in `src/views/` and its German/English modules in `src/translations/`.
3. Keep route wrappers in `src/pages/` minimal and preserve file-based routing.
4. Put translated text in the relevant translation modules and invariant values directly in shared markup.
5. Update `src/lib/routes.ts` when adding a translated route so the language switcher and SEO counterparts remain correct.
6. Store public assets under `public/assets/` and downloads under `public/downloads/`.
7. Run `npm run check` and `npm run build` before handoff.

## Guardrails

- Keep Astro output static unless server-side behavior is explicitly requested.
- Do not duplicate a page UI for each language.
- Do not add client-side language state or local storage; each language has a static URL.
- Do not reintroduce PHP, Meetup fetching, or a writable event cache.
- Keep the complete contact form and its current strings. `/api/contact` is intentionally reserved for a later backend phase.
- Keep `/flyer` as one standalone English page.

## Acceptance checks

- All root German and `/en/` English routes build.
- Each language selector points to the matching translated page.
- `/flyer`, `/404.html`, `robots.txt`, `llms.txt`, and the generated sitemap are present in `dist/`.
- Static assets load from `/assets/` and membership PDFs from `/downloads/`.
- `astro check` reports no errors, warnings, or hints.
