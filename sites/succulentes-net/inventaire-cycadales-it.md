# Inventaire des pages Cycadales en italien — succulentes.net

Mis à jour le 2026-10-10 (phase 1 : pages IT existantes). Sources : `list_content` (langue it, 273 pages IT parcourues), API REST publique (parent, contenu rendu), balises `hreflang` des pages publiques (groupes Polylang), `get_content` (FR 13945 après liaison, pages modifiées). Rien n’a été commité.

Chemins : IT `/it/piante/cycadales/<genre>/<espèce>/` ; page ordre IT 11545 (parent : 11576 « Piante », comme les autres racines IT).

## 1. Synthèse

- Pages IT Cycadales : **55** (1 page ordre, 7 pages genres, 47 fiches espèces). Aucune page IT orpheline hors de l’arborescence (recherche par titre et par mots-clés dans les 273 pages IT et via l’API), aucun brouillon.
- Structure : toutes les fiches ont pour parent leur page genre IT et toutes les pages genres ont pour parent 11545. **Aucun parent corrigé, aucune URL modifiée, aucune redirection créée.** Les 4 redirections IT existantes (dinnanensis, il-genere-ceratozamia, il-genere-bowenia et yucca/elata hors sujet) pointent vers des pages existantes et ne bloquent aucune page.
- Liens Polylang : 53/55 étaient déjà liés à la FR ; **2 liens créés** (11558 *Cycas revoluta*, 13198 *Dioon angustifolium*), plus ES 24488 *Cycas revoluta* rattaché au groupe FR. Vérifié ensuite : FR 13945 ↔ EN 16343 / IT 11558 / ES 24488 (`get_content`) ; FR 7876 ↔ EN 17796 / IT 13198 (`hreflang`).
- Doublons (deux pages IT pour un même taxon) : **aucun**.
- Pages hors IT non liées repérées au passage (non modifiées, hors périmètre) : EN 16587 *E. altensteinii*, EN 16561 *E. lehmannii*, EN 16597 *E. longifolius* (aucun lien Polylang) ; ES 23603 *Cycas thouarsii* (aucun lien).

## 2. Tableau des pages IT

