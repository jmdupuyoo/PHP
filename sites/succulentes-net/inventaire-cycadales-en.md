# Inventaire Cycadales EN et ES (19/10/2026)

Comptage par l'API REST (pages publiées sous /en/cycads/<genre>/<espèce>/ et /es/orden-cycadales/<genre>/<espèce>/).

| Genre | FR | EN | ES |
|---|---|---|---|
| Bowenia | 2 | 3 | 0 |
| Ceratozamia | 45 | 0 | 0 |
| Cycas | 122 | 39 | 19 |
| Dioon | 19 | 19 | 0 |
| Encephalartos | 65 | 60 | 0 |
| Lepidozamia | 2 | 2 | 0 |
| Macrozamia | 41 | 22 | 0 |
| Microcycas | 1 | 1 | 0 |
| Stangeria | 1 | 0 | 0 |
| Zamia | 88 | 19 | 0 |
| **Total** | **386** | **165** | **19** |

- EN : 156 des 165 fiches n'ont pas été modifiées depuis septembre 2026 (ancienne génération, mêmes défauts que les anciennes FR : à reprendre au gabarit récent d'après les FR/IT vérifiées). Environ 221 fiches EN à créer. Page ordre EN 15147 et 10 pages genre EN (16282-16335), datées du 29/09/2026.
- ES : page ordre 23482 et page genre Cycas 23432 seulement ; 19 fiches Cycas ; les 9 autres genres et environ 367 fiches à créer.
- Corrections EN déjà connues : chevalieri 18748 (corbeille : restaurer et réécrire), media 16423, skinneri 20387, roezlii 20467, ferruginea 18686, umbeluziensis 16978, pseudoparasitica 20068 ; « XX » dans 8 références Zamia EN ; « for SEO reasons » dans 2 pages EN ; article Lavaud ES 23244 (non lié dans Polylang, affirmation fausse sur ophiolitica et cairnsiana).

## Silo EN : réécriture (lots G1 et G2, 19/10/2026)

- **Variante d'anglais retenue : anglais britannique** (orthographe -ise/-our/-re, « glasshouse », « garden centre », « poison centre », « vet » ; °C puis °F entre parenthèses), à garder sur toutes les pages EN du silo.
- Guillemets : le site affiche les guillemets droits en « » ; utiliser “ ” dans la source des pages EN.

| Page | ID | État |
|---|---|---|
| Ordre *Cycadales* (/en/cycads/) | 15147 | réécrite le 19/10/2026 (brouillon pilotes/ordre-cycadales-en.html) |
| Genre *Cycas* (/en/cycads/cycas/) | 16282 | réécrite le 19/10/2026 (brouillon pilotes/genre-cycas-en.html) ; index : 118 espèces, 36 fiches EN liées (+ miqueli, hainanensis sous ancien nom) |
| Genre *Zamia* (/en/cycads/zamia/) | 16295 | réécrite le 19/10/2026 (brouillon pilotes/genre-zamia-en.html) ; index : 88 espèces, 19 fiches EN liées |
| Genre *Ceratozamia* (/en/cycads/ceratozamia/) | 16307 | réécrite le 19/10/2026 (brouillon pilotes/genre-ceratozamia-en.html) ; index : 45 espèces, aucune fiche EN |
| Genre *Encephalartos* (/en/cycads/encephalartos/) | 16289 | réécrite le 19/10/2026 (brouillon pilotes/genre-encephalartos-en.html) ; index : 65 espèces, 59 fiches EN liées + fiche « caffer » dans la ligne *afer* ; image mise en avant 5556 ajoutée |
| Genre *Macrozamia* (/en/cycads/macrozamia/) | 16301 | réécrite le 19/10/2026, lot G2 (brouillon pilotes/genre-macrozamia-en.html) ; index : 41 espèces, 22 fiches EN liées ; image 1497 dans le corps |
| Genre *Dioon* (/en/cycads/dioon/) | 16312 | réécrite le 19/10/2026, lot G2 (brouillon pilotes/genre-dioon-en.html) ; index : 19 espèces, 19 fiches EN liées ; image 7305 dans le corps |
| Genre *Lepidozamia* (/en/cycads/lepidozamia/) | 16319 | réécrite le 19/10/2026, lot G2 (brouillon pilotes/genre-lepidozamia-en.html) ; index : 2 espèces, 2 fiches EN liées ; sans image |
| Genre *Bowenia* (/en/cycads/bowenia/) | 16323 | réécrite le 19/10/2026, lot G2 (brouillon pilotes/genre-bowenia-en.html) ; index : 2 espèces, 2 fiches EN liées ; fiche « tinaroo » 17984 (forme horticole, nom non accepté) non liée |
| Genre *Stangeria* (/en/cycads/stangeria/) | 16329 | réécrite le 19/10/2026, lot G2 (brouillon pilotes/genre-stangeria-en.html) ; index : 1 espèce, aucune fiche EN (*S. eriopus* à créer) ; sans image |
| Genre *Microcycas* (/en/cycads/microcycas/) | 16335 | réécrite le 19/10/2026, lot G2 (brouillon pilotes/genre-microcycas-en.html) ; index : 1 espèce, 1 fiche EN liée (calocoma 18015) ; ancien lien vers la fiche FR corrigé |

## À traiter plus tard (relevé du lot G1, 19/10/2026)
- Affichage : sur les pages EN, WordPress transforme les guillemets droits " en « » (texturisation selon la locale française du site). Contourné dans les nouvelles pages en écrivant “ ” directement ; à corriger globalement (extrait de code ou réglage Polylang) — vérifier aussi les pages IT/ES.
- Fiche EN Encephalartos afer toujours à l'URL /en/cycads/encephalartos/caffer/ : renommer le slug en afer + redirection 301 lors de la reprise de la fiche.
- Bowenia : 3 fiches EN pour 2 espèces acceptées ; /en/cycads/bowenia/tinaroo/ (17984) correspond à la forme horticole *Bowenia* sp. 'Tinaroo' (groupe de *B. spectabilis*, absente de WLoC) : non liée depuis le genre ; à fusionner dans *B. spectabilis* (301) ou à requalifier ; titre avec guillemets « » à corriger (relevé du lot G2, 19/10/2026).
