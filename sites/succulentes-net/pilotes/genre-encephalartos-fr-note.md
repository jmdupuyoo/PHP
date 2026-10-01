# Note de livraison — page genre *Encephalartos* (FR), brouillon (01/10/2026)

- Fichier : `pilotes/genre-encephalartos-fr.html` (256 blocs Gutenberg ; équilibre des blocs et des balises vérifié par script, aucun `<em>` imbriqué, aucun `utm_`). Page cible : id 14229, https://succulentes.net/cycadales/encephalartos/ (publiée ; **rien n'a été modifié sur le site, aucun commit**).
- Pages liées (Polylang, champ `translations` lu le 01/10/2026) : EN 16289 (/en/cycads/encephalartos/), IT 11663. Le lien FR ↔ IT signalé comme manquant dans l'inventaire existe désormais.
- Longueur : environ 7 270 mots hors Sites de référence et Bibliographie, 8 300 au total (page actuelle : environ 1 530). La longueur vient surtout de l'index des 65 espèces (environ 2 000 mots) et des 11 retours de culture.
- Titre de page proposé : « Le genre Encephalartos » (inchangé).
- Titre SEO (57 car.) : `Encephalartos : cycadales d'Afrique, espèces et rusticité`
- Meta description (141 car.) : `Encephalartos : 65 cycadales africaines, toutes à l'annexe I de la CITES. Espèces éteintes à l'état sauvage, braconnage, rusticité en France.`
- Mot-clé principal : `encephalartos` (secondaires : encephalartos rusticité, encephalartos woodii, encephalartos cites).

## Vérification des chiffres donnés dans la demande
- **65 espèces et 6 taxons infraspécifiques : confirmé** (WLoC 2026.08.15, page genre « 65 species and 6 infraspecific taxa » et export XLSX : 71 noms acceptés). Les 6 infraspécifiques sont trois paires : *barteri* subsp. *barteri* / *allochrous*, *ferox* subsp. *ferox* / *emersus*, *tegulaneus* subsp. *tegulaneus* / *powysii*.
- **27 fiches FR d'espèces : confirmé** (inventaire + list_content « Encephalartos », pages FR ; les 27 URL répondent 200 sans redirection, curl du 01/10/2026). Toutes sont liées dans l'index, et seulement là.
- **33 espèces EN sans fiche FR : confirmé** (liste plus bas). S'y ajoutent **5 espèces sans aucune page** sur le site (ni FR ni EN).
- **CITES annexe I pour tout le genre : confirmé**, depuis le **4 février 1977** (Species+, taxon 13006, inscription « GENUS listing Encephalartos spp. », aucune annotation). **Annexe A dans l'UE : confirmé**, depuis le 1er juin 1997 (règlement (CE) n° 338/97), liste en vigueur : règlement (UE) 2026/1383 (29/06/2026).
- **Espèces éteintes à l'état sauvage (EW)** : 5 d'après WLoC (référence citée : Bösenberg 2022, Liste rouge) : *woodii*, *heenanii*, *brevifoliolatus*, *nubimontanus*, *relictus*. UICN non lisible directement (Cloudflare) ; EW confirmé par extraits de recherche pour *brevifoliolatus*, *heenanii*, *relictus*, *woodii*, et par les documents SANBI (citant Bösenberg 2022) pour *brevifoliolatus* et *nubimontanus*. *E. chimanimaniensis* est **EN** (pas EW), *E. dolomiticus* **CR**.

## Sources

