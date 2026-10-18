# Note — page genre *Cycas* (IT 11549), réécriture phase 2 (10/10/2026)

- Page : https://succulentes.net/it/piante/cycadales/cycas/ (id 11549, titre « Genere Cycas » inchangé, slug `cycas`, parent 11545, image mise en avant 4670 conservée). Publiée par `update_content` (autorisation du propriétaire). Rien commité.
- Fichier : `pilotes/genre-cycas-it.html`, identique au contenu en ligne (texte rendu comparé par l'API REST publique : 0 écart, 11 894 mots des deux côtés ; aucun commentaire de bloc visible).
- Structure : 62 paragraphes, 46 titres, 25 listes, 2 images ; blocs et balises équilibrés (script). Modèle : `pilotes/genre-cycas-fr.html` (FR 1256), réécrit en italien (pas de traduction mot à mot), sections italiennes ajoutées.
- Longueur : 11 894 mots, dont 10 143 avant « Fonti » (index des 118 espèces compris).
- SEO Rank Math : titre « Cycas: 118 specie, rusticità e coltivazione in Italia » (53 car.) ; meta de 145 car. ; mot-clé `cycas`. Diagnostic Rank Math : aucune anomalie, 0 image sans alt.
- Médias (médiathèque, `update_media`) : 4670 alt « Cycas revoluta », 7334 « Cycas panzhihuaensis », 18322 « Cycas » ; alt identiques dans la page.
- Polylang conservé (hreflang vérifiés sur la page publique) : FR 1256, EN 16282, ES 23432.

## Liens internes
- Intro → page ordre IT https://succulentes.net/it/piante/cycadales/.
- Genres IT (première mention) : *Encephalartos*, *Zamia*, *Dioon*.
- 16 fiches IT, liées une seule fois, dans l'index : beddomei, bifida, circinalis, debaoensis, diannanensis, guizhouensis, media, megacarpa, micholitzii, multifrondis, panzhihuaensis, revoluta, rumphii, seemannii, taitungensis, thouarsii (toutes en 200). Les liens d'espèces en double dans le corps ont été retirés (10).
- Article *Aulacaspis yasumatsui* (17555) dans « Malattie e parassiti » ; « Leggi anche » : 27311 (orti botanici italiani), 15593 (tossicità), 16534 (metodo Simon Lavaud).
- Aucun lien vers une page FR. Sources en texte brut en fin de page.

## Demandes particulières
- *Cycas revoluta* dans les jardins italiens (d'après `inventaire`/`pilotes/cycadales-jardins-botaniques-italie.md`) : H3 « *Cycas revoluta* in Italia » — Palerme (don de Maria Carolina, 1799 selon UNIPA / 1793 selon APGI), Naples (Area delle gimnosperme, Index Seminum 2007-2023, exemplaire donné par la reine, *Delpinoa* 2001), Florence (groupe en pleine terre devant la serre froide), Rome (APGI, avec *C. circinalis*), Pise, Hanbury (1897, 1912, « viale delle cycas »), BGCI (Padoue, Catane, Pavie, Sienne, Camerino, Cosenza), Messine (forum 2007). Reprise dans l'histoire du genre et dans une FAQ (« Dove vedere vecchie *Cycas revoluta* in Italia? »).
- *Cycas multifrondis* : paragraphe dédié en Tassonomia (acceptée par WLoC ; synonyme pour Hill 2008, forme hybride *dolichophylla* × *bifida*), entrée d'index, FAQ commune avec *C. taitungensis* (synonyme de *revoluta* pour POWO selon un extrait).

## Climat et retours
- Italie : Ravenne (déc. 2009, −7 °C, *revoluta* et *panzhihuaensis* en pot, mortes) ; Numana (hiver 2011-2012, −5 °C, intacte) — forum Tropicamente, anonymes. Florence/Peretola janvier 1985 (−21,4 °C / −21 °C, Météociel, station d'aéroport) : donné sans effet inventé sur les plantes ; le « −25 °C » du forum signalé comme non confirmé.
- France : retours FR de la page FR (Fous de palmiers) et du JZT (La Londe-les-Maures), présentés comme transposables à l'Italie, sans correspondance chiffrée avec des villes italiennes.

## Statuts UICN
- WLoC (relevé 10/10/2026) : 20 CR, 26 EN, 27 VU, 15 NT, 23 LC, 7 NE. Années reprises de la FR (2010, 2014, 2020, 2022, 2023) ; « anno non indicato » / « anno non verificato » pour quelques espèces (cantafolia, sundaica, vespertilio, terryana, tropophylla, edentata, glauca, javana), comme en FR.

## Points douteux
- POWO non lu (Cloudflare) : nombre d'espèces POWO inconnu ; traitement de *C. taitungensis* connu par un extrait seulement.
- Aucun nom commun italien attesté hors « cycas ».
- Date de la *Cycas revoluta* de Palerme : 1799 ou 1793 (sources contradictoires, les deux sont données).
- *C. circinalis* à Rome : nom souvent mal appliqué en culture, signalé comme à vérifier.
- *C. taitungensis* à Naples : Index Seminum sans zone du jardin, probablement graines d'autre provenance (formulation prudente).
- Années UICN manquantes pour 8 espèces (voir ci-dessus).

- 13/10/2026 (lot orixensis–petraea) : entrées d'index liées vers *orixensis* 28774, *pachypoda* 28778, *papuana* 28786, *pectinata* 28793, *petraea* 28803 (replace_in_content, dry run puis application, une à une) ; brouillon aligné (verify.py 0 bloc manquant, 99 liens).

## Correzione dell'indice del 18/10/2026 (lot IC8)
- Index des espèces aligné sur l'index FR 1256 (brouillon `genre-cycas-fr.html` aligné le 17/10, identique au contenu en ligne : verify.py) ; corrections par replace_in_content sur 11549 (chaque « from » contient le lien de l'espèce) : *schumanniana* (1/1), *scratchleyana* (1/1), puis 23 lignes en un appel (simulation 23 puis application 23, 1 par paire).
- Format harmonisé « (XX, année de publication) », catégorie inchangée : *sexseminifera* (LC, 2023), *tropophylla* (VU, 2023), *nongnoochiae* (VU, 2022), *petraea* (EN, 2023), *simplicipinna* (NT, 2023), *tansachana* (CR, 2022), *nathorstii* (VU, 2022), *nayagarhensis* (CR, 2022), *orixensis* (CR, 2023), *sphaerica* (EN, 2023), *montana* (LC, 2023), *sundaica* (LC, 2023), *nitida* (EN, 2023), *vespertilio* (VU, 2023), *wadei* (CR, 2022), *zambalensis* (CR, 2022), *terryana* (VU, 2023), *tuckeri* (VU, 2023), *xipholepis* (LC, 2022), *yorkiana* (NT, 2022), *apoa* (« LC, 2010, confermata nel 2023 » → LC, 2023). Années vérifiées le 18/10 sur Crossref (version de la Liste rouge dans le DOI 10.2305/IUCN.UK.20xx-1) et catégories sur GBIF (`iucnRedListCategory`), toutes identiques à l'index.
- *debaoensis* : réévaluation publiée trouvée — Crossref 10.2305/iucn.uk.2023-1.rlts.t42038a68899343.en (« Cycas debaoensis: Bösenberg, J.D. », issued 2020-02-12, Liste rouge 2023-1 ; précédente : Tang, 2010-3) ; GBIF 2683265 : CRITICALLY_ENDANGERED → « (CR, 2010) » → « (CR, 2023) ».
- Répartitions alignées sur l'index FR quand la fiche IT ou la source primaire l'étaye : *tropophylla* (baia di Ha Long, isola di Cat Ba), *macrocarpa* (Malesia peninsulare, Thailandia, Laos « presenza da confermare secondo i suoi scopritori » — Averyanov et al. 2014, *Gymnosperms of Laos*, texte local `scratchpad/gymlaos.txt` : « presence of a 'Malaysian' species in continental regions of northern Indochina doubtful »), *petraea* (Loei, Khon Kaen), *simplicipinna* (Yunnan, presenza discussa), *vespertilio* (Visayas e sud di Luzon, anche Mindoro e Marinduque), *terryana* (catene di Broadsound e di Connors), *tuckeri* (distretto di Coen), *schumanniana*, *scratchleyana*.
- Divergences restantes (côté FR, non corrigées ici) : FR 1256 garde (CR, 2010) pour *debaoensis*, (EN, 2010) pour *sphaerica*, (LC, 2010) pour *apoa*, l'année d'évaluation 2020 au lieu de l'année de publication pour *nongnoochiae* (2022), *nathorstii* (2022), *nayagarhensis* (2022), *orixensis* (2023), *montana* (2023), *nitida* (2023), et « année non indiquée » pour *sundaica* (2023-1). Années manquantes dans les deux langues : *cantafolia* (Crossref 2023-1, GBIF VU), *edentata* (Crossref 2023-1, GBIF EN), *javana* (Crossref 2023-1 ; GBIF NE, catégorie non vérifiable).
- Contrôles : verify.py (texte identique, 130 liens IT en 200, blocs 135/135, hreflang fr/it/en/es, aucun commentaire visible) ; User-Agent curl et Chrome : 200, `<title>` « Cycas: 118 specie, rusticità e coltivazione in Italia », plus aucune occurrence de « valutazione 2020, pubblicata ».