| IT | Titre | URL | Parent | FR | Polylang (groupe actuel) | Corrections du 10/10/2026 |
|---|---|---|---|---|---|---|
| 11545 | Cicade / Cycadales: generi, specie e coltivazione in Europa | `/it/piante/cycadales/` | 11576 | 13826 | it + fr + en + es | Paragraphe résiduel de chatbot retiré (« Se vuoi, posso anche scrivere… »). |
| 11549 | Genere Cycas | `/it/piante/cycadales/cycas/` | 11545 | 1256 | it + fr + en + es | Lien de l’intro (pointait vers la page elle-même) → page ordre 11545 ; italique imbriqué retiré (revoluta). |
| 12146 | Il genere Bowenia | `/it/piante/cycadales/bowenia/` | 11545 | 12142 | it + fr + en | — |
| 12127 | Il genere Ceratozamia | `/it/piante/cycadales/ceratozamia/` | 11545 | 9866 | it + fr + en | Groupes A–F retirés (comme en FR : attribution non vérifiable, decumbens rangé dans le complexe mexicana en 2025) ; remplacés par les 3 clades (Habib et al. 2023) + liste alphabétique des 45 espèces WLoC. |
| 11673 | Il genere Dioon | `/it/piante/cycadales/dioon/` | 11545 | 3794 | it + fr + en | — |
| 11663 | Il genere Encephalartos | `/it/piante/cycadales/encephalartos/` | 11545 | 14229 | it + fr + en | Liens paucidentatus et whitelockii pointant vers les pages FR → pages IT 12014 et 12037. |
| 12116 | Il genere Macrozamia | `/it/piante/cycadales/macrozamia/` | 11545 | 1453 | it + fr + en | Mot français « pennes » → « foglioline ». |
| 11879 | Il genere Zamia | `/it/piante/cycadales/zamia/` | 11545 | 3963 | it + fr + en | — |
| 14390 | Cycas beddomei | `/it/piante/cycadales/cycas/beddomei/` | 11549 | 14377 | it + fr + en + es | — |
| 14404 | Cycas bifida | `/it/piante/cycadales/cycas/bifida/` | 11549 | 14394 | it + fr + en | UICN : VU A2cd « Hill 2010 » → évaluation Bösenberg 2022 (e.T42059A67337100) ; bibliographie complétée. |
| 13750 | Cycas circinalis | `/it/piante/cycadales/cycas/circinalis/` | 11549 | 13700 | it + fr + en + es | — |
| 11764 | Cycas debaoensis | `/it/piante/cycadales/cycas/debaoensis/` | 11549 | 5683 | it + fr + en + es | Rusticité non sourcée (« −6 °C sans dégât », 3 passages) alignée sur la FR (−3/−4 °C sans dégât RBG ; −5/−6 °C défoliation ; −8/−9 °C hybrides défoliés en Caroline du Nord). |
| 12758 | Cycas diannanensis | `/it/piante/cycadales/cycas/diannanensis/` | 11549 | 6175 | it + fr + en + es | Comme en FR (10/10, protologue Guan & Tao 1995) : altitude 1 200–2 000 → 700–1 120 m (Manhao) ; tronc 1–3 m × 30–40 cm ; feuilles ~2,5 m (pétiole 70–80 cm) ; ~138 paires de folioles 35–38 × 1,5 cm ; cône mâle 30–50 × 8–12 cm signalé sans source ; ovules 2–6 → 3–7 paires (mégasporophylles 26–30 cm). |
| 11650 | Cycas guizhouensis | `/it/piante/cycadales/cycas/guizhouensis/` | 11549 | 1741 | it + fr + en + es | — |
| 14337 | Cycas media | `/it/piante/cycadales/cycas/media/` | 11549 | 14336 | it + fr + en | Rusticité « −4/−5 °C, comparable à revoluta » → −2/−3 °C max, nettement moins rustique que revoluta (FR) ; zones italiennes « pleine terre possible » (9b, 10) → aucun retour documenté, pot recommandé (Cycadales.eu). |
| 14330 | Cycas megacarpa | `/it/piante/cycadales/cycas/megacarpa/` | 11549 | 14323 | it + fr + en | — |
| 14423 | Cycas micholitzii | `/it/piante/cycadales/cycas/micholitzii/` | 11549 | 14413 | it + fr + en | — |
| 14312 | Cycas multifrondis | `/it/piante/cycadales/cycas/multifrondis/` | 11549 | 14304 | it + fr + en | — |
| 11741 | Cycas panzhihuaensis | `/it/piante/cycadales/cycas/panzhihuaensis/` | 11549 | 1670 | it + fr + en + es | — |
| 11558 | Cycas revoluta | `/it/piante/cycadales/cycas/revoluta/` | 11549 | 13945 | it + fr + en + es | Lien Polylang IT↔FR créé (le groupe ne contenait que IT+ES) ; ES 24488 relié au groupe FR (sinon orphelin). |
| 11721 | Cycas rumphii | `/it/piante/cycadales/cycas/rumphii/` | 11549 | 10608 | it + fr + en + es | — |
| 11708 | Cycas seemannii | `/it/piante/cycadales/cycas/seemannii/` | 11549 | 6162 | it + fr + en | — |
| 11622 | Cycas taitungensis | `/it/piante/cycadales/cycas/taitungensis/` | 11549 | 1726 | it + fr + en + es | « −7/−8 °C sans dégât » → −7 °C à La Londe-les-Maures (FR). |
| 12901 | Cycas thouarsii | `/it/piante/cycadales/cycas/thouarsii/` | 11549 | 10600 | it + fr + en | — |
| 13198 | Dioon angustifolium | `/it/piante/cycadales/dioon/angustifolium/` | 11673 | 7876 | it + fr + en | Lien Polylang IT↔FR créé (page sans aucune traduction). |
| 12889 | Dioon califanoi | `/it/piante/cycadales/dioon/califanoi/` | 11673 | 11161 | it + fr + en | Ajout du protologue : folioles basales entières de 2,5–3 cm (contradiction avec PACSOA exposée, comme en FR). |
| 11851 | Dioon edule | `/it/piante/cycadales/dioon/edule/` | 11673 | 5273 | it + fr + en | « −14 °C janvier 2012 » non sourcé → retour vérifié (région parisienne, février 2012, couronne brûlée, caudex sain) ; Ravenne daté et complété (déc. 2009 −7 °C, défolié au printemps 2010, presque toute la partie aérienne perdue en juin 2010) ; titre Nimbus « gennaio » → « febbraio 2012 » ; source FdP ajoutée ; « Retours » → « Riscontri » ; alt d’image FR → « Dioon edule » ; « Cono maschili » → « maschile ». |
| 12878 | Dioon holmgrenii | `/it/piante/cycadales/dioon/holmgrenii/` | 11673 | 11248 | it + fr + en | — |
| 13243 | Dioon mejiae | `/it/piante/cycadales/dioon/mejiae/` | 11673 | 11158 | it + fr + en | — |
| 12871 | Dioon merolae | `/it/piante/cycadales/dioon/merolae/` | 11673 | 11130 | it + fr + en | — |
| 22267 | Dioon nuusaviorum | `/it/piante/cycadales/dioon/nuusaviorum/` | 11673 | 22252 | it + fr + en | Comme en FR (03/10) : lien d’intro vers elle-même → genre 11673 ; tribu Diooeae retirée ; Pharaxonotha → pollinisateurs non identifiés (Eumaeus photographié) ; EOO/AOO « 11.662 / 12.000 km² » exposées comme ambiguës ; comparaisons holmgrenii/stevensonii, « 5–8 °C », zones 9b–10a et zone 10, substrat type, rejets basaux retirés ; biblio non vérifiée retirée (Nicolalde-Morejón 2014, Gutiérrez-Ortega 2018, Morrone 2010), WLoC 2026 et Norstog annotés. |
| 13260 | Dioon sonorense | `/it/piante/cycadales/dioon/sonorense/` | 11673 | 13251 | it + fr + en | — |
| 11863 | Dioon spinulosum | `/it/piante/cycadales/dioon/spinulosum/` | 11673 | 5286 | it + fr + en | — |
| 11965 | Encephalartos altensteinii | `/it/piante/cycadales/encephalartos/altensteinii/` | 11663 | 2436 | it + fr | — |
| 11972 | Encephalartos ferox | `/it/piante/cycadales/encephalartos/ferox/` | 11663 | 1847 | it + fr + en | — |
| 12042 | Encephalartos friderici-guilielmi | `/it/piante/cycadales/encephalartos/friderici-guilielmi/` | 11663 | 1857 | it + fr + en | — |
| 11809 | Encephalartos horridus | `/it/piante/cycadales/encephalartos/horridus/` | 11663 | 2470 | it + fr + en | — |
| 12087 | Encephalartos inopinus | `/it/piante/cycadales/encephalartos/inopinus/` | 11663 | 7258 | it + fr + en | — |
| 12597 | Encephalartos lebomboensis | `/it/piante/cycadales/encephalartos/lebomboensis/` | 11663 | 2451 | it + fr + en | Mozambique non cité par le protologue (Verdoorn 1949) + restriction du nom par Vorster ; cône femelle « ovoïde » → oblong. |
| 11796 | Encephalartos lehmannii | `/it/piante/cycadales/encephalartos/lehmannii/` | 11663 | 1362 | it + fr | — |
| 12060 | Encephalartos longifolius | `/it/piante/cycadales/encephalartos/longifolius/` | 11663 | 1373 | it + fr | — |
| 11840 | Encephalartos middelburgensis | `/it/piante/cycadales/encephalartos/middelburgensis/` | 11663 | 11822 | it + fr + en | Cônes « rouge-brun, poilus » → vert vif, glabres (protologue 1989). |
| 11940 | Encephalartos natalensis | `/it/piante/cycadales/encephalartos/natalensis/` | 11663 | 1866 | it + fr + en | UICN : « NT (Donaldson) » → NT 2010 remplacé par VU A2acd 2022 (Bösenberg). |
| 12014 | Encephalartos paucidentatus | `/it/piante/cycadales/encephalartos/paucidentatus/` | 11663 | 12001 | it + fr + en | — |
| 13152 | Encephalartos princeps | `/it/piante/cycadales/encephalartos/princeps/` | 11663 | 2461 | it + fr + en | Cônes « 1 à 3 » → 2 à 4 par tige ; cônes femelles « ovoïdes » → plus ou moins cylindriques (Dyer 1965) ; hybrides naturels de princeps → Dyer parle de trispinosus × altensteinii. |
| 13180 | Encephalartos sclavoi | `/it/piante/cycadales/encephalartos/sclavoi/` | 11663 | 5560 | it + fr + en | — |
| 13159 | Encephalartos senticosus | `/it/piante/cycadales/encephalartos/senticosus/` | 11663 | 2480 | it + fr + en | Cônes femelles « en tonneau » → ovoïdes, 2–3 par tige ; « sympatrique / aires chevauchantes » → aires qui se succèdent ; référence 62(3):147–152 → 62(2):76–79. |
| 11991 | Encephalartos transvenosus | `/it/piante/cycadales/encephalartos/transvenosus/` | 11663 | 2502 | it + fr + en | — |
| 12049 | Encephalartos trispinosus | `/it/piante/cycadales/encephalartos/trispinosus/` | 11663 | 2492 | it + fr + en | Répartition : précision Dyer 1965 (ni Kowie, ni Fort Beaufort, ni altitudes) ; étymologie « 1–3 épines » → explication de Hooker (2 lobes + épine terminale). |
| 12037 | Encephalartos whitelockii | `/it/piante/cycadales/encephalartos/whitelockii/` | 11663 | 12023 | it + fr + en | — |
| 13082 | Macrozamia communis | `/it/piante/cycadales/macrozamia/communis/` | 12116 | 1471 | it + fr + en | — |
| 13126 | Macrozamia miquelii | `/it/piante/cycadales/macrozamia/miquelii/` | 12116 | 1822 | it + fr + en | — |
| 13105 | Macrozamia moorei | `/it/piante/cycadales/macrozamia/moorei/` | 12116 | 1833 | it + fr + en | — |
| 14474 | Zamia furfuracea | `/it/piante/cycadales/zamia/furfuracea/` | 11879 | 14461 | it + fr + en | 14 corrections alignées sur la FR (zamia-fiches-corrections.md) : climat d’origine (« jamais sous 10 °C » → moyennes LLIFLE + 7,8 °C à Veracruz 1989) ; températures de culture non sourcées retirées ; caudex « −7 °C » retiré ; zones de pleine terre en Italie limitées aux retours documentés (Palerme) + Concarneau 2007 ; retours Rome/Focene, Palerme, Naples (2008-2009), Ravenne réécrits selon les messages vérifiés ; nom d’un forumeur (P. Puccio) retiré du texte et de la bibliographie ; « consensus » nuancé. |
| 14493 | Zamia pseudoparasitica | `/it/piante/cycadales/zamia/pseudoparasitica/` | 11879 | 14482 | it + fr + en | UICN NT : évaluation Taylor 2010 → Bösenberg 2022 (même catégorie). |

