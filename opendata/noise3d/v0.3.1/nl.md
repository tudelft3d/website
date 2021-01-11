---
layout: page_noise3d
title: 3D input data voor geluidssimulaties versie 0.3.1 (2020)
permalink: /opendata/noise3d/v0.3.1/nl
is_dutch: true
map: true
---

![](/img/projects/noise3d_banner.jpg)

<!--
<div class="well"><b>Feedback Sessie op 6 februari 2020</b><br/><br/>
	Op donderdag 6 februari 2020 organiseren we een feedback sessie over versie 0.3 (beschikbaar via deze webpage) bij het Kadaster in Rotterdam (10:00-12:00). Tijdens deze sessie zullen we uitleg geven over de stand van zaken van onze methode en ontvangen we graag uw feedback voor onze verdere ontwikkelingen.
	U kunt zich <a href="https://docs.google.com/forms/d/e/1FAIpQLSdlVlcyZ-vCFcH5KYUKeSWgd7MX7t0msp4dL3wnKpD0fiHAPg/viewform">hier</a> aanmelden voor deze sessie. 
	U kunt ook feedback geven op de data via het <a href="https://docs.google.com/forms/d/e/1FAIpQLSfgWxv-5xdSWcEAxmmu6tnzwlc9fw6N-wHQuJLnnSNJv2NCtg/viewform?usp=sf_link">feedback formulier</a> 
	</div>
-->
- - -

* Table of Content
{:toc}

- - -
## Wat is 3D geluidbestand NL?
De afgelopen jaren hebben Kadaster, RWS, TU Delft, RIVM en IPO samengewerkt aan de volledig automatische reconstructie van 3D input data voor geluidssimulaties. Hierbij wordt gebruik gemaakt van landsdekkende gegevensbronnen zoals de BGT, de BAG en het AHN en wordt modelinformatie van de fysieke ruimte gegenereerd die nodig is voor het uitvoeren van geluidssimulaties. 
3D geluidbestand NL bevat een beschrijving van het hoogteverloop van het terrein, de eigenschappen van het bodemoppervlak en de geometrie van gebouwen.

Meer uitleg over ons project dat startte in 2017, is [hier]({{ "/projects/noise3d/" | prepend: site.baseurl  }}) te vinden.
Begin 2020 zijn de resultaten (versie 0.3) besproken met het werkveld en is besloten om de data voor deze 3 thema's voor heel Nederland te genereren en beschikbaar te stellen via [PDOK](https://www.pdok.nl) (het geo-portal van de overheid).
Dat is de afgelopen maanden gerealiseerd, waarbij kleine verbeteringen zijn doorgevoerd die hebben geleid tot versie 0.3.1.

Deze pagina bevat een beschrijving van de data die via PDOK beschikbaar is gesteld.

## Beschrijving 3D Geluid data versie 0.3.1

Met versie 0.3.1 bieden we 3 input lagen aan voor geluid studies. Namelijk:
1. Gebouwen
2. Bodemvlakken met geluidreflectie- en absorptie waarden
3. Hoogte-beschrijving van het terrein

Daarnaast hebben we ook gekeken naar schermen en bruggen. Maar deze zijn geen onderdeel van deze versie.

De 3 lagen van de test data zijn volledig automatisch gegenereerd op basis van BAG, BGT en AHN.

Voor deze data zijn keuzes gemaakt ten aanzien van vereenvoudiging van geometrieën, hoogte-differentiatie tussen aansluitende dakdelen, minimale afmetingen, etc. Aan de hand van ervaring kunnen deze instellingen in een volgende versie worden aangepast.

<!--
![Sample area v0.3]({{ "testarea_v02_extent.png" | prepend: site.baseurl }})
-->

Deze gegevens kunnen direct als input worden gebruikt in software die op basis van Standaard Rekenmethode II van het RMG2012 (SRM2) rekent, zoals GeoMilieu en WinHavik.


### Gebouw modellen

De dataset met gebouwen bestaat uit 2D polygonen met een hoogte tot waar deze polygonen kunnen worden opgetrokken.
Voor de modellering van de gebouwen is gebruik gemaakt van BAG panden. De toekenning van gebouwhoogtes gebeurt aan de hand van punten wolken. 
Hiermee kan de 2D informatie van de BAG-panden omgezet worden tot 3D blokvormen. 
We hebben verschillende referentiehoogtes berekend (en toegevoegd aan de BAG polygonen), zodat de gebruiker zelf de optimale referentiehoogte kan kiezen voor het optrekken.

