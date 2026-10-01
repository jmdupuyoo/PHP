# Note de livraison — page genre *Cycas* (FR), brouillon (01/10/2026)

- Fichier : `pilotes/genre-cycas-fr.html` (105 blocs Gutenberg ; équilibre des blocs et des balises vérifié par script, aucun `<em>` imbriqué, aucun nom abrégé, tous les liens externes en `target="_blank"`, aucun `utm_`). Page cible : id 1256, https://succulentes.net/cycadales/cycas/ (publiée ; **rien n'a été modifié sur le site, aucun commit**). Traductions liées : EN 16282, IT 11549, ES 23432 (le champ `translations` de 1256 les lie désormais toutes les trois).
- Longueur : environ 9 550 mots hors Sites de référence et Bibliographie, 11 080 au total (page actuelle : environ 1 810). L'index des 118 espèces en représente environ 3 500 ; le reste est comparable aux brouillons *Dioon* et *Macrozamia*.
- Titre de page proposé : « Le genre Cycas » (inchangé).
- Titre SEO (51 car.) : `Cycas : 118 espèces, rusticité en France et culture`
- Meta description (142 car.) : `Cycas : les 118 espèces du genre, de Cycas revoluta à Cycas panzhihuaensis. Rusticité en France, culture en pot, CITES, ravageurs et toxicité.`
- Mot-clé principal : `cycas` (secondaires : cycas revoluta rusticité, cycas panzhihuaensis, cycas en pot).

## Chiffres reconfirmés
- The World List of Cycads, version **2026.08.15** (pied de page : Calonje, Stevenson & Osborne 2026, doi:10.5281/zenodo.21958524) : « Included Species (**118 species and 6 infraspecific taxa**) » sur https://cycadlist.org/genus/Cycas ; export XLSX `accepted=0` filtré sur « Cycas » : 124 noms acceptés (118 + 3 sous-espèces de *C. maconochiei* + 3 de *C. media*), 98 synonymes, 8 invalides, 7 *nomina dubia*, 4 illégitimes. **Confirmé.**
- UICN (statuts affichés par WLoC, 118 espèces) : CR 20, EN 26, VU 27, NT 15, LC 23, NE 7 ; années des évaluations relevées dans les références de chaque page (tableau des références déplié à 100 lignes) : 2010, 2014 ou 2022 ; 11 espèces évaluées sans référence d'année affichée (« année non indiquée » dans l'index).
- Pays (répartitions WLoC) : Australie 34 (31 endémiques), Vietnam 27, Chine + Taïwan 22, Inde 14, Philippines 13, Thaïlande 12, Indonésie 10, Laos 10.

## Sources

