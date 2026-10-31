# Consignes communes — pages ES des cycadales (agents)

Créé le 31/10/2026. Liste de travail : `pilotes/es-a-faire.md`. Ce fichier fait foi pour la phase ES ; il complète `prompts/redaction-fiches.md` (règles du propriétaire) et reprend les règles générales de `prompts/consignes-en-cycadales.md`.

## Décisions du propriétaire (31/10/2026)

1. **Espagnol neutre et international**, compréhensible en Espagne comme en Amérique latine (pas de vosotros ; vocabulaire courant des deux côtés : « maceta », « sustrato », « helada », « riego » ; éviter les régionalismes).
2. **Températures en °C seulement** (pas de °F). Zones USDA seulement si sourcées et attribuées, avec leur équivalent en °C.
3. **Encadré** : intertitre H2 « Datos clave de <em>Nom du taxon</em> », placé après l'introduction et le sommaire, mêmes champs que l'encadré FR « L'essentiel sur ».
4. **Ordre** : celui de la phase EN (*Cycas*, *Zamia*, *Encephalartos*, *Macrozamia*, *Dioon*, *Ceratozamia*, puis *Bowenia*, *Lepidozamia*, *Stangeria*, *Microcycas*), par lots de 5.

## Règles générales (identiques à la phase EN)

- **Connecteur** : `mcp__Succulentes_net-be369697__*` uniquement (ToolSearch ; s'il change de nom, le nouveau nom Succulentes_net). Jamais `mcp__Succulentes-1_2_5__*`.
- **Accès réseau** : aucun contournement de Cloudflare ou d'un pare-feu ; User-Agent de navigateur interdit sauf PlantZAfrica et la lecture de NOTRE site ; relire avec un autre outil (WebFetch, navigateur, cache, service tiers) un site qui a refusé curl est un contournement, interdit. Aucune donnée personnelle dans les requêtes. cycadsociety.org et cycad.org : pages publiques seulement.
- **Ne rien commiter** (le coordinateur commite après chaque rapport).
- **Zéro invention.** La fiche ES se construit à partir de la FR vérifiée et de l'EN récente du même taxon (et de leurs notes `-note.md`) ; aucun fait absent de ces pages ou de sources primaires lues. Divergences exposées, non tranchées. Nom accepté selon WLoC.
- **Pages ES internationales** (règle 20) : culture et rusticité par grands types de climat, à partir de résultats documentés dans plusieurs régions ; l'Espagne, les Canaries ou l'Amérique latine peuvent figurer parmi les exemples sans être le cadre principal. Protections : cadre international (CITES, UICN) ; mention de l'UE possible.
- **Jardin zoologique tropical** : seules les observations publiées en FR et validées, attribuées au jardin, comme expérience méditerranéenne parmi d'autres. Aucun message du compte JMDUPUYOO. Pépiniéristes spécialisés : peuvent être nommés comme sources (décision du propriétaire du 31/10/2026, question 34), avec lien vers leur site en source ; **Simon Lavaud** est présenté comme « viverista especializado en cícadas » avec lien vers son site (décision du 31/10/2026, question 35) ; l'article ES 23244 (méthode Simon Lavaud) peut être lié. Collections privées et cultivateurs particuliers : non nommés. Forums cités de façon anonyme et datée (forums ES à consulter : InfoJardín, Club de Palmeras, en plus des autres langues — pages publiques, sans contournement).
- **Noms espagnols de *Cycas revoluta*** (décision du 31/10/2026, question 31) : « cica » (source : Verde es Vida, AECJ) et « palma de sagú » (attribué à sa source) ; l'article ES 23195 (toxicité, titre avec « palma sagú ») peut être lié. Passages ne reposant que sur Wikipédia (question 32) : gardés, attribués et présentés comme provisoires.
- **Pas de première personne**, aucune note de travail visible (« no consultado », « resumen leído », « extracto de búsqueda », provenance interne…), pas de nom commun inventé.
- **Toxicité** : *Cycas* : « cicasina → metilazoximetanol, BMAA ». Autres genres : « glucósidos tóxicos (cicasina, macrozamina), de los que deriva el metilazoximetanol » (pas de BMAA sauf source spécifique lue).
- **Typographie ES** : comillas angulares « » sans espaces intérieures (recommandation de la RAE, décision du propriétaire du 31/10/2026) ; “ ” seulement pour une citation à l'intérieur d'une citation, puis ‘ ’ ; signes ¿ ? et ¡ ! ; espace insécable entre nombre et unité ; « subsp. », « var. » ; noms scientifiques en italique.
- **Images** : alt = nom scientifique seul ; légende courte en espagnol, nom en italique.
- **Liens internes** : uniquement vers des pages ES. Une espèce sans page ES n'est pas liée (elle le sera quand sa page existera : noter la mention dans le suivi pour le lot qui la créera).
- **Structure** : celle des fiches FR/EN récentes (intro, sommaire, encadré « Datos clave de », sections traduites, FAQ de 6 à 8 questions, fuentes, bibliografía). Intertitres de premier niveau en H2 (blocs Gutenberg cohérents), sous-intertitres en H3. 1 500 mots minimum hors sections vides gonflées.

## Méthode

0. **Retouches** : traiter d'abord les points listés dans la consigne du lot (dry_run avant chaque application, nombre attendu vérifié, brouillons et notes alignés, ligne dans `restructuration-fr.md`, FAIT dans `pilotes/cycadales-a-verifier.md`).
1. Une fiche à la fois. Vérifier d'abord l'état EN LIGNE (get_content) : ne rien appliquer deux fois.
   - **Mode R** (page ES existante) : réécriture complète du contenu (update_content) ; slug, parent et groupe Polylang conservés ; écarter toute affirmation non sourcée de l'ancienne ES.
   - **Mode C** : vérifier qu'aucune page ES n'existe (corbeille, brouillon, privée, redirection) ; create_content publiée, parent = page genre ES, slug = épithète, `translation_of` = ID FR (groupe Polylang FR/IT/EN/ES), puis vérifier les hreflang des quatre langues.
   - Pages genre ES à créer : parent = page ordre ES 23482, slug = nom du genre en minuscules, `translation_of` = ID FR du genre ; index des espèces (une ligne par espèce acceptée WLoC, liée seulement si la fiche ES existe).
   - Pour chaque page : SEO Rank Math en espagnol (titre 50-60 car., meta 120-155 car.) ; ligne de l'index de la page genre ES liée (dry_run, 1 remplacement) ; `<title>` vérifié ; brouillon `pilotes/espece-<genre>-<épithète>-es.html` (ou `genre-<genre>-es.html`) identique au texte en ligne ; note `-es-note.md`.
   - Liens ES utiles depuis les pages ES qui citent l'espèce sans lien (simulation puis application).
2. **Suivi** : cocher le lot dans `pilotes/es-a-faire.md` avec les id ES ; entrée datée dans `restructuration-fr.md` ; hors lot dans `pilotes/cycadales-a-verifier.md` (« Signalé lors de <lot ES> »).
3. **Rapport final en français, concis** : retouches, par fiche (id, points douteux), sources inaccessibles, hors lot.
