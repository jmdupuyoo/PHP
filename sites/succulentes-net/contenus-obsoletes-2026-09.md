# succulentes.net : inventaire des contenus obsolètes (candidats à la suppression)

Audit en **lecture seule** réalisé le 2026-09-29 via le serveur MCP « Succulentes_net-dff4ca64 ». Rien n'a été modifié.

## Méthode

- Inventaire complet : 1 835 pages publiées et 351 articles publiés (fr, en, es, it), plus tous les statuts draft, pending, private, future et trash (`list_content`).
- Contenus vides ou quasi vides : repérés par un extrait automatique vide ou très court, puis contrôlés un par un avec `get_content` (HTML brut). Contrôle côté visiteur sur un cas (it 21293) avec `fetch_site_url` : `<div class="entry-content"></div>` vide. Les pages vides le sont donc aussi pour le visiteur ; ce n'est pas un effet de page builder.
- Doublons : regroupement par (langue, titre normalisé), par (langue, slug sans suffixe « -2 ») et par nom de famille botanique, puis similarité de titres entre articles. Les longueurs ont été mesurées sur le HTML servi aux visiteurs.
- Menus : vérifiés avec `list_menus`. Les menus actifs sont « Rubriques (fr/en/es/it) » et « Principal ».
- Nombre de mots : texte visible du contenu, sans le HTML (≈ = estimation).

Statuts `pending`, `private` et `future` : **aucun contenu**, pages comme articles.

---

## 1. Brouillons (status draft)

| ID | Langue | Type | Titre | Date | Adresse | Mots | Raison | Recommandation |
|---|---|---|---|---|---|---|---|---|
| 21177 | en | page | « f » | 2026-05-01 | /en/?page_id=21177 | 0 (contenu vide, pas de slug) | Brouillon créé par erreur, sans titre réel ni contenu, sans traduction | **Supprimer** |
| 17048 | en | page | « concinnus » | 2026-03-15 | /en/?page_id=17048 | 0 (vide) | Doublon vide de la fiche publiée **17056 « Encephalartos concinnus »** (/en/cycads/encephalartos/concinnus/) | **Supprimer** |
| 18133 | fr | page | « fraseri » | 2026-03-21 | /?page_id=18133 | 0 (un paragraphe vide) | Ébauche jamais rédigée. Elle est pourtant liée par Polylang comme traduction FR de la fiche EN publiée 18134 « Macrozamia fraseri ». | **Supprimer** (ou la rédiger si une fiche FR de Macrozamia fraseri est prévue). La suppression libère le lien de traduction. |

Aucun brouillon parmi les articles.

---

## 2. Pages publiées vides ou quasi vides (moins de ~50 mots)

### 2a. Totalement vides (0 mot), à traiter