3D BAG panden zijn met eventuele hoogtesprongen gemodelleerd.
Dit is de zogenaamde [LoD 1.3 representatie](https://3d.bk.tudelft.nl/lod/). 
Dat wil zeggen dat er binnen ieder BAG-pand onderscheid gemaakt wordt tussen dakdelen als relevante hoogteverschillen tussen die dakdelen daar aanleiding toe geven.
Er is een uitzondering gemaakt voor zowel kassen als panden die nieuwer zijn dan AHN3. Deze gebouwen zijn in zijn geheel opgetrokken; zonder eventuele hoogtesprongen te modelleren, de zogenaamde LoD1.2 representatie. 

In de LoD 1.3 versie is gekozen om een hoogtesprong te modelleren vanaf 3 meter, wat grofweg de hoogte van 1 bouwlaag is. Deze drempelwaarde kan nog veranderen op basis van feedback. 
Voor deze gebouwen hebben we ook eventuele ondergrondse delen (of anderszins niet op maaiveldhoogte bebouwde delen) van BAG panden verwijderd.

De gebouwmodellen maken deel uit van de generieke 3D Basisvoorziening van het Kadaster, namelijk het bestand 3D hoogtestatistieken gebouwen.
Meer informatie over de gegenereerde gebouwmodellen en hun attributen is dan ook te vinden in de productspecificaties van de [3D Basisvoorziening](https://docs.geostandaarden.nl/3dbv/prod/#x3d-hoogtestatistieken-gebouwen).

Voor geluidsimulaties is een attribuut toegevoegd (kwaliteits_klasse) die aangeeft in hoeverre kan worden gegarandeerd dat het model goed genoeg is voor geluidsimulaties.
Er zijn 3 mogelijke waarden: 
1. keep (het model is te gebruiken). Dat geldt voor ongeveer 98% van de gebouwen; 
1. discard (het model is niet te gebruiken), minder dan 1%; 
1. review (de kwaliteit moet worden gecontroleerd), ongeveer 1%.

Deze waarden worden bepaald aan de hand van drie criteria:
* validiteit van de 2D polygoon. Indien een 2D polygoon niet geometrisch valide is, krijgt het de waarde 'discard'.
* actualiteit, met 3 opties: 
	* AHN is actueel en consistent met de BAG (keep); 
	* het BAG pand is nieuwer dan de punten wolk (discard) en kan dus geen hoogte krijgen; 
	* het AHN en BAG zijn ongeveer van hetzelfde tijdstip (review).
* puntdichtheid. Hierbij wordt voor ieder model het percentage oppervlakte berekend waarvoor punten worden gevonden. Een gebouw krijgt de waarde "keep", als dit percentage groter is dan 50%. In alle andere gevallen krijgt het gebouw-model de waarde 'review'.


### Hoogtebeschrijving Terrein
Voor versie 0.3.1 hebben we een Triangulated Irregular Network (TIN) gegenereerd als representatie voor het terrein. Met een TIN worden de hoogtevariaties in het terrein gemodelleerd met een netwerk van driehoeken. Het TIN is berekend op basis van de maaiveld punten uit het AHN3.
Hierbij zijn de hoogtes op de randen van tiles (d.w.z. kaartbladen) naar elkaar toegerekend zodat er geen artifacten ontstaan (minieme hoogteverschillen). 
Daarnaast is er een filtering toegepast door middel van een slim simplificatie algoritme. Hierbij zijn  vlakke gebieden in het terrein met minder driehoeken gemodelleerd dan gebieden met veel variatie in de hoogte. Het aantal driehoeken wordt hierbij geminimaliseerd, zonder een vooraf ingestelde maximale afwijking te overschrijden (tov de oorspronkelijke AHN3 maaiveld punten). Een grotere afwijking leidt tot een kleiner bestand met minder en grotere driehoeken.
De beschikbare bestanden hebben een maximale afwijking van *0.3*, *0.5*, en *1.0* meter. 
<!-- welke afwijkingsdrempel is gebruikt? -->
<!-- BD: we used 0.3m -->

We zijn in versie 0.3 van lijnen naar een TIN overgestapt om de hoogte van het terrein te beschrijven. De reden hiervan is dat het volledig automatisch genereren van een TIN een beduidend robuuster proces is waarbij tevens een hogere kwaliteit van het eindresultaat gegarandeerd kan worden.
We zijn ons er van bewust dat een TIN 1) niet direct ingelezen kan worden in de huidige simulatie software (alleen door de TIN om te zetten naar lijnen) en 2) dat er geen standaard efficiënt bestandsformaat voor TINs bestaat dat door GIS programma's ingelezen kan worden.

Daarom bieden we de TIN aan aan als een verzameling van 3D lijnsegmenten (de driehoekszijden) in het GeoPackage formaat.
Vanwege de omvang hebben we iedere tile opgeknipt in 9 delen.

**Attributen???**
<!-- BD: The TIN doesn't have any attributes -->