Article de blog IT corrigé (hors pages) : **17555** « Aulacaspis yasumatsui — La cocciniglia asiatica delle cycas » (`/it/aulacaspis-yasumatsui-cocciniglia-asiatica-cycas/`) : présence « en Italie depuis plusieurs années », en France méridionale, en Espagne, en Grèce, « Croatie 2008 » → répartition OEPP (EPPO GD, mise à jour du 27/09/2026 : Bulgarie, Croatie, Chypre, Hongrie, Pologne, Slovénie, Turquie, Royaume-Uni ; France interceptée ; ni Italie, ni Espagne, ni Grèce), passages sur l’Italie mis au conditionnel. L’article ne contenait pas de mention « liste A2 ».

## 3. Points relevés, non corrigés (à trancher)

- *Cycas multifrondis* (FR 14304 / IT 14312) : la fiche traite le taxon comme espèce (NE), alors que les fiches *bifida* et *micholitzii* (FR et IT) le donnent comme synonyme de *Cycas bifida*. Incohérence à résoudre d’abord en FR.
- *Dioon holmgrenii* (FR 11248 / IT 12878) : « Vulnérable » sans évaluation datée, identique en FR ; non vérifié sur WLoC.
- *Zamia furfuracea* IT 14474 : statut « EN B1ab(v) » sans source datée (la FR n’en donne aucun) ; retours italiens non vérifiés par la note FR (Calabre, « 20 ans », balcon) conservés.
- *Encephalartos friderici-guilielmi* IT 12042 : « media annua delle minime di circa −4,9 °C » à Queenstown (formulation ambiguë) ; IT 11991, 12042, 12049 citent en source des URL de pages FR du site (texte brut).
- *Cycas beddomei* IT 14390 : zones USDA « 9b–11 » contre « 9a–11b approximativement » en FR (deux estimations non sourcées).
- *Cycas guizhouensis* FR 1741 : « −7 °C en janvier 2012 » au JZT (le minimum JZT documenté est de février 2012) ; erreur FR, l’IT ne date pas l’épisode.
- Pages genres IT (Bowenia, Ceratozamia, Dioon, Encephalartos, Macrozamia, Zamia, Cycas) et page ordre : anciennes versions courtes, sans le gabarit ni les corrections de fond des pages FR refaites le 01/10 (seules les erreurs ponctuelles ont été corrigées). À reprendre en phase 2.

