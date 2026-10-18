# Incident de sécurité — succulentes.net (constaté le 17/10/2026)

## Constat (vérifié le 17/10/2026 vers 18 h 50 UTC)
- Avec un navigateur ordinaire (User-Agent Chrome) ou Googlebot, **toutes les adresses** de succulentes.net renvoient une page de spam en italien (fiches produits industriels : « Inversore K Con Enclave Meccanico… », « Bacinella Gastronorm… »), avec 163 liens vers www.ibs.it et des images Amazon/Pinterest. Code HTTP 200, balise canonical vers succulentes.net.
- Avec le User-Agent « curl/8.0 » (et via l'outil MCP du site), les vraies pages WordPress sont servies.
- La réponse « spam » ne porte pas les en-têtes WordPress (pas de `link: wp-json`, pas de cookie Polylang) : le code malveillant s'exécute **avant WordPress** (fichier `index.php`, `.htaccess`, `wp-config.php`, `auto_prepend_file` dans `.user.ini`/`php.ini`, ou mu-plugin).
- **Plan du site falsifié** : `sitemap_index.xml` servi à Googlebot liste des milliers de fausses URL `https://succulentes.net/product/…` (≈ 200 Ko). Toute adresse inventée (`/zz-test-….html`, `?p=999999`) renvoie aussi une page de spam : Google peut indexer un nombre illimité de pages de spam au nom du site.
- Première trace dans nos fichiers de travail : capture du 17/10/2026 à 16 h 11 (scratchpad a1b/live_msinganus.html). Début réel inconnu (nos contrôles précédents ne regardaient que le code 200).
- Autres sites du même hébergeur (o2switch) contrôlés comme Googlebot : zootropical.com, formationsoigneuranimalier.fr, formations-metiers-animaliers.com, apiculture.idlwt.com, idlwt.com → pages normales (contrôle sommaire de l'accueil et du plan du site).
- Contrôlé côté WordPress (lecture seule) : extensions (12, rien d'inconnu) et extraits Code Snippets (12, codes lus pour 5, 6, 7, 8, 10 : rien de malveillant). Le code malveillant n'est donc vraisemblablement pas dans un extrait ni dans une extension listée.

## Ce que le propriétaire doit faire (accès hébergeur nécessaires — Claude n'a pas accès aux fichiers)
1. **cPanel o2switch** : lancer l'antivirus (ImunifyAV / « Scanner de logiciels malveillants ») sur le compte ; contacter le support o2switch (ils aident au nettoyage).
2. Inspecter et comparer à une copie saine : `.htaccess` (racine et sous-dossiers), `index.php`, `wp-config.php`, `.user.ini` / `php.ini` (`auto_prepend_file`), `wp-content/mu-plugins/`, fichiers `.php` dans `wp-content/uploads/`, fichiers récemment modifiés (tri par date dans le gestionnaire de fichiers).
3. Remplacer le cœur WordPress par une copie propre (même version), réinstaller les extensions depuis wordpress.org.
4. **Changer tous les mots de passe** : cPanel, FTP/SFTP, base de données (et `wp-config.php`), comptes administrateurs WordPress ; vérifier la liste des utilisateurs administrateurs ; révoquer les mots de passe d'application et clés API inutiles (dont l'ancienne clé « Succulentes-1_2_5 », déjà révoquée côté Claude) ; régénérer les clés de sécurité (salts) de `wp-config.php`.
5. **Google Search Console** : rubrique « Problèmes de sécurité », supprimer le plan du site falsifié s'il a été soumis, soumettre le vrai plan du site après nettoyage, demander un réexamen ; surveiller les pages indexées en `/product/`.
6. Après nettoyage, prévenir Claude : contrôle avec plusieurs User-Agents, vérification du plan du site et des fausses URL.

## Attention à la restauration d'une sauvegarde
Une restauration de la base de données (WP BackItUp) antérieure au 17/10 effacerait les modifications de contenu publiées depuis la date de la sauvegarde (nettoyage FR et compléments IT des 13-17/10). Les brouillons de toutes ces pages sont dans le dépôt (`pilotes/espece-*-fr.html`, `-it.html`, journal `restructuration-fr.md`) et peuvent être republiés. Préférer un nettoyage des fichiers (le contenu en base n'est pas en cause d'après les contrôles) à une restauration complète.

## Travail de contenu
Suspendu par Claude le 17/10/2026 après le lot IZ4, en attendant le nettoyage.

## Diagnostic et nettoyage (18/10/2026, avec le propriétaire, Terminal cPanel)
- Scan ImunifyAV du compte (/home/idje4654, 12 894 fichiers) : « aucun logiciel malveillant » — le code n'a pas été détecté.
- `index.php`, `.htaccess`, début et fin de `wp-config.php` : normaux. `.user.ini` : `auto_prepend_file` vers `wordfence-waf.php`, fichier d'origine de Wordfence (extension désinstallée), sain. Pas de `wp-content/mu-plugins`. Crontab : seulement la tâche Redis d'o2switch.
- `wp core verify-checksums` : **`wp-settings.php` modifié** et **fichier en trop `wp-includes/sodium_compat/namespaced/Core/XChaCha20-widget.php`** (19 883 octets, date antidatée au 6 févr. 2020). `wp plugin verify-checksums --all` : aucune anomalie.
- Diff avec WordPress 7.1.3 propre : une ligne ajoutée en ligne 52 de `wp-settings.php` : `require ABSPATH . WPINC . '/sodium_compat/namespaced/Core/XChaCha20-widget.php';`
- Nettoyage : copie du `wp-settings.php` infecté et du fichier pirate dans `~/quarantaine` (hors du site), remplacement de `wp-settings.php` par la version propre, `verify-checksums` → « Success » (seul reste `wp-admin/error_log`, sans danger).
- Contrôle externe après nettoyage (18/10/2026) : accueil, fiche, adresse inventée, avec User-Agent Chrome et Googlebot → vraies pages (404 pour l'adresse inventée), `sitemap_index.xml` normal (post-sitemap, page-sitemap…), ancienne URL `/product/…` → 404.

## Reste à faire (propriétaire)
1. Changer les mots de passe : cPanel, FTP/SFTP, base de données (puis mettre à jour `wp-config.php`), administrateurs WordPress ; vérifier la liste des administrateurs (Utilisateurs → filtre « Administrateur ») et supprimer tout compte inconnu ; révoquer les mots de passe d'application inutiles.
2. Point d'entrée inconnu : regarder les journaux d'accès bruts du cPanel (« Visiteurs » / « Journaux d'accès bruts ») et `wp-admin/error_log` autour de la date d'apparition ; supprimer les extensions inactives (Site Kit by Google, WP Duplicate Page) ; envisager de réactiver les mises à jour automatiques (ligne `AUTOMATIC_UPDATER_DISABLED` dans `wp-config.php`).
3. Google Search Console : « Problèmes de sécurité » (demander un réexamen si signalé), « Sitemaps » (renvoyer `sitemap_index.xml`), « Pages » / « Suppressions » pour les URL `/product/…` déjà indexées (elles renvoient maintenant 404 et sortiront de l'index).
4. Supprimer `~/wpclean` (copie de WordPress ayant servi à la comparaison) ; garder `~/quarantaine` quelques semaines.
5. Contrôle périodique : relancer `wp core verify-checksums` de temps en temps.

## Suivi du 18/10/2026
- Mot de passe de la base de données changé par le propriétaire et reporté dans `wp-config.php` (une première tentative a donné « Error establishing a database connection », corrigée). Contrôle externe : site en 200 (curl, Chrome, Googlebot), API REST et accès MCP fonctionnels, 2 423 pages et 355 articles publiés (inchangés).
- FTP : aucun compte supplémentaire (seulement les comptes spéciaux idje4654 et idje4654_logs).
- Administrateurs WordPress : 2 comptes, tous deux connus du propriétaire — admin-succulentes (propriétaire) et Nilo (compte utilisé par l’outil OpenClaw du propriétaire ; snippet 10 « Nilo Translation API » associé). Conseillé : renouveler mots de passe et mots de passe d’application des deux comptes.
- 18/10/2026 : compte Nilo supprimé par le propriétaire ; snippet 10 « Nilo Translation API » désactivé par Claude (réversible). Site contrôlé en 200 ensuite.
- 18/10/2026 : Google Search Console, « Problèmes de sécurité » : aucun problème détecté. Reste conseillé : renvoyer sitemap_index.xml, surveiller les pages indexées en /product/ (404 désormais).
- Travail de contenu repris le 18/10/2026 (lot IC1).
- 18/10/2026 : extensions — mises à jour automatiques réactivées par le propriétaire (ligne AUTOMATIC_UPDATER_DISABLED retirée) ; **WP BackItUp Community Edition 2.1.0 fermé sur wordpress.org depuis le 20/08/2026** (« temporary, pending a full review ») : plus de mises à jour, point d’entrée possible (non prouvé). Conseillé : vérifier JetBackup (o2switch), supprimer WP BackItUp et ses archives. Dossiers wpbackitup_backups / wpbackitup_restore non accessibles depuis le web (404).

## Datation (journaux d'accès, 18/10/2026)
- Demandes `/product/…` servies en 200 : aucune avant le 14/10 ; 14/10 : 23 624 ; 15/10 : 104 812 (exploration massive, sans doute Googlebot) ; 16/10 : 11 513 ; 17/10 : 5 814 ; 18/10 : 4 884 (avant le nettoyage). **Début du piratage : 14 octobre 2026.**
- `/stats.php` (404) : à partir du 15/10, depuis des connexions résidentielles italiennes (109.x, 151.x, 101.x) — vraisemblablement des visiteurs arrivés sur les fausses pages depuis Google Italie (compteur du pirate). 119 (15/10), 264 (16/10), 225 (17/10), 126 (18/10).
- Sonde `/z9x8c7v6b5-debug-trigger-…` (1er-14/10) : scanner générique hébergé chez Google Cloud (34.x, 35.x, 136.x), sans lien établi avec l'intrusion.
- Autres 404 : sondes de failles habituelles (phpinfo, credentials.json, cgi-bin, xmlrpc…), toutes sans effet.
- Point d'entrée : à rechercher dans les POST et les fichiers .php appelés les 13-14/10.

## Pistes d'entrée (18/10/2026)
- Première fausse page servie : 14/10/2026 16:02:47 (heure du serveur).
- 13/10/2026 00:40-00:46 : l'IP 62.60.130.111 parcourt un à un les fichiers internes de WordPress (wp-includes/*.php, wp-content/languages/*.l10n.php) et teste wp-login.php (reconnaissance de version). À suivre.
- 13/10/2026 01:06 : POST wp-login.php depuis 47.76.111.197 (Alibaba Cloud), réponse 200 = échec de connexion.
- **Clé Pont MCP transmise dans l'URL (`?cle=…`)** : elle figure en clair dans les journaux d'accès (et a été recopiée dans la conversation). Accès complet au site, y compris les extraits Code Snippets (exécution de PHP) → point d'entrée possible si la clé a fuité. Demandé au propriétaire : régénérer la clé (Réglages → Pont MCP) et mettre à jour le connecteur Claude ; vérifier les IP appelant /wp-json/pont-mcp/ (attendu : 160.79.x, Anthropic). Amélioration souhaitable du plugin : accepter la clé dans un en-tête HTTP plutôt que dans l'URL.

## Point d'entrée identifié (journaux, 18/10/2026)
14/10/2026, heure du serveur, IP **23.160.56.155** :
- 15:38:39 `GET /wp-content/plugins/wp-duplicate-page/includes/Classes/ControllerBackup.php?<base64>` → 200 (extension **WP Duplicate Page, inactive**, appelée directement : exploitation)
- 15:41:58 `GET /import.php?g=<code>` → 200 (fichier dropper/porte dérobée à la racine)
- 15:44:06 `GET /item/default.php?act=ini&ms=-1` → 200 (seconde porte dérobée)
- 16:02:47 première fausse page `/product/…` servie.
Reconnaissance préalable : 62.60.130.111 les 11/10 (296 requêtes) et 13/10 (300 requêtes). Sondes génériques 14/10 15:01-15:05 (136.110.117.198 : php-cgi, graphql…) sans effet.
**À vérifier/faire immédiatement** : présence de `import.php`, `item/`, `wp-content/plugins/wp-duplicate-page/` → quarantaine/suppression ; fichiers créés le 14/10 (recherche par ctime) ; requêtes POST wp-login.php en 302 du 15 au 18/10 (lostpassword ou connexions réussies ?).
La clé Pont MCP n'est donc pas le point d'entrée (appels venant d'Anthropic 160.79.x dans l'extrait), mais doit être régénérée car exposée.

## Correction : entrée par un mot de passe administrateur valide (18/10/2026)
Journaux, 14/10/2026 :
- 09:09:51 202.191.122.79 `POST /wp-login.php` → 302 (probable test du mot de passe).
- 10:54:52 **62.210.254.213** `POST /wp-login.php` → 302 puis `GET /wp-admin/` → 200 : **connexion administrateur réussie**.
- 10:54:53 `GET /wp-admin/plugin-install.php?tab=upload` ; 10:54:54 `POST /wp-admin/update.php?action=upload-plugin` → **téléversement d'une fausse extension « WP Duplicate Page »** (porte dérobée, laissée inactive) ; 10:54:57 appels à `ControllerBackup.php` et `recommended-modules/TrackerGenerator.php`.
- 15:38-16:09 (23.160.56.155) : utilisation de la porte dérobée → `import.php`, `item/default.php` → injection dans `wp-settings.php` et fichier `XChaCha20-widget.php` → spam dès 16:02:47 → `item/default.php?act=del` (effacement des outils).
Les autres POST wp-login en 302 (15-17/10, IP du monde entier) sont suivis d'un retour à `wp-login.php` : tentatives échouées.
Conclusion : **identifiants d'un administrateur compromis** (admin-succulentes ou Nilo/OpenClaw — à déterminer via `wp user meta get admin-succulentes session_tokens`). Fausse extension supprimée (18/10), dossier `item/` supprimé, aucun autre fichier créé/modifié entre le 14 et le 17/10 hors traductions et `.htaccess` (contenu normal).
Mesures : nouveau mot de passe WordPress unique, `wp config shuffle-salts`, double authentification (extension « Two-Factor »), recherche de la fuite (réutilisation du mot de passe, outil tiers, logiciel espion sur l'ordinateur), mot de passe et 2FA Gmail.
- 18/10/2026 : `wp config shuffle-salts` exécuté par le propriétaire (toutes les sessions invalidées) ; site et accès Pont MCP vérifiés ensuite.
