# Liens cassés — Cycadales FR (contrôle du 10/10/2026)

Périmètre : page ordre *Cycadales* (13826), 10 pages genres, 381 fiches espèces enfants (392 pages) et 39 articles de blog FR parlant de cycadales (titre ou ≥ 10 mentions de cycas/cycadales/genres, dont l’article 27312 « Les cycadales des jardins botaniques italiens » publié le 10/10 à 13 h et contrôlé à part), soit 431 contenus. Source : HTML rendu de l’API REST publique ; écritures par `replace_in_content` (MCP Succulentes_net, simulation puis application). Règle appliquée : `prompts/redaction-fiches.md`, section « Liens cassés » (décision du 10/10/2026).

Méthode : `curl -sIL` puis GET si HEAD refusé, user-agent Chrome de bureau, 2 essais, 1 s entre deux requêtes vers un même hôte ; DOI vérifiés aussi par l’API des handles doi.org (DOI enregistré = lien valide même si l’éditeur bloque les robots) ; domaines en échec vérifiés par DNS (dns.google) et RDAP ; copies archivées cherchées par `https://archive.org/wayback/available` (plusieurs essais, variantes http/https, www, barre finale ; capture la plus récente en 200, aucune date de consultation n’étant indiquée pour les liens cassés). web.archive.org lui-même n’est pas joignable depuis l’environnement : les captures retenues n’ont pas pu être ouvertes, seul le statut 200 renvoyé par l’API a été contrôlé.

## Synthèse

| Indicateur | Valeur |
|---|---|
| Adresses externes distinctes testées | 2 333 (≈ 3 320 occurrences page × adresse ; adresses tronquées à l’affichage comptées via leur `href`) |
| Fonctionnelles | 1 933 |
| Cassées | 24 adresses, 32 occurrences page × adresse |
| — action 2 (copie archive.org) | 10 adresses / 18 occurrences |
| — action 3 (racine du site + « page n’existant plus ») | 11 adresses / 11 occurrences |
| — action 4 (site disparu, URL retirée) | 3 adresses / 3 occurrences |
| Non vérifiables (protection anti-robots, TLS, DNS en échec temporaire…) | 376 — rien changé |
| Liens internes succulentes.net distincts testés | 456 : 456 × 200 sans redirection, aucun à corriger |

## Liens cassés corrigés

| Page | Ancienne URL | Statut | Action | Nouvelle URL |
|---|---|---|---|---|
| 21857 [Cycas calcicola](/cycadales/cycas/calcicola/) | `http://plantnet.rbgsyd.nsw.gov.au/cgi-bin/cycadpg` | 404 | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://plantnet.rbgsyd.nsw.gov.au/` |
| 21857 [Cycas calcicola](/cycadales/cycas/calcicola/) | `https://cycadales.eu/growing-australian-cycas-under-european-climates/` | redirection vers l’accueil | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://cycadales.eu/` |
| 13700 [Cycas circinalis](/cycadales/cycas/circinalis/) | `https://repository.naturalis.nl/pub/533833/BLUME1998_43_1_159-170.pdf` | 404 | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://repository.naturalis.nl/` |
| 13700 [Cycas circinalis](/cycadales/cycas/circinalis/) | `https://www.palmenforum.de/forum/index.php?thread/31272-kennt-jemand-cycas-circinalis/` | 404 | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://www.palmenforum.de/` |
| 6175 [Cycas diannanensis](/cycadales/cycas/diannanensis/) | `https://www.cycads.org` | domaine inexistant (NXDOMAIN) | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20170613231610/http://cycads.org/` |
| 14413 [Cycas micholitzii](/cycadales/cycas/micholitzii/) | `https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` | 410 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20210329095733/https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` |
| 13945 [Cycas revoluta](/cycadales/cycas/revoluta/) | `https://www.domainedurayol.org/le-jardin/plan-jardin/le-jardin-dasie-subtropicale/` | 404 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20260116063815/https://www.domainedurayol.org/le-jardin/plan-jardin/le-jardin-dasie-subtropicale/` |
| 10600 [Cycas thouarsii](/cycadales/cycas/thouarsii/) | `http://www.jardin-botanique-lyon.com/jbot/sections/fr/decouvrir_le_jardin_botanique/serres/serre_pandanus/` | 404 (après redirection vers lyon.fr) | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20251217064638/http://www.jardin-botanique-lyon.com/jbot/sections/fr/decouvrir_le_jardin_botanique/serres/serre_pandanus/` |
| 7876 [Dioon angustifolium](/cycadales/dioon/angustifolium/) | `https://www.tropicamente.it/forum/topic/65277-piante-che-ce-lhanno-fatta-non-ce-lhanno-fatta/` | 404 | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://www.tropicamente.it/` |
| 1373 [Encephalartos longifolius](/cycadales/encephalartos/longifolius/) | `https://www.birdlife.org.za/iba-directory/kouga-baviaanskloof-complex/` | 404 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20230605074905/https://www.birdlife.org.za/iba-directory/kouga-baviaanskloof-complex/` |
| 2480 [Encephalartos senticosus](/cycadales/encephalartos/senticosus/) | `https://cycadales.eu/germination-cycad-seeds/` | redirection vers l’accueil | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://cycadales.eu/` |
| 10803 [Encephalartos woodii](/cycadales/encephalartos/woodii/) | `https://www.dendrology.org/publications/dendrology/encephalartos-woodii` | 404 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20260309092838/https://www.dendrology.org/publications/dendrology/encephalartos-woodii/` |
| 13803 [Le genre Lepidozamia](/cycadales/lepidozamia/) | `https://plantnet.rbgsyd.nsw.gov.au/cgi-bin/cycadpg?taxname=Lepidozamia` | 404 | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://plantnet.rbgsyd.nsw.gov.au/` |
| 1471 [Macrozamia communis](/cycadales/macrozamia/communis/) | `https://ameblo.jp/toshikazu666/entry-12826286822.html` | 404 | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://ameblo.jp/toshikazu666/` |
| 1822 [Macrozamia miquelii](/cycadales/macrozamia/miquelii/) | `https://asgap.org.au/wp-content/uploads/2024/03/palm-cycad84.pdf` | 404 ; domaine redirigé vers un site sans rapport (intriguehouse.com) | 4. site disparu : URL retirée, référence gardée en texte « (site disparu) » | — |
| 1822 [Macrozamia miquelii](/cycadales/macrozamia/miquelii/) | `https://www.bom.gov.au/climate/averages/tables/cw_058064_All.shtml` | 404 | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://www.bom.gov.au/` |
| 21754 [Zamia erosa](/cycadales/zamia/erosa/) | `https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` | 410 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20210329095733/https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` |
| 21802 [Zamia imperialis](/cycadales/zamia/imperialis/) | `https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` | 410 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20210329095733/https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` |
| 3971 [Zamia integrifolia](/cycadales/zamia/integrifolia/) | `http://www.cycadforum.org` | domaine inexistant (NXDOMAIN) | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20211201022103/http://cycadforum.org/` |
| 3971 [Zamia integrifolia](/cycadales/zamia/integrifolia/) | `http://www.cycadpages.org` | domaine inexistant (NXDOMAIN) | 4. site disparu : URL retirée, référence gardée en texte « (site disparu) » | — |
| 3971 [Zamia integrifolia](/cycadales/zamia/integrifolia/) | `https://www.jungle-talk.com` | domaine inexistant (NXDOMAIN) | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20260614005441/https://jungle-talk.com/` |
| 3971 [Zamia integrifolia](/cycadales/zamia/integrifolia/) | `https://www.montgomerybotanical.org/cycads` | 404 | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://www.montgomerybotanical.org/` |
| 21767 [Zamia portoricensis](/cycadales/zamia/portoricensis/) | `https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` | 410 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20210329095733/https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` |
| 21729 [Zamia pumila](/cycadales/zamia/pumila/) | `https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` | 410 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20210329095733/https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` |
| 21780 [Zamia pygmaea](/cycadales/zamia/pygmaea/) | `https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` | 410 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20210329095733/https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` |
| 21774 [Zamia stricta](/cycadales/zamia/stricta/) | `https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` | 410 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20210329095733/https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` |
| 21795 [Zamia variegata](/cycadales/zamia/variegata/) | `https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` | 410 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20210329095733/https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` |
| 21734 [Zamia wallisii](/cycadales/zamia/wallisii/) | `https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` | 410 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20210329095733/https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/` |
| 14127 [Mon cycas est malade : Comment le soigner ?](/cycas-malade/) | `https://cycadpages.rbgsyd.nsw.gov.au` | domaine inexistant (NXDOMAIN) | 4. site disparu : URL retirée, référence gardée en texte « (site disparu) » | — |
| 14127 [Mon cycas est malade : Comment le soigner ?](/cycas-malade/) | `https://www.eppo.int/QUARANTINE/data_sheets/insects/AULCYA_ds.pdf` | 404 | 3. racine du site + « (page n’existant plus) » (aucune copie archivée, pas de date de consultation) | `https://www.eppo.int/` |
| 12265 [Encephalartos woodii : espèce, relique ou hybride naturel ?](/encephalartos-woodii-espece-relique-ou-hybride-naturel/) | `https://www.dendrology.org/publications/dendrology/encephalartos-woodii/` | 404 | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20260309092838/https://www.dendrology.org/publications/dendrology/encephalartos-woodii/` |
| 13536 [Quand rempoter un cycas, et à quelle fréquence ?](/quand-rempoter-un-cycas-et-a-quelle-frequence/) | `https://hort.ifas.ufl.edu/database/documents/pdf/shrub_fact_sheets/cycrev.pdf` | redirection vers l’accueil (hos.ifas.ufl.edu) | 2. copie archive.org (capture la plus récente en 200, pas de date de consultation) | `https://web.archive.org/web/20221006194514/https://hort.ifas.ufl.edu/database/documents/pdf/shrub_fact_sheets/cycrev.pdf` |

