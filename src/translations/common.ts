import type { Language } from "../lib/content";

export interface CommonContent {
  language: Language;
  tagline: string;
  meetingTime: string;
  meetingLanguages: string;
  menu: string;
  mainNavigation: string;
  navigation: {
    home: string;
    aboutToastmasters: string;
    about: string;
    membership: string;
    contact: string;
  };
  socialChannels: string;
  meetupGroup: string;
  linkedInProfile: string;
  instagramProfile: string;
  legalInformation: string;
  imprint: string;
  privacy: string;
  close: string;
}

const de: CommonContent = {
  language: "de",
  tagline: "Dein Rhetorik-Club in Aachen",
  meetingTime: "Jeden Dienstag um 19:00 Uhr",
  meetingLanguages: "Deutsch & Englisch im wöchentlichen Wechsel",
  menu: "Menü",
  mainNavigation: "Hauptnavigation",
  navigation: {
    home: "Home",
    aboutToastmasters: "Über Toastmasters",
    about: "Über uns",
    membership: "Mitglied werden",
    contact: "Kontakt",
  },
  socialChannels: "Social Media Kanäle",
  meetupGroup: "Meetup Gruppe",
  linkedInProfile: "LinkedIn Profil",
  instagramProfile: "Instagram Profil",
  legalInformation: "Rechtliches",
  imprint: "Impressum",
  privacy: "Datenschutz",
  close: "Schließen",
};

const en: CommonContent = {
  language: "en",
  tagline: "Your Public Speaking Club in Aachen",
  meetingTime: "Every Tuesday at 7:00 PM",
  meetingLanguages: "German & English, alternating weekly",
  menu: "Menu",
  mainNavigation: "Main Navigation",
  navigation: {
    home: "Home",
    aboutToastmasters: "About Toastmasters",
    about: "About us",
    membership: "Become a Member",
    contact: "Contact",
  },
  socialChannels: "Social Media Channels",
  meetupGroup: "Meetup Group",
  linkedInProfile: "LinkedIn Profile",
  instagramProfile: "Instagram Profile",
  legalInformation: "Legal Information",
  imprint: "Imprint",
  privacy: "Privacy Policy",
  close: "Close",
};

export const commonContent: Record<Language, CommonContent> = { de, en };
