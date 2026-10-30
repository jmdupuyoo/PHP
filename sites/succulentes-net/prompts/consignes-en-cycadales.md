# Consignes communes — pages EN des cycadales (agents)

Recréé le 30/10/2026 dans le dépôt (les fichiers du scratchpad `enc-commun.txt`, `mac-commun.txt`, `dio-commun.txt`, `cer-commun.txt`, `en-especes-commun.txt` ont été perdus lors d'un remplacement du conteneur). Ce fichier fait foi pour les lots EN restants (Dioon, Ceratozamia, Bowenia, Lepidozamia, Stangeria, Microcycas).

## Règles générales

- **Connecteur** : `mcp__Succulentes_net-be369697__*` uniquement (chargé via ToolSearch ; s'il change de nom, utiliser le nouveau nom Succulentes_net). Jamais `mcp__Succulentes-1_2_5__*` (clé révoquée).
- **Accès réseau** : ne pas contourner Cloudflare ni aucun pare-feu (POWO, Liste rouge UICN, BHL, PalmTalk, Dave's Garden, Agaveville, forum Cycadelic, Kew, UNESCO, Flora e Funga do Brasil/Anubis, reCAPTCHA PMC, redlist.sanbi.org, cites.org…). **User-Agent de navigateur interdit partout sauf PlantZAfrica** (seule autorisation du propriétaire). Un site qui refuse curl (403, 429, classificateur) n'est pas contourné : on s'en passe ou on le signale. Aucune adresse e-mail ni donnée personnelle dans les requêtes externes. cycadsociety.org et cycad.org : pages publiques seulement, jamais de connexion.
- **Ne rien commiter** (le coordinateur commite après chaque rapport).
- **À lire d'abord** : `sites/succulentes-net/prompts/redaction-fiches.md` (règles du propriétaire), `pilotes/en-a-faire.md`, `pilotes/cycadales-jardins-botaniques-en.md`, la section « Signalé lors de <lot précédent> » de `pilotes/cycadales-a-verifier.md`.
- **Gabarit** : les fiches EN récentes servent de modèle de structure et de ton (ex. `pilotes/espece-macrozamia-viridis-en.html`, `pilotes/espece-encephalartos-schmitzii-en.html`, `pilotes/espece-dioon-holmgrenii-en.html`) et leurs notes `-en-note.md`.
- **Zéro invention** ; nom accepté selon The World List of Cycads (WLoC) ; divergences de sources exposées, pas tranchées sans source.
- **Notes de travail** : aucune visible (recherches ou offres « non trouvées », « search snippet / extrait de recherche », « not consulted », « read in full », « ne sont pas reprises ici », « PDF indisponible », provenance interne, intertitres vides). Une mention brève « X could not be consulted » n'est admise que si elle explique l'origine d'une donnée.
- **EN** : anglais britannique ; °C puis °F ; zones USDA seulement si sourcées et attribuées (classement de pépinière = classement commercial) ; guillemets “ ” (jamais « » ni guillemets droits dans le texte) ; liens internes vers des pages EN uniquement.
- **Toxicité** : *Cycas* : « cycasin → methylazoxymethanol, BMAA ». Autres genres : « toxic glycosides (cycasin, macrozamin), from which methylazoxymethanol is derived » (pas de BMAA sauf source spécifique lue).
- **Images** : alt = nom scientifique seul ; légende descriptive courte autorisée, nom en italique (ex. « Female cone of <em>Dioon edule</em>. »).
- **Jardin zoologique tropical (JZT)** : seules les observations publiées en FR (validées) sont reprises, comme expérience méditerranéenne. Aucun message de forum du compte JMDUPUYOO. Citations de forums anonymes et datées ; pépiniéristes non nommés en EN.
- **Statut UICN** via GBIF/Crossref ; CITES et UE vérifiés sur Species+ ; jardins UK/US/AU via BGCI, Montgomery, Garden Explorer, recensement RBGV (page d'accueil https://data.rbg.vic.gov.au/rbgcensus/ si l'URL de recherche est en 404).
- **Protologues** : cycad.org publie de nombreux protologues en PDF public (`https://www.cycad.org/documents/descriptions/<Genre>/<Genre>-<épithète>.pdf`) : à consulter systématiquement.

## Méthode

0. **Retouches** : traiter d'abord les points listés dans la consigne du lot (replace_in_content avec `dry_run` AVANT chaque application, nombre attendu vérifié ; brouillons et notes alignés ; ligne dans `restructuration-fr.md` ; marquer FAIT dans `cycadales-a-verifier.md`).
1. **Une fiche à la fois.** Toujours vérifier d'abord l'état EN LIGNE de chaque page (get_content) : un lot précédent interrompu a pu publier une partie du travail ; ne rien appliquer deux fois.
   - **Mode R** (page EN existante) : réécriture complète du contenu seul (update_content) depuis la FR/IT vérifiée et les sources primaires ; slug, parent et groupe Polylang conservés ; corriger les erreurs listées dans les notes `-fr-note.md` ; écarter toute affirmation non sourcée de l'ancienne EN.
   - **Mode C** (aucune page EN) : vérifier qu'aucune page EN n'existe (corbeille, brouillon, privée, redirection) ; create_content publiée, parent = page genre EN, slug = épithète, `translation_of` = ID FR (groupe Polylang FR/IT/EN), puis vérifier les hreflang.
   - Pour chaque page : SEO Rank Math (titre 50-60 car., meta 120-155 car., en anglais, pas de faux nom commun) ; ligne de l'index de la page genre EN liée (dry_run, 1 remplacement) ; `<title>` vérifié (UA Chrome autorisé ici uniquement pour lire NOTRE site, et curl) ; brouillon `pilotes/espece-<genre>-<épithète>-en.html` identique au texte en ligne ; note `-en-note.md`.
   - FR/IT des espèces du lot : retirer les notes de travail et mentions d'extraits de recherche visibles (vérifier le fait sur une source lisible ou le retirer) ; brouillons et notes FR/IT alignés.
   - Liens EN utiles depuis les pages EN qui citent l'espèce sans lien (première occurrence hors introduction, encadré, titres et sources ; simulation puis application). Ne réécrire aucune autre page entière.
2. **Suivi** : marquer le lot fait dans `pilotes/en-a-faire.md` ; mettre à jour `inventaire-cycadales-en.md`, `restructuration-fr.md` ; hors lot dans `pilotes/cycadales-a-verifier.md` (« Signalé lors de <lot> »).
3. **Rapport final en français, concis** : retouches 0, puis par espèce (id, contenu, jardins UK/US/AU, points douteux, FR/IT à reprendre), sources inaccessibles, hors lot.

## Particularités par genre

### Dioon (page genre EN 16312, FR 3794, IT 11673)
- Mexique et Amérique centrale. Toutes les fiches EN existent : mode R.
- Décision du propriétaire : *Dioon angustifolium* est une espèce à part entière ; le rang de variété de *D. edule* n'est cité que comme historique.
- *D. mejiae* / *D. pectinatum* : suivre WLoC, exposer la WCVP (lue sur GBIF).
- Sources : protologues, révision 2020 du genre, Chemnick, Gregory & Salas-Morales, Vovides, González-Astorga, Bonta & Haynes, NOM-059-SEMARNAT (2010, 2019), CONABIO, Montgomery, BGCI. CITES annexe II (vérifier Species+).
- Le retour « La Londe-les-Maures, deux *Dioon edule* plantés début 2014 » a été retiré sur décision du propriétaire : ne pas le reprendre.

### Ceratozamia (page genre EN 16307, FR 9866, IT 12127)
- Mexique, Guatemala, Belize, Honduras. AUCUNE fiche EN : mode C pour les 45 (lots CER01-CER09 de `en-a-faire.md`).
- Avant CER01 : vérifier l'index de la page genre EN 16307 (une ligne par espèce acceptée WLoC) et nettoyer les pages genre EN/FR/IT des notes de travail et extraits de recherche.
- Les FR (lots CER d'octobre 2026) sont la base ; leurs notes `-fr-note.md` listent sources et réserves.
- Sources : protologues (Phytotaxa, Brittonia, Bot. Sci., Novon…), Martínez-Domínguez, Nicolalde-Morejón, Vovides, Pérez-Farrera, Stevenson ; WCVP sur GBIF ; NOM-059 ; UICN (évaluations 2022 pour beaucoup). CITES : tout le genre en annexe I depuis 1985 ; UE annexe A, graines comprises (vérifier Species+).
- Espèces très localisées : pas de localité plus précise que le niveau municipal donné par WLoC ou le protologue ; jamais de coordonnées.

### Bowenia, Lepidozamia, Stangeria, Microcycas
- Pages genre EN : Bowenia 16323, Lepidozamia 16319, Stangeria 16329, Microcycas 16335. Lots BOW01, LEP01, STA01, MIC01 de `en-a-faire.md`.
- Bowenia : la page EN *tinaroo* (17984) n'a pas d'équivalent FR ; détails de « Tinaroo » en attente du propriétaire (ne rien ajouter).
- Stangeria : nettoyer les mentions d'extraits de recherche des pages genre FR/IT/EN. Sources sud-africaines (PlantZAfrica avec UA de navigateur autorisé).
