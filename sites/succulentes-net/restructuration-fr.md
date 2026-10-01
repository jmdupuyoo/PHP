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
- Variétés d'Agave parryi rangées sous l'espèce (30/09/2026) : couesii (2254), huachucensis (2328), truncata (1416)
  → /agavoides/agave/parryi/<variété>/ ; 301 depuis /agavoides/agave/couesii/, /huachucensis/, /parryi-truncata/ ; liens internes réécrits.
- Agave parryi subsp. neomexicana (POWO) rangé sous Agave parryi dans 3 langues (30/09/2026) : FR 1967, EN 19234, IT 23082
  → …/agave/parryi/neomexicana/ (IT : /it/piante/agavoidi/agave/parryi/neomexicana/) ; 301 depuis les anciennes adresses ; 16 liens réécrits.
  Intros FR/EN/IT réécrites (nom accepté + ancien nom, lien unique vers Agave parryi) ; titres et descriptions SEO ajoutés.
- Pages publiées le 30/09/2026 : FR genre Sempervivum 25802 (/famille-crassulaceae/sempervivum/, relié à EN 18815, IT 19193, ES 23442),
  EN var. huachucensis 25804, EN var. couesii 25806, EN Chamaerops humilis 25811 (/en/chamaerops/humilis/).
  Liens rétablis vers ces pages : EN 19242 (Agave parryi, « coming soon » retirés), FR 3897 (Aeonium → Sempervivum), EN 23389 (Chamaerops).
- Corrections factuelles (30/09/2026) :
  - FR 2328 huachucensis : feuilles 10–20 cm de large (FNA, au lieu de 35 cm) ; étymologie O'odham et âge de floraison non sourcés retirés.
  - FR 2254 couesii : combinaison Kearney & Peebles datée 1939 (IPNI) ; tableau huachucensis 10–20 cm.
  - EN 19242 parryi : largeur huachucensis 10–20 cm (texte et tableau).
  - EN 23390 Chamaerops var. argentea : répartition alignée sur POWO (montagnes du Maroc, Atlas et Rif), altitudes non sourcées retirées.
  - EN 18815 Sempervivum : S. zeleborii donné en synonyme de S. ruthenicum.
  - Restent à vérifier : auteur de var. cerifera et rusticité/protection sur EN 23390 ; doublons d'espèces dans les listes de EN 18815.
- Enrichissement des espèces Agave (30/09/2026) : 10 fiches publiées (2353 pygmaea, 2125 macroacantha, 2204 zebra, 2317 × leopoldii,
  2216 shawii, 1348 striata, 1992 montana, 1983 nickelsiae, 2276 cerulata, 3314 nigra) ; brouillons et notes dans pilotes/.
  Décisions : pygmaea et nigra gardées (synonyme / nom horticole expliqués) ; exception éditoriale Agave pour Echinoagave (règle 10 e du prompt).
- Page famille Asparagaceae créée (25879, /famille-asparagaceae/) ; lien famille posé dans le corps des 13 genres et des 10 fiches Agave.
- Corrections : slug /agavoides/agave/victoriae-reginae/ (1928, 301 depuis victoria-reginae), orthographe victoriae-reginae (16 contenus) ;
  seemanniana 20214 (localité pygmaea : Chiapas) ; genre Agave 1018 (rubrique « Hybrides et noms horticoles », aloès = Asphodelaceae,
  lien truncata FR) ; Hesperaloe, Sansevieria (intro à un lien), Dracaena (lien arborea retiré), Calibanus (note POWO → Beaucarnea) ;
  20 liens claudeusercontent.com corrigés ; titre SEO Aloe.
- Restent : alt manquants (images 1352, 3320, Aloe) ; lien intro Furcraea sur « agavoïdes » ; pas de page /famille-asphodelaceae/ ;
  fiches liées Echinoagave (stricta, tenuifolia, albopilosa, dasylirioides) à doter de la note de changement de genre.
- Exception Agave / nouveaux genres 2024 (30/09/2026) : note (intro + Taxonomie) ajoutée sur 3248 tenuifolia, 2336 stricta, 20337 albopilosa,
  20345 dasylirioides (Echinoagave), 1333 bracteosa (Paleoagave), 20193 ellemeetiana (Paraagave) ; phrases contradictoires « POWO n'a pas adopté »
  corrigées ; synonymie et référence Phytoneuron de 1333 corrigées ; lien striata IT → FR sur 20345.
  À décider : polycarpie d'A. bracteosa (1333 dit monocarpique, 20193 dit polycarpique) ; « 2,24 Ma » sur 2336 (attribution implicite) ;
  pages IT (14550, 20622, 14577, 20610, 20617, 14562, 20604), EN 16227, ES 23543 sans la note.
