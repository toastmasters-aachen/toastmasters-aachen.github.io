# Blanko Website Starter

Diese Vorlage ist fuer einen KI-Workshop vorbereitet. Routing, gemeinsame Includes, Sicherheitsregeln und neutrale Platzhalterseiten sind vorhanden; Inhalte, Bilder und Design sollen spaeter mit KI entwickelt werden.

## Lokal starten

```bash
php -S localhost:8000 router.php
```

Dann im Browser oeffnen:

```text
http://localhost:8000
```

## Wichtige Dateien

- `SETUP.md`: erster Fragebogen fuer Ziel, Zielgruppe, Design, Tonalitaet, Inhalte und Funktionen.
- `router.php`: leitet saubere URLs auf PHP-Seiten weiter.
- `.htaccess`: Apache-Sicherheit, Redirects, Cache-Regeln und Routing.
- `config/config.php`: Name, URL, Kontakt und Orts-Platzhalter.
- `includes/header.php` und `includes/footer.php`: gemeinsamer Seitenrahmen.
- `pages/`: oeffentliche Platzhalterseiten.
- `assets/css/style.css`: neutrales Starter-CSS.
- `AGENTS.md`: automatische Anleitung fuer Codex.
- `SKILL.md`: Workshop-Skill fuer spaetere KI-Agenten.

## Erster KI-Start

Wenn ein Agent diese Vorlage zum ersten Mal bearbeitet, soll er zuerst `SETUP.md` lesen. Dort steht ein kurzer Fragebogen fuer Zweck, Zielgruppe, Inhalte, Designrichtung, Tonalitaet, Funktionen und vorhandenes Material.

Nach dem Gespraech traegt der Agent die Antworten in `SETUP.md` ein und setzt oben den Status auf:

```text
Status: [x] Setup wurde erledigt
```

Danach soll ein spaeterer Agent das gespeicherte Briefing nutzen und nicht jedes Mal dieselben Startfragen erneut stellen.

## Vor dem Veroeffentlichen

- `https://example.com` in `robots.txt` und `sitemap.xml` ersetzen.
- Werte in `config/config.php` anpassen.
- Datenschutz und Impressum mit echten, passenden Angaben ersetzen.
- Eigene Texte, Bilder und CSS ergaenzen.
