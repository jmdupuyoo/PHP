# Cycadales : vérification taxonomique et CITES (Stangeria, Ceratozamia, Bowenia, Lepidozamia + 10 genres)

Vérification en lecture seule, faite le 1er octobre 2026. Aucun fichier .html ni le site WordPress n'ont été modifiés.

**Sources lues directement (curl)**
- The World List of Cycads (WLoC), **version 2026.08.15** (citation affichée en pied de page : Calonje, Stevenson & Osborne 2026, doi:10.5281/zenodo.21958524). Données issues des pages genre (`https://cycadlist.org/genus/<Genre>`), des pages espèce (`https://cycadlist.org/scientific_name/<id>`) et de l'export XLSX public (`https://cycadlist.org/scientific_names/export?accepted=1` ; recherche : `…/export?advanced=1&filter[scientific_name]=<nom>&accepted=0`). Le site ne propose pas d'API JSON publique (interface Livewire/Filament), mais l'export XLSX en tient lieu.
- Species+ (UNEP-WCMC) : l'API JSON interne utilisée par l'application publique répond sans jeton : `https://speciesplus.net/api/v1/auto_complete_taxon_concepts?taxonomy=cites_eu&taxon_concept_query=<nom>` puis `https://speciesplus.net/api/v1/taxon_concepts/<id>`. Page publique correspondante : `https://speciesplus.net/species#/taxon_concepts/<id>/legal`.
- POWO, UICN et cites.org n'ont pas été consultés directement (accès bloqué par Cloudflare). Les seules données qui en viennent sont des **extraits WebSearch**, signalés comme tels.

## 1. Effectifs par genre (WLoC 2026.08.15)

| Genre | Espèces | Taxons infraspécifiques* | Noms acceptés |
|---|---|---|---|
| Bowenia | 2 | 0 | 2 |
| Ceratozamia | 45 | 0 | 45 |
| Cycas | 118 | 6 | 124 |
| Dioon | 19 | 0 | 19 |
| Encephalartos | 65 | 6 | 71 |
| Lepidozamia | 2 | 0 | 2 |
| Macrozamia | 41 | 0 | 41 |
| Microcycas | 1 | 0 | 1 |
| Stangeria | 1 | 0 | 1 |
| Zamia | 88 | 2 | 90 |
| **Total** | **382** | **14** | **396** |

\*Chiffres affichés sur chaque page genre (« Included Species (N species and M infraspecific taxa) »). Les autonymes sont comptés : *Cycas maconochiei* (3 sous-espèces), *C. media* (3), *Encephalartos barteri* (2), *E. ferox* (2), *E. tegulaneus* (2), *Zamia integrifolia* (2 variétés). Les marqueurs « [1] » ou « [2] » (ex. *Ceratozamia fuscoviridis* [2]) distinguent des homonymes ; ce ne sont pas des taxons supplémentaires.

