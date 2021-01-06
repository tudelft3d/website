---
layout: page_noise3d
title: 3D input data voor geluidssimulaties versie 0.3.1 (2020)
permalink: /opendata/noise3d/nl_copy
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
## Wat is 3D geluidbestand NL? Introductie
De afgelopen jaren hebben Kadaster, RWS, TU Delft, RIVM en IPO samengewerkt aan de automatische reconstructie van 3D input data voor geluidssimulaties. Hierbij wordt gebruik gemaakt van landsdekkende gegevensbronnen zoals de BGT, de BAG en het AHN en wordt modelinformatie van de fysieke ruimte gegenereerd die nodig is voor het uitvoeren van geluidssimulaties. Het bevat een beschrijving van het hoogteverloop van het terrein, de eigenschappen van het bodemoppervlak en de geometrie van gebouwen.

Meer uitleg over ons project dat startte in 2017, is [hier]({{ "/projects/noise3d/" | prepend: site.baseurl  }}) te vinden.
Begin 2020 zijn de resultaten besproken met het werkveld en is besloten om de data voor deze 3 thema's voor heel Nederland te genereren en beschikbaar te stellen via [PDOK]{https://www.pdok.nl} (het geo-portal van de overheid)

Deze pagina bevat een beschrijving van deze data

## Beschrijving 3D Geluid data versie 0.3.1
Onze methode heeft als doel om zo veel mogelijk detail en nauwkeurigheid te behouden, en tegelijkertijd het data-volume klein te houden en deze te laten aansluiten op de huidige beschikbare geluidsimulatie software systemen. 

Met versie 0.3 bieden we 3 input lagen aan voor geluid studies. Namelijk:
1. Gebouwen
2. Bodemvlakken met geluidreflectie- en absorptie waarden
3. Hoogte-beschrijving van het terrein

Daarnaast hebben we ook gekeken naar schermen en bruggen. Maar deze zijn geen onderdeel van de test data.

De 3 lagen van de test data zijn volledig automatisch gegenereerd op basis van BAG, BGT en AHN. De wijze waarop we dit hebben gedaan, is hieronder in meer detail beschreven. 

De belangrijkste veranderingen ten opzichte van versie 0.2 zijn:
* Sterk verbeterde LoD 1.3 gebouw modellen (de LoD1 gebouwen zijn niet gewijzigd ten opzichte van versie 0.2)
* Terrein opgeleverd als TIN in plaats van hoogtelijnen

Voor deze test data zijn voorlopige keuzes gemaakt ten aanzien van vereenvoudiging van geometrieën, hoogte-differentiatie tussen aansluitende dakdelen, minimale afmetingen, etc. Aan de hand van uw reacties kunnen deze instellingen in een volgende versie worden aangepast.

Voordat de 3D input data wordt opgeschaald tot landsdekkend niveau wordt het product voor een testgebied ter beschikking gesteld aan potentiële eindgebruikers, met als doel om feedback te verzamelen. Het testgebied beslaat een deel van het Rijnmondgebied, om precies te zijn: de kaartbladen 37ez2, 37fz1, 37gn2 en 37hn1, waarbinnen een deel van de gemeentes Schiedam en Rotterdam vallen.

![Sample area v0.3]({{ "testarea_v02_extent.png" | prepend: site.baseurl }})

Deze gegevens kunnen direct als input worden gebruikt in software die op basis van Standaard Rekenmethode II van het RMG2012 (SRM2) rekent, zoals GeoMilieu en WinHavik.


### Gebouw modellen (zie ook de [3D webviewer]({{ "lod13map.html" | prepend: site.baseurl }}))

Voor de modellering van de gebouwen is gebruik gemaakt van BAG panden. De toekenning van gebouwhoogtes gebeurt aan de hand van de AHN-puntenwolk. Hiermee wordt de 2D informatie van de BAG-panden omgezet tot 3D blokvormen. 

