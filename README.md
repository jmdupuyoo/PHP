# Pont MCP — connecter un site WordPress à Claude

Pont MCP est une extension WordPress qui transforme votre site en **connecteur Claude**
(serveur MCP). Une fois installée, Claude peut, depuis claude.ai ou l'application :

- **analyser** le site : thème, extensions, HTML réel des pages, feuilles de style ;
- **rédiger** : articles et pages (brouillon par défaut), catégories, étiquettes, champs personnalisés ;
- **illustrer** : chercher des photos libres de droits, les importer, insérer images et vidéos
  (YouTube, Vimeo, Dailymotion) à un endroit précis d'un article ;
- **référencer** : titre SEO, meta description, mot-clé, indexation, réseaux sociaux
  (Yoast, Rank Math, SEOPress, ou Pont MCP lui-même), audit SEO du site, textes alternatifs ;
- **mettre en forme** : CSS additionnel (avec révisions), options du thème (Personnaliser),
  menus, widgets ;
- **traduire** : sites multilingues Polylang (langue, traductions liées, catégories et menus par langue) ;
- **monétiser** : liens affiliés Amazon avec identifiant Partenaire, `rel="sponsored"` et mention obligatoire ;
- **mesurer** : Google Analytics 4 ou Tag Manager en Consent Mode v2, bandeau de consentement,
  validation Google Search Console et Bing.

Aucun service intermédiaire ni abonnement : l'extension s'installe sur autant de sites que
vous voulez (succulentes.net, zootropical.com, formationsoigneuranimalier.fr…).

## Installation

1. Téléchargez [`dist/pont-mcp.zip`](dist/pont-mcp.zip).
2. WordPress › **Extensions › Ajouter › Téléverser une extension**, choisissez le zip, puis activez
   (ou « Remplacer la version installée » pour une mise à jour).
3. **Réglages › Pont MCP** › *Générer l'adresse du connecteur* et copiez l'adresse (affichée une seule fois).
4. Choisissez le **niveau d'accès** :
   | Niveau | Ce que Claude peut faire |
   |---|---|
   | Lecture seule | Consulter le site, rien modifier |
   | Brouillons (par défaut) | Créer et modifier des brouillons, importer des images. Rien ne change en ligne |
   | Complet | Publier, modifier les contenus en ligne, le design, les menus, les widgets, le suivi |
5. Dans Claude : **Paramètres › Connecteurs › Ajouter un connecteur personnalisé**, collez l'adresse
   (laissez les champs OAuth vides).
6. Facultatif : renseignez votre identifiant **Partenaires Amazon** dans Réglages › Pont MCP.

## Exemples de demandes

- « Analyse le design de succulentes.net et propose une charte plus moderne. »
- « Désactive le diaporama de démonstration du thème et mets le menu principal en place. »
- « Rédige une fiche de culture de l'Echeveria elegans, illustre-la avec une photo libre de droits,
  et traduis-la en anglais. »
- « Fais un audit SEO du site et corrige les meta descriptions manquantes. »
- « Ajoute un lien Amazon vers un enfumoir dans l'article sur l'apiculture de loisir. »
- « Installe Google Analytics avec l'identifiant G-XXXXXXX. »

## Outils disponibles (50)

| Domaine | Outils | Niveau d'écriture |
|---|---|---|
| Site | `site_overview`, `theme_info`, `list_plugins`, `fetch_site_url` | — |
| Contenus | `list_content`, `get_content`, `create_content`, `update_content`, `trash_content` | Brouillons ¹ |
| Taxonomies | `list_terms`, `create_term` | Brouillons |
| Médias | `list_media`, `upload_media`, `update_media`, `search_free_images`, `insert_media` | Brouillons ¹ |
| SEO | `get_seo`, `update_seo`, `seo_audit`, `get_meta`, `update_meta` | Brouillons ¹ |
| Redirections 301 | `list_redirects`, `create_redirect`, `delete_redirect` | Complet |
| Rechercher / remplacer | `replace_in_content` (simulation par défaut, par lots ; filtres `ids` et `contains`) | Complet |
| Affiliation | `insert_affiliate_link` | Brouillons ¹ |
| Design | `get_custom_css`, `update_custom_css`, `restore_custom_css` | Complet |
| Thème | `list_customizer_settings`, `update_customizer_settings` | Complet |
| Menus | `list_menus`, `create_menu`, `add_menu_item`, `delete_menu_item`, `assign_menu_location` | Complet |
| Widgets | `list_widgets`, `save_widget` (langue Polylang `pll_lang`), `remove_widget` | Complet |
| Brevo (formulaires) | `brevo_list_forms`, `brevo_get_form` (lecture) ; `brevo_save_form` | Complet |
| Code Snippets | `list_snippets` (lecture) ; `save_snippet`, `set_snippet_active` (case à cocher dans les réglages, extraits créés inactifs) | Complet |
| Suivi | `get_tracking`, `set_tracking` | Complet |
| Langues | `list_languages`, `get_string_translations`, `update_string_translations` (+ paramètres `language` / `translation_of`) | Complet |

