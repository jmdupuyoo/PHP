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
| `/es/apocynaceae/` | `/en/apocynaceae/` | `/es/familia-apocynaceae/` | 2 | 23888 « El género Adenium » (es)<br>23889 « El género Fockea » (es) | atterrit sur la page EN |
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

## Corrections du 30/09/2026

Corrections faites avec les outils MCP « Succulentes-1_2_5 » (`replace_in_content`, un contenu par appel : `ids=[id]`, paires `href="<forme exacte>"` → `href="https://succulentes.net/<cible>"`). Chaque correction a d'abord été simulée (dry_run) : le nombre de remplacements correspondait partout au nombre d'occurrences attendu. Les appels réels ont ensuite été lancés un par un. WordPress conserve une révision de chaque contenu modifié.

**Bilan : 88 contenus corrigés, 123 liens réécrits (70 formes d'adresses fautives). 6 liens (6 adresses, dans 5 contenus) ne sont pas corrigés et attendent la décision du propriétaire.**

Vérifications :
- **Avant correction** : les 71 cibles ont été testées avec `fetch_site_url` (statut, `<title>`, canonique ou hreflang, langue de la page). Toutes répondent 200, sont la bonne page et sont dans la langue du contenu source.
- **Après correction** : les 71 cibles ont été re-testées une fois et répondent toutes 200. Un dry_run sur les 88 contenus, avec les 70 formes fautives, ne trouve plus aucune occurrence (`matching: 0`).
- **Contrôle du HTML** par `get_content` sur 3 pages corrigées :
  - 8773 « Le genre Romneya » : le href vaut maintenant `https://succulentes.net/famille-papaveraceae/romneya/coulteri/`. Le `%ef%bf%bc` a disparu et le texte « Romneya coulteri » est intact.
  - 23859 « La familia Burseraceae » : les 3 liens de genres sont maintenant en absolu vers `/es/burseraceae-2/{commiphora,bursera,boswellia}/`.
  - 23865 « La familia Anacardiaceae » : les 2 liens pointent vers `/es/anacardiaceae/{operculicarya,pachycormus}/`.
  
  Sur ces 3 pages, les blocs Gutenberg et le texte des ancres sont intacts.
- **Formes particulières** :
  - 21206 : `…/fouquieria/↗` (caractère collé, sans barre finale) est remplacé par `/en/fouquieraceae/fouquieria/`.
  - 8773 : la forme exacte dans le HTML brut était `coulteri%ef%bf%bc/` (le caractère U+FFFC encodé).
  - 19242 : les liens relatifs n'avaient pas de barre finale (`/agave-neomexicana`, 2 occurrences).
  - 14536 : l'hôte était `https://www.succulentes.net/cycas-revoluta/`.
  - 23102 (espagnol) : la cible est `/es/agavaceae/yucca/elephantipes/`, et non la page FR.

### Corrigé

| ID | Contenu | Adresse remplacée (forme exacte) | Nouvelle cible (https://succulentes.net…) | Nb |
|---|---|---|---|---|
| 383 | Le charançon de l’agave : prévention et lutte | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/agavoides/yucca/elephantipes/` | 1 |
| 535 | Culture des succulentes | `https://succulentes.net/culture-exterieure/` | `/culture-entretien-des-plantes-succulentes/culture-exterieure/` | 1 |
| 535 | Culture des succulentes | `https://succulentes.net/culture-sous-serre/` | `/culture-entretien-des-plantes-succulentes/culture-sous-serre/` | 1 |
| 535 | Culture des succulentes | `https://succulentes.net/culture-interieure/` | `/culture-entretien-des-plantes-succulentes/culture-interieure/` | 1 |
| 611 | Culture en intérieur | `https://succulentes.net/culture-exterieure/` | `/culture-entretien-des-plantes-succulentes/culture-exterieure/` | 1 |
| 611 | Culture en intérieur | `https://succulentes.net/culture-sous-serre/` | `/culture-entretien-des-plantes-succulentes/culture-sous-serre/` | 1 |
| 611 | Culture en intérieur | `https://succulentes.net/arrosage-des-succulentes/` | `/culture-entretien-des-plantes-succulentes/arrosage-des-succulentes/` | 1 |
| 871 | Le genre Yucca | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/agavoides/yucca/elephantipes/` | 1 |
| 982 | Yucca thompsoniana | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/agavoides/yucca/elephantipes/` | 1 |
| 996 | Le genre Aloe | `https://succulentes.net/aloe-cheranganiensis/` | `/aloides/aloe/aloe-cheranganiensis/` | 1 |
| 1018 | Le genre Agave | `https://succulentes.net/agavoides/agave/agave-lophanta/` | `/agavoides/agave/lophanta/` | 1 |
| 1427 | Nolina longifolia | `https://succulentes.net/jardins-botaniques-et-collections-de-plantes-succulentes/domaine-du-rayol/` | `/jardin-botanique/domaine-du-rayol/` | 1 |
| 1866 | Encephalartos natalensis | `https://succulentes.net/cycadales/encephalartos/encephartos-longifolius/` | `/cycadales/encephalartos/longifolius/` | 1 |
| 2436 | Encephalartos altensteinii | `https://succulentes.net/it/piante/cycadales/encephalartos/encephalartos-natalensis/` | `/cycadales/encephalartos/natalensis/` | 1 |
| 2679 | Yucca aloifolia | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/agavoides/yucca/elephantipes/` | 1 |
| 3654 | Plantes succulentes : six espèces représentatives | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/agavoides/yucca/elephantipes/` | 1 |
| 4125 | Le genre Fouquieria | `https://succulentes.net/famille-fouquieriaceae/fouquieria/fourquieria-macdougalii/` | `/famille-fouquieriaceae/fouquieria/macdougalii/` | 1 |
| 4147 | Fouquieria splendens | `https://succulentes.net/famille-fouquieriaceae/fouquieria/fourquieria-macdougalii/` | `/famille-fouquieriaceae/fouquieria/macdougalii/` | 1 |
| 4377 | Yucca arizonica | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/agavoides/yucca/elephantipes/` | 1 |
| 6451 | Mon yucca à des feuilles jaunes : pourquoi et comment le soigner ? | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/agavoides/yucca/elephantipes/` | 1 |
| 8773 | Le genre Romneya | `https://succulentes.net/famille-papaveraceae/romneya/coulteri%ef%bf%bc/` | `/famille-papaveraceae/romneya/coulteri/` | 1 |
| 10568 | Acacia karroo | `https://succulentes.net/jardins-botaniques-et-collections-de-plantes-succulentes/domaine-du-rayol/` | `/jardin-botanique/domaine-du-rayol/` | 1 |
| 11248 | Dioon holmgrenii | `https://succulentes.net/cycadales/dioon/dioon-mejiae/` | `/cycadales/dioon/mejiae/` | 1 |
| 11907 | Cycas in piena terra: coltivazione, rusticità e specie resistenti | `https://succulentes.net/it/piante/cycadales/il-genere-macrozamia/` | `/it/piante/cycadales/macrozamia/` | 1 |
| 12273 | Les racines coralloïdes chez les cycadales : rôle, fonctions et implications en culture | `https://succulentes.net/cycadales/cycas/cycas-thouarsii/` | `/cycadales/cycas/thouarsii/` | 1 |
| 12642 | Encephalartos villosus | `https://succulentes.net/cycadales/encephalartos/encephalartos-horridus/` | `/cycadales/encephalartos/horridus/` | 1 |
| 12706 | Agavoidi | `https://succulentes.net/it/piante/agavoidi/il-genere-beaucarnea/` | `/it/piante/agavoidi/beaucarnea/` | 1 |
| 13082 | Macrozamia communis | `https://succulentes.net/it/piante/cycadales/il-genere-macrozamia/moorei/` | `/it/piante/cycadales/macrozamia/moorei/` | 1 |
| 13105 | Macrozamia moorei | `https://succulentes.net/it/piante/cycadales/il-genere-macrozamia/communis/` | `/it/piante/cycadales/macrozamia/communis/` | 1 |
| 13464 | Yucca lacandonica | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/agavoides/yucca/elephantipes/` | 1 |
| 13564 | Quand et comment rempoter un yucca d’intérieur | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/agavoides/yucca/elephantipes/` | 1 |
| 14127 | Mon cycas est malade : Comment le soigner ? | `https://succulentes.net/mon-cycas-ne-pousse-pas/` | `/cycas-ne-pousse-pas/` | 1 |
| 14536 | Cycas resistenti al freddo: 5 specie per il nord Italia | `https://www.succulentes.net/cycas-revoluta/` | `/it/cycas-revoluta-coltivazione-guida-completa-alla-palma-nana-del-giappone/` | 1 |
| 14721 | Agave schidigera | `/agave/` | `/agavoides/agave/` | 1 |
| 14749 | Aloe arborescens | `/aloidi/` | `/it/piante/aloidi/` | 1 |
| 14798 | Succulent’s guide | `https://succulentes.net/didieraceae/` | `/en/didieraceae/` | 1 |
| 14798 | Succulent’s guide | `https://succulentes.net/dioscoreaceae/` | `/en/dioscoreaceae/` | 1 |
| 14808 | Aloe ferox | `/aloidi/` | `/it/piante/aloidi/` | 1 |
| 14819 | Aloe humilis | `/aloidi/` | `/it/piante/aloidi/` | 1 |
| 14831 | Aloe vaombe | `https://succulentes.net/it/specie-di-piante-grasse/aloe/` | `/it/piante/aloidi/aloe/` | 1 |
| 15082 | Palme vicino alla piscina: rischi, costi e alternative migliori | `https://succulentes.net/it/palme/` | `/it/piante/palme/` | 1 |
| 15114 | Alooids | `https://succulentes.net/en/agave-vs-aloe-difference/` | `/en/agave-vs-aloe/` | 1 |
| 15267 | The genus Calibanus | `https://succulentes.net/beaucarnea/` | `/en/agavoids/beaucarnea/` | 1 |
| 15285 | Yucca linearifolia | `https://succulentes.net/yucca-rostrata/` | `/en/yucca-rostrata-in-pot/` | 1 |
| 15345 | Yucca treculeana | `https://succulentes.net/agavoids/` | `/en/agavoids/` | 1 |
| 15345 | Yucca treculeana | `https://succulentes.net/yucca/` | `/en/agavoids/yucca/` | 1 |
| 15352 | Yucca elephantipes | `https://succulentes.net/agavoids/` | `/en/agavoids/` | 1 |
| 15352 | Yucca elephantipes | `https://succulentes.net/yucca/` | `/en/agavoids/yucca/` | 1 |
| 15361 | Yucca filifera | `https://succulentes.net/agavoids/` | `/en/agavoids/` | 1 |
| 15361 | Yucca filifera | `https://succulentes.net/yucca/` | `/en/agavoids/yucca/` | 1 |
| 15367 | Yucca decipiens | `https://succulentes.net/agavoids/` | `/en/agavoids/` | 1 |
| 15367 | Yucca decipiens | `https://succulentes.net/yucca/` | `/en/agavoids/yucca/` | 1 |
| 15373 | Yucca brevifolia | `https://succulentes.net/agavoids/` | `/en/agavoids/` | 1 |
| 15373 | Yucca brevifolia | `https://succulentes.net/yucca/` | `/en/agavoids/yucca/` | 1 |
| 15381 | Yucca filamentosa | `https://succulentes.net/agavoids/` | `/en/agavoids/` | 1 |
| 15381 | Yucca filamentosa | `https://succulentes.net/yucca/` | `/en/agavoids/yucca/` | 1 |
| 15513 | Yucca arizonica | `https://succulentes.net/yucca/baccata/` | `/en/agavoids/yucca/baccata/` | 2 |
| 15532 | Yucca harrimaniae | `https://succulentes.net/yucca/neomexicana/` | `/en/agavoids/yucca/neomexicana/` | 1 |
| 15567 | Cycas : entretien complet et guide de culture en pot et au jardin | `https://succulentes.net/mon-cycas-ne-pousse-pas/` | `/cycas-ne-pousse-pas/` | 1 |
| 15729 | Il genere Nolina | `https://succulentes.net/it/il-genere-dasylirion/` | `/it/piante/agavoidi/dasylirion/` | 1 |
| 16443 | Cycas micholitzii | `https://succulentes.net/en/cycads/cycas/cycas-armstrongii/` | `/en/cycads/cycas/armstrongii/` | 1 |
| 16487 | Cycas calcicola | `https://succulentes.net/en/cycads/cycas/cycas-armstrongii/` | `/en/cycads/cycas/armstrongii/` | 2 |
| 16520 | Cycas megacarpa | `https://succulentes.net/en/cycads/cycas/cycas-armstrongii/` | `/en/cycads/cycas/armstrongii/` | 1 |
| 18287 | Genre Chusquea  | `https://succulentes.net/bambous/chusquea/cummingii/` | `/bambous/chusquea/cumingii/` | 1 |
| 18403 | Pachypodium Pests and Diseases: Diagnosis, Treatment & Rescue Protocols | `https://succulentes.net/pachypodium-is-losing-its-leaves/` | `/en/my-pachypodium-is-losing-its-leaves-causes-decision-tree-solutions/` | 1 |
| 18403 | Pachypodium Pests and Diseases: Diagnosis, Treatment & Rescue Protocols | `https://succulentes.net/en/pachypodium/` | `/en/apocynaceae/pachypodium/` | 2 |
| 18403 | Pachypodium Pests and Diseases: Diagnosis, Treatment & Rescue Protocols | `https://succulentes.net/how-to-care-for-a-pachypodium-lamerei-madagascar-palm-indoors-complete-guide/` | `/en/apocynaceae/pachypodium/lamerei/` | 1 |
| 18409 | My Pachypodium Is Losing Its Leaves: Causes, Decision Tree & Solutions | `https://succulentes.net/en/pachypodium/` | `/en/apocynaceae/pachypodium/` | 1 |
| 18426 | Family Apocynaceae | `https://succulentes.net/en/pachypodium/` | `/en/apocynaceae/pachypodium/` | 2 |
| 19075 | Euphorbia candelabrum | `/euphorbia/ingens/` | `/en/euphorbiaceae/euphorbia/ingens/` | 3 |
| 19083 | Euphorbia abyssinica | `/euphorbia/ingens/` | `/en/euphorbiaceae/euphorbia/ingens/` | 2 |
| 19083 | Euphorbia abyssinica | `/euphorbia/` | `/en/euphorbiaceae/euphorbia/` | 1 |
| 19083 | Euphorbia abyssinica | `/euphorbia/tirucalli/` | `/en/euphorbiaceae/euphorbia/tirucalli/` | 1 |
| 19083 | Euphorbia abyssinica | `/euphorbiaceae/` | `/en/euphorbiaceae/` | 1 |
| 19101 | Euphorbia ammak | `/euphorbia/` | `/en/euphorbiaceae/euphorbia/` | 1 |
| 19242 | Agave parryi | `/agave-neomexicana` | `/en/agavoids/agave/neomexicana/` | 2 |
| 19242 | Agave parryi | `/agave-havardiana` | `/en/agavoids/agave/havardiana/` | 1 |
| 19242 | Agave parryi | `/agave-ovatifolia` | `/en/agavoids/agave/ovatifolia/` | 1 |
| 19242 | Agave parryi | `/agave-parryi-truncata` | `/en/agavoids/agave/parryi/truncata/` | 1 |
| 19242 | Agave parryi | `/agave-utahensis` | `/en/agavoids/agave/utahensis/` | 1 |
| 19242 | Agave parryi | `/agave-victoriae-reginae` | `/en/agavoids/agave/victoriae-reginae/` | 1 |
| 19637 | Aloe comptonii | `/en/aloe-distans/` | `/en/alooids/aloe/distans/` | 1 |
| 19676 | Aloe erinacea | `/en/aloe-melanacantha/` | `/en/alooids/aloe/melanacantha/` | 1 |
| 19716 | Aloe divaricata | `/en/aloe-descoingsii/` | `/en/alooids/aloe/descoingsii/` | 1 |
| 21089 | Fouquieria diguetii | `https://succulentes.net/famille-fouquieriaceae/fouquieria/fourquieria-macdougalii/` | `/famille-fouquieriaceae/fouquieria/macdougalii/` | 1 |
| 21183 | Family Fouquieriaceae | `https://succulentes.net/en/fouquieraceae/fouquieria/ormosa/` | `/en/fouquieraceae/fouquieria/formosa/` | 1 |
| 21206 | Fouquieria splendens | `https://succulentes.net/en/fouquieraceae/fouquieria/↗` | `/en/fouquieraceae/fouquieria/` | 1 |
| 21220 | Fouquieria macdougalii | `https://succulentes.net/en/fouquieraceae/fouquieria/ormosa/` | `/en/fouquieraceae/fouquieria/formosa/` | 1 |
| 21220 | Fouquieria macdougalii | `https://succulentes.net/en/succulent-plants/fouquieria/` | `/en/fouquieraceae/fouquieria/` | 1 |
| 21227 | Fouquieria formosa | `https://succulentes.net/en/succulent-plants/fouquieria/` | `/en/fouquieraceae/fouquieria/` | 1 |
| 21231 | Fouquieria ochoterenae | `https://succulentes.net/en/fouquieraceae/fouquieria/ormosa/` | `/en/fouquieraceae/fouquieria/formosa/` | 1 |
| 21236 | Fouquieria shrevei | `https://succulentes.net/en/fouquieraceae/fouquieria/ormosa/` | `/en/fouquieraceae/fouquieria/formosa/` | 1 |
| 21242 | Fouquieria leonilae | `https://succulentes.net/en/fouquieraceae/fouquieria/ormosa/` | `/en/fouquieraceae/fouquieria/formosa/` | 1 |
| 21272 | Fouquieriacee | `https://succulentes.net/it/piante-grasse/fouquieria/` | `/it/piante/fouquieriaceae/fouquieria/` | 1 |
| 21857 | Cycas calcicola | `https://succulentes.net/chilades-pandava/` | `/azure-des-sagous-chilades-pandava/` | 1 |
| 23102 | Yucca con hojas amarillas: causas y soluciones | `https://succulentes.net/agavoides/yucca/yucca-elephantipes/` | `/es/agavaceae/yucca/elephantipes/` | 1 |
| 23289 | Family Dioscoreaceae | `https://succulentes.net/dioscoreaceae/dioscorea/` | `/en/dioscoreaceae/dioscorea/` | 2 |
| 23291 | Genus Dioscorea | `https://succulentes.net/dioscoreaceae/dioscorea/elephantipes/` | `/en/dioscoreaceae/dioscorea/elephantipes/` | 1 |
| 23298 | Discorea elephantipes | `https://succulentes.net/dioscoreaceae/dioscorea/` | `/en/dioscoreaceae/dioscorea/` | 1 |
| 23603 | Cycas thouarsii | `https://succulentes.net/es/cycadales-2/cycas/` | `/es/orden-cycadales/cycas/` | 1 |
| 23623 | Dracaena inexpectata | `https://succulentes.net/es/agavoides/dracaena/cinnabari/` | `/es/agavaceae/dracaena/cinnabari/` | 2 |
| 23859 | La familia Burseraceae | `/es/boswellia/` | `/es/burseraceae-2/boswellia/` | 1 |
| 23859 | La familia Burseraceae | `/es/bursera/` | `/es/burseraceae-2/bursera/` | 1 |
| 23859 | La familia Burseraceae | `/es/commiphora/` | `/es/burseraceae-2/commiphora/` | 1 |
| 23862 | El género Commiphora | `/es/burseraceae/` | `/es/burseraceae-2/` | 1 |
| 23863 | El género Bursera | `/es/burseraceae/` | `/es/burseraceae-2/` | 1 |
| 23864 | El género Boswellia | `/es/burseraceae/` | `/es/burseraceae-2/` | 1 |
| 23865 | La familia Anacardiaceae | `/es/operculicarya/` | `/es/anacardiaceae/operculicarya/` | 1 |
| 23865 | La familia Anacardiaceae | `/es/pachycormus/` | `/es/anacardiaceae/pachycormus/` | 1 |
| 23888 | El género Adenium | `https://succulentes.net/es/apocynaceae/` | `/es/familia-apocynaceae/` | 1 |
| 23889 | El género Fockea | `https://succulentes.net/es/apocynaceae/` | `/es/familia-apocynaceae/` | 1 |
| 23908 | Cyphostemma | `https://succulentes.net/en/vitaceae-2/` | `/en/vitaceae-family/` | 1 |
| 23938 | Agave chrysoglossa | `https://succulentes.net/es/agavoides/agave/` | `/es/agavaceae/agave/` | 1 |

### Non corrigé lors du premier passage (décision du propriétaire, traitée plus bas)

| ID | Contenu (langue) | Lien | Raison | Suggestion |
|---|---|---|---|---|
| 19242 | Agave parryi (en) | `/agave-parryi-couesii` (ancre « Agave parryi var. couesii — Coues’ Agave », suivie de *(coming soon)*) | Aucune page EN. Seule la page FR `/agavoides/agave/couesii/` existe. | Retirer le lien en gardant le texte (la page est annoncée « coming soon »), puis le rétablir quand la fiche EN sera publiée. À défaut : lien vers la page EN parente `/en/agavoids/agave/parryi/`, ou vers la page FR (changement de langue). |
| 19242 | Agave parryi (en) | `/agave-parryi-huachucensis` (« … var. huachucensis — Huachuca Agave », *(coming soon)*) | Aucune page EN. Seule la page FR `/agavoides/agave/huachucensis/` existe. | Même traitement que couesii. |
| 3897 | Le genre Aeonium (fr) | `https://succulentes.net/genre-sempervivum/` (« genre *Sempervivum* ») | Aucune page FR sur Sempervivum. Elle existe en EN, IT et ES (`/en/crassulaceae/sempervivum/`). | Retirer le lien en gardant le texte. À défaut : `/famille-crassulaceae/` (à vérifier), ou la page EN (changement de langue). |
| 23389 | Chamaerops — The European Fan Palm (en) | `https://succulentes.net/en/arecaceae/chamaerops/humilis/` (« Chamaerops humilis ») | Aucune fiche EN pour C. humilis. Le genre est monotypique et la page source (`/en/chamaerops/`) traite déjà l'espèce. | Retirer le lien en gardant le texte : sinon la page pointerait vers elle-même. Autre option : lien vers la fiche FR si elle existe (`/palmiers/chamaerops/…`, à vérifier). |
| 19089 | Euphorbia arbuscula (en) | `/euphorbia/socotra/` (« Socotra Euphorbia overview ») | La cible proposée, `/en/euphorbiaceae/euphorbia/` (200, page du genre), ne correspond pas au texte de l'ancre, et il n'existe aucune page « Euphorbia de Socotra ». **Aujourd'hui, WordPress redirige ce lien vers *Adenium socotranum* (mauvaise plante) : à traiter en priorité.** | Pointer vers `/en/euphorbiaceae/euphorbia/` en reformulant l'ancre (« genus *Euphorbia* »), ou retirer le lien en gardant le texte. |
| 24878 | Les aloïdes (fr) | `https://succulentes.net/aloides/haworthiopsis/` (« *Haworthiopsis* ») | La règle 301 renvoie vers `/aloides/`, c'est-à-dire la page source elle-même : la correction créerait un lien de la page vers elle-même. Aucune page FR sur Haworthiopsis. | Retirer le lien en gardant le texte, ou créer la page FR du genre Haworthiopsis (la règle 301 deviendra alors inutile). |

### Décision du propriétaire appliquée (30/09/2026, second passage)

Règle du site : un lien ne pointe que vers une page existante. Pour les 6 liens ci-dessus, le lien est **retiré et le texte conservé**, `<em>` compris. Méthode : `replace_in_content` avec `ids=[id]`, où `from` est la balise `<a …>texte</a>` exacte et `to` le texte seul. Chaque correction a d'abord été simulée (dry_run, compte conforme), puis appliquée réellement, un appel à la fois.

| ID | Balise retirée | Texte conservé | Nb |
|---|---|---|---|
| 19242 | `<a href="/agave-parryi-couesii">…</a>` | *Agave parryi* var. *couesii* — Coues’ Agave | 1 |
| 19242 | `<a href="/agave-parryi-huachucensis">…</a>` | *Agave parryi* var. *huachucensis* — Huachuca Agave | 1 |
| 3897 | `<a href="https://succulentes.net/genre-sempervivum/">…</a>` | genre *Sempervivum* | 1 |
| 23389 | `<a href="https://succulentes.net/en/arecaceae/chamaerops/humilis/">…</a>` | Chamaerops humilis (le `<em>` qui entoure le texte est conservé) | 1 |
| 19089 | `<a href="/euphorbia/socotra/">…</a>` | Socotra Euphorbia overview | 1 |
| 24878 | `<a href="https://succulentes.net/aloides/haworthiopsis/">…</a>` | *Haworthiopsis* | 1 |

Contrôle : un dry_run sur ces 5 contenus avec les 6 adresses ne trouve plus aucune occurrence (`matching: 0`).

Titre de la page 8778 (`/famille-papaveraceae/romneya/coulteri/`) : « Romneya coulteri￼ » devient « Romneya coulteri » (U+FFFC retiré, via `update_content`, champ title uniquement). Contrôle `fetch_site_url` : la page répond 200, avec `<title>Romneya coulteri - Succulentes</title>` et le même texte dans `og:title`.

**Bilan final : les 44 liens cassés et les 85 liens redirigés de l'audit sont tous traités, soit 129 liens dans 93 contenus : 123 réécrits vers leur cible et 6 retirés (texte conservé). S'y ajoute 1 titre corrigé.**

**Contre-ordre reçu après application** : le propriétaire va créer les pages manquantes et demande de conserver les liens de 19242 (couesii, huachucensis), 3897 (`/genre-sempervivum/`) et 23389 (`/en/arecaceae/chamaerops/humilis/`). Ces 4 liens **étaient déjà retirés** quand le contre-ordre est arrivé, et ils n'ont pas été rétablis. Pour les rétablir à l'identique, il suffit d'inverser les 4 remplacements ci-dessus avec `replace_in_content` (`ids=[id]`, `from` = texte seul, `to` = balise `<a …>` d'origine), ou de restaurer la révision WordPress précédente de ces 3 contenus. Les retraits de 19089 (socotra) et 24878 (haworthiopsis), ainsi que la correction du titre 8778, sont confirmés.
