# Note — *Cycas chevalieri* (EN 18748), https://succulentes.net/en/cycads/cycas/chevalieri/

## Restauration et réécriture du 21/10/2026 (lot CYC12, 5/5, cas particulier)

- État avant : page EN 18748 à la corbeille (slug `chevalieri__trashed`, contenu vide, parent 16282, dernière modification 29/09/2026), liée à FR 21892 / IT 28528 ; redirection Pont MCP `/en/cycads/cycas/chevalieri/` → `/en/cycads/cycas/` (créée le 29/09).
- Décision du propriétaire du 17/10 appliquée : **restauration** (update_content : publish, slug `chevalieri`, parent 16282, titre « Cycas chevalieri ») puis **réécriture complète** (update_content, contenu seul). Aucune nouvelle page créée.
- Redirection supprimée (delete_redirect) après republication. Contrôle : https://succulentes.net/en/cycads/cycas/chevalieri/ → **200 sans redirection** (curl et UA Chrome). Groupe Polylang vérifié par hreflang : fr 21892, it 28528, en 18748 (pas d'ES).
- Brouillon `pilotes/espece-cycas-chevalieri-en.html` (DSL scratchpad/cyc12/chevalieri-en.dsl) identique au contenu en ligne (verify_en.py : 106 blocs, 0 manquant ; 111/111 ouvertures/fermetures ; aucun commentaire visible ; aucun « »). ≈ 3 270 mots (Rank Math 3 232).
- SEO : « Cycas chevalieri: a Vulnerable cycad of central Vietnam » (55) ; meta 142 ; mot-clé « Cycas chevalieri » ; aucun problème. `<title>` vérifié (UA Chrome et curl). Aucune image.

## Sources
- Fond repris de la FR 21892 (réécrite le 13/10) et de l'IT 28528, revérifié : protologue Leandri 1931 (scan de la *Flore générale de l'Indo-Chine*, p. 1092), de Laubenfels & Adema 1998 (texte intégral), Flora of China (eFloras), WLoC 2026.08.15, Crossref (évaluations UICN 2010 et 2023), GBIF (catégorie VU ; clé 2683281).
- Ajouts par rapport à la FR : habitats des étiquettes GBIF (Hương Sơn et Rao An, Hà Tĩnh 1998 ; Phong Nha–Kẻ Bàng, Quảng Bình 2005 ; Tương Dương, Nghệ An 2007 ; 225 à ≈ 1 000 m) ; fiche du lectotype P (« donné par M. Auguste Chevalier en 1943 ») ; BGCI (Fairy Lake, Shenzhen ; Jardí Botànic Marimurtra, Blanes) ; chaîne cycasine → methylazoxymethanol, BMAA.
- Écarté (comme en FR) : mesures détaillées (feuilles 1,3-2,4 m, folioles 25-42 cm, cônes, graines) qui recoupent *balansae* s.l. de la FoC ; tige « souterraine » ; densités, phénologie, régénération (évaluation UICN non lue) ; bouturage par rejets ; section du genre.
- Wikipédia EN gardée pour la seule présence possible au Laos (citation de l'évaluation 2023), signalée comme telle dans le texte (comme la FR).
- Trebrown : zone USDA 9b présentée comme cote commerciale de pépinière, attribuée et non reprise comme résultat.
- Non consultés : Hill, Nguyễn & Lộc 2004 (payant), Liste rouge UICN et POWO (Cloudflare, non contourné), PalmTalk, Dave's Garden.

## Jardins UK/US/AU
- Aucun (BGCI, Montgomery, Fairchild, RBG Sydney, RBG Victoria). Hors de ces pays : Fairy Lake (Chine), Marimurtra (Espagne). Forum Fous de palmiers : jeunes plants achetés en 2019, sans suite. JZT : aucune observation publiée sur l'espèce.

## Liens
- Internes EN (200) : genre, *balansae*, *simplicipinna*, *beddomei*, *revoluta*, *Aulacaspis* ; Further reading : semis, toxicité.
- Index genre EN 16282 lié (simulation 1, application 1) ; lien entrant *tanqingii* 18728 (simulation 1, application 1 ; première occurrence, liste « Possible confusion ») ; brouillons alignés. *elongata* 18705 ne cite l'espèce que dans les sources (non lié) ; *balansae* 18635 et *simplicipinna* 18642 ne la citent pas.

## Points douteux
- Date de la collecte type donnée par WLoC (20/05/1841) manifestement fausse (Chevalier né en 1873) : signalée dans le texte.
- Critères UICN A4acd; B1ab(i-v) : WLoC les affiche avec le lien de l'évaluation 2023 mais cite celle de 2010 ; attribution non vérifiable.
- Nom vernaculaire « Cây ngen » : lecture du scan (OCR « Cay nger »), non confirmé par une source vietnamienne récente.
- *tanqingii* EN (18728) dit *chevalieri* « from Laos and Vietnam » (d'après Hill 2008) alors que la présence au Laos n'est pas confirmée : hors lot, signalé.

## Retouche 0 avant ZAM18 (25/10/2026)
- Mention visible du scan et de la reconnaissance automatique du texte retirée : « read on the scan of » supprimé ; nom « Cây ngen » attribué au protologue (« in the protologue ») ; Bibliographie « full text read ». Fait conservé (nom donné par Leandri 1931). Simulation puis application, brouillon aligné.
- FR 21892 (3 : « relue sur le scan », « lu sur le scan… reconnaissance automatique », « lu sur le scan » en bibliographie ; « Les sources accessibles » → « Les données publiées ») et IT 28528 (2 : « trascritto qui dalla scansione », « consultato sulla scansione ») corrigées de même le 25/10/2026 ; brouillons alignés.
- Reste (hors lot) : présence possible au Laos donnée « as quoted by the English-language Wikipedia (the only source read on this point) » (EN, et FR/IT) ; WLoC 86 (relue le 25/10) ne cite que le Vietnam ; à resourcer sur l'évaluation UICN 2023 quand la Liste rouge sera lisible.
