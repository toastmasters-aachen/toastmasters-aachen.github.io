# Toastmasters Aachen website

Static bilingual website for Toastmasters Aachen e. V., built with Astro. German is the default language at root-level routes; English pages live below `/en/`. Each logical page has one shared Astro view and separate translation data.

## Local development

Requires Node.js 22 or newer.

```bash
npm install
npm run dev
```

Astro serves the site at `http://localhost:4321` by default.

## Checks and production build

```bash
npm run check
npm run build
npm run preview
```

The static production site is written to `dist/`.

## Project structure

- `src/pages/`: file-based German and English routes, plus the standalone flyer.
- `src/views/`: one shared UI implementation per logical page.
- `src/translations/`: German and English page text and shared navigation text.
- `src/components/`: shared header, footer, and language switcher.
- `src/layouts/BaseLayout.astro`: metadata, SEO, structured data, and shared page shell.
- `src/lib/routes.ts`: mappings between each page's German and English URL.
- `public/assets/`: styles, scripts, fonts, icons, and images copied unchanged from the previous site.
- `public/downloads/`: membership application PDFs.

## Cloudflare deployment

The initial release is fully static: it has no Astro server adapter and no Worker entry point. `wrangler.jsonc` configures Cloudflare Workers Static Assets to serve the generated `dist/` directory.

Before the first deployment, copy `.env.example` to `.env` (that is, remove the `.example` suffix from the local copy):

```bash
cp .env.example .env
```

Then replace `<your_cloudflare_account_id>` in `.env` with the account ID for the Cloudflare account that should receive the deployment. You can find the account ID in the Cloudflare dashboard.

Deploy from the project root with:

```bash
npm run deploy
```

This runs the checked production build and then deploys it with Wrangler. On the first deployment, Wrangler downloads through `npx` if needed and asks you to sign in to Cloudflare. It creates or updates the Worker named `toastmasters-aachen` and prints its `workers.dev` URL.

After the first deployment, add `aachen-toastmasters.de` under the Worker's **Settings > Domains & Routes > Add > Custom domain**. The domain must be active in the same Cloudflare account. Subsequent deployments use the same `npm run deploy` command.

The contact form is already present and posts to `/api/contact`, but that endpoint intentionally does not exist yet. A small Cloudflare Worker can implement it later without changing the pages or translations.

The live domain is not changed by this branch.