| ID | Langue | Type | Titre | Adresse | Mots | Contexte | Recommandation |
|---|---|---|---|---|---|---|---|
| 17597 | fr | page | Le genre Haworthiopsis | /aloides/haworthiopsis/ | 0 (paragraphe vide) | Page de genre vide. Aucune fiche FR enfant. Traduction EN 17599 publiée (avec fiches attenuata et fasciata). | **Supprimer** avec une redirection 301 vers /aloides/ (24878). Autre option : traduire depuis 17599. |
| 23486 | es | page | Crassulaceae — La gran familia de las crasas | /es/crassulaceae-2/ | 0 (contenu vide) | **Page parente de 11 pages ES** (Kalanchoe, Echeveria, Crassula, Sedum, Sempervivum et leurs espèces : 23437 à 23442, 23583 à 23588). Aucune traduction liée. | **Garder et rédiger** (page pivot). La supprimer changerait l'adresse des 11 pages enfants. Ensuite, la lier aux familles Crassulaceae fr/en/it. |
| 11035 | fr | page | Jardin zoologique tropical | /jardin-botanique/europe/jardin-zoologique-tropical/ | 0 | Fiche jardin vide, enfant de 11025 « Jardins botanique en Europe ». Le sujet est traité dans l'article **234** « Jardin zoologique tropical, La Londe-les-Maures ». | **Supprimer** avec une 301 vers l'article 234 (ou rédiger la fiche) |
| 21312 | it | page | Fouquieria shrevei | /it/piante/fouquieriaceae/fouquieria/shrevei/ | 0 | Traductions FR 21136 et EN 21236 publiées, avec contenu | **Supprimer** (ou repasser en brouillon) avec une 301 vers /it/piante/fouquieriaceae/fouquieria/ (21273), puis traduire plus tard |
| 21308 | it | page | Fouquieria burragei | /it/piante/fouquieriaceae/fouquieria/burragei/ | 0 | FR 21140 et EN 21211 publiées | Même traitement que 21312 |
| 21302 | it | page | Fouquieria macdougalii | /it/piante/fouquieriaceae/fouquieria/macdougalii/ | 0 | FR 21101 et EN 21220 publiées | Même traitement que 21312 |
| 21293 | it | page | Fouquieria splendens | /it/piante/fouquieriaceae/fouquieria/splendens/ | 0 (vérifié côté visiteur) | FR 4147 et EN 21206 publiées | Même traitement que 21312 |
| 13491 | it | page | Yucca elata | /it/piante/agavoidi/yucca/elata/ | 0 | FR 2777 et EN 15405 publiées | **Supprimer ou brouillon**, avec une 301 vers /it/piante/agavoidi/yucca/ (12727) |
| 18748 | en | page | Cycas chevalieri | /en/cycads/cycas/chevalieri/ | 0 | FR 21892 publiée, avec contenu | **Supprimer ou brouillon**, avec une 301 vers /en/cycads/cycas/ (16282) |
| 21867 | fr | page | Cycas dolichophylla | /cycadales/cycas/dolichophylla/ | 0 (paragraphe vide) | EN 16497 publiée | **Supprimer ou brouillon**, avec une 301 vers /cycadales/cycas/ |
| 16752 | fr | page | Encephalartos latifrons | /cycadales/encephalartos/latifrons/ | 0 (paragraphe vide) | EN 17086 publiée | **Supprimer ou brouillon**, avec une 301 vers /cycadales/encephalartos/ (14229) |
| 16863 | fr | page | Encephalartos septentrionalis | /cycadales/encephalartos/septentrionalis/ | 0 | EN 16867 publiée | Même traitement que 16752 |
| 22170 | fr | page | Dracaena arborea | /agavoides/dracaena/arborea/ | 0 | EN 22173 publiée | **Supprimer ou brouillon**, avec une 301 vers /agavoides/dracaena/ (3381) |

### 2b. Quasi vides (moins de 50 mots), fiches minimales

| ID | Langue | Type | Titre | Adresse | Mots | Recommandation |
|---|---|---|---|---|---|---|
| 10383 | fr | page | Nymphaea 'Wood's White Knight' | /famille-nymphaeaceae/nymphaea/woods-white-knight/ | ≈ 25 (une phrase et une image) | **Compléter**, ou supprimer avec une 301 vers /famille-nymphaeaceae/nymphaea/ (10030) |
| 10362 | fr | page | Nymphaea 'Emily Grant Hutchings' | /famille-nymphaeaceae/nymphaea/emily-grant-hutchings/ | ≈ 25 | Même traitement que 10383. L'image mise en avant s'appelle « nymphaea-red-flare » : vérifier qu'elle correspond bien. |
| 10300 | fr | page | Nymphaea 'Siam Pink' | /famille-nymphaeaceae/nymphaea/nymphaea-siam-pink/ | ≈ 25 | Même traitement que 10383 |
| 10253 | fr | page | Nymphaea odorata 'Sulphurea' | /famille-nymphaeaceae/nymphaea/sulphurea/ | ≈ 20 | Même traitement que 10383 |
| 3539 | fr | page | Adenium socotranum | /famille-apocynaceae/adenium/socotranum/ | ≈ 25 | **Compléter**, ou supprimer avec une 301 vers /famille-apocynaceae/adenium/ (3512) |
| 2819 | fr | page | Le genre Neobuxbaumia | /famille-cactaceae/neobuxbaumia/ | ≈ 20 (une phrase et une liste de 2 espèces) | **Garder et compléter** : c'est une page parente (au moins 2824 Neobuxbaumia polylopha) |

### 2c. Vides ou courtes mais à garder (pas des candidats)

| ID | Langue | Titre | Adresse | Mots | Pourquoi garder |
|---|---|---|---|---|---|
| 9 | fr | Blog | /blog/ | 0 | Page des articles de WordPress, dans les menus « Rubriques (fr) » et « Principal » |
| 15072 | en | Blog | /en/articles/ | 0 | Même rôle, dans le menu « Rubriques (en) » |
| 11688 | it | Blog | /it/blog-2/ | ≈ 20 | Même rôle, dans le menu « Rubriques (it) » |
| 24710, 24691, 24692, 24693 | fr/en/it/es | Campus | /campus/, /en/campus-en/, … | < 300 (audit SEO) | Pages récentes (28/09), présentes dans les menus Rubriques |
| 24688, 24689, 24690 | en/it/es | Botanical gardens / Giardini / Jardines | /en/gardens/, … | < 300 | Dans les menus Rubriques |
| 8 | fr | Contact | /contact/ | ≈ 15 | Page de contact, dans le menu « Principal » |

