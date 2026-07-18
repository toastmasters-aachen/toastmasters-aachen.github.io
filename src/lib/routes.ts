import type { Language } from "./content";

export const localizedRoutes = {
  home: { de: "/", en: "/en/" },
  aboutToastmasters: { de: "/ueber-toastmasters", en: "/en/about-toastmasters" },
  about: { de: "/ueber-uns", en: "/en/about-us" },
  membership: { de: "/mitglied-werden", en: "/en/membership" },
  contact: { de: "/kontakt", en: "/en/contact" },
  privacy: { de: "/datenschutz", en: "/en/privacy" },
  imprint: { de: "/impressum", en: "/en/imprint" },
} as const;

export type PageId = keyof typeof localizedRoutes;

export function routeFor(page: PageId, language: Language): string {
  return localizedRoutes[page][language];
}

export function alternateLanguage(language: Language): Language {
  return language === "de" ? "en" : "de";
}
