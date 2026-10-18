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