- Textes alternatifs = nom scientifique (règle du 30/09/2026) : images 1352, 3320, 1584, 1582, 1580.
- Floraison (30/09/2026, recherche) : A. bracteosa = rosette monocarpique en pratique, touffe persistante (« polycarpie » de Gentry 1982 non confirmée ;
  Zona 2018) ; A. ellemeetiana monocarpique, rejets hypogés possibles (Etter et al. 2022). Pages alignées : FR 1333, 20193 ; EN 16227 ;
  IT 14562, 20604, 20622 (striata polycarpique), 14577 + FR 3248 tenuifolia (floraison non documentée). Note changement de genre ajoutée
  aux IT 14550, 20622, 14577, 20610, 20617, 14562, 20604, EN 16227, ES 23543. Noms abrégés développés sur 4 pages IT.
  Reste : IT 20610 albopilosa dite monocarpique sans source.
- Nomenclature dasylirioides (30/09/2026) : POWO accepte Agave dealbata É.Morren ex K.Koch ; A. dasylirioides et Echinoagave dasylirioides
  y sont synonymes (l'espèce reste dans Agave). Notes erronées « Echinoagave » corrigées sur FR 20345, IT 20617 ; exemple retiré de
  FR 3248, IT 14577, FR 2336 ; règle 10 e mise à jour. Nom d'usage conservé : Agave dasylirioides (à confirmer par le propriétaire).
- Albopilosa (FR 20337, IT 20610) : « monocarpique » retiré (fiches de pépinières génériques) ; question ouverte. Hauteur d'inflorescence
  divergente FR/IT/protologue, à vérifier.
- Genres Asparagaceae enrichis et publiés (30/09/2026) : 15233 Hesperaloe, 2851 Beschorneria, 5227 Calibanus (nom d'usage, = Beaucarnea),
  4782 Cordyline, 5193 Sansevieria (nom d'usage, = Dracaena), 3093 Beaucarnea, 1047 Nolina, 6637 Lomandra ; observations JZT intégrées
  (Beschorneria/charançon, Cordyline sellowiana, Nolina matapensis/erumpens/nelsonii/lindheimeriana, Lomandra longifolia −7 °C).
  Fiche 1427 Nolina longifolia : nom d'usage, botaniquement Nolina parviflora (POWO).
  Restent : alt de l'image 3104 (Beaucarnea, espèce non identifiée) ; fiche Cordyline dracaenoides (4810) : synonymie à corriger
  (POWO : Cordyline sellowiana) ; pages EN Hesperaloe/Beschorneria/Beaucarnea à revoir ; fiches FR Hesperaloe engelmannii (16087) et
  tenuifolia (16102) rédigées en anglais.
- 30/09/2026 : fiche 4810 (Cordyline sellowiana, slug dracaenoides) : dracaenoides = nom d'usage ; POWO rattache Cordyline dracaenoides
  Kunth (et Kunth ex Regel) à Cordyline congesta ; genre 4782 corrigé en conséquence. FR 16087 Hesperaloe engelmannii et 16102
  Hesperaloe tenuifolia réécrites en français et publiées. EN 15238 Hesperaloe, 15251 Beschorneria, 15212 Beaucarnea corrigées et publiées.
  Pas de page famille Asparagaceae en EN.
- 01/10/2026 : 10 genres Cactaceae enrichis et publiés (Neobuxbaumia, Pachycereus, Espostoa, Lophophora, Copiapoa, Pereskia, Epiphyllum,
  Hylocereus, Echinocereus, Cylindropuntia) ; Selenicereus 23791 corrigé et enrichi ; genre Marginatocereus créé (25989), fiche 5646
  renommée Marginatocereus marginatus et déplacée (301 depuis /famille-cactaceae/pachycereus/marginatus/) ; Pachycereus 3716 mis à jour ;
  page famille Cactaceae 23780 : index des 29 genres avec liens. À faire : page famille (sous-familles, chiffres, liens dans le texte),
  version ES 23761, traductions EN/ES/IT de Selenicereus.
- Newsletter : snippet sites/succulentes-net/snippets/newsletter-milieu-de-page.php (formulaires Brevo FR 1, EN 2, IT 3, ES 4) à installer
  via Pont MCP 1.2.7 ; widget ES « Boletín » (custom_html-8) en attente dans les widgets inactifs.
- 01/10/2026 : widget ES « Boletín » (formulaire 4) remis dans le pied de page, réglé sur l'espagnol (Pont MCP 1.2.7). Accueil ES 23116 :
  copie figée du formulaire IT n° 3 (jeton périmé) remplacée par [sibwp_form id=4]. Formulaire 4 encore en anglais (gabarit Brevo par
  défaut : « Email Address », FIRSTNAME, LASTNAME, « Subscribe ») : à traduire avec brevo_save_form.
- 01/10/2026 : formulaires Brevo traduits (ES 4 complet : texte, messages, modèle DOI ES n° 214 créé dans Brevo, redirection /es/gracias/
  [page 25996 créée, noindex] ; IT 3 messages en italien ; EN 2 redirection /en/thank-you/ ; coquille « Email Adress » corrigée).
  Snippet Code Snippets n° 11 « Newsletter Brevo au milieu des pages » créé et activé (Pont MCP 1.2.8) ; vérifié en ligne :
  FR (formulaire 1), EN (2), IT (3), ES (4) au milieu des fiches, absent de l'accueil, aucune erreur.
- Idées en attente (newsletter, 01/10/2026) : aimant à inscription à décider plus tard.
  Pistes : guide PDF « succulentes rustiques testées au Jardin zoologique tropical » ; calendrier de culture ; aimants ciblés par genre
  (texte variable dans le snippet 11) ; ou premier cours e-learning de botanique offert (mini-cours par e-mails Brevo).
- 01/10/2026 : blocs Newsletter du pied de page retirés (custom_html-5/6/7/8, FR/EN/IT/ES) à la demande du propriétaire ; conservés dans les widgets inactifs.
- 01/10/2026 : racine ES « Agavaceae » 23477 réécrite (intro, note nom obsolète, index des 6 genres ES avec liens, erreurs corrigées, SEO),
  reliée au groupe de traductions FR 13857 / EN 15186 / IT 12706 (IT 12706 relié aussi). Coquille « e terme » corrigée sur FR 13857.
  Racines ES à reprendre (même problème) : 23482 orden-cycadales, 23478 asphodelaceae, 23486 crassulaceae-2 (vide), 23480 euphorbiaceae-2,
  23483 didieraceae-2, 23481 apocynaceae-2 (contenu en double), malvaceae, moringaceae, pedaliaceae, vitaceae.
  Erreur ES 23445 Nolina : Nolina recurvata (= Beaucarnea recurvata) traitée comme une Nolina.
- 01/10/2026 : inscription ES testée par le propriétaire : liste Brevo succulentes-ES OK, e-mail de confirmation et page /es/gracias/ OK.
- 01/10/2026 : racines ES reprises (lot B) : 23481 apocynaceae-2, 23885 malvaceae, 23883 moringaceae, 23880 pedaliaceae, 23878 vitaceae ;
  traductions FR liées ; erreurs corrigées. ~~À voir : slug apocynaceae-2 → apocynaceae (avec 301)~~ fait : /es/familia-apocynaceae/ ; FR : Hibiscus cannabinus présenté comme
  « chanvre de Manille » (c'est le kénaf), Vitaceae « 14 genres » ; ES Uncarina/Pachypodium/Adansonia à revérifier ; traductions IT/EN manquantes.
- Snippet 11 : repli H3 / pages courtes / exclusion noindex. Pont MCP 1.2.9 (save_snippet réactive un extrait actif).
- 01/10/2026 : page famille Cactaceae réécrite et publiée en FR (23780) et ES (23761) ; 63 liens internes vérifiés.
- 01/10/2026 : racines ES reprises (lot A) : 23482 orden-cycadales, 23478 asphodelaceae (liée à /aloides/), 23486 crassulaceae-2 (rédigée),
  23480 euphorbiaceae-2, 23483 didieraceae-2 ; traductions liées. Fiche ES Nolina 23445 corrigée (Beaucarnea recurvata, effectifs, aire).
  ~~À décider : slugs ES crassulaceae-2 / euphorbiaceae-2 / didieraceae-2 / apocynaceae-2 → familia-<x> (avec 301, enfants inclus).~~ Fait le 01/10/2026 (voir plus bas).
  À corriger : intro ES Nolina sans lien vers la page mère ; ES Aloe « Aloáceas » ; fiches Haworthia attenuata / limifolia → Haworthiopsis ;
  ES Echeveria « más de 180 especies » vs ~150.
- 01/10/2026 : slugs ES renommés (validé par le propriétaire), sur le modèle /es/familia-cactaceae/ :
  23486 /es/crassulaceae-2/ → /es/familia-crassulaceae/ (11 enfants), 23480 /es/euphorbiaceae-2/ → /es/familia-euphorbiaceae/ (6),
  23483 /es/didieraceae-2/ → /es/familia-didiereaceae/ (orthographe corrigée, 6), 23481 /es/apocynaceae-2/ → /es/familia-apocynaceae/ (5).
  301 exacte + règle dossier /* pour chacune ; 53 liens internes réécrits ; contrôles 200 + canoniques OK.
  À revoir : texte ES 23483 (« la forma Didieraceae, que se encuentra […] en la dirección de esta página ») devenu faux.
- 01/10/2026 : Pont MCP 1.2.10 installé ; save_snippet sur l'extrait 11 actif → reste actif (vérifié), encadré présent en ligne.
- 01/10/2026 : erreurs corrigées : ES Nolina 23445 (lien d'intro vers /es/agavaceae/), ES Aloe 23428 (Asphodelaceae, oiseaux nectarivores),
  ES Haworthia attenuata 23594 / limifolia 23595 (nom d'usage, Haworthiopsis pour POWO, section Taxonomía), hub ES Haworthia (Haworthiopsis fasciata),
  Echeveria : 206 espèces (POWO déc. 2025) sur ES 23438, ES 23486, FR 24880 ; FR Malvaceae 23900 (kénaf) ; Vitaceae FR 23893 / EN 23891 / IT 23919
  (environ 16 genres, Wen et al. 2018). Restent : hub ES Haworthia « más de 150 especies » ; ES Aloe dichotomum / plicatilis sans nom actuel
  (Aloidendron, Kumara) ; Vitaceae EN/IT non liées dans Polylang ; Echeveria à revérifier (nouveau genre séparé en 2026, Cruz-López et al.).
- 01/10/2026 : décision : fiches Aloe conservent les anciens noms (nom d'usage) ; page genre Aloe avec parties Aloidendron, Kumara, Aloiampelos (règle ajoutée au prompt).
- 01/10/2026 : ES Haworthia 23439 : « unas 60 especies » (Bayer 2012), Haworthiopsis fasciata ; Vitaceae : groupe FR 23893 / EN 23891 / ES 23878 / IT 23919 relié.
  Anomalie : /aloides/haworthia/ affiche la page EN 17589 (pas de page genre FR Haworthia ; EN et ES non reliées ; EN se contredit : ~150 vs 38 espèces).
- 01/10/2026 : 8 genres de palmiers enrichis et publiés (Trachycarpus, Chamaerops, Phoenix, Rhapidophyllum, Butia, × Butyagrus, Trithrinax, Livistona) ; observations JZT (février 2012, −7 °C) ; Syagrus : Butiagrus → Butyagrus.
- 01/10/2026 : correction du minimum JZT de février 2012 : −7 °C (et non −8 °C), sur Butia (5410, 3 occurrences), × Butyagrus (6541) et l'article « 5 palmiers résistants au vent » (13321).
- 01/10/2026 : page d'ordre Cycadales (13826, /cycadales/) réécrite sur place (≈ 2 360 mots, 10 genres indexés par famille, CITES/UE, toxicité, FAQ) ; SEO Rank Math mis à jour. Intro liée à /plantes/ (décision du propriétaire : la page mère des racines est /plantes/). Inventaire Cycadales 4 langues : inventaire-cycadales.md.
- 01/10/2026 : anomalies Cycadales (inventaire) corrigées :
  - traductions liées : FR 1256 Cycas ↔ EN 16282 / IT 11549 / ES 23432 ; FR 13826 ↔ IT 11545 ; FR 14229 Encephalartos ↔ IT 11663 ;
  - FR 5286 spinusolum → Dioon spinulosum (slug, titre, 301, 4 liens réécrits) ; IT 12758 dinnanensis → diannanensis (301, 2 liens) ;
  - IT 12127 Ceratozamia rangé sous /it/piante/cycadales/ceratozamia/ (301, liens réécrits) ; IT 12146 slug bowenia (301) ;
  - titres : EN 17976 « Bowenia spectabilis », espaces finaux retirés (FR 6162, EN 16895).
  - contenus : Zamia 3963 (lien cremnophila → 22338, utm retirés) ; Cycas 1256 (phrase cassée réparée, lien dolichophylla retiré) ; Encephalartos 14229 (ouverture tronquée reconstituée d'après l'IT, longifolius → FR 1373, 13 espèces liées, coquille Encephalartus). Détail : pilotes/cycadales-anomalies-note.md.
- 01/10/2026 : article « Semis de cycadales » corrigé en FR (15578), EN (15581) et IT (15579) : liste complète de l'annexe I CITES (Encephalartos, Ceratozamia, Stangeria eriopus, Microcycas calocoma, Cycas beddomei, Zamia restrepoi) ; FR : renvoi au règlement (CE) 338/97.
- 01/10/2026 : Ceratozamia : retrait des groupes A à F validé par le propriétaire.
- 01/10/2026 : page d'ordre Cycadales (13826) corrigée d'après The World List of Cycads (v. 2026.08.15, lue directement) et Species+ : effectifs par genre (Cycas 118, Encephalartos 65, Zamia 88, Ceratozamia 45, Dioon 19), Chigua bernalii synonyme de Zamia restrepoi, Bowenia « est du Queensland », annotation #4 (graines exemptées en annexe II). Vérifications : pilotes/cycadales-verif-taxo-cites.md.