### Lues directement (curl)
| Source | Apport |
|---|---|
| The World List of Cycads v. 2026.08.15 (page genre, 71 pages taxon, export XLSX accepted=1 et recherche « Encephalartos », « caffer », « afra ») | effectifs, description du genre, étymologie, publication (Lehm., Nov. Stirp. Pug. 6 : 11, 1834), auteurs, années, protologues, répartitions par pays et province, synonymes, statuts UICN et année de l'évaluation citée, étymologies (Haynes 2022), localités types |
| Species+ (API JSON, taxon 13006) | CITES I depuis le 04/02/1977 ; UE annexe A depuis le 01/06/1997, règl. 2026/1383 ; avis SRG de l'UE (importations depuis l'Afrique du Sud, sources A et D) ; Species+ utilise encore « caffer » |
| IPNI (API, 297071-1) | *Encephalartos afer* (Thunb.) Lehm., épithète corrigée selon l'art. 61.6 du Code de Madrid |
| SANBI, NDF *E. heenanii* (2012, mise à jour 2015), *E. brevifoliolatus* et *E. nubimontanus* (2023, mises à jour 2025) | effondrement des populations, 37 espèces en Afrique du Sud dont 70 % menacées, interdiction nationale de récolte (2007, GN 371 de 2012), braconnage, cicatrices de feu, 30-50 % de mortalité des plantes arrachées, plantes reproduites artificiellement traitées comme annexe II |
| Global Initiative, Risk Bulletin 22 (2021) | Kirstenbosch 2014 (24 *E. latifrons*), chiffres du Cap-Oriental 2011-2018, crime prioritaire, marché intérieur, muthi |
| Gymnosperm Database (archive Hambourg : woodii, altensteinii, lehmannii) | histoire du pied de *woodii* (Palmer & Pitman 1972), broodboom / uJobane, Karoo cycad, dimensions |
| Virtual Cycad Encyclopedia PACSOF (archive Hambourg) | noms anglais (horridus, ghellinckii, cycadifolius, woodii) |
| UPSpace (Université de Pretoria) | Van der Walt 1944, toxicité d'*E. horridus* |
| Forum des Fous de palmiers (recherche phpBB : horridus, lehmannii, friderici, friderici-guilielmi, guilielmi, ghellinckii, cycadifolius, laevifolius, londe+encephalartos, Londe : 524 messages ; 46 fils lus en entier) | retours FR |
| Tropicamente (recherche : 7 mots-clés, 105 fils trouvés, 38 lus en entier) | retours IT |
| Site : pages 14229, 16289, article 16529, list_content (pages et articles), curl des URL | contenu actuel, inventaire, statuts 200 |

