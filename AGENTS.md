# Codex Instructions

This repository contains the static Astro website for Toastmasters Aachen e. V. Focus work on the public frontend and keep the production output statically deployable unless the user explicitly requests server functionality.

## Project brief

- Read `SETUP.md` before frontend work. Its completed briefing defines the audience, content, visual direction, and tone.
- Do not restart the setup questionnaire while `SETUP.md` says `Status: [x] Setup wurde erledigt`.
- Ask follow-up questions only when missing information would materially change the implementation.

## Architecture

- Astro runs in static-output mode and builds to `dist/`.
- Routes are file-based in `src/pages/`.
- German is the default language at root-level routes; English equivalents are under `src/pages/en/`.
- Each logical page has one shared UI in `src/views/`. Route files only select the appropriate translation object and view.
- Translated text lives in `src/translations/`. Language-independent values such as image paths, addresses, and external URLs stay in shared markup.
- The mapping between German and English URLs lives in `src/lib/routes.ts` and drives the language switcher and alternate-link metadata.
- Public assets and downloads live under `public/`.

## Current scope

- Keep the site fully static. Do not add SSR, a server adapter, or a Worker entry point unless explicitly requested.
- The contact form is intentionally present and posts to the future `/api/contact` endpoint. Do not remove or rewrite its existing text merely because the endpoint is not implemented yet.
- Do not reintroduce Meetup RSS fetching, writable caches, PHP routing, or runtime next-meeting calculations.
- `/flyer` is a standalone English-only print page; do not add a German or `/en/flyer` duplicate.
- Keep the existing public URLs and visual design unless the user asks to change them.

## Checks

- Run `npm run check` after structural or content changes.
- Run `npm run build` before handing off deployable work.
- Confirm the German and English routes, language switcher counterparts, static assets, 404 page, sitemap, and robots file.
- Preserve legal/contact details and existing translated strings unless the user explicitly requests content changes.