In een [proof of concept](http://resolver.tudelft.nl/uuid:9e83e3c1-0d7b-4026-a34c-2fbb61aaec2c) hebben we in het kader van een studenten project laten zien dat een geluidsberekening (volgens CNOSSOS-EU richtlijnen) in principe ook direct op een TIN kan worden uitgevoerd. Dit is een mogelijke toekomstige ontwikkeling.

### Bodemvlakken
Voor de modellering van akoestisch reflecterende en akoestisch absorberende oppervlakten wordt gebruik gemaakt van de geometrie en thematische informatie in de Basis Registratie Grootschalige Topografie.
Alle vlakken op maaiveld uit de BGT zijn daarbij omgezet in hetzij reflecterend (waarde 0) hetzij absorberend (waarde 1) volgens de tabel hieronder.
Bodemvlakken voor geluidsimulaties kennen geen hoogte-informatie (die wordt via de hoogtelijnen in de geluid-berekeningen verwerkt).
Aansluitende bodemgebieden met dezelfde akoestische eigenschappen zijn samengevoegd. Vervolgens is de geometrie vereenvoudigd door kleine oppervlakten (6, 12 of 18 m2) met eigenschappen die afwijken van de aangrenzende vlakken buiten beschouwing te laten en ook vormpunten te verwijderen die tot onnodige detaillering zouden leiden. Hierbij is een tolerantie van 15 cm in de ligging van een lijn aangehouden.
<!-- what parameters were used? -->
<!-- BD: I would say 12m2, but Tony generated the final data and he knows the parameter that he set in the workbench. -->

Er kunnen objecten zijn die een klein beetje kleiner zijn dan de gebruikte drempelwaarde. Dit komt doordat deze in eerste instantie net groot genoeg waren om te worden behouden, maar dat ze kleiner zijn geworden in het daaropvolgende proces waarbij details uit polygoongrenzen worden verwijderd.
Er zijn enkele objecten met bodemfactor NULL omdat deze objecten geen BGT eigenschappen hebben die kunnen worden omgezet in een geluidseigenschap. Bijvoorbeeld de OnbegroeidTerreindeel BGT klasse met de waarde 'in transitie' voor het fysiekVoorkomen attribuut.
<!-- small remnants of polygons? -->

Bodemvlakken zijn beschikbaar in het GeoPackage formaat.

**Welke datum van de BGT is gebruikt?????**
<!-- BD: To be honest, I only have a guess (2018). Since Tony generated the final data, he knows it. -->

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border:none;}
.tg td{padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
.tg th{font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
.tg .tg-fymr{font-weight:bold;border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-pcvp{border-color:inherit;text-align:left;vertical-align:top;background-color: #ecf0f1;}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-fymr">BGT klasse en <code>fysiekVoorkomen</code> attribuutwaarde</th>
    <th class="tg-fymr">Akoestische classificatie</th>
  </tr> 
  <tr>
    <td class="tg-pcvp">OndersteunendWaterdeel (alles)</td>
    <td class="tg-pcvp">absorberend</td>
  </tr>
  <tr>
    <td class="tg-0pky">OnbegroeidTerreindeel (erf, gesloten verharding, open verharding, half verhard</td>
    <td class="tg-0pky">reflecterend</td>
  </tr>
  <tr>
    <td class="tg-pcvp">OnbegroeidTerreindeel (onverhard, zand)</td>
    <td class="tg-pcvp">absorberend</td>
  </tr>
  <tr>
    <td class="tg-0pky">BegroeidTerreindeel</td>
    <td class="tg-0pky">absorberend</td>
  </tr>
  <tr>
    <td class="tg-pcvp">Pand (alles)</td>
    <td class="tg-pcvp">reflecterend</td>
  </tr>
  <tr>
    <td class="tg-0pky">Scheiding (alles)</td>
    <td class="tg-0pky">reflecterend</td>
  </tr>
  <tr>
    <td class="tg-pcvp">Kunstwerkdeel (alles)</td>
    <td class="tg-pcvp">reflecterend</td>
  </tr>
  <tr>
    <td class="tg-0pky">OverigBouwwerk (alles)</td>
    <td class="tg-0pky">reflecterend</td>
  </tr>
  <tr>
    <td class="tg-pcvp">Overbruggingsdeel (alles)</td>
    <td class="tg-pcvp">reflecterend</td>
  </tr>
  <tr>
    <td class="tg-0pky">Wegdeel (anders dan ruiterpad en onverhard)</td>
    <td class="tg-0pky">reflecterend</td>
  </tr>
  <tr>
    <td class="tg-pcvp">Wegdeel (ruiterpad, onverhard)</td>
    <td class="tg-pcvp">absorberend</td>
  </tr>
  <tr>
    <td class="tg-0pky">OndersteunendWegdeel (verkeerseiland, gesloten verharding, open verharding, half verhard)</td>
    <td class="tg-0pky">reflecterend</td>
  </tr>
  <tr>
    <td class="tg-pcvp">OndersteunendWegdeel (berm, onverhard, groenvoorziening)</td>
    <td class="tg-pcvp">absorberend</td>
  </tr>
  <tr>
    <td class="tg-0pky">Waterdeel (alles)</td>
    <td class="tg-0pky">reflecterend</td>
  </tr>
</table>


## Disclaimer
Het bestand 3D geluid NL versie 0.3.1 wordt ter beschikking gesteld als beta bestand. Er kunnen geen rechten aan worden ontleend.

Geen van de partijen die betrokken zijn bij de totstandkoming kan aansprakelijk worden gesteld voor eventuele schade die voortvloeit uit het gebruik van de data. 

----
# Project partners

{% include noise3d/partners.html %}