### Relevées par extrait de recherche (WebSearch ; sites bloqués)
- POWO : genre accepté, répartition (https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:13523-1). Nombre d'espèces non relevé.
- UICN : EW pour *brevifoliolatus*, *heenanii*, *relictus*, *woodii* (extraits Wikipédia / recentlyextinctspecies, d'après Bösenberg 2022).
- SANBI PlantZAfrica (pza.sanbi.org bloqué par un pare-feu Azure, code 403) : *E. ghellinckii* résiste au feu, au gel et à la neige dans le Drakensberg ; graines à cycasine et macrozamine.
- Code de Madrid, art. 61.6 (juillet 2024), racine caf(f)r- remplacée par af(e)r- : extrait d'une note SANBI (opus.sanbi.org) ; la correction elle-même est lue directement sur IPNI et WLoC.
- Noms afrikaans formés sur « broodboom » pour plusieurs espèces (extraits Wikipédia, operationwildflower.org.za).
- PalmTalk (Cloudflare) : les extraits ne donnent aucun retour daté et chiffré pour les six espèces ; seuls des avis généraux (lehmannii « plus rustique qu'altensteinii », fil 44982). Non repris.
- Agaveville, Dave's Garden, InfoJardín, cites.org : non consultés (Cloudflare), aucun extrait utile.

## Corrections apportées à la page FR actuelle (14229)
1. **`<em>` imbriqué** dans la FAQ (« *Encephalartos <em>friderici-guilielmi</em>* ») : supprimé (FAQ réécrite).
2. « L'espèce qui remonte le plus au nord est présente au **Soudan** » → **Soudan du Sud** (*E. septentrionalis*, *E. mackenziei*).
3. « figure en annexe 1 de la CITES » avec lien cites.org/fra/node/48643 (non vérifiable, site bloqué) → annexe I **depuis le 4 février 1977** (Species+), annexe A de l'UE, avis SRG ; lien retiré.
4. FAQ « la majorité des espèces tolèrent −3 à −5 °C » ; « *E. longifolius* réputé plus tolérant » : non sourcé → remplacé par les retours documentés.
5. Retirés car non sourcés : « le sol peut être aussi bien calcaire qu'acide », engrais corne torréfiée / sang séché, « espèces bleutées : résistance au froid souvent importante », « arrosage une à deux fois par semaine ».
6. « Villa Thuret : grands sujets d'*E. longifolius* » → attribué aux photos publiées en 2010 sur le forum des Fous de palmiers (t=6732 #p90783 : *horridus*, *lehmannii*, *longifolius*).
7. Liste « Principales espèces cultivées » (27 noms, dont *manikensis* et *nubimontanus* sans lien ; *umbeluziensis* et *whitelockii* absents ; certains liens avec data-id, d'autres sans) → index complet des 65 espèces par région, 27 liens FR vérifiés.
8. Image 5556 sans texte alternatif → alt « Encephalartos friderici-guilielmi » dans le brouillon (**à reporter dans la médiathèque**, non modifiée). Images 7331 et 7339 conservées (alt = nom d'espèce).
9. Ouverture : l'introduction actuelle (deux paragraphes, lien /cycadales/ dans le second) est remplacée par un seul paragraphe, avec un seul lien, vers https://succulentes.net/cycadales/.
10. Conservé : étymologie « pain dans la tête » (précisée d'après WLoC), absence à Madagascar (confirmée), conseils de semis et de culture en pot (substrat minéral, pots profonds, mise au soleil progressive, graines non fécondées), images.

## Erreurs relevées sur la page EN (16289), à corriger
1. « approximately 68 species » (×3) → **65 espèces + 6 infraspécifiques** (WLoC 2026.08.15).
2. « from Nigeria and **Sudan** » → South Sudan ; West Africa = Benin, Ghana, Nigeria, Togo.
3. « Mozambique (approximately 8 species) » → **12**.
4. « *E. hildebrandtii* reaches the Kenya/**Somalia** coast » → Kenya, Tanzania (pas de Somalie dans WLoC).
5. « Six species Extinct in the Wild » → **5** ; *E. chimanimaniensis* présenté comme éteint (« Africa Cycads and PACSOA consider it extinct ») → **EN 2022** (WLoC), Mozambique et Zimbabwe.
6. *E. heenanii* : « 272 stems (1996) → 45 (2006) → zero (2019) » → SANBI : 115 plantes / 326 tiges (1995), ~24 plantes / 45 tiges (2006), 1 plante (survol 2013). Rangé à tort dans « Mpumalanga, Limpopo » → Mpumalanga et Eswatini.
7. *E. nubimontanus* : « 66 (1990s) to zero (2004) » → 66 (années 1990), 8 (2000), quelques tiges (2003-04), aucune (2010-11) ; listé « Mpumalanga ; Critically Endangered » → **Limpopo ; EW**. « both sexes survive in cultivation… fastest-growing blue » : non vérifié.
8. *E. brevifoliolatus* « five male plants found in 1990 » → 5 à 7 pieds mâles (SANBI) ; « Mpumalanga, Limpopo » → Limpopo ; « *E. laevifolius* frequently sold as brevifoliolatus » : non vérifié.
9. *E. relictus* : « single male plant found in 1971 » : sexe et nombre non vérifiés (type récolté le 15/03/1971) ; rangé sous Limpopo/Mpumalanga → Eswatini.
10. *E. dolomiticus* « Possibly Extinct in the Wild, 4 plants in 2019 » ; « highest EW count for any plant genus » ; « 2024–2025 IUCN Cycad Specialist Group report » : non vérifiés.
11. « stricter listing than for any other cycad genus » → faux : *Ceratozamia* est aussi entièrement à l'annexe I (depuis 1985).
12. Classes de rusticité (−5/−8 °C, −2/−5 °C, 0/−2 °C), « friderici-guilielmi 1,500–2,000 m, survives snow », germination 4-12 semaines, pollen −18 °C un an, *Aulacaspis* « less devastating » : non sourcés.
13. Index : *caffer* → **afer** (Code de Madrid, art. 61.6) ; 5 espèces absentes (*delucanus*, *mackenziei*, *marunguensis*, *poggei*, *schmitzii*) ; répartitions à corriger : *msinganus* (KZN seul), *lebomboensis* (+ Eswatini, Mozambique ; pas Mpumalanga), *laevifolius* (Eswatini, Cap-Oriental, KZN, Limpopo, Mpumalanga), *paucidentatus*, *senticosus*, *ngoyanus*, *villosus* (+ Eswatini), *aplanatus* (+ Mozambique), *chimanimaniensis* (+ Mozambique), *ghellinckii* (+ Cap-Oriental), *kisambo* (Kenya + Tanzanie), *macrostrobilus* (**Ouganda**, pas Tanzanie), *bubalinus* (Kenya + Tanzanie), *tegulaneus* (Kenya seul), *schaijesii* (+ Zambie), *laurentianus* (Angola, RDC ; pas République du Congo), *septentrionalis* (Centrafrique, RDC, Soudan du Sud, Ouganda).
14. Liens externes sans target="_blank" ; « Encephalartos.org — PACSOA » (intitulé erroné) ; bibliographie vague (« Vorster — various publications », « Goode 2001 vol. 1 and 2 », « Grobbelaar 2004 ») : à vérifier.

## Retours de forums
Classement : A = date, lieu, valeur, pleine terre/pot, protection, résultat ; B = un élément manque ; C = écarté. FDP = forum des Fous de palmiers (https://www.fousdepalmiers.fr/html/forum/viewtopic.php?...). Aucun nom ni pseudo dans la page.

### Retenus (A)
- *E. friderici-guilielmi*, **Nantes**, février 2012, −9,5 °C, PT depuis 2004, sous cloche, intact (et −8 °C sans protection à l'état juvénile, 2007). FDP t=9568&start=15#p169315 ; t=3323&start=75#p171543 ; t=11385#p178194 ; t=804&start=45#p11327.
- *E. friderici-guilielmi*, **Béarn**, février 2012, jusqu'à −10 °C répétés, PT depuis 2009, petit caudex (~4 cm), sans protection, intact. FDP t=9568#p169292 ; t=10224&start=45#p327706 ; t=8427&start=45#p116857 ; t=7063#p87942.
- *E. friderici-guilielmi*, **Côte Bleue (13)**, hiver 2009-2010, −7 °C « sous abris », PT 1er hiver, bonne forme. FDP t=6777#p83706.
- *E. friderici-guilielmi*, **Ravenne (IT)**, décembre 2009, −7 °C (−10 °C à découvert), pot sous terrasse, abri de la pluie, perdu. Tropicamente la-neve #post-43852 ; piante-che-ce-lhanno-fatta-non-ce-lhanno-fatta #post-44034, #44068, #41657 ; rusticita-encephalartos-ferox #post-47696 ; le-foglie-nuove-delle-cycadacee (page 4) #post-40982.
- *E. lehmannii*, **Roussillon (66)**, hiver 2009-2010, −7 °C et neige, PT ~12 ans, sans protection, feuilles un peu rougies puis 6-7 feuilles ; février 2012, −5 °C + vent violent, caudex sous écorce de pin, intact. FDP t=4407&start=30#p85598 ; t=7030#p87449 ; t=7063&start=60#p119745 ; t=8427&start=45#p116738 ; t=3323&start=75#p171518 ; t=10293#p171592.
- *E. lehmannii*, **Ravenne (IT)**, décembre 2009, −7 °C, pot en serre froide, feuilles brûlées, mort. Tropicamente piante-che-ce-lhanno-fatta… #post-44034, #44068, #44077, #41628 ; lehmannii-in-piena-terra #post-50413.

### Retenus (B, 5)
- *E. horridus*, **Ravenne**, décembre 2009, −7 °C, pot en serre froide, pointes sèches (classé B : le même membre écrivait en novembre 2009 ne pas encore avoir d'*horridus* ; acquisition entre-temps probable, à garder en tête). Tropicamente piante-che-ce-lhanno-fatta… #post-44034, #44077.
- *E. horridus*, **Roussillon**, PT en patio, min. absolu −4 °C, jamais de dégât — pas d'épisode daté, protection non dite. FDP t=8427&start=45#p116738 ; t=20178#p511774.
- *E. cycadifolius*, **Roussillon**, été 2009 arrosage excessif → perte de toutes les feuilles sauf une ; hiver 2009-2010 −7 °C sans dégât supplémentaire — pot/PT non dit. FDP t=4407&start=15#p75464 ; t=4407&start=30#p85598 ; t=8427&start=45#p116738.
- *E. friderici-guilielmi*, **Concarneau (29)**, février 2012, −5 °C quelques heures, PT depuis 2011, 3 feuilles grillées — protection non dite. FDP t=11385&start=15#p178827.
- *E. lehmannii* (+ *natalensis*), **Concarneau**, hiver 2007-2008 (−4 °C signalé), pourris — pot/PT non dit. FDP t=3684&start=15#p47668.

### Écartés (C)
- Tarn, *E. friderici-guilielmi* défolié « à cause de l'humidité » après passage en PT, sans valeur ni date (t=11887&start=30#p324392).
- Goncelin (38), *E. lehmannii* perdu en serre froide à −4 °C, sans date (t=10717#p156168).
- Pau : plante d'un tiers nommé, « −10° », ouï-dire (t=10224&start=45#p327570).
- Saint-Médard-de-Guizières (33) : généralisation « lehmannii : feuillage abîmé à −6/−7 °C, caudex détruit vers −9/−10 °C », non daté (t=23119&start=105#p466488).
- Roussillon : avis généraux (« Kirkwood fiable jusqu'à −6/−7 °C », t=11759&start=15#p325089 ; t=20178#p511770 ; t=9568&start=15#p221366).
- Pépiniériste (Jardin d'Amélie) : *E. f.-g.* « rustique à −12° sur sol sec », affirmation commerciale (t=4036&start=15#p52554).
- Corse : *E. ghellinckii* oublié huit ans en PT, puis défolié après transplantation, sans valeur de froid (t=16471#p292956).
- Côte Bleue : *cycadifolius* et *ghellinckii* « plus délicats », avis (t=9568#p133051).
- Var : *E. f.-g.* et *natalensis* pourris en pot (substrat trop compact), culture et non froid (t=5616#p63908).
- Belley/Montpellier : « en Afrique du Sud, horridus et trispinosus prennent −3/−5 °C la nuit », ouï-dire (t=15130#p254366).
- Tropicamente : pertes d'un membre sans lieu connu (avril 2010, #post-41645) ; classement par groupes de rusticité, avis (encephalartos #post-37580) ; *lehmannii* en terre à l'île d'Elbe, photo sans données (lehmannii-in-piena-terra #post-50415) ; *trispinosus* perdu à Ravenne (hors des six espèces).
- *E. ghellinckii* et *E. laevifolius* : **aucun retour A, B ou C chiffré** trouvé (FDP t=16471 et t=19974 lus en entier ; Tropicamente encephalartos-ghellinckii).
- Messages envoyés depuis **La Londe-les-Maures** : non mis dans la page ; listés dans `cycadales-a-verifier.md`, section « Messages de La Londe (JZT ?) », sous-section *Encephalartos* (4 messages + 1 mention par un tiers).
- Températures Météo-France : non utilisées (tous les retours retenus ont leur propre valeur).

## Liens internes posés (tous 200, curl du 01/10/2026)
- Introduction : https://succulentes.net/cycadales/ (13826), seul lien.
- Corps (1re occurrence) : /cycadales/cycas/ (1256), /cycadales/stangeria/ (4081), /cycadales/ceratozamia/ (9866).
- Index : les 27 fiches FR (altensteinii 2436, ferox 1847, friderici-guilielmi 1857, gratus 12439, hildebrandtii 12423, horridus 2470, inopinus 7258, ituriensis 12619, kisambo 12464, laurentianus 12515, lebomboensis 2451, lehmannii 1362, longifolius 1373, middelburgensis 11822, msinganus 5596, munchii 12296, natalensis 1866, paucidentatus 12001, princeps 2461, sclavoi 5560, senticosus 2480, transvenosus 2502, trispinosus 2492, umbeluziensis 12681, villosus 12642, whitelockii 12023, woodii 10803). Comme pour *Dioon*, les noms d'espèces ne sont pas liés plus haut dans le texte.
- À lire aussi : 12265 (*E. woodii* : relique ou hybride ?), 15578 (semis de cycadales), 13662 (racines).
- **Article « méthode Simon Lavaud » (16529) : non retenu.** Il traite uniquement de la greffe de *Cycas* australiens et thaïlandais (*C. couttsiana*, *C. siamensis* « Silver ») sur *Cycas revoluta*, greffe intragénérique, et ne mentionne jamais *Encephalartos*. Aucune source consultée ne décrit de greffe d'*Encephalartos* sur *Cycas revoluta* ; le placer dans « À lire aussi » suggérerait une technique non documentée. Ses résultats ne sont par ailleurs appuyés que sur un pépiniériste vendeur.
- Liens externes : DOI WLoC, UPSpace, Global Initiative, EUR-Lex dans la Bibliographie, en target="_blank" ; Sites de référence en texte brut.

## Fiches FR manquantes
- **33 espèces avec page EN, sans fiche FR** : aemulans (17076), aplanatus (17050), arenarius (16779), barteri (16895), brevifoliolatus (16948), bubalinus (16877), caffer → **afer** (16786), cerinus (16971), chimanimaniensis (17017), concinnus (17056), cupidus (16744), cycadifolius (16721), dolomiticus (17002), dyerianus (17009), equatorialis (16844), eugene-maraisii (16899), ghellinckii (16711), heenanii (16929), hirsutus (16734), humilis (16771), laevifolius (16699), lanatus (16912), latifrons (17086), macrostrobilus (16859), manikensis (17022), ngoyanus (16984), nubimontanus (16942), pterogonus (17024), relictus (16935), schaijesii (16887), septentrionalis (16867), tegulaneus (16814), turneri (17070).
- **5 espèces sans aucune page** : delucanus, mackenziei, marunguensis, poggei, schmitzii.
- Priorité suggérée (rusticité traitée dans le hub) : cycadifolius, ghellinckii, laevifolius, puis les 5 EW.

## Points à valider par le propriétaire
1. **Longueur** (≈ 7 270 mots hors références) : acceptable pour un hub de 65 espèces ? L'index peut être raccourci (une ligne par espèce sans étymologie) si besoin.
2. ***E. afer* / *E. caffer*** : la page suit WLoC et IPNI (*afer*), en signalant *caffer*. La page EN 16786 a le slug « caffer » ; décider du nom d'usage du site (règle « nom d'usage » ?).
3. **POWO** non lu directement : nombre d'espèces selon POWO non vérifié ; la page donne 65 d'après WLoC.
4. **Avis SRG de l'UE** : résumés depuis Species+ (importations depuis l'Afrique du Sud de plantes reproduites artificiellement, sources A et D) ; à faire relire si la section doit rester aussi détaillée.
5. ***E. horridus* à Ravenne** (B) : doute léger sur la date d'acquisition (voir plus haut). Le retirer si l'on veut zéro doute.
6. **La Londe-les-Maures** : 4 messages listés dans `cycadales-a-verifier.md` ; si ce sont les plantes du JZT, une observation datée de *E. sclavoi* ou des *Encephalartos* sur rocaille serait la bienvenue.
7. **Médiathèque** : renseigner l'alt « Encephalartos friderici-guilielmi » sur l'image 5556 (vide aujourd'hui).
8. **Common names** : « Eastern Cape blue cycad », « Winterberg cycad », etc. viennent d'une archive de 1998-2000 (PACSOF) ; acceptable comme noms d'usage anglais ?

## Note de conformité (gabarit)
1. Invérifiables / incertains : nombre d'espèces POWO ; statuts UICN lus via WLoC (Liste rouge non lue) ; art. 61.6 (texte du Code non lu, extrait SANBI) ; cycasine/macrozamine (extraits) ; habitat de *ghellinckii* (extrait PlantZAfrica) ; ouvrages de la bibliographie non consultés (Lehmann 1834, Haynes 2022, Haynes 2009, Rousseau et al. 2015, Palmer & Pitman 1972).
2. Choix éditoriaux : section « Cinq espèces éteintes à l'état sauvage » ajoutée au plan hub ; index par région (Afrique du Sud en 5 sous-parties, Afrique australe hors Afrique du Sud, Afrique de l'Est, Afrique centrale et de l'Ouest) ; *septentrionalis* rangé en Afrique de l'Est (Soudan du Sud, Ouganda) bien que présent aussi en Centrafrique et en RDC ; espèce type du genre non indiquée (non trouvée dans WLoC ni IPNI).
3. Sources introuvables ou bloquées : POWO, UICN, cites.org, PlantZAfrica, PalmTalk, Agaveville, Dave's Garden, InfoJardín ; Palmiers & Cie non lisible ; sources thaïlandaises, japonaises et chinoises : rien de spécifique à *Encephalartos* cherché faute de temps (genre africain).
4. France, zones sans donnée : intérieur continental, montagne ; Bretagne limitée à Concarneau. Aucun retour pour *ghellinckii* et *laevifolius*.
5. Encadré : tous les champs renseignés ; « Anciens noms » : aucun synonyme de genre dans WLoC.
