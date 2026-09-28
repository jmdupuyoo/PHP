# succulentes.net — design

Thème Twenty Twenty-One, Polylang (fr, it, en, es), Rank Math.

## Fichiers

- `custom.css` : CSS additionnel complet (charte « encyclopédie botanique », drapeaux, logo A).
  À appliquer avec `update_custom_css` (mode `replace`). Polices système uniquement (RGPD).
- `rosette.svg` : icône du logo (rosette d'Echeveria), intégrée au CSS en data URI.
- `logos-propositions.png`, `apercu-logo-A.png` : maquettes.

## État

| Élément | État |
|---|---|
| Charte, sommaire, newsletter, widgets en cartes, pied de page | En ligne |
| Drapeaux (FR, IT, US, ES) | En ligne |
| Widgets text-2 (FR) et text-5 (IT) nettoyés | Fait |
| Logo A (rosette + nom traduit) | `custom.css` prêt, à appliquer |
| Traductions du nom et du slogan | À enregistrer (`update_string_translations`, Pont MCP 1.2.1) |
| Menus de rubriques par langue | À faire (`create_menu`, `add_menu_item` avec `language_switcher`, `assign_menu_location` + `language`) |
| Meta description Rank Math de l'accueil (page 449) | Proposée, à valider |
| Page « Les plantes succulentes » (594) : lien `http://banksia`, section Fouquieriacées en double, balises `<meta charset>` parasites, « Phytolaccacéess » | À corriger si validé |

## Traductions du logo

| Langue | Nom | Slogan |
|---|---|---|
| fr | Succulentes | Et autres belles exotiques |
| en | Succulents | And other exotic beauties |
| it | Succulente | E altre bellezze esotiche |
| es | Suculentas | Y otras bellezas exóticas |
