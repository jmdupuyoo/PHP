# Consignes — corrections des pages EN hors cycadales (agents)

Créé le 31/10/2026. Décision du propriétaire (questions 17 et 18, 31/10/2026) : « oui corrigez ces erreurs ». Les défauts ont été relevés lors des lots de meta descriptions : sections « Signalé lors de META-A / META-B / META-C / META-D » de `pilotes/cycadales-a-verifier.md` ; liste des pages : `pilotes/en-metas-manquantes.md`.

## Règles générales

- **Connecteur** : `mcp__Succulentes_net-be369697__*` uniquement (ToolSearch ; s'il change de nom, le nouveau nom Succulentes_net). Jamais `mcp__Succulentes-1_2_5__*`.
- Accès réseau : règles de `prompts/consignes-en-cycadales.md` (aucun contournement de Cloudflare ou de pare-feu ; User-Agent de navigateur interdit sauf PlantZAfrica et la lecture de NOTRE site).
- Règles du propriétaire : `prompts/redaction-fiches.md` (notamment 20 et 21 : pages EN internationales, aucun climat ni site local de l'éditeur sauf observations de première main publiées).
- **Zéro invention.** Aucun fait ajouté sans source lue. Ne pas réécrire de page entière sauf mention expresse ci-dessous.
- **Ne rien commiter** (le coordinateur commite après chaque rapport).
- `replace_in_content` : `dry_run` d'abord, nombre attendu vérifié page par page, puis application ; toujours vérifier l'état EN LIGNE avant (ne rien appliquer deux fois) ; contrôle REST après application. Travailler par paquets, avec un fichier d'avancement dans le scratchpad pour pouvoir reprendre.

## Corrections mécaniques

- **Guillemets** : « … » (avec ou sans espaces insécables) → “…” dans le texte anglais ; guillemets droits " dans le texte → “ ” ; apostrophes droites → ’ seulement si c'est sûr. Jamais dans les attributs HTML, les URL, les commentaires de blocs Gutenberg (`<!-- wp:… {"…"} -->`) ni le code. Une citation française d'origine gardée en français peut garder « ».
- **Orthographe britannique** (color → colour, meter(s) → metre(s), center → centre, fertilizer → fertiliser, gray → grey, favorite → favourite, -ize → -ise selon l'usage du site, etc.) : hors noms propres, titres d'ouvrages ou d'articles cités, citations, noms d'organismes (« Center for… »), cultivars, URL et attributs. Établir la liste des remplacements par script, la relire, puis l'appliquer.
- **Typographie anglaise** : pas d'espace avant « ? », « ! », « : », « ; ».
- **Coquilles, entités et Markdown cassés** signalés (ex. « racaena », « FIGURE_ENamp; », astérisques autour d'un cultivar) : corriger.
- **Titres de page** fautifs signalés (faute, genre manquant, « ssp. » → « subsp. », guillemets « » → ‘ ’ pour un cultivar, espace finale, casse du nom de genre, « × » manquant pour une nothospecies traitée comme telle par la page) : corriger le titre (update_content, titre seul) et vérifier le `<title>` et l'`og:title`.
- **Slugs** fautifs signalés : nouveau slug seulement si aucun autre contenu (toute langue, corbeille comprise) ne l'utilise ; puis redirection 301 de l'ancienne adresse (create_redirect, list_redirects pour éviter doublons et chaînes) ; liens internes vers l'ancienne adresse corrigés ; contrôle curl (200 / 301).
- Les meta descriptions déjà écrites restent ; les corriger seulement si elles reprennent une erreur corrigée (titre, nom).

## Suivi

- Marquer FAIT chaque point corrigé dans la section « Signalé lors de META-… » correspondante de `pilotes/cycadales-a-verifier.md` ; entrée datée par paquet dans `restructuration-fr.md`.
- N'éditer que ses propres entrées ; si un Edit échoue parce que le fichier a changé, relire et réessayer.
- Rapport final en français, concis : pages corrigées, remplacements par type, points laissés et pourquoi.
