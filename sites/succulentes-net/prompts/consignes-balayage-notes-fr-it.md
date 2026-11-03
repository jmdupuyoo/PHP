# Consignes — balayage des notes de travail des fiches cycadales FR/IT (agents)

Créé le 31/10/2026, après la fin de la phase EN des cycadales. Les règles générales de `prompts/consignes-en-cycadales.md` (connecteur, accès réseau, User-Agent, aucune donnée personnelle, ne rien commiter) et de `prompts/redaction-fiches.md` s'appliquent.

## Objet

Retirer des fiches espèces et pages genre cycadales **FR et IT** (pages en ligne et brouillons `pilotes/*-fr.html` / `*-it.html`) les notes de travail encore visibles, comme cela a été fait pour les EN :

- « consulté(e) directement / consultato(a) direttamente » : « consultée directement le 17 octobre 2026 » → « consultée le 17 octobre 2026 » (la date de consultation des bases est obligatoire, `redaction-fiches.md` l. 113) ; ailleurs, retirer l'adverbe ou la note.
- Annotations bibliographiques « [… ; non consulté(e), cité par … / référence vérifiée sur …] », « non consultato direttamente », « Source des étymologies reprises par The World List of Cycads ; non consulté directement » : garder la provenance (« cité par The World List of Cycads », « d'après laquelle il est cité », « citato da … »), retirer « non consulté(e) / non consultato(a) / non lu / letto ».
- « POWO n'a pas pu être consulté directement / non ha potuto essere consultato direttamente » : remplacer par la WCVP lue sur l'API GBIF (nom accepté, avec ligne de source GBIF) quand elle est vérifiée pour l'espèce ; sinon retirer la phrase si elle n'explique l'origine d'aucune donnée.
- « La Liste rouge n'a pas pu être consultée directement / non è stato possibile consultare… » : remplacer par la catégorie UICN relayée par GBIF (avec DOI via Crossref si trouvé), ou garder une mention brève seulement si elle explique l'origine du statut cité.
- Autres notes : « résumé lu / texte intégral lu / lu / letto », « (accès bloqué) », « accès payant » quand c'est une note de lecture.

**Gardés** : une mention brève qui explique l'origine d'une donnée (ex. « la description originale n'a pas pu être consultée ; les mesures viennent de … »), comme dans les bilans EN *Encephalartos* et *Macrozamia*. En cas de doute, garder et lister.

**Toxicité (genres autres que *Cycas*)** : la BMAA n'est citée que si une source spécifique lue l'établit pour le genre ; sinon formule « glycosides toxiques (cycasine, macrozamine), dont dérive le méthylazoxyméthanol » / « glicosidi tossici (cicasina, macrozamina), da cui deriva il metilazossimetanolo ». *Cycas* : cycasine → méthylazoxyméthanol, BMAA (inchangé).

Aucun fait ajouté sans source lue ; aucune réécriture de page entière.

## Méthode

1. Inventaire par script (brouillons FR/IT) puis contrôle par l'API REST publique que le brouillon est identique au texte en ligne ; une page dont le brouillon diffère est exclue et listée.
2. Règles de remplacement par script, puis relecture humaine des cas ambigus ; simulation (`dry_run`) par paquets de pages, nombre attendu vérifié par page, puis application ; contrôle REST après application (texte en ligne identique au brouillon attendu) ; brouillons alignés (sauvegarde préalable dans le scratchpad).
3. Toujours vérifier l'état EN LIGNE avant d'appliquer (une session interrompue a pu appliquer une partie) : ne rien appliquer deux fois.
4. Suivi : une entrée datée dans `restructuration-fr.md` par paquet ; bilan et cas gardés ou exclus dans `pilotes/cycadales-a-verifier.md` (section « Balayage notes FR/IT — <genres> ») ; marquer FAIT les points correspondants déjà listés (ex. l. « Annotation “Source des étymologies…” », « Autres FR/IT *Ceratozamia* »).
5. Rapport final en français, concis : pages traitées, remplacements par type, cas gardés, pages exclues, sources inaccessibles.

Les pages genre hors cycadales (palmiers, agaves, cactus…) qui contiennent les mêmes tournures sont seulement listées, pas modifiées.