---

## 3. Doublons, pages de test, titres suspects

### 3a. Pages

| ID | Langue | Type | Statut | Titre | Adresse | Mots | Raison | Recommandation |
|---|---|---|---|---|---|---|---|---|
| **23535** | es | page | publish | Agave ocahui | /es/agavaceae/agave/ocahui/ | 911 | **Doublon** de 23950, sur la même espèce, dans la même langue et sous le même parent. Plus courte et sans traduction liée. | **À fusionner avec l'ID 23950** : reprendre les éléments utiles, supprimer 23535, rediriger en 301 vers 23950, puis renommer le slug de 23950 « ocahui-2 » en « ocahui » |
| 23950 | es | page | publish | Agave ocahui | /es/agavaceae/agave/ocahui-2/ | 1 761 | Version la plus complète (slug « -2 » parce que 23535 occupe « ocahui ») | **Garder** (version de référence) |
| **18366** | fr (étiquetée) | page | publish | Succulent Apocynaceae | /succulent-apocynaceae/ | 2 793 | Page égarée : **contenu entièrement en anglais mais langue Polylang = fr**, placée à la racine. Quasi identique à la page EN **18426 « Family Apocynaceae »** (/en/apocynaceae/, 2 771 mots). Polylang la déclare comme traduction FR de 18426 : la vraie page FR **23902 « La famille Apocynaceae »** (/famille-apocynaceae/) se retrouve hors du groupe de traductions. | **À fusionner avec l'ID 18426** (doublon), puis **supprimer** avec une 301 vers /famille-apocynaceae/ (ou /en/apocynaceae/) et relier 23902 comme traduction FR de 18426 |
| **14789** | aucune langue | page | publish | Succulents and other remarkable exotic plants | /plants-gardens/ | ≈ 450 | Ancienne version anglaise de la page d'accueil, **sans langue Polylang**, hors de /en/. Doublon de la page d'accueil EN **14798 « Succulent's guide »** (/en/succulents-guide/, 448 mots, dans le menu Rubriques en). | **À fusionner avec l'ID 14798**, puis **supprimer** avec une 301 de /plants-gardens/ vers /en/succulents-guide/ |

Recherche de titres de test (« f », « test », « copie », « copy », « copia », « untitled », « essai ») parmi les contenus publiés : **aucun résultat**. Les seuls titres de ce type sont le brouillon 21177 « f » et des contenus déjà dans la corbeille (section 5).

### 3b. Articles : sujets en doublon dans une même langue (cannibalisation SEO)

Ces paires sont repérées d'après le titre, l'adresse et l'extrait. Le texte n'a pas été comparé mot à mot : **vérifier avant de fusionner**.

| IDs | Langue | Titres | Recommandation |
|---|---|---|---|
| 23476 / 23152 | es | « Cultivo del Aloe vera: guía completa » (13/09, /es/cultivo-aloe-vera/) et « Cómo cultivar Aloe vera: guía completa de cuidados… » (09/09, /es/como-cultivar-aloe-vera-guia-completa/) | **Fusionner** dans un seul article, avec une 301 |
| 23107 / 23215 | es | « ¿Por qué mi cycas tiene hojas amarillas? » et « Cycas revoluta con hojas amarillas: diagnóstico y soluciones » | **Fusionner**, avec une 301 |
| 23246 / 23217 | es | Deux articles sur la cochenille Aulacaspis yasumatsui (cicadáceas / cycas) | **Fusionner**, avec une 301 |
| 15686 / 15590 | it | « Cycas in vaso: cura, rinvaso… » et « Cycas in vaso: rinvaso, substrato e cura in appartamento » | **Fusionner**, avec une 301 |
| 15572 / 13313 | it | Guide complet Cycas et guide complet Cycas revoluta | Vérifier le recouvrement : fusionner ou bien différencier |
| 3814 / 7851 | fr | « Des plantes grasses d'extérieur qui ne gèlent pas » (2021) et « Plantes grasses pour extérieur qui ne gèlent pas » (2022, slug `…-2`) ; voir aussi l'article 417 « Comment cultiver des plantes grasses en extérieur ? » | **Fusionner**, avec une 301 (le slug « -2 » confirme le doublon) |
| 3809 / 9496 | fr | « Rempoter un cactus sans se piquer » (2021) et « Rempotage d'un cactus » (2023) | **Fusionner**, avec une 301 |
| 655 / 5769 | fr | « Floraison des agaves » (2021) et « Agave en fleur : tout savoir sur sa floraison » (2022, réécrit en 2026) | **Fusionner 655 dans 5769**, avec une 301 |
| 3803 / 5702 | fr | « Quel terreau pour cactus » et « Quelle terre pour les succulentes en pot ? » | Recouvrement partiel : garder les deux ou fusionner |
| 11922 / 12197 | fr | Feuilles jaunes d'un palmier en pot / Washingtonia aux feuilles jaunes | Recouvrement partiel : garder, avec des liens croisés |

