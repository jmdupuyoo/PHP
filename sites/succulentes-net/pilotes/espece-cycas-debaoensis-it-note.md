# Note — *Cycas debaoensis* (IT 11764)

- Page : https://succulentes.net/it/piante/cycadales/cycas/debaoensis/ (id 11764, parent 11549 ; traductions FR 5683, EN 16403, ES 24530). Fiche ancienne (janvier 2026), non réécrite selon le gabarit du 30/09/2026. Aucun brouillon local IT (non créé lors de cette retouche ponctuelle).

## Correzione del 18/10/2026 (lot RF2)
- Point de pilotes/fr-retouches.md (ajouts RF1) : statut CR non daté (« valutazione riportata in banche dati botaniche e specialistiche »).
- Sources relues ce jour : Crossref, doi 10.2305/IUCN.UK.2023-1.RLTS.T42038A68899343.en (« Cycas debaoensis: Bösenberg, J.D. », issued 2020-02-12, version 2023-1) et doi 10.2305/IUCN.UK.2010-3.RLTS.T42038A10635002.en (« Cycas debaoensis: Tang, W. », issued 2009-10-31, version 2010-3) ; GBIF API species/2683265/iucnRedListCategory : CRITICALLY_ENDANGERED (iucnTaxonID 42038).
- replace_in_content sur 11764 (simulation 2/2 puis application 2/2) : « Minacce in natura e status IUCN », statut daté (réévaluation Bösenberg publiée en 2023, version 2023-1, remplaçant Tang 2010-3 ; CR, catégorie actuelle GBIF ; page de la Liste rouge non consultée) ; Bibliografia, section 2, ajout de Bösenberg 2023, Tang 2010 et GBIF (avant le Kew CITES Cycads Pack). Même contenu que la FR 5683 (lot RF1).
- Rien d'autre modifié. Faiblesses connues non traitées (hors périmètre, comme la FR) : rusticité et retours de forums sans dates ni sources précises, substrat, ibrides, CITES « a livello di famiglia/complesso », liens PalmTalk/Pushing the Borders non vérifiés.
- Contrôles (sans brouillon) : nouveau texte servi (REST et page), URL 200, `<title>` « Cycas debaoensis - Succulente » en curl et User-Agent Chrome, aucun commentaire de bloc visible, hreflang fr/it/en/es ; lien GBIF ajouté en 200 ; liens internes inchangés.

## Correzione del 21/10/2026 (lot AC4, réécriture complète)

- **Réécriture complète** au gabarit IT récent (update_content, contenu seul ; slug, parent 11549, titre, traductions FR 5683 / EN 16403 / ES 24530 conservés, hreflang fr/it/en/es vérifiés ; aucune image). Alignée sur la FR 5683 réécrite le même jour (voir la note FR, section « Nettoyage FR du 21/10/2026 ») ; rédaction italienne propre, non traduite mot à mot.
- Brouillon local **créé** : `pilotes/espece-cycas-debaoensis-it.html` (source DSL scratchpad/ac4/debaoensis-it.dsl), identique au contenu en ligne (rev.py : seul écart = sommaire) ; blocs 123/123 ; aucun commentaire visible ; 10 liens internes IT en 200, aucun lien FR ; ≈ 4 390 mots (Rank Math 4 343).
- SEO Rank Math (absent jusque-là) : « Cycas debaoensis: la cicadea felce del Guangxi, coltivazione » (60) ; meta 149 ; mot-clé « Cycas debaoensis ». `<title>` vérifié (UA Chrome et curl : 200).
- JZT : aucune observation publiée sur l'espèce (dit dans « In Italia » et « Rusticità ») ; messages JMDUPUYOO exclus (liste dans la note FR).
- Jardins italiens : aucune présence de *C. debaoensis* dans pilotes/cycadales-jardins-botaniques-italie.md → « nessuna presenza documentata negli orti botanici italiani consultati ».
- Retours italiens (Tropicamente, anonymes) : Ravenne (intérieur 2010, serre froide sans souci de froid 2012, mi-ombre, bords des feuilles jaunis/secs 2012-2014, pot profond 2018 ; hybride *revoluta* × *debaoensis* : hiver 2009-2010 en serre froide « fino a −7 °C », volume doublé en 2010, cicadée la plus rapide en 2012) ; Raguse (3e essai, pourriture, gravillon + sable grossier, 2018). Plantules à feuilles divisées dès la première feuille (2010).
- Retours français et polonais (Fous de palmiers) en « Riferimenti internazionali » : Oise (−4 °C en local non chauffé, pot, 2013), Pologne (véranda ≥ −3 °C, 2014 ; pleine terre sous abris chauffés puis échec au printemps froid 2015) ; hybride en région parisienne (−5 °C sous protection, 2010-2011).

### Affirmations de l'ancienne IT retirées
- Introduction et sections « Italia / Francia / Inghilterra » génériques (« tentativi seri » sur côtes, Adriatique, lacs ; « zona 9 » ; Costa Azzurra ; Royaume-Uni) sans source ; « tolleranza al freddo sorprendente ».
- Rusticité : RBG « zona 9b secca » (le jardin ne donne pas de zone), « −5/−6 °C » Californie/Floride (PalmTalk, Dave's Garden : Cloudflare), Caroline du Nord « −8/−9 °C » (PalmTalk) ; « il fallimento tipico europeo… −2 °C ».
- « Segnalazioni anche in Yunnan » sans source → sourcé (Zheng 2017, Yang & Ferguson 2022) et divergence WLoC exposée. Stations météo (Napo 794 m, Jingxi ; timeanddate, Berkeley Earth) sans rapport démontré avec les populations → retirées.
- Menaces génériques (« cave, strade », « progetto specifico… comunità locali », cycadgroup) → Hill, FoC, Zheng 2017 (réserves, réintroduction 2007).
- CITES « a livello di famiglia/complesso » → Appendice II depuis 1977, annotation #4, Allegato B UE, Species+.
- Ibrides « linee da seme », « maggiore tolleranza al freddo » ; comparaison « *multipinnata* più da serra fredda » : non sourcés → retirés.
- Substrat, stratégie saisonnière, « box » de germination, polloni, « luce sbagliata » : génériques → remplacés par les retours datés et une déduction signalée comme telle.
- Sources retirées : POWO (non consulté), IPNI (racine), PhytoKeys (racine), Species+ (racine), Kew CITES Cycads Pack, cycadgroup, cycad.org grants 2008, PalmTalk ×2, Pushing the Borders, Tropicamente « cycas-cinesi » (sans apport propre), Jungle Music 2020/2024, ResearchGate *Aulacaspis*, timeanddate, Berkeley Earth.

### Index de la page genre IT 11549
- Ligne *debaoensis* : « Cina (Guangxi); sezione *Stangerioides*; in pericolo critico (CR, 2023) » — conforme : non modifiée.

### Points douteux
- Comme la FR : Yunnan (Zheng 2017, Yang & Ferguson 2022) non retenu par WLoC ; écarts Hill / FoC ; −7 °C de l'hybride à Ravenne (intérieur ou extérieur de la serre ?). Aucune donnée en pleine terre en Italie ni dans le sud de la France.
