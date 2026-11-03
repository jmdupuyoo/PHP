# succulentes.net : pages françaises faibles (familles, genres, espèces)

Audit en **lecture seule** du 2026-09-30 (serveur MCP « Succulentes-1_2_5 », outils `list_content`, `get_seo`, `get_content`). Rien n'a été modifié.

## Méthode

- Périmètre : les 714 pages françaises publiées (type page, langue fr) dont l'adresse commence par `/famille-*/`, `/agavoides/`, `/aloides/`, `/palmiers/`, `/bambous/` ou `/cycadales/` (inventaire `list_content`, 8 pages de 100).
- Niveau déduit de l'adresse : 1 segment = famille (ou racine de groupe : agavoïdes, aloïdes, palmiers, bambous, Cycadales) ; 2 segments = genre ; 3 segments ou plus = espèce (y compris cultivars et sous-espèces).
- Nombre de mots : champ `analysis.words` de `get_seo` (texte hors balises), relevé pour **chacune** des 714 pages. `seo_audit` (limite 300, toutes langues confondues, seuil fixe de 300 mots) ne couvrait pas tout le périmètre et n'a servi qu'au recoupement.
- Seuils : moins de **350 mots** pour une famille ou un genre, moins de **250 mots** pour une espèce.
- Remarques : calculées à partir de `get_seo` (intertitres H2, images, liens internes) : « ≈ 1 à 2 phrases » = 40 mots ou moins, « ≈ 1 paragraphe » = 41 à 120 mots (estimation d'après le nombre de mots), « quelques paragraphes » au-delà. Les remarques de fond (nom obsolète, coquille) viennent des pages lues, du README et de `contenus-obsoletes-2026-09.md`.
- Pages vides signalées le 29/09 (21867, 16752, 16863, 22170, 17597) : elles ne sont plus publiées et sont donc hors inventaire.

## Synthèse

| Niveau | Pages analysées | Pages faibles | Seuil |
|---|---|---|---|
| famille | 32 | 1 | < 350 mots |
| genre | 121 | 51 | < 350 mots |
| espèce | 561 | 138 | < 250 mots |
| **total** | 714 | **190** | |

## Liste (triée par niveau, puis par nombre de mots croissant)

| id | niveau | titre | adresse | mots | remarques |
|---|---|---|---|---|---|
| 13826 | famille | Les Cycadales | /cycadales/ | 108 | ≈ 1 paragraphe; sans image; racine de groupe; Page d'ordre (racine de 140 sous-pages) réduite à ~100 mots et un intertitre | **enrichie et publiée 01/10/2026**
| 2819 | genre | Le genre Neobuxbaumia | /famille-cactaceae/neobuxbaumia/ | 19 | ≈ 1 à 2 phrases; aucun H2; sans image; Une phrase et une liste de 2 espèces (inventaire contenus obsolètes) ; **enrichie et publiée le 01/10/2026** |
| 8773 | genre | Le genre Romneya | /famille-papaveraceae/romneya/ | 39 | ≈ 1 à 2 phrases; aucun H2; sans image |
| 15233 | genre | Le genre Hesperaloe | /agavoides/hesperaloe/ | 39 | ≈ 1 à 2 phrases; aucun H2; sans image; aucun lien interne; Pas de lien d'intro vers /agavoides/ ; la meta cite les « Agavacées », famille obsolète (Asparagaceae, Agavoideae) ; **enrichie et publiée le 30/09/2026** |
| 3716 | genre | Le genre Pachycereus | /famille-cactaceae/pachycereus/ | 40 | ≈ 1 à 2 phrases; sans image ; **enrichie et publiée le 01/10/2026** |
| 8702 | genre | Le genre Phytolacca | /famille-phytolaccaceae/phytolacca/ | 40 | ≈ 1 à 2 phrases; aucun H2; sans image |
| 10307 | genre | Genre Nymphoides | /famille-menyanthaceae/nymphoides/ | 40 | ≈ 1 à 2 phrases; aucun H2; sans image; Nymphoides : ancien rattachement erroné aux Nymphéacées (voir README) ; vérifier que le texte cite bien les Menyanthaceae |
| 5255 | genre | Le genre Pseudobombax | /famille-malvaceae/pseudobombax/ | 41 | ≈ 1 paragraphe; aucun H2; sans image |
| 5153 | genre | Le Pereskia | /famille-cactaceae/pereskia/ | 43 | ≈ 1 paragraphe; aucun H2; sans image; Pas de meta description ; titre « Le Pereskia » à harmoniser (« Le genre Pereskia ») ; **enrichie et publiée le 01/10/2026** |
| 2851 | genre | Le genre Beschorneria | /agavoides/beschorneria/ | 45 | ≈ 1 paragraphe; aucun H2; sans image; Surtout une liste d'espèces liées (5 liens) ; **enrichie et publiée le 30/09/2026** |
| 9784 | genre | Le genre Rhapidophyllum | /palmiers/rhapidophyllum/ | 49 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 01/10/2026** |
| 5193 | genre | Le genre Sansevieria | /agavoides/sansevieria/ | 50 | ≈ 1 paragraphe; aucun H2; sans image; Genre obsolète : Sansevieria est aujourd'hui inclus dans Dracaena (page 3381) ; réécrire en page de renvoi ou rediriger ; **enrichie et publiée le 30/09/2026** |
| 5115 | genre | Le genre Lophophora | /famille-cactaceae/lophophora/ | 61 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 01/10/2026** |
| 5227 | genre | Le genre Calibanus | /agavoides/calibanus/ | 61 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 30/09/2026** |
| 5124 | genre | Le genre Espostoa | /famille-cactaceae/espostoa/ | 62 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 01/10/2026** |
| 5107 | genre | Le genre Epiphyllum | /famille-cactaceae/epiphyllum/ | 65 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 01/10/2026** |
| 8556 | genre | Le genre Callistemon | /famille-myrtaceae/callistemon/ | 73 | ≈ 1 paragraphe; sans image |
| 3621 | genre | Le genre Jatropha | /famille-euphorbiaceae/jatropha/ | 74 | ≈ 1 paragraphe; aucun H2; sans image |
| 7435 | genre | Le genre Chorisia | /famille-malvaceae/chorisia/ | 74 | ≈ 1 paragraphe; aucun H2; sans image; Nom obsolète : Chorisia est aujourd'hui inclus dans Ceiba (C. speciosa, C. insignis) ; expliquer le transfert |
| 5382 | genre | Le genre Sedum | /famille-crassulaceae/sedum/ | 75 | ≈ 1 paragraphe; aucun H2; sans image |
| 5330 | genre | Le genre Hylocereus | /famille-cactaceae/hylocereus/ | 84 | ≈ 1 paragraphe; aucun H2; sans image; Nom obsolète : Hylocereus est aujourd'hui inclus dans Selenicereus (page 23791) ; doublon de fait à fusionner ou réorienter ; **enrichie et publiée le 01/10/2026** |
| 7762 | genre | Le genre Fascicularia | /famille-bromeliaceae/fascicularia/ | 86 | ≈ 1 paragraphe; aucun H2; sans image |
| 5098 | genre | Le genre Copiapoa | /famille-cactaceae/copiapoa/ | 91 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 01/10/2026** |
| 5402 | genre | Le genre Trachycarpus | /palmiers/trachycarpus/ | 91 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 01/10/2026** |
| 6392 | genre | Le genre Aechmea | /famille-bromeliaceae/aechmea/ | 91 | ≈ 1 paragraphe; sans image; Un intertitre, pas de liste d'espèces rédigée |
| 4616 | genre | Le genre Strelitzia | /famille-strelitziaceae/strelitzia/ | 92 | ≈ 1 paragraphe; sans image |
| 4081 | genre | Le genre Stangeria | /cycadales/stangeria/ | 93 | ≈ 1 paragraphe; aucun H2; sans image | **enrichie et publiée 01/10/2026**
| 5410 | genre | Le genre Butia | /palmiers/butia/ | 101 | ≈ 1 paragraphe; aucun H2; sans image; Mentionne Butia capitata devenu Butia odorata ; page parente de fiches palmiers ; **enrichie et publiée le 01/10/2026** |
| 5309 | genre | Le genre Echinocereus | /famille-cactaceae/echinocereus/ | 111 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 01/10/2026** |
| 3605 | genre | Le genre Plumeria | /famille-apocynaceae/plumeria/ | 112 | ≈ 1 paragraphe |
| 7613 | genre | Le genre Hechtia  | /famille-bromeliaceae/hechtia/ | 115 | ≈ 1 paragraphe; sans image |
| 7739 | genre | Le genre Livistona | /palmiers/livistona/ | 135 | quelques paragraphes ; **enrichie et publiée le 01/10/2026** |
| 7906 | genre | Le genre Tagetes | /famille-asteraceae/tagetes/ | 137 | quelques paragraphes; sans image; Coquille « Tagetes padula » signalée dans le README |
| 8281 | genre | Le genre Acacia | /famille-fabaceae/acacia/ | 138 | quelques paragraphes; sans image; Surtout une liste de liens vers les espèces (16 liens), peu de texte |
| 5202 | genre | Le genre Kalanchoe | /famille-crassulaceae/kalanchoe/ | 142 | quelques paragraphes; aucun H2; sans image; 3 paragraphes (origine, bulbilles envahissantes, 2 espèces citées sans lien) ; aucune liste d'espèces |
| 8200 | genre | Le genre Erythrina | /famille-fabaceae/erythrina/ | 142 | quelques paragraphes; sans image |
| 3093 | genre | Le genre Beaucarnea | /agavoides/beaucarnea/ | 144 | quelques paragraphes; aucun H2; sans image; Liste d'espèces liées, sans intertitre ; **enrichie et publiée le 30/09/2026** |
| 9534 | genre | Le genre Leonotis | /famille-lamiaceae/leonotis/ | 149 | quelques paragraphes; sans image |
| 8122 | genre | Le genre Grevillea | /famille-proteaceae/grevillea/ | 155 | quelques paragraphes; sans image |
| 4782 | genre | Le genre Cordyline | /agavoides/cordyline/ | 159 | quelques paragraphes; sans image ; **enrichie et publiée le 30/09/2026** |
| 4512 | genre | le genre Trithrinax | /palmiers/trithrinax/ | 175 | quelques paragraphes; sans image ; **enrichie et publiée le 01/10/2026** |
| 8624 | genre | Le genre Hakea | /famille-proteaceae/hakea/ | 183 | quelques paragraphes; sans image |
| 6541 | genre | Le genre Butyagrus | /palmiers/butyagrus/ | 191 | quelques paragraphes; sans image ; **enrichie et publiée le 01/10/2026** |
| 1047 | genre | Genre Nolina | /agavoides/nolina/ | 209 | quelques paragraphes; sans image; Surtout une liste de liens vers les espèces (14 liens), peu de texte ; **enrichie et publiée le 30/09/2026** |
| 7696 | genre | Genre Ochagavia | /famille-bromeliaceae/ochagavia/ | 213 | quelques paragraphes |
| 6637 | genre | Le genre Lomandra | /agavoides/lomandra/ | 232 | quelques paragraphes; sans image ; **enrichie et publiée le 30/09/2026** |
| 4693 | genre | Le genre Phoenix | /palmiers/phoenix/ | 245 | quelques paragraphes; sans image ; **enrichie et publiée le 01/10/2026** |
| 5391 | genre | Le genre Chamaerops | /palmiers/chamaerops/ | 304 | quelques paragraphes ; **enrichie et publiée le 01/10/2026** |
| 7933 | genre | Le genre Banksia | /famille-proteaceae/banksia/ | 310 | quelques paragraphes; sans image |
| 3745 | genre | Le genre Moringa | /famille-moringaceae/moringa/ | 323 | quelques paragraphes; sans image |
| 3630 | genre | Le genre Cylindropuntia | /famille-cactaceae/cylindropuntia/ | 329 | quelques paragraphes ; **enrichie et publiée le 01/10/2026** |
| 9895 | genre | Le genre Cyathea | /famille-cyatheaceae/cyathea/ | 330 | quelques paragraphes; sans image |
| 10253 | espèce | Nymphaea odorata « sulphurea » | /famille-nymphaeaceae/nymphaea/sulphurea/ | 16 | ≈ 1 à 2 phrases; aucun H2; sans image; Une phrase (cultivar) |
| 10300 | espèce | Nymphaea ‘Siam Pink’ | /famille-nymphaeaceae/nymphaea/nymphaea-siam-pink/ | 20 | ≈ 1 à 2 phrases; aucun H2; sans image; Une phrase (cultivar) |
| 3539 | espèce | Adenium socotranum | /famille-apocynaceae/adenium/socotranum/ | 21 | ≈ 1 à 2 phrases; aucun H2; sans image; Une phrase (inventaire contenus obsolètes) |
| 10362 | espèce | Nymphaea ‘Emily Grant Hutchings’ | /famille-nymphaeaceae/nymphaea/emily-grant-hutchings/ | 21 | ≈ 1 à 2 phrases; aucun H2; sans image; Une phrase (cultivar) ; image mise en avant « red-flare » à vérifier |
| 10383 | espèce | Nymphaea ‘Wood’s White Knight’ | /famille-nymphaeaceae/nymphaea/woods-white-knight/ | 22 | ≈ 1 à 2 phrases; aucun H2; sans image; Une phrase et une image (cultivar) |
| 10260 | espèce | Nymphaea ‘Red flare’ | /famille-nymphaeaceae/nymphaea/red-flare/ | 28 | ≈ 1 à 2 phrases; aucun H2; sans image; cultivar |
| 3748 | espèce | Moringa hildebrandtii | /famille-moringaceae/moringa/hildebrandtii/ | 31 | ≈ 1 à 2 phrases; aucun H2; sans image |
| 10158 | espèce | Nymphaea « Dallas » | /famille-nymphaeaceae/nymphaea/dallas/ | 32 | ≈ 1 à 2 phrases; aucun H2; sans image; cultivar |
| 10182 | espèce | Nymphaea ‘Colorado’ | /famille-nymphaeaceae/nymphaea/colorado/ | 34 | ≈ 1 à 2 phrases; aucun H2; sans image; cultivar |
| 3136 | espèce | Beaucarnea gracilis | /agavoides/beaucarnea/gracilis/ | 35 | ≈ 1 à 2 phrases; aucun H2; sans image |
| 3943 | espèce | Adansonia za | /famille-malvaceae/adansonia/za/ | 35 | ≈ 1 à 2 phrases; aucun H2; sans image |
| 8158 | espèce | Grevillea rhyolitica | /famille-proteaceae/grevillea/rhyolitica/ | 37 | ≈ 1 à 2 phrases; aucun H2; sans image |
| 2594 | espèce | Dasylirion texanum | /agavoides/dasylirion/texanum/ | 40 | ≈ 1 à 2 phrases; aucun H2; sans image |
| 8337 | espèce | Acacia terminalis | /famille-fabaceae/acacia/terminalis/ | 40 | ≈ 1 à 2 phrases; aucun H2 |
| 10377 | espèce | Nymphaea ‘Massanou’ | /famille-nymphaeaceae/nymphaea/massanou/ | 40 | ≈ 1 à 2 phrases; aucun H2; sans image; cultivar |
| 2003 | espèce | Agave tequilana | /agavoides/agave/tequilana/ | 41 | ≈ 1 paragraphe; aucun H2; sans image; Un seul paragraphe de 3 phrases (sirop d'agave, tequila) alors que l'espèce est majeure ; **enrichie et publiée le 30/09/2026** |
| 3760 | espèce | Moringa drouhardii | /famille-moringaceae/moringa/drouhardii/ | 42 | ≈ 1 paragraphe; aucun H2; sans image |
| 3107 | espèce | Beaucarnea stricta | /agavoides/beaucarnea/stricta/ | 43 | ≈ 1 paragraphe; aucun H2; sans image |
| 2583 | espèce | Dasylirion glaucophyllum | /agavoides/dasylirion/glaucophyllum/ | 45 | ≈ 1 paragraphe; aucun H2; sans image |
| 2652 | espèce | Nolina bigelovii | /agavoides/nolina/bigelovii/ | 45 | ≈ 1 paragraphe; aucun H2; sans image |
| 8778 | espèce | Romneya coulteri￼ | /famille-papaveraceae/romneya/coulteri/ | 45 | ≈ 1 paragraphe; aucun H2; sans image; Caractère parasite (U+FFFC) à la fin du titre |
| 6368 | espèce | Puya coerulea | /famille-bromeliaceae/puya/coerulea/ | 46 | ≈ 1 paragraphe; aucun H2 |
| 8441 | espèce | Acacia semilunata | /famille-fabaceae/acacia/semilunata/ | 46 | ≈ 1 paragraphe; aucun H2 |
| 2916 | espèce | Ferocactus histrix | /famille-cactaceae/ferocactus/histrix/ | 48 | ≈ 1 paragraphe; aucun H2; sans image |
| 3929 | espèce | Yucca flaccida | /agavoides/yucca/flaccida/ | 48 | ≈ 1 paragraphe; aucun H2; sans image |
| 3938 | espèce | Adansonia grandidieri | /famille-malvaceae/adansonia/grandidieri/ | 48 | ≈ 1 paragraphe; aucun H2 |
| 8169 | espèce | Grevillea olivacea | /famille-proteaceae/grevillea/olivacea/ | 48 | ≈ 1 paragraphe; aucun H2; sans image |
| 8181 | espèce | Grevillea lavandulacea | /famille-proteaceae/grevillea/lavandulacea/ | 48 | ≈ 1 paragraphe; aucun H2; sans image |
| 10338 | espèce | Nymphaea ‘Wood’s Blue Goddess’ | /famille-nymphaeaceae/nymphaea/woods-blue-goddess/ | 48 | ≈ 1 paragraphe; sans image; cultivar |
| 4001 | espèce | Ferocactus gracilis | /famille-cactaceae/ferocactus/gracilis/ | 49 | ≈ 1 paragraphe; aucun H2; sans image |
| 5265 | espèce | Pseudobombax ellipticum | /famille-malvaceae/pseudobombax/ellipticum/ | 49 | ≈ 1 paragraphe; aucun H2; sans image |
| 8365 | espèce | Acacia longifolia | /famille-fabaceae/acacia/longifolia/ | 49 | ≈ 1 paragraphe; aucun H2; sans image |
| 10274 | espèce | Nymphaea ‘Jack Wood’ | /famille-nymphaeaceae/nymphaea/jack-wood/ | 51 | ≈ 1 paragraphe; aucun H2; sans image; cultivar |
| 3462 | espèce | Pachypodium saundersii | /famille-apocynaceae/pachypodium/saundersii/ | 52 | ≈ 1 paragraphe; aucun H2; sans image |
| 10349 | espèce | Nymphaea ‘Key Largo’ | /famille-nymphaeaceae/nymphaea/key-largo/ | 52 | ≈ 1 paragraphe; sans image; cultivar |
| 2644 | espèce | Nolina microcarpa | /agavoides/nolina/microcarpa/ | 53 | ≈ 1 paragraphe; aucun H2; sans image |
| 8348 | espèce | Acacia hanburyana | /famille-fabaceae/acacia/hanburyana/ | 53 | ≈ 1 paragraphe; aucun H2 |
| 10403 | espèce | Banksia integrifolia | /famille-proteaceae/banksia/integrifolia/ | 54 | ≈ 1 paragraphe; aucun H2 |
| 3471 | espèce | Pachypodium namaquanum | /famille-apocynaceae/pachypodium/namaquanum/ | 55 | ≈ 1 paragraphe; aucun H2; sans image |
| 10314 | espèce | Nymphoides humboldtiana | /famille-menyanthaceae/nymphoides/humboldtiana/ | 57 | ≈ 1 paragraphe; aucun H2; sans image; aucun lien interne; pas de lien d'intro vers le genre Nymphoides |
| 9249 | espèce | Aloe dorotheae | /aloides/aloe/dorotheae/ | 58 | ≈ 1 paragraphe; aucun H2; sans image |
| 6042 | espèce | Chamaedorea radicalis | /palmiers/chamaedorea/radicalis/ | 59 | ≈ 1 paragraphe; aucun H2; sans image |
| 7570 | espèce | Puya alpestris | /famille-bromeliaceae/puya/alpestris/ | 59 | ≈ 1 paragraphe; aucun H2; sans image |
| 8269 | espèce | Grevillea juniperina | /famille-proteaceae/grevillea/juniperina/ | 60 | ≈ 1 paragraphe; aucun H2; sans image |
| 8455 | espèce | Acacia vestita | /famille-fabaceae/acacia/vestita/ | 60 | ≈ 1 paragraphe; aucun H2; sans image |
| 2600 | espèce | Dasylirion wheeleri | /agavoides/dasylirion/wheeleri/ | 61 | ≈ 1 paragraphe; aucun H2; sans image |
| 8566 | espèce | Callistemon citrinus splendens | /famille-myrtaceae/callistemon/citrinus-splendens/ | 61 | ≈ 1 paragraphe; aucun H2; sans image |
| 3229 | espèce | Aloe tomentosa | /aloides/aloe/tomentosa/ | 62 | ≈ 1 paragraphe; aucun H2; sans image |
| 10108 | espèce | Nymphaea « Moon Dance » | /famille-nymphaeaceae/nymphaea/moon-dance/ | 62 | ≈ 1 paragraphe; aucun H2; sans image; cultivar |
| 2901 | espèce | Ferocactus pilosus | /famille-cactaceae/ferocactus/pilosus/ | 63 | ≈ 1 paragraphe; aucun H2; sans image |
| 6270 | espèce | Opuntia huajuapensis | /famille-cactaceae/opuntia/huajuapensis/ | 63 | ≈ 1 paragraphe; aucun H2 |
| 1661 | espèce | Aloe ramosissima | /aloides/aloe/ramosissima/ | 64 | ≈ 1 paragraphe; aucun H2; sans image |
| 2353 | espèce | Agave pygmaea | /agavoides/agave/pygmaea/ | 67 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 30/09/2026** |
| 2125 | espèce | Agave macroacantha | /agavoides/agave/macroacantha/ | 68 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 30/09/2026** |
| 3526 | espèce | Adenium obesum | /famille-apocynaceae/adenium/obesum/ | 68 | ≈ 1 paragraphe; aucun H2; sans image |
| 4481 | espèce | Echinopsis (Trichocereus) tarijensis | /famille-cactaceae/echinopsis/tarijensis/ | 68 | ≈ 1 paragraphe; aucun H2 |
| 5646 | espèce | Pachycereus marginatus | /famille-cactaceae/pachycereus/marginatus/ | 68 | ≈ 1 paragraphe; aucun H2 |
| 8379 | espèce | Acacia dealbata | /famille-fabaceae/acacia/dealbata/ | 68 | ≈ 1 paragraphe; aucun H2; sans image |
| 2576 | espèce | Dasylirion gentryi | /agavoides/dasylirion/gentryi/ | 69 | ≈ 1 paragraphe; aucun H2 |
| 2862 | espèce | Beschorneria septentrionalis | /agavoides/beschorneria/septentrionalis/ | 69 | ≈ 1 paragraphe; aucun H2; sans image |
| 2882 | espèce | Beschorneria rigida | /agavoides/beschorneria/rigida/ | 69 | ≈ 1 paragraphe; aucun H2; sans image |
| 3125 | espèce | Beaucarnea guatemalensis | /agavoides/beaucarnea/guatemalensis/ | 69 | ≈ 1 paragraphe; aucun H2; sans image |
| 4409 | espèce | Brachychiton rupestris | /famille-malvaceae/brachychiton/rupestris/ | 70 | ≈ 1 paragraphe; aucun H2 |
| 5756 | espèce | Dasylirion berlandieri | /agavoides/dasylirion/berlandieri/ | 70 | ≈ 1 paragraphe; aucun H2 |
| 2389 | espèce | Yucca endlichiana | /agavoides/yucca/endlichiana/ | 71 | ≈ 1 paragraphe; aucun H2; sans image |
| 8551 | espèce | Banksia blechnifolia | /famille-proteaceae/banksia/blechnifolia/ | 71 | ≈ 1 paragraphe; aucun H2; sans image |
| 2204 | espèce | Agave zebra | /agavoides/agave/zebra/ | 72 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 30/09/2026** |
| 2317 | espèce | Agave leopoldii | /agavoides/agave/leopoldii/ | 72 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 30/09/2026** |
| 2990 | espèce | Opuntia phaeacantha | /famille-cactaceae/opuntia/phaeacantha/ | 72 | ≈ 1 paragraphe; aucun H2; sans image |
| 9260 | espèce | Aloe cheranganiensis | /aloides/aloe/aloe-cheranganiensis/ | 72 | ≈ 1 paragraphe; aucun H2; sans image |
| 2875 | espèce | Beschorneria albiflora | /agavoides/beschorneria/albiflora/ | 73 | ≈ 1 paragraphe; aucun H2; sans image |
| 2216 | espèce | Agave shawii | /agavoides/agave/shawii/ | 74 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 30/09/2026** |
| 2708 | espèce | Yucca filamentosa | /agavoides/yucca/filamentosa/ | 74 | ≈ 1 paragraphe; aucun H2; sans image |
| 1116 | espèce | Aloe striata | /aloides/aloe/striata/ | 75 | ≈ 1 paragraphe; aucun H2 |
| 2612 | espèce | Nolina parryi | /agavoides/nolina/parryi/ | 76 | ≈ 1 paragraphe; aucun H2; sans image |
| 2688 | espèce | Yucca cernua | /agavoides/yucca/cernua/ | 76 | ≈ 1 paragraphe; aucun H2; sans image |
| 2824 | espèce | Neobuxbaumia polylopha | /famille-cactaceae/neobuxbaumia/polylopha/ | 77 | ≈ 1 paragraphe; aucun H2; sans image |
| 3257 | espèce | Aloe thraskii | /aloides/aloe/thraskii/ | 77 | ≈ 1 paragraphe; aucun H2; sans image |
| 1348 | espèce | Agave striata | /agavoides/agave/striata/ | 78 | ≈ 1 paragraphe; aucun H2 ; **enrichie et publiée le 30/09/2026** |
| 2758 | espèce | Yucca schidigera | /agavoides/yucca/schidigera/ | 80 | ≈ 1 paragraphe; aucun H2; sans image |
| 2983 | espèce | Opuntia basilaris | /famille-cactaceae/opuntia/basilaris/ | 80 | ≈ 1 paragraphe; aucun H2; sans image; aucun lien interne; pas de lien d'intro vers le genre Opuntia |
| 3205 | espèce | Aloe humilis | /aloides/aloe/humilis/ | 80 | ≈ 1 paragraphe; aucun H2; sans image |
| 9970 | espèce | Cyathea lepifera | /famille-cyatheaceae/cyathea/lepifera/ | 80 | ≈ 1 paragraphe; aucun H2; sans image |
| 2784 | espèce | Yucca madrensis | /agavoides/yucca/madrensis/ | 81 | ≈ 1 paragraphe; aucun H2; sans image |
| 5929 | espèce | Euphorbia pulvinata | /famille-euphorbiaceae/euphorbia/pulvinata/ | 81 | ≈ 1 paragraphe; aucun H2; sans image |
| 6751 | espèce | Syagrus romanzoffiana | /palmiers/syagrus/romanzoffiana/ | 81 | ≈ 1 paragraphe; aucun H2 |
| 1992 | espèce | Agave montana | /agavoides/agave/montana/ | 82 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 30/09/2026** |
| 2622 | espèce | Nolina parviflora | /agavoides/nolina/parviflora/ | 82 | ≈ 1 paragraphe; aucun H2 |
| 1983 | espèce | Agave nickelsiae | /agavoides/agave/nickelsiae/ | 84 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 30/09/2026** |
| 1400 | espèce | Yucca decipiens | /agavoides/yucca/decipiens/ | 85 | ≈ 1 paragraphe; aucun H2; sans image |
| 2402 | espèce | Nolina interrata | /agavoides/nolina/interrata/ | 85 | ≈ 1 paragraphe; aucun H2 |
| 2953 | espèce | Yucca harrimaniae | /agavoides/yucca/harrimaniae/ | 85 | ≈ 1 paragraphe; aucun H2; sans image |
| 6598 | espèce | Ferocactus robustus | /famille-cactaceae/ferocactus/robustus/ | 85 | ≈ 1 paragraphe; aucun H2 |
| 6613 | espèce | Brachychiton x roseus | /famille-malvaceae/brachychiton/roseus/ | 85 | ≈ 1 paragraphe; aucun H2 |
| 2868 | espèce | Beschorneria yuccoides | /agavoides/beschorneria/yuccoides/ | 86 | ≈ 1 paragraphe; aucun H2; sans image |
| 2975 | espèce | Opuntia microdasys | /famille-cactaceae/opuntia/microdasys/ | 86 | ≈ 1 paragraphe; aucun H2; sans image |
| 8428 | espèce | Acacia amoena | /famille-fabaceae/acacia/amoena/ | 86 | ≈ 1 paragraphe; aucun H2 |
| 2714 | espèce | Yucca glauca | /agavoides/yucca/glauca/ | 87 | ≈ 1 paragraphe; aucun H2; sans image |
| 3565 | espèce | Adansonia gregorii | /famille-malvaceae/adansonia/gregorii/ | 88 | ≈ 1 paragraphe; aucun H2 |
| 3001 | espèce | Opuntia humifusa | /famille-cactaceae/opuntia/humifusa/ | 89 | ≈ 1 paragraphe; aucun H2; sans image |
| 2276 | espèce | Agave cerulata | /agavoides/agave/cerulata/ | 92 | ≈ 1 paragraphe; aucun H2; sans image ; **enrichie et publiée le 30/09/2026** |
| 8258 | espèce | Erythrina crista-galli | /famille-fabaceae/erythrina/crista-galli/ | 92 | ≈ 1 paragraphe; aucun H2 |
| 1561 | espèce | Aloe dichotoma | /aloides/aloe/dichotoma/ | 93 | ≈ 1 paragraphe; aucun H2 |
| 3031 | espèce | Opuntia cacanapa | /famille-cactaceae/opuntia/cacanapa/ | 93 | ≈ 1 paragraphe; aucun H2; sans image |
| 3314 | espèce | Agave nigra | /agavoides/agave/nigra/ | 95 | ≈ 1 paragraphe; aucun H2; Agave nigra souvent traité comme hybride de jardin (cf. page genre Agave) : à préciser ; **enrichie et publiée le 30/09/2026** |
| 8400 | espèce | Acacia covenyi  | /famille-fabaceae/acacia/covenyi/ | 96 | ≈ 1 paragraphe; aucun H2 |
| 2702 | espèce | Yucca gloriosa | /agavoides/yucca/gloriosa/ | 98 | ≈ 1 paragraphe; aucun H2; sans image |
| 5940 | espèce | Euphorbia resinifera | /famille-euphorbiaceae/euphorbia/resinifera/ | 99 | ≈ 1 paragraphe; aucun H2; sans image |
| 3157 | espèce | Echinocactus platyacanthus | /famille-cactaceae/echinocactus/platyacanthus/ | 101 | ≈ 1 paragraphe; aucun H2; sans image |
| 10283 | espèce | Nymphaea ‘Director George T. Moore’ | /famille-nymphaeaceae/nymphaea/director-george-moore/ | 101 | ≈ 1 paragraphe; sans image; cultivar |
| 2906 | espèce | Ferocactus stainesii | /famille-cactaceae/ferocactus/stainesii/ | 105 | ≈ 1 paragraphe; aucun H2; sans image |
| 3083 | espèce | Echinopsis (Soehrensia) bruchii | /famille-cactaceae/echinopsis/bruchii/ | 106 | ≈ 1 paragraphe; aucun H2 |
| 9978 | espèce | Cyathea cooperi | /famille-cyatheaceae/cyathea/cooperi/ | 109 | ≈ 1 paragraphe; aucun H2; sans image |
| 4065 | espèce | Aloe aculeata | /aloides/aloe/aculeata/ | 110 | ≈ 1 paragraphe; aucun H2; sans image |
| 6377 | espèce | Aeonium castello-paivae | /famille-crassulaceae/aeonium/castello-paivae/ | 113 | ≈ 1 paragraphe; aucun H2 |
| 3060 | espèce | Yucca desmetiana | /agavoides/yucca/desmetiana/ | 114 | ≈ 1 paragraphe; aucun H2 |
| 8876 | espèce | Livistona decora | /palmiers/livistona/decora-decipiens/ | 114 | ≈ 1 paragraphe |
| 3500 | espèce | Pachypodium brevicaule | /famille-apocynaceae/pachypodium/brevicaule/ | 118 | ≈ 1 paragraphe; aucun H2; sans image |
| 9235 | espèce | Aloe kedongensis  | /aloides/aloe/kedongensis/ | 118 | ≈ 1 paragraphe; aucun H2; sans image |
| 10143 | espèce | Nymphaea « Sunfire » | /famille-nymphaeaceae/nymphaea/sunfire/ | 118 | ≈ 1 paragraphe; sans image; cultivar |
| 3489 | espèce | Pachypodium bispinosum | /famille-apocynaceae/pachypodium/bispinosum/ | 120 | ≈ 1 paragraphe; aucun H2; sans image |
| 3721 | espèce | Pachycereus pringlei | /famille-cactaceae/pachycereus/pringlei/ | 120 | ≈ 1 paragraphe; aucun H2; sans image |
| 2370 | espèce | Yucca whipplei | /agavoides/yucca/whipplei/ | 123 | quelques paragraphes; aucun H2; Espèce aujourd'hui placée dans Hesperoyucca (H. whipplei) ; à signaler dans le texte |
| 5346 | espèce | Aloe speciosa | /aloides/aloe/speciosa/ | 125 | quelques paragraphes; aucun H2 |
| 7385 | espèce | Aechmea gamosepala | /famille-bromeliaceae/aechmea/gamosepala/ | 132 | quelques paragraphes; aucun H2 |
| 2634 | espèce | Nolina greenei | /agavoides/nolina/greenei/ | 133 | quelques paragraphes; aucun H2 |
| 4630 | espèce | Strelitzia juncea | /famille-strelitziaceae/strelitzia/juncea/ | 136 | quelques paragraphes; aucun H2; sans image |
| 4048 | espèce | Aloe alooides | /aloides/aloe/alooides/ | 140 | quelques paragraphes; aucun H2; sans image |
| 6059 | espèce | Chamaedorea microspadix | /palmiers/chamaedorea/microspadix/ | 144 | quelques paragraphes; aucun H2; sans image |
| 1109 | espèce | Aloe striatula | /aloides/aloe/striatula/ | 153 | quelques paragraphes; aucun H2; sans image |
| 10123 | espèce | Nymphaea ‘Amabilis’ | /famille-nymphaeaceae/nymphaea/amabilis/ | 165 | quelques paragraphes; sans image |
| 10045 | espèce | Nymphaea « Black Princess » | /famille-nymphaeaceae/nymphaea/black-princess/ | 181 | quelques paragraphes; sans image; cultivar |
| 4090 | espèce | Stangeria eriopus | /cycadales/stangeria/eriopus/ | 187 | quelques paragraphes; aucun H2; sans image |
| 3413 | espèce | Dracaena aletriformis | /agavoides/dracaena/aletriformis/ | 188 | quelques paragraphes |
| 6067 | espèce | Chamaedorea elegans | /palmiers/chamaedorea/elegans/ | 215 | quelques paragraphes; sans image |
| 16087 | espèce | Hesperaloe engelmannii | /agavoides/hesperaloe/engelmannii/ | 223 | quelques paragraphes; sans image |
| 2571 | espèce | Dasylirion longissimum | /agavoides/dasylirion/longissimum/ | 233 | quelques paragraphes; sans image |
| 1151 | espèce | Aloe ferox | /aloides/aloe/ferox/ | 240 | quelques paragraphes |

## Pages proches du seuil (à surveiller, non comptées)

| id | niveau | titre | adresse | mots |
|---|---|---|---|---|
| 24865 | famille | La famille Araliaceae | /famille-araliaceae/ | 364 |
| 24876 | famille | La famille Lamiaceae | /famille-lamiaceae/ | 376 |
| 24866 | famille | La famille Myrtaceae | /famille-myrtaceae/ | 379 |
| 24877 | famille | La famille Nymphaeaceae | /famille-nymphaeaceae/ | 386 |
| 24879 | famille | La famille Menyanthaceae | /famille-menyanthaceae/ | 387 |
| 24862 | famille | La famille Araucariaceae | /famille-araucariaceae/ | 389 |
| 24861 | famille | La famille Asteraceae | /famille-asteraceae/ | 390 |
| 24890 | famille | La famille Fabaceae | /famille-fabaceae/ | 390 |
| 24868 | famille | La famille Passifloraceae | /famille-passifloraceae/ | 391 |
| 24863 | famille | La famille Phytolaccaceae | /famille-phytolaccaceae/ | 398 |
| 24859 | famille | La famille Papaveraceae | /famille-papaveraceae/ | 399 |
| 24860 | famille | La famille Strelitziaceae | /famille-strelitziaceae/ | 399 |
| 24889 | famille | La famille Bromeliaceae | /famille-bromeliaceae/ | 408 |
| 24867 | famille | La famille Cyatheaceae | /famille-cyatheaceae/ | 412 |
| 24888 | famille | La famille Didiereaceae | /famille-didieraceae/ | 412 |
| 24887 | famille | La famille Euphorbiaceae | /famille-euphorbiaceae/ | 413 |
| 24880 | famille | La famille Crassulaceae | /famille-crassulaceae/ | 419 |
| 6299 | genre | Le genre Puya | /famille-bromeliaceae/puya/ | 350 |
| 7631 | genre | Wollemia nobilis | /famille-araucariaceae/wollemia/ | 379 |
| 23896 | genre | Le genre Pterodiscus | /famille-pedaliaceae/pterodiscus/ | 409 |
| 1175 | espèce | Aloe bainesii | /aloides/aloe/aloe-bainesii/ | 260 |
| 10220 | espèce | Nymphaea caerulea | /famille-nymphaeaceae/nymphaea/caerulea/ | 266 |
| 3152 | espèce | Echinocactus grusonii | /famille-cactaceae/echinocactus/grusonii/ | 271 |
| 7422 | espèce | Brachychiton acerifolius  | /famille-malvaceae/brachychiton/acerifolius/ | 285 |
| 5874 | espèce | Furcraea parmentieri | /agavoides/furcraea/parmentieri/ | 290 |
| 2629 | espèce | Nolina texana | /agavoides/nolina/texana/ | 292 |
| 8580 | espèce | Banksia praemorsa | /famille-proteaceae/banksia/praemorsa/ | 310 |
| 8209 | espèce | Erythrina x bidwillii | /famille-fabaceae/erythrina/bidwillii/ | 313 |
| 6314 | espèce | Puya dyckioides | /famille-bromeliaceae/puya/dyckioides/ | 317 |
| 4893 | espèce | Uncarina grandidieri | /famille-pedaliaceae/uncarina/grandidieri/ | 318 |
| 1521 | espèce | Yucca schottii | /agavoides/yucca/schottii/ | 321 |
