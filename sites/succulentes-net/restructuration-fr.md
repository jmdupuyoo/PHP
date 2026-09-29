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

## 3. Les 77 autres genres : chacun dans sa famille (règle : racine famille / genre / espèce)

Exception : Cycadales (`/cycadales/genre/espece/`) ne change pas. Racines de groupe gardées :
`/agavoides/` (13857, comme /en/agavoids/), `/aloides/` (nouvelle, comme /en/alooids/), `/palmiers/` (14652), `/bambous/`.
Les fiches espèces suivent automatiquement leur genre.

| Racine | Genres (ID de la page genre) |
|---|---|
| /famille-cactaceae/ | copiapoa (5098), cylindropuntia (3630), echinocereus (5309), epiphyllum (5107), espostoa (5124), hylocereus (5330), lophophora (5115), neobuxbaumia (2819), pachycereus (3716), pereskia (5153) |
| /agavoides/ | agave (1018), yucca (871), nolina (1047), dasylirion (2563), beaucarnea (3093), beschorneria (2851), furcraea (5182), calibanus (5227), cordyline (4782), dracaena (3381), sansevieria (5193), lomandra (6637), doryanthes (6727) |
| /aloides/ | aloe (996), xanthorrhoea (6885) |
| /famille-crassulaceae/ | aeonium (3897), crassula (14642), echeveria (21587), kalanchoe (5202), sedum (5382) |
| /famille-euphorbiaceae/ | euphorbia (3326), jatropha (3621) |
| /famille-didieraceae/ | alluaudia (3594), didierea (5244) |
| /famille-bromeliaceae/ | aechmea (6392), fascicularia (7762), hechtia (7613), ochagavia (7696), puya (6299) |
| /famille-fabaceae/ | acacia (8281), erythrina (8200) |
| /famille-proteaceae/ | banksia (7933), grevillea (8122), hakea (8624) |
| /famille-myrtaceae/ | callistemon (8556) |
| /famille-cyatheaceae/ | cyathea (9895) |
| /famille-lamiaceae/ | leonotis (9534) |
| /famille-nymphaeaceae/ | nymphaea (10030) |
| /famille-menyanthaceae/ | nymphoides (10307) |
| /famille-papaveraceae/ | romneya (8773) |
| /famille-strelitziaceae/ | strelitzia (4616) |
| /famille-asteraceae/ | tagetes (7906) |
| /famille-araucariaceae/ | wollemia (7631) |
| /famille-phytolaccaceae/ | phytolacca (8702) |
| /famille-araliaceae/ | cussonia (12476) |
| /famille-passifloraceae/ | adenia (6859) |
| /famille-malvaceae/ | adansonia (3548), brachychiton (4398), chorisia (7435), pseudobombax (5255) |
| /famille-apocynaceae/ | adenium (3512), pachypodium (3174), plumeria (3605) |
| /famille-moringaceae/ | moringa (3745) |
| /famille-pedaliaceae/ | uncarina (4845) |
| /famille-fouquieriaceae/ | fouquieria (4125) |
| /palmiers/ | butyagrus (6541), chamaedorea (6019), chamaerops (5391), livistona (7739), nannorrhops (6804), phoenix (4693), rhapidophyllum (9784), syagrus (6517), trachycarpus (5402), trithrinax (4512), le-genre-butia (5410) |

Aussi : `/haworthiopsis/` (17597) → `/aloides/haworthiopsis/` ; `le-genre-butia` renommé `butia` sous `/palmiers/`.
Nouvelles pages familles à créer (brouillons, publiées au moment du déplacement) : aloides, crassulaceae,
euphorbiaceae, didieraceae, bromeliaceae, fabaceae, proteaceae, myrtaceae, cyatheaceae, lamiaceae,
nymphaeaceae, menyanthaceae, papaveraceae, strelitziaceae, asteraceae, araucariaceae, phytolaccaceae,
araliaceae, passifloraceae (slug `famille-<nom>` sauf aloides).

Brouillons créés le 29/09/2026 : aloides 24878, famille-araliaceae 24865, famille-araucariaceae 24862, famille-asteraceae 24861, famille-bromeliaceae 24889, famille-crassulaceae 24880, famille-cyatheaceae 24867, famille-didieraceae 24888, famille-euphorbiaceae 24887, famille-fabaceae 24890, famille-lamiaceae 24876, famille-menyanthaceae 24879, famille-myrtaceae 24866, famille-nymphaeaceae 24877, famille-papaveraceae 24859, famille-passifloraceae 24868, famille-phytolaccaceae 24863, famille-proteaceae 24864, famille-strelitziaceae 24860.
Traductions EN liées : aloides ↔ 15114, crassulaceae ↔ 18756, euphorbiaceae ↔ 18986, didieraceae ↔ 23313.

## 4. Redirections 301

Pour chaque famille et chaque genre déplacé (2 règles) :
`/especes-plantes-grasses/<x>/` → `/<racine>/<x>/` et `/especes-plantes-grasses/<x>/*` → `/<racine>/<x>/*`.
Soit (9 familles + 90 genres) × 2 = 198 règles, plus `/haworthiopsis/`. La page 594 n'est pas redirigée.
Ensuite : mise à jour des liens internes vers les nouvelles adresses.

## État (29/09/2026, réalisé)

- Pont MCP 1.2.2 installé ; connecteur « succulentes.net » ajouté (outils de redirection).
- 19 pages familles publiées ; 9 familles existantes passées en `famille-<nom>` à la racine.
- 90 genres rangés sous leur famille (77 déplacés + 13 cactus en double) ; 24 fiches espèces de cactus
  déplacées sous `/famille-cactaceae/<genre>/` ; `/haworthiopsis/` → `/aloides/haworthiopsis/` ; `le-genre-butia` → `/palmiers/butia/`.
- Contenu des 13 anciennes pages de cactus reporté dans les pages gardées (sauf Myrtillocactus, Stenocereus : rien à reporter),
  puis anciennes pages à la corbeille (5061, 5072, 5086, 3143, 2414, 2890, 5131, 5318, 5144, 2929, 5026, 5160, 5173).
- 162 redirections 301 créées (adresse exacte, + règle de dossier `*` quand il y a des sous-pages), vérifiées sur des exemples.
- À vérifier : Echinocactus (23789) situe *E. grusonii* à Querétaro « dans la vallée de Jaumave » (Jaumave est au Tamaulipas).
- Page Plantes (594) : slug `especes-plantes-grasses` → `plantes` ; 301 `/especes-plantes-grasses/` → `/plantes/`
  (les règles `/especes-plantes-grasses/<x>/…` restent valables).
