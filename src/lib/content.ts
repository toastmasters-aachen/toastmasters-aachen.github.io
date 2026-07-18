export type Language = "de" | "en";

export interface PageMetadata {
  title: string;
  description: string;
}

export interface PageContent<Text extends Record<string, string> = Record<string, string>> {
  language: Language;
  metadata: PageMetadata;
  text: Text;
}

export function defineTranslation<Source extends PageContent>(
  _source: Source,
  translation: {
    language: Language;
    metadata: PageMetadata;
    text: { [Key in keyof Source["text"]]: string };
  },
) {
  return translation;
}
