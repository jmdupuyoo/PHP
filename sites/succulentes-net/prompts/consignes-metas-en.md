# Consignes — meta descriptions des pages EN (agents)

Créé le 31/10/2026 à la demande du propriétaire (« Rédiger les descriptions manquantes des pages en EN »). Liste des pages : `pilotes/en-metas-manquantes.md` (lots META-A à META-D).

## Règles générales

- **Connecteur** : `mcp__Succulentes_net-be369697__*` uniquement (chargé via ToolSearch ; s'il change de nom, utiliser le nouveau nom Succulentes_net). Jamais `mcp__Succulentes-1_2_5__*`.
- Lire NOTRE site par curl est autorisé (UA Chrome autorisé uniquement pour lire succulentes.net). Aucune requête externe n'est nécessaire : la description résume la page telle qu'elle est en ligne.
- **Ne rien commiter** (le coordinateur commite après chaque rapport).
- Règles du propriétaire : `prompts/redaction-fiches.md`.

## La description

- Champ : meta description Rank Math (`update_seo`, champ description seul). Ne pas toucher au titre SEO, au mot-clé, au contenu, au slug ni au titre de la page (si le titre ou le titre SEO pose problème — faute, français, guillemets « » —, le signaler dans le rapport).
- **120 à 155 caractères**, en **anglais britannique**, une ou deux phrases, ton informatif et engageant, sans majuscules publicitaires ni point d'exclamation.
- **Zéro invention** : uniquement des faits présents dans la page en ligne (lire son contenu avec get_content ou l'API REST). Pas de chiffre, de rusticité, de statut ou de nom commun qui n'y figure pas. Pas de faux nom commun.
- Commencer de préférence par le nom scientifique (en clair, sans balise) ou le sujet de l'article ; inclure le mot-clé principal de la page s'il existe (`get_seo`).
- Températures : °C puis °F si une température est citée. Guillemets “ ” uniquement (jamais « » ni guillemets droits). Pas de tiret cadratin en série, pas d'emoji.
- Page genre : ce que la page présente (nombre d'espèces seulement s'il est dans la page, répartition, culture). Fiche espèce : identité, origine, trait distinctif, culture ou rusticité si la page les donne. Article : la question traitée et ce que le lecteur y trouve.
- Une page quasi vide ou en français : ne pas inventer ; écrire une description prudente à partir de ce qui existe, ou la laisser et la signaler.

## Méthode

1. Pour chaque page du lot : vérifier d'abord en ligne qu'elle n'a toujours pas de meta description (un passage interrompu a pu l'écrire) ; lire le contenu ; rédiger ; compter les caractères par script ; `update_seo`.
2. Contrôle : balise `<meta name="description">` présente dans le HTML en ligne (curl) et identique au texte voulu (entités HTML décodées) ; `<meta property="og:description">` cohérente.
3. Suivi : cocher la ligne `- [x]` dans `pilotes/en-metas-manquantes.md` en ajoutant le nombre de caractères (ex. `— 146 car.`) ; n'éditer que les lignes de son lot (si un Edit échoue parce que le fichier a changé, relire et réessayer). Garder les textes dans un fichier JSON du scratchpad pour pouvoir reprendre.
4. À la fin : une entrée datée dans `restructuration-fr.md` (lot, nombre de pages, plage de longueurs) ; problèmes de titre ou de contenu repérés dans `pilotes/cycadales-a-verifier.md`, section « Signalé lors de META-<lot> ».
5. Rapport final en français, concis : pages faites, plage de longueurs, pages laissées ou signalées et pourquoi.