Het modelleren van elk BAG pand met slechts een enkele hoogte, zoals opgeleverd bij versie 0.2 (LoD 1) kan tot fouten leiden als een pand in werkelijkheid verschillende hoogtes heeft bijvoorbeeld in het geval van een kerk met toren of een huis met aanliggende garage. Daarom hebben we voor versie 0.3 gekeken hoe we BAG panden met hoogtesprongen kunnen modelleren.
Dit is de zogenaamde LoD 1.3 representatie, dat wil zeggen dat er binnen ieder BAG-pand onderscheid gemaakt wordt tussen dakdelen als relevante hoogteverschillen tussen die dakdelen daar aanleiding toe geven.
In versie 0.3 is gekozen om een hoogtesprong te modelleren vanaf 3 meter, wat grofweg de hoogte van 1 bouwlaag is. Deze drempelwaarde hebben we met het project team bepaald, maar kan nog veranderen op basis van feedback. 

Voor de LoD1.3 gebouwen hebben we ook de ondergrondse delen van BAG panden zo goed als mogelijk verwijderd. Dit is recent ontwikkelde functionaliteit en daarom nog werk-in-uitvoering. Het zal in een volgende versie worden verbeterd (op dit moment worden sommige bovengrondse gebouwen onterecht verwijderd).

Naast de LoD 1.3 gebouwen zijn ook de LoD1 gebouwen nog beschikbaar van versie 0.2. Hierin heeft ieder BAG pand slechts een enkele hoogte waarde, en vindt er dus geen opsplitsing plaats op basis van hoogtesprongen. De hoogtes in dit LoD1 bestand zijn berekend voor het 75-percentiel en het 95-percentiel.

De hoogte van de LoD 1.3 dakdelen is uitgedrukt in het 70-percentiel van alle AHN-punten die binnen dat dakdeel vallen.

Op de LoD 1.3 gebouwen zijn de volgende opmerkingen van toepassing:
1. Complexe gebouwen. Het LoD 1.3 reconstructie proces werkt op basis van daklijnen die in de puntenwolk worden gedetecteerd. Als het aantal lijnen hoog is, neemt de verwerkingstijd van de LoD 1.3 reconstructie sterk toe. Gebouwen met een hoog aantal gedetecteerde lijnen (meer dan 400) zijn daarom als 'complex' aangemerkt met het `is_complex` attribuut. Om de verwerkingstijd laag te houden zijn bij deze 'complexe' gebouwen niet alle gedetecteerde lijnen meegenomen in de reconstructie maar alleen de 400 langste lijnen. Hierdoor kan de modelleringsfout groter zijn (dit is een van aandachtspunten voor vervolgonderzoek).
2. Naast de BAG panden zijn in deze versie ook de overige bouwwerken met het type 'open loods' uit de BGT meegenomen. Deze objecten missen dus de attributen die uit de BAG komen.
3. In een voorverwerkingsstap is gepoogd ondergrondse panden (zoals ondergrondse parkeergarages) uit de BAG te filteren. Door onvolkomenheden in dit proces zijn echter ook een aantal bovengrondse gebouwen uitgefilterd (voorbeeld: de Markthal in Rotterdam). Dit proces moet nog verder worden geoptimaliseerd.
4. Als er geen hoogtepunten en/of dakvlakken voor een gebouw zijn gedetecteerd is de dakhoogte op `0` gezet. Zie ook het `dak_type` attribuut.

Zoals al eerder gemeld, zijn de LoD 1 gebouwen identiek aan versie 0.2.


![dak types]({{ "building_lod_v03.png" | prepend: site.baseurl }})

<!-- Meer uitleg over de reconstructie van LoD 1.3 staat uitgelegd in de volgende slides.

<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTooIsoh8wN8nbd_xv4YOgo0blfdm7dSG4NSpIvgL5meQ4yz4YiL1n3TGjvdpJea20x1e6r-E0woeDc/embed?start=false&loop=false&delayms=3000" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe> -->

### Hoogtebeschrijving Terrein
Voor versie 0.3 hebben een Triangulated Irregular Network (TIN) gegenereerd als representatie voor het terrein. Met een TIN worden de hoogtevariaties in het terrein gemodelleerd met een netwerk van driehoeken. Het TIN is berekend op basis van de maaiveld punten uit het AHN3.

Het TIN is berekend door middel van een slim simplificatie algoritme, waarbij vlakke gebieden in het terrein met minder driehoeken worden gemodelleerd dan gebieden met veel variatie in de hoogte. Het aantal driehoeken wordt hierbij geminimaliseerd, zonder een vooraf ingestelde maximale afwijking te overschrijden (tov de oorspronkelijke AHN3 maaiveld punten).