## 4. Taxons FR sans page IT (phase 3)

Total : **334** fiches FR sans version IT (sur 381 fiches FR) ; pages genres IT manquantes : *Lepidozamia* (FR 13803), *Microcycas* (FR 13865), *Stangeria* (FR 4081).

| Genre | Fiches FR | Avec IT | À créer en IT |
|---|---|---|---|
| Bowenia | 2 | 0 | 2 |
| Ceratozamia | 44 | 0 | 44 |
| Cycas | 122 | 16 | 106 |
| Dioon | 19 | 9 | 10 |
| Encephalartos | 65 | 17 | 48 |
| Lepidozamia | 2 | 0 | 2 |
| Macrozamia | 41 | 3 | 38 |
| Microcycas | 1 | 0 | 1 |
| Stangeria | 1 | 0 | 1 |
| Zamia | 84 | 2 | 82 |

### Bowenia (2)

Bowenia serrulata (26126), Bowenia spectabilis (26130)

### Ceratozamia (44)

Ceratozamia alba (26355), Ceratozamia alvarezii (26357), Ceratozamia aurantiaca (26359), Ceratozamia becerrae (26361), Ceratozamia brevifrons (26363), Ceratozamia chamberlainii (26365), Ceratozamia chimalapensis (26367), Ceratozamia chinantlensis (26369), Ceratozamia decumbens (26371), Ceratozamia delucana (26375), Ceratozamia dominguezii (26379), Ceratozamia euryphyllidia (26377), Ceratozamia gigantea (26413), Ceratozamia guatemalensis (26410), Ceratozamia hildae (26418), Ceratozamia hondurensis (26383), Ceratozamia huastecorum (26391), Ceratozamia kuesteriana (26400), Ceratozamia latifolia (26422), Ceratozamia leptoceras (26404), Ceratozamia matudae (26408), Ceratozamia mexicana (26426), Ceratozamia miqueliana (26452), Ceratozamia mirandae (26454), Ceratozamia mixeorum (26456), Ceratozamia morettii (26458), Ceratozamia norstogii (26460), Ceratozamia oliversacksii (26462), Ceratozamia osbornei (26464), Ceratozamia popolucana (26466), Ceratozamia reesii (26468), Ceratozamia robusta (26472), Ceratozamia rosea (26476), Ceratozamia sabatoi (26373), Ceratozamia sancheziae (26416), Ceratozamia santillanii (26420), Ceratozamia schiblii (26424), Ceratozamia subroseophylla (26381), Ceratozamia tenuis (26397), Ceratozamia totonacorum (26402), Ceratozamia vovidesii (26428), Ceratozamia whitelockiana (26406), Ceratozamia zaragozae (26412), Ceratozamia zoquorum (26438)