### Lues directement (curl ou API)
| Source | Apport |
|---|---|
| The World List of Cycads (page genre, 124 pages espèces, export XLSX, tableaux de références) | effectifs, description du genre (mégasporophylles en rosette indéterminée), étymologie *koikas*, synonymes *Dyerocycas* et *Epicycas*, auteurs, années, répartitions, synonymes, statuts UICN et années, types (*C. circinalis* : planche 19 de l'*Hortus Malabaricus* ; *C. taitungensis* : ~500 m, réserve de Taitung), étymologies (Haynes 2022) |
| Hill 2008, *Telopea* 12 : 71-118 (texte intégral, archive.org biostor-261114) | six sections, clé, définitions de *Asiorientales*, *Panzhihuaenses*, *Stangerioides*, *Indosinenses* ; place des *Cycadaceae* ; habitats de *revoluta*, *taitungensis*, *panzhihuaensis*, *taiwaniana* ; noms vernaculaires ; *C. miquelii* = *revoluta* ; *lingshuiensis* (publié « lingshuigensis ») ; noms exclus : *longipetiolula* (bifida × multipinnata) et *multifrondis* (dolichophylla × bifida) |
| Species+ (API, taxons 12839 *Cycas*, 27663 *C. beddomei*, 17531 *C. revoluta*) | Cycadaceae annexe II depuis le 04/02/1977 ; annotation #4 en vigueur au 05/03/2026 ; *C. beddomei* annexe I depuis le 22/10/1987 (II avant) ; UE B / A, règl. (UE) 2026/1383 (29/06/2026) ; *C. miquelii* synonyme de *revoluta* ; une inscription historique à l'annexe III par le Népal (16/11/1975) affichée au niveau du genre, non reprise |
| Crossref + Europe PMC (résumés) | Liu et al. 2018 ; Nagalingum et al. 2011 ; Zheng et al. 2021 ; Wu et al. 2023 ; Yang et al. 2026 ; Marler & Lawrence 2012 ; Marler et al. 2012 ; Steele & McGeer 2008 ; références de Hill et al. 2004, Lindström & Hill 2007, Lindström et al. 2008, Cox & Sacks 2002, Fric et al. 2014 |
| Mankga et al. 2020 (*Frontiers*, texte intégral) | hypothèse d'origine indochinoise, endocarpe spongieux et dispersion marine |
| UF/IFAS : FR316 (*C. revoluta*), FP161 (*C. circinalis*), fiche Baker County (King & Emperor sago), Gardening Solutions (cycads, cochenille) | noms anglais, sagou, usages au Japon, zones 8-11, −12 °C (10 °F), feuilles brûlées dans les « 20s °F », culture en pot, carences Mg/Mn, cochenille, *C. circinalis* zones 10-11 et faible tolérance au sel |
| NC State Extension Plant Toolbox (*C. revoluta* ; la page *taitungensis* renvoie à *revoluta*) | zones 9a-12b, cycasine dans toutes les parties, pourriture des racines, cochenilles, acariens |
| ASPCA ; Pet Poison Helpline | toxicité animale, symptômes |
| Base de l'OEPP (gd.eppo.int, AULSYA) | *Aulacaspis yasumatsui* en Europe : Bulgarie, Croatie, Chypre, Hongrie, Pologne, Slovénie, Turquie, Royaume-Uni (« few occurrences ») ; France « absent, intercepted only » ; ancienne liste d'alerte 2001-2008 (pas de liste A2) ; mise à jour du 27/09/2026 |
| iNaturalist (API, taxon 1097646, emprise 27-48° N / 20° O-36° E) | 620 observations de *Luthrodes pandava*, toutes en Égypte, Israël et Liban ; **aucune en Europe** |
| Météo-France (data.gouv.fr, fichiers Q_31, 33, 38, 44, 69, 94 « previous-1950-2024 ») | minimales des stations citées (voir plus bas) |
| *Ryūkyū Shimpō*, 25/08/2021 | consommation de cycas à Hateruma en 1945, expression « sotetsu jigoku » |
| Forum des Fous de palmiers (recherche phpBB : panzhihuaensis, panzhi*, taitungensis, taitung*, revoluta + vdf / février / 1985 / 1956 / défolié / grillé ; fils lus en entier : t=3323, 6514, 3673, 7063, 8427, 5375, 4327, 9511, 11046, 11316, 11312, 10407, 2318, 6737, 16363, 12560) | retours FR, CH |
| Tropicamente (recherche panzhihuaensis, taitungensis, revoluta, « cycas neve », « cycas freddo » ; 24 fils lus en entier) | retours IT |
| Site (get_content 1256, 16282, 11549 ; REST 23432 ; REST pages enfants de 1256 ; posts 339, 306, 21843, 14141, 16529, 18464, 18541, 18530 ; fetch_site_url) | contenu actuel, observations du JZT, inventaire, statuts 200 |

### Relevées par extrait de recherche (WebSearch ; sites bloqués ou non lus)
- POWO : *C. taitungensis* = synonyme de *C. revoluta* (https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:978052-1). Nombre d'espèces de POWO **non trouvé** (le « 117 espèces + 2 hybrides » de la page actuelle reste invérifié).
- Lindström, Hill & Stanberg 2008 : section *Wadeae* = *C. wadei*, *C. curranii*, *C. saxatilis*.
- Espace pour la vie (Montréal) : noms « cycas du Japon », « sagoutier », « sagou du Japon » ; toxicité.
- Jardin botanique du Missouri : survie douteuse sous 15 °F (−9 °C) (certificat TLS du site refusé par le proxy).
- PalmTalk (« Cycas revoluta hardiness », t=63218) : rien de daté et localisé d'exploitable ; non repris.
- InfoJardín : recherche faite, aucun retour exploitable trouvé.
- Étude 2024 (*Plant Physiology and Biochemistry*, ScienceDirect S0981942824005758) : la sécheresse aggrave les dégâts du gel chez *C. panzhihuaensis* ; cité comme extrait, sans référence en bibliographie.
- Lepidoptera Libanotica / SPNL : *Chilades pandava* au Liban en 2019 (repris via l'article du site).
- Sources japonaises sur « ソテツ地獄 » (extrait), confirmées par l'article du *Ryūkyū Shimpō* lu directement.

## Corrections apportées à la page FR actuelle (1256)
1. « 117 espèces acceptées (POWO 2026) + deux hybrides » → 118 espèces + 6 sous-espèces (WLoC 2026.08.15) ; POWO non vérifiable.
2. Rattachement de toutes les espèces aux sections et sous-sections (*Rumphiae*, *Endemicae*) : non vérifiable espèce par espèce → retiré ; sections décrites d'après Hill 2008, section indiquée dans l'index seulement pour les espèces que Hill 2008 / Lindström 2008 placent explicitement.
3. « *C. taitungensis* […] un peu plus rustique encore » que *revoluta* → contredit par les retours FR (Béarn, Val-de-Marne) ; UF/IFAS les met au même niveau.
4. « *C. panzhihuaensis* […] exige un froid sec, redoute l'humidité hivernale » → non sourcé ; réussites en région nantaise.
5. Adage « là où les fougères ne poussent plus, les cycas prennent le relais » → retiré (non sourcé).
6. « *C. circinalis* particulièrement vulnérable à *Aulacaspis* » → retiré (non sourcé).
7. « *C. megacarpa*, l'espèce la plus méridionale, vers 26° S » → retiré (non vérifié ; WLoC : Queensland).
8. « *C. pectinata* […] jusqu'au sud de la Chine » → WLoC : Bangladesh, Bhoutan, Inde, Népal.
9. *C. thouarsii* « Mozambique, Seychelles » → WLoC : Comores, Kenya, Madagascar, Tanzanie.
10. « *Cycas* × *multifrondis* » hybride → accepté comme espèce par WLoC ; Hill 2008 y voyait une forme hybride (divergence exposée).
11. *C. darshii* présenté comme accepté → synonyme de *C. sphaerica* (WLoC).
12. Complexe de *C. taiwaniana* « sud de la Chine et Hainan » → WLoC : Fujian, Guangdong ; les noms de Hainan sont synonymes.
13. Lien *C. dolichophylla* (déjà retiré ce jour) : non lié, pas de fiche FR.
14. Section « Autres genres de Cycadales » (9 liens) retirée, conformément à la règle des liens internes (l'intro renvoie à /cycadales/).
15. Image 18322 : alt vide → « Cycas » (espèce non identifiée) ; légende réécrite. Image 7334 : alt « Cycas panzhihuaensis » conservé ; coquille « La londe » corrigée. **Le texte alternatif de la médiathèque n'a pas été modifié** (rien n'a été touché sur le site).
16. Exact et conservé (vérifié) : *Asiorientales* = *revoluta* + *taitungensis* ; *Panzhihuaenses* + *Asiorientales* = branche basale (Liu 2018, soutien partiel) ; *Stangerioides* = grade ; *andamanica* = *pschannae* ; *fairylakea* = *szechuanensis* ; *sainathii* = *zeylanica* ; *longipetiolula* = hybride bifida × multipinnata ; *beddomei* annexe I ; espèces australiennes bleues difficiles et greffage (article du site 16529).

## Erreurs relevées sur la page EN (16282), à corriger
1. « approximately 120 accepted species » → 118 + 6 (WLoC 2026.08.15) ; « Calonje, Stevenson & Stanberg » → Calonje, Stevenson & **Osborne**.
2. Mégasporophylles « 2–8 ovules » → « two to many (rarely one) » (WLoC).
3. Aire : « Ryukyu Islands and Kyushu » → îles Ryūkyū (WLoC) ; *C. thouarsii* « Mozambique, Seychelles » non retenus par WLoC ; « centre of diversity unambiguously in mainland SE Asia » → l'Australie compte le plus d'espèces (34).
4. *C. beddomei* « Critically Endangered » → **EN** (2022, Rao et al.).
5. CITES : manque l'annotation #4 (graines exemptées) et l'annexe B/A de l'UE.
6. Classes de rusticité non sourcées : *C. taitungensis* « −3/−5 °C » (contredit : −7 °C intact au JZT et dans le Roussillon ; UF/IFAS ~−12 °C) ; *C. media*, *C. multipinnata* « −3/−6 » ; *C. panzhihuaensis* « −10 to −15 °C in habitat at 1,200–2,500 m ».
7. Liste d'espèces : *C. szechuanensis* « Sichuan, closely related to *panzhihuaensis* » → Fujian, Guangdong, section *Stangerioides* ; *C. taiwaniana* « Hainan » → Fujian, Guangdong ; *C. hainanensis* listé comme espèce → synonyme de *C. taiwaniana* ; *C. miquelii* « southern China, *Epicycas* » → synonyme de *C. revoluta* ; « *Cycas shanyagensis* — Yunnan » → *shanyaensis*, Hainan, synonyme de *C. taiwaniana* ; *C. elongata* « China » → Vietnam ; *C. nathorstii* « India » → Inde et Sri Lanka ; « *Cycas spherica* » → *sphaerica* ; *C. pectinata* « Myanmar, Thailand, Laos, Vietnam, southern China » → Bangladesh, Bhoutan, Inde, Népal ; *C. collina* « Vietnam, southern China » → Vietnam (WLoC ; Hill 2008 la citait en Chine) ; *C. candida* « Vietnam, recently described » → Queensland, 2004 ; *C. jenkinsiana* → synonyme de *C. pectinata* ; *C. sundaica* « Java » et *C. montana* « Sulawesi » → Nusa Tenggara ; *C. media* « Queensland, Northern Territory » → Queensland ; *C. megacarpa* « Endangered » → VU (2022) ; *C. ophiolitica* « Endangered » → VU (2010) ; *C. normanbyana* (« hope's cycad ») → synonyme de *C. media* subsp. *media* ; « *C. yorkensis* » → *yorkiana* ; « *Cycas* x *multifrondis* natural hybrid » → espèce acceptée par WLoC.
8. Lien erroné : *C. multipinnata* pointe vers la fiche **FR** (/cycadales/cycas/multipinnata/) au lieu de l'EN 18655.
9. Liste incomplète (environ 60 espèces sur 118) ; affirmations non sourcées (« mangrove margins », « bottle-shaped caudex » de *C. siamensis*, « seemannii most widely distributed », Florida 1996, réduction de germination « by two-thirds »).
10. Bibliographie vague ou non vérifiée (« Hill — numerous publications », « Marler, Lindström & Watson — *Horticulturae*, various », Dehgan & Johnson 1983) ; liens externes sans `target="_blank"`.

## Retours de forums
Classement : A = date, lieu, valeur, pleine terre/pot, protection, résultat ; B = un élément manque ; C = écarté. URL au format `https://www.fousdepalmiers.fr/html/forum/viewtopic.php?p=<id>#p<id>` (FDP) ; les lieux viennent du texte des messages ou du profil (le membre de « Côte Bleue » écrivait alors depuis La Varenne-Saint-Hilaire, bords de Marne, cf. #p47884 et #p87931).

### Retenus (A)
- *C. revoluta*, Bruguières (31), janvier 1985, −17,5 °C, PT depuis 1980, sans protection, mort. FDP #p47058, #p163566 (et #p104579). MF : Ondes −19,0 °C (09/01/1985, 9 km), Toulouse-Blagnac −18,6 °C (16/01/1985, 12 km).
- *C. revoluta*, La Varenne-Saint-Hilaire (94), hiver 2008-2009, −12 °C, 4 sujets PT sans protection, le plus grand mort. FDP #p70816, #p70949, #p47884. MF Saint-Maur −11,2 °C (07/01/2009, 2 km).
- *C. revoluta* vs *C. panzhihuaensis*, même lieu, janvier 2010, −7 °C, PT sans protection : revoluta brûlé, panzhi traces légères. FDP #p78848. MF Saint-Maur −8,8 °C (08/01/2010).
- *C. revoluta*, Nantes, février 2012, −9 °C ×2, PT depuis 2004, voile, « bien abîmés ». FDP #p171543. MF Nantes-Bouguenais −8,4 °C (12/02/2012, 9 km).
- *C. revoluta*, Vienne (38), février 2012, −13 °C, 12 jours sans dégel, PT 3 ans, cloche, intact. FDP #p185942. MF Reventin −11,8 °C, Luzinay −12,9 °C (05/02/2012).
- *C. revoluta*, Ardèche 160 m, hiver 2011-2012, −14 °C, PT, sans protection, défolié, vivant. FDP #p242076 (commune inconnue : pas de station citée).
- *C. revoluta*, Tarn, hiver 2011-2012, pot sous mini-serre isolée, −6 °C dedans / −12 °C dehors, intact / légers dégâts. FDP #p173470.
- *C. revoluta*, Touraine, janvier 2010, pot oublié dehors, −9 °C, défolié 100 %, repousse. FDP #p85209.
- *C. panzhihuaensis*, La Varenne, hiver 2008-2009, −12 °C, PT 2e hiver, quasi sans protection, intact. FDP #p47884, #p70816, #p70949, #p73314.
- *C. panzhihuaensis*, Nantes, hiver 2008-2009, −8 °C, PT, sans protection, intact (MF −8,8 °C, 07/01/2009) ; février 2012, −9 °C ×2, voile, intact. FDP #p58547, #p71038, #p171543.
- *C. panzhihuaensis*, Béarn, février 2012, −10 °C, PT depuis 2009, sans protection, défolié. FDP #p87942, #p170617.
- *C. panzhihuaensis*, Lot, février 2012, ~−11/−12 °C (−13 °C à 50 m), PT sans protection, défolié, repousse chaque année. FDP #p126009, #p189560.
- *C. taitungensis*, Béarn, 2008-2012 (−5/−6 °C dégâts ; −10 °C défolié), PT depuis 2007, sans protection. FDP #p48337, #p87117, #p87942, #p116857, #p171425, #p171530.
- *C. taitungensis*, La Varenne, hiver 2008-2009, −12 °C, PT, défolié, tronc survivant. FDP #p87931, #p116882.
- *C. taitungensis*, Roussillon, hiver 2009-2010 (−6/−7 °C, 27 nuits de gel, 40 cm de neige) et février 2012 (−7 °C ×2), PT depuis ~8 ans, intact. FDP #p87103, #p116877, #p119563, #p171526.
- *C. revoluta* + *C. panzhihuaensis*, Ravenne (IT), décembre 2009, −7 °C, neige, givre, pots abrités de la pluie, morts. Tropicamente : https://www.tropicamente.it/forums/topic/piante-che-ce-lhanno-fatta-non-ce-lhanno-fatta/ #post-44034 ; https://www.tropicamente.it/forums/topic/cicadee-rustiche/ #post-50516, #post-50520.

### Retenus (B, 5)
- *C. revoluta*, Talence (33), VDF février 2012, plante de rue, « sans embûches » — protection non dite. FDP #p256181. MF Talence −9,0 °C (03/02), Mérignac −8,8 °C (09/02).
- *C. revoluta*, Périgord noir (24), échec par pourriture en hivers froids et humides — ni date ni valeur (échec instructif). FDP #p116510.
- *C. panzhihuaensis*, jardin botanique de Lyon, mort au 1er hiver (2011-2012) — témoignage indirect, valeur et culture non dites. FDP #p185942. MF Lyon-Tête d'Or −11,0 °C (05/02/2012).
- *C. revoluta*, Numana (IT), hiver 2011-2012, −5 °C, dehors sans abri, intact — pleine terre non précisée. Tropicamente cicadee-rustiche #post-50519.
- *C. panzhihuaensis*, Delémont (CH), hiver 2014-2015, ~−16 °C, toit polycarbonate + voile, feuilles grillées, 3 nouvelles feuilles — pleine terre non précisée. FDP #p370742.

### Contexte (cité sans être un « retour »)
- Synthèse d'un cultivateur du Roussillon (troncs repartent après −10/−12 °C, feuillage touché dès −6 °C, pas fiable à −15 °C) : FDP #p171146 ; jaunissement au sud et absence de pousse sans eau : #p116738, #p119745 ; casse des feuilles de serre par vent > 100 km/h : #p171146 ; pointes blanchies au soleil (Béarn) : #p87942.

### Écartés (C ou B en surnombre)
- « Paris USDA 8b / Côte Finistère 9b », revoluta sous paille −11/−12 °C, 50 % de défoliation : lieu ambigu (le texte suggère la région de Belley). FDP #p91402, #p92006.
- Aix-les-Bains, revoluta défolié en 2005 vers −12 °C : témoignage indirect. FDP #p21522.
- Annecy, revoluta en pot contre la maison : indirect, sans valeur. FDP #p91406.
- Fuveau / Solliès-Ville, panzhi −8 °C sous 2 voiles, défolié 2/3 ; « à −8 °C revoluta grillé, panzhi non » : lieu ambigu. FDP #p96342, #p466814.
- Vendée nord, plantule de panzhi −8/−9 °C : pot ou pleine terre contradictoire. FDP #p58563, #p59261, #p67669, #p67732.
- Pologne, panzhi mort à l'hiver 2010-2011 sous protection (−17/−18 °C en février 2010) : B en surnombre, climat très éloigné. FDP #p78793, #p186129, #p173420.
- Lavaur (81), panzhi brûlure légère à −6 °C humide : sans date (B en surnombre). FDP #p293941.
- Roussillon, panzhi intact à −7 °C (hiver 2009-2010) : culture non précisée. FDP #p96423.
- Béarn, revoluta PT 20 ans, 50 % de défoliation à −8 °C « dans le passé » : sans date. FDP #p87942.
- Lot, revoluta planté au printemps 2010, grillé l'hiver 2010-2011 : sans valeur. FDP #p126009.
- Pays d'Aix, panzhi −8 °C sous voile défolié (cité par un autre membre) : lieu et culture imprécis. FDP #p86491.
- Valaurie (26), plantule de panzhi sous cloche, −9,5 °C au sol : culture non précisée. FDP #p86099.
- Préfailles (44), revoluta replanté « résistant à plus de −10 °C » : vague. FDP #p58683.
- Bilan 2011-2012 sans lieu (−12 °C, revoluta en pot touchés) : FDP #p168159. Lugano (CH), « cycas » sans espèce : #p167683. Morbihan, véranda −5 °C : #p177609.
- Hybrides revoluta × taitungensis « −8 °C sans dégât » (Hardy Palm, rapporté) : indirect. FDP #p144128.
- Tropicamente : Florence, revoluta « −25 °C en 1985 » au jardin botanique (ouï-dire, valeur invérifiable) #post-41182 ; « −17 °C » sans lieu #post-41179 ; brûlures au soleil sans lieu (cycas-revoluta #post-36617).
- **Messages de La Londe-les-Maures** : non utilisés, listés dans `cycadales-a-verifier.md` (section « Messages de La Londe (JZT ?) », sous-section *Cycas*).

## Liens
- Internes (tous 200 sans redirection, curl et fetch_site_url / REST le 01/10/2026) : intro → https://succulentes.net/cycadales/ (13826) ; corps → /aulacaspis-yasumatsui/ (14141) et /azure-des-sagous-chilades-pandava/ (21843), seuls noms scientifiques du corps ayant une page hors index ; index → les **47** fiches FR (REST : 47 pages enfants de 1256) : 43 espèces acceptées liées sur leur nom, 4 fiches sous un ancien nom rattachées (andamanica → *pschannae* ; fairylakea → *szechuanensis* ; hainanensis et lingshuigensis → *taiwaniana*). Les noms d'espèces ne sont pas liés plus haut dans le texte, pour que tous les liens soient dans l'index (comme pour *Dioon*).
- À lire aussi : 18530 (toxicité), 16529 (méthode Simon Lavaud), 18464 (chlorose ferrique). Non retenus faute de place (règle 1 à 3 liens) : 18541 (magnésium), 21843 (Azuré, déjà lié dans le corps), 15681 (cycas en pot), 14218 (cycas gelé).
- Externes : DOI (302 vers l'éditeur), UF/IFAS, NCSU, ASPCA, OEPP, Species+, WLoC : 200 après remplacement des adresses redirigées par l'adresse finale. Non vérifiables depuis ce poste : POWO, Espace pour la vie, iNaturalist (403 Cloudflare), page data.gouv.fr (connexion coupée ; l'API du même jeu a répondu).

## Fiches FR manquantes (75 espèces acceptées)
aenigma, angulata, annaikalensis, apoa, arenicola, arnhemica, badensis, basaltica, bougainvilleana, brunnea, cairnsiana, campestris, canalis, candida, cantafolia, clivicola, conferta, couttsiana, cupida, curranii, desolata, dharmrajii, distans, divyadarshanii, dolichophylla (EN 16497), edentata, elephantipes (EN 18710), elongata (EN 18705), falcata, flabellata, fugax, furfuracea, glauca, indica, inermis, javana, lacrimans, lane-poolei, lindstromii (EN 18737), maconochiei, macrocarpa, micronesica (EN 16385), mindanaensis, montana, nathorstii, nayagarhensis, nitida, nongnoochiae, ophiolitica, orientis, orixensis, papuana, pectinata (EN 16415, ES 24583), petraea, platyphylla, pranburiensis, pruinosa, riuminiana, sancti-lasallei, saxatilis, schumanniana, scratchleyana, semota, seshachalamensis, silvestris, sphaerica, sundaica, tansachana, terryana, tuckeri, vespertilio, wadei, xipholepis, yorkiana, zambalensis. (Les fiches EN *miqueli* 16505 et *longipetiolula* 18667 portent sur un synonyme de *revoluta* et sur un hybride.)

## Points à valider par le propriétaire
1. **Chilades pandava « présent en Europe »** : non confirmé. Aucun signalement publié en Europe trouvé ; iNaturalist n'a aucune observation européenne (620 observations Égypte/Israël/Liban) ; l'article du site (21843) le dit absent d'Europe continentale. La page l'écrit ainsi. Si vous disposez d'un signalement (Chypre, Baléares, Canaries ?), envoyez la source.
2. **POWO** : nombre d'espèces non vérifié ; *C. taitungensis* synonymisé (extrait) → choix éditorial du site signalé dans la page. Avis de POWO sur *C. multifrondis* inconnu.
3. ***C. multifrondis*** : WLoC l'accepte, Hill 2008 y voyait un hybride ; la raison du changement n'a pas été trouvée. La fiche FR 14304 est à vérifier en conséquence.
4. ***C. changjiangensis*** : la demande le classait parmi les synonymes ; WLoC l'accepte (ancien *C. hainanensis* subsp. *changjiangensis*) → traité comme espèce, avec sa fiche.
5. **Fiche « lingshuigensis » (21921)** : orthographe originale fautive ; nom corrigé *C. lingshuiensis* (Hill 2008, WLoC). Envisager une redirection ou une mention dans la fiche.
6. **Rattachement des noms de Hainan à *C. taiwaniana*** : l'étude qui l'a motivé n'a pas été trouvée ; WLoC donne pour *C. taiwaniana* « Fujian, Guangdong » seulement (incohérence apparente avec ses synonymes de Hainan).
7. **Longueur** (~9 550 mots hors références) : l'index complet en fait l'essentiel. Possibilité de réduire les lignes d'index ou les retours B.
8. **Article *Le Palmier* (septembre 2009) sur *C. panzhihuaensis*** cosigné par Jean-Michel et Pierre Bianchi (mentionné sur le forum) : s'il existe, il pourrait entrer en bibliographie.
9. **Blogs du site** : 306 indique « environ 350 espèces » pour *Cycas* (118) ; 14141 affirme que *Aulacaspis yasumatsui* est « sur la liste EPPO A2 » et répandue sur les côtes d'Europe du Sud (OEPP : ancienne liste d'alerte 2001-2008, présence ponctuelle en Bulgarie, Croatie, Chypre, etc., absente de France) ; 21843 évoque une présence aux Canaries non vérifiée.
10. **Images** : textes alternatifs à reporter dans la médiathèque (18322 → « Cycas » ; 7334 → « Cycas panzhihuaensis », déjà correct sur la page).

## Note de conformité (gabarit)
1. Invérifiables / incertains : POWO (effectif, *taitungensis*), statuts UICN (WLoC, Liste rouge non lue), années manquantes pour 11 espèces, section *Wadeae* (extrait), noms français (extrait Espace pour la vie), seuil du jardin botanique du Missouri (extrait), étude 2024 sécheresse × gel (extrait).
2. Choix éditoriaux : *C. taitungensis* distinct ; index par région (7 régions demandées, Philippines avec Malaisie-Indonésie, Nouvelle-Guinée avec Pacifique) ; sections indiquées seulement quand une source le dit ; liens d'espèces regroupés dans l'index ; sections « Maladies et ravageurs » et « Usages traditionnels » ajoutées au plan hub.
3. Sources bloquées : POWO, UICN, cites.org, PalmTalk, Agaveville, Dave's Garden, InfoJardín, Espace pour la vie, jardin botanique du Missouri. Sources asiatiques : Kunming (Liu et al. 2018), Nong Nooch (Marler et al. 2012), *Ryūkyū Shimpō* ; rien de spécifique trouvé sur les blogs ameblo / planchu.jp.
4. France, zones sans donnée : Bretagne (aucun retour daté), montagne ; Méditerranée représentée surtout par le Roussillon et le JZT (pas de retour daté exploitable sur la Côte d'Azur hors JZT).
5. Encadré : tous les champs renseignés ; « Nombre d'espèces » d'après WLoC seulement (POWO non lu).
