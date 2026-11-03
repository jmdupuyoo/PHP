# Corrections d'anomalies — pages genres Cycadales (FR)

Date : 2026-10-01 — Outil : mcp__Succulentes_net__replace_in_content (ids ciblés, dry_run true puis false). Révisions WordPress conservées.

## 1. « Le genre Zamia » (id 3963) — 4 remplacements

- Lien cremnophila
  - Avant : `<a href="https://succulentes.net/cycadales/zamia/grijalvensis/" data-type="page" data-id="22333">Zamia cremnophila</a>`
  - Après : `<a href="https://succulentes.net/cycadales/zamia/cremnophila/" data-type="page" data-id="22338">Zamia cremnophila</a>` (URL vérifiée via get_content 22338, publiée, FR)
- Paramètre de suivi retiré (3 URL, bibliographie) :
  - `https://cycadlist.org/genus/Zamia?utm_source=chatgpt.com` → `https://cycadlist.org/genus/Zamia`
  - `https://iucn.org/our-union/commissions/group/iucn-ssc-cycad-specialist-group?utm_source=chatgpt.com` → sans paramètre
  - `https://www.cycadgroup.org?utm_source=chatgpt.com` → `https://www.cycadgroup.org`
  - Aucun `&utm_source=chatgpt.com` présent.

## 2. « Le genre Cycas » (id 1256) — 2 remplacements

- Phrase cassée (paragraphe sur les espèces rustiques, zones USDA 8b-9)
  - Avant : « La mise en place de protections hivernales permet d'e tenter ces cycadales en zone USDA d'étendre la culture de ces plantes. »
  - Après : « La mise en place de protections hivernales permet de tenter ces cycadales en zone USDA plus froide et d'étendre la culture de ces plantes. »
  - Note : la version EN (16282) ne contient pas d'équivalent ; correction minimale déduite du contexte (la phrase précédente cite les zones 8b-9). Aucun numéro de zone ajouté.
- Lien dolichophylla retiré
  - Avant : `<a href="https://succulentes.net/cycadales/cycas/"><em>Cycas dolichophylla</em></a>`
  - Après : `<em>Cycas dolichophylla</em>`
- `utm_source=chatgpt.com` : aucune occurrence.

## 3. « Le genre Encephalartos » (id 14229) — 15 remplacements

- Ouverture tronquée (sens repris de la version IT 11663 : « Le cicade del genere Encephalartos non sono, in senso stretto, piante succulente. Tuttavia, molte specie crescono in ambienti aridi o semi-aridi e condividono il loro habitat naturale con piante grasse. » ; la version EN 16289 n'a pas d'équivalent)
  - Avant : `<p>arides et partagent leur habitat avec des plantes grasses. Dans les collections privées, …`
  - Après : `<p>Les cycas du genre <em>Encephalartos</em> ne sont pas, au sens strict, des plantes succulentes. Toutefois, de nombreuses espèces poussent dans des milieux arides ou semi-arides et partagent leur habitat avec des plantes grasses. Dans les collections privées, …`
- Lien longifolius
  - Avant : `<a href="https://succulentes.net/it/piante/cycadales/encephalartos/longifolius/" data-type="page" data-id="12060">Encephalartos longifolius</a>`
  - Après : `<a href="https://succulentes.net/cycadales/encephalartos/longifolius/" data-type="page" data-id="1373">Encephalartos longifolius</a>` (id 1373, FR, publiée)
- Liens ajoutés dans la liste « Principales espèces cultivées » (avant : `<li><em>Encephalartos xxx</em></li>` ; après : `<li><em><a href="URL">Encephalartos xxx</a></em></li>`). Toutes les pages : FR, publiées, vérifiées via list_content.

| Espèce | id FR | URL |
|---|---|---|
| laurentianus | 12515 | https://succulentes.net/cycadales/encephalartos/laurentianus/ |
| lebomboensis | 2451 | https://succulentes.net/cycadales/encephalartos/lebomboensis/ |
| middelburgensis | 11822 | https://succulentes.net/cycadales/encephalartos/middelburgensis/ |
| msinganus | 5596 | https://succulentes.net/cycadales/encephalartos/msinganus/ |
| munchii | 12296 | https://succulentes.net/cycadales/encephalartos/munchii/ |
| paucidentatus | 12001 | https://succulentes.net/cycadales/encephalartos/paucidentatus/ |
| princeps | 2461 | https://succulentes.net/cycadales/encephalartos/princeps/ |
| sclavoi | 5560 | https://succulentes.net/cycadales/encephalartos/sclavoi/ |
| senticosus | 2480 | https://succulentes.net/cycadales/encephalartos/senticosus/ |
| transvenosus | 2502 | https://succulentes.net/cycadales/encephalartos/transvenosus/ |
| trispinosus | 2492 | https://succulentes.net/cycadales/encephalartos/trispinosus/ |
| villosus | 12642 | https://succulentes.net/cycadales/encephalartos/villosus/ |
| woodii | 10803 | https://succulentes.net/cycadales/encephalartos/woodii/ |

- `utm_source=chatgpt.com` : aucune occurrence.

## Vérification post-application

Dry-run de contrôle sur les 3 ids : plus aucune occurrence des chaînes fautives. Restent sans lien dans la liste Encephalartos : *E. manikensis* et *E. nubimontanus* (hors périmètre ; aucune fiche FR trouvée dans list_content « Encephalartos »).

## Points d'attention (non corrigés, hors périmètre)

- Encephalartos FR : la FAQ/texte contient la coquille « *Encephalartus longifolius* » (paragraphe Villa Thuret) et une balise `<em>` imbriquée (« Encephalartos <em>friderici-guilielmi</em> »).
- Zamia FR : « Zamia cremnophila » est indiquée « Mexique (Chiapas, Tabasco) » dans la liste, cohérent avec la fiche.
- Cycas EN (16282) : *Cycas dolichophylla* y pointe vers une fiche EN (16497) ; seule la FR n'a pas de fiche.