### Cycas (106)

Cycas aculeata (22084), Cycas aenigma (26570), Cycas andamanica (21956), Cycas angulata (26591), Cycas annaikalensis (26601), Cycas apoa (26605), Cycas arenicola (26609), Cycas armstrongii (21562), Cycas arnhemica (26613), Cycas badensis (26618), Cycas balansae (21822), Cycas basaltica (26620), Cycas bougainvilleana (26622), Cycas brachycantha (22089), Cycas brunnea (26624), Cycas cairnsiana (26626), Cycas calcicola (21857), Cycas campestris (26628), Cycas canalis (26630), Cycas candida (26632), Cycas cantafolia (26634), Cycas chamaoensis (21828), Cycas changjiangensis (21885), Cycas chenii (21968), Cycas chevalieri (21892), Cycas clivicola (26636), Cycas collina (22067), Cycas condaoensis (22008), Cycas conferta (26638), Cycas couttsiana (26640), Cycas cupida (26642), Cycas curranii (26644), Cycas desolata (26649), Cycas dharmrajii (26651), Cycas distans (26653), Cycas divyadarshanii (26655), Cycas dolichophylla (26146), Cycas edentata (26657), Cycas elephantipes (26150), Cycas elongata (26154), Cycas fairylakea (21932), Cycas falcata (26659), Cycas ferruginea (22030), Cycas flabellata (26661), Cycas fugax (26663), Cycas furfuracea (26680), Cycas glauca (26684), Cycas hainanensis (21912), Cycas hoabinhensis (22042), Cycas hongheensis (21975), Cycas indica (26683), Cycas inermis (26699), Cycas javana (26687), Cycas lacrimans (26690), Cycas lane-poolei (26681), Cycas laotica (22052), Cycas lindstromii (26158), Cycas lingshuigensis (21921), Cycas maconochiei (26682), Cycas macrocarpa (26696), Cycas micronesica (26163), Cycas mindanaensis (26692), Cycas montana (26685), Cycas multipinnata (16437), Cycas nathorstii (26688), Cycas nayagarhensis (26697), Cycas nitida (26691), Cycas nongnoochiae (26717), Cycas ophiolitica (26715), Cycas orientis (26700), Cycas orixensis (26694), Cycas pachypoda (22073), Cycas papuana (26712), Cycas pectinata (26165), Cycas petraea (26719), Cycas platyphylla (26721), Cycas pranburiensis (26724), Cycas pruinosa (26726), Cycas pschannae (21984), Cycas riuminiana (26728), Cycas sancti-lasallei (26730), Cycas saxatilis (26732), Cycas schumanniana (26734), Cycas scratchleyana (26736), Cycas segmentifida (22059), Cycas semota (26738), Cycas seshachalamensis (26740), Cycas sexseminifera (22025), Cycas siamensis (22080), Cycas silvestris (26745), Cycas simplicipinna (21897), Cycas sphaerica (26747), Cycas sundaica (26749), Cycas szechuanensis (21937), Cycas taiwaniana (21905), Cycas tanqingii (21944), Cycas tansachana (26751), Cycas terryana (26753), Cycas tropophylla (22019), Cycas tuckeri (26755), Cycas vespertilio (26757), Cycas wadei (26759), Cycas xipholepis (26761), Cycas yorkiana (26763), Cycas zambalensis (26765), Cycas zeylanica (21995)