We stellen drie TIN bestanden beschikbaar met ieder een verschillende maximale afwijking tussen het TIN en de AHN3 maaiveld punten. De beschikbare bestanden hebben een maximale afwijking van respectievelijk *0.3*, *0.5*, en *1.0* meter. Een grotere afwijking leidt tot een kleiner bestand met minder en grotere driehoeken.

We zijn in versie 0.3 van hoogtelijnen naar een TIN overgestapt omdat het volledig automatisch genereren van een TIN een beduidend robuuster process is waarbij tevens een hogere kwaliteit van het eindresultaat gegarandeerd kan worden. We zijn ons er daarbij wel van bewust dat een TIN 1) niet direct ingelezen kan worden in de huidige simulatie software en 2) dat er geen standaard efficiënt bestandsformaat voor TINs bestaat dat door GIS programma's ingelezen kan worden.

Daarom bieden we de TIN ook aan aan als een verzameling van 3D lijnsegmenten (de driehoekszijden) in het ESRI Shapefile formaat en het GeoPackage formaat.

### Bodemgebieden
Voor de modellering van akoestisch reflecterende en akoestisch absorberende oppervlakten wordt gebruik gemaakt van de geometrie en thematische informatie in de BGT. Bodemgebieden kennen geen hoogte-informatie (die wordt via de hoogtelijnen in de geluid-berekeningen verwerkt). Aansluitende bodemgebieden met dezelfde akoestische eigenschappen zijn samengevoegd. Vervolgens is de geometrie vereenvoudigd door kleine oppervlakten (6, 12 of 18 m2) met eigenschappen die afwijken van de aangrenzende vlakken buiten beschouwing te laten en ook vormpunten te verwijderen die tot onnodige detaillering zouden leiden. Hierbij is een tolerantie van 15 cm in de ligging van een lijn aangehouden.

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

## Downloads

Het 3D Geluidbestand versie 0.3 testbestand is beschikbaar in *ESRI shape*.

