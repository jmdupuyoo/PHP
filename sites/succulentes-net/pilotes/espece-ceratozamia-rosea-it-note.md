# Note — *Ceratozamia rosea* (IT), phase 3 (11/10/2026)

- Page : https://succulentes.net/it/piante/cycadales/ceratozamia/rosea/ — id **27509**, titre « Ceratozamia rosea » (aucun nom italien attesté), slug `rosea`, parent 12127 (genre IT), langue it, `translation_of` FR 26476. Publiée par `create_content` (publish). Rien commité.
- Fichier : `pilotes/espece-ceratozamia-rosea-it.html`, identique au contenu en ligne (texte rendu de l'API REST comparé mot à mot et liste des liens comparée, seul écart le sommaire Easy TOC). URL en 200 sans redirection ; aucun commentaire de bloc visible ; blocs Gutenberg et balises équilibrés (contrôle par script) ; aucun lien vers une page FR.
- Source : FR 26476 (brouillon `espece-ceratozamia-rosea-fr.html`, identique à la page en ligne au 11/10/2026, et sa note) ; rédaction italienne non littérale, même structure (encadré « L'essenziale su », sections, Rusticità avec « In Italia », « Esperienze francesi », « Riferimenti internazionali », FAQ, « Leggi anche », « Fonti »). Ajout du règlement (CE) 338/97 (EUR-Lex, version IT) dans les sources ; la ligne « Succulentes, page du genre… » de la FR n'est pas reprise (source interne).
- Longueur : 2482 mots, dont 2191 avant « Fonti ».
- SEO Rank Math : titre « Ceratozamia rosea: la cicadea dalle foglie rosa del Chiapas » ; meta « Ceratozamia rosea, cicadea di Tila (Chiapas) descritta nel 2023, dalle foglie giovani rosa messicano: riconoscimento, habitat, usi, minacce, CITES. » ; mot-clé `ceratozamia rosea` (longueurs contrôlées par get_seo : titre 50-60, meta 120-155).
- Images : aucune (la FR n'en a pas ; pas d'image mise en avant).
- Polylang : groupe FR 26476 ↔ IT 27509 vérifié par les balises `hreflang` (fr + it) de la page IT ; la FR n'avait aucune autre traduction (note FR : aucune fiche EN/ES) : rien perdu.
- Redirections / doublons : aucune page IT préexistante (list_content it « Ceratozamia » ; enfants de 12127) ; aucune redirection visant l'URL (list_redirects, 213 entrées).

## Liens internes (tous en 200 au 11/10/2026)
- Genre 12127 (intro) ; fiches IT : miqueliana, sancheziae, zoquorum, becerrae, euryphyllidia, hondurensis, santillanii ; « Leggi anche » : articles IT 15579, 12252, 15593 (mêmes liens que les fiches du lot précédent).
- Non liées : *Zamia splendens* et *Zamia lacandona* (pas de fiche IT, 404 au 11/10/2026).
- Les liens vers les fiches publiées en parallèle (hondurensis, huastecorum, kuesteriana, latifolia, leptoceras, matudae, mexicana, santillanii, sancheziae, subroseophylla, tenuis, puis vovidesii, whitelockiana, zaragozae, zoquorum) ont été ajoutés après leur publication par replace_in_content ciblé (simulation puis application), brouillon aligné.
- Lien ajouté dans l'index de la page genre IT 12127 (replace_in_content ciblé, 11 liens du lot en un appel, simulation puis application) ; brouillon `genre-ceratozamia-it.html` aligné.

## Liens vers cette fiche dans les autres fiches IT
- Ajoutés (première occurrence hors intro/encadré/titres/Fonti, replace_in_content ciblé, simulation puis application ; brouillons `espece-ceratozamia-<x>-it.html` alignés et recomparés au texte en ligne) : aucune fiche terminée ne la citait sans lien.
- Non ajoutés : fiches IT créées en parallèle par d'autres agents (euryphyllidia → mexicana : consigne de ne pas y toucher ; sabatoi → zoquorum : lot en cours) qui citent l'espèce sans lien au 11/10/2026 : aucune. À traiter quand ces lots seront clos.

## Italie
- Jardins botaniques italiens : espèce absente de `pilotes/cycadales-jardins-botaniques-italie.md` → « nessuna presenza documentata » (sans autre affirmation).
- Tropicamente (https://www.tropicamente.it/forums/search/…) : Aucun message (« ceratozamia rosea »), recherche du 11/10/2026.
- Jardin zoologique tropical (La Londe) : la FR ne contient aucune observation → rien repris. Aucun message JMDUPUYOO utilisé.
- Fous de palmiers : repris de la FR (recherche d'octobre 2026).

## Points douteux
- Statut CR préliminaire (auteurs), non évalué UICN ; face des articulations rougeâtres (dessus/dessous) divergente entre diagnose et description.
- POWO non consulté (Cloudflare) : nom accepté d'après The World List of Cycads, comme en FR.

## Nettoyage CER07 (30/10/2026)

- Retirés (simulation puis application ; FR 12 remplacements, IT 11) : « POWO n'a pas pu être consulté directement » (encadré, Taxonomie) → WCVP lue sur GBIF (231090630 : nom accepté, Phytotaxa 595 : 79 (2023), sud-est du Mexique ; ligne de source ajoutée) ; « L'article complet est payant ; cette fiche s'appuie sur son résumé… » ; annotations « consultée directement », « résumé lu sur le site de la revue », « lue en entier », « lus (Plazi) », « texte intégral consulté » ; BMAA retirée de la toxicité (formulation imposée) ; FR : ligne de source interne « page du genre et sa note de vérification » retirée.
- Hors consigne, non modifié : « suspendu à des falaises karstiques » (le traitement Plazi ne mentionne que des pentes de 35°) ; articulations des folioles « au revers » (la diagnose dit face supérieure, la description face inférieure) ; localité « chemin de Salto de Agua » (décision du propriétaire en attente).
- Brouillon identique au texte en ligne (cmp.py). Fiche EN créée : 35811.
