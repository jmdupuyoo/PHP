# Liens internes cassés — succulentes.net (audit du 30/09/2026)

Audit en lecture seule (aucune modification du site). Source : HTML rendu de l'API REST (`/wp-json/wp/v2/pages` et `/posts`, statut publié, toutes langues), redirections Pont MCP (`list_redirects`, 195 règles), catégories/étiquettes REST ; chaque adresse suspecte vérifiée une fois avec `fetch_site_url`.

## Synthèse

| Indicateur | Valeur |
|---|---|
| Contenus analysés | 2174 (1823 pages, 351 articles) — fr 864, en 649, it 337, es 324 |
| Contenus contenant au moins un lien interne | 2032 |
| Liens internes (occurrences / adresses distinctes) | 19404 / 1962 |
| OK (contenu publié, accueil, catégorie) | 19275 / 1885 |
| Redirigés par une règle `list_redirects` | 1 / 1 |
| Redirigés implicitement par WordPress (404 « devinée » → 200) | 84 / 45 |
| **Cassés (404)** | **44 / 31** (dans 36 contenus) |
| Médias `/wp-content/uploads/` (occurrences / fichiers distincts) | 2625 / 1418 — échantillon de 40 testé : 40 × 200, aucun manquant |

Remarques : les ancres (#…), liens externes, mailto, wp-admin et flux ont été ignorés. Les 45 adresses « redirigées implicitement » ne figurent ni dans les contenus publiés ni dans les règles de redirection : elles renvoient une 404 que WordPress rattrape en redirigeant vers le slug le plus proche ; plusieurs atterrissent dans la mauvaise langue et deux sur la mauvaise plante (voir plus bas). Elles sont à réécrire au même titre que les liens cassés.

## Liens cassés (404)

| Adresse cassée | Nb | Contenus source (id, titre, langue) | Cible proposée | Remarque |
|---|---|---|---|---|
| `/agavoides/yucca/yucca-elephantipes/` | 10 | 383 « Le charançon de l’agave : prévention et lutte » (fr)<br>871 « Le genre Yucca » (fr)<br>982 « Yucca thompsoniana » (fr)<br>2679 « Yucca aloifolia » (fr)<br>3654 « Plantes succulentes : six espèces représentatives » (fr)<br>4377 « Yucca arizonica » (fr)<br>6451 « Mon yucca à des feuilles jaunes : pourquoi et comment le soigner ? » (fr)<br>13464 « Yucca lacandonica » (fr)<br>13564 « Quand et comment rempoter un yucca d’intérieur » (fr)<br>23102 « Yucca con hojas amarillas: causas y soluciones » (es) | `/agavoides/yucca/elephantipes/` | source 23102 (es) : cible es = /es/agavaceae/yucca/elephantipes/ |
| `/famille-fouquieriaceae/fouquieria/fourquieria-macdougalii/` | 3 | 4125 « Le genre Fouquieria » (fr)<br>4147 « Fouquieria splendens » (fr)<br>21089 « Fouquieria diguetii » (fr) | `/famille-fouquieriaceae/fouquieria/macdougalii/` |  |
| `/agave-neomexicana/` | 2 | 19242 « Agave parryi » (en) | `/en/agavoids/agave/neomexicana/` | lien FR-racine dans une page EN (19242 Agave parryi EN) ; FR = /agavoides/agave/neomexicana/ |
| `/mon-cycas-ne-pousse-pas/` | 2 | 14127 « Mon cycas est malade : Comment le soigner ? » (fr)<br>15567 « Cycas : entretien complet et guide de culture en pot et au jardin » (fr) | `/cycas-ne-pousse-pas/` |  |
| `/agave-havardiana/` | 1 | 19242 « Agave parryi » (en) | `/en/agavoids/agave/havardiana/` |  |
| `/agave-ovatifolia/` | 1 | 19242 « Agave parryi » (en) | `/en/agavoids/agave/ovatifolia/` |  |
| `/agave-parryi-couesii/` | 1 | 19242 « Agave parryi » (en) | aucune | pas de page EN ; seule la FR /agavoides/agave/couesii/ existe |
| `/agave-parryi-huachucensis/` | 1 | 19242 « Agave parryi » (en) | aucune | pas de page EN ; seule la FR /agavoides/agave/huachucensis/ existe (ou /en/agavoids/agave/parryi/ dont c'est la page source) |
| `/agave-parryi-truncata/` | 1 | 19242 « Agave parryi » (en) | `/en/agavoids/agave/parryi/truncata/` |  |
| `/agave-utahensis/` | 1 | 19242 « Agave parryi » (en) | `/en/agavoids/agave/utahensis/` |  |
| `/agave-victoriae-reginae/` | 1 | 19242 « Agave parryi » (en) | `/en/agavoids/agave/victoriae-reginae/` |  |
| `/agavoides/agave/agave-lophanta/` | 1 | 1018 « Le genre Agave » (fr) | `/agavoides/agave/lophanta/` |  |
| `/bambous/chusquea/cummingii/` | 1 | 18287 « Genre Chusquea  » (fr) | `/bambous/chusquea/cumingii/` |  |
| `/chilades-pandava/` | 1 | 21857 « Cycas calcicola » (fr) | `/azure-des-sagous-chilades-pandava/` |  |
| `/cycadales/dioon/dioon-mejiae/` | 1 | 11248 « Dioon holmgrenii » (fr) | `/cycadales/dioon/mejiae/` |  |
| `/cycadales/encephalartos/encephalartos-horridus/` | 1 | 12642 « Encephalartos villosus » (fr) | `/cycadales/encephalartos/horridus/` |  |
| `/cycadales/encephalartos/encephartos-longifolius/` | 1 | 1866 « Encephalartos natalensis » (fr) | `/cycadales/encephalartos/longifolius/` |  |
| `/en/agave-vs-aloe-difference/` | 1 | 15114 « Alooids » (en) | `/en/agave-vs-aloe/` |  |
| `/en/aloe-descoingsii/` | 1 | 19716 « Aloe divaricata » (en) | `/en/alooids/aloe/descoingsii/` |  |
| `/en/aloe-distans/` | 1 | 19637 « Aloe comptonii » (en) | `/en/alooids/aloe/distans/` |  |
| `/en/aloe-melanacantha/` | 1 | 19676 « Aloe erinacea » (en) | `/en/alooids/aloe/melanacantha/` |  |
| `/en/arecaceae/chamaerops/humilis/` | 1 | 23389 « Chamaerops — The European Fan Palm » (en) | aucune | pas de fiche EN C. humilis ; au mieux /en/chamaerops/ (FR : /palmiers/chamaerops/) |
| `/en/fouquieraceae/fouquieria/↗/` | 1 | 21206 « Fouquieria splendens » (en) | `/en/fouquieraceae/fouquieria/` | href contenant le caractère « ↗ » (icône collée dans l'URL) |
| `/en/vitaceae-2/` | 1 | 23908 « Cyphostemma » (en) | `/en/vitaceae-family/` |  |
| `/famille-papaveraceae/romneya/coulteri￼/` | 1 | 8773 « Le genre Romneya » (fr) | `/famille-papaveraceae/romneya/coulteri/` | href contenant U+FFFC (caractère objet) après « coulteri » |
| `/genre-sempervivum/` | 1 | 3897 « Le genre Aeonium » (fr) | aucune | aucune page FR Sempervivum (existe en EN/IT/ES : /en/crassulaceae/sempervivum/) ; à défaut /famille-crassulaceae/ |
| `/it/il-genere-dasylirion/` | 1 | 15729 « Il genere Nolina » (it) | `/it/piante/agavoidi/dasylirion/` |  |
| `/it/piante/agavoidi/il-genere-beaucarnea/` | 1 | 12706 « Agavoidi » (it) | `/it/piante/agavoidi/beaucarnea/` |  |
| `/it/piante/cycadales/il-genere-macrozamia/communis/` | 1 | 13105 « Macrozamia moorei » (it) | `/it/piante/cycadales/macrozamia/communis/` |  |
| `/it/piante/cycadales/il-genere-macrozamia/moorei/` | 1 | 13082 « Macrozamia communis » (it) | `/it/piante/cycadales/macrozamia/moorei/` |  |
| `/pachypodium-is-losing-its-leaves/` | 1 | 18403 « Pachypodium Pests and Diseases: Diagnosis, Treatment & Rescue Protocols » (en) | `/en/my-pachypodium-is-losing-its-leaves-causes-decision-tree-solutions/` |  |

## Liens redirigés (à réécrire)

### Par une règle de redirection (`list_redirects`)

| Adresse | Cible | Nb | Contenus |
|---|---|---|---|
| `/aloides/haworthiopsis/` | `/aloides/` | 1 | 24878 « Les aloïdes » (fr) |

### Par la redirection automatique de WordPress (404 rattrapée, statut final 200)

« Atterrit sur » = page servie aujourd'hui (canonique observée) ; « Cible à utiliser » = page publiée dans la langue du contenu source.

| Adresse | Atterrit sur | Cible à utiliser | Nb | Contenus | Remarque |
|---|---|---|---|---|---|
| `/agavoids/` | `/en/agavoids/` | `/en/agavoids/` | 6 | 15345 « Yucca treculeana » (en)<br>15352 « Yucca elephantipes » (en)<br>15361 « Yucca filifera » (en)<br>15367 « Yucca decipiens » (en)<br>15373 « Yucca brevifolia » (en)<br>15381 « Yucca filamentosa » (en) |  |
| `/yucca/` | `/agavoides/yucca/` | `/en/agavoids/yucca/` | 6 | 15345 « Yucca treculeana » (en)<br>15352 « Yucca elephantipes » (en)<br>15361 « Yucca filifera » (en)<br>15367 « Yucca decipiens » (en)<br>15373 « Yucca brevifolia » (en)<br>15381 « Yucca filamentosa » (en) |  |
| `/en/fouquieraceae/fouquieria/ormosa/` | `/en/fouquieraceae/fouquieria/formosa/` | `/en/fouquieraceae/fouquieria/formosa/` | 5 | 21183 « Family Fouquieriaceae » (en)<br>21220 « Fouquieria macdougalii » (en)<br>21231 « Fouquieria ochoterenae » (en)<br>21236 « Fouquieria shrevei » (en)<br>21242 « Fouquieria leonilae » (en) |  |
| `/en/pachypodium/` | `/famille-apocynaceae/pachypodium/` | `/en/apocynaceae/pachypodium/` | 5 | 18403 « Pachypodium Pests and Diseases: Diagnosis, Treatment & Rescue Protocols » (en)<br>18409 « My Pachypodium Is Losing Its Leaves: Causes, Decision Tree & Solutions » (en)<br>18426 « Family Apocynaceae » (en) | atterrit sur la page FR |
| `/euphorbia/ingens/` | `/en/euphorbiaceae/euphorbia/ingens/` | `/en/euphorbiaceae/euphorbia/ingens/` | 5 | 19075 « Euphorbia candelabrum » (en)<br>19083 « Euphorbia abyssinica » (en) |  |
| `/en/cycads/cycas/cycas-armstrongii/` | `/en/cycads/cycas/armstrongii/` | `/en/cycads/cycas/armstrongii/` | 4 | 16443 « Cycas micholitzii » (en)<br>16487 « Cycas calcicola » (en)<br>16520 « Cycas megacarpa » (en) |  |
| `/aloidi/` | `/it/piante/aloidi/` | `/it/piante/aloidi/` | 3 | 14749 « Aloe arborescens » (it)<br>14808 « Aloe ferox » (it)<br>14819 « Aloe humilis » (it) |  |
| `/dioscoreaceae/dioscorea/` | `/en/dioscoreaceae/dioscorea/` | `/en/dioscoreaceae/dioscorea/` | 3 | 23289 « Family Dioscoreaceae » (en)<br>23298 « Discorea elephantipes » (en) |  |
| `/es/burseraceae/` | `/en/burseraceae/` | `/es/burseraceae-2/` | 3 | 23862 « El género Commiphora » (es)<br>23863 « El género Bursera » (es)<br>23864 « El género Boswellia » (es) | atterrit sur la page EN |
| `/culture-exterieure/` | `/culture-entretien-des-plantes-succulentes/culture-exterieure/` | `/culture-entretien-des-plantes-succulentes/culture-exterieure/` | 2 | 535 « Culture des succulentes » (fr)<br>611 « Culture en intérieur » (fr) |  |
| `/culture-sous-serre/` | `/culture-entretien-des-plantes-succulentes/culture-sous-serre/` | `/culture-entretien-des-plantes-succulentes/culture-sous-serre/` | 2 | 535 « Culture des succulentes » (fr)<br>611 « Culture en intérieur » (fr) |  |
| `/en/succulent-plants/fouquieria/` | `/famille-fouquieriaceae/fouquieria/` | `/en/fouquieraceae/fouquieria/` | 2 | 21220 « Fouquieria macdougalii » (en)<br>21227 « Fouquieria formosa » (en) | atterrit sur la page FR |
| `/es/agavoides/dracaena/cinnabari/` | `/agavoides/dracaena/cinnabari/` | `/es/agavaceae/dracaena/cinnabari/` | 2 | 23623 « Dracaena inexpectata » (es) |  |
| `/es/apocynaceae/` | `/en/apocynaceae/` | `/es/apocynaceae-2/` | 2 | 23888 « El género Adenium » (es)<br>23889 « El género Fockea » (es) | atterrit sur la page EN |
| `/euphorbia/` | `/famille-euphorbiaceae/euphorbia/` | `/en/euphorbiaceae/euphorbia/` | 2 | 19083 « Euphorbia abyssinica » (en)<br>19101 « Euphorbia ammak » (en) |  |
| `/jardins-botaniques-et-collections-de-plantes-succulentes/domaine-du-rayol/` | `/jardin-botanique/domaine-du-rayol/` | `/jardin-botanique/domaine-du-rayol/` | 2 | 1427 « Nolina longifolia » (fr)<br>10568 « Acacia karroo » (fr) |  |
| `/yucca/baccata/` | `/agavoides/yucca/baccata/` | `/en/agavoids/yucca/baccata/` | 2 | 15513 « Yucca arizonica » (en) |  |
| `/agave/` | `/agavoides/agave/` | `/agavoides/agave/` | 1 | 14721 « Agave schidigera » (fr) |  |
| `/aloe-cheranganiensis/` | `/aloides/aloe/aloe-cheranganiensis/` | `/aloides/aloe/aloe-cheranganiensis/` | 1 | 996 « Le genre Aloe » (fr) |  |
| `/arrosage-des-succulentes/` | `/culture-entretien-des-plantes-succulentes/arrosage-des-succulentes/` | `/culture-entretien-des-plantes-succulentes/arrosage-des-succulentes/` | 1 | 611 « Culture en intérieur » (fr) |  |
| `/beaucarnea/` | `/agavoides/beaucarnea/` | `/en/agavoids/beaucarnea/` | 1 | 15267 « The genus Calibanus » (en) |  |
| `/culture-interieure/` | `/culture-entretien-des-plantes-succulentes/culture-interieure/` | `/culture-entretien-des-plantes-succulentes/culture-interieure/` | 1 | 535 « Culture des succulentes » (fr) |  |
| `/cycadales/cycas/cycas-thouarsii/` | `/cycadales/cycas/thouarsii/` | `/cycadales/cycas/thouarsii/` | 1 | 12273 « Les racines coralloïdes chez les cycadales : rôle, fonctions et implications en culture » (fr) |  |
| `/cycas-revoluta/` | `/it/cycas-revoluta-coltivazione-guida-completa-alla-palma-nana-del-giappone/` | `/it/cycas-revoluta-coltivazione-guida-completa-alla-palma-nana-del-giappone/` | 1 | 14536 « Cycas resistenti al freddo: 5 specie per il nord Italia » (it) | atterrit sur un article IT |
| `/didieraceae/` | `/en/didieraceae/` | `/en/didieraceae/` | 1 | 14798 « Succulent’s guide » (en) |  |
| `/dioscoreaceae/` | `/en/dioscoreaceae/` | `/en/dioscoreaceae/` | 1 | 14798 « Succulent’s guide » (en) |  |
| `/dioscoreaceae/dioscorea/elephantipes/` | `/en/dioscoreaceae/dioscorea/elephantipes/` | `/en/dioscoreaceae/dioscorea/elephantipes/` | 1 | 23291 « Genus Dioscorea » (en) |  |
| `/es/agavoides/agave/` | `/agavoides/agave/` | `/es/agavaceae/agave/` | 1 | 23938 « Agave chrysoglossa » (es) |  |
| `/es/boswellia/` | `/famille-burseraceae/boswellia/` | `/es/burseraceae-2/boswellia/` | 1 | 23859 « La familia Burseraceae » (es) |  |
| `/es/bursera/` | `/en/burseraceae/bursera/` | `/es/burseraceae-2/bursera/` | 1 | 23859 « La familia Burseraceae » (es) | atterrit sur la page EN |
| `/es/commiphora/` | `/en/burseraceae/commiphora/` | `/es/burseraceae-2/commiphora/` | 1 | 23859 « La familia Burseraceae » (es) | atterrit sur la page EN |
| `/es/cycadales-2/cycas/` | `/cycadales/cycas/` | `/es/orden-cycadales/cycas/` | 1 | 23603 « Cycas thouarsii » (es) |  |
| `/es/operculicarya/` | `/famille-anacardiaceae/operculicarya/` | `/es/anacardiaceae/operculicarya/` | 1 | 23865 « La familia Anacardiaceae » (es) |  |
| `/es/pachycormus/` | `/famille-anacardiaceae/pachycormus/` | `/es/anacardiaceae/pachycormus/` | 1 | 23865 « La familia Anacardiaceae » (es) |  |
| `/euphorbia/socotra/` | `/famille-apocynaceae/adenium/socotranum/` | `/en/euphorbiaceae/euphorbia/` | 1 | 19089 « Euphorbia arbuscula » (en) | ATTERRIT SUR LA MAUVAISE PLANTE (Adenium socotranum) ; aucune page « Euphorbia de Socotra » |
| `/euphorbia/tirucalli/` | `/en/euphorbiaceae/euphorbia/tirucalli/` | `/en/euphorbiaceae/euphorbia/tirucalli/` | 1 | 19083 « Euphorbia abyssinica » (en) |  |
| `/euphorbiaceae/` | `/en/euphorbiaceae/` | `/en/euphorbiaceae/` | 1 | 19083 « Euphorbia abyssinica » (en) |  |
| `/how-to-care-for-a-pachypodium-lamerei-madagascar-palm-indoors-complete-guide/` | `/comment-entretenir-pachypodium-lamerei-palmier-de-madagascar-a-linterieur/` | `/en/apocynaceae/pachypodium/lamerei/` | 1 | 18403 « Pachypodium Pests and Diseases: Diagnosis, Treatment & Rescue Protocols » (en) |  |
| `/it/palme/` | `/it/piante/palme/` | `/it/piante/palme/` | 1 | 15082 « Palme vicino alla piscina: rischi, costi e alternative migliori » (it) |  |
| `/it/piante-grasse/fouquieria/` | `/famille-fouquieriaceae/fouquieria/` | `/it/piante/fouquieriaceae/fouquieria/` | 1 | 21272 « Fouquieriacee » (it) | atterrit sur la page FR |
| `/it/piante/cycadales/encephalartos/encephalartos-natalensis/` | `/it/piante/cycadales/encephalartos/natalensis/` | `/cycadales/encephalartos/natalensis/` | 1 | 2436 « Encephalartos altensteinii » (fr) |  |
| `/it/piante/cycadales/il-genere-macrozamia/` | `/it/piante/cycadales/macrozamia/` | `/it/piante/cycadales/macrozamia/` | 1 | 11907 « Cycas in piena terra: coltivazione, rusticità e specie resistenti » (it) |  |
| `/it/specie-di-piante-grasse/aloe/` | `/it/piante/aloidi/aloe/` | `/it/piante/aloidi/aloe/` | 1 | 14831 « Aloe vaombe » (it) |  |
| `/yucca-rostrata/` | `/yucca-rostrata-en-pot-comment-reussir-sa-culture/` | `/en/yucca-rostrata-in-pot/` | 1 | 15285 « Yucca linearifolia » (en) |  |
| `/yucca/neomexicana/` | `/agavoides/agave/neomexicana/` | `/en/agavoids/yucca/neomexicana/` | 1 | 15532 « Yucca harrimaniae » (en) | ATTERRIT SUR LA MAUVAISE PLANTE (Agave neomexicana) |

## Médias manquants

1418 fichiers distincts référencés (liens, `src` et `srcset`, années 2020–2026). Échantillon stratifié de 40 adresses (12 × 2022, 8 × 2026, 6 × 2021, 6 × 2023, 4 × 2020, 2 × 2024, 2 PNG ; originaux et vignettes) : **40 réponses 200, aucun fichier manquant détecté.** Les 4 images `/wp-includes/images/spinner.gif` (contenus 449, 11573, 14798, 23116) sont des fichiers du cœur WordPress, non testés.

## Fichiers de travail

`/tmp/claude-0/-home-user-PHP/108b8faf-69f6-537a-9a6a-fd7662bfd06d/scratchpad/linkaudit/` : `raw/` (JSON bruts REST, 23 lots), `broken.json`, `redirected.json`, `links_all.json`, `classified.json`, `tested.txt` (statuts HTTP), `media_sample.json`.
