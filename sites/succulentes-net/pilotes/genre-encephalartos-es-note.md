# Note — page genre *Encephalartos* (ES 39595), https://succulentes.net/es/orden-cycadales/encephalartos/

## Création du 02/11/2026 (phase ES, mode C, avant le lot ENC-ES01)
- Avant création : aucune page ES *Encephalartos* (list_content ES tous statuts « Encephalartos » : seulement des pages *Cycas*/*Zamia* et la page ordre qui citent le genre ; corbeille « Encephalartos » vide ; REST slug `encephalartos` : FR 14229, IT 11663, EN 16289 seulement ; aucune redirection Pont MCP). L'adresse /es/orden-cycadales/encephalartos/ renvoyait avant création une 301 automatique (devinette d'URL) vers la page IT ; elle répond désormais 200.
- create_content : page, publish, es, parent 23482, slug `encephalartos`, titre « El género Encephalartos », translation_of FR 14229 → id **39595** ; image mise en avant 5556 (comme l'EN). Hreflang vérifiés sur les quatre pages : fr 14229, it 11663, en 16289, es 39595.
- Images (alt déjà corrects) : 5556 (*friderici-guilielmi*, Niza, taille full), 7331 (*gratus*, Lisboa), 7339 (*horridus* con cono) ; légendes ES courtes.
- Brouillon `pilotes/genre-encephalartos-es.html` = contenu REST rendu converti en blocs (scratchpad `enc-es01/r2d.py`) ; cmpall : texte identique hors sommaire, liens identiques.
- SEO Rank Math : « Encephalartos: las 65 cícadas de África, cultivo y CITES » (56) ; meta 145 ; mot-clé « encephalartos » ; aucun problème ; `<title>` vérifié. Rank Math : ≈ 9 170 mots (index et sources compris).
- Base : EN 16289 (état du 31/10/2026, REST) et FR 14229 (31/10) et leurs notes ; gabarit `genre-zamia-es.html` (H2/H3, « Datos clave de », « Lee también en Succulentes », « Sitios de referencia », « Bibliografía »). °C seulement (°F retirés), « » sans espaces, &nbsp; nombre-unité.
- Species+ revérifié le 02/11/2026 (API publique) : *Encephalartos* 13006 Annexe I depuis le 04/02/1977, UE A (en vigueur 29/06/2026) ; idem pour les cinq espèces du lot ENC-ES01 (*aemulans* 18824, *caffer* 29245 — pas de fiche « afer », *altensteinii* 24330, *aplanatus* 21176, *arenarius* 23660). Aucun nom espagnol dans Species+ (noms anglais seulement).
- Toxicité : formule des genres autres que *Cycas* (« glucósidos tóxicos (cicasina, macrozamina), de los que deriva el metilazoximetanol ») ; aucune BMAA.
- Rusticité : retours de forums FR/IT de l'EN repris au format anonyme espagnol ; mentions « zone 8a/8b / 9b selon lui » de l'EN retirées (zones sans intérêt et sans source) ; ajout JZT (observations publiées en FR, fiche *sclavoi*) : deux *Encephalartos sclavoi* défoliés par −4 à −5 °C, constat du 20/01/2012, relancés en serre (minimum JZT −6 °C respecté, rien de plus bas). Espagne citée seulement comme climat comparable (aucune donnée espagnole/latino-américaine dans la FR/EN).
- Jardins : section EN « UK, US and Australia » → « Las Encephalartos en los jardines botánicos del mundo » ; ajout Italie (Nápoles 1993-1994, Palermo, La Mortola 1897) d'après l'article ES 27314 (lié).
- Noms communs : aucun nom espagnol attesté (dit) ; noms afrikaans, zoulou, taita et anglais de l'EN.
- Localités (Q47) dans l'index : *cerinus* « une seule gorge » (lieu-dit près de Tugela Ferry retiré), *whitelockii* (chutes Mpanga retirées), *inopinus* (nom de la ferme Onverwagt non cité, décrit). Gardés : régions, montagnes, rivière Umbeluzi (étymologie), forêt de Ngoye pour *woodii* (EW, historique) et *ngoyanus* (étymologie).
- Index : 65 lignes (une par espèce acceptée WLoC, mêmes régions et données que l'EN 16289 : Afrique du Sud 37 en 5 sous-parties, Afrique australe hors Afrique du Sud 10, Afrique de l'Est 11, Afrique centrale et de l'Ouest 7). Aucune ligne liée à la création ; lignes du lot ENC-ES01 liées ensuite (voir plus bas).
- Liens internes (200) : intro → page ordre 23482 ; *Cycas* 23432, *Cycas thouarsii* 23603, *Zamia* 38672 ; article 27314 ; « Lee también » : 23153 (semis), 23175 (arrosage), 23195 (toxicité). Pas de lien *Stangeria*, *Ceratozamia* (pas de page ES).
- Non repris de l'EN : rien d'écarté par l'EN ; notes de travail : aucune.
- Points douteux (repris de la FR/EN) : POWO non consulté (Cloudflare) ; statuts UICN via WLoC/GBIF/Crossref (Liste rouge non lue) ; date d'arrivée de *woodii* à Kew (1899 Guinness) ; présence actuelle des plantes listées seulement dans BGCI non garantie.
- Sources inaccessibles aux robots (non contournées) : POWO, Liste rouge UICN, cites.org, redlist.sanbi.org ; EUR-Lex (page de vérification).

## Liens entrants (02/11/2026)
- Page ordre ES 23482 : ligne *Encephalartos* de l'index des genres → 39595 ; première mention du corps de *Encephalartos altensteinii* (section Europa, Kew) → 39679.
- Page genre *Cycas* ES 23432 : « En las Zamiaceae, como Encephalartos, Zamia o Dioon » → 39595.
- Page genre *Zamia* ES 38672 : « *Zamia afra* (hoy *Encephalartos afer*) » → 39599.
- replace_in_content limité aux ids, simulation 4 puis application 4 ; brouillons `ordre-cycadales-es.html`, `genre-cycas-es.html`, `genre-zamia-es.html` alignés (cmpall identiques hors sommaire).
- Non liés (hors consigne, signalés) : mentions génériques d'*Encephalartos* dans les fiches ES *Zamia encephalartoides* 38761 (Confusiones, FAQ), *fairchildiana* 38793, *nana* 39012 (*horridus*), et la revue *Encephalartos* citée dans des fiches *Cycas* (titre de revue : pas de lien).

## 02/11/2026 (lot ENC-ES01)
- Lignes d'index liées : *aemulans* 39597, *afer* 39599, *altensteinii* 39679, *aplanatus* 39696, *arenarius* 39722 (replace_in_content limité à 39595, chaînes « <li><em>Encephalartos X</em> auteur » uniques, simulation 5 puis application 5) ; brouillon régénéré depuis le contenu en ligne (cmpall identique). Mentions du corps non liées (comme pour *Zamia* à ce stade).

## 03/11/2026 (lot ENC-ES02)
- Lignes d'index liées : *barteri* 39767, *brevifoliolatus* 39790, *bubalinus* 39812, *cerinus* 39849, *chimanimaniensis* 39900 (replace_in_content limité à 39595, chaînes « <li><em>Encephalartos X</em> auteur » uniques, simulation 1 puis application 1 pour chaque fiche, au fil des créations) ; brouillon aligné par les mêmes remplacements (texte identique au texte en ligne, liens identiques, y compris ceux du lot parallèle ENC-ES03). Mentions du corps non liées.

## 03/11/2026 (lot ENC-ES03)
- Lignes d'index liées : *concinnus* 39769, *cupidus* 39793, *cycadifolius* 39832, *delucanus* 39852, *dolomiticus* 39906 (replace_in_content limité à 39595, chaînes « <li><em>Encephalartos X</em> auteur » uniques, simulation 1 puis application 1 pour chaque fiche) ; brouillon aligné par les mêmes remplacements (cmpall : texte et liens identiques au texte en ligne, y compris les lignes ENC-ES02). Mentions du corps non liées (*cupidus* 1, *cycadifolius* 6, *dolomiticus* 3).
