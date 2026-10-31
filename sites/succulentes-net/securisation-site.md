# Sécurisation de succulentes.net — marche à suivre (18/10/2026)

Suite à l'incident du 17/10/2026 (voir incident-securite-2026-10-17.md).

## Déjà fait
- [x] Code pirate retiré (`wp-settings.php` réparé, fichier `XChaCha20-widget.php` mis en quarantaine) ; contrôle externe OK.
- [x] Mot de passe de la base de données changé.
- [x] Compte administrateur « Nilo » supprimé ; snippet « Nilo Translation API » désactivé.
- [x] Mises à jour automatiques réactivées (ligne `AUTOMATIC_UPDATER_DISABLED` retirée de `wp-config.php`).
- [x] Google Search Console : aucun problème de sécurité ; sitemap renvoyé.

## À faire maintenant (par ordre d'importance)
1. [ ] **Mot de passe du cPanel** (cPanel → « Mot de passe et sécurité ») — il change aussi celui du FTP principal.
2. [ ] **Double authentification du cPanel** (cPanel → « Authentification à deux facteurs », avec une application comme Google Authenticator ou le trousseau iCloud).
3. [ ] **Mot de passe WordPress** du compte admin-succulentes (Utilisateurs → Modifier → Nouveau mot de passe).
4. [ ] **Mots de passe d'application** (même page, en bas) : révoquer ceux qui ne servent plus ; garder ceux de Pont MCP / Claude WP Editor si l'accès de Claude doit être conservé.
5. [ ] **WP BackItUp** : vérifier d'abord les sauvegardes JetBackup d'o2switch (cPanel → « JetBackup »), puis désactiver et supprimer l'extension (fermée sur wordpress.org depuis le 20/08/2026, plus de mises à jour), puis supprimer ses archives (voir commande ci-dessous).
6. [ ] **Extensions inactives** : supprimer Site Kit de Google et WP Duplicate Page.
7. [ ] **Mise à jour en attente** : Easy Table of Contents 2.0.89.
8. [ ] **Interdire l'éditeur de fichiers de WordPress** : dans `wp-config.php`, ajouter juste avant la ligne `/* That's all, stop editing! */` :
   `define( 'DISALLOW_FILE_EDIT', true );`
9. [ ] **Renouveler les clés de sécurité** (déconnecte toutes les sessions, y compris d'éventuelles sessions volées) — Terminal : `cd ~/public_html && wp config shuffle-salts` (il faudra se reconnecter à WordPress ; prévenir Claude pour vérifier que son accès fonctionne toujours).
10. [ ] **Nettoyage** — Terminal : `rm -rf ~/wpclean` (garder `~/quarantaine` quelques semaines).

Commande pour repérer les archives de WP BackItUp :
`cd ~/public_html && ls -d wp-content/*backup* wp-content/*backitup* 2>/dev/null; du -sh wp-content/*backup* wp-content/*backitup* 2>/dev/null`

## Hygiène générale
- Un mot de passe différent et long pour chaque accès (cPanel, WordPress, messagerie, o2switch), rangé dans un gestionnaire de mots de passe.
- **Double authentification sur la messagerie Gmail** : c'est elle qui reçoit les réinitialisations de mots de passe.
- Ne pas donner de droits administrateur à un outil ou à une personne qui n'en a pas besoin ; supprimer les accès dès qu'ils ne servent plus.
- Mettre à jour régulièrement le Mac et le navigateur.

## Contrôle régulier (une fois par mois, 2 minutes)
Terminal du cPanel :
```
cd ~/public_html
wp core verify-checksums
wp plugin verify-checksums --all
```
Résultat attendu : « Success » (seul `wp-admin/error_log` peut être signalé, sans danger). Toute autre anomalie : prévenir Claude.
Claude peut aussi vérifier depuis l'extérieur que le site sert les mêmes pages aux navigateurs, à Google et aux outils (contrôle anti-« cloaking »).

## Autres sites o2switch
Faire le même contrôle (`wp core verify-checksums`, `wp plugin verify-checksums --all`) sur zootropical.com, formationsoigneuranimalier.fr, formations-metiers-animaliers.com, apiculture.idlwt.com et idlwt.com, depuis leur dossier respectif.
