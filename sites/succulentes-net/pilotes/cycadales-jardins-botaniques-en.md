# Cycadales des jardins botaniques du Royaume-Uni, des États-Unis et d'Australie : inventaire sourcé

Recherche documentaire faite le 19 octobre 2026, en lecture seule (curl, WebFetch, WebSearch). Rien n'a été modifié sur succulentes.net et rien n'a été commité. Aucun site protégé n'a été contourné : les pages bloquées (Cloudflare, 403, 429) sont signalées comme telles en partie 4, et leur contenu n'est connu, le cas échéant, que par l'extrait du moteur de recherche, ce qui est indiqué à chaque fois. Inventaire destiné à la rédaction des fiches anglaises (règles « Version anglaise » du 19/10/2026 dans `prompts/redaction-fiches.md`).

**Règles suivies**

- Chaque mention renvoie à une source codée, listée en partie 5 avec son adresse et sa date de consultation (toutes consultées le 19/10/2026, sauf mention contraire).
- Trois types de sources, du plus au moins fiable pour la présence actuelle d'une espèce :
  1. **catalogues en ligne tenus par le jardin lui-même**, avec date de mise à jour affichée quand elle existe (Montgomery, Fairchild, RBG Sydney, Mount Annan, RBG Victoria, Cambridge, Édimbourg, Chelsea) ;
  2. **BGCI PlantSearch** (base mondiale où chaque jardin dépose sa liste) : aucune date de dépôt n'est affichée par jardin ; une entrée prouve qu'un jardin a déclaré l'espèce un jour, pas qu'elle est vivante aujourd'hui ;
  3. **pages, articles et publications** datés (pages des jardins, revues, presse).
- Une **liste ancienne** n'est jamais présentée comme l'état actuel de la collection.
- Noms : le nom donné par la source est ramené au nom accepté par *The World List of Cycads* (WLoC, cycadlist.org, page « scientific_names » téléchargée le 19/10/2026 : 898 noms, dont 481 acceptés et 401 synonymes). Le fichier local `wloc.xlsx` cité dans l'inventaire italien n'existe plus sur le disque. Les écarts entre la source et le nom accepté sont indiqués. Hybrides, cultivars, « sp. », « aff. » et « cf. » sont exclus des décomptes et du tableau, et cités à part quand ils sont notables.
- Forums : aucun nom ni pseudo. Les identifications des forums sont celles des participants.
- Températures : °C d'abord, °F entre parenthèses (conversion exacte). Zones USDA : seulement attribuées à leur source (voir 1.2).
- Rappel de la règle EN : ces données servent à citer des jardins comme lieux de culture attestés ; un nom de jardin avec l'espèce ne dit rien de la rusticité si la plante est en serre.

## 1. Résumé par pays

### 1.1 Royaume-Uni

**Nombre d'espèces attestées : 103** espèces acceptées (WLoC) dans au moins un jardin britannique, toutes sources confondues (24 jardins britanniques déclarent des cycadales dans BGCI).

**Culture** : presque tout est **sous verre**. La culture **en pleine terre** n'est documentée que dans deux jardins au microclimat exceptionnel :

- **Ventnor** (île de Wight) : *Cycas revoluta*, avec des cônes en plein air ;
- **Tresco** (Scilly) : *Encephalartos natalensis* photographié en 2026, et *Macrozamia communis* déclaré dans BGCI.

Repère officiel : la RHS classe *Cycas revoluta* **H3**, « rustique dans les zones côtières et relativement douces du Royaume-Uni (−5 à 1 °C ; 23 à 34 °F) », avec culture conseillée sous verre ou en pleine terre seulement « dans les zones sans gel » [R1].

**Sources principales** : BGCI [B1] ; catalogue en ligne de Cambridge [C1] ; Garden Explorer d'Édimbourg [E4] et de Chelsea [P1] ; article sur les cycadales d'Édimbourg (*Sibbaldia* 8, 2010) [E1] ; pages de Tresco [T1, T2] et de Ventnor [V1-V3] ; Guinness World Records pour Kew [K3, K5].

**Bloqué** : kew.org (Cloudflare, 403) ; data.rbge.org.uk (catalogue détaillé d'Édimbourg : erreur de certificat avec curl, 503 avec WebFetch) ; Hardy Tropicals UK (403 intermittent, recherche du forum en 403).

### 1.2 États-Unis

**Nombre d'espèces attestées : 289** espèces acceptées dans au moins un jardin américain. **Montgomery Botanical Center** en possède à lui seul 225 dans son catalogue en ligne (1 802 numéros d'accession).

