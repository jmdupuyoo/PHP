# Pont MCP — connecter un site WordPress à Claude

Pont MCP est une extension WordPress qui transforme votre site en **connecteur Claude**
(serveur MCP). Une fois installée, Claude peut, depuis claude.ai ou l'application :

- analyser le site : thème, extensions, HTML réel des pages, feuilles de style ;
- lire, rédiger et modifier articles et pages (brouillon par défaut) ;
- gérer catégories et étiquettes ;
- importer des images depuis une URL, avec texte alternatif et image mise en avant ;
- retoucher le **design** via le CSS additionnel, chaque version restant restaurable.

Aucun service intermédiaire ni abonnement : l'extension s'installe sur autant de sites que
vous voulez (succulentes.net, zootropical.com, formationsoigneuranimalier.fr…).

## Installation

1. Téléchargez [`dist/pont-mcp.zip`](dist/pont-mcp.zip).
2. WordPress › **Extensions › Ajouter › Téléverser une extension**, choisissez le zip, puis activez.
3. **Réglages › Pont MCP** › *Générer l'adresse du connecteur* et copiez l'adresse (affichée une seule fois).
4. Choisissez le **niveau d'accès** :
   | Niveau | Ce que Claude peut faire |
   |---|---|
   | Lecture seule | Consulter le site, rien modifier |
   | Brouillons (par défaut) | Créer et modifier des brouillons, importer des images. Rien ne change en ligne |
   | Complet | Publier, modifier les contenus en ligne et le CSS du site |
5. Dans Claude : **Paramètres › Connecteurs › Ajouter un connecteur personnalisé**, collez l'adresse
   (laissez les champs OAuth vides).

## Exemples de demandes

- « Analyse le design de succulentes.net et propose une charte plus moderne. »
- « Applique la nouvelle palette de couleurs au CSS du site. » (niveau Complet)
- « Rédige un brouillon de fiche de culture pour l'Echeveria elegans, catégorie Crassulacées. »
- « Liste les articles sans image mise en avant. »

## Outils disponibles

| Outil | Rôle | Niveau |
|---|---|---|
| `site_overview` | Vue d'ensemble du site | Lecture |
| `theme_info` | Thème, réglages du Customizer, styles globaux, modèles | Lecture |
| `fetch_site_url` | HTML/CSS réel d'une page du site | Lecture |
| `list_content` / `get_content` | Parcourir et lire les contenus | Lecture |
| `list_terms` / `list_media` / `list_menus` / `list_plugins` | Inventaires | Lecture |
| `get_custom_css` | CSS additionnel et révisions | Lecture |
| `create_content` / `update_content` / `trash_content` | Rédaction (brouillons, ou en ligne au niveau Complet) | Brouillons |
| `create_term` / `upload_media` | Catégories, images | Brouillons |
| `update_custom_css` / `restore_custom_css` | Modifier ou restaurer le CSS du site | Complet |

## Sécurité

- L'adresse du connecteur contient une clé secrète de 48 caractères. Seule son empreinte
  (SHA-256) est stockée. Ne la partagez pas ; en cas de doute, cliquez sur *Révoquer l'accès*.
- Claude agit au nom de l'administrateur qui a généré la clé : les droits WordPress s'appliquent.
- Les suppressions vont à la corbeille ; les modifications de CSS sont conservées en révisions.
- Toutes les actions sont inscrites dans le journal d'activité de la page de réglages.
- La clé peut aussi être envoyée dans un en-tête `Authorization: Bearer …` au lieu de l'URL.

## Dépannage

- **Erreur 403** : clé révoquée ou régénérée ; recopiez la nouvelle adresse dans Claude.
- **`fetch_site_url` échoue** : l'hébergeur bloque les requêtes du site vers lui-même (loopback).
  Les autres outils fonctionnent normalement.
- **Extension de sécurité bloquant l'API REST** : autorisez la route `/wp-json/pont-mcp/v1/mcp`.

## Technique

- WordPress 6.0+, PHP 7.4+.
- Protocole MCP en transport « Streamable HTTP », sans état (versions 2024-11-05 à 2025-06-18),
  exposé par l'API REST : `POST /wp-json/pont-mcp/v1/mcp`.
- Reconstruire le zip : `cd /chemin/du/depot && rm -f dist/pont-mcp.zip && zip -r dist/pont-mcp.zip pont-mcp`.
