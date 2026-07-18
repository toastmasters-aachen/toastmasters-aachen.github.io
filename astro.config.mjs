import { defineConfig } from "astro/config";
import sitemap from "@astrojs/sitemap";

export default defineConfig({
  site: "https://aachen-toastmasters.de",
  output: "static",
  integrations: [sitemap()],
});
