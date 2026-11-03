# succulentes.net : plan type des fiches françaises (espèce, genre, famille)

Relevé en **lecture seule** le 2026-09-30 (serveur MCP « Succulentes-1_2_5 », `get_content` et `get_seo`). Rien n'a été modifié.
Ce plan décrit ce que le propriétaire fait déjà dans ses pages les plus abouties. Il sert de modèle pour enrichir les pages faibles (voir `pages-faibles.md`).

## Pages étudiées

| Niveau | ID | Page | Mots | H2 | Remarque |
|---|---|---|---|---|---|
| espèce | 2811 | Echinopsis (Trichocereus) pachanoi | ≈ 6 900 | 10 | Fiche « monographie », 3 tableaux, témoignages par langue, bibliographie en 5 rubriques |
| espèce | 2194 | Agave xylonacantha | 1 520 | 9 | Fiche compacte (taxonomie en liste, étymologie, rusticité) ; **aucun lien interne**, écart à la règle d'intro |
| espèce | 2081 | Agave gentryi | 3 029 | 12 | Modèle le plus complet : fiche d'identité, tableau comparatif, tableau de culture, FAQ, sources |
| espèce | 13945 | Cycas revoluta | 2 737 | 11 | Titres en questions, retours de terrain chiffrés, 5 photos légendées, FAQ en 10 questions |
| espèce | 14461 | Zamia furfuracea | 4 050 | 15 | Série Cycadales 2026 : H2 avec ancres `id`, tableau de comparaison, retours d'expérience, liens utiles + bibliographie |
| genre | 23786 | Le genre Echinopsis | 568 | 7 | Gabarit « genre de cactus » de septembre 2026 |
| genre | 23789 | Le genre Echinocactus | 1 313 | 8 | Même gabarit, enrichi : 2 tableaux (espèces, rusticité), bibliographie |
| genre | 1018 | Le genre Agave | 2 812 | 11 | Page pivot : tableau de rusticité lié, listes d'espèces par sous-genre (97 liens internes) |
| genre | 871 | Le genre Yucca | 1 533 | 9 | Listes d'espèces par sous-genre, « Sources de référence » commentées |
| famille | 23780 | La famille Cactaceae | 932 | 6 | Sous-familles, adaptations, économie, conservation ; genres cités **sans lien** |
| famille | 23900 | La famille Malvaceae | 579 | 4 | Plantes emblématiques, genres pachycaules en H3 ; **pas de liste des genres présentés** |
| famille | 24880 | La famille Crassulaceae | 419 | 4 | Gabarit « famille » du 29/09/2026, utilisé pour les 19 nouvelles familles (≈ 380–430 mots) |

Longueurs observées sur l'ensemble des pages françaises de ces niveaux au-dessus des seuils (`get_seo`) :

| Niveau | Pages | Mots (1er quartile / médiane / 3e quartile) | H2 (médiane) | Pages avec image dans le texte |
|---|---|---|---|---|
| espèce | 423 | 1 494 / 2 201 / 3 654 | 12 | 116 (27 %) |
| genre | 70 | 538 / 1 021 / 1 547 | 6 | 25 (36 %) |
| famille / racine de groupe | 31 | 390 / 413 / 597 | 4 | 0 |

---

## Règles communes aux trois niveaux