De volgende brondata zijn gebruikt:
* BGT: datum 11-02-2019. <a href="{{ "source_bgt.zip" | prepend: "/download/noise3d/v02/" | prepend: site.baseurl }}">[download source data]</a>
* BAG: datum 25-12-2019. Ondergrondse bouwwerken zijn verwijderd (gaat nog niet overal goed). Daarnaast zijn uit de BGT de overige bouwwerken met het type 'open loods' bijgevoegd. <a href="{{ "bag_plus_overigbouwwerk.zip" | prepend: "/download/noise3d/v03/source/" | prepend: site.baseurl }}">[download source data]</a>
* AHN: versie 3, download via PDOK: [37ez2](https://geodata.nationaalgeoregister.nl/ahn3/extract/ahn3_laz/C_37EZ2.LAZ), [37fz1](https://geodata.nationaalgeoregister.nl/ahn3/extract/ahn3_laz/C_37FZ1.LAZ), [37gn2](https://geodata.nationaalgeoregister.nl/ahn3/extract/ahn3_laz/C_37GN2.LAZ), [37hn1](https://geodata.nationaalgeoregister.nl/ahn3/extract/ahn3_laz/C_37HN1.LAZ)

#### Data gebouwen

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
    <th class="tg-fymr">Klasse</th>
    <th class="tg-fymr">Uitleg</th>
    <th class="tg-fymr">Bestandsnaam</th>
    <th class="tg-fymr">Download</th>
  </tr>
  <tr>
    <td class="tg-pcvp">Gebouwen in LoD1.0</td>
    <td class="tg-pcvp">Footprints van gebouwen met 1 hoogte per gebouw, berekend op basis van zowel het 75ste percentiel als 95ste percentiel van hoogtepunten die binnen het vlak vallen. Identiek aan versie 0.2.</td>
    <td class="tg-pcvp">&lt;tile id&gt;_lod10_&lt;percentile&gt;</td>
    <td class="tg-pcvp">
      <a href="{{ "lod10.zip" | prepend: "/download/noise3d/v03/gebouwen/" | prepend: site.baseurl }}">[ESRI Shapefile]</a><br/>
      </td>
  </tr>
  <tr>
    <td class="tg-0pky">Gebouwen in LoD 1.3</td>
    <td class="tg-0pky">Footprints van gebouwen opgesplitst in dakdelen. Ieder dakdeel heeft een eigen hoogte gebaseerd op het 70ste percentiel van hoogtepunten punten die binnen het dakdeel vallen. De mininimale hoogtesprong tussen dakdelen is 3 meter (ongeveer 1 verdiepingshoogte). Open loodsen uit de BGT zijn ook toegevoegd. Ondergrondse delen van BAG panden zijn verwijderd (gaat nog niet overal goed). </td>
    <td class="tg-0pky">lod13</td>
    <td class="tg-0pky">
      <a href="{{ "lod13.zip" | prepend: "/download/noise3d/v03/gebouwen/" | prepend: site.baseurl }}">[ESRI Shapefile]</a><br/>
      </td>
  </tr>
</table>

#### Data hoogte van het terrein

Het TIN is beschikbaar in drie verschillende bestandsformaten en voor drie verschillende uitduinngswaarden (0.3m, 0.5m en 1m). Shapefiles worden aangeraden voor ArcGIS, GeoPackage in QGIS, en het OBJ formaat in 3D viewers zoals Meshlab, Blender en FME.

De 3D lijnbestanden zijn hoofdzakelijk bedoeld om direct te kunnen importeren in geluid simulatie software. Vanwege de bestandsgrootte hebben we deze opgesplitst in 4 tegels.

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
.tg td{font-family:sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-baqh{text-align:center;vertical-align:middle}
.tg .tg-tin_shp{text-align:center;vertical-align:middle; background-color: #ecf0f1;}
.tg .tg-wa1i{font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
<div class="tg-wrap"><table class="tg">
  <tr>
    <th class="tg-wa1i" rowspan="2">Geometrie</th>
    <th class="tg-wa1i" rowspan="2">Bestands formaat</th>
    <th class="tg-amwm" colspan="12">Maximale afwijking</th>
  </tr>
  <tr>
    <td class="tg-amwm" colspan="4">0,3m</td>
    <td class="tg-amwm" colspan="4">0,5m</td>
    <td class="tg-amwm" colspan="4">1,0m</td>
  </tr>
  <tr>
    <td class="tg-wa1i" rowspan="3">TIN</td>
    <td class="tg-0lax">ESRI Shapefile</td>
    <td class="tg-tin_shp" colspan="4">
      <a href="{{ "tin_03m.shp.zip" | prepend: "/download/noise3d/v03/tin/e03m/" | prepend: site.baseurl }}">tin_03m.shp.zip</a><br/></td>
    <td class="tg-tin_shp" colspan="4">
      <a href="{{ "tin_05m.shp.zip" | prepend: "/download/noise3d/v03/tin/e05m/" | prepend: site.baseurl }}">tin_05m.shp.zip</a><br/></td>
    <td class="tg-tin_shp" colspan="4">
      <a href="{{ "tin_1m.shp.zip" | prepend: "/download/noise3d/v03/tin/e1m/" | prepend: site.baseurl }}">tin_1m.shp.zip</a><br/></td>
  </tr>
  <tr>
    <td class="tg-0lax">GeoPackage</td>
    <td class="tg-baqh" colspan="4">
      <a href="{{ "tin_03m.gpkg.zip" | prepend: "/download/noise3d/v03/tin/e03m/" | prepend: site.baseurl }}">tin_03m.gpkg.zip</a><br/></td>
    <td class="tg-baqh" colspan="4">
      <a href="{{ "tin_05m.gpkg.zip" | prepend: "/download/noise3d/v03/tin/e05m/" | prepend: site.baseurl }}">tin_05m.gpkg.zip</a><br/></td>
    <td class="tg-baqh" colspan="4">
      <a href="{{ "tin_1m.gpkg.zip" | prepend: "/download/noise3d/v03/tin/e1m/" | prepend: site.baseurl }}">tin_1m.gpkg.zip</a><br/></td>
  </tr>
  <tr>
    <td class="tg-0lax">Wavefront OBJ</td>
    <td class="tg-tin_shp" colspan="4">
      <a href="{{ "tin_03m.obj.zip" | prepend: "/download/noise3d/v03/tin/e03m/" | prepend: site.baseurl }}">tin_03m.obj.zip</a><br/></td>
    <td class="tg-tin_shp" colspan="4">
      <a href="{{ "tin_05m.obj.zip" | prepend: "/download/noise3d/v03/tin/e05m/" | prepend: site.baseurl }}">tin_05m.obj.zip</a><br/></td>
    <td class="tg-tin_shp" colspan="4">
      <a href="{{ "tin_1m.obj.zip" | prepend: "/download/noise3d/v03/tin/e1m/" | prepend: site.baseurl }}">tin_1m.obj.zip</a><br/></td>
  </tr>
  <tr>
    <td class="tg-wa1i" rowspan="2">3D Lijnen</td>
    <td class="tg-0lax">ESRI Shapefile</td>
    <td class="tg-baqh" colspan="4">
      <a href="{{ "lines_03m.zip" | prepend: "/download/noise3d/v03/tin/e03m/" | prepend: site.baseurl }}">lines_03m.zip</a><br/></td>
    <td class="tg-baqh" colspan="4">
      <a href="{{ "lines_05m.zip" | prepend: "/download/noise3d/v03/tin/e05m/" | prepend: site.baseurl }}">lines_05m.zip</a><br/></td>
    <td class="tg-baqh" colspan="4">
      <a href="{{ "lines_1m.zip" | prepend: "/download/noise3d/v03/tin/e1m/" | prepend: site.baseurl }}">lines_1m.zip</a><br/></td>
  </tr>
  <tr>
    <td class="tg-0lax">ESRI Shapefile</td>
    <td class="tg-tin_shp" colspan="4">
      <a href="{{ "lines_03m_tiles.zip" | prepend: "/download/noise3d/v03/tin/e03m/" | prepend: site.baseurl }}">lines_03m_tiles.zip</a><br/></td>
    <td class="tg-tin_shp" colspan="4">
      <a href="{{ "lines_05m_tiles.zip" | prepend: "/download/noise3d/v03/tin/e05m/" | prepend: site.baseurl }}">lines_05m_tiles.zip</a><br/></td>
    <td class="tg-tin_shp" colspan="4">
      <a href="{{ "lines_1m_tiles.zip" | prepend: "/download/noise3d/v03/tin/e1m/" | prepend: site.baseurl }}">lines_1m_tiles.zip</a><br/></td>
  </tr>
</table></div>

#### Data bodemvlakken

De bodemvlakken zijn beschikbaar in 3 varianten ieder met een andere minimale object grootte: *6 m2*, *12 m2* en *18 m2*. Bij de *6 m2* variant, zijn bijvoorbeeld de objecten met een oppervlakte van minder dan 6 vierkante meter samengevoegd met het grootste aangrenzende object.

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-wa1i{font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-0lax{text-align:left;vertical-align:top}
.tg .tg-nrix{text-align:center;vertical-align:middle}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
<div class="tg-wrap"><table class="tg">
  <tr>
    <th class="tg-wa1i" rowspan="2">Format</th>
    <th class="tg-wa1i" colspan="3">Minimum object area</th>
  </tr>
  <tr>
    <td class="tg-wa1i">6 m2</td>
    <td class="tg-wa1i">12 m2</td>
    <td class="tg-wa1i">18 m2</td>
  </tr>
  <tr>
    <td class="tg-0lax">ESRI Shapefile</td>
    <td class="tg-nrix">
      <a href="{{ "tiles_bodemvlakken_6.shp.zip" | prepend: "/download/noise3d/v03/bodemvlakken/m6/" | prepend: site.baseurl }}">tiles_bodemvlakken_6.shp.zip</a><br/></td>
    <td class="tg-nrix">
      <a href="{{ "tiles_bodemvlakken_12.shp.zip" | prepend: "/download/noise3d/v03/bodemvlakken/m12/" | prepend: site.baseurl }}">tiles_bodemvlakken_12.shp.zip</a><br/></td>
    <td class="tg-nrix">
      <a href="{{ "tiles_bodemvlakken_18.shp.zip" | prepend: "/download/noise3d/v03/bodemvlakken/m18/" | prepend: site.baseurl }}">tiles_bodemvlakken_18.shp.zip</a><br/></td>
  </tr>
  <tr>
    <td class="tg-0lax">GeoPackage</td>
    <td class="tg-nrix">
      <a href="{{ "tiles_bodemvlakken_6.gpkg.zip" | prepend: "/download/noise3d/v03/bodemvlakken/m6/" | prepend: site.baseurl }}">tiles_bodemvlakken_6.gpkg.zip</a><br/></td>
    <td class="tg-nrix">
      <a href="{{ "tiles_bodemvlakken_12.gpkg.zip" | prepend: "/download/noise3d/v03/bodemvlakken/m12/" | prepend: site.baseurl }}">tiles_bodemvlakken_12.gpkg.zip</a><br/></td>
    <td class="tg-nrix">
      <a href="{{ "tiles_bodemvlakken_18.gpkg.zip" | prepend: "/download/noise3d/v03/bodemvlakken/m18/" | prepend: site.baseurl }}">tiles_bodemvlakken_18.gpkg.zip</a><br/></td>
  </tr>
</table></div>

### Attributen

In de attributen van de LodD1.3 gebouwen is de volgende informatie opgenomen:

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
    <th class="tg-fymr">Feature</th>
    <th class="tg-fymr">Attribuut</th>
    <th class="tg-fymr">Uitleg</th>
  </tr>
  <tr>
    <td class="tg-0pky">Gebouwen</td>
    <td class="tg-0pky">bag_id</td>
    <td class="tg-0pky">unieke <code>identificatie</code> in BAG-panden</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-pcvp">dak_type</td>
    <td class="tg-pcvp">type of the roof of building<br>
      <code>2</code> – dak met tenminste één schuin vlak<br>
      <code>1</code> – dak met meerdere (en alleen maar) horizontale vlakken<br>
      <code>0</code> – dak met enkel een horizontaal vlak<br>
      <code>-1</code> – geen AHN-data beschikbaar binnen de gebouwomtrek<br>
      <code>-2</code> – wel AHN-data beschikbaar, maar er is geen dakoppervlak gedetecteerd
      </td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky">rmse</td>
    <td class="tg-0pky"><em>Root mean square error</em> tussen het LoD 1.3 model en de gedetecteerde dakpunten uit AHN3.</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky">h_dak</td>
    <td class="tg-0pky"><em>hoogte van het dakdeel</em> ten opzichte van NAP</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-pcvp">h_maaiveld</td>
    <td class="tg-pcvp"><em>maaiveld hoogte</em> ten opzichte van NAP</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky">is_complex</td>
    <td class="tg-0pky">`1` als dit een complex gebouw betreft, dwz niet alle gedetecteerde daklijnen zijn meegenomen in de reconstructie om de verwerkingstijd te beperken.</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-pcvp">ahn_geldig</td>
    <td class="tg-pcvp">Codering waarmee aangegeven wordt of de hoogte actueel is<br>
      <code>1</code> – gebouw is gebouwd <b>nadat</b> de AHN-puntenwolk is ingewonnen<br>
      <code>0</code> – gebouw is gebouwd <b>voordat</b> de AHN-puntenwolk is ingewonnen
    </td>
  </tr>
  <tr>
    <td class="tg-0pky" style="border-bottom-width:0.5px"></td>
    <td class="tg-0pky" style="border-bottom-width:0.5px">ahn_datum</td>
    <td class="tg-0pky" style="border-bottom-width:0.5px">inwindatum van de AHN-puntenwolk ter plaatse van het gebouw</td>
  </tr>
  <tr>
    <td class="tg-0pky">Bodemgebieden</td>
    <td class="tg-0pky">uuid</td>
    <td class="tg-0pky">unieke identificatie van het object</td>
  </tr>
  <tr>
    <td class="tg-0pky" style="border-bottom-width:0.5px"></td>
    <td class="tg-pcvp" style="border-bottom-width:0.5px">bodemfactor</td>
    <td class="tg-pcvp" style="border-bottom-width:0.5px">omschrijving van de bodemeigenschappen ("reflecterend" of "absorberend"), op basis van de BGT-classificatie, zoals aangegeven in bovenstaande tabel.<br>
      <code>0</code> – reflecterende bodem <br>
      <code>1</code> – absorberende bodem
    </td>
  </tr>
  <tr>
    <td class="tg-0pky">Hoogtebeschrijving terrein</td>
    <td class="tg-0pky">-</td>
    <td class="tg-0pky">In dit bestand zijn geen attributen aanwezig.</td>
  </tr>
</table>


## Disclaimer
Het bestand 3D geluid NL versie 0.3 wordt uitsluitend ter beschikking gesteld voor testdoeleinden. Er kunnen geen rechten aan worden ontleend.

Geen van de partijen die betrokken zijn bij de totstandkoming kan aansprakelijk worden gesteld voor eventuele schade die voortvloeit uit het gebruik van de data. 

----
# Project partners

{% include noise3d/partners.html %}
