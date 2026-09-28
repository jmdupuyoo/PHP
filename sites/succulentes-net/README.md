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
| Diaporama des pages d'accueil (4 langues), sous le bandeau vert | En ligne : 14 photos (versions 1536 px), 4 s chacune, bandeau 170–360 px de haut ; chargement au fil de l'eau (2 photos à l'ouverture), CSS seul (voir `custom.css`) |
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
| Blog | 9 | 15072 | 11688 | pas de page |

Les pages Jardins et Campus en/it/es sont publiées et reliées (Polylang) aux pages françaises ;
elles ne contiennent encore qu'une phrase d'introduction (à développer). La page Campus française
(24710) présente les e-books et formations à venir et renvoie à l'ancienne page 598 pour les cursus existants.

Le CSS place les drapeaux par position absolue (fr, it, en, es de gauche à droite) : à revoir si une
langue est ajoutée. Le bouton « Menu » mobile du thème est masqué, les quatre entrées restent visibles.

L'ancien « Menu haut de page » (25) n'est plus affecté ; il peut être supprimé.
