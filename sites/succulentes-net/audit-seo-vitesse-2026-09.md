# Audit SEO et vitesse — succulentes.net (28 septembre 2026)

Mesures faites à partir des pages réellement servies (HTML, feuilles de style, scripts, images),
de l'outil d'audit du Pont MCP (300 contenus les plus récents) et des plans de site Rank Math.
Google PageSpeed Insights n'a pas pu être utilisé (quota de l'API épuisé) : pas de score Lighthouse
ni de temps de réponse serveur mesuré. À compléter avec https://pagespeed.web.dev/.

## Synthèse

| Priorité | Constat | Impact |
|---|---|---|
| 1 | `robots.txt` sans ligne `User-agent` ni `Sitemap` | Règles ignorées par Google, sitemap non déclaré |
| 1 | Aucune meta description sur les fiches (296 contenus sur 300 analysés) | Extraits Google choisis au hasard, taux de clic plus faible |
| 1 | Diaporama de l'accueil : 14 photos (≈ 6,6 Mo) téléchargées dès l'ouverture | Accueil très lourd sur mobile |
| 2 | Ancien logo (115 Ko) toujours téléchargé en priorité haute sur chaque page, puis masqué | Ralentit l'affichage de toutes les pages |
| 2 | Google Analytics, Brevo et WonderPush chargés sans consentement | Non conforme CNIL/RGPD + scripts tiers lourds |
| 3 | 106 contenus sur 300 sans intertitre H2, 30 sans lien interne | Lisibilité et maillage interne |
| 3 | Accueil : pas d'image de partage (og:image), balisage « Article » | Aperçu pauvre sur les réseaux sociaux |
| 3 | Espagnol : 85 articles tous en « Non classé » | Pas de rubriques indexables |

## Ce qui va bien

- Balises `title` propres (« Agave parryi parryi - Succulentes »), un seul H1 par page.
- Canonique présente, `hreflang` fr / it / en / es corrects (Polylang).
- Plan du site Rank Math complet : 2 177 pages (fr 862, en 650, it 341, es 324).
- Données structurées : WebSite, WebPage, Article, BreadcrumbList (fil d'Ariane).
- Pages indexables (`index, follow`, `max-image-preview:large`).
- Images de contenu avec `srcset` (tailles adaptées à l'écran).

## SEO — détail

### robots.txt (à corriger en priorité)

Contenu actuel :

```
Disallow: /wp-admin/admin-ajax.php
Disallow: /*/feed/
Disallow: /feed/
Disallow: /wp-json/
```

Sans `User-agent`, ces lignes ne s'appliquent à aucun robot. De plus, bloquer `admin-ajax.php` et
`/wp-json/` peut empêcher Google d'afficher correctement certaines pages. Proposition
(Rank Math › Réglages généraux › Modifier robots.txt) :

```
User-agent: *
Disallow: /wp-admin/
Allow: /wp-admin/admin-ajax.php

Sitemap: https://succulentes.net/sitemap_index.xml
```

### Meta descriptions

Sur les 300 contenus analysés, 4 seulement ont une description (Cycas diannanensis, Dracaena draco,
Dracaena ajgal ×2). Les fiches servies n'ont aucune balise `<meta name="description">`.
- Solution rapide : Rank Math › Titres & méta › Pages / Articles › description par défaut = `%excerpt%`.
- Solution fine : descriptions rédigées pour les pages les plus visitées (accueils, familles, genres).

### Structure des contenus

- 106 / 300 sans intertitre H2 (surtout des fiches espèces courtes, en espagnol).
- 30 / 300 sans lien interne (dont les nouvelles pages Jardins et Campus).
- 7 contenus courts (< 300 mots) : Jardins et Campus dans les 4 langues, à développer.
- Échantillon analysé : es 177, it 50, en 38, fr 35 (les 300 plus récents).

### Divers

- Accueil : pas d'`og:image` (partages Facebook / WhatsApp sans image) ; schéma « Article » au lieu de « WebPage ».
- Accueil anglais : titre « Succulent's guide » (préférer « Succulents guide » ou « Guide to succulents »).
- Adresses avec suffixe `-2` (`/es/crassulaceae-2/`, `/en/malvaceae-2/`…) : limite de Polylang gratuit, sans gravité. (01/10/2026 : les 4 racines ES `-2` renommées en `/es/familia-<x>/` avec 301.)
- Espagnol : créer des catégories (Cultivo, Plagas…) pour les 85 articles « Non classé ».

## Vitesse — détail (page d'accueil)

| Élément | Poids (non compressé) | Remarque |
|---|---|---|
| HTML | 103 Ko | dont 71 Ko de CSS en ligne (blocs WordPress + CSS additionnel 33 Ko) |
| CSS externes | ≈ 160 Ko | `style.css` du thème 155 Ko (bloquant) |
| JavaScript du site | ≈ 120 Ko | jQuery 88 Ko + jQuery Migrate 14 Ko + Brevo 14 Ko |
| Scripts tiers | non mesurés | Google tag (gtag.js), Brevo SDK, WonderPush |
| Ancien logo (masqué) | 115 Ko | chargé avec `fetchpriority="high"` sur toutes les pages |
| Image du contenu | 94 Ko | Agave parryi |
| Diaporama | ≈ 6,6 Mo | 14 photos préchargées dès l'arrivée |

Estimation : ≈ 7,2 Mo pour l'accueil (hors scripts tiers), dont 90 % pour le diaporama.
Les autres pages pèsent environ 0,5 à 0,8 Mo, avec le logo masqué et les scripts.

### Recommandations vitesse

1. Diaporama : supprimer le préchargement groupé (chaque photo se charge à son tour) et servir
   des versions 1024 px sur mobile. Gain estimé : 5 à 6 Mo au premier affichage sur mobile.
2. Retirer l'ancien logo (Personnaliser › Identité du site) : −115 Ko et une requête prioritaire en moins par page.
3. Consentement : bannière de cookies (Complianz, CookieYes…) qui ne charge Google Analytics,
   Brevo et WonderPush qu'après accord ; obligatoire en France, et accélère la première visite.
4. Cache de page et compression : aucune extension de cache active. Vérifier chez l'hébergeur
   (cache serveur, gzip/brotli) ou installer une extension de cache (WP Super Cache, LiteSpeed Cache si serveur LiteSpeed).
5. jQuery Migrate : inutile si aucune extension ancienne ne l'exige (−14 Ko).
6. Vérifier le score réel sur https://pagespeed.web.dev/ (mobile) après ces corrections.
