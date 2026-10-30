# Note — *Ceratozamia sancheziae* (IT), publication du 11/10/2026

- Page : https://succulentes.net/it/piante/cycadales/ceratozamia/sancheziae/ — id **27490**, titre « Ceratozamia sancheziae » (aucun nom italien attesté), slug `sancheziae`, parent 12127 (genre IT), langue it, `translation_of` FR 26416. Publiée par `create_content` (publish). Rien commité.
- Fichier : `pilotes/espece-ceratozamia-sancheziae-it.html`, identique au contenu en ligne (texte rendu de l'API REST comparé mot à mot et liens comparés un à un : seul écart, le sommaire Easy TOC). URL en 200 ; aucun commentaire de bloc visible ; blocs Gutenberg équilibrés (contrôle par script) ; aucun lien vers une page FR.
- Source : FR 26416 (brouillon `espece-ceratozamia-sancheziae-fr.html`, identique à la page en ligne au 11/10/2026) et sa note ; rédaction italienne non littérale, même structure (encadré « L'essenziale su », sections, « In Italia » sous Rusticità, FAQ « Domande frequenti », « Leggi anche », « Fonti » : Siti di riferimento + Bibliografia). Règlement (CE) 338/97 (EUR-Lex, version IT) ajouté aux sources. Rien de ce que la FR avait retiré n'est réintroduit.
- Longueur : 3347 mots, dont 2961 avant « Fonti ».
- SEO Rank Math : titre « Ceratozamia sancheziae: cicadea degli altopiani del Chiapas » (59 car.) ; meta (145 car.) « Ceratozamia sancheziae (o sanchezae), separata da C. robusta nel 2021: riconoscimento, habitat in Chiapas, stato di conservazione e coltivazione. » ; mot-clé `ceratozamia sancheziae`.
- Images : aucune (la FR n'en a pas ; pas d'image mise en avant).
- Polylang : groupe FR 26416 ↔ IT 27490 vérifié (`get_content` FR : traduction it seule, et balises `hreflang` fr + it). La FR n'avait aucune autre traduction avant (ni EN ni ES) : rien perdu.
- Redirections / doublons : aucune page IT préexistante (list_content it ; enfants de 12127 via l'API) ; aucune redirection visant l'URL (list_redirects).

## Liens internes (tous en 200 au 11/10/2026)
- Genre 12127 (intro) ; fiches IT : *latifolia*, *mexicana*, *miqueliana*, *robusta*, *santillanii*, *zoquorum*, *Zamia (genre)* ; Leggi anche 12252, 12223, 15593.
- Liens vers les fiches IT publiées en parallèle (mexicana, latifolia, robusta, miqueliana, etc.) posés après publication à la première occurrence hors intro, encadré, titres et Fonti (replace_in_content ciblé, simulation puis application).
- Lien ajouté dans l'index de la page genre IT 12127 (replace_in_content ciblé sur l'id, simulation puis application, 11 liens du lot en un appel) ; brouillon `genre-ceratozamia-it.html` mis à jour de la même façon.
- Liens entrants ajoutés dans les fiches IT qui citaient l'espèce sans lien (première occurrence hors intro, encadré, titres et Fonti ; brouillons alignés et recomparés).

## Italie
- Jardins botaniques : Aucune plante documentée (espèce absente de `cycadales-jardins-botaniques-italie.md`). Tropicamente cherché sous *sancheziae* et *sanchezae*.
- Tropicamente (https://www.tropicamente.it/forums/search/sancheziae/ le 11/10/2026) : aucun résultat (« Nessun risultato »). Aucun retour de culture italien.
- Fous de palmiers : repris de la FR (aucun message). JZT : aucune observation dans la FR.

## Points douteux
- Orthographe *sanchezae* / *sancheziae* et divergence sur le type (Pérez-Farrera 3558 vs 1673) exposées comme en FR.
- Mesures du cône mâle très différentes entre description originale et monographie : les deux séries données sans trancher (comme en FR).
- POWO non lu (extrait seulement).


## Nettoyage CER08 (30/10/2026)

- FR 26416 / IT 27490 : 20 + 18 remplacements (simulation puis application, comptes identiques) : POWO « d'après un extrait de recherche » → WCVP lue sur GBIF (207874412 : Phytotaxa 500 : 209, 2021, sud-est du Mexique ; ligne de source ajoutée) ; IPNI « d'après un extrait de recherche » → IPNI consulté le 30/10 (77219235-1, orthographe sancheziae ; ligne de source ajoutée) ; statut NE confirmé par GBIF ; Belize : la seule mention (grande forme de basse altitude de l'étude de 2021) est sourcée par le résumé Crossref du protologue ; complétée par la description de ces plantes sous *Ceratozamia osbornei* (monographie 2022, lien FR/IT) ; « aucun cultivateur n'en parle sur les forums » / « ricerche sui forum » reformulés ; annotations « résumé lu », « lue en texte intégral via Plazi », « consultée directement », « interface de programmation » retirées ; BMAA retirée (formulation imposée) ; FR : ligne « page du genre et note de vérification » retirée.
- Brouillon identique au texte en ligne (cmp.py). Fiche EN créée : voir `espece-ceratozamia-sancheziae-en-note.md`.