Détail des formulations (rendu) :

- action 3 : `<a href="racine">racine</a> (page n’existant plus)`, le titre de la source restant dans le texte qui précède ; texte brut : `racine (page n’existant plus)` ;
- action 4 : 3971 « The Cycad Pages (site disparu) → Base de données… » ; 14127 « Haynes, J.L. (2012). World List of Cycads — Cycad Pages. Royal Botanic Garden Sydney (site disparu). » ; 1822 « Groupe *Macrozamia miquelii* (synthèse horticole…) : site de l’ASGAP (site disparu) » (asgap.org.au redirige aujourd’hui vers intriguehouse.com, site sans rapport ; pas de copie archivée du PDF).

## Non vérifiables (aucune modification)

Un 403/429/202 de protection anti-robots (Cloudflare surtout : `cf-mitigated: challenge`) n’est pas un lien cassé. Sont aussi rangés ici les certificats TLS que curl refuse (chaîne incomplète côté serveur, ex. worldfloraonline.org, missouribotanicalgarden.org), les délais dépassés, les erreurs serveur 500/502 et les DNS en SERVFAIL (domaine enregistré mais non résolu au moment du test : ocotillo.fr, thbif.onep.go.th).

| Hôte | Motif | Nb | Pages (ID) |
|---|---|---|---|
| powo.science.kew.org | 403 Cloudflare | 99 | 1256, 1362, 1471, 1822, 1857, 2451, 2461, 2492, 3794, 4081, 5596, 5683, 7876, 9866, 10608, 11161, 11822, 12023, 12142, 12296, 12439, 12464, 12619, 13536, 13803 … |
| www.palmtalk.org | 403 Cloudflare | 51 | 1362, 1373, 1726, 1741, 1833, 1847, 1857, 1866, 2436, 2461, 2480, 2502, 3971, 4081, 4090, 5560, 7258, 7876, 9866, 10600, 10608, 11158, 11161, 11822, 12001 … |
| www.iucnredlist.org | 403 Cloudflare | 36 | 1362, 3971, 5683, 6175, 11248, 13826, 14413, 14461, 21660, 21691, 21704, 21709, 21714, 21722, 21729, 21734, 21754, 21767, 21774, 21780, 21788, 21795, 21802, 21822, 21828 … |
| www.worldfloraonline.org | certificat TLS refusé par curl | 27 | 1362, 1866, 2436, 5683, 13536, 14413, 21680, 21704, 21709, 21714, 21722, 21780, 21788, 21795, 21802, 21828, 21857, 22275, 22283, 22288, 22294, 22303, 22308, 22316, 22321 … |
| www.gbif.org | 403 Cloudflare | 17 | 5683, 12023, 21562, 21822, 21828, 21843, 21885, 21892, 21897, 21932, 21937, 22275, 22283, 22288, 22294, 22328 |
| davesgarden.com | 403 Cloudflare | 11 | 1362, 1373, 1833, 1857, 3963, 5286, 10600, 12001, 13251, 13945, 14413, 14461, 14482, 21822, 21828, 22294, 22369 |
| www.inaturalist.org | 403 Cloudflare | 10 | 1256, 5683, 11822, 14482, 21562, 21822, 21828, 21843, 21857, 21885, 21905 |
| cites.org | 403 Cloudflare | 9 | 1373, 1866, 2451, 2502, 3794, 5683, 7258, 9866, 12023, 13826, 21729, 21734, 21754, 21767, 21774, 21780, 21788, 21795, 21802 |
| www.mdpi.com | 403 anti-robots | 7 | 1362, 2502, 5560, 12142, 13662, 22363 |
| weatherspark.com | 202 (protection anti-robots) | 6 | 1362, 2502, 5596, 11822, 12001 |
| www.huntington.org | 429 (anti-robots / connexion requise) | 6 | 7876, 9866, 10803, 12023, 12439, 12619 |
| www.sciencedirect.com | 403 Cloudflare | 6 | 2480, 5560, 5596, 12265, 21944 |
| thbif.onep.go.th | DNS SERVFAIL | 4 | 26150, 26636, 26724, 26751 |
| www.kew.org | 403 Cloudflare | 4 | 1822, 1866, 2436, 2480, 5560, 10803, 12265, 12464, 13700 |
| www.researchgate.net | 403 Cloudflare | 4 | 1471, 5273, 5560, 12439 |
| academic.oup.com | 403 Cloudflare | 3 | 12273, 13662, 21802 |
| bsapubs.onlinelibrary.wiley.com | 403 Cloudflare | 3 | 1822, 5273, 13662 |
| pubmed.ncbi.nlm.nih.gov | 203 (protection anti-robots) | 3 | 14394, 26327 |
| www.conifers.org | 409 (anti-robots / connexion requise) | 3 | 14482, 21660, 26406 |
| www.missouribotanicalgarden.org | certificat TLS refusé par curl | 3 | 5273, 10608, 13945 |
| agaveville.org | 403 Cloudflare | 2 | 1833, 21822, 21828 |
| bsppjournals.onlinelibrary.wiley.com | 403 Cloudflare | 2 | 1847, 2502, 11822, 12023 |
| en.climate-data.org | 403 Cloudflare | 2 | 12001, 12023 |
| www.agaveville.org | 403 Cloudflare | 2 | 1866, 14413 |
| www.britannica.com | 403 Cloudflare | 2 | 13662, 13803, 26135, 26141 |
| www.catalogueoflife.org | 418 (anti-robots / connexion requise) | 2 | 21892, 21897 |
| www.facebook.com | 400 (anti-robots / connexion requise) | 2 | 5560, 12296 |
| www.hardytropicals.co.uk | 403 anti-robots | 2 | 1866, 13945 |
| www.infoclimat.fr | 403 Cloudflare | 2 | 1373, 12619 |
| www.publish.csiro.au | 403 Cloudflare | 2 | 12142, 13803 |
| zenodo.org | 403 anti-robots | 2 | 26144, 26148, 26152, 26156 |
| 22octmove.seesaa.net | 403 anti-robots | 1 | 1471 |
| acnpsearch.tweb-dev.unibo.it | 403 anti-robots | 1 | 26158 |
| archive.org | délai dépassé | 1 | 22343 |
| archive.unews.utah.edu | 502 erreur serveur | 1 | 1453, 26268 |
| biodiversitylibrary.org | 403 Cloudflare | 1 | 26400 |
| camjol.info | délai dépassé | 1 | 26558, 26562 |
| daf.nt.gov.au | 403 Cloudflare | 1 | 26236 |
| daf.qld.gov.au | 403 Cloudflare | 1 | 1453, 26246 |
| doaj.org | 403 Cloudflare | 1 | 13700 |
| espacepourlavie.ca | 403 Cloudflare | 1 | 1256 |
| fairviewnursery.com | 403 anti-robots | 1 | 2461 |
| fr.weatherspark.com | 202 (protection anti-robots) | 1 | 12619 |
| journals.co.za | 403 Cloudflare | 1 | 2502 |
| onlinelibrary.wiley.com | 403 Cloudflare | 1 | 21968 |
| ryukyushimpo.jp | 405 (anti-robots / connexion requise) | 1 | 1256 |
| stri.si.edu | 403 Cloudflare | 1 | 14482 |
| taxref.mnhn.fr | 403 Cloudflare | 1 | 3794 |
| ugandawildlife.org | 429 (anti-robots / connexion requise) | 1 | 12023 |
| wfoplantlist.org | certificat TLS refusé par curl | 1 | 21774 |
| www.agriculture.gov.au | curl rc=92 | 1 | 26715 |
| www.biodiversitylibrary.org | 403 Cloudflare | 1 | 21780, 21795 |
| www.cabidigitallibrary.org | 403 Cloudflare | 1 | 13536 |
| www.cactiguide.com | 403 Cloudflare | 1 | 21822, 21828 |
| www.data.gouv.fr | erreur TLS | 1 | 1256, 26544 |
| www.doa.go.th | certificat TLS refusé par curl | 1 | 26636, 26655, 26657, 26717, 26719, 26724, 26751 |
| www.dunedin.govt.nz | 403 Cloudflare | 1 | 4081 |
| www.ecured.cu | erreur TLS | 1 | 13865 |
| www.exclusivecycads.com | 403 anti-robots | 1 | 1847 |
| www.jardibotanic.org | erreur TLS | 1 | 11158 |
| www.jardin-botanique-lyon.com | erreur TLS | 1 | 12464 |
| www.mediterraneangardensocietyarchive.org | certificat TLS refusé par curl | 1 | 2436 |
| www.mnhn.fr | 403 Cloudflare | 1 | 1471 |
| www.ocotillo.fr | DNS SERVFAIL | 1 | 234 |
| www.pacsoa.org.au | 500 erreur serveur | 1 | 21857 |
| www.palmpedia.net | 403 Cloudflare | 1 | 3971 |
| www.rayon-de-serre.com | 403 Cloudflare | 1 | 5286 |
| www.rbgsyd.nsw.gov.au | certificat TLS refusé par curl | 1 | 6175 |
| www.rbgsyd.nsw.gov.au | erreur TLS | 1 | 6175 |
| www.sanparks.org | 403 Cloudflare | 1 | 1362 |
| www.science.org | 403 Cloudflare | 1 | 12229 |
| www.timeanddate.com | 403 Cloudflare | 1 | 5596 |
| www.up.ac.za | 403 Cloudflare | 1 | 12001 |

