# Note — *Zamia magnifica* (IT), phase 3 (11/10/2026)

- Page : https://succulentes.net/it/piante/cycadales/zamia/magnifica/ — id **28109**, titre « Zamia magnifica » (aucun nom italien attesté), slug `magnifica`, parent 11879 (genre IT), langue it, `translation_of` FR 22363. Publiée par `create_content` (publish). Rien commité.
- Polylang : FR+IT (vérifié par get_content sur la FR et par les hreflang des deux pages ; pas d'EN ni d'ES existante dans le groupe).
- Fichier : `pilotes/espece-zamia-magnifica-it.html`, identique au contenu en ligne (texte rendu de l'API REST et séquence des liens comparés par script, après les liens croisés posés par ce lot et par les autres agents). URL en 200 sans redirection ; aucun commentaire de bloc visible ; blocs Gutenberg et balises équilibrés ; aucun lien vers une page FR ; tous les liens internes IT en 200.
- Longueur : 1790 mots (texte rendu).
- SEO Rank Math : titre « Zamia magnifica: la cicadea rupicola dell'Oaxaca (Messico) » (58 car.) ; meta 145 car. ; mot-clé `zamia magnifica`.
- Images : aucune (la FR n'en a pas ; pas d'image mise en avant).
- Redirections / doublons : aucune page IT préexistante (enfants de 11879 via l'API, list_content it) ; aucune redirection visant l'URL (list_redirects).

## Sources et choix
- FR 22363 ancienne et peu sourcée : chaque fait revérifié. Sources : IPNI 77322753-1 (auteurs, date, type, récolteurs) ; Pérez-Farrera et al. 2023 (Taxonomy, MDPI — page en 403 Akamai, citée d'après IPNI et les métadonnées Crossref) ; WLoC (nom accepté, UICN non évaluée) ; Nicolalde-Morejón et al. 2024 (Acta Bot. Mex.) ; Lindstrom 2024 ; Species+ ; EUR-Lex ; ASPCA.
- Rédaction italienne non littérale, gabarit des fiches IT (« In sintesi », sections, « In Italia », « Domande frequenti », « Leggi anche », « Fonti »). Rien de ce que la FR a retiré n'a été réintroduit ; déductions formulées comme telles. Statut CITES / Annexe B UE ; POWO, UICN et BHL non consultés (Cloudflare), statuts UICN repris de la WLoC.

## Affirmations FR écartées
FR ancienne : non repris faute de source vérifiable (protologue MDPI inaccessible) :
- pétiole 57-83 cm, rachis 93-206 cm, 10-17 paires de folioles de 48 × 11 cm ;
- sarcotesta rouge orangé ;
- rattachement à La Chinantla ; substrat karstique ;
- « localité unique », « environ 2000 individus » ;
- « l'une des 4 *Zamia* strictement rupicoles » et comparaisons avec *Z. sandovalii* / *Z. meermanii* ;
- également retirés à la relecture : affiliation HEM/UNICACH des auteurs, phrase sur la NOM-059 (non vérifiée), « non disponible dans le commerce » adouci.

## Italie
- Tropicamente (https://www.tropicamente.it/forums/search/zamia+magnifica/, 11/10/2026) : aucun résultat pertinent (« magnifica » renvoie au mot italien courant).
- Jardins botaniques italiens (Naples, Messine 2009, Hanbury, BGCI) : absente.
- JZT : la FR ne contient aucune observation du Jardin zoologique tropical pour l'espèce.

## Liens internes
- genre ; furfuracea ; meermanii (lien posé par un autre agent, aligné localement) ; cremnophila ; article tossicità.
- Lien ajouté dans l'index de la page genre IT 11879 (replace_in_content ciblé, simulation puis application, 10 liens du lot) ; brouillon `genre-zamia-it.html` aligné et recomparé au texte en ligne.
- Liens croisés entrants posés (première occurrence hors intro, encadré, titres, Fonti) : chinantlensis 27421 (Ceratozamia). Mention de *lawsoniana* dans les Fonti de magnifica laissée sans lien (règle : pas de lien dans Fonti).

## Points douteux
- Fiche courte (1790 mots) : description morphologique réduite à ce qui est recoupé ; à compléter si l'article MDPI devient accessible.

## Correzione del 17/10/2026 (lot IZ1, d'après le nettoyage FR du 13/10)
- Choix : **réécriture complète** au gabarit IT (update_content, contenu seul ; slug `magnifica`, parent 11879, titre, traduction FR 22363 conservés ; aucune image). La fiche du 11/10 avait été écrite sans accès au protologue.
- Source primaire relue ce jour : Pérez-Farrera et al. 2023, *Taxonomy* 3(2) : 232-249, PDF local (copie du 13/10 tirée de mdpi-res.com, `scratchpad/z4/mag/magnifica.pdf`), texte intégral relu (description, habitat, usages, statut, discussion).
- Erreurs corrigées : cônes femelles « peduncoli corti, di meno di 4 cm » présenté comme un fait (contradiction interne de l'article, désormais exposée : < 4 cm dans le résumé et la diagnose, 9,1-10 cm dans la description et la comparaison) ; « Zamia cremnophila … nel Tabasco e nel Chiapas » (→ « in Messico », formulation du protologue) ; « Il riassunto non elenca le differenze » (obsolète) ; Usi tradizionali « nessun uso documentato » (faux : graines broyées avec sucre ou miel comme insecticide contre les mouches) ; « estensione, numero di piante e vegetazione non verificati » (désormais sourcés) ; « la descrizione formale si trova a pagina 236 » retiré (non revérifié).
- Ajouté : La Chinantla, localité unique, 80-100 m ; description complète (tige 10-38 × 10-17 cm souvent ramifiée, 3-4 feuilles de 160,8-324 cm, pétiole 57,3-87 cm, rachis 93-206 cm, 10-17 paires de folioles de 29,8-47,7 × 6-11,1 cm, cônes mâles et femelles, graines 18,6-23,5 mm) et incohérences internes (feuilles 142-290 cm et graines 1,9-2,4 cm dans la discussion) ; quatre *Zamia* rupicoles strictes et comparaisons chiffrées avec *meermanii* et *furfuracea* (11 caractères sur 12) ; type mâle, HEM de l'UNICACH ; sous-clade Furfuracea probable (hypothèse des auteurs, présentée comme telle) ; histoire de la découverte (aucun spécimen avant août 2022, matériel fixé par les habitants) ; milieu (karst, 40-45°, forêt pluviale, *Dioon spinulosum*, refuge néogène, 1021 espèces, disperseurs inconnus) ; statut CR proposé (≈ 2000 plantes, 4477 ha), protection par les habitants, menaces (pâturages, café, maïs) ; CITES détaillée, Species+ sans fiche propre ; plantule à deux folioles ; Fous de palmiers (0 résultat, 13/10) ; Tropicamente relancé (17/10, aucun message sur l'espèce) ; FAQ « È minacciata? » (8 questions).
- Non repris de la FR (non sourcé dans la FR) : glycosides « chez les *Zamia* », *Aulacaspis yasumatsui*, règlement (UE) 2026/1383.
- Liens internes ajoutés (200) : splendens, sandovalii, *Dioon spinulosum* ; 9 liens internes IT en 200, aucun lien FR.
- Contrôles (verify.py) : URL 200, aucun commentaire de bloc visible, 103 blocs appariés, texte rendu identique au brouillon `espece-zamia-magnifica-it.html`, même séquence de liens, hreflang fr/it conservés ; ≈ 2 940 mots (1 790 avant).
- SEO Rank Math inchangé (titre et meta toujours exacts). Index de la page genre IT 11879 : ligne conforme (NE, Oaxaca, 2023), non modifiée.
- Points douteux : pédoncule du cône femelle et longueur des feuilles (contradictions internes de l'article, exposées) ; clade Furfuracea (hypothèse).

## Correction du 25/10/2026 (lot ZAM11, création EN 32207)
- Présence en collection corrigée : Montgomery Botanical Center (catalogue BG-BASE, 3 numéros d'accession de 2023), expédition de description financée par son Plant Exploration Fund (protologue) ; source ajoutée ; notes de travail retirées (« n'a été trouvé », « consultée(s) », « trovat* », « fonti consultate »). Simulation puis application (FR 6 / IT 8), brouillon aligné, texte en ligne identique.