### Dioon (10)

Dioon argenteum (26124), Dioon caputoi (26128), Dioon oaxacensis (26133), Dioon planifolium (26137), Dioon purpusii (26139), Dioon rzedowskii (26144), Dioon salas-moralesiae (26148), Dioon stevensonii (26152), Dioon tomasellii (26156), Dioon vovidesii (26160)

### Encephalartos (48)

Encephalartos aemulans (26207), Encephalartos afer (26313), Encephalartos aplanatus (26211), Encephalartos arenarius (26215), Encephalartos barteri (26219), Encephalartos brevifoliolatus (26223), Encephalartos bubalinus (26227), Encephalartos cerinus (26181), Encephalartos chimanimaniensis (26190), Encephalartos concinnus (26197), Encephalartos cupidus (26230), Encephalartos cycadifolius (26205), Encephalartos delucanus (26346), Encephalartos dolomiticus (26209), Encephalartos dyerianus (26170), Encephalartos equatorialis (26176), Encephalartos eugene-maraisii (26184), Encephalartos ghellinckii (26192), Encephalartos gratus (12439), Encephalartos heenanii (26198), Encephalartos hildebrandtii (12423), Encephalartos hirsutus (26194), Encephalartos humilis (26213), Encephalartos ituriensis (12619), Encephalartos kisambo (12464), Encephalartos laevifolius (26217), Encephalartos lanatus (26221), Encephalartos latifrons (26225), Encephalartos laurentianus (12515), Encephalartos mackenziei (26352), Encephalartos macrostrobilus (26229), Encephalartos manikensis (26178), Encephalartos marunguensis (26335), Encephalartos msinganus (5596), Encephalartos munchii (12296), Encephalartos ngoyanus (26196), Encephalartos nubimontanus (26171), Encephalartos poggei (26328), Encephalartos pterogonus (26186), Encephalartos relictus (26168), Encephalartos schaijesii (26174), Encephalartos schmitzii (26341), Encephalartos septentrionalis (26195), Encephalartos tegulaneus (26180), Encephalartos turneri (26187), Encephalartos umbeluziensis (12681), Encephalartos villosus (12642), Encephalartos woodii (10803)