### Liste complète des adresses non vérifiables

- `http://biodiversitylibrary.org/page/44192476` — 403 Cloudflare — pages 26400
- `http://www.ocotillo.fr` — DNS SERVFAIL — pages 234
- `http://www.pacsoa.org.au/w/index.php?title=Cycas_calcicola` — 500 erreur serveur — pages 21857
- `https://22octmove.seesaa.net/article/201412article_17.html` — 403 anti-robots — pages 1471
- `https://academic.oup.com/botlinnean/article/158/3/399/2418451` — 403 Cloudflare — pages 21802
- `https://academic.oup.com/femsec/article/28/1/85/435143` — 403 Cloudflare — pages 12273, 13662
- `https://academic.oup.com/jxb/article/74/19/6145/7221709` — 403 Cloudflare — pages 12273
- `https://acnpsearch.tweb-dev.unibo.it/singlejournalindex/9846095` — 403 anti-robots — pages 26158
- `https://agaveville.org/` — 403 Cloudflare — pages 21822, 21828
- `https://agaveville.org/viewtopic.php?start=50&t=9002` — 403 Cloudflare — pages 1833
- `https://archive.org/details/biostor-64603` — délai dépassé — pages 22343
- `https://archive.unews.utah.edu/news_releases/living-fossils-have-hot-sex/` — 502 erreur serveur — pages 1453, 26268
- `https://bsapubs.onlinelibrary.wiley.com/doi/10.3732/ajb.1200115` — 403 Cloudflare — pages 1822
- `https://bsapubs.onlinelibrary.wiley.com/doi/10.3732/ajb.1400170` — 403 Cloudflare — pages 13662
- `https://bsapubs.onlinelibrary.wiley.com/doi/pdfdirect/10.1002/j.1537-2197.1990.tb11394.x` — 403 Cloudflare — pages 5273
- `https://bsppjournals.onlinelibrary.wiley.com/doi/10.1111/ppa.12619` — 403 Cloudflare — pages 1847, 2502, 11822
- `https://bsppjournals.onlinelibrary.wiley.com/doi/pdf/10.1111/ppa.12619` — 403 Cloudflare — pages 12023
- `https://camjol.info/index.php/CEIBA/article/download/299/226/965` — délai dépassé — pages 26558, 26562
- `https://cites.org` — 403 Cloudflare — pages 2451
- `https://cites.org/eng/app/appendices.php` — 403 Cloudflare — pages 21729, 21734, 21754, 21767, 21774, 21780, 21788, 21795, 21802
- `https://cites.org/eng/taxonomy/term/10381` — 403 Cloudflare — pages 5683
- `https://cites.org/eng/taxonomy/term/41674` — 403 Cloudflare — pages 2502
- `https://cites.org/fra/app/appendices.php` — 403 Cloudflare — pages 9866, 13826
- `https://cites.org/sites/default/files/documents/E-CoP19-Inf-74.pdf` — 403 Cloudflare — pages 7258
- `https://cites.org/sites/default/files/eng/app/2017/E-Appendices-2017-04-04.pdf` — 403 Cloudflare — pages 12023
- `https://cites.org/sites/default/files/ndf_material/WG3-CS3.pdf` — 403 Cloudflare — pages 3794
- `https://cites.org/sites/default/files/ndf_material/WG3-CS4.pdf` — 403 Cloudflare — pages 1373, 1866, 2502
- `https://daf.nt.gov.au/__data/assets/pdf_file/0003/256053/zamia-cycad-poisoning-information-for-livestock-owners.pdf` — 403 Cloudflare — pages 26236
- `https://daf.qld.gov.au/business-priorities/biosecurity/animal-biosecurity-welfare/animal-health-pests-diseases/protect-your-animals/poisonings-of-livestock/zamia-staggers-in-cattle` — 403 Cloudflare — pages 1453, 26246
- `https://davesgarden.com` — 403 Cloudflare — pages 1362
- `https://davesgarden.com/` — 403 Cloudflare — pages 14413, 21822, 21828
- `https://davesgarden.com/community/forums/t/685570/` — 403 Cloudflare — pages 1373, 10600, 12001
- `https://davesgarden.com/guides/articles/view/1619` — 403 Cloudflare — pages 1833
- `https://davesgarden.com/guides/articles/view/1981/` — 403 Cloudflare — pages 13251
- `https://davesgarden.com/guides/articles/view/2422` — 403 Cloudflare — pages 14461, 14482, 22294, 22369
- `https://davesgarden.com/guides/articles/view/2422/` — 403 Cloudflare — pages 3963
- `https://davesgarden.com/guides/pf/go/53327` — 403 Cloudflare — pages 13945
- `https://davesgarden.com/guides/pf/go/59126` — 403 Cloudflare — pages 5286
- `https://davesgarden.com/guides/pf/go/68350` — 403 Cloudflare — pages 10600
- `https://davesgarden.com/guides/pf/showimage/31383/` — 403 Cloudflare — pages 1857
- `https://doaj.org/article/8be27cd1f52546038e5afb0758100ebe` — 403 Cloudflare — pages 13700
- `https://en.climate-data.org/africa/south-africa/mpumalanga/barberton-26870` — 403 Cloudflare — pages 12001
- `https://en.climate-data.org/africa/uganda/western-region/fort-portal-3826/` — 403 Cloudflare — pages 12023
- `https://espacepourlavie.ca/carnet-horticole/cycas` — 403 Cloudflare — pages 1256
- `https://fairviewnursery.com/plants/cycads/` — 403 anti-robots — pages 2461
- `https://fr.weatherspark.com/y/96392/M%C3%A9t%C3%A9o-habituelle-%C3%A0-Bunia-Congo-Kinshasa` — 202 (protection anti-robots) — pages 12619
- `https://journals.co.za/doi/10.10520/ejc-cssa_v35_n7_a8` — 403 Cloudflare — pages 2502
- `https://onlinelibrary.wiley.com/doi/abs/10.1111/jse.12153` — 403 Cloudflare — pages 21968
- `https://powo.science.kew.org/` — 403 Cloudflare — pages 2492, 13826, 14413
- `https://powo.science.kew.org/results?q=Cycas%20ferruginea` — 403 Cloudflare — pages 22030
- `https://powo.science.kew.org/results?q=Cycas%20pachypoda` — 403 Cloudflare — pages 22073
- `https://powo.science.kew.org/results?q=Encephalartos+gratus` — 403 Cloudflare — pages 12439
- `https://powo.science.kew.org/taxon/77174588-1` — 403 Cloudflare — pages 26651
- `https://powo.science.kew.org/taxon/77306139-1` — 403 Cloudflare — pages 26165, 26655
- `https://powo.science.kew.org/taxon/urn%3Alsid%3Aipni.org%3Anames%3A978052-1` — 403 Cloudflare — pages 13945
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:1005751-1` — 403 Cloudflare — pages 21885
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:1007288-1` — 403 Cloudflare — pages 21828
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:1016948-1` — 403 Cloudflare — pages 21709
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:1075555-2` — 403 Cloudflare — pages 13865
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:13517-1` — 403 Cloudflare — pages 9866
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:13523-1` — 403 Cloudflare — pages 14229
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:13527-1` — 403 Cloudflare — pages 13803
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:13533-1` — 403 Cloudflare — pages 4081
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:20006946-1` — 403 Cloudflare — pages 21995
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:20009732-1` — 403 Cloudflare — pages 22275
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:20009734-1` — 403 Cloudflare — pages 22294
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:270503-2` — 403 Cloudflare — pages 21722
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:270517-2` — 403 Cloudflare — pages 21754
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:270522-2` — 403 Cloudflare — pages 14461
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:270540-2` — 403 Cloudflare — pages 21788
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:270556-2` — 403 Cloudflare — pages 18304
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:270557-2` — 403 Cloudflare — pages 21767
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:270561-2` — 403 Cloudflare — pages 21729
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:270563-2` — 403 Cloudflare — pages 21780
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:270576-2` — 403 Cloudflare — pages 22288
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:287152-2` — 403 Cloudflare — pages 22338
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:287153-2` — 403 Cloudflare — pages 22308
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:296944-1` — 403 Cloudflare — pages 12142, 26126
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:296945-1` — 403 Cloudflare — pages 12142, 26130
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:296976-1` — 403 Cloudflare — pages 21562
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:296978-1` — 403 Cloudflare — pages 21822
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:296986-1` — 403 Cloudflare — pages 21857
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:296989-1` — 403 Cloudflare — pages 21892
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297000-1` — 403 Cloudflare — pages 21912
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297036-1` — 403 Cloudflare — pages 22080
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297042-1` — 403 Cloudflare — pages 21937
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297043-1` — 403 Cloudflare — pages 21905
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297086-1` — 403 Cloudflare — pages 1857
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297106-1` — 403 Cloudflare — pages 2451
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297107-1` — 403 Cloudflare — pages 1362
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297149-1` — 403 Cloudflare — pages 26135
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297151-1` — 403 Cloudflare — pages 26141
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297183-1` — 403 Cloudflare — pages 1822
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297240-1` — 403 Cloudflare — pages 21680
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297248-1` — 403 Cloudflare — pages 22283
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297256-1` — 403 Cloudflare — pages 21673
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297327-1` — 403 Cloudflare — pages 21664
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297340-1` — 403 Cloudflare — pages 22316
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297357-1` — 403 Cloudflare — pages 22369
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297360-1` — 403 Cloudflare — pages 14482
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297372-1` — 403 Cloudflare — pages 21660
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297378-1` — 403 Cloudflare — pages 21691
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297402-1` — 403 Cloudflare — pages 21795
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:301988-2` — 403 Cloudflare — pages 22328
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:317130-2` — 403 Cloudflare — pages 22356
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:326820-2` — 403 Cloudflare — pages 10608
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:328823-2` — 403 Cloudflare — pages 13536, 13945
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:328825-2` — 403 Cloudflare — pages 21774
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60427055-2` — 403 Cloudflare — pages 22321
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60436305-2` — 403 Cloudflare — pages 22067
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60436307-2` — 403 Cloudflare — pages 22084
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60436308-2` — 403 Cloudflare — pages 22042
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60436309-2` — 403 Cloudflare — pages 22089
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60436313-2` — 403 Cloudflare — pages 22019
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60436316-2` — 403 Cloudflare — pages 22008
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:60469421-2` — 403 Cloudflare — pages 21956, 21984
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:77062520-1` — 403 Cloudflare — pages 21921
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:77094712-1` — 403 Cloudflare — pages 21802
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:77103403-1` — 403 Cloudflare — pages 22376
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:77144557-1` — 403 Cloudflare — pages 22052
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:77166521-1` — 403 Cloudflare — pages 21968
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:77176960-1` — 403 Cloudflare — pages 21734
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:77197876-1` — 403 Cloudflare — pages 22303
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:77322753-1` — 403 Cloudflare — pages 22363
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:80644-2` — 403 Cloudflare — pages 7876
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:80645-2` — 403 Cloudflare — pages 11161
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:80653-2` — 403 Cloudflare — pages 3794
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:871780-1` — 403 Cloudflare — pages 12296
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:871781-1` — 403 Cloudflare — pages 2461
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:871786-1` — 403 Cloudflare — pages 1471
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:871791-1` — 403 Cloudflare — pages 21704
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:903407-1` — 403 Cloudflare — pages 21714
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:903408-1` — 403 Cloudflare — pages 22349
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:936940-1` — 403 Cloudflare — pages 11822
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:939351-1` — 403 Cloudflare — pages 12464
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:940530-1` — 403 Cloudflare — pages 12619
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:978052-1` — 403 Cloudflare — pages 1256
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:979059-1` — 403 Cloudflare — pages 16437
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:984841-1` — 403 Cloudflare — pages 22059
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:986594-1` — 403 Cloudflare — pages 12023
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:988558-1` — 403 Cloudflare — pages 21897
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:988620-1` — 403 Cloudflare — pages 22025
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:989158-1` — 403 Cloudflare — pages 5596
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:993110-1` — 403 Cloudflare — pages 21932
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:993111-1` — 403 Cloudflare — pages 21975
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:993117-1` — 403 Cloudflare — pages 21944
- `https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:999350-1` — 403 Cloudflare — pages 5683
- `https://pubmed.ncbi.nlm.nih.gov/15891850/` — 203 (protection anti-robots) — pages 26327
- `https://pubmed.ncbi.nlm.nih.gov/21652476/` — 203 (protection anti-robots) — pages 26327
- `https://pubmed.ncbi.nlm.nih.gov/29721831/` — 203 (protection anti-robots) — pages 14394
- `https://ryukyushimpo.jp/news/entry-1381407.html` — 405 (anti-robots / connexion requise) — pages 1256
- `https://stri.si.edu/story/caught-red-handed` — 403 Cloudflare — pages 14482
- `https://taxref.mnhn.fr/taxref-web/taxa/628259` — 403 Cloudflare — pages 3794
- `https://thbif.onep.go.th/taxons/detail/11766` — DNS SERVFAIL — pages 26150
- `https://thbif.onep.go.th/taxons/detail/11777` — DNS SERVFAIL — pages 26724
- `https://thbif.onep.go.th/taxons/detail/11782` — DNS SERVFAIL — pages 26751
- `https://thbif.onep.go.th/taxons/taxon_detail/Cycas%20clivicola` — DNS SERVFAIL — pages 26636
- `https://ugandawildlife.org/wp-content/uploads/2022/01/Queen_Elizabeth_PA-GMP.pdf` — 429 (anti-robots / connexion requise) — pages 12023
- `https://weatherspark.com/y/91693/Average-Weather-in-Kirkwood-Eastern-Cape-South-Africa-Year-Round` — 202 (protection anti-robots) — pages 1362
- `https://weatherspark.com/y/95844/Average-Weather-in-Middelburg-Mpumalanga-South-Africa-Year-Round` — 202 (protection anti-robots) — pages 11822
- `https://weatherspark.com/y/96301/Average-Weather-in-Tugela-Ferry-KwaZulu-Natal-South-Africa-Year-Round` — 202 (protection anti-robots) — pages 5596
- `https://weatherspark.com/y/96323/Average-Weather-in-Duiwelskloof-Limpopo-South-Africa-Year-Round` — 202 (protection anti-robots) — pages 2502
- `https://weatherspark.com/y/96816/Average-Weather-in-Piggs-Peak-Swaziland-Year-Round` — 202 (protection anti-robots) — pages 12001
- `https://weatherspark.com/y/96821/Average-Weather-in-Barberton-Mpumalanga-South-Africa-Year-Round` — 202 (protection anti-robots) — pages 12001
- `https://wfoplantlist.org/taxon/wfo-0000429682-2024-06` — certificat TLS refusé par curl — pages 21774
- `https://www.agaveville.org/` — 403 Cloudflare — pages 14413
- `https://www.agaveville.org/viewtopic.php?t=14376` — 403 Cloudflare — pages 1866
- `https://www.agriculture.gov.au/sites/default/files/documents/cycads.pdf` — curl rc=92 — pages 26715
- `https://www.biodiversitylibrary.org/` — 403 Cloudflare — pages 21780, 21795
- `https://www.britannica.com/plant/Lepidozamia` — 403 Cloudflare — pages 13803, 26135, 26141
- `https://www.britannica.com/plant/cycadophyte/Roots` — 403 Cloudflare — pages 13662
- `https://www.cabidigitallibrary.org/doi/full/10.1079/cabicompendium.18756` — 403 Cloudflare — pages 13536
- `https://www.cactiguide.com/` — 403 Cloudflare — pages 21822, 21828
- `https://www.catalogueoflife.org/data/taxon/32S2K` — 418 (anti-robots / connexion requise) — pages 21892
- `https://www.catalogueoflife.org/data/taxon/32S5L` — 418 (anti-robots / connexion requise) — pages 21897
- `https://www.conifers.org/za/Ceratozamia_whitelockiana.php` — 409 (anti-robots / connexion requise) — pages 26406
- `https://www.conifers.org/za/Zamia_pseudoparasitica.php` — 409 (anti-robots / connexion requise) — pages 14482
- `https://www.conifers.org/za/Zamia_roezlii.php` — 409 (anti-robots / connexion requise) — pages 21660
- `https://www.data.gouv.fr/fr/datasets/donnees-climatologiques-de-base-quotidiennes/` — erreur TLS — pages 1256, 26544
- `https://www.doa.go.th/plan/wp-content/uploads/2021/05/2991.1วิจัยสถานภาพพืชอนุรักษ์สกุลปรง-Cycad.pdf` — certificat TLS refusé par curl — pages 26636, 26655, 26657, 26717, 26719, 26724, 26751
- `https://www.dunedin.govt.nz/bg/collections/garden-life-article/strange-cycad-still-a-curiosity` — 403 Cloudflare — pages 4081
- `https://www.ecured.cu/Microcycas_calocoma` — erreur TLS — pages 13865
- `https://www.exclusivecycads.com/index.php/cycads/cycads-of-south-africa/144-e-ferox` — 403 anti-robots — pages 1847
- `https://www.facebook.com/MontgomeryBotanical/posts/3726483500721735/` — 400 (anti-robots / connexion requise) — pages 5560
- `https://www.facebook.com/phippsconservatory/posts/the-munchs-cycad-encephalartos-munchii-one-of-phipps-oldest-and-rarest-plants-is/10158423425994259/` — 400 (anti-robots / connexion requise) — pages 12296
- `https://www.gbif.org/species/104417890` — 403 Cloudflare — pages 21843
- `https://www.gbif.org/species/2683214` — 403 Cloudflare — pages 21562
- `https://www.gbif.org/species/2683226` — 403 Cloudflare — pages 21937
- `https://www.gbif.org/species/2683231` — 403 Cloudflare — pages 21885
- `https://www.gbif.org/species/2683236` — 403 Cloudflare — pages 21932
- `https://www.gbif.org/species/2683265` — 403 Cloudflare — pages 5683
- `https://www.gbif.org/species/2683274` — 403 Cloudflare — pages 21828
- `https://www.gbif.org/species/2683276` — 403 Cloudflare — pages 21897
- `https://www.gbif.org/species/2683281` — 403 Cloudflare — pages 21892
- `https://www.gbif.org/species/2683289` — 403 Cloudflare — pages 21822
- `https://www.gbif.org/species/2683800` — 403 Cloudflare — pages 12023
- `https://www.gbif.org/species/5284072` — 403 Cloudflare — pages 22288
- `https://www.gbif.org/species/5284080` — 403 Cloudflare — pages 22294
- `https://www.gbif.org/species/5284134` — 403 Cloudflare — pages 22328
- `https://www.gbif.org/species/5284138` — 403 Cloudflare — pages 22275
- `https://www.gbif.org/species/5284153` — 403 Cloudflare — pages 22283
- `https://www.gbif.org/species/search?q=Chilades%20pandava` — 403 Cloudflare — pages 21843
- `https://www.hardytropicals.co.uk/forum/viewtopic.php?p=135663` — 403 anti-robots — pages 1866
- `https://www.hardytropicals.co.uk/forum/viewtopic.php?t=10685` — 403 anti-robots — pages 13945
- `https://www.huntington.org/collections/bot-109276` — 429 (anti-robots / connexion requise) — pages 12439
- `https://www.huntington.org/collections/bot-130508` — 429 (anti-robots / connexion requise) — pages 7876
- `https://www.huntington.org/collections/bot-139164` — 429 (anti-robots / connexion requise) — pages 12619
- `https://www.huntington.org/cycad-collection` — 429 (anti-robots / connexion requise) — pages 9866
- `https://www.huntington.org/frontiers/passion-cycads` — 429 (anti-robots / connexion requise) — pages 12023
- `https://www.huntington.org/news/saving-worlds-loneliest-plant` — 429 (anti-robots / connexion requise) — pages 10803
- `https://www.inaturalist.org/taxa/1097646-Luthrodes-pandava` — 403 Cloudflare — pages 1256, 21843
- `https://www.inaturalist.org/taxa/135579-Zamia-pseudoparasitica` — 403 Cloudflare — pages 14482
- `https://www.inaturalist.org/taxa/135939-Encephalartos-middelburgensis` — 403 Cloudflare — pages 11822
- `https://www.inaturalist.org/taxa/136019-Cycas-taiwaniana` — 403 Cloudflare — pages 21905
- `https://www.inaturalist.org/taxa/136141-Cycas-balansae` — 403 Cloudflare — pages 21822
- `https://www.inaturalist.org/taxa/136142-Cycas-changjiangensis` — 403 Cloudflare — pages 21885
- `https://www.inaturalist.org/taxa/136143` — 403 Cloudflare — pages 5683
- `https://www.inaturalist.org/taxa/136182-Cycas-armstrongii` — 403 Cloudflare — pages 21562
- `https://www.inaturalist.org/taxa/136184-Cycas-calcicola` — 403 Cloudflare — pages 21857
- `https://www.inaturalist.org/taxa/136198-Cycas-chamaoensis` — 403 Cloudflare — pages 21828
- `https://www.infoclimat.fr/climatologie/annee/1985/antibes-la-garoupe/valeurs/07690.html` — 403 Cloudflare — pages 1373
- `https://www.infoclimat.fr/climatologie/annee/2023/bunia/valeurs/64076.html` — 403 Cloudflare — pages 12619
- `https://www.iucnredlist.org` — 403 Cloudflare — pages 1362, 3971, 6175, 21885, 21912, 21921
- `https://www.iucnredlist.org/` — 403 Cloudflare — pages 13826, 14413, 21691, 21704, 21709, 21714, 21722
- `https://www.iucnredlist.org/species/178859/69836807` — 403 Cloudflare — pages 21774
- `https://www.iucnredlist.org/species/187835/69874722` — 403 Cloudflare — pages 21754
- `https://www.iucnredlist.org/species/187837/1828912` — 403 Cloudflare — pages 21802
- `https://www.iucnredlist.org/species/213252394/2517143` — 403 Cloudflare — pages 14461
- `https://www.iucnredlist.org/species/213253786/69843909` — 403 Cloudflare — pages 21780
- `https://www.iucnredlist.org/species/213254735/69836567` — 403 Cloudflare — pages 21795
- `https://www.iucnredlist.org/species/41989/67338115` — 403 Cloudflare — pages 21857
- `https://www.iucnredlist.org/species/42037/10634719` — 403 Cloudflare — pages 21828
- `https://www.iucnredlist.org/species/42038/10635002` — 403 Cloudflare — pages 5683
- `https://www.iucnredlist.org/species/42041/10635911` — 403 Cloudflare — pages 21932, 21937
- `https://www.iucnredlist.org/species/42049/10638039` — 403 Cloudflare — pages 21905
- `https://www.iucnredlist.org/species/42069/10642849` — 403 Cloudflare — pages 21822
- `https://www.iucnredlist.org/species/42073/67339469` — 403 Cloudflare — pages 21892
- `https://www.iucnredlist.org/species/42085/69157953` — 403 Cloudflare — pages 21897
- `https://www.iucnredlist.org/species/42086/10625874` — 403 Cloudflare — pages 21944
- `https://www.iucnredlist.org/species/42113/69834535` — 403 Cloudflare — pages 22316
- `https://www.iucnredlist.org/species/42114/69834332` — 403 Cloudflare — pages 22382
- `https://www.iucnredlist.org/species/42117/69835475` — 403 Cloudflare — pages 21767
- `https://www.iucnredlist.org/species/42121/69834104` — 403 Cloudflare — pages 21734
- `https://www.iucnredlist.org/species/42129/243386080` — 403 Cloudflare — pages 11248
- `https://www.iucnredlist.org/species/42132/243402779` — 403 Cloudflare — pages 22338
- `https://www.iucnredlist.org/species/42135/69837805` — 403 Cloudflare — pages 22356
- `https://www.iucnredlist.org/species/42137/69836112` — 403 Cloudflare — pages 22349
- `https://www.iucnredlist.org/species/42151/69839971` — 403 Cloudflare — pages 22294
- `https://www.iucnredlist.org/species/42156/69838890` — 403 Cloudflare — pages 22308
- `https://www.iucnredlist.org/species/42160/243402195` — 403 Cloudflare — pages 22275
- `https://www.iucnredlist.org/species/42161/243402632` — 403 Cloudflare — pages 22283
- `https://www.iucnredlist.org/species/42167/69841922` — 403 Cloudflare — pages 21788
- `https://www.iucnredlist.org/species/42177` — 403 Cloudflare — pages 21729
- `https://www.iucnredlist.org/species/42178/243411399` — 403 Cloudflare — pages 21660
- `https://www.iucnredlist.org/species/42179/69845263` — 403 Cloudflare — pages 22391
- `https://www.iucnredlist.org/species/42180/243413007` — 403 Cloudflare — pages 22288
- `https://www.iucnredlist.org/species/66900411/66900589` — 403 Cloudflare — pages 22369
- `https://www.iucnredlist.org/species/66910233/66910238` — 403 Cloudflare — pages 22333
- `https://www.jardibotanic.org/?apid=cataleg_virtual_despecies-220` — erreur TLS — pages 11158
- `https://www.jardin-botanique-lyon.com/static/jbot/contenu/jardin_botanique/collections/inventaire_collections/INVENTAIRE_COLLECTIONS.xls` — erreur TLS — pages 12464
- `https://www.kew.org/kew-gardens/plants/cyads-collection` — 403 Cloudflare — pages 5560
- `https://www.kew.org/read-and-watch/oldest-pot-plant-in-world-eastern-cape-giant-cycad` — 403 Cloudflare — pages 2436
- `https://www.kew.org/read-and-watch/wood-like-to-meet-the-loneliest-plant` — 403 Cloudflare — pages 10803, 12265
- `https://www.kew.org/sites/default/files/2019-02/CITESCycadsPack.pdf.pdf` — 403 Cloudflare — pages 1822, 1866, 2436, 2480, 12464, 13700
- `https://www.mdpi.com/2073-4441/10/3/285` — 403 anti-robots — pages 5560
- `https://www.mdpi.com/2075-4450/13/5/456` — 403 anti-robots — pages 12142
- `https://www.mdpi.com/2079-9276/10/12/119` — 403 anti-robots — pages 2502
- `https://www.mdpi.com/2223-7747/12/5/1197` — 403 anti-robots — pages 2502, 13662
- `https://www.mdpi.com/2225-1154/6/3/63` — 403 anti-robots — pages 5560
- `https://www.mdpi.com/2311-7524/7/6/147` — 403 anti-robots — pages 1362
- `https://www.mdpi.com/2673-6500/3/2/17` — 403 anti-robots — pages 22363
- `https://www.mediterraneangardensocietyarchive.org/branches-uk-b.html` — certificat TLS refusé par curl — pages 2436
- `https://www.missouribotanicalgarden.org/PlantFinder/PlantFinderDetails.aspx?taxonid=279640` — certificat TLS refusé par curl — pages 13945
- `https://www.missouribotanicalgarden.org/PlantFinder/PlantFinderDetails.aspx?taxonid=279675` — certificat TLS refusé par curl — pages 5273
- `https://www.missouribotanicalgarden.org/PlantFinder/PlantFinderDetails.aspx?taxonid=279684` — certificat TLS refusé par curl — pages 10608
- `https://www.mnhn.fr/en/macrozamia-moorei` — 403 Cloudflare — pages 1471
- `https://www.palmpedia.net/wiki/European_Palm_Society` — 403 Cloudflare — pages 3971
- `https://www.palmtalk.org` — 403 Cloudflare — pages 1362, 3971
- `https://www.palmtalk.org/` — 403 Cloudflare — pages 14413, 21822, 21828
- `https://www.palmtalk.org/forum/` — 403 Cloudflare — pages 12439, 12464
- `https://www.palmtalk.org/forum/topic/10384-ahhh-my-cycads-are-dead/` — 403 Cloudflare — pages 1857
- `https://www.palmtalk.org/forum/topic/10650-dec-1989-freeze-photos/` — 403 Cloudflare — pages 10608
- `https://www.palmtalk.org/forum/topic/11489-dioon-califanoi-and-merolae/` — 403 Cloudflare — pages 11161
- `https://www.palmtalk.org/forum/topic/13199-encephalartos-cold-hardiness/` — 403 Cloudflare — pages 1373, 1866, 11822
- `https://www.palmtalk.org/forum/topic/15465-encephalartos-whitelockii/` — 403 Cloudflare — pages 12023
- `https://www.palmtalk.org/forum/topic/15690-encephalartos-cold-hardiness/` — 403 Cloudflare — pages 12001
- `https://www.palmtalk.org/forum/topic/16397-cycas-circinalis-after-freeze/` — 403 Cloudflare — pages 13700
- `https://www.palmtalk.org/forum/topic/18101-cycad-cones-and-flushes/?page=49` — 403 Cloudflare — pages 12619
- `https://www.palmtalk.org/forum/topic/18101-cycad-cones-and-flushes/?page=56` — 403 Cloudflare — pages 5560
- `https://www.palmtalk.org/forum/topic/18101-cycad-cones-and-flushes/?page=64` — 403 Cloudflare — pages 2502
- `https://www.palmtalk.org/forum/topic/18101-cycad-cones-and-flushes/?page=81` — 403 Cloudflare — pages 12619
- `https://www.palmtalk.org/forum/topic/22666-cycas-revoluta/` — 403 Cloudflare — pages 13945
- `https://www.palmtalk.org/forum/topic/22795-encephalartos-sclavoi-seeds/` — 403 Cloudflare — pages 5560
- `https://www.palmtalk.org/forum/topic/27537-macrozamia` — 403 Cloudflare — pages 26236, 26254, 26275
- `https://www.palmtalk.org/forum/topic/3117-2007_01-2007-california-freeze-aaaaa-more-data/` — 403 Cloudflare — pages 10600
- `https://www.palmtalk.org/forum/topic/37740-who-do-you-call-when-your-cycads-dont-flush/` — 403 Cloudflare — pages 2480
- `https://www.palmtalk.org/forum/topic/38423-my-zamia-furfuracea-feels-better-now-what/` — 403 Cloudflare — pages 14461
- `https://www.palmtalk.org/forum/topic/41398-macrozamia-macdonnellii/` — 403 Cloudflare — pages 26261
- `https://www.palmtalk.org/forum/topic/43716-unusual-leaf-on-ceratozamia-latifolia-x-hildae` — 403 Cloudflare — pages 26418
- `https://www.palmtalk.org/forum/topic/44982-is-altensteinii-the-most-cold-hardy-broadleafed-encephalartos/` — 403 Cloudflare — pages 2436
- `https://www.palmtalk.org/forum/topic/49887-mature-sized-ceratozamia-latifolia` — 403 Cloudflare — pages 26418, 26422
- `https://www.palmtalk.org/forum/topic/55351-encephalartos-ferox/` — 403 Cloudflare — pages 1847
- `https://www.palmtalk.org/forum/topic/55466-coontie-vs-macrozamia-elegans-epic-cold-battle/` — 403 Cloudflare — pages 26257
- `https://www.palmtalk.org/forum/topic/55561-en-gratus/` — 403 Cloudflare — pages 12439
- `https://www.palmtalk.org/forum/topic/59637-hardiness-of-encephalartos-inopinus/` — 403 Cloudflare — pages 7258
- `https://www.palmtalk.org/forum/topic/59979-color-choices-encephalartos-sclavoi/` — 403 Cloudflare — pages 5560
- `https://www.palmtalk.org/forum/topic/61784-hardiness-of-various-dioonssonorensevovidesii-caputoi-etc/` — 403 Cloudflare — pages 7876, 13251, 26124, 26128, 26139
- `https://www.palmtalk.org/forum/topic/65718-best-soil-type-for-lehmannii/` — 403 Cloudflare — pages 1857
- `https://www.palmtalk.org/forum/topic/65978-cycas-pectinata/` — 403 Cloudflare — pages 26165
- `https://www.palmtalk.org/forum/topic/66829-2020-christmas-night-freeze-damage-28f-and-frost` — 403 Cloudflare — pages 26207
- `https://www.palmtalk.org/forum/topic/66829-2020-christmas-night-freeze-damage-28f-and-frost/` — 403 Cloudflare — pages 12619
- `https://www.palmtalk.org/forum/topic/68609-cycads-through-epic-freeze-events/` — 403 Cloudflare — pages 1726, 9866, 13803, 26141, 26418
- `https://www.palmtalk.org/forum/topic/69344-encephalartos-natalensis-x-arenarius-root-rot-help-please/` — 403 Cloudflare — pages 1866
- `https://www.palmtalk.org/forum/topic/70721-cycas-guizhouensis-in-myrtle-beach/` — 403 Cloudflare — pages 1741
- `https://www.palmtalk.org/forum/topic/71780-encephalartos-princeps/` — 403 Cloudflare — pages 2461
- `https://www.palmtalk.org/forum/topic/73606-cycad-suggestions/` — 403 Cloudflare — pages 2436, 5560
- `https://www.palmtalk.org/forum/topic/7396-cycads-in-zone-9a8b/` — 403 Cloudflare — pages 2480
- `https://www.palmtalk.org/forum/topic/75713-new-cycad-planting/` — 403 Cloudflare — pages 2461
- `https://www.palmtalk.org/forum/topic/76789-zamia-pseudoparasitica-seeds-germination/` — 403 Cloudflare — pages 14482
- `https://www.palmtalk.org/forum/topic/76838-2022_12-2022-december-freeze-sc-zone-8a/` — 403 Cloudflare — pages 1833, 9866, 26400, 26418, 26422
- `https://www.palmtalk.org/forum/topic/76857-encephalitis-laurentianus/` — 403 Cloudflare — pages 12619
- `https://www.palmtalk.org/forum/topic/77409-macrozamia-giants` — 403 Cloudflare — pages 26275
- `https://www.palmtalk.org/forum/topic/81963-encephalartos-sclavoi-x-whitelockii/` — 403 Cloudflare — pages 12023
- `https://www.palmtalk.org/forum/topic/86738-dioon-mejaie-first-coning` — 403 Cloudflare — pages 11158
- `https://www.palmtalk.org/forum/topic/86778-bowenia-serrulata-planted/` — 403 Cloudflare — pages 26126
- `https://www.palmtalk.org/forum/topic/87277-pictures-of-the-best-looking-cycad-hybrids-combinations-in-your-garden-or-ones-you-have-seen/` — 403 Cloudflare — pages 12439
- `https://www.palmtalk.org/forum/topic/87706-macrozamia-moorei/` — 403 Cloudflare — pages 1833
- `https://www.palmtalk.org/forum/topic/92884-2026_02-preliminary-cold-damage-to-my-palms-after-23f-central-florida/` — 403 Cloudflare — pages 4081, 4090, 9866, 12142, 26130, 26418
- `https://www.publish.csiro.au/is/IS24078` — 403 Cloudflare — pages 13803
- `https://www.publish.csiro.au/sb/SB98028` — 403 Cloudflare — pages 12142
- `https://www.rayon-de-serre.com/tropical-plants/408-dioon-spinulosum.html` — 403 Cloudflare — pages 5286
- `https://www.rbgsyd.nsw.gov.au` — certificat TLS refusé par curl — pages 6175
- `https://www.rbgsyd.nsw.gov.au/science/Evolutionary_Ecology_Research/cycad` — erreur TLS — pages 6175
- `https://www.researchgate.net/profile/Giancarlo-Sibilio/publication/359258461_Sibilio_G_2014-2015_The_greenhouses_of_the_Botanical_Garden_of_Naples_Italy_Delpinoa_56-57_pp_69-103/links/6231d25c4ce552783cc02f12/Sibilio-G-2014-2015-The-greenhouses-of-the-Botanical-Garden-of-Naples-Italy-Delpinoa-56-57-pp-69-103.pdf` — 403 Cloudflare — pages 5560
- `https://www.researchgate.net/publication/316614210` — 403 Cloudflare — pages 12439
- `https://www.researchgate.net/publication/337905236_Are_the_Dioon_edule_Zamiaceae_forms_from_San_Luis_Potosi_proposed_by_Whitelock_2004_recognizable_Morphological_evidence` — 403 Cloudflare — pages 5273
- `https://www.researchgate.net/publication/347737939_Data_Capture_and_Taxonomic_Determination_of_Cycadales_at_the_Royal_Botanic_Garden_Edinburgh` — 403 Cloudflare — pages 1471
- `https://www.sanparks.org/parks/addo-elephant/explore/climate` — 403 Cloudflare — pages 1362
- `https://www.science.org/doi/10.1126/sciadv.aay6169` — 403 Cloudflare — pages 12229
- `https://www.sciencedirect.com/science/article/pii/S0254629906001025` — 403 Cloudflare — pages 12265
- `https://www.sciencedirect.com/science/article/pii/S0254629908000021` — 403 Cloudflare — pages 12265
- `https://www.sciencedirect.com/science/article/pii/S0254629915305925/pdf` — 403 Cloudflare — pages 5596
- `https://www.sciencedirect.com/science/article/pii/S0254629915305949` — 403 Cloudflare — pages 2480
- `https://www.sciencedirect.com/science/article/pii/S1439179109000849` — 403 Cloudflare — pages 5560
- `https://www.sciencedirect.com/science/article/pii/S1470160X25007241` — 403 Cloudflare — pages 21944
- `https://www.timeanddate.com/weather/@947666/climate` — 403 Cloudflare — pages 5596
- `https://www.up.ac.za/botanical-garden/queen-modjadjis-cycad-encephalartos-transvenosis` — 403 Cloudflare — pages 12001
- `https://www.worldfloraonline.org` — certificat TLS refusé par curl — pages 1362
- `https://www.worldfloraonline.org/` — certificat TLS refusé par curl — pages 14413, 21704, 21788, 21802
- `https://www.worldfloraonline.org/taxon/wfo-0000429667` — certificat TLS refusé par curl — pages 22288
- `https://www.worldfloraonline.org/taxon/wfo-0000429673` — certificat TLS refusé par curl — pages 21795
- `https://www.worldfloraonline.org/taxon/wfo-0000429681` — certificat TLS refusé par curl — pages 21709
- `https://www.worldfloraonline.org/taxon/wfo-0000429683` — certificat TLS refusé par curl — pages 22308
- `https://www.worldfloraonline.org/taxon/wfo-0000429688` — certificat TLS refusé par curl — pages 22391
- `https://www.worldfloraonline.org/taxon/wfo-0000429854` — certificat TLS refusé par curl — pages 22283
- `https://www.worldfloraonline.org/taxon/wfo-0000429855` — certificat TLS refusé par curl — pages 21722
- `https://www.worldfloraonline.org/taxon/wfo-0000429877` — certificat TLS refusé par curl — pages 22275
- `https://www.worldfloraonline.org/taxon/wfo-0000429879` — certificat TLS refusé par curl — pages 21680
- `https://www.worldfloraonline.org/taxon/wfo-0000429916` — certificat TLS refusé par curl — pages 22316
- `https://www.worldfloraonline.org/taxon/wfo-0000429917` — certificat TLS refusé par curl — pages 22382
- `https://www.worldfloraonline.org/taxon/wfo-0000429921` — certificat TLS refusé par curl — pages 22328
- `https://www.worldfloraonline.org/taxon/wfo-0000429942` — certificat TLS refusé par curl — pages 21780
- `https://www.worldfloraonline.org/taxon/wfo-0000429949` — certificat TLS refusé par curl — pages 22349
- `https://www.worldfloraonline.org/taxon/wfo-0000429972` — certificat TLS refusé par curl — pages 22294
- `https://www.worldfloraonline.org/taxon/wfo-0000429985` — certificat TLS refusé par curl — pages 22338
- `https://www.worldfloraonline.org/taxon/wfo-0000430002` — certificat TLS refusé par curl — pages 21714
- `https://www.worldfloraonline.org/taxon/wfo-0000430006` — certificat TLS refusé par curl — pages 22356
- `https://www.worldfloraonline.org/taxon/wfo-0000430870` — certificat TLS refusé par curl — pages 22321
- `https://www.worldfloraonline.org/taxon/wfo-0000631510` — certificat TLS refusé par curl — pages 21857
- `https://www.worldfloraonline.org/taxon/wfo-0000631517` — certificat TLS refusé par curl — pages 21828
- `https://www.worldfloraonline.org/taxon/wfo-0000631556` — certificat TLS refusé par curl — pages 5683
- `https://www.worldfloraonline.org/taxon/wfo-0000631639` — certificat TLS refusé par curl — pages 13536
- `https://www.worldfloraonline.org/taxon/wfo-0000667332` — certificat TLS refusé par curl — pages 1866, 2436
- `https://www.worldfloraonline.org/taxon/wfo-1000034939` — certificat TLS refusé par curl — pages 22303
- `https://zenodo.org/records/5778682` — 403 anti-robots — pages 26148
- `https://zenodo.org/records/6391973` — 403 anti-robots — pages 26144, 26152, 26156