**Structure de page**
- Toujours commencer par **un paragraphe d'introduction**, jamais par un intertitre (la famille Burseraceae 23852 et la famille Anacardiaceae 23856 ouvrent sur un H2 « Présentation générale » : c'est à corriger).
- Titre de page : « Le genre X », « La famille X », nom scientifique seul pour une espèce (ex. « Agave gentryi », « Echinopsis (Trichocereus) pachanoi » quand l'ancien genre reste courant).
- Intertitres : H2 pour les grandes parties, H3 pour les sous-parties, H4 seulement dans les très longues fiches (2811). Libellés courts et descriptifs, éventuellement sous forme de question (« Comment reconnaître *Cycas revoluta* ? »). Les fiches les plus récentes donnent un `id` aux H2 (ancres : `#repartition`, `#culture-pot`…).
- Noms scientifiques toujours en italique (`<em>`), y compris dans les intertitres. Chiffres clés en gras (taille adulte, rusticité, nombre d'espèces).
- Typographie française : espace insécable avant les deux-points et entre le nombre et l'unité (« −12 °C », « 2 300 m »), signe moins typographique, guillemets « ».

**Liens internes (règles du propriétaire, README)**
- **Introduction : un seul lien, vers la page du niveau au-dessus.** Espèce → genre (« appartenant au genre *Trichocereus* », « est un grand agave », « Pour une présentation générale du genre *Zamia*, consulter la page dédiée ») ; genre → famille (« membre de la famille Cactaceae ») ou racine de groupe (`/agavoides/`, `/aloides/`, `/palmiers/`, `/bambous/`, `/cycadales/`) ; famille ou racine de groupe → page Plantes `/plantes/`. L'ancre est un groupe nominal naturel de la phrase, jamais « cliquez ici ».
- **Corps du texte : lier chaque espèce, genre ou famille cité qui a une page** (tableaux compris : 1018 et 2081 lient les noms d'espèces dans leurs tableaux). Lier aussi les articles de fond pertinents (charançon de l'agave, zones de rusticité, *Aulacaspis yasumatsui*).
- Nom de famille obsolète cité (Agavacées, Bombacacées, Aloacées…) : lien vers la famille acceptée (APG IV) et courte note sur le transfert.
- Liens externes seulement vers des sources (POWO, World List of Cycads, UICN, Flora of North America, iNaturalist, forums cités). Supprimer les paramètres de suivi du type `?utm_source=chatgpt.com` (présents dans 871).

**Ton et style**
- Registre encyclopédique et pratique, phrases complètes, pas de familiarité. Le vouvoiement est utilisé quand on s'adresse au lecteur (« vous donner un guide complet », « Si vous voulez observer… », « Pour déterminer votre zone USDA, consultez… »), jamais le tutoiement. La plupart des passages restent impersonnels (« il est recommandé de… », infinitifs de consigne : « Arroser copieusement… »).
- Point de vue européen et jardinier : rusticité en °C et zones USDA, régions françaises citées (Côte d'Azur, Bretagne sud, vallée de la Loire), jardins botaniques où voir la plante (Hanbury, Rayol, Val Rahmeh).
- Sources nommées dans le texte (« Selon Plants of the World Online (Kew)… », « Gentry (1982) ») et retours de terrain datés ou chiffrés (forums AuJardin, PalmTalk, Fous de Palmiers).
- Pas d'émoji ni de flèches « 👉 » (à retirer de 871).

**Images**
- Facultatives mais fréquentes sur les fiches anciennes et les genres pivots : bloc image WordPress avec **légende** (`figcaption`) informative (« Cône femelle de *Cycas revoluta* », « Spécimen cultivé en centre-ville de Menton ») et **texte alternatif** renseigné (plusieurs images de 13945 ont un `alt` vide).
- Les séries récentes (Aeonium, Echeveria, Cycas, Zamia, Sabal) n'ont pas d'image dans le texte : prévoir au moins une photo légendée par fiche espèce et une par page genre.

---

## 1. Fiche espèce

**Longueur visée** : 1 500 à 3 500 mots (médiane du site ≈ 2 200 ; les fiches 2026 font 1 400 à 5 500 mots). Minimum absolu pour ne plus être « faible » : 250 mots, mais une fiche utile en fait au moins 1 000.
**Intertitres** : 9 à 15 H2, avec H3 dans la description, la culture, les ravageurs et la FAQ.

### Plan récurrent (ordre des H2 observé)

1. **Introduction** (1 à 2 paragraphes, sans intertitre) : nom scientifique en italique en tête de phrase, noms vernaculaires, origine géographique précise, trait distinctif, intérêt au jardin ; **lien unique vers le genre**. Pour les espèces à nomenclature discutée, le nom d'usage courant peut apparaître en premier (2811 : *Trichocereus pachanoi*).
2. **Fiche d'identité** (juste après l'intro, soit en paragraphes à libellé gras comme 2081, soit en tableau « Tableau récapitulatif de l'espèce » comme 2811) : Nom scientifique et auteur, Famille / sous-famille, Origine, Taille adulte, Rusticité (°C + zone USDA), Statut UICN / CITES, Difficulté de culture (x/5).
3. **Taxonomie et nomenclature** (variantes : « Taxonomie », « Note sur la nomenclature », « Étymologie et historique taxonomique ») : auteur et date de description, synonymes (liste), position dans le genre (sous-genre, section, clade), nom accepté par POWO ; H3 « Noms communs » ; H2 ou H3 « Étymologie » de l'épithète.
4. **Aire de répartition et habitat** (« Distribution et habitat naturel », « Habitat et répartition géographique ») : pays, États/provinces, altitude, milieu, climat (pluviométrie, températures) ; H3 possibles « Géographie et distribution », « Relief et altitude », « Climat ».
5. **Conservation** (« Menaces et statut de conservation (UICN) ») : catégorie UICN, annexe CITES, menaces.
6. **Description morphologique** ou « Comment reconnaître *X* ? » : H3 **Port** (ou Stipe / Port général et rosette), **Feuilles**, **Inflorescence et floraison** / Fleurs (ou Cônes mâles, Cônes femelles pour les cycadales), **Fruits** ou **Graines**, **Dimensions générales**.
7. **Espèces proches et confusions fréquentes** (« Comparaison avec *Y* », « *X* et *Y* : différence et confusion taxonomique ») : **tableau comparatif** Caractère | espèce | espèce(s) proche(s) avec liens vers les fiches, puis paragraphe sur le critère le plus fiable.
8. Selon l'espèce : **Pollinisation et biologie reproductive**, **Usages traditionnels** (avec mise en garde légale si besoin), **Variétés horticoles / Cultivars**, **Hybridation**, **Toxicité et précautions** (« *X* est-il dangereux ? »).
9. **Culture et entretien** (ou « Culture de *X* », « Comment cultiver… ») : **tableau de culture** Paramètre | Recommandation (Rusticité, Lumière, Sol, Arrosage, Taille adulte, Croissance, Difficulté), puis H3 **Lumière** / Exposition, **Substrat et drainage**, **Arrosage**, **Rusticité** (ou H2 séparé « Rusticité au froid » / « Quelle est la résistance au froid de *X* ? » avec H3 « Repères généraux », « Températures qui ont tué », « Succès après froid »), **Culture en pot** / en conteneur, **Culture en pleine terre**, **Protections hivernales**, Fertilisation, Rempotage.
10. **Retours d'expérience sous climat tempéré** (« Succès et échecs de culture ») : H3 Succès rapportés, Échecs et difficultés, Synthèse ; témoignages localisés (région, minimum, protection).
11. **Multiplication** : H3 **Semis** (température, délai, taux), **Division de rejets** / bouturage / bulbilles.
12. **Ravageurs et maladies** : un H3 par problème (charançon de l'agave *Scyphophorus acupunctatus*, cochenilles dont *Aulacaspis yasumatsui*, pourriture du collet, acariens, brûlures, carences), avec symptômes et traitement ; éventuellement « Tableau récapitulatif des problèmes courants ».
13. **Utilisation paysagère** / « Intérêt ornemental » : associations végétales (avec liens), distance de sécurité pour les plantes armées ; « Où voir de très beaux *X* » (jardins botaniques).
14. **Questions fréquentes** (« FAQ *X* en 10 questions et réponses ») : 5 à 10 questions en H3, réponse courte de 2 à 5 phrases, reprenant les requêtes réelles (rusticité, différence avec l'espèce voisine, culture en Bretagne, feuilles jaunes…).
15. **Sites de référence et bases de données** / « Liens utiles » : liste de liens (POWO, World List of Cycads, UICN, iNaturalist, forums).
16. **Bibliographie** (dernier H2) : références au format Auteur, initiale. (année). *Titre*. Éditeur, ville. ; les grosses fiches la découpent en H3 Ouvrages de référence, Articles scientifiques, Sites internet, Forums.

Tableaux : 1 à 3 (fiche d'identité, comparaison, culture). Liste d'espèces : non (c'est le rôle du genre). FAQ : oui dans les fiches récentes. Bibliographie : toujours.

### Exemple (squelette pour *Agave montana*, fiche faible 1992)

```
[Intro] Agave montana est un agave de haute montagne de la Sierra Madre orientale (Mexique)… — lien « agave » → /agavoides/agave/
[Fiche d'identité] Nom scientifique · Famille : Asparagaceae, Agavoideae · Origine · Taille adulte · Rusticité : −12 à −15 °C (zone 7b) · UICN · Difficulté
## Taxonomie et nomenclature          (### Noms communs)
## Distribution et habitat naturel
## Conservation
## Description morphologique          (### Port · ### Feuilles · ### Inflorescence et floraison)
## Espèces proches et confusions fréquentes   [tableau A. montana | A. gentryi (lien) | A. americana (lien)]
## Culture et entretien               [tableau] (### Lumière · ### Substrat et drainage · ### Arrosage · ### Rusticité · ### Culture en conteneur)
## Multiplication                     (### Semis)
## Ravageurs et maladies              (### Charançon de l'agave · ### Pourriture du collet)
## Utilisation paysagère
## Questions fréquentes               (### 4 à 6 questions)
## Sites de référence et bases de données
## Bibliographie
```

---

## 2. Page genre

**Longueur visée** : 800 à 1 500 mots (médiane du site ≈ 1 000). Seuil de page faible : 350 mots. Les pivots (Agave, Aeonium, Doryanthes, Dasylirion) dépassent 2 500 mots.
**Intertitres** : 6 à 11 H2.

### Plan récurrent (gabarit « genre » de septembre 2026 : Echinopsis, Echinocactus, et les 18 genres de cactus)

1. **Introduction** (1 à 3 paragraphes) : « Le genre *X*, membre de la famille Y, rassemble n espèces… », répartition, particularité, espèce phare ; **lien unique vers la famille** (ou la racine de groupe : Agave et Yucca → `/agavoides/`).
2. **Classification et nomenclature** : ordre, famille, sous-famille, tribu ; auteur et date du genre ; genres absorbés ou détachés (anciens *Trichocereus*, *Lobivia* ; cas *Kroenleinia grusonii* en H3) ; étymologie du nom de genre.
3. **Description morphologique** : H3 **Port et dimensions**, **Tiges et aréoles** (ou Feuilles pour les non-cactus), **Fleurs**, **Fruits**.
4. **Distribution et habitat** (« Origine et écologie », « Origine et diversité géographique »).
5. **Principales espèces** : une ligne par espèce (« *Echinopsis pachanoi* — le cactus de San Pedro, colonne à 6-8 côtes… ») ou **tableau** Espèce | Nom commun | Taille | Distribution (23789), noms liés quand la fiche existe ; paragraphes complémentaires sur les espèces remarquables.
6. **Culture en collection** (« Yuccas et jardin : principes généraux de culture », « Choisir son agave selon son espace et sa rusticité ») : H3 **Exposition et climat**, **Substrat et arrosage**, **Rusticité** (avec **tableau** Espèce | Rusticité | Zone USDA | Culture en France), **Multiplication**, **Ravageurs et maladies**. Les pages pivots séparent en H2 : « Substrat et plantation », « Arrosage et entretien », « Multiplication » (H3 Par rejets / Par bulbilles / Par semis), « Ravageurs et maladies », « Précautions d'usage ».
7. **Conservation** : CITES, UICN, menaces.
8. **Classification infragénérique** si utile (Agave, Yucca : H2 ou H3 « Sous-genre *Littaea* », « Sous-genre *Agave* », « Sous-genre *Chaenocarpa* », « Espèces au classement incertain » / « Cas particulier »).
9. **Espèces présentées sur Succulentes** : **liste à puces** de toutes les fiches espèces du genre, liées, nom en italique, synonyme entre parenthèses (« *Echinocactus grusonii* (= *Kroenleinia grusonii*) »). Les pages pivots anciennes mettent ces liens en paragraphe séparé par des tirets cadratins (1018) ou en listes par sous-genre (871).
10. **Bibliographie et ressources** (« Sources de référence ») : liste (Britton & Rose, Anderson, Gentry, POWO…), éventuellement H3 Ouvrages / Articles scientifiques / Sites consultés.
11. Facultatif : **Conclusion** courte (871) rappelant que la page est le point d'entrée vers les fiches espèces.

Tableaux : 1 à 2 (espèces, rusticité). Liste d'espèces : **obligatoire** (toutes les fiches enfants liées). FAQ : rare au niveau genre (présente sur Bowenia, Ceratozamia, Encephalartos). Bibliographie : oui. Image : 1 photo légendée recommandée.

### Exemple (squelette pour *Sedum*, genre faible 5382)

```
[Intro] Le genre Sedum, membre de la famille Crassulaceae (lien → /famille-crassulaceae/), est le plus grand genre de la famille avec plus de 400 espèces…
## Classification et nomenclature
## Description morphologique          (### Port et dimensions · ### Feuilles · ### Fleurs · ### Fruits)
## Distribution et habitat
## Principales espèces                [tableau Espèce | Nom commun | Taille | Rusticité]
## Culture en collection              (### Exposition et climat · ### Substrat et arrosage · ### Rusticité · ### Multiplication · ### Ravageurs et maladies)
## Conservation
## Espèces présentées sur Succulentes [liste à puces liée]
## Bibliographie et ressources
```

---

## 3. Page famille (et racine de groupe : agavoïdes, aloïdes, palmiers, bambous, Cycadales)

**Longueur visée** : 400 à 1 000 mots (médiane du site ≈ 410 : les 19 familles créées le 29/09 font 380 à 430 mots ; Cactaceae 932, Burseraceae 985, Fouquieriaceae 4 273). Seuil de page faible : 350 mots.
**Intertitres** : 4 à 7 H2.

### Plan récurrent (gabarit « famille » du 29/09/2026, ex. Crassulaceae 24880)

1. **Introduction** (1 à 2 paragraphes) : « La famille des *X* est l'une des… », ordre et classification (**APG IV**), nombre d'espèces et de genres en gras, répartition mondiale, fait marquant (le métabolisme CAM pour les Crassulaceae) ; **lien unique vers `/plantes/`** (ancre « plantes succulentes » ou « plantes »).
2. **Classification** (« Classification et sous-familles ») : liste à puces des sous-familles avec leurs genres principaux en italique.
3. **Caractères distinctifs** (« Caractéristiques botaniques », « Adaptations xérophytes remarquables » avec H3 par caractère : aréoles, tiges succulentes, métabolisme CAM, épines).
4. Selon la famille : **Distribution géographique**, **Plantes emblématiques de la famille** (liste), **Importance économique et alimentaire**, genres remarquables en H3 (« Les genres pachycaules : baobabs et fromagers »).
5. **Intérêt ornemental et culture** (« Culture des *X* pachycaules ») : principes communs, rythmes de croissance, rusticité.
6. **Statut de conservation** (CITES, UICN) quand il est pertinent.
7. **Genres présentés sur Succulentes** (dernier H2) : **liste à puces liée**, chaque genre en italique suivi d'une ligne (nombre d'espèces, origine). C'est la règle « la famille liste et lie ses genres » ; Cactaceae (23780) les cite dans un paragraphe **sans lien** et Malvaceae (23900) n'a pas cette section (Adansonia, Brachychiton, Chorisia, Pseudobombax non liés).
8. Facultatif pour les grandes familles : **Bibliographie** courte (absente des pages actuelles, à ajouter pour aligner sur les genres).

Tableaux : non (sauf éventuel tableau des sous-familles). Liste des genres : **obligatoire**. FAQ : non. Images : aucune aujourd'hui (une photo emblématique légendée serait un plus).

### Exemple (squelette pour la page d'ordre Cycadales, faible : 13826, 108 mots)

```
[Intro] Les Cycadales sont un ordre de gymnospermes archaïques… (lien → /plantes/), deux familles (Cycadaceae, Zamiaceae), ≈ 375 espèces, 10 genres
## Classification                      [liste : Cycadaceae (Cycas) · Zamiaceae (Bowenia, Ceratozamia, Dioon, Encephalartos, Lepidozamia, Macrozamia, Microcycas, Stangeria, Zamia)]
## Caractères distinctifs              (### Cônes et dioécie · ### Racines coralloïdes · ### Toxicité)
## Distribution géographique
## Intérêt ornemental et culture
## Statut de conservation              (CITES I/II, UICN, Aulacaspis yasumatsui)
## Genres présentés sur Succulentes    [liste à puces liée, une ligne par genre]
```

---

## Écarts relevés dans les pages modèles (à corriger lors d'une prochaine passe)

- 2194 *Agave xylonacantha* : aucun lien interne, l'introduction ne lie pas le genre *Agave*.
- 1018 *Agave* : H2 « Principales espèces d'agaves en culture » immédiatement suivi d'un H2 « Pour en savoir davantage sur les agaves » qui porte les H3 des sous-genres (le second devrait être supprimé ou devenir un H3) ; le lien du tableau vers *A. parryi* var. *truncata* pointe vers la page anglaise (`/en/agavoids/agave/parryi/truncata/`) ; le paragraphe « Pour ces espèces » lie POWO en `http://`.
- 871 *Yucca* : sources avec `?utm_source=chatgpt.com`, flèches « 👉 », balises `<a>` sans `href`, premier bloc « Sites consultés » qui répète l'ouvrage de Hodgson.
- 23780 Cactaceae : genres cités sans lien ; 23900 Malvaceae : pas de section « Genres présentés sur Succulentes ».
- 14461 *Zamia furfuracea* : H2 « 13. Multiplication par semis » (numéro résiduel) ; 13945 *Cycas revoluta* : `alt` vides sur 4 images, phrase « votre site cite aussi la corne torréfiée » (reste de rédaction).
- 23789 *Echinocactus* : *E. grusonii* situé à Querétaro « dans la vallée de Jaumave » (Jaumave est au Tamaulipas), déjà signalé dans `restructuration-fr.md`.
