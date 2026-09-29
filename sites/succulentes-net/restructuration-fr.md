# Restructuration des adresses françaises (retrait de /especes-plantes-grasses/)

Décision (29/09/2026) : comme en anglais et en espagnol, les familles et les genres français passent
à la racine du site. La page `/especes-plantes-grasses/` (594) reste la page « Plantes » du menu,
mais n'est plus parente. Familles : préfixe `famille-` (comme `/es/familia-cactaceae/`), car les
adresses `/cactaceae/`, `/apocynaceae/`… sont déjà prises par des pages EN/ES (WordPress ajouterait « -2 »).

Prérequis : Pont MCP 1.2.2 installé (redirections 301, y compris règles de dossier `/ancien/* => /nouveau/*`).

## 1. Familles (parent 0, nouveau slug)

| ID | Ancienne adresse | Nouvelle adresse |
|---|---|---|
| 23856 | /especes-plantes-grasses/anacardiaceae/ | /famille-anacardiaceae/ |
| 23902 | /especes-plantes-grasses/apocynaceae/ | /famille-apocynaceae/ |
| 23852 | /especes-plantes-grasses/burseraceae/ | /famille-burseraceae/ |
| 23780 | /especes-plantes-grasses/cactaceae/ | /famille-cactaceae/ |
| 21182 | /especes-plantes-grasses/fouquieracees/ | /famille-fouquieriaceae/ |
| 23900 | /especes-plantes-grasses/malvaceae/ | /famille-malvaceae/ |
| 23898 | /especes-plantes-grasses/moringaceae/ | /famille-moringaceae/ |
| 23895 | /especes-plantes-grasses/pedaliaceae/ | /famille-pedaliaceae/ |
| 23893 | /especes-plantes-grasses/vitaceae/ | /famille-vitaceae/ |

## 2. Genres de cactus en double (on garde la page sous la famille)

| Genre | Ancienne page (corbeille) | Page gardée | Fiches espèces déplacées sous la page gardée |
|---|---|---|---|
| Astrophytum | 5061 | 23797 | — |
| Cereus | 5072 | 23785 | — |
| Cleistocactus | 5086 | 23804 | — |
| Echinocactus | 3143 | 23789 | 3157, 3152 |
| Echinopsis | 2414 | 23786 | 13643, 4481, 3083, 2811, 2804, 2795 |
| Ferocactus | 2890 | 23788 | 7345, 6598, 4001, 2916, 2906, 2901 |
| Mammillaria | 5131 | 23787 | — |
| Melocactus | 5318 | 23805 | — |
| Myrtillocactus | 5144 | 23806 | — |
| Opuntia | 2929 | 23784 | 6270, 3031, 3020, 3010, 3001, 2990, 2983, 2975, 2969, 2940 |
| Schlumbergera | 5026 | 23790 | — |
| Selenicereus | 5160 | 23791 | — |
| Stenocereus | 5173 | 23807 | — |

Avant la corbeille : reprendre dans la page gardée ce que l'ancienne a de plus (texte, photos).

## 3. Les 77 autres genres

Parent 0, même slug : `/especes-plantes-grasses/agave/xylonacantha/` devient `/agave/xylonacantha/`.
Les fiches espèces suivent automatiquement leur genre.

## 4. Redirections 301

1. `/especes-plantes-grasses/*` → `/*` (tout le reste ; la page 594 elle-même n'est pas redirigée).
2. Par famille : `/especes-plantes-grasses/<famille>/` → `/famille-<famille>/` et
   `/especes-plantes-grasses/<famille>/*` → `/famille-<famille>/*`.
3. Par genre en double : `/especes-plantes-grasses/<genre>/` → `/famille-cactaceae/<genre>/` et
   `/especes-plantes-grasses/<genre>/*` → `/famille-cactaceae/<genre>/*`.

Soit 45 règles pour 531 anciennes adresses. Ensuite : mise à jour des liens internes vers les nouvelles adresses.