Familles selon WLoC : toutes les espèces hors *Cycas* sont classées dans les Zamiaceae (fil d'Ariane : « Cycadales > Zamiaceae > Stangeria »). **Species+ suit encore la nomenclature CITES de 2013** (checklist Osborne et al. 2013) : *Stangeria* et *Bowenia* y sont classés dans les **Stangeriaceae**.

## 2. Espèces de Ceratozamia, Bowenia, Lepidozamia et Stangeria (WLoC)

Statut UICN tel qu'affiché par WLoC. « Année éval. citée » : année de la référence « The IUCN Red List of Threatened Species YYYY » listée sur la page espèce (première page de références). « — » : aucune référence de ce type affichée.

| Espèce | Auteur | Année | Protologue | Répartition (WLoC) | UICN (WLoC) | Année éval. citée |
|---|---|---|---|---|---|---|
| [*Bowenia serrulata*](https://cycadlist.org/scientific_name/9) | (W.Bull) Chamb. | 1912 | Bot. Gaz. 54: 419 | Australia (Queensland) | LC | 2022 |
| [*Bowenia spectabilis*](https://cycadlist.org/scientific_name/10) | Hook. ex Hook.f. | 1863 | Bot. Mag. 89: t. 5398 | Australia (Queensland) | LC | — |
| [*Ceratozamia alba*](https://cycadlist.org/scientific_name/1068) | Pérez-Farr., Gut.Ortega & Vovides | 2024 | Phytotaxa 666(4): 256-276 (265, figs. 5-11) | Mexico (Chiapas) | NE | — |
| [*Ceratozamia alvarezii*](https://cycadlist.org/scientific_name/16) | Pérez-Farr., Vovides & Iglesias | 1999 | Novon 9(3) 410-413, fig. 1 | Mexico (Chiapas) | EN A2acd; B1ab(i,iii,v)+2ab(i,iii,v); C1 | 2022 |
| [*Ceratozamia aurantiaca*](https://cycadlist.org/scientific_name/907) | Pérez-Farr., Gut.Ortega, J.L.Haynes & Vovides | 2021 | Taxonomy 1(3): 243-255 | Mexico (Oaxaca) | NE | — |
| [*Ceratozamia becerrae*](https://cycadlist.org/scientific_name/17) | Pérez-Farr., Vovides & Schutzman | 2004 | Bot. J. Linn. Soc. 146(1): 123-128, figs. 1-7 | Mexico (Chiapas, Tabasco) | NE | — |
| [*Ceratozamia brevifrons*](https://cycadlist.org/scientific_name/19) | Miq. | 1847 | Tijdschr. Wis- Natuurk. Wetensch. Eerste Kl. Kon. Ned. Inst. Wetensch. 1(1): 41-42 | Mexico (Veracruz) | EN A2c | 2022 |
| [*Ceratozamia chamberlainii*](https://cycadlist.org/scientific_name/818) | Mart.-Domínguez, Nic.-Mor. & D.W.Stev. | 2017 | Phytotaxa 317(1): 17-28 | Mexico (Hidalgo, Querétaro, San Luis Potosí) | EN A2c; B1ab(i,ii,iii) | 2022 |
| [*Ceratozamia chimalapensis*](https://cycadlist.org/scientific_name/20) | Pérez-Farr. & Vovides | 2008 | Bot. J. Linn. Soc. 157(2): 169-175, figs. 1-4 | Mexico (Oaxaca) | EN A3cd+4cd; B2ab(ii,iii,v) | 2022 |
| [*Ceratozamia chinantlensis*](https://cycadlist.org/scientific_name/1070) | Pérez-Farr., Ram.-Oviedo & Gut.-Ortega | 2024 | Taxonomy 4(4): 733-747 (738, figs. 4-11) | Mexico (Oaxaca) | NE | — |
| [*Ceratozamia decumbens*](https://cycadlist.org/scientific_name/21) | Vovides, Avendaño, Pérez-Farr. & Gonz.-Astorga | 2008 | Novon 18(1): 109-114, fig. 1 | Mexico (Veracruz) | EN A2c; B1ab(i,ii,iii,v) | 2022 |
| [*Ceratozamia delucana*](https://cycadlist.org/scientific_name/632) | Vázq.Torres, A.Moretti & Carvajal-Hern. | 2013 | Delpinoa 50-51: 129-133, figs. 1-5 (2008-2009 issued December 2013) | Mexico (Puebla, Veracruz) | EN A2cd; B1ab(i,ii,iii) | 2022 |
| [*Ceratozamia dominguezii*](https://cycadlist.org/scientific_name/909) | Pérez-Farr. & Gut.Ortega | 2021 | Taxonomy 1(4): 345-349, figs. 2, 5-9 | Mexico (Veracruz) | NE | — |
| [*Ceratozamia euryphyllidia*](https://cycadlist.org/scientific_name/22) | Vázq.Torres, Sabato & D.W.Stev. | 1986 | Brittonia 38(1): 17-26, figs. 1-5 | Mexico (Oaxaca, Veracruz) | EN A4cd; B1ab(iii,v) | 2022 |
| [*Ceratozamia fuscoviridis [2]*](https://cycadlist.org/scientific_name/374) | W.Bull | 1879 | Retail List [Bull] No. 154: 4 | Mexico (Hidalgo, Veracruz) | EN A2c; B1ab(i,ii,iii,iv,v) | 2022 |
| [*Ceratozamia gigantea*](https://cycadlist.org/scientific_name/1063) | Mart.-Domínguez, Nic.-Mor., D.W.Stev. & Gonz.-Aguilar | 2024 | Kew Bull. 79(3): 543-558 (546, figs 1-3) | Mexico (Tabasco) | NE | — |
| [*Ceratozamia guatemalensis*](https://cycadlist.org/scientific_name/1069) | Pérez-Farr., Gut.Ortega & M.L.Quezada | 2024 | Phytotaxa 668(1): 63-80 (71, figs. 10-15) | Guatemala (Huehuetenango) | NE | — |
| [*Ceratozamia hildae*](https://cycadlist.org/scientific_name/24) | G.P.Landry & M.C.Wilson | 1979 | Brittonia 31(3): 422-424, fig. 1 | Mexico (Querétaro, San Luis Potosí) | CR A2acd | 2022 |
| [*Ceratozamia hondurensis*](https://cycadlist.org/scientific_name/25) | J.L.Haynes, Whitelock, Schutzman & R.S.Adams | 2008 | Cycad Newslett. 31 (2-3): 16-21, figs. 1-2 | Honduras (Atlántida) | CR B1ab(i,ii,iii,iv,v) | 2022 |
| [*Ceratozamia huastecorum*](https://cycadlist.org/scientific_name/26) | Avendaño, Vovides & Cast.-Campos | 2003 | Bot. J. Linn. Soc. 141(3): 395-398, figs. 1-2 | Mexico (Veracruz) | CR B1ab(iii,v) | 2022 |
| [*Ceratozamia kuesteriana*](https://cycadlist.org/scientific_name/29) | Regel | 1857 | Bull. Soc. Imp. Naturalistes Moscou 30(1): 187-188, t. 3, fig. 6; t. 4, fig. 22 | Mexico (Tamaulipas) | CR A2cd | 2022 |
| [*Ceratozamia latifolia*](https://cycadlist.org/scientific_name/30) | Miq. | 1848 | Tijdschr. Wis- Natuurk. Wetensch. Eerste Kl. Kon. Ned. Inst. Wetensch. 1(1): 206 | Mexico (San Luis Potosí) | VU A2cd | 2022 |
| [*Ceratozamia leptoceras*](https://cycadlist.org/scientific_name/889) | Mart.-Domínguez, Nic.-Mor., D.W.Stev. & Lorea-Hern. | 2020 | Phytokeys 156: 1-25 | Mexico (Guerrero) | NE | — |
| [*Ceratozamia matudae*](https://cycadlist.org/scientific_name/32) | Lundell | 1939 | Lloydia 2(2): 75-76 | Mexico (Chiapas) | EN B1ab(ii,iii,v) | 2022 |
| [*Ceratozamia mexicana*](https://cycadlist.org/scientific_name/33) | Brongn. | 1846 | Ann. Sci. Nat., Bot. sér. 3, 5: 7-8, t.. 1 1 | Mexico (Veracruz) | CR A2acd | 2022 |
| [*Ceratozamia miqueliana*](https://cycadlist.org/scientific_name/36) | H.Wendl. | 1854 | Index Palm.: 68 | Mexico (Chiapas, Tabasco, Veracruz) | EN A2acd; B2ab(iii,v); C2a(i) | 2022 |
| [*Ceratozamia mirandae*](https://cycadlist.org/scientific_name/37) | Vovides, Pérez-Farr. & Iglesias | 2001 | Bot. J. Linn. Soc. 137(1): 81-85, figs. 1-2 | Mexico (Chiapas) | EN B1ab(iii,v); C1 | 2022 |
| [*Ceratozamia mixeorum*](https://cycadlist.org/scientific_name/38) | Chemnick, T.J.Greg. & Salas-Mor. | 1998 | Phytologia 83(1): 47-52 (1997 publ. 1998) | Mexico (Oaxaca) | EN A2acd+4acd; B1ab(i,ii,iii,iv,v) | 2022 |
| [*Ceratozamia morettii*](https://cycadlist.org/scientific_name/39) | Vázq.Torres & Vovides | 1998 | Novon 8(1): 87-90, fig. 1 | Mexico (Veracruz) | EN A2c; B1ab(iii,v) | 2022 |
| [*Ceratozamia norstogii*](https://cycadlist.org/scientific_name/40) | D.W.Stev. | 1982 | Brittonia 34(2): 181-184, figs. 1-2 | Mexico (Chiapas, Oaxaca) | EN A2acd; B1ab(iii,v) | 2022 |
| [*Ceratozamia oliversacksii*](https://cycadlist.org/scientific_name/910) | D.W.Stev., Mart.-Domínguez & Nic.-Mor. | 2022 | Kew Bull. (https://doi:10.1007/S12225-021-09992-X): 1-9 Figs 1,2,3a, 4 | Mexico (Oaxaca) | NE | — |
| [*Ceratozamia osbornei*](https://cycadlist.org/scientific_name/1022) | D.W.Stev., Mart.-Domínguez & Nic.-Mor. | 2022 | PhytoKeys 208: 68 (-69, figs. 5-6, 22) | Belize (Cayo, Toledo) | NE | — |
| [*Ceratozamia popolucana*](https://cycadlist.org/scientific_name/1081) | Pérez-Farr., Gut.-Ortega & Vovides | 2026 | Phytotaxa 760(1): 77-92 (83, figs. 4-9) | Mexico (Veracruz) | NE | — |
| [*Ceratozamia reesii*](https://cycadlist.org/scientific_name/1018) | Vovides, Pérez-Farr. & Gut.Ortega | 2022 | Phytotaxa 575(3): 241 (224-252; figs. 1b, 2, 3, 4d-f, map) | Mexico (San Luis Potosí) | NE | — |
| [*Ceratozamia robusta*](https://cycadlist.org/scientific_name/41) | Miq. | 1847 | Tijdschr. Wis- Natuurk. Wetensch. Eerste Kl. Kon. Ned. Inst. Wetensch. 1(1): 42-43 | Guatemala (Alta Verapaz, Petén, Quiché, Huehuetenango, Izabal), Mexico (Chiapas) | EN A2acd | 2022 |
| [*Ceratozamia rosea*](https://cycadlist.org/scientific_name/1026) | Pérez-Farr., Gut.Ortega & Vovides | 2023 | Phytotaxa 595(1): 73-88 (79, figs. 6-11) | Mexico (Chiapas) | NE | — |
| [*Ceratozamia sabatoi*](https://cycadlist.org/scientific_name/42) | Vovides, Vázq.Torres, Schutzman & Iglesias | 1993 | Novon 3(4): 502-504, fig. 1 | Mexico (Hidalgo, Querétaro) | EN A2acd; B1ab(i,ii,iii,v) | 2022 |
| [*Ceratozamia sancheziae*](https://cycadlist.org/scientific_name/903) | Pérez-Farr., Gut.Ortega & Vovides | 2021 | Phytotaxa 500(3): 201-216, figs. 2 (a-f) & 7 (a-d) | Mexico (Chiapas) | NE | — |
| [*Ceratozamia santillanii*](https://cycadlist.org/scientific_name/43) | Pérez-Farr. & Vovides | 2009 | Syst. Biodivers. 7(4): 433-443, figs. 3, 7 | Mexico (Chiapas) | CR A3cd+4cd; B1ab(i,ii,iii,iv,v) | 2022 |
| [*Ceratozamia schiblii*](https://cycadlist.org/scientific_name/1017) | Pérez-Farr. & Gut.Ortega | 2022 | Taxonomy 2: 324–338 | Mexico (Oaxaca) | NE | — |
| [*Ceratozamia subroseophylla*](https://cycadlist.org/scientific_name/817) | Mart.-Domínguez & Nic.-Mor. | 2016 | Phytotaxa 268(1): 25-45 | Mexico (Veracruz) | EN B1ab(iii) | 2022 |
| [*Ceratozamia tenuis*](https://cycadlist.org/scientific_name/793) | (Dyer) D.W.Stev. & Vovides | 2016 | Bot. Sci. 94(2): 419-429 | Mexico (Veracruz) | EN A2c; B1ab(i,ii,iii) | 2022 |
| [*Ceratozamia totonacorum*](https://cycadlist.org/scientific_name/814) | Mart.-Domínguez & Nic.-Mor. | 2017 | Brittonia 69(4): 518. [epublished 31 May 2017] | Mexico (Hidalgo, Puebla, Veracruz) | VU B1ab(iii) | 2022 |
| [*Ceratozamia vovidesii*](https://cycadlist.org/scientific_name/44) | Pérez-Farr. & Iglesias | 2007 | Bot. J. Linn. Soc. 153(4): 393-400, figs. 1-6 | Mexico (Chiapas) | VU D2 | 2022 |
| [*Ceratozamia whitelockiana*](https://cycadlist.org/scientific_name/45) | Chemnick & T.J.Greg. | 1996 | Phytologia 79(1): 51-57 (1995 publ. 1996) | Mexico (Oaxaca) | EN A2c; B1ab(i,ii,iii,v) | 2022 |
| [*Ceratozamia zaragozae*](https://cycadlist.org/scientific_name/46) | Medellín | 1963 | Brittonia 15(2): 175-176, figs. 1-4 | Mexico (San Luis Potosí) | EN B1ab(v) | 2022 |
| [*Ceratozamia zoquorum*](https://cycadlist.org/scientific_name/47) | Pérez-Farr., Vovides & Iglesias | 2001 | Bot. J. Linn. Soc. 137(1): 77-80, fig.1 | Mexico (Chiapas, Tabasco) | CR A2acd | 2022 |
| [*Lepidozamia hopei*](https://cycadlist.org/scientific_name/371) | Regel | 1876 | Gartenflora 25: 6 | Australia (Queensland) | LC | 2022 |
| [*Lepidozamia peroffskyana*](https://cycadlist.org/scientific_name/372) | Regel | 1857 | Bull. Soc. Imp. Naturalistes Moscou 30(1): 184-185, fig. 21 | Australia (New South Wales, Queensland) | LC | 2022 |
| [*Stangeria eriopus*](https://cycadlist.org/scientific_name/430) | (Kunze) Baill. | 1892 | Hist. Pl. (Baillon) 12: 68, in adnot. | South Africa (E Cape, KwaZulu-Natal) | VU A2acd+4acd | 2022 |

Bilan Ceratozamia : 45 espèces, dont 18 NE (non évaluées). Parmi les 27 évaluées, 7 CR (*hildae, hondurensis, huastecorum, kuesteriana, mexicana, santillanii, zoquorum*), 17 EN et 3 VU (*latifolia, totonacorum, vovidesii*). Toutes les évaluations citées datent de **2022**.

### Noms et protologues demandés (WLoC)
- ***Stangeria eriopus* (Kunze) Baill.** : Hist. Pl. (Baillon) 12 : 68, in adnot. (1892). Basionyme : *Lomaria eriopus* Kunze, Linnaea 13 : 152 (1839). Synonymes : *Stangeria paradoxa* T.Moore, Hooker's J. Bot. Kew Gard. Misc. 5 : 228 (1853) ; *S. katzeri* Regel, Gartenflora 23 : 163 (1874) ; *S. schizodon* W.Bull, Retail List 72 : 8 (1872). Étymologie : erio- (« laineux ») + -pus (« pied »), allusion aux bases foliaires laineuses (Haynes 2022). Genre : *Stangeria* T.Moore (1853). https://cycadlist.org/scientific_name/430
- ***Lepidozamia peroffskyana* Regel** : Bull. Soc. Imp. Naturalistes Moscou 30(1) : 184-185, fig. 21 (1857). Synonymes : *Macrozamia denisonii* C.Moore & F.Muell. (1858), *Encephalartos denisonii* (1859), *Lepidozamia denisonii* (1875), *Macrozamia peroffskyana* (Regel) Miq. (1868). https://cycadlist.org/scientific_name/372
- ***Lepidozamia hopei*** : WLoC écrit **« Regel »**, sans auteur entre parenthèses : Gartenflora 25 : 6 (1876). Note de nomenclature (Johnson 1959) : le nom n'est pas fondé sur *Catakidozamia hopei* W.Hill, dont Regel ignorait la publication ; Regel cite seulement un nom de jardin. *Catakidozamia hopei* W.Hill (Gard. Chron. 22(47) : 1107, 1865) et *Macrozamia hopei* W.Hill (1886) sont classés comme synonymes ; *Macrozamia hopei* C.Moore (1884) est noté « Invalid ». **POWO et IPNI** écrivent « *L. hopei* (W.Hill) Regel », Gartenflora 25 : 5 (1876), avec *Catakidozamia hopei* comme basionyme (extrait WebSearch). Les deux sources divergent donc. https://cycadlist.org/scientific_name/371
- ***Bowenia spectabilis* Hook. ex Hook.f.** : Bot. Mag. 89 : t. 5398 (1863), lectotype = la planche. https://cycadlist.org/scientific_name/10
- ***Bowenia serrulata* (W.Bull) Chamb.** : Bot. Gaz. 54 : 419 (1912). Basionyme : *B. spectabilis* var. *serrulata* W.Bull, Retail List [Bull] 143 : 4, t. 5 (1878). Synonyme : *B. spectabilis* var. *serrata* F.M.Bailey (1883). https://cycadlist.org/scientific_name/9
- ***Ceratozamia mexicana* Brongn.** : Ann. Sci. Nat., Bot. sér. 3, 5 : 7-8, t. 1 (1846). Synonymes : *C. intermedia* Miq., *C. longifolia* Miq. (1847) et *C. longifolia* var. *minor* Miq. (1849), ainsi que *C. mexicana* var. *longifolia* (Miq.) Dyer (1884). **« *Zamia mexicana* » n'y figure pas** : dans WLoC, *Zamia mexicana* Miq. (1861) est un synonyme de ***Zamia loddigesii***. Genre : *Ceratozamia* Brongn. (1846). https://cycadlist.org/scientific_name/33

### Orthographe et statuts particuliers
- **sancheziae** est l'orthographe acceptée par WLoC : *Ceratozamia sancheziae* Pérez-Farr., Gut.Ortega & Vovides, Phytotaxa 500(3) : 201-216 (2021), Chiapas, NE. L'article original porte le titre « *Ceratozamia sanchezae* … ». L'épithète honore María Ydelia Sánchez-Tinoco ; la forme corrigée en -iae suit la règle des épithètes dédiées à une femme dont le nom se termine par une consonne. Une recherche « sanchez » dans WLoC ne renvoie aucune autre graphie. https://cycadlist.org/scientific_name/903
- ***C. osbornei*** D.W.Stev., Mart.-Domínguez & Nic.-Mor., PhytoKeys 208 : 68 (2022) : **accepté**, Belize (Cayo, Toledo), NE. Aucune note de synonymie ni de contestation n'apparaît sur WLoC. https://cycadlist.org/scientific_name/1022
- ***C. dominguezii*** Pérez-Farr. & Gut.Ortega, Taxonomy 1(4) : 345-349 (2021) : **accepté**, Veracruz (Uxpanapa), NE. Note de synonymie : Martínez-Domínguez et al. (PhytoKeys 208 : 78, 2022) l'ont placé en synonymie de *C. subroseophylla*. WLoC rejette cette synonymie « until convincing evidence is published ». https://cycadlist.org/scientific_name/909
- ***C. reesii*** Vovides, Pérez-Farr. & Gut.Ortega, Phytotaxa 575(3) : 241 (2022) : **accepté**, San Luis Potosí (Xilitla), NE. https://cycadlist.org/scientific_name/1018
- *C. martinezii* Mart.-Domínguez, Nic.-Mor. & D.W.Stev. (2021) est un **synonyme de *C. aurantiaca*** ; *C. microstrobila* est un synonyme de *C. latifolia* (WLoC).
- *Chigua bernalii* et *Chigua restrepoi* sont **tous deux synonymes de *Zamia restrepoi*** dans WLoC. Il n'existe pas de « *Zamia bernalii* » accepté.

## 3. CITES et UE (Species+, API JSON, lue le 1er octobre 2026)

| Taxon (id Species+) | CITES actuelle | Inscription | UE actuelle | Remarques |
|---|---|---|---|---|
| Cycadales spp. (12405) | II | depuis le 04/02/1977 ; annotation **#4** en vigueur au 05/03/2026 (CoP20) | B | « sauf les espèces inscrites à l'annexe I » |
| *Stangeria eriopus* (14479) | **I** | **01/07/1975** | **A** | genre classé dans les Stangeriaceae dans Species+ |
| *Ceratozamia* spp. (13147) | **I** | **01/08/1985** (annexe II du 04/02/1977 au 01/08/1985) | **A** | Species+ ne liste que 27 espèces de *Ceratozamia* (checklist 2013) ; l'inscription au niveau du genre couvre toutes les espèces |
| *Bowenia* spp. (13650) | II | 04/02/1977 (via Cycadales), #4 | B | classé dans les Stangeriaceae dans Species+ |
| *Lepidozamia* spp. (12684) | II | 04/02/1977 (via Cycadales), #4 | B | — |
| *Microcycas calocoma* (16025) | **I** | **01/07/1975** | **A** | — |
| *Cycas beddomei* (27663) | **I** | **22/10/1987** (annexe II avant cette date) | **A** | mesures internes plus strictes de l'Inde (interdiction d'exporter des spécimens sauvages) |
| *Zamia restrepoi* (68389) | **I** | **18/01/1990** (inscrit sous le nom *Chigua restrepoi*) | **A** | — |
| *Encephalartos* spp. (13006) | I | 04/02/1977 | A | contrôle |

Règlement UE en vigueur : **règlement (UE) 2026/1383 de la Commission du 22 juin 2026**, applicable au 29/06/2026. Il remplace le règlement (UE) 2023/966. EUR-Lex : https://eur-lex.europa.eu/legal-content/EN/TXT/PDF/?uri=OJ:L_202601383

**Exceptions**
- Annexe II / annexe B : annotation **#4**. Sont exemptés : **a) les graines**, les spores et le pollen ; b) les plantules et cultures de tissus obtenues in vitro et transportées en conteneurs stériles ; c) les fleurs coupées de plantes reproduites artificiellement ; les points d)-g) ne concernent pas les cycadales (Vanilla, Cactaceae, Opuntia, Aloe ferox, etc.). Pour *Bowenia*, *Lepidozamia* et toutes les autres cycadales de l'annexe II, **les graines ne sont donc pas soumises à la CITES**.
- Annexe I / annexe A : aucune annotation ; les graines sont couvertes. Les plantes reproduites artificiellement d'espèces de l'annexe I relèvent du régime de l'article VII(4) de la Convention (traitées comme l'annexe II). Ce point n'est pas affiché par Species+ : il vient du texte de la Convention et n'a pas été relu en ligne, cites.org étant bloqué.
- Suspensions passées (non actives) : exportations de Stangeriaceae du Mozambique (2015-2019) et suspension UE (b) concernant le Mozambique, sources sauvages, non active.

## 4. Écarts dans les brouillons (affirmation → donnée vérifiée → source)

### genre-stangeria-fr.html
1. « Statut UICN : vulnérable (VU A2acd+4acd), évaluation publiée en 2010 » ; bibliographie : Williams et al. (2010) → WLoC cite l'évaluation **Bösenberg J.D. 2022**, *The IUCN Red List of Threatened Species* 2022 : e.T41939A50797225, catégorie VU A2acd+4acd → https://cycadlist.org/scientific_name/430 (la Liste rouge elle-même n'a pas été consultée ; WebSearch ne donne pas d'année).
2. « Le sens de l'épithète eriopus […] n'a pas pu être vérifié » → erio- (« laineux ») + -pus (« pied »), allusion aux bases foliaires laineuses (Haynes 2022, Phytotaxa 550 : 1-31) → même URL.
3. « jusqu'à l'extrême sud du Mozambique » → WLoC limite l'aire à l'Afrique du Sud (Cap-Oriental, KwaZulu-Natal). Species+ indique Eswatini, Mozambique et Afrique du Sud. La nuance du brouillon est acceptable ; on peut ajouter Eswatini (Species+) → https://speciesplus.net/species#/taxon_concepts/14479/distribution
4. Synonymes incomplets : ajouter *S. katzeri* Regel (1874) et *S. schizodon* W.Bull (1872) (facultatif) → WLoC.
5. CITES : manque la date d'inscription, **annexe I depuis le 01/07/1975**. À préciser : Species+ range encore *Stangeria* dans les Stangeriaceae → Species+ 14479.

### genre-ceratozamia-fr.html
6. « 44 à 45 espèces (deux relevés) » (chapeau, encadré, FAQ, liste) → **45 espèces, 0 taxon infraspécifique** (WLoC v. 2026.08.15) → https://cycadlist.org/genus/Ceratozamia
7. « *Ceratozamia fuscoviridis* […] en danger critique » → **EN** (A2c ; B1ab(i,ii,iii,iv,v)) → https://cycadlist.org/scientific_name/374
8. « *C. kuesteriana* et ***C. miqueliana*** figurent parmi les espèces en danger critique » ; dans la liste : « *C. miqueliana* […] en danger critique » → *C. miqueliana* = **EN** (A2acd ; B2ab(iii,v) ; C2a(i)) → /scientific_name/36
9. « ***C. hildae***, *C. matudae* et *C. morettii* parmi les espèces en danger » → *C. hildae* = **CR** (A2acd) → /scientific_name/24. *C. matudae* et *C. morettii* sont bien EN.
10. « Beaucoup de ces évaluations datent de 2010 » → toutes les évaluations de *Ceratozamia* citées par WLoC datent de **2022** ; 18 espèces sur 45 sont NE → pages espèce WLoC.
11. « Anciens noms : *Zamia mexicana* (Brongn.) Linden pour *Ceratozamia mexicana* » → ce nom est absent de WLoC. *Zamia mexicana* Miq. (1861) y est un synonyme de *Zamia loddigesii*. À supprimer, ou à appuyer sur POWO ou IPNI après vérification → export WLoC, recherche « mexicana ».
12. « *C. huastecorum* Avendaño, Vovides & Cast. » → **Avendaño, Vovides & Cast.-Campos** → /scientific_name/26
13. « *C. guatemalensis* Pérez-Farr., Gut.-Ortega & Quezada » → **Pérez-Farr., Gut.Ortega & M.L.Quezada** → /scientific_name/1069
14. Auteurs absents (à ajouter pour l'homogénéité) : *delucana* Vázq.Torres, A.Moretti & Carvajal-Hern. ; *mixeorum* Chemnick, T.J.Greg. & Salas-Mor. ; *whitelockiana* Chemnick & T.J.Greg. ; *schiblii* Pérez-Farr. & Gut.Ortega ; *chimalapensis* Pérez-Farr. & Vovides ; *oliversacksii* D.W.Stev., Mart.-Domínguez & Nic.-Mor. ; *leptoceras* Mart.-Domínguez, Nic.-Mor., D.W.Stev. & Lorea-Hern. ; *zoquorum* Pérez-Farr., Vovides & Iglesias ; *sancheziae* Pérez-Farr., Gut.Ortega & Vovides ; *robusta* Miq. ; *hondurensis* J.L.Haynes, Whitelock, Schutzman & R.S.Adams → tableau §2.
15. « *C. osbornei* […] statut contesté » → **accepté par WLoC sans réserve** (la critique de Haynes 2023 n'est pas reprise en note). Formuler « accepté par WLoC ; discuté par Haynes (2023) » → /scientific_name/1022
16. « *C. dominguezii* […] statut discuté » → préciser : accepté par WLoC, qui rejette explicitement la synonymie avec *C. subroseophylla* proposée en 2022 → /scientific_name/909
17. Répartitions plus larges que celles de WLoC (à nuancer ou à attribuer à POWO) :
    - *C. latifolia* « Querétaro, San Luis Potosí et Hidalgo » → WLoC : San Luis Potosí seulement ;
    - *C. matudae* « Chiapas et Oaxaca, jusqu'à l'ouest du Guatemala » → WLoC : Chiapas ;
    - *C. vovidesii* « jusqu'au sud-ouest du Guatemala selon POWO » → WLoC : Chiapas ;
    - *C. robusta* « Belize et Guatemala » → WLoC : Guatemala (Alta Verapaz, Petén, Quiché, Huehuetenango, Izabal) et Chiapas, **pas le Belize** ;
    - *C. delucana* « […] et nord-ouest de l'Hidalgo » → WLoC : Puebla, Veracruz ;
    - *C. zoquorum* « nord du Chiapas » → WLoC : Chiapas et Tabasco.
18. CITES : préciser la date. *Ceratozamia* spp. est à l'**annexe I depuis le 01/08/1985** (annexe II de 1977 à 1985) et à l'annexe A du règlement (UE) 2026/1383 → Species+ 13147.

### genre-bowenia-fr.html
19. « évaluation de 2010 pour *Bowenia serrulata* » ; « signée K. D. Hill, date de 2010 » → WLoC cite **Bösenberg J.D. 2022**, e.T41979A2959179, LC → https://cycadlist.org/scientific_name/9. Pour *B. spectabilis*, WLoC affiche LC sans année (page 1 des références) ; WebSearch ne donne pas d'année non plus.
20. « leur commerce international exige des permis » → à nuancer : l'annotation #4 exempte les **graines**, le pollen, les cultures in vitro en conteneurs stériles et les fleurs coupées de plantes reproduites artificiellement → Species+ 13650. Annexe II depuis 1977 et annexe B : confirmés.
21. Famille : ajouter que Species+ et la nomenclature CITES classent *Bowenia* dans les **Stangeriaceae**, alors que WLoC et POWO le placent dans les Zamiaceae.

### genre-lepidozamia-fr.html
22. Liste des espèces : « *Lepidozamia hopei* (W.Hill) Regel » → **WLoC : *Lepidozamia hopei* Regel** (Gartenflora 25 : 6, 1876 ; nom non fondé sur *Catakidozamia hopei*, selon Johnson 1959). POWO et IPNI donnent « (W.Hill) Regel », Gartenflora 25 : 5 (extrait WebSearch). Le site suit POWO : la forme actuelle se défend, mais il faut signaler la divergence. Le texte du brouillon (§ histoire : « en partant d'un nom horticole ») correspond déjà à la lecture de WLoC → https://cycadlist.org/scientific_name/371
23. « *Macrozamia hopei* C.Moore […] synonyme » → dans WLoC, *Macrozamia hopei* C.Moore (1884) est « **Invalid** » ; le synonyme est *Macrozamia hopei* **W.Hill** (1886) → export WLoC, recherche « hopei ».
24. « annexe II, leur commerce international exige des permis » → même remarque qu'au n° 20 (annotation #4 : graines exemptées) → Species+ 12684.
25. Confirmé sans écart : 2 espèces ; LC 2022 pour les deux ; protologue de *L. peroffskyana* ; *Macrozamia* = 41 espèces.

### ordre-cycadales-fr.html
26. « Cycas : 124 espèces » → **118 espèces + 6 taxons infraspécifiques** (124 noms acceptés) → https://cycadlist.org/genus/Cycas
27. « Encephalartos : 71 espèces » → **65 espèces + 6 taxons infraspécifiques** (71 noms) → https://cycadlist.org/genus/Encephalartos
28. « Zamia : environ 90 espèces » → **88 espèces + 2 variétés** (90 noms) → https://cycadlist.org/genus/Zamia
29. « Ceratozamia : 44 à 45 » → **45** ; « Dioon : 19 à 20 » → **19** ; la phrase « deux relevés récents donnent des chiffres légèrement différents » est à supprimer, la version 2026.08.15 étant affichée sur chaque page.
30. « environ 380 espèces et 396 noms acceptés » → exact : **382 espèces + 14 infraspécifiques = 396** ; on peut écrire « 382 espèces ».
31. « ses deux espèces s'appellent aujourd'hui *Zamia restrepoi* et *Zamia bernalii* » → dans WLoC, ***Chigua bernalii* est un synonyme de *Zamia restrepoi*** ; il n'existe pas de *Zamia bernalii* accepté → export WLoC, recherche « Chigua ». À vérifier aussi dans POWO avant de corriger.
32. « Bowenia : 2 espèces du nord-est du Queensland » → *B. serrulata* vit dans le centre-est (Byfield) : écrire « de l'est du Queensland » (cohérent avec la fiche genre).
33. « Les autres espèces, à l'annexe II, circulent avec des permis » → ajouter l'exemption des graines, du pollen, des cultures in vitro et des fleurs coupées (annotation #4, CoP20, en vigueur au 05/03/2026) → Species+ 12405.
34. « certains auteurs séparent une famille Stangeriaceae » → préciser que c'est encore la famille utilisée par **Species+ et la CITES** (checklist 2013) pour *Stangeria* et *Bowenia*.
35. Annexe I (Ceratozamia, Encephalartos, *Microcycas calocoma*, *Stangeria eriopus*, *Cycas beddomei*, *Zamia restrepoi*) et correspondance I/A, II/B : **confirmé** par Species+. Dates à ajouter si souhaité : 1975 (*Stangeria*, *Microcycas*), 1977 (*Encephalartos*), 1985 (*Ceratozamia*), 1987 (*C. beddomei*), 1990 (*Z. restrepoi*).

## 5. Extraits WebSearch utilisés (POWO, IPNI, UICN non consultés directement)
- POWO et IPNI, *Lepidozamia hopei* (W.Hill) Regel, Gartenflora 25 : 5 (1876), basionyme *Catakidozamia hopei* W.Hill : https://powo.science.kew.org/taxon/urn:lsid:ipni.org:names:297149-1 ; https://www.ipni.org/n/297149-1
- UICN : les extraits confirment VU pour *S. eriopus* et LC pour *B. spectabilis*, sans année d'évaluation (https://en.wikipedia.org/wiki/Stangeria ; https://en.wikipedia.org/wiki/Bowenia_spectabilis). Les années 2022 indiquées ci-dessus viennent uniquement des références affichées par WLoC.