**Culture** : en **pleine terre** en Floride du Sud (Montgomery, Naples ; non précisé pour Fairchild) et sur la côte de Californie du Sud (Lotusland, San Diego Botanic Garden ; Huntington d'après des extraits seulement) ; **sous serre** à Saint-Louis (Missouri Botanical Garden, Climatron). À Berkeley (baie de San Francisco), la plupart des espèces sont en plein air, mais *Microcycas*, *Bowenia*, *Stangeria*, *Cycas multipinnata* et *C. micholitzii* y exigent la serre [M4].

**Zones USDA** : aucun des jardins consultés ne publie sa zone sur les pages lues. À titre indicatif, la carte USDA 2023, interrogée par code postal via le service tiers phzmapi.org [Z1] (zone du centre du code postal, pas du jardin lui-même), donne :

| Jardin (code postal) | Zone | Minimale annuelle moyenne |
|---|---|---|
| Montgomery et Fairchild, Coral Gables (33156) | 11a | 4,4 à 7,2 °C (40 à 45 °F) |
| Naples Botanical Garden (34112) | 10b | 1,7 à 4,4 °C (35 à 40 °F) |
| Huntington, San Marino (91108) | 10a | −1,1 à 1,7 °C (30 à 35 °F) |
| Lotusland, Santa Barbara (93108) | 10b | 1,7 à 4,4 °C (35 à 40 °F) |
| San Diego Botanic Garden, Encinitas (92024) | 10a | −1,1 à 1,7 °C (30 à 35 °F) |
| San Diego, centre-ville et zoo (92101) | 11a | 4,4 à 7,2 °C (40 à 45 °F) |
| UC Botanical Garden, Berkeley (94720) | 10a | −1,1 à 1,7 °C (30 à 35 °F) |
| Missouri Botanical Garden, St. Louis (63110) | 7a | −17,8 à −15,0 °C (0 à 5 °F) |

Ces zones sont à attribuer à la carte USDA (via ce service), jamais au jardin.

**Sources principales** : catalogue BG-BASE de Montgomery (jeu « CYCADS ») [M1] ; Garden Explorer de Fairchild [F2] ; BGCI [B1] ; fiche du réseau Plant Collections Network (APGA, 2015) [M4] ; Deloso et al. 2025 pour le Missouri Botanical Garden [MO1] ; pages et lettres d'information de Lotusland [L1-L3] ; article de Naples [N1].

**Bloqué** : huntington.org (429, trop de requêtes, à chaque essai) ; davesgarden.com et garden.org (Cloudflare, 403) ; PalmTalk (Cloudflare) ; sites des sociétés de Floride et de Californie du Sud (502 au proxy).

### 1.3 Australie

**Nombre d'espèces attestées : 212** espèces acceptées dans au moins un jardin australien.

**Culture** : le plein air n'est indiqué plante par plante qu'à Melbourne (d'après le nom des massifs) ; ailleurs, l'emplacement est donné par numéro de massif ou n'est pas précisé. Trois catalogues en ligne permettent de vérifier les plantes une à une :

- **RBG Sydney** : 143 espèces au Garden Explorer, mis à jour le 01/10/2026, avec un numéro de massif par plante ;
- **RBG Victoria** : recensement en ligne, avec le massif de chaque plante ; à Melbourne, seules la « Cycad House » et la « Tropical House » sont des serres ;
- **Mount Annan** : Garden Explorer, mis à jour le 15/10/2026 (espèces australiennes seulement).

À Melbourne, *Encephalartos woodii* figure dans trois massifs du jardin.

**Sources principales** : Garden Explorer de RBG Sydney [SY1] et de Mount Annan [SY2] ; recensement de RBG Victoria [MV1] ; BGCI [B1] ; communiqué de l'ANBG (2004) [CB1].

**Bloqué ou absent** :

- botanicgardens.org.au (pages de RBG Sydney, 403) ;
- cairns.qld.gov.au (403) ;
- recherche en ligne des collections de l'ANBG (404 : le moteur CGI a disparu) ;
- Cycad Pages de RBG Sydney (410) ;
- **George Brown Darwin** et **Rockhampton** : aucune liste d'espèces trouvée, ni dans BGCI, ni ailleurs.

## 2. Détail par jardin

### 2.1 Royaume-Uni

#### Royal Botanic Gardens, Kew (Londres) — sous verre

- **Présentation de la collection (page bloquée)** : la page « Cycad Collection » de Kew [K1] est derrière Cloudflare (403) ; on ne la connaît que par les extraits du moteur de recherche (19/10/2026). Selon ces extraits :
  - 83 espèces de cycadales (le même extrait affiche aussi « Taxa: 81 »), soit 27 % des espèces du monde ;
  - points forts : *Encephalartos* et *Macrozamia* (un autre extrait cite aussi *Ceratozamia*, *Dioon* et *Zamia*) ;
  - emplacements : **Palm House, Temperate House et Jodrell Glass**, tous sous verre ;
  - spécimen remarquable : *Encephalartos woodii*, « éteint à l'état sauvage ».
- **BGCI** [B1] : **64 espèces acceptées** (liste dans le tableau, code KEW), plus l'hybride *Encephalartos lebomboensis* × *villosus*.
- ***Encephalartos altensteinii* de la Palm House** :
  - Guinness World Records [K3] (page lue) : « la plus vieille plante en pot du monde », apportée d'Afrique du Sud et plantée en **1775**, exposée dans la Palm House ;
  - Deloso et al. 2025 [MO1] (lu) : le spécimen type vivant d'*E. altensteinii* « pousse à Kew depuis 1775 » ;
  - article de Kew du 23/07/2019 [K2] (bloqué, extraits seulement) : récolté par Francis Masson dans le Cap-Oriental, longtemps nommé *E. longifolius*, installé dans la Palm House en 1848, un seul cône à Kew, en 1819.
- ***Encephalartos woodii*** :
  - Guinness World Records [K5] (lu) : Kew a reçu l'un des troncs récoltés en **1899** ;
  - la revue de l'International Dendrology Society [K6] (non chargée, extrait seulement) parle de rejets récoltés en **1903** pour Durban et Kew : **les deux dates divergent** ;
  - selon un extrait de presse sur la réouverture de la Temperate House (mai 2018) [K7], il n'existe que des pieds mâles, tous clones.
- **Temperate House** : vidée à partir de 2012 pour restauration, replantée et rouverte en mai 2018 (extraits de presse [K7]). Les cycadales qu'elle abrite ne sont pas nommées dans les sources lisibles.
- **Climat** : sans objet pour la rusticité (serres).

#### Tresco Abbey Garden (île de Tresco, Scilly) — pleine terre

- **Journal du jardin, juillet 2026** [T1] : de « towering cycads » au soleil en pleine sécheresse estivale. Trois photos sont légendées ***Encephalartos natalensis***. Tresco est un jardin de plein air : les pages consultées ne parlent d'aucune serre.
- **BGCI** [B1] : ***Macrozamia communis*** (seule cycadale déclarée).
- **Climat, selon le jardin** [T2, février 2025] : « climat doux, pratiquement sans gel » et hauts brise-vent.
- **Gel de janvier 1987** : le jardin a été en grande partie détruit ; Édimbourg, Logan et Kew ont fourni des plantes de remplacement (Country Life [T3]). Aucune source ne dit si des cycadales ont été perdues ou replantées à cette occasion.
- Un blog de visite de 2012 citerait *E. lehmannii* (403, extrait seulement) : non retenu.

#### Ventnor Botanic Garden (île de Wight) — pleine terre

- **Climat, selon le jardin** [V1] : microclimat « environ 5 °C plus chaud que le reste du Royaume-Uni » ; 30 000 plantes en extérieur (méthode dite « Ventnor Method »).
- ***Cycas revoluta* en plein air** :
  - un pied mâle a formé un cône en **2013** selon le récit du jardin sur Google Arts & Culture [V3], en **2012** selon un article du jardin aujourd'hui en 404 [V5, connu par extrait] et un article de presse de seconde main [V4] ;
  - en **été 2019**, un cône mâle plus gros et un **cône femelle** sont apparus en même temps [V3] ;
  - le jardin présente ces cônes comme les premiers en plein air au Royaume-Uni et les attribue au réchauffement et aux canicules [V3, V4] ;
  - dépliant de 2017 environ [V2] : « un *Cycas* en fleur » (cône) au jardin.
- **Ancienneté** : selon le conservateur cité en [V4], les cycadales y sont cultivées « depuis 15 à 20 ans », d'abord « à titre d'expérience ».
- **Autres espèces** : Ventnor ne figure pas dans BGCI ; aucune autre espèce n'est nommée.

#### Royal Botanic Garden Edinburgh — sous verre (serres fermées pour travaux)

- **Article *Sibbaldia* n° 8 (2010)** [E1], mémoire d'étudiant publié par RBGE :
  - **35 espèces** dans la collection vivante, de tous les genres sauf *Microcycas* ;
  - « l'une des plus grandes collections de cycadales du Royaume-Uni », surtout des espèces d'Afrique australe ;
  - plantes souvent mal placées, « dans des conditions trop humides et mal drainées » (problèmes de croissance et de pathogènes) ;
  - plusieurs *Cycas circinalis* réidentifiés en *C. rumphii* : un seul vrai *C. circinalis* restait.
- **Multisite BG-BASE** [E5] : 34 réponses par genre (*Bowenia* 2, *Ceratozamia* 3, *Cycas* 7, *Dioon* 6, *Encephalartos* 9, *Lepidozamia* 2, *Macrozamia* 2, *Stangeria* 1, *Zamia* 2). La liste détaillée (data.rbge.org.uk) n'a pas pu être lue [E6].
- **BGCI** [B1] : 33 espèces : *Bowenia serrulata*, *B. spectabilis*, *Ceratozamia hildae*, *C. kuesteriana*, *C. robusta*, *Cycas circinalis*, *C. debaoensis*, *C. micholitzii*, *C. panzhihuaensis*, *C. revoluta*, *C. rumphii*, *C. seemannii*, *Dioon califanoi*, *D. edule*, *D. holmgrenii*, *D. mejiae*, *D. rzedowskii*, *D. spinulosum*, *Encephalartos afer* (sous le nom *E. caffer*), *E. altensteinii*, *E. ferox*, *E. hildebrandtii*, *E. lebomboensis*, *E. lehmannii*, *E. natalensis*, *E. transvenosus*, *E. villosus*, *Lepidozamia hopei*, *L. peroffskyana*, *Macrozamia communis*, *M. moorei*, *Stangeria eriopus*, *Zamia integrifolia*.
- **Garden Explorer d'Édimbourg** [E4], mis à jour le 18/10/2026 : seulement 11 taxons, sans emplacement affiché : *Ceratozamia kuesteriana*, *C. robusta*, *Dioon edule*, *D. mejiae*, *D. spinulosum*, *Lepidozamia hopei*, *L. peroffskyana*, *Macrozamia communis*, *M. moorei*, *Stangeria eriopus*, *Zamia integrifolia*.
  - Accessions les plus anciennes : 1933 (*L. hopei* 19330467, *L. peroffskyana* 19330218, *C. kuesteriana* 19331056).
  - Aucun *Cycas* ni *Encephalartos* n'apparaît dans ce Garden Explorer, alors que BGCI et l'article de 2010 en citent. Peut-être un affichage partiel lié à la fermeture des serres ; non vérifiable.
- **Serres** : les serres publiques, classées, sont **fermées pour restauration** (projet Edinburgh Biomes). 40 000 plantes ont été déplacées à partir du printemps 2021 [E2]. L'ancienne « Orchids and Cycads House » est décrite sur le blog du jardin [E3] (photos d'*Encephalartos lebomboensis* et de *Cycas pectinata*).

#### Logan Botanic Garden (Écosse, Dumfries and Galloway)

- **BGCI** [B1] : *Encephalartos natalensis* (seule cycadale déclarée). Aucune autre source ; serre ou plein air non documenté.

#### Cambridge University Botanic Garden — serres

- **Portail en ligne du jardin** [C1] (recherche par famille, 19/10/2026) : 14 accessions, 14 espèces :
  - *Cycadaceae* : *Cycas pectinata* (2017, origine sauvage), *C. rumphii* (1981, sauvage), *C. schumanniana* (2017) ;
  - *Zamiaceae* : *Ceratozamia latifolia* (2020), *Dioon edule*, *Encephalartos gratus* (1958, sauvage), *E. laurentianus* (1970, sauvage), *E. lehmannii* (1959), *E. natalensis* (2013), *E. princeps* (2018), *Macrozamia communis* (1964), *M. moorei* (2004), *Stangeria eriopus*, *Zamia furfuracea* (1987).
  - L'année de chaque accession est tirée de son numéro.
- **BGCI** [B1] : les mêmes, moins *C. latifolia*.
- **Emplacement** : les serres (Tropical House) sont citées pour les cycadales dans un extrait de Parks & Gardens [C2] ; non vérifié plus avant.

#### Oxford Botanic Garden

- **BGCI** [B1] : 14 espèces : *Ceratozamia kuesteriana*, *C. latifolia*, *C. mexicana*, *C. robusta*, *Cycas media*, *C. pectinata*, *C. revoluta*, *C. rumphii*, *C. schumanniana*, *C. taiwaniana*, *Encephalartos ferox*, *E. horridus*, *E. trispinosus*, *Zamia furfuracea*.
- **Emplacement** : aucune source lisible ne le précise.

#### Chelsea Physic Garden (Londres)

- **Garden Explorer du jardin** [P1], mis à jour le 15/10/2026 : *Cycas revoluta*, accession 2018-0426, dans la « Glasshouse Fernery West Bed » (serre). Le jardin le note « Half hardy – unheated greenhouse / mild winter : 1 to −5 °C » (34 à 23 °F) : c'est son propre classement.
- **BGCI** [B1] : 6 espèces : *Cycas revoluta*, *Dioon spinulosum*, *Encephalartos ferox*, *E. ghellinckii*, *Stangeria eriopus*, *Zamia furfuracea*.

#### Eden Project (Cornouailles) — biomes

- **BGCI** [B1] : 5 espèces : *Cycas revoluta*, *Dioon spinulosum*, *Encephalartos horridus*, *E. transvenosus*, *Zamia pumila*.
- Aucune source lisible ne dit dans quel biome elles se trouvent.

#### Jardins côtiers de Cornouailles et du Dorset

- **Cornouailles** : aucune source ne mentionne de cycadale à Trebah, Trewidden ou Lamorran (recherches du 19/10/2026).
- **Abbotsbury Subtropical Gardens (Dorset)** : selon Montgomery (article du 29/11/2007) [A1], un responsable du jardin est venu étudier les collections de Montgomery pour évaluer leur « potentiel horticole pour le sud de l'Angleterre ». Le jardin a reçu une médaille d'argent (Silver Flora) à Chelsea en 2006 pour une présentation comprenant des cycadales. Aucune espèce n'est nommée, et aucune culture en pleine terre n'est attestée.

#### Autres jardins britanniques (BGCI seulement [B1])

- **Glasgow Botanic Gardens** (35 espèces), **RHS Wisley** (30), **National Botanic Garden of Wales** (15), **Paignton Zoo** (13), **Birmingham Botanical Gardens** (11), **Bristol University Botanic Garden** (10) et **Treborth** (10) : listes dans le tableau.
- Plus petits effectifs : Rosemoor, Sheffield, Hull, Leeds, Reading, Living Rainforest, Durham, Wakehurst, Millennium Seed Bank.
- À Wisley, BGCI mentionne aussi l'hybride *Cycas revoluta* × *taitungensis*.
- Bristol : un article du centenaire de l'université sur un *Encephalartos lehmannii* « centenaire » donné en 1999 est connu par extrait, mais la page est en 404.

#### Pleine terre au Royaume-Uni : ce qui est documenté

- ***Cycas revoluta*** :
  - Ventnor : en plein air, avec cônes en 2012 ou 2013, puis en 2019 [V3-V5] ;
  - classement RHS **H3** (−5 à 1 °C ; 23 à 34 °F), conseillé en pleine terre seulement « dans les zones sans gel » [R1] ;
  - selon un extrait de recherche (page de Hardy Tropicals UK en 403 puis 404) : « −4 °C (25 °F) sans protection » et un pied planté en 2002 sous voile d'hivernage. Retour de pépinière, non vérifié ;
  - un modérateur d'un forum britannique de jardinage (growsonyou.com, extrait) déconseille la pleine terre hors du sud-ouest, en raison de l'humidité hivernale.
- ***Encephalartos natalensis*** : Tresco, 2026 [T1].
- ***Macrozamia communis*** : Tresco (BGCI [B1]).
- Aucune autre espèce n'a été trouvée en pleine terre au Royaume-Uni dans une source vérifiable.

### 2.2 États-Unis

#### Montgomery Botanical Center (Coral Gables, Floride) — plein air

- **Catalogue en ligne** [M1] : base BG-BASE de Montgomery, jeu de données « Montgomery – Cycads », consultable par le « Multisite » hébergé par RBGE. Contenu au 19/10/2026 : 270 entrées, soit **225 espèces acceptées** (WLoC) et 1 802 numéros d'accession.
  - Les numéros à 8 chiffres commencent par l'année (ex. 20200216 = 2020).
  - **48 espèces** ont au moins une accession de 2020 ou plus récente, dont *Encephalartos woodii*, *Cycas cairnsiana*, *C. cupida*, *C. desolata*, *C. platyphylla* et 11 *Macrozamia*.
  - Accessions les plus nombreuses : *Cycas micronesica* (240), *Zamia integrifolia* (112), *Cycas revoluta* (63), *Zamia pumila* (49), *Z. furfuracea* (35), *Cycas panzhihuaensis* (34), *Zamia loddigesii* (30), *Dioon spinulosum* (29), *Zamia decumbens* (27).
  - Plus de 40 taxons non décrits ou d'identité incertaine (« sp. », « aff. », « cf. »), notamment des *Zamia* des Bahamas (Abaco, Andros, Eleuthera, Grand Bahama, New Providence).
- **Remarques de la base** : quelques lignes portent une mention « Accepted name » qui contredit le nom affiché (ex. *Ceratozamia mexicana* → « *C. brevifrons* » ; *Cycas thouarsii* → « *C. glauca* »). Elles sont à interpréter avec prudence. On a gardé le nom affiché.
- **BGCI** [B1] : 218 espèces.
- **Effectifs publiés** :
  - Plant Collections Network (APGA, fiche datée du 09/11/2015) [M4] : 257 taxons ;
  - lettre de Montgomery, printemps-été 2025 [M3] : plus de 1 800 graines de *Cycas cairnsiana*, *C. cupida*, *C. desolata* et *C. platyphylla* récoltées dans le nord du Queensland, pour moitié intégrées aux collections de Montgomery. *C. cupida* et *C. desolata* sont dites « absentes de la plupart des collections ».
- **Culture** : Cycad Walk en plein air (page du jardin [M2]), conçue en 1995 et réévaluée en 2001 en secteurs « savane », « chênaie » (surtout *Dioon*) et « forêt tropicale ».

#### Fairchild Tropical Botanic Garden (Coral Gables, Floride) — emplacement non précisé par les sources lues

- **Page du jardin** [F1] : plus de 700 plantes accessionnées, « l'une des plus grandes et plus diverses collections du monde » ; collection NAPCC de palmiers et de cycadales.
- **Garden Explorer de Fairchild** [F2], mis à jour le 16/10/2026 : **119 espèces acceptées**, dont 35 entrées *Encephalartos* (avec *E. woodii*), 39 *Zamia*, 21 *Ceratozamia*, 19 *Dioon*, *Microcycas calocoma*, *Stangeria eriopus*, *Bowenia spectabilis*.
- **BGCI** [B1] : 114 espèces.
- Fairchild a donné un *E. woodii* à Naples en octobre 2022 [N1].

#### The Huntington (San Marino, Californie) — plein air et conservatoire, d'après des extraits (site inaccessible)

- huntington.org a renvoyé **429** à chaque essai [H1-H3] ; contenu connu par extraits de recherche seulement :
  - « plus de 200 des quelque 360 espèces connues » ;
  - échantillon d'espèces : *Encephalartos longifolius*, *E. latifrons*, *E. arenarius*, *E. villosus*, *E. hildebrandtii*, *E. princeps*, *E. trispinosus*, *E. lehmannii*, *E. dolomiticus* ;
  - achat de cycadales en 1909, dont « beaucoup survivent » près de la demeure ;
  - en 2015, environ 1 500 cycadales de la collection Whitelock (Eagle Rock) ont été transférées. Un site de société horticole donne plutôt 640 cycadales : chiffres divergents ;
  - une partie est plantée sur la « cycad walk », une autre placée dans le conservatoire (Rose Hills Foundation Conservatory).
- **BGCI** [B1] : **174 espèces**, plus 9 hybrides d'*Encephalartos*, dont *E. natalensis* × *woodii* et *E. transvenosus* × *woodii*.

#### Ganna Walska Lotusland (Montecito, Santa Barbara, Californie) — plein air

- **Page du jardin** [L1] :
  - espèces notables : *Encephalartos horridus*, *E. trispinosus*, *E. lehmannii*, *E. heenanii*, *E. latifrons*, *E. ferox*, *E. lanatus*, *E. friderici-guilielmi*, *Cycas revoluta*, *Lepidozamia peroffskyana*, *Ceratozamia latifolia*, *C. fuscoviridis*, *Dioon oaxacensis* ;
  - cinq espèces de la collection seraient éteintes à l'état sauvage ; trois *E. woodii* dominent le bassin.
- **Plant Collections Network** (09/11/2015) [M4] :
  - jardin construit de 1977 à 1979 ; plantes groupées par genre sur massifs surélevés ;
  - 143 taxons, environ 700 plantes, 9 des 10 genres (sauf *Bowenia*). L'en-tête de la même fiche dit 170 taxons ;
  - les chiffres récents de Lotusland (plus de 900 spécimens, près de 200 espèces) ne sont connus que par des extraits d'événements, non datés.
- **Lettre de l'été 2026** [L2] : fin d'une rénovation de plusieurs années du jardin de cycadales, contre le pourridié (*Armillaria*), avec amélioration du drainage. On y voit :
  - une allée bordée d'un côté de cycadales mexicaines, de l'autre de *Cycas* ;
  - un vieux *Dioon spinulosum*, « favori » de Ganna Walska ;
  - un espace entouré de *Macrozamia*.
- **Lettre de l'automne 2012** [L3] :
  - graines d'*E. heenanii* obtenues par pollinisation manuelle en mars 2011, « première fois aux États-Unis » selon le collectionneur cité ;
  - rénovations en 1999-2003 (sol, drainage) et en 2011.
- **BGCI** [B1] : 115 espèces, dont *Microcycas calocoma*.

#### San Diego Botanic Garden (Encinitas, anciennement Quail Botanical Gardens) — plein air

- **Pages du jardin** [S1, S2] : cycadales dans l'African Garden (« sur une crête de grès »), le Mexican Garden (« cycadales préhistoriques ») et le Walled Garden. Aucune espèce nommée.
- **BGCI** [B1] : **137 espèces**.

#### San Diego Zoo (Balboa Park) — emplacement non précisé

- **Plant Collections Network** (2015) [M4] : 82 taxons dans le texte, 111 dans l'en-tête de la fiche ; « l'une des meilleures collections de cycadales du monde ».
- **BGCI** [B1] : 118 espèces ; le Safari Park d'Escondido en déclare 24 autres entrées.

#### Missouri Botanical Garden (Saint-Louis) — serre

- **Deloso et al. 2025** [MO1] :
  - **49 taxons, 9 des 10 genres** en 2025 ;
  - la plupart dans le **Climatron** (serre en dôme ouverte en 1960), quelques-uns en pots dans la Linnean House (1882) ;
  - deux ***Dioon edule*** reçus de la commission mexicaine à l'Exposition universelle de **1904**, plantés dans le Climatron le 21/06/1966, encore vivants. Ils viendraient de Chavarrillo (Veracruz) d'après la forme des folioles. Pollinisation manuelle le 28/09/2022, graines viables récoltées le 17/01/2024 ;
  - un ***Encephalartos horridus*** et un ***Dioon spinulosum*** femelle donnés en 1918 par un collectionneur privé de Saint-Louis ;
  - un ***Microcycas calocoma*** (accession 1987-1685), probablement issu des graines de Montgomery.
- **BGCI** [B1] : 42 espèces.

#### Naples Botanical Garden (Floride) — plein air

- **Article du jardin**, paru dans le magazine *Cultivate* à l'automne 2021 [N1] :
  - don d'environ 75 cycadales d'une collection privée de Golden Gate Estates, surtout du Mexique et d'Afrique, dont ***Dioon merolae*** récolté avec permis au début des années 1980 ;
  - selon le donateur, Naples est l'un des rares jardins américains à pouvoir présenter des cycadales « en plein air plutôt qu'en serre » ;
  - une légende de photo mentionne un ***Encephalartos woodii*** « don de Fairchild, octobre 2022 », ajout postérieur à la parution de 2021.
- **BGCI** [B1] : 92 espèces.

#### University of California Botanical Garden at Berkeley (repère complémentaire)

- **Plant Collections Network** (2015) [M4] :
  - près de 650 accessions de « juste plus de 100 espèces », 10 genres, beaucoup issues de saisies douanières ;
  - le climat de la baie est « idéal pour beaucoup d'*Encephalartos* » et « marginal » pour les *Dioon* et *Ceratozamia* ;
  - *Microcycas*, *Bowenia*, *Stangeria*, *Cycas multipinnata* et *C. micholitzii* y exigent la serre.
- Deloso et al. 2025 [MO1] : un lot d'*Encephalartos hirsutus* braconnés, saisis par l'USFWS, y est conservé.
- **BGCI** [B1] : 106 espèces.

#### Autres jardins américains (BGCI [B1])

Botanical Garden de l'université d'Hawaï à Hilo (135 entrées), National Tropical Botanical Garden (101), Honolulu (97), Descanso (86), Selby (85), New York Botanical Garden (59), Atlanta (57), Los Angeles County Arboretum (47), United States Botanic Garden (36), Longwood (27), etc. Ils sont décomptés en « +N » dans le tableau.

### 2.3 Australie

#### Royal Botanic Garden Sydney — massifs numérotés (plein air probable, non précisé par la source)

- **Garden Explorer du jardin** [SY1], dernière mise à jour 01/10/2026 : **143 espèces acceptées**, réparties ainsi :
  - 42 entrées *Cycas*, dont *C. armstrongii*, *C. cupida*, *C. desolata*, *C. micronesica* ;
  - 31 *Encephalartos*, dont deux hybrides *E. natalensis* × *woodii* ;
  - 31 *Macrozamia*, dont un « *Macrozamia* sp. Warialda » ;
  - 29 *Zamia*, 7 *Dioon*, 5 *Ceratozamia*, 3 *Bowenia* (dont *B. intermedia*), 2 *Lepidozamia*, *Microcycas calocoma* et *Stangeria eriopus*.
- **Emplacements** : chaque plante a un numéro de massif (ex. *Macrozamia conferta*, massif 102i, origine sauvage ; *Cycas edentata*, massif 102j).
- **Pages du jardin** (botanicgardens.org.au, 403 ; extraits seulement) [SY3] : bosquet de *Macrozamia moorei* dans le Bicentenary Garden ; Southern Africa Garden, ouvert en février 2018, avec « une collection de cycadales rares ».
- **BGCI** [B1] : 143 espèces.
- *Bowenia intermedia* ne figure qu'au Garden Explorer, pas dans BGCI. Inversement, *Cycas armstrongii* figure dans les deux.

#### Australian Botanic Garden Mount Annan (même établissement)

- **Garden Explorer** [SY2], mis à jour le 15/10/2026 : **29 espèces**, uniquement australiennes : 19 *Macrozamia*, 7 *Cycas* (dont *C. cupida* et *C. desolata*), *Bowenia serrulata*, *B. spectabilis* et *Lepidozamia peroffskyana*.

#### Brisbane Botanic Gardens Mount Coot-tha — emplacement non précisé (sauf la grande cycadale de 2015)

- **BGCI** [B1] : **38 espèces**, dont 14 *Encephalartos* (*E. concinnus*, *E. equatorialis*, *E. gratus*, *E. hildebrandtii*, *E. inopinus*, *E. ituriensis*, *E. kisambo*, *E. laurentianus*, *E. manikensis*, *E. munchii*, *E. natalensis*, *E. nubimontanus*, *E. sclavoi*, *E. whitelockii* : liste complète dans le tableau).
- **Extension de 2015** : une cycadale de 6,5 m et 2 t, estimée à 250 ans, venue d'Injune (sud-ouest du Queensland), plantée lors de l'extension. Source : résumé de communiqués du conseil municipal de Brisbane (janvier et mai 2015) sur un site régional de jardinage [BR1]. L'espèce n'est pas nommée : ne pas la deviner.

#### Royal Botanic Gardens Victoria (Melbourne et Cranbourne) — plein air surtout

- **Recensement en ligne** [MV1] (fichiers « plant list » des familles Zamiaceae, Cycadaceae et Stangeriaceae, téléchargés le 19/10/2026) : **450 plantes, 54 espèces acceptées**.
- **À Melbourne Gardens**, les plantes sont dans des massifs du jardin (« Cycad Collection », « Rockery Bed », « William Tell Bed », « African Tunnel Bed », « Fern Gully », etc.). Seuls la « Cycad House » et la « Tropical House – West End » sont des serres d'après leur nom ; ils ne contiennent que *Ceratozamia norstogii* (Cycad House, plus 3 pieds dans un massif extérieur), *C. mexicana* et *Dioon rzedowskii* (Tropical House).
- **En massifs extérieurs à Melbourne** :
  - *Encephalartos woodii* (4 plantes : African Tunnel Bed, Jacaranda Bed, William Tell Bed) ;
  - *E. altensteinii* (13 plantes, 12 massifs) ;
  - *E. aemulans*, *E. arenarius*, *E. cerinus*, *E. concinnus*, *E. cycadifolius*, *E. ferox*, *E. friderici-guilielmi*, *E. horridus*, *E. ituriensis*, *E. kisambo*, *E. lehmannii*, *E. longifolius*, *E. middelburgensis*, *E. pterogonus*, *E. sclavoi*, *E. tegulaneus*, *E. transvenosus*, *E. trispinosus*, *E. villosus*, *E. whitelockii* ;
  - *Cycas revoluta*, *C. panzhihuaensis*, *C. szechuanensis*, *C. thouarsii* ;
  - *Dioon califanoi*, *D. edule*, *D. spinulosum* ;
  - *Stangeria eriopus* (4 plantes, African Tunnel Bed) ;
  - *Zamia furfuracea*, *Z. pumila* ;
  - *Bowenia serrulata*, *B. spectabilis* ;
  - de nombreux *Macrozamia* et *Lepidozamia*.
- **À Cranbourne** (Australian Garden) : seulement des espèces australiennes (14 espèces, dont 86 *Macrozamia communis* dans le « Gum Garden »).
- **Date de plantation** : renseignée pour très peu de plantes (ex. *Cycas media*, Cranbourne, 19/12/2012).
- **BGCI** [B1] : 67 espèces pour Melbourne Gardens ; certaines entrées BGCI (*E. ghellinckii*, *E. lanatus*, etc.) n'apparaissent pas dans le recensement actuel.

#### Australian National Botanic Gardens (Canberra)

- **Communiqué du 12/02/2004** [CB1] : 17 grandes cycadales et palmiers, sauvés d'un défrichement routier au Queensland, plantés au jardin. Espèces citées : *Macrozamia moorei*, « *Cycas communis* » (nom tel quel, inexistant : probablement *Macrozamia communis*, non vérifiable) et *Cycas media*.
- **BGCI** [B1] : **32 espèces**, presque toutes australiennes (20 *Macrozamia*, 8 *Cycas*, 2 *Bowenia*, 2 *Lepidozamia*), dont *Macrozamia platyrhachis* et *Cycas arnhemica*.
- **Recherche en ligne** de la collection (formulaire « Find a plant ») : le moteur `/cgi-bin/vic` répond 404 [CB2].
- **Plein air ou serre** : non documenté pour les cycadales (le jardin a des serres et une pépinière). Canberra est un climat à gelées : ne rien déduire sans source.

#### Cairns Botanic Gardens (ex-Flecker)

- **BGCI** [B1] : **77 espèces**, dont 29 *Zamia*, *Cycas multipinnata*, *C. micholitzii*, *C. papuana*, *Bowenia serrulata* et *B. spectabilis*.
- La page du conseil de Cairns sur les secteurs du jardin est en 403. Selon son extrait de recherche [CN1], la serre Watkins Munro Martin Conservatory abrite notamment des cycadales.

#### George Brown Darwin Botanic Gardens

- **Tourism NT** [DW1] : un « cycad garden » de plantes « que mangeaient les dinosaures ».
- Selon un site touristique régional aujourd'hui en 404 (extrait seulement) [DW2], « la seule collection complète des cycadales du Territoire du Nord ». Affirmation touristique, invérifiable.
- Le jardin n'est pas dans BGCI ; **aucune liste d'espèces trouvée**.

#### Rockhampton Botanic Gardens

- **Aucune source** ne nomme de cycadale.
- Une page de PACSOA sur l'histoire du jardin et ses palmiers est signalée par un site régional [BR1], mais introuvable.
- Le registre du patrimoine du Queensland (extrait) et la biographie d'un ancien conservateur (1902-1931), qui a aidé le spécialiste des cycadales C. J. Chamberlain, ne citent aucune plante de la collection.

#### Autres jardins australiens (BGCI [B1])

- **Adelaide** (Botanic Garden and State Herbarium of South Australia) : 76 espèces, dont 29 *Encephalartos*.
- **James Cook University** (Townsville) : 46 espèces, dont *Cycas candida*, *C. terryana*, *C. tuckeri*, *C. yorkiana* et *E. woodii*.
- Kings Park (Perth), Hunter Region, Noosa, Mackay, Melbourne University System Garden, etc. : décomptés en « +N » dans le tableau.

## 3. Tableau espèce → jardins

Abréviations des jardins :

- **Royaume-Uni** : KEW Kew ; TRE Tresco ; VEN Ventnor ; RBGE Édimbourg ; LOG Logan ; CAM Cambridge ; OXF Oxford ; CPG Chelsea Physic Garden ; EDEN Eden Project ; GLA Glasgow ; WIS RHS Wisley ; PAI Paignton Zoo ; NBGW National Botanic Garden of Wales ; BIR Birmingham ; BRI Bristol ; TRB Treborth.
- **États-Unis** : MBC Montgomery ; FTG Fairchild ; HUN Huntington ; LOT Lotusland ; SDBG San Diego Botanic Garden ; SDZ San Diego Zoo ; MOBOT Missouri Botanical Garden ; NBG Naples Botanical Garden ; UCBG UC Berkeley.
- **Australie** : RBGS Royal Botanic Garden Sydney ; MTA Mount Annan ; BBG Brisbane Mount Coot-tha ; RBGV Royal Botanic Gardens Victoria (Melbourne et Cranbourne) ; ANBG Canberra ; CNS Cairns ; ADL Adelaide ; JCU James Cook University, Townsville.

Lecture du tableau :

- un code seul signifie que l'espèce n'est attestée que par **BGCI** [B1] ;
- entre crochets : **b** = BGCI, **c** = catalogue en ligne du jardin (MBC [M1], FTG [F2], RBGS [SY1], MTA [SY2], RBGV [MV1], CAM [C1], RBGE [E4], CPG [P1]), **p** = page ou publication citée en partie 2 ;
- **+N** = N autres jardins du pays qui déclarent l'espèce dans BGCI.

Ce tableau ne dit **pas** si la plante est en serre ou en plein air : voir la partie 2.

Il couvre 300 espèces acceptées. Il exclut hybrides, cultivars, taxons non décrits et noms non résolus (voir partie 6).

| Nom accepté (WLoC) | Royaume-Uni | États-Unis | Australie |
|---|---|---|---|
| *Bowenia serrulata* | RBGE | MBC[bc], FTG, HUN, SDBG, SDZ, UCBG, +5 | RBGS[bc], MTA[bc], RBGV[bc], ANBG, CNS, ADL, JCU, +5 |
| *Bowenia spectabilis* | RBGE, BRI, TRB | MBC[bc], FTG[bc], SDBG, +10 | RBGS[bc], MTA[bc], RBGV[bc], ANBG, CNS, JCU, +5 |
| *Ceratozamia aurantiaca* | — | FTG[c] | JCU |
| *Ceratozamia becerrae* | — | MBC[bc], HUN | — |
| *Ceratozamia brevifrons* | — | MBC[bc], FTG[c], HUN, LOT, SDZ, UCBG | — |
| *Ceratozamia chamberlainii* | — | MBC[bc], HUN, UCBG | — |
| *Ceratozamia chimalapensis* | — | MBC[bc], +1 | — |
| *Ceratozamia decumbens* | — | MBC[bc], FTG[bc], HUN | — |
| *Ceratozamia delucana* | — | SDBG | — |
| *Ceratozamia euryphyllidia* | — | FTG[bc], HUN, SDBG | — |
| *Ceratozamia fuscoviridis* | — | MBC[bc], FTG[c], HUN, LOT[p], NBG, UCBG | — |
| *Ceratozamia hildae* | KEW, RBGE, GLA, PAI, NBGW, BIR | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +29 | RBGS[bc], RBGV, CNS, ADL, JCU, +1 |
| *Ceratozamia hondurensis* | — | MBC[bc], FTG[c], HUN, +1 | — |
| *Ceratozamia kuesteriana* | KEW, RBGE[bc], OXF, GLA | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, +15 | RBGS[bc], RBGV, CNS, ADL |
| *Ceratozamia latifolia* | KEW, CAM[c], OXF, BRI | MBC[bc], FTG[bc], HUN, LOT[bp], SDBG, SDZ, UCBG, +21 | RBGS[bc], RBGV, CNS, ADL, +3 |
| *Ceratozamia matudae* | — | HUN, +1 | — |
| *Ceratozamia mexicana* | KEW, OXF, WIS, PAI, BIR, BRI, TRB | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +20 | BBG, RBGV[bc], CNS, ADL, +1 |
| *Ceratozamia miqueliana* | KEW | MBC[bc], FTG[bc], HUN, LOT, MOBOT, +4 | JCU |
| *Ceratozamia mirandae* | — | MBC[bc], FTG[c], HUN, SDBG, UCBG, +3 | — |
| *Ceratozamia morettii* | — | MBC[bc], HUN, LOT | — |
| *Ceratozamia norstogii* | — | MBC[bc], FTG[bc], HUN, LOT, SDZ, +6 | RBGS[bc], RBGV[bc], CNS, ADL |
| *Ceratozamia osbornei* | — | FTG[c], +1 | — |
| *Ceratozamia robusta* | KEW, RBGE[bc], OXF | MBC[bc], FTG[bc], HUN, LOT, SDZ, NBG, +10 | RBGS[bc], RBGV[bc], CNS, ADL |
| *Ceratozamia sabatoi* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG | — |
| *Ceratozamia subroseophylla* | — | MBC[bc], FTG[c], HUN, NBG | JCU |
| *Ceratozamia tenuis* | — | MBC[bc], FTG, HUN, UCBG, +1 | — |
| *Ceratozamia vovidesii* | — | MBC[bc], HUN, +1 | — |
| *Ceratozamia whitelockiana* | — | MBC[c], HUN, LOT | — |
| *Ceratozamia zaragozae* | — | MBC[bc], HUN, LOT, SDZ, MOBOT, UCBG | — |
| *Ceratozamia zoquorum* | — | MBC[bc], HUN, LOT | — |
| *Cycas angulata* | — | MBC[bc], FTG, SDBG, +1 | ADL, +2 |
| *Cycas apoa* | GLA | SDBG, +1 | CNS |
| *Cycas arenicola* | — | MBC, +2 | — |
| *Cycas armstrongii* | — | MBC[bc], UCBG, +3 | RBGS[bc], MTA |
| *Cycas arnhemica* | — | — | ANBG |
| *Cycas balansae* | — | MBC[bc], +1 | RBGS[bc] |
| *Cycas basaltica* | — | — | RBGS[bc] |
| *Cycas beddomei* | — | MBC[c], HUN | — |
| *Cycas bifida* | — | MBC[bc], FTG[c], HUN, UCBG, +2 | JCU |
| *Cycas bougainvilleana* | KEW | MBC[bc] | CNS |
| *Cycas brachycantha* | — | SDBG | — |
| *Cycas brunnea* | — | NBG | — |
| *Cycas cairnsiana* | KEW | MBC[bcp], HUN, NBG, UCBG, +5 | RBGS[bc], MTA[bc], BBG, ANBG, ADL, JCU, +2 |
| *Cycas calcicola* | — | MBC[bc], +1 | — |
| *Cycas campestris* | — | MBC[bc] | CNS |
| *Cycas canalis* | — | MBC[bc] | — |
| *Cycas candida* | — | SDBG | JCU |
| *Cycas chamaoensis* | — | MBC[bc], +1 | — |
| *Cycas changjiangensis* | — | MBC[bc], MOBOT | RBGS[bc] |
| *Cycas circinalis* | RBGE, GLA, WIS, BRI, TRB, +1 | MBC[bc], HUN, LOT, SDBG, SDZ, +34 | RBGS[bc], BBG, ANBG, CNS, ADL, +1 |
| *Cycas clivicola* | PAI | MBC[bc], HUN, +2 | RBGS[bc] |
| *Cycas condaoensis* | — | MBC[bc] | — |
| *Cycas conferta* | — | MBC[bc], UCBG | — |
| *Cycas couttsiana* | — | MBC[bc], NBG, +1 | RBGS[bc], ANBG |
| *Cycas cupida* | — | MBC[bcp], SDBG, SDZ, NBG, +1 | RBGS[bc], MTA[bc], JCU |
| *Cycas curranii* | — | MBC[bc], SDBG, SDZ, +1 | RBGS[bc] |
| *Cycas debaoensis* | KEW, RBGE, WIS | MBC[bc], FTG[c], HUN, LOT, SDBG, SDZ, +14 | RBGS[bc], CNS, JCU, +1 |
| *Cycas desolata* | — | MBC[cp], SDZ, NBG | RBGS[bc], MTA[bc], JCU |
| *Cycas diannanensis* | GLA | MBC[bc], SDBG, SDZ, MOBOT, +2 | JCU |
| *Cycas divyadarshanii* | — | MBC[bc] | — |
| *Cycas dolichophylla* | — | +1 | RBGS[bc], CNS |
| *Cycas edentata* | — | MBC[bc], SDBG, SDZ, +3 | RBGS[bc], CNS |
| *Cycas elongata* | — | — | RBGS[bc] |
| *Cycas ferruginea* | — | MBC[bc], MOBOT, NBG, +3 | CNS |
| *Cycas furfuracea* | — | — | +2 |
| *Cycas guizhouensis* | — | MBC[bc], FTG, HUN, LOT, SDBG, SDZ, NBG, +7 | RBGS[bc], BBG |
| *Cycas hoabinhensis* | — | SDBG | RBGS[bc] |
| *Cycas hongheensis* | — | MBC[bc] | — |
| *Cycas lacrimans* | — | MBC[c] | — |
| *Cycas laotica* | — | MBC[bc] | — |
| *Cycas lindstromii* | — | MBC[bc], MOBOT, +1 | — |
| *Cycas maconochiei* | — | MBC[bc], SDBG, SDZ, +2 | — |
| *Cycas macrocarpa* | — | MBC[bc], +1 | RBGS[bc], +1 |
| *Cycas media* | KEW, OXF, +1 | MBC[bc], FTG[bc], HUN, LOT, SDZ, MOBOT, UCBG, +9 | RBGS[bc], MTA[bc], BBG, RBGV[bc], ANBG[bp], CNS, ADL, JCU, +5 |
| *Cycas megacarpa* | WIS | SDBG, UCBG, +1 | RBGS[bc], MTA[bc], ADL, JCU |
| *Cycas micholitzii* | RBGE, NBGW | MBC[bc], FTG[bc], HUN, SDBG, MOBOT, NBG, +9 | CNS |
| *Cycas micronesica* | — | MBC[bc], SDZ, MOBOT, NBG, +5 | RBGS[bc] |
| *Cycas mindanaensis* | — | MBC[c] | — |
| *Cycas multifrondis* | — | FTG[c], SDBG, NBG | — |
| *Cycas multipinnata* | — | HUN, UCBG, +4 | CNS, +1 |
| *Cycas nathorstii* | — | MBC[bc] | ADL |
| *Cycas nitida* | — | +1 | — |
| *Cycas nongnoochiae* | — | MBC, +2 | — |
| *Cycas ophiolitica* | KEW | MBC[bc], FTG[bc], SDBG, UCBG, +3 | RBGS[bc], MTA[bc], ANBG, ADL, +1 |
| *Cycas pachypoda* | — | MBC[bc] | — |
| *Cycas panzhihuaensis* | RBGE, WIS | MBC[bc], FTG, HUN, LOT, SDBG, SDZ, MOBOT, +18 | RBGS[bc], RBGV[bc], ADL |
| *Cycas papuana* | — | HUN, +1 | CNS |
| *Cycas pectinata* | CAM[bc], OXF, WIS, NBGW | HUN, SDZ, UCBG, +5 | — |
| *Cycas petraea* | GLA, NBGW | MBC[bc], HUN, SDBG, SDZ, NBG, +3 | BBG, +1 |
| *Cycas platyphylla* | — | MBC[bcp], HUN, NBG, UCBG | RBGS[bc], MTA[bc], BBG, ANBG, JCU |
| *Cycas pranburiensis* | — | SDBG, +1 | — |
| *Cycas pruinosa* | — | MBC[bc] | +1 |
| *Cycas revoluta* | KEW, VEN[p], RBGE, OXF, CPG[bc], EDEN, GLA, WIS, PAI, NBGW, BIR, BRI, TRB, +5 | MBC[bc], HUN, LOT[bp], SDBG, SDZ, MOBOT, NBG, UCBG, +65 | RBGS[bc], BBG, RBGV[bc], CNS, ADL, JCU, +11 |
| *Cycas riuminiana* | — | MBC[bc], FTG[bc], HUN, LOT, +1 | RBGS[bc], CNS |
| *Cycas rumphii* | KEW, RBGE, CAM[bc], OXF, GLA, WIS, PAI, TRB, +1 | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +13 | RBGS[bc], RBGV, ANBG, ADL, +1 |
| *Cycas sancti-lasallei* | — | MBC[c] | — |
| *Cycas schumanniana* | CAM[bc], OXF, NBGW | MBC[bc], LOT, +2 | — |
| *Cycas seemannii* | KEW, RBGE, GLA | MBC[bc], HUN, LOT, SDZ, UCBG, +7 | RBGS[bc], BBG, +3 |
| *Cycas segmentifida* | — | MBC[bc] | RBGS[bc] |
| *Cycas semota* | — | MBC[bc] | JCU |
| *Cycas sexseminifera* | GLA | MBC[bc], HUN, SDBG, NBG, +3 | RBGS[bc], CNS |
| *Cycas siamensis* | KEW, GLA, TRB | MBC[bc], SDBG, SDZ, NBG, UCBG, +8 | RBGS[bc] |
| *Cycas silvestris* | — | — | RBGS[bc] |
| *Cycas simplicipinna* | — | MBC[bc], FTG, SDBG | — |
| *Cycas sphaerica* | — | MBC[bc] | — |
| *Cycas szechuanensis* | — | MBC[bc], SDBG, SDZ, +2 | RBGS[bc], RBGV[bc] |
| *Cycas taitungensis* | KEW | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +20 | RBGS[bc], ADL, JCU, +1 |
| *Cycas taiwaniana* | OXF, BIR | MBC[bc], FTG, HUN, LOT, SDBG, SDZ, +5 | RBGS[bc], BBG, CNS, +2 |
| *Cycas tanqingii* | — | +1 | — |
| *Cycas tansachana* | NBGW | MBC[bc], HUN, SDBG, SDZ, NBG, +2 | ADL |
| *Cycas terryana* | — | — | JCU |
| *Cycas thouarsii* | KEW, GLA, +1 | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, UCBG, +10 | RBGS[bc], BBG, RBGV[bc], CNS, ADL, JCU |
| *Cycas tropophylla* | — | MBC[bc], HUN, +1 | RBGS[bc], CNS |
| *Cycas tuckeri* | — | MBC[bc] | JCU |
| *Cycas wadei* | GLA | MBC[bc], FTG, SDBG, SDZ, +4 | RBGS[bc], CNS, ADL |
| *Cycas xipholepis* | — | MBC[bc] | RBGS[bc] |
| *Cycas yorkiana* | — | MBC[bc] | JCU |
| *Cycas zeylanica* | — | MBC[bc], NBG | CNS |
| *Dioon angustifolium* | BIR | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +8 | BBG, CNS |
| *Dioon argenteum* | — | MBC[bc], FTG[bc], HUN, LOT, SDZ, NBG, UCBG, +5 | — |
| *Dioon califanoi* | RBGE, WIS | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +12 | RBGS[bc], BBG, RBGV[bc], CNS, ADL |
| *Dioon caputoi* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, +2 | — |
| *Dioon edule* | KEW, RBGE[bc], CAM[bc], GLA, WIS, PAI, BRI, +1 | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT[bp], NBG, +41 | RBGS[bc], BBG, RBGV[bc], ADL, +2 |
| *Dioon holmgrenii* | RBGE | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, +7 | RBGV, CNS |
| *Dioon mejiae* | KEW, RBGE[bc], GLA | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, +20 | RBGS[bc], RBGV, CNS, ADL, JCU, +2 |
| *Dioon merolae* | KEW, NBGW | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG[bp], UCBG, +10 | RBGV |
| *Dioon oaxacensis* | — | MBC[c], LOT[p], SDZ, +1 | RBGS[bc] |
| *Dioon planifolium* | — | MBC[bc], FTG[bc], HUN, LOT, SDZ, NBG, +1 | — |
| *Dioon purpusii* | KEW | MBC[bc], FTG[bc], HUN, LOT, SDZ, NBG, UCBG, +15 | RBGV |
| *Dioon rzedowskii* | KEW, RBGE, WIS | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, +5 | RBGS[bc], RBGV[bc] |
| *Dioon salas-moralesiae* | — | MBC[bc], NBG | — |
| *Dioon sonorense* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, +4 | — |
| *Dioon spinulosum* | KEW, RBGE[bc], CPG, EDEN, GLA, WIS, PAI, NBGW, BIR, TRB, +1 | MBC[bc], FTG[bc], HUN, LOT[bp], SDBG, SDZ, MOBOT[bp], NBG, UCBG, +35 | RBGS[bc], BBG, RBGV[bc], CNS, ADL, JCU, +3 |
| *Dioon stevensonii* | — | MBC[bc], FTG[bc], LOT | — |
| *Dioon tomasellii* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, UCBG, +2 | RBGS[bc] |
| *Dioon vovidesii* | — | MBC[bc], FTG[bc], NBG, UCBG | — |
| *Encephalartos aemulans* | — | MBC[bc], FTG[bc], LOT, SDBG, SDZ, +4 | RBGV[bc], CNS |
| *Encephalartos afer* | RBGE, GLA | HUN, LOT, SDZ, NBG, UCBG, +2 | RBGV |
| *Encephalartos altensteinii* | KEW[bp], RBGE, GLA, WIS, BIR, +2 | MBC[bc], FTG[c], HUN, LOT, SDBG, SDZ, NBG, UCBG, +17 | RBGV[bc], ADL, JCU, +1 |
| *Encephalartos aplanatus* | — | HUN, LOT, SDBG | — |
| *Encephalartos arenarius* | KEW, GLA | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, UCBG, +14 | RBGS[bc], RBGV[bc], ADL, +1 |
| *Encephalartos barteri* | KEW, BRI, TRB | MBC[bc], FTG[bc], SDZ, +3 | CNS |
| *Encephalartos bubalinus* | KEW | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +3 | RBGS[bc] |
| *Encephalartos cerinus* | KEW | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, +5 | RBGS[bc], RBGV[bc], JCU |
| *Encephalartos chimanimaniensis* | — | HUN, SDBG, SDZ, +2 | — |
| *Encephalartos concinnus* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, UCBG, +5 | BBG, RBGV[bc], CNS, ADL |
| *Encephalartos cupidus* | — | MBC[bc], FTG[bc], HUN, LOT, SDZ, +3 | RBGS[bc] |
| *Encephalartos cycadifolius* | WIS | HUN, LOT, SDBG, SDZ, UCBG | RBGV[bc] |
| *Encephalartos delucanus* | — | MBC[bc] | — |
| *Encephalartos dolomiticus* | — | HUN, SDBG | RBGS[bc] |
| *Encephalartos dyerianus* | — | MBC[bc], HUN, SDBG, SDZ, UCBG, +3 | RBGS[bc] |
| *Encephalartos equatorialis* | — | FTG[c] | RBGS[bc], BBG |
| *Encephalartos eugene-maraisii* | — | MBC[bc], HUN, LOT, SDBG, SDZ, UCBG, +6 | RBGS[bc], ADL |
| *Encephalartos ferox* | KEW, RBGE, OXF, CPG, GLA, WIS, PAI, NBGW, BIR, +2 | MBC[bc], FTG[bc], HUN, LOT[bp], SDBG, SDZ, MOBOT, NBG, UCBG, +31 | RBGS[bc], RBGV[bc], CNS, ADL, JCU, +2 |
| *Encephalartos friderici-guilielmi* | — | HUN, LOT[bp], SDBG, SDZ, MOBOT, UCBG, +8 | RBGV[bc], ADL |
| *Encephalartos ghellinckii* | CPG | HUN, UCBG, +1 | RBGV, ADL |
| *Encephalartos gratus* | CAM[bc] | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +16 | BBG, RBGV, ADL, JCU, +3 |
| *Encephalartos heenanii* | — | MBC[bc], HUN, LOT[bp], UCBG, +2 | — |
| *Encephalartos hildebrandtii* | KEW, RBGE, +1 | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +12 | RBGS[bc], BBG, RBGV, ADL, JCU |
| *Encephalartos hirsutus* | — | HUN, UCBG | — |
| *Encephalartos horridus* | KEW, OXF, EDEN, WIS, +1 | MBC[bc], FTG[bc], HUN, LOT[bp], SDBG, SDZ, MOBOT[bp], NBG, UCBG, +19 | RBGS[bc], RBGV[bc], ADL, +1 |
| *Encephalartos humilis* | — | HUN, SDBG, UCBG | — |
| *Encephalartos inopinus* | — | MBC[bc], FTG[bc], HUN, LOT, UCBG, +4 | RBGS[bc], BBG |
| *Encephalartos ituriensis* | KEW | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, +6 | RBGS[bc], BBG, RBGV[bc], CNS, ADL, JCU |
| *Encephalartos kisambo* | KEW | FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +6 | BBG, RBGV[bc], ADL, JCU |
| *Encephalartos laevifolius* | KEW | HUN, UCBG, +2 | — |
| *Encephalartos lanatus* | — | MBC[bc], HUN, LOT[bp], SDZ, MOBOT, UCBG, +3 | RBGV, ADL |
| *Encephalartos latifrons* | KEW | MBC[bc], HUN, LOT[bp], SDBG, SDZ, UCBG, +2 | RBGS[bc], ADL |
| *Encephalartos laurentianus* | KEW, CAM[bc] | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, UCBG, +6 | RBGS[bc], BBG, ADL, JCU |
| *Encephalartos lebomboensis* | KEW, RBGE, NBGW | MBC[bc], HUN, LOT, SDBG, SDZ, UCBG, +7 | RBGS[bc], RBGV, ADL, JCU, +1 |
| *Encephalartos lehmannii* | KEW, RBGE, CAM[bc], GLA, WIS, PAI | MBC[bc], HUN, LOT[bp], SDBG, SDZ, NBG, UCBG, +13 | RBGS[bc], RBGV[c], ADL, JCU, +1 |
| *Encephalartos longifolius* | KEW | MBC[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +10 | RBGS[bc], RBGV[bc], CNS, ADL |
| *Encephalartos macrostrobilus* | — | MBC[bc], SDBG, SDZ, +1 | — |
| *Encephalartos manikensis* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, +9 | BBG, RBGV, CNS, ADL, JCU, +1 |
| *Encephalartos middelburgensis* | — | HUN, SDZ, UCBG, +4 | RBGS[bc], RBGV[bc] |
| *Encephalartos msinganus* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, MOBOT, NBG, +1 | ADL, +1 |
| *Encephalartos munchii* | — | FTG[bc], HUN, LOT, SDBG, SDZ, +5 | RBGS[bc], BBG, ADL, +1 |
| *Encephalartos natalensis* | KEW, TRE[p], RBGE, LOG, CAM[bc], GLA, WIS, PAI, BIR, +1 | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +14 | RBGS[bc], BBG, CNS, ADL, JCU |
| *Encephalartos ngoyanus* | — | HUN, LOT, +2 | — |
| *Encephalartos nubimontanus* | — | FTG[bc], HUN, LOT, SDBG, SDZ, +4 | RBGS[bc], BBG, JCU |
| *Encephalartos paucidentatus* | KEW | FTG[bc], HUN, LOT, SDBG, SDZ, +5 | RBGV, +1 |
| *Encephalartos princeps* | KEW, CAM[bc] | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +8 | RBGS[bc], ADL |
| *Encephalartos pterogonus* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, +1 | RBGS[bc], RBGV[bc] |
| *Encephalartos schaijesii* | — | UCBG | — |
| *Encephalartos schmitzii* | — | MBC[bc], UCBG | RBGV |
| *Encephalartos sclavoi* | KEW, GLA | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, UCBG, +5 | RBGS[bc], BBG, RBGV[bc], CNS, ADL, +1 |
| *Encephalartos senticosus* | KEW, NBGW | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +6 | ADL, JCU |
| *Encephalartos septentrionalis* | — | +1 | RBGV, ADL, +1 |
| *Encephalartos tegulaneus* | — | MBC[bc], FTG[bc], HUN, SDBG, SDZ, UCBG, +5 | RBGS[bc], RBGV[bc] |
| *Encephalartos transvenosus* | KEW, RBGE, EDEN | MBC[bc], FTG, HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +10 | RBGV[bc], ADL |
| *Encephalartos trispinosus* | OXF | MBC[bc], FTG[c], HUN, LOT[p], SDZ, NBG, UCBG, +8 | RBGS[bc], RBGV[c] |
| *Encephalartos turneri* | — | MBC[bc], HUN, SDBG, SDZ, UCBG, +1 | RBGV |
| *Encephalartos umbeluziensis* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, +3 | RBGV |
| *Encephalartos villosus* | KEW, RBGE, GLA, WIS | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +13 | RBGS[bc], RBGV[bc], CNS, ADL, +1 |
| *Encephalartos whitelockii* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, UCBG, +8 | RBGS[bc], BBG, RBGV[bc], CNS, ADL, JCU, +1 |
| *Encephalartos woodii* | KEW[bp] | MBC[c], FTG[bc], HUN, LOT[bp], SDBG, SDZ, NBG[bp], +5 | RBGV[bc], JCU |
| *Lepidozamia hopei* | KEW, RBGE[bc] | MBC[bc], FTG[bc], HUN, SDZ, MOBOT, NBG, UCBG, +13 | RBGS[bc], BBG, RBGV[bc], ANBG, CNS, ADL, JCU, +8 |
| *Lepidozamia peroffskyana* | KEW, RBGE[bc], GLA, WIS, BIR | MBC[bc], HUN, LOT[bp], SDBG, SDZ, NBG, UCBG, +18 | RBGS[bc], MTA[bc], BBG, RBGV[bc], ANBG, CNS, ADL, JCU, +8 |
| *Macrozamia cardiacensis* | — | — | RBGS[bc] |
| *Macrozamia communis* | KEW, TRE, RBGE[bc], CAM[bc], GLA, PAI, TRB, +1 | MBC[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +16 | RBGS[bc], MTA[bc], RBGV[bc], ANBG, ADL, JCU, +7 |
| *Macrozamia concinna* | — | UCBG, +1 | — |
| *Macrozamia conferta* | — | — | RBGS[bc], MTA[bc] |
| *Macrozamia crassifolia* | WIS | — | — |
| *Macrozamia diplomera* | KEW | MBC[c], HUN, LOT, +1 | RBGS[bc], MTA[bc], RBGV[bc], ANBG, ADL |
| *Macrozamia douglasii* | KEW | MBC[bc], SDBG | RBGS[bc], ADL, +1 |
| *Macrozamia dyeri* | +1 | FTG, LOT | RBGS[bc], MTA[bc], +1 |
| *Macrozamia elegans* | — | HUN | RBGS[bc] |
| *Macrozamia fawcettii* | — | MBC[bc], LOT, SDBG, MOBOT, UCBG, +5 | RBGS[bc], MTA, ANBG, ADL, +1 |
| *Macrozamia fearnsidei* | WIS | — | RBGS[bc], ANBG |
| *Macrozamia flexuosa* | — | MBC[bc], HUN, LOT, UCBG, +5 | RBGS[bc], MTA, ANBG, ADL |
| *Macrozamia fraseri* | +1 | HUN, SDZ | RBGS[bc], MTA[bc], ANBG, +1 |
| *Macrozamia glaucophylla* | — | MBC[bc], SDBG, UCBG, +1 | RBGS[bc], MTA[bc], ANBG |
| *Macrozamia heteromera* | — | LOT | MTA[bc], RBGV[c] |
| *Macrozamia humilis* | — | MBC[bc] | RBGS[bc], MTA |
| *Macrozamia johnsonii* | WIS | MBC, HUN, LOT, SDBG, SDZ, NBG, UCBG, +3 | RBGS[bc], MTA[bc], RBGV[bc], ANBG, ADL, +1 |
| *Macrozamia lomandroides* | — | HUN, +1 | RBGS[bc], RBGV[c], ANBG |
| *Macrozamia longispina* | — | MBC[bc], HUN, LOT, SDBG | +1 |
| *Macrozamia lucida* | WIS | MBC[bc], HUN, LOT, SDBG, UCBG, +2 | RBGS[bc], MTA[bc], BBG, RBGV[bc], ANBG, ADL |
| *Macrozamia macdonnellii* | KEW, GLA | MBC[bc], FTG[bc], HUN, LOT, SDBG, UCBG, +8 | MTA[bc], RBGV[c], ANBG, ADL, +1 |
| *Macrozamia machinii* | — | — | RBGS[bc] |
| *Macrozamia macleayi* | — | HUN, SDBG | +1 |
| *Macrozamia miquelii* | KEW, GLA, WIS, PAI | MBC[bc], FTG[bc], HUN, SDZ, UCBG, +8 | RBGS[bc], MTA[bc], RBGV[bc], ANBG, ADL, +1 |
| *Macrozamia montana* | NBGW | LOT, SDBG, SDZ | RBGS[bc], MTA[c], ANBG, ADL |
| *Macrozamia moorei* | KEW, RBGE[bc], CAM[bc], GLA, WIS | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +15 | RBGS[bc], MTA[bc], BBG, RBGV[bc], ANBG[bp], CNS, ADL, +5 |
| *Macrozamia mountperriensis* | — | HUN, SDBG, SDZ | RBGS[bc], BBG, RBGV[bc], ANBG, ADL, +2 |
| *Macrozamia parcifolia* | — | LOT, +1 | RBGS[bc] |
| *Macrozamia pauli-guilielmi* | WIS | FTG[bc], HUN, SDZ, UCBG | RBGS[bc], RBGV[c], ADL, +1 |
| *Macrozamia platyrhachis* | — | MBC, +1 | ANBG, +1 |
| *Macrozamia plurinervia* | GLA | MBC[bc], NBG, UCBG, +1 | RBGS[bc], MTA[bc], ANBG, +1 |
| *Macrozamia polymorpha* | — | MBC[bc], UCBG, +1 | RBGS[bc], MTA[bc], ADL |
| *Macrozamia reducta* | — | MBC[bc], SDBG, NBG, +1 | RBGS[bc], MTA[bc], ANBG |
| *Macrozamia riedlei* | — | MBC, HUN, SDZ, +3 | RBGS[bc], RBGV[c], CNS, +1 |
| *Macrozamia secunda* | — | UCBG | MTA[bc], ANBG, +1 |
| *Macrozamia serpentina* | — | MBC[bc], NBG, +1 | RBGS[bc], +1 |
| *Macrozamia spiralis* | GLA, WIS, BRI, +1 | MBC[c], HUN, SDBG, +3 | RBGS[bc], MTA[bc], RBGV[bc], ANBG, +2 |
| *Macrozamia stenomera* | — | HUN, SDZ, UCBG | RBGS[bc], MTA[bc], ADL, +1 |
| *Microcycas calocoma* | KEW, BRI | MBC[bc], FTG[bc], HUN, LOT, SDZ, MOBOT[bp], NBG, UCBG, +11 | RBGS[bc] |
| *Stangeria eriopus* | KEW, RBGE[bc], CAM[bc], CPG, GLA, BRI, TRB, +1 | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +15 | RBGS[bc], RBGV[bc], ADL, +1 |
| *Zamia acuminata* | — | MBC[bc], FTG[bc], HUN, SDBG, +3 | RBGS[bc], CNS |
| *Zamia angustifolia* | — | MBC[bc], FTG[bc], HUN, SDBG, NBG, +6 | RBGS[bc], CNS |
| *Zamia boliviana* | — | MBC[bc], LOT | CNS |
| *Zamia cremnophila* | — | MBC[bc], MOBOT, +2 | — |
| *Zamia cunaria* | — | MBC[bc], +1 | CNS |
| *Zamia decumbens* | — | MBC[bc], FTG[bc], NBG | — |
| *Zamia dressleri* | — | MBC[bc], HUN, SDBG, +3 | — |
| *Zamia elegantissima* | — | MBC[bc], FTG[bc], HUN, +2 | — |
| *Zamia encephalartoides* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, +4 | RBGS[bc], CNS |
| *Zamia erosa* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +10 | RBGS[bc], CNS, ADL |
| *Zamia fairchildiana* | NBGW | MBC[bc], FTG[bc], HUN, LOT, UCBG, +8 | RBGS[bc], CNS |
| *Zamia fischeri* | GLA, WIS | MBC[c], FTG, HUN, LOT, SDBG, SDZ, +12 | RBGS[bc], BBG, CNS, ADL, +1 |
| *Zamia furfuracea* | CAM[bc], OXF, CPG, WIS, PAI, NBGW, BIR | MBC[bc], FTG[c], HUN, SDZ, NBG, UCBG, +24 | RBGS[bc], BBG, RBGV[c], JCU, +2 |
| *Zamia gentryi* | — | SDBG | — |
| *Zamia hamannii* | — | MBC[bc], SDBG, +2 | RBGS[bc] |
| *Zamia herrerae* | — | MBC[bc], FTG[bc], LOT, +3 | RBGS[bc], CNS |
| *Zamia imperialis* | — | MBC[bc], FTG[bc], HUN, +3 | — |
| *Zamia inermis* | GLA | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +6 | RBGS[bc] |
| *Zamia integrifolia* | KEW, RBGE[bc], GLA, +1 | MBC[bc], FTG[bc], HUN, LOT, SDBG, SDZ, NBG, UCBG, +35 | RBGS[bc], BBG, CNS, JCU, +2 |
| *Zamia ipetiensis* | — | MBC[bc], FTG[bc], +1 | CNS |
| *Zamia lacandona* | — | MBC[bc], HUN, LOT, +1 | — |
| *Zamia lecointei* | — | +1 | — |
| *Zamia lindenii* | — | MBC[bc], FTG[bc], HUN, LOT, UCBG, +8 | CNS |
| *Zamia loddigesii* | KEW | MBC[bc], FTG[bc], HUN, LOT, SDBG, NBG, UCBG, +10 | RBGS[bc], CNS, ADL, +2 |
| *Zamia lucayana* | — | MBC[bc], FTG[bc], HUN, NBG, +6 | — |
| *Zamia magnifica* | — | MBC[c] | — |
| *Zamia manicata* | — | FTG[bc], HUN | RBGS[bc] |
| *Zamia meermanii* | — | MBC[bc], FTG[c], SDBG, MOBOT, NBG, +3 | — |
| *Zamia melanorrhachis* | — | UCBG, +1 | — |
| *Zamia muricata* | KEW | MBC[bc], FTG[bc], LOT, SDZ, NBG, +6 | CNS |
| *Zamia nana* | — | MBC[bc], +1 | — |
| *Zamia nesophila* | — | MBC[bc], FTG[c], SDBG, NBG, +7 | RBGS[bc] |
| *Zamia neurophyllidia* | — | MBC[bc], FTG[bc], HUN, NBG, UCBG, +5 | CNS |
| *Zamia obliqua* | — | MBC[bc], FTG[bc], HUN, SDBG, NBG, +2 | — |
| *Zamia onan-reyesii* | — | MBC[bc], HUN, SDBG, +2 | RBGS[bc] |
| *Zamia oreillyi* | — | MBC[bc], +1 | — |
| *Zamia paucijuga* | — | MBC[bc], FTG[bc], NBG, UCBG, +3 | CNS |
| *Zamia poeppigiana* | KEW | NBG, +2 | RBGS[bc] |
| *Zamia portoricensis* | — | MBC[bc], FTG[bc], HUN, SDZ, MOBOT, NBG, UCBG, +10 | CNS |
| *Zamia prasina* | — | MBC[bc], FTG[bc], HUN, SDBG, NBG, +4 | CNS |
| *Zamia pseudomonticola* | KEW | MBC[bc], +2 | RBGS[bc], CNS |
| *Zamia pseudoparasitica* | — | MBC[bc], HUN, SDBG, MOBOT, NBG, +5 | CNS |
| *Zamia pumila* | EDEN, +1 | MBC[bc], HUN, LOT, SDBG, SDZ, MOBOT, NBG, UCBG, +31 | RBGS[bc], RBGV[bc], CNS, ADL |
| *Zamia purpurea* | — | MBC[bc], FTG[bc], SDZ, MOBOT, +2 | RBGS[bc], CNS |
| *Zamia pygmaea* | — | FTG[bc], HUN, SDBG, +4 | RBGV, CNS |
| *Zamia pyrophylla* | — | MBC[bc] | — |
| *Zamia restrepoi* | — | MBC[bc], HUN, UCBG | — |
| *Zamia roezlii* | — | MBC[bc], HUN, SDBG, MOBOT, NBG, +6 | RBGS[bc], CNS, +1 |
| *Zamia sandovalii* | — | MBC[bc], HUN, +1 | RBGS[bc] |
| *Zamia skinneri* | — | MBC[bc], FTG[bc], HUN, SDBG, +8 | RBGS[bc], CNS |
| *Zamia soconuscensis* | — | MBC[bc], FTG[bc], HUN, SDBG, NBG, +1 | — |
| *Zamia spartea* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, +2 | RBGS[bc], CNS |
| *Zamia splendens* | — | MBC[bc], FTG[bc], HUN, SDBG, +7 | CNS |
| *Zamia standleyi* | KEW | MBC[bc], FTG[bc], HUN, LOT, SDZ, NBG, +5 | RBGS[bc] |
| *Zamia stevensonii* | — | MBC[bc], +3 | — |
| *Zamia stricta* | — | MBC[bc] | — |
| *Zamia tolimensis* | — | +2 | — |
| *Zamia tuerckheimii* | — | MBC[bc], FTG[bc], HUN, +3 | RBGS[bc] |
| *Zamia ulei* | — | +2 | — |
| *Zamia variegata* | — | MBC[bc], FTG[bc], HUN, LOT, SDBG, MOBOT, NBG, UCBG, +9 | RBGS[bc], CNS |
| *Zamia vazquezii* | KEW | MBC[bc], FTG[bc], HUN, SDBG, SDZ, MOBOT, NBG, +13 | RBGS[bc], BBG, CNS |
| *Zamia wallisii* | — | MBC[bc] | — |

## 4. Ressources anglophones pour les retours de culture

État d'accès testé le 19/10/2026 avec curl (et WebFetch quand curl échouait), sans contournement.

### 4.1 Lisibles

- **The Cycad Society** (États-Unis), https://cycad.org/content/ : 200. Site de la société, qui mentionne son *Cycad Newsletter* ; pas de forum public trouvé.
- **Cycad Society of South Africa**, https://cycadsociety.org/ : 200. Présentation, adhésion, revue *Encephalartos* (non consultée).
- **PACSOA** (Palm and Cycad Societies of Australia), wiki https://pacsoa.org.au/wiki/index.php/Main_Page : 200.
  - Les fiches d'espèces sont lisibles (ex. *Macrozamia communis*). Les pages-index « Cycads » et « Gardens etc. » sont vides (404 du wiki).
  - Source de niveau c (société spécialisée), utile pour l'Australie.
- **UBC Botanical Garden Forums** (Vancouver, forum anglophone international) : fils lisibles (200), avec date, lieu déclaré et contenu.
  - Exemple : fil « Cycad hardiness report » (11/05/2006), https://forums.botanicalgarden.ubc.ca/threads/cycad-hardiness-report.14118/. Une pépinière de la Sunshine Coast (Colombie-Britannique) y plante en pleine terre *Dioon edule*, *Macrozamia communis* et *Cycas panzhihuaensis* de trois ans : le *Dioon* perd ses feuilles. Un cultivateur de l'île de Vancouver indique que ses *C. panzhihuaensis* en pots d'un gallon américain (environ 3,8 l) ont supporté −10 °C (14 °F) une nuit de janvier 2004.
  - L'index de la section « Outdoor Tropicals » a renvoyé 403 : accès irrégulier.
- **Hardy Tropicals UK** (forum britannique), https://www.hardytropicals.co.uk/forum/ : index lisible à certains essais (200), refusé à d'autres (403). La recherche du forum renvoie 403. Ne pas insister.
- **International Palm Society**, https://palms.org/ : 200 (palmiers surtout).
- **European Palm Society**, https://www.palmsociety.org.uk/ : 200, mais application JavaScript : aucun contenu lisible par curl. L'ancien domaine europeanpalmsociety.org ne répond plus (502).
- **IUCN/SSC Cycad Specialist Group**, https://www.cycadgroup.org/ : 200.
- **The World List of Cycads**, https://cycadlist.org/ : 200, liste des noms et bibliothèque de références (PDF ouverts, ex. [MO1]).
- **RHS**, fiches plantes : 200 (classement de rusticité H1 à H7, ex. [R1]).
- **Pépinières** (source de niveau f, jamais seules) : Trebrown (https://www.trebrown.com/, 200) et Jungle Music (https://www.junglemusic.net/, 200).

### 4.2 Bloquées (non contournées)

| Ressource | Adresse | Réponse |
|---|---|---|
| PalmTalk | https://www.palmtalk.org/forum/ | 403, Cloudflare (« Just a moment ») |
| Dave's Garden (PlantFiles, forums) | https://davesgarden.com/ | 403, Cloudflare |
| National Gardening Association | https://garden.org/ | 403, Cloudflare |
| Palmpedia | https://www.palmpedia.net/ | 403, Cloudflare |
| Kew (pages des collections et articles) | https://www.kew.org/ | 403, Cloudflare |
| Reddit (r/cycads) | https://www.reddit.com/r/cycads/ | 403 (« blocked by network security ») |
| Houzz / GardenWeb | https://www.houzz.com/discussions | page « Client Challenge » (anti-robot) |
| The Huntington | https://www.huntington.org/ | 429 à chaque essai (curl et WebFetch) |
| RBG Sydney (pages du jardin) | https://www.botanicgardens.org.au/ | 403 (curl et WebFetch) |
| Ville de Cairns (jardin botanique) | https://cairns.qld.gov.au/ | 403 (curl et WebFetch) |
| Gouvernement du Territoire du Nord (communiqués) | https://mediareleases.nt.gov.au/ | 403 |
| Catalogue détaillé d'Édimbourg | https://data.rbge.org.uk/ | erreur de certificat (curl), 503 (WebFetch) |
| Palm & Cycad Society of Florida | https://www.pacsof.org/ | 502 au proxy (refus ou hôte injoignable) |
| Palm Society of Southern California | https://palmssocal.org/ | 502 au proxy |
| UK Palm Forum | https://www.ukpalmforum.co.uk/ | 502 au proxy |
| Hardy Plant Society (PDF de visite de Tresco) | https://hardy-plant.org.uk/ | 403 |
| CNN (article Ventnor 2019) | https://www.cnn.com/ | 451 |
| Wayback Machine | https://web.archive.org/ | connexion coupée par le proxy |

### 4.3 Disparues ou cassées

- **Cycad Pages** de RBG Sydney (https://plantnet.rbgsyd.nsw.gov.au/PlantNet/cycad/) : 410 (supprimées).
- **Recherche des collections vivantes de l'ANBG** (`/cgi-bin/vic`) : 404.
- **Article de Ventnor sur les cônes de 2019** (https://www.botanic.co.uk/?p=7448) : 404, sans copie archivée (API Wayback : aucune capture).
- Page de Hardy Tropicals UK sur *Cycas revoluta* (https://www.hardytropicals.co.uk/page.php?id=57) : 403 puis 404.
- Page du centenaire de l'université de Bristol sur *E. lehmannii* : 404.
- Site touristique de Katherine sur le jardin de Darwin : 404.

## 5. Sources

Toutes consultées le 19/10/2026. « Extrait » signifie que la page n'a pas pu être lue (blocage ou 404) et que seul l'extrait du moteur de recherche est connu : à ne pas citer comme source principale dans une fiche.

**Sources communes**

- **B1** — BGCI PlantSearch, données publiques interrogées par l'API du site (`https://datatools.bgci.org/api/plants/search/quick?term=<genre>` puis `https://datatools.bgci.org/api/plants/<id>`), sans compte. 588 fiches de taxons des 10 genres, filtrées sur les jardins du Royaume-Uni, des États-Unis et d'Australie. Aucune date de dépôt par jardin n'est affichée ; la fiche jardin donne seulement la date de mise à jour du profil (ex. Kew : 27/01/2026). https://plantsearch.bgci.org/
- **W1** — The World List of Cycads, liste des noms scientifiques (statut accepté ou synonyme). https://cycadlist.org/scientific_names
- **G0** — Garden Explorer (Compositae), liste des jardins utilisant ce catalogue en ligne. https://www.gardenexplorer.org/
- **Z1** — phzmapi.org, service tiers reproduisant la carte USDA des zones de rusticité 2023 (données PRISM, Oregon State University), interrogé par code postal (ex. https://phzmapi.org/33156.json). Le site officiel (https://planthardiness.ars.usda.gov/) ne se lit qu'avec JavaScript.

**Royaume-Uni**

- **K1** — Kew, « Cycad Collection » (Cloudflare, 403 ; extrait). https://www.kew.org/kew-gardens/plants/cyads-collection
- **K2** — Kew, article « Oldest pot plant in the world: Eastern Cape giant cycad », 23/07/2019 (403 ; extrait). https://www.kew.org/read-and-watch/oldest-pot-plant-in-world-eastern-cape-giant-cycad
- **K3** — Guinness World Records, « Oldest pot plant » (lu). https://www.guinnessworldrecords.com/world-records/oldest-pot-plant
- **K5** — Guinness World Records, « Rarest plant » (*E. woodii*, Kew 1899 ; lu). https://www.guinnessworldrecords.com/world-records/69425-rarest-plant
- **K6** — International Dendrology Society, « Encephalartos woodii » (connexion coupée ; extrait : rejets récoltés en 1903). https://www.dendrology.org/publications/dendrology/encephalartos-woodii
- **K7** — Culture Whisper, réouverture de la Temperate House de Kew, 2018 (connexion coupée ; extrait). https://www.culturewhisper.com/r/things_to_do/temperate_house_kew_gardens_greenhouse_reopens/11494/4
- **T1** — Tresco, « Abbey Garden Diaries – July 2026 » (lu ; légendes de photos *Encephalartos natalensis*). https://www.tresco.co.uk/journal/abbey-garden-diaries-july-2026
- **T2** — Tresco, « Abbey Garden Diaries – Feb 2025 » (lu). https://www.tresco.co.uk/journal/abbey-garden-diaries-feb-2025
- **T3** — Country Life, « Totally tropical Tresco… » (lu ; regarnissage de 1987). https://www.countrylife.co.uk/gardens/totally-tropical-tresco-the-english-country-garden-that-brings-the-tropics-to-the-british-isles-278732
- **V1** — Ventnor Botanic Garden, page d'accueil (lu). https://www.botanic.co.uk/
- **V2** — Ventnor Botanic Garden, dépliant « Walking with dinosaur plants! » (vers 2017, lu). https://www.botanic.co.uk/wp-content/uploads/2017/07/walking-with-dinosaur-trail-leaflet.pdf
- **V3** — Ventnor Botanic Garden, récit « Cycad » sur Google Arts & Culture (non daté, lu par WebFetch). https://artsandculture.google.com/story/bAVBi0uNHOjvmA
- **V4** — My Modern Met, « Climate Change Brings Prehistoric Plant… » (vers 2020, presse de seconde main, lu). https://mymodernmet.com/cycas-revoluta-uk-isle-of-wight/
- **V5** — Ventnor Botanic Garden, article de 2019 sur les cônes (404 ; extrait). https://www.botanic.co.uk/?p=7448
- **E1** — Clugston J., « Student project: Data capture and taxonomic determination of Cycadales at the Royal Botanic Garden Edinburgh », *Sibbaldia: The Journal of Botanic Garden Horticulture* 8 (2010) (PDF lu). https://journals.rbge.org.uk/rbgesib/article/download/134/124
- **E2** — RBGE, « Moving our Living Collection » (Edinburgh Biomes ; lu). https://www.rbge.org.uk/news/edinburgh-biomes/stories-from-the-edinburgh-biomes/moving-our-living-collection/
- **E3** — RBGE, Botanics Stories, catégorie « Orchids and Cycads House » (lu). https://stories.rbge.org.uk/archives/category/orchids-cycads-house
- **E4** — RBGE, Garden Explorer (mis à jour le 18/10/2026). https://rbge.gardenexplorer.org/
- **E5** — BG-BASE Multisite (RBGE), nombre de réponses par genre pour Édimbourg (`multiread.php?id=24&qval=<genre>*`). https://websites.rbge.org.uk/multisite/multisite3.php
- **E6** — Catalogue détaillé d'Édimbourg (inaccessible). https://data.rbge.org.uk/search/livingcollection/index.php?cfg=livcol.cfg&eti=encephalartos%2A
- **C1** — Cambridge University Botanic Garden, Living Collections Portal, recherche par famille (lu). https://www.botanic.cam.ac.uk/collections/collectionsportal/search-results?genus=&species=&family=Zamiaceae (et `family=Cycadaceae`)
- **C2** — Parks & Gardens UK, « Cambridge University Botanic Garden glasshouse range » (extrait). https://www.parksandgardens.org/places/cambridge-university-botanic-garden-glasshouse-range
- **P1** — Chelsea Physic Garden, Garden Explorer (mis à jour le 15/10/2026 ; *Cycas revoluta*). https://cpg.gardenexplorer.org/
- **R1** — RHS, fiche *Cycas revoluta* (H3, AGM ; lu). https://www.rhs.org.uk/plants/5127/cycas-revoluta/details
- **A1** — Montgomery Botanical Center, « Ian Watt, Abbotsbury Subtropical Gardens, and Stephen Wagner Study Montgomery Botanical's Cycads », 29/11/2007 (lu). https://www.montgomerybotanical.org/research/ian-watt-abbotsbury-subtropical-gardens-and-stephen-wagner-study-montgomery-botanicals-cycads/

**États-Unis**

- **M1** — Montgomery Botanical Center, catalogue BG-BASE « Montgomery – Cycads » via le Multisite RBGE, recherche par genre et pagination (ex. https://websites.rbge.org.uk/cgi-bin/nph-readbtree.pl/dataset=CYCADS/filename=n132_cyc/firstval=1?ETI=encephalartos%2A). Page d'accès : https://www.montgomerybotanical.org/research/living-collection/
- **M2** — Montgomery, « Cycad Walk » (lu). https://www.montgomerybotanical.org/visit/cycad-walk/
- **M3** — *Montgomery Botanical News* 33(1), printemps-été 2025, « The Search for Australia's Blue Cycads » (PDF lu). https://www.montgomerybotanical.org/wp-content/uploads/2025/06/Australia2025.pdf
- **M4** — American Public Gardens Association, Plant Collections Network, « Cycad Multisite » (fiche datée du 09/11/2015 ; Lotusland, Montgomery, San Diego Zoo, UC Berkeley ; lu). https://www.publicgardens.org/napcc_collection/cycad-multisite/
- **F1** — Fairchild, « Cycad Collection » (lu). https://fairchildgarden.org/miami-botanical-garden/cycad-collection/
- **F2** — Fairchild, Garden Explorer (mis à jour le 16/10/2026). https://fairchild.gardenexplorer.org/
- **H1** — The Huntington, « Cycad collection » (429 ; extrait). https://www.huntington.org/cycad-collection
- **H2** — The Huntington, *Verso*, « Take a walk among cycads », juillet 2020 (429 ; extrait). https://huntington.org/verso/2020/07/take-walk-among-cycads
- **H3** — The Huntington, *Frontiers*, « Passion for cycads », printemps-été 2017 (429 ; extrait). https://huntington.org/frontiers/2017-spring-summer/passion-cycads
- **L1** — Lotusland, « Cycad Garden » (lu). https://www.lotusland.org/gardens/cycad-garden/
- **L2** — Lotusland, *Newsletter*, été 2026 (PDF lu). https://www.lotusland.org/wp-content/uploads/2026/07/GWL_SUM-2026_Newsletter_Final_Spreads.pdf
- **L3** — Lotusland, *Newsletter*, automne 2012 (PDF lu). https://www.lotusland.org/wp-content/uploads/2023/01/2012-Fall.pdf
- **S1** — San Diego Botanic Garden, « Garden Map & List » (lu). https://sdbg.org/garden-map-list/
- **S2** — San Diego Botanic Garden, « Explore Our Gardens » (lu). https://sdbg.org/explore-our-gardens/
- **MO1** — Deloso B. E., Colligan A., Sucher R., Ramirez V., « Missouri Botanical Garden's cycad collection: A journey through time », *Plant Species Biology* (2025), doi:10.1111/1442-1984.12509 (PDF en accès ouvert lu sur cycadlist.org). https://cycadlist.org/storage/references/open/14087e12-f586-4616-a8df-89c4ea575212.pdf
- **N1** — Naples Botanical Garden, « A Modern Obsession with a Prehistoric Plant » (paru dans *Cultivate*, automne 2021 ; lu). https://www.naplesgarden.org/a-modern-obsession-with-a-prehistoric-plant/

**Australie**

- **SY1** — Royal Botanic Garden Sydney, Garden Explorer (mis à jour le 01/10/2026 ; recherche par genre). https://rbgsydney.gardenexplorer.org/
- **SY2** — Australian Botanic Garden Mount Annan, Garden Explorer (mis à jour le 15/10/2026). https://australianbg.gardenexplorer.org/
- **SY3** — Botanic Gardens of Sydney, « The Bicentenary Garden » et Southern Africa Garden (403 ; extraits). https://www.botanicgardens.org.au/royal-botanic-garden-sydney/garden-highlights/bicentenary-garden
- **MV1** — Royal Botanic Gardens Victoria, Living Collection Census, listes de plantes téléchargées par famille (CC BY-NC-ND 4.0). https://data.rbg.vic.gov.au/rbgcensus/census/download_plant_list?family=Zamiaceae (et Cycadaceae, Stangeriaceae ; recherche : https://data.rbg.vic.gov.au/rbgcensus/census/search?family=Zamiaceae)
- **BR1** — Calyx (Queensland Gardening Pages), « Cycads » et « Rockhampton » : résumés de communiqués de 2015 sur l'extension de Mount Coot-tha, et renvoi à une page PACSOA sur Rockhampton (site régional, niveau f ; lus). https://www.calyx.com.au/cycad.html ; https://www.calyx.com.au/Rockhampton.html
- **CB1** — ANBG, communiqué du 12/02/2004 (lu). https://anbg.gov.au/gardens/about/media/04-02-13-macrozamia.html
- **CB2** — ANBG, « Find a plant » (formulaire lu ; moteur `/cgi-bin/vic` en 404). https://anbg.gov.au/gardens/living/findaplant/index.html
- **CN1** — Cairns Regional Council, « Garden areas & collections » (403 ; extrait). https://cairns.qld.gov.au/experience-cairns/botanic-gardens/garden-areas
- **DW1** — Tourism NT, « George Brown Darwin Botanic Gardens » (lu). https://northernterritory.com/darwin-and-surrounds/see-and-do/george-brown-darwin-botanic-gardens
- **DW2** — Visit Katherine, page sur le jardin de Darwin (404 ; extrait). https://www.visitkatherine.com.au/george-brown-darwin-botanic-gardens

## 6. Lacunes et points à vérifier

### Documents à demander ou à acheter

- **Kew** : la liste de ses 83 espèces (page bloquée ; la liste BGCI en compte 64) et l'emplacement de chaque espèce (Palm House, Temperate House, Jodrell). À demander au jardin si l'on veut citer Kew pour une espèce précise.
- **Édimbourg** : la liste détaillée (data.rbge.org.uk inaccessible) et le devenir des cycadales pendant la fermeture des serres (Edinburgh Biomes).
- **The Huntington** : liste et emplacements (site en 429). Si l'accès revient, relire [H1-H3].
- **Lotusland** : aucune liste d'espèces publiée ; les chiffres (143, 170 ou « près de 200 » espèces) divergent selon la date et la source.
- **San Diego Botanic Garden, San Diego Zoo, Naples, Missouri** : pas de catalogue en ligne ; la liste complète du Missouri est en annexe (figure S10) de [MO1], non téléchargée.
- **ANBG, Brisbane, Cairns, Adelaide** : pas de catalogue en ligne lisible ; BGCI seulement.
- **Darwin et Rockhampton** : aucune liste ; PACSOA (Rockhampton) et le jardin de Darwin sont à contacter.
- **Tresco** : *Tresco Abbey Garden: a personal and pictorial history*, livre du conservateur (2022 selon un extrait de recherche) sur le gel de 1987 et la reconstitution du jardin, non consulté.

### Points à vérifier avant usage dans une fiche

- **BGCI n'est pas un inventaire daté** : une espèce listée pour un jardin a pu disparaître. Pour Kew, Huntington, San Diego, Lotusland, Naples et Brisbane, BGCI est souvent la seule source nominative : écrire « listée par … dans BGCI PlantSearch (consulté en octobre 2026) » plutôt que « cultivée à … ».
- **Plein air ou serre** : à n'affirmer que lorsque la source le dit :
  - Kew, Chelsea, Missouri : sous verre ;
  - Ventnor, Tresco, Melbourne (massifs), Naples, Lotusland : plein air ;
  - Berkeley : plein air sauf exceptions citées ;
  - ailleurs : non documenté espèce par espèce.
- **E. woodii à Kew** : arrivée en 1899 (Guinness) ou rejets de 1903 (Dendrology Society) ; à présenter comme une divergence.
- **Cônes de Ventnor** : 2012 ou 2013 pour le premier cône mâle selon la source ; cône femelle en 2019.
- **Hybrides *E. woodii* × *natalensis*** : présents à RBG Sydney, Huntington et Adelaide. Ne pas les compter comme *E. woodii*.
- ***Cycas circinalis*** : nom souvent mal appliqué en culture (Édimbourg a renommé en 2010 plusieurs « *C. circinalis* » en *C. rumphii* [E1]). Prudence pour toutes les listes BGCI qui le citent.
- **Synonymes ramenés au nom accepté (WLoC)** :
  - *Ceratozamia* : *C. microstrobila* et *C. mexicana* var. *latifolia* → *C. latifolia* ; *C. mexicana* var. *robusta* → *C. robusta* ;
  - *Cycas* : *C. chamberlainii* → *C. riuminiana* ; *C. hainanensis* et *C. shanyaensis* → *C. taiwaniana* ; *C. litoralis* → *C. edentata* ; *C. kennedyana* → *C. media* ; *C. miquelii* → *C. revoluta* ; *C. fairylakea* → *C. szechuanensis* ; *C. undulata* → *C. circinalis* ; *C. circinalis* subsp. *thouarsii* → *C. thouarsii* ;
  - *Dioon* : *D. edule* var. *angustifolium* → *D. angustifolium* ; *D. tomasellii* var. *sonorense* → *D. sonorense* ;
  - *Zamia* : *Z. amblyphyllidia* → *Z. erosa* ; *Z. polymorpha* → *Z. prasina* ; *Z. floridana* → *Z. integrifolia* ; *Z. debilis* → *Z. pumila* ; *Z. kickxii* → *Z. pygmaea* ; *Z. latifolia* → *Z. furfuracea* ; *Z. picta* → *Z. variegata* ;
  - autres corrections : *E. caffer* → *E. afer* (choix du site) ; *Macrozamia pauli-guilielmi* subsp. *flexuosa* → *M. flexuosa* ; graphies corrigées : « *Cycas petrae* », « *Dioon salasmoralesiae* », « *Macrozamia reidlei* », « *Zamia socconuscensis* ».
- **Noms non résolus** (absents du tableau) :
  - *Ceratozamia purpurea* (non trouvé dans WLoC) ;
  - « *Cycas neocaledonica* » ;
  - *Dioon pectinatum* et *Zamia verschaffeltii* (*nomina dubia* selon WLoC) ;
  - « *Cycas communis* » (communiqué de l'ANBG, 2004).
- ***Cycas hainanensis*** est un synonyme de *C. taiwaniana* selon WLoC. Si une fiche du site traite *C. hainanensis* comme espèce, vérifier sur POWO avant de citer des jardins.