## Anomalies HTML corrigées (tâche 1)

Contrôle : HTML rendu (commentaires de blocs visibles, `wp:` hors commentaire, `&lt;!--`, contenu en double, balises cassées, `<a>` sans `href`, `href` invalides) et équilibre des commentaires de blocs dans le contenu brut (comptage `<!-- wp:` / `<!-- /wp:` / ` /-->` sur les 431 contenus ; contrôle complet des 310 brouillons `pilotes/*-fr.html`). Les titres répétés détectés ailleurs sont le sommaire (ez-toc) ou des questions de FAQ reprenant un intertitre : pas d’anomalie.

| Page | Anomalie | Correction |
|---|---|---|
| 26352 Encephalartos mackenziei | `<!-- /wp:paragraph -->` orphelin après une liste : 149 commentaires de blocs affichés dans le rendu | fermeture orpheline supprimée (site + brouillon `espece-encephalartos-mackenziei-fr.html`) |
| 12296 Encephalartos munchii | 2 `<!-- wp:paragraph -->` sans fermeture : 223 commentaires visibles, 22 paragraphes en double | 2 fermetures ajoutées |
| 11822 Encephalartos middelburgensis | 1 `<!-- wp:paragraph -->` sans fermeture | fermeture ajoutée |
| 12296, 12619, 12439, 12023, 5596, 2480, 2461, 2451, 1373, 1362 | 16 liens `<a>URL</a>` sans `href` | `href` ajouté (URL identique au texte) |
| 7876, 5560, 1822 | 6 `href` terminés par un saut de ligne ou une espace | espace retirée |
| 7876 Dioon angustifolium | `href="http://Lien : https://www.tropicamente.it/…"` | `href` rétabli, puis lien traité comme cassé (404, action 3) |
| 13536 Quand rempoter un cycas | `href` contenant toute la bibliographie (2 700 caractères) | `href` = URL POWO affichée |
| 7876, 1471 | `<a>` sans `href` sur une adresse tronquée (`palmtalk.org/forum/t…`, `facebook.com/SDBotanicGarden/…`) | lien vers la racine (PalmTalk) ou la page Facebook du jardin, avec « (adresse précise … non conservée) » |

Brouillon resynchronisé en plus : `genre-lepidozamia-fr.html` (lien cassé + liens internes vers *L. hopei* et *L. peroffskyana* présents en ligne mais absents du brouillon). Les autres pages corrigées n’ont pas de brouillon local.