Anomalie sans rapport avec l'obsolescence : l'article EN **18341** (Titan Arum) a pour slug « 18341-2 » (/en/18341-2/). Il faut lui donner un slug lisible, et non le supprimer.

---

## 4. Pages égarées signalées

| ID | Langue | Type | Statut | Titre | Adresse | Mots | À quoi sert-elle ? | Recommandation |
|---|---|---|---|---|---|---|---|---|
| **1228** | fr | page | publish | Merci à vous ! | /merci-a-vous/ | ≈ 90 | **Page de remerciement d'un formulaire d'inscription à la newsletter** (2021) : « nous vous avons envoyé un message électronique de confirmation… cliquez sur le lien ». C'est la page affichée après l'envoi du formulaire, avant la confirmation (double opt-in). | **Garder** (page de formulaire). Vérifier dans l'outil d'emailing si elle est encore l'URL de redirection. La passer en noindex (elle est dans le sitemap). |
| **12296** | fr | page | publish | Encephalartos munchii | **/merci-a-vous/munchii/** | ≈ 1 800 | **Vraie fiche espèce complète**, rattachée par erreur à la page parente 1228 « Merci à vous ! ». C'est la seule fiche FR de cette espèce. Pas de traduction liée, alors que la fiche EN 17030 existe (/en/cycads/encephalartos/munchii/). Le lien interne pointe vers une ancienne adresse du genre (/especes-plantes-grasses/cycadales/encephalartos/). | **Garder, NE PAS supprimer**. Changer la page parente pour 14229 « Le genre Encephalartos » (nouvelle adresse /cycadales/encephalartos/munchii/), ajouter une 301 depuis /merci-a-vous/munchii/ et la lier à l'EN 17030 |
| **18366** | fr (étiquetée) | page | publish | Succulent Apocynaceae | /succulent-apocynaceae/ | 2 793 | Page pivot en anglais, mal classée en FR (voir 3a) | **À fusionner avec 18426, puis supprimer** avec une 301 |
| **21650** | fr | page | publish | Les plantes aquatiques | /plantes-aquatiques/ | ≈ 3 500 | Page pivot FR sérieuse et très complète : définition, catégories, lotus et nénuphar, familles, usages, Latour-Marliac et Monet, bibliographie. Elle est à la racine, sans page parente ni traduction, mais ce n'est pas un contenu obsolète. | **Garder**. La lier depuis la famille Nymphaeaceae (24877) et le genre Nymphaea (10030), éventuellement la placer sous un parent. Traductions à prévoir. |
| **22772** | fr | page | publish | Merci | /merci/ | ≈ 35 | **Page de confirmation d'inscription à la newsletter** (« Votre inscription à notre liste de diffusion est confirmée »), créée le 25/08/2026. Traductions EN 22774 /en/thank-you/ et IT 22776 /it/grazie/. | **Garder** (page de fin du double opt-in). Passer les 3 pages en noindex (elles sont dans le sitemap). Il manque une version ES. |
| 22774 | en | page | publish | Thank you | /en/thank-you/ | ≈ 35 | Même rôle (EN) | **Garder** |
| 22776 | it | page | publish | Grazie | /it/grazie/ | ≈ 35 | Même rôle (IT) | **Garder** |

1228 et 22772 ne sont pas des doublons. 1228 dit « vérifiez votre boîte mail » (étape 1) ; 22772 dit « inscription confirmée » (étape 2).

---

## 5. Déjà dans la corbeille (status trash)

Pages (19) :

| ID | Langue | Titre |
|---|---|---|
| 24857 | fr | Test slug (à supprimer) |
| 23818 | es | Untitled |
| 23814 | fr | Untitled |
| 23113 | es | Guía de plantas ornamentales y suculentas |
| 23100 | es | Euphorbia balsamifera |
| 17616 | fr | Tulista |
| 5318 | fr | Le genre Melocactus |
| 5173 | fr | Le genre Stenocereus |
| 5160 | fr | Le genre Selenicereus |
| 5144 | fr | Le genre Myrtillocactus |
| 5131 | fr | Le genre Mammillaria |
| 5086 | fr | Le genre Cleistocactus |
| 5072 | fr | Le genre Cereus |
| 5061 | fr | Le genre Astrophytum |
| 5026 | fr | Le genre Schlumbergera |
| 3143 | fr | Le genre Echinocactus |
| 2929 | fr | Le genre Opuntia |
| 2890 | fr | Le genre Ferocactus |
| 2414 | fr | Le genre Echinopsis |

Articles (2) :

| ID | Langue | Titre |
|---|---|---|
| 23122 | it | TEST IT NILO |
| 23121 | en | TEST EN NILO |

Les anciennes pages de genres Cactaceae (2021-2022) ont été remplacées par de nouvelles pages, par exemple 23805 Melocactus et 23804 Cleistocactus sous /famille-cactaceae/. Avant de vider la corbeille, vérifier que les anciennes adresses (/especes-plantes-grasses/<genre>/, etc.) redirigent en 301.

---

## Récapitulatif des recommandations

- **Supprimer sans risque** : brouillons 21177 « f » et 17048 « concinnus » ; brouillon 18133 « fraseri » (sauf si une fiche FR est prévue).
- **Supprimer avec une 301 (ou repasser en brouillon)**, pages vides : 17597, 11035, 21312, 21308, 21302, 21293, 13491, 18748, 21867, 16752, 16863, 22170.
- **Fusionner, puis supprimer avec une 301** : 23535 vers 23950 (Agave ocahui es) ; 18366 vers 18426 (Apocynaceae) ; 14789 vers 14798 (accueil EN) ; paires d'articles de la section 3b.
- **Garder, mais corriger** : 12296 munchii (changer la page parente, ajouter une 301, lier la traduction) ; 23486 es Crassulaceae (à rédiger : page parente de 11 pages) ; 2819 Neobuxbaumia (à compléter) ; 21650 plantes aquatiques (à relier).
- **À compléter ou supprimer (au choix éditorial)** : fiches minimales 10383, 10362, 10300, 10253 et 3539.
- **Garder** : 1228, 22772, 22774 et 22776 (pages de remerciement ou de confirmation de formulaire, à passer en noindex) ; pages Blog 9, 15072 et 11688 (pages des articles, dans les menus) ; pages Campus et Jardins (dans les menus) ; 3 « Mentions légales et CGU », 7 « À propos », 8 « Contact ».

---

## Actions réalisées (29/09/2026)

- Corbeille : brouillons 21177, 17048, 18133 ; pages vides 17597 (Haworthiopsis), 21308, 21302, 21293 (it Fouquieria),
  13491 (it Yucca elata), 18748 (en Cycas chevalieri), 21867, 16752, 16863, 22170 (fr) ; doublons 23535 (es Agave ocahui),
  18366 (/succulent-apocynaceae/), 14789 (/plants-gardens/). Chaque adresse publiée est redirigée (301) vers la page parente ou l'original.
- 23950 renommée `ocahui` (ancienne `ocahui-2` redirigée) ; 23902 liée comme traduction FR de 18426.
- 12296 Encephalartos munchii déplacée sous 14229 → /cycadales/encephalartos/munchii/ (301 depuis /merci-a-vous/munchii/), liée à l'EN 17030.
- noindex : 1228, 22772, 22774, 22776 (pages de remerciement newsletter).
- Refusé par le contrôle de permissions, laissé au propriétaire : 11035 (fr « Jardin zoologique tropical », vide) et 21312 (it Fouquieria shrevei, vide).
- Non traité (décision éditoriale) : fiches d'une phrase (10383, 10362, 10300, 10253, 3539), es 23486 et fr 2819 à compléter,
  articles en double à fusionner (es 23476/23152, 23107/23215, 23246/23217 ; it 15686/15590 ; fr 3814/7851, 3809/9496, 655/5769).