### Lepidozamia (2)

Lepidozamia hopei (26135), Lepidozamia peroffskyana (26141)

### Macrozamia (38)

Macrozamia cardiacensis (26291), Macrozamia concinna (26242), Macrozamia conferta (26295), Macrozamia cranei (26311), Macrozamia crassifolia (26299), Macrozamia diplomera (26250), Macrozamia douglasii (26289), Macrozamia dyeri (26282), Macrozamia elegans (26257), Macrozamia fawcettii (26305), Macrozamia fearnsidei (26264), Macrozamia flexuosa (26278), Macrozamia fraseri (26273), Macrozamia glaucophylla (26252), Macrozamia heteromera (26245), Macrozamia humilis (26307), Macrozamia johnsonii (26275), Macrozamia lomandroides (26316), Macrozamia longispina (26303), Macrozamia lucida (26268), Macrozamia macdonnellii (26261), Macrozamia machinii (26327), Macrozamia macleayi (26297), Macrozamia montana (26238), Macrozamia mountperriensis (26254), Macrozamia occidua (26333), Macrozamia parcifolia (26340), Macrozamia pauli-guilielmi (26246), Macrozamia platyrhachis (26337), Macrozamia plurinervia (26309), Macrozamia polymorpha (26301), Macrozamia reducta (26259), Macrozamia riedlei (26236), Macrozamia secunda (26293), Macrozamia serpentina (26331), Macrozamia spiralis (26239), Macrozamia stenomera (26266), Macrozamia viridis (26318)

### Microcycas (1)

Microcycas calocoma (13877)

### Stangeria (1)

Stangeria eriopus (4090)

### Zamia (82)

Zamia acuminata (26470), Zamia amazonum (22275), Zamia amplifolia (21680), Zamia angustifolia (21722), Zamia boliviana (22283), Zamia brasiliensis (22303), Zamia chigua (21673), Zamia cremnophila (22338), Zamia cunaria (26474), Zamia decumbens (22376), Zamia disodon (26477), Zamia dressleri (26480), Zamia encephalartoides (22294), Zamia erosa (21754), Zamia fairchildiana (26484), Zamia fischeri (21704), Zamia gentryi (26487), Zamia gomeziana (26491), Zamia grijalvensis (22333), Zamia hamannii (26495), Zamia herrerae (26499), Zamia huilensis (26503), Zamia hymenophyllidia (26507), Zamia imbricata (26483), Zamia imperialis (21802), Zamia incognita (26488), Zamia inermis (21714), Zamia integrifolia (3971), Zamia ipetiensis (26492), Zamia katzeriana (26497), Zamia lacandona (22356), Zamia lawsoniana (26501), Zamia lecointei (26505), Zamia lindenii (26510), Zamia lindleyi (26517), Zamia lindosensis (26519), Zamia loddigesii (21664), Zamia lucayana (21788), Zamia macrochiera (26521), Zamia magnifica (22363), Zamia manicata (26523), Zamia meermanii (26542), Zamia melanorrhachis (26556), Zamia montana (22316), Zamia monticola (22382), Zamia multidentata (26550), Zamia muricata (26548), Zamia nesophila (26544), Zamia neurophyllidia (22328), Zamia oligodonta (22321), Zamia onan-reyesii (26558), Zamia oreillyi (26562), Zamia orinoquiensis (26546), Zamia paucifoliolata (26552), Zamia paucijuga (26566), Zamia poeppigiana (18304), Zamia portoricensis (21767), Zamia prasina (22369), Zamia pumila (21729), Zamia purpurea (22349), Zamia pygmaea (21780), Zamia pyrophylla (26554), Zamia restrepoi (26560), Zamia roezlii (21660), Zamia sandovalii (26603), Zamia sinuensis (26564), Zamia skinneri (21691), Zamia soconuscensis (22308), Zamia spartea (26596), Zamia splendens (22343), Zamia standleyi (26607), Zamia stenophyllidia (26611), Zamia stevensonii (26614), Zamia stricta (21774), Zamia tolimensis (26599), Zamia tuerckheimii (22391), Zamia ulei (22288), Zamia urarinorum (26590), Zamia urep (26568), Zamia variegata (21795), Zamia vazquezii (21709), Zamia wallisii (21734)
