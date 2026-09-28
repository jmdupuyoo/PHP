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
| Drapeaux (FR, IT, US, ES) | En ligne |
| Widgets text-2 (FR) et text-5 (IT) nettoyés | Fait |
| Logo A (rosette + nom traduit) | En ligne |
| Traductions du nom et du slogan | En ligne (en, it, es) |
| Menus de rubriques par langue | En ligne (menus 898 à 901, emplacement `primary`) |
| Meta description Rank Math de l'accueil (page 449) | Proposée, à valider |
| Page « Les plantes succulentes » (594) : lien `http://banksia`, section Fouquieriacées en double, balises `<meta charset>` parasites, « Phytolaccacéess » | À corriger si validé |

## Traductions du logo

| Langue | Nom | Slogan |
|---|---|---|
| fr | Succulentes | Et autres belles exotiques |
| en | Succulents | And other exotic beauties |
| it | Succulente | E altre bellezze esotiche |
| es | Suculentas | Y otras bellezas exóticas |

## Menus de rubriques

Un menu par langue, affecté à l'emplacement `primary` de sa langue. Structure commune :
un parent « Plantes » (sous-menu des grandes familles), quelques entrées de premier niveau,
puis le sélecteur de langues (drapeaux via `custom.css`).

| Langue | Menu | Sous-menu « Plantes » | Premier niveau |
|---|---|---|---|
| fr | Rubriques (fr) — 898 | Plantes (594) : Agavoïdes, Aloès, Cactus, Cycadales, Euphorbes, Palmiers, Bambous, Plantes aquatiques | Culture (535), Biologie (624), Blog (9) |
| en | Rubriques (en) — 899 | Plants (14798) : Agavoids, Aloes & alooids, Cacti, Crassulaceae, Cycads, Euphorbias, Apocynaceae | Growing (catégorie 249), Blog (15072) |
| it | Rubriques (it) — 900 | Piante (11576) : Agavoidi, Aloidi, Cactus, Crassulaceae, Cicadi, Euforbie, Palme | Coltivazione (catégorie 177), Blog (11688) |
| es | Rubriques (es) — 901 | Plantas (23116) : Agaváceas, Áloes y haworthias, Cactus, Crasuláceas, Cícadas, Euforbias, Pachypodium y afines, Didieráceas | — (pas de blog ni de catégorie espagnols) |

L'ancien « Menu haut de page » (25, sélecteur de langues seul) n'est plus affecté ; il peut être supprimé.

Manques relevés en construisant les menus :
- fr : pas de page famille Crassulaceae (les genres Crassula, Echeveria, Kalanchoe, Sedum, Aeonium existent).
- en : pas de page d'index des palmiers.
- es : toutes les publications sont dans « Non classé » (85) ; aucune page blog.