¹ Modifier un contenu déjà en ligne exige le niveau Complet.

Tous les outils sont toujours visibles dans Claude ; le niveau d'accès est vérifié à chaque action.
Un changement de niveau prend donc effet immédiatement, sans reconnecter le connecteur.

## Détails

**Options du thème.** Les réglages passent par le Customizer de WordPress, comme dans
Apparence › Personnaliser : c'est le thème qui valide chaque valeur. Fonctionne avec tous les
thèmes classiques (Catch Base, Astra, GeneratePress…).

**SEO.** Pont MCP écrit là où l'extension SEO active lit : Yoast SEO, Rank Math ou SEOPress.
Sans extension SEO, il affiche lui-même le titre, la meta description, la balise canonique, le
`noindex` et les balises Open Graph. All in One SEO n'est pas pris en charge (tables propres).

**Photos libres de droits.** Recherche dans [Openverse](https://openverse.org) (Flickr, Wikimedia
Commons…), licences commerciales par défaut. Citez l'auteur et la licence en légende (champ
`attribution` fourni), sauf CC0 / domaine public.

**Amazon.** Liens `https://www.amazon.fr/dp/ASIN?tag=VOTRE-TAG`, `rel="sponsored nofollow noopener"`,
mention « En tant que Partenaire Amazon… » ajoutée une fois en fin d'article et maintenue en
dernière position. Pas de prix (interdit par Amazon s'ils ne sont pas mis à jour en temps réel).

**Google Analytics.** Consent Mode v2 : tout est refusé par défaut, le bandeau Pont MCP
(Accepter / Refuser) met à jour le consentement. Les administrateurs connectés ne sont pas comptés.
Le shortcode `[pont_cookies]` affiche un lien « Gérer les cookies » (à placer dans les mentions
légales) pour revenir sur son choix. Désactivez le bandeau seulement si le site a déjà une solution
de consentement compatible Consent Mode.

**Polylang.** `create_content` avec `language` et `translation_of` crée une traduction liée ;
les catégories et étiquettes sont choisies ou créées dans la langue du contenu ;
`assign_menu_location` accepte `language` pour les menus par langue ; `add_menu_item` avec
`type: language_switcher` ajoute le sélecteur de langues dans un menu. `update_string_translations`
traduit le nom du site, le slogan et les autres chaînes (Langues › Traductions).

## Sécurité

- L'adresse du connecteur contient une clé secrète de 48 caractères. Seule son empreinte
  (SHA-256) est stockée. Ne la partagez pas ; en cas de doute, cliquez sur *Révoquer l'accès*.
- Claude agit au nom de l'administrateur qui a généré la clé : les droits WordPress s'appliquent.
- Les suppressions vont à la corbeille (contenus) ou dans les widgets inactifs ; les modifications
  de CSS sont conservées en révisions.
- Les métadonnées internes (commençant par `_`) ne sont pas modifiables par `update_meta`.
- Toutes les actions sont inscrites dans le journal d'activité de la page de réglages.
- La clé peut aussi être envoyée dans un en-tête `Authorization: Bearer …` au lieu de l'URL.

## Dépannage

- **Erreur 403** : clé révoquée ou régénérée ; recopiez la nouvelle adresse dans Claude.
  Avec **Wordfence**, un envoi rapide de nombreuses modifications peut aussi déclencher un blocage :
  vérifiez Wordfence › Pare-feu › Blocage, et autorisez la route `/wp-json/pont-mcp/v1/mcp`.
- **`fetch_site_url` échoue** : l'hébergeur bloque les requêtes du site vers lui-même (loopback).
  Les autres outils fonctionnent normalement.
- **Nouveaux outils absents dans Claude après une mise à jour** : ouvrez une nouvelle conversation.

## Technique

- WordPress 6.0+, PHP 7.4+.
- Protocole MCP en transport « Streamable HTTP », sans état (versions 2024-11-05 à 2025-06-18),
  exposé par l'API REST : `POST /wp-json/pont-mcp/v1/mcp`.
- Reconstruire le zip : `rm -f dist/pont-mcp.zip && zip -r dist/pont-mcp.zip pont-mcp`.
