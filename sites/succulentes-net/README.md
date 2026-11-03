# succulentes.net — design

Thème Twenty Twenty-One, Polylang (fr, it, en, es), Rank Math.

## Fichiers

- `custom.css` : CSS additionnel complet (charte « encyclopédie botanique », drapeaux, logo A).
  À appliquer avec `update_custom_css` (mode `replace`). Polices système uniquement (RGPD).
- `rosette.svg` : icône du logo (rosette d'Echeveria), intégrée au CSS en data URI
  (version compacte avec `<use>`, 2,7 Ko encodée au lieu de 8 Ko, rendu identique).
- `logos-propositions.png`, `apercu-logo-A.png` : maquettes.

## État

| Élément | État |
|---|---|
| Charte, sommaire, newsletter, widgets en cartes, pied de page | En ligne |
| Barre de recherche (bloc Recherche) aux couleurs du site | En ligne |
| Diaporama des pages d'accueil (4 langues), sous le bandeau vert | En ligne : 14 photos, 4 s chacune (1536 px sur ordinateur, 768 px sur mobile), bandeau 170–360 px ; 1 seule photo chargée à l'ouverture, la suivante à mi-vue, CSS seul (voir `custom.css`) |
| Drapeaux (FR, IT, US, ES) | En ligne |
| Widgets text-2 (FR) et text-5 (IT) nettoyés | Fait |
| Logo A (rosette + nom traduit) | En ligne ; ancien logo image retiré du Customizer (reste cité dans le schéma Rank Math) |
| Traductions du nom et du slogan | En ligne (en, it, es) |
| Menus de rubriques par langue | En ligne : bandeau vert sous le logo (Plantes, Jardins, Campus, Blog), drapeaux à droite du logo |
| Meta description Rank Math de l'accueil (page 449) | Traité |
| Page « Les plantes succulentes » (594) : lien Banksia, Fouquieriacées en double, `<meta charset>`, Phytolaccacées, Xanthorrhoea | Corrigé |

## Traductions du logo

| Langue | Nom | Slogan |
|---|---|---|
| fr | Succulentes | Et autres belles exotiques |
| en | Succulents | And other exotic beauties |
| it | Succulente | E altre bellezze esotiche |
| es | Suculentas | Y otras bellezas exóticas |

## Menus de rubriques

Un menu par langue (898 fr, 899 en, 900 it, 901 es), affecté à l'emplacement `primary` de sa langue.
Un pictogramme « maison » (lien Accueil, 1er élément du menu, texte masqué mais lu par les lecteurs d'écran)
puis quatre entrées sans menu déroulant, affichées dans un bandeau vert sous le logo ; les drapeaux
(sélecteur Polylang du même menu) sont sortis de la barre en CSS et placés à droite du logo.

| Entrée | fr | en | it | es |
|---|---|---|---|---|
| Accueil (pictogramme maison, 1er élément) | 449 | 14798 | 11573 | 23116 |
| Plantes | 594 | 14798 | 11576 | 23116 |
| Jardins | 4532 | 24688 | 24689 | 24690 |
| Campus (e-books, formations) | 24710 (`/campus/`) | 24691 (`/en/campus-en/`) | 24692 | 24693 |
| Blog | 9 | 15072 | 11688 | 25597 (`/es/articulos/`) |

Les pages Jardins et Campus en/it/es sont publiées et reliées (Polylang) aux pages françaises ;
elles ne contiennent encore qu'une phrase d'introduction (à développer). La page Campus française
(24710) présente les e-books et formations à venir et renvoie à l'ancienne page 598 pour les cursus existants.

Le CSS place les drapeaux par position absolue (fr, it, en, es de gauche à droite) : à revoir si une
langue est ajoutée. Le bouton « Menu » mobile du thème est masqué, les quatre entrées restent visibles.

L'ancien « Menu haut de page » (25) n'est plus affecté ; il peut être supprimé.

## Meta descriptions (29 septembre 2026)

355 pages clés (accueils, rubriques, familles, genres) : 326 descriptions rédigées d'après le contenu
de chaque page, 28 déjà présentes conservées (4 d'entre elles, en français sur des pages en/it, remplacées),
1 page vide sans description (fr 17597 Haworthiopsis). Détail par langue dans `meta-descriptions/*.csv`.

À corriger dans les contenus (relevé pendant la rédaction) :
- Liens vers `www.claudeusercontent.com` dans 10 contenus (it 15769, 15746, 15736, 15729, 14423, 14312, 15599 ; fr 14413, 2336, 1960).
- Pages vides : fr 17597 (Haworthiopsis), es 23486 (Crassulaceae).
- Nymphoides (fr 10307) classé à tort dans les Nymphéacées ; « Tagetes padula » (fr 7906) ; « Xanthorrhoeae » (fr 6885).
- Genres en double (fr) : Astrophytum, Cereus, Cleistocactus — on garde `cactaceae/`. Fait : canonique des anciennes
  pages (5061, 5072, 5086) vers `cactaceae/`, photo C. strausii ajoutée à 23804, liens internes remplacés (594, 9736, 15543).
  Reste : redirections 301 à créer dans l'admin, puis mise à la corbeille des 3 anciennes pages.
  Même doublon pour 11 autres genres de cactus (avec fiches espèces sous l'ancien chemin) : à décider.

## Arborescence et liens internes (règles du propriétaire)

- Adresses : racine famille / genre / espèce (ex. `/famille-cactaceae/echinopsis/pachanoi/`).
  Exceptions : `/cycadales/` (ordre), racines de groupe `/agavoides/`, `/aloides/`, `/palmiers/`, `/bambous/`.
  Familles FR à la racine avec le préfixe `famille-` (les slugs nus sont pris par EN/ES). Détail : `restructuration-fr.md`.
- Liens internes : dans le texte, lier les espèces, genres et familles cités qui ont une page.
  **Introduction** : un seul lien, vers la page du niveau au-dessus
  (Echinocactus → Cactaceae ; genre Cycas → Cycadales ; Cycas revoluta → genre Cycas).
  Pour une famille (ou Cycadales, agavoïdes…), le lien d'introduction va vers la page Plantes
  `/plantes/` (594, ancien slug `especes-plantes-grasses`, redirigé en 301), qui n'est pas pour autant page mère : les familles restent à la racine.
- Toute page commence par un paragraphe d'introduction (jamais directement par un intertitre), rédigé avec une
  sémantique orientée SEO, qui contient le lien vers la page mère. On peut reformuler l'intro pour placer ce lien.
- Rattachement scientifique : un genre renvoie à sa famille acceptée (APG IV), et la famille liste/lie ses genres.
  Pas de rattachement à des pages thématiques (ex. « Les plantes aquatiques » n'est pas une page mère).
- Nom de famille obsolète cité (Bombacacées, Aloacées, Agavacées…) : lien vers la famille acceptée et courte note
  expliquant que ce nom n'est plus retenu et vers quelle(s) famille(s) les genres ont été transférés.
- Liens dans le corps : uniquement sur les noms scientifiques (espèces, genres, familles) ayant une page.
  En fin d'article, avant la bibliographie : « À lire aussi sur Succulentes », 1 à 3 articles du blog vraiment liés
  (ex. cycas : jaunissement, gel, fertilisation) ; aucune section si rien de pertinent.
- Pages faibles (une phrase, un paragraphe) : à enrichir selon le prompt de rédaction du propriétaire
  (`prompts/redaction-fiches.md`, prioritaire) ; `plan-type-fiches.md` décrit l'existant.
