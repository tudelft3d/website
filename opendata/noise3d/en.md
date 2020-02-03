---
layout: page_noise3d
title: 3D input data for noise studies (experimental), published in January 2020
permalink: /opendata/noise3d/en
is_dutch: false
---

![](/img/projects/noise3d_banner.jpg)

<div class="well"><b>Feedback Session on 6th February 2020</b><br/><br/>
	At this moment we are further developing our methods to version 0.3. On Thursday 6th of February we are organising a feedback session at the offices of the Kadaster in Rotterdam (10:00-12:00). During this session we will present our updated approach and we will be happy recieve your feedback for further development.
	
	You can register using <a href="https://docs.google.com/forms/d/e/1FAIpQLSdlVlcyZ-vCFcH5KYUKeSWgd7MX7t0msp4dL3wnKpD0fiHAPg/viewform">this form</a>.
	</div>
	
- - -

* Table of Content
{:toc}

- - -
## What is 3D noise in the Netherlands? An introduction

The past 3 years, we have investigated to automatically reconstruct 3D noise data in a collaboration of Rijkswaterstaat, RIVM, Kadaster and the 3D geoinformation research group from TU Delft. In this collaboration, we have investigated how 3D data on noise sources and the environment, as required in legally prescribed noise studies, can be automatically generated for the whole of the Netherlands from existing data such as the Key Register Addresses and Buildings (BAG), the Basic Register for Large-Scale Topography (BGT) and the airborne LiDAR point cloud covering the whole of The Netherlands (AHN). 

This is an ongoing project that was started in 2017. A more detailed project description can be found [here]({{ "/projects/noise3d/" | prepend: site.baseurl  }}).

On this site we publish an example dataset that is generated using the 0.3 version of our method in January 2020. With this sample dataset interested parties have the possibility to review our results and send us feedback. At this moment we are further developing our methods to version 1.0. Results will be available beginning of 2021.

## Description test data version 0.3

Our method aims to achieve high detail and accuracy, while keeping the resulting files small and adhering to the requirements and limitations of the currently available noise simulation software on the market. 

With version 0.3 we deliver three input layers for 3D noise studies, namely

1. building models (gebouwen),
2. ground types with noise reflection/absorption factors (bodemvlakken), and
3. terrain (TIN).

These three input layers were generated fully automatically from the public BAG, BGT and AHN3 datasets and are explained in more detail below. We also investigated noise barriers (geluidsschermen) and bridges (bruggen), however these are not part of the v0.3 example dataset.

The study area of the sample dataset spans the *37ez2*, *37fz1*, *37gn2*, and *37hn1* AHN tiles nearby the city of Rotterdam as illustrated below. We provide this test data in order to collect feedback that we will use for future developments where we plan to upscale the results to the whole of the Netherlands.
For version 0.3 we have made initial choices regarding the simplification of the data , height-differences between connecting building parts, minimimum sizes of details etc. Based on the feedback we can adjust these parameters in a next release.

![Sample area v0.3]({{ "testarea_v02_extent.png" | prepend: site.baseurl }})

The input data can directly be used as input in software that implements the *Standaard Rekenmethode II van het RMG2012 (SRM2)* (i.e. the Dutch legally prescribed calculation method), like  GeoMilieu and WinHavik.

### Building models
For the buildings, the BAG is used as basis. The heights of buildings have been calculated using the AHN-point cloud and the software [3dfier]{https://github.com/tudelft3d/3dfier}. This software converts 2D footprints into 3D block models.
The heights of buildings are calculated as the 95-percentile of all AHN-points that fall within one building polygon. This is a good estimation of the roof ridge both for flat roofs and slanted roofs. Outliers such as points that fall on chimneys will be filtered out. As additonal information, we also provide the 75-percentile.

In the current noise simulation practice each building, regardless of its roof shape, is modelled with a single height level. The resulting block-shaped building representation is called *LoD1.0*. Modelling a building with only a single height can lead to large errors in the modelled height in case the building in reality consists of different parts that each have a very different height. Therefore, we have investigated how to automatically create building models in which multiple height levels are possible, i.e. using the *LoD1.3* representation.

We offer three alternative data sets with building models, *LoD1.0*, *LoD1.3* and *LoD1.3 experimental* (see graphic below). 

1. In the *LoD1.0* data set each building is modelled with a single height value. 
2. In the *LoD1.3* data set the buildings with *only* horizontal roofparts are modelled with multiple heights. To achieve this the footprint is subdivided into several roofparts and each roofpart is assigned its own height. Buildings with slanted roofs are modelled with a single height.
3. In the *LoD1.3 experimental* dataset, also the buildings with slanted roofparts are modelled with multiple heights. These buildings are the most difficult to model in *LoD1.3*, and these results are merely indicative of the current status of our LoD1.3 building reconstruction method. We intend to further improve this method in the near future.

The height of each roofpart is computed by taking a percentile of the elevations points it contains. We offer both a 75th percentile and a 95th percentile variant.

![Sample area v0.2]({{ "building_lod.png" | prepend: site.baseurl }})

More details about our LoD1.3 reconstruction method can be found in the following slideshow.

<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTooIsoh8wN8nbd_xv4YOgo0blfdm7dSG4NSpIvgL5meQ4yz4YiL1n3TGjvdpJea20x1e6r-E0woeDc/embed?start=false&loop=false&delayms=3000" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

### Terrain model
For v0.3 we experimented with a Triangulated Irregular Network (TIN) for representing the terrain. A TIN is like a blanket of triangles tightly fit to the ground, excluding above-ground objects (buildings, trees etc.). In flat areas the triangles are usually larger, in areas with high relief the triangles are usually smaller, in order to achieve a good fit to the ground surface.

For generating the triangulation we can choose the maximum allowed deviation from the true ground (as measured in the point cloud of AHN3). For the test data sets of v0.3, we choose *0.3*, *0.5*, *1.0* meters of deviation. This means for example that the *0.3m* TIN is guaranteed to be within 0.3 m of the true ground (as per AHN3). However, smaller errors mean more triangles and larger data sets, as you'll see in the downloads.

The reason for choosing a TIN instead of 3D lines is to be able to generate more accurate data more efficently. However we realize at least two current challanges with TINs. Firstly, the common noise calculation softwares in the Netherlands read terrain data only as 3D lines, secondly, common GIS software does not have native support for file formats that can store TINs efficiently.

Therefore we provide the TINs also as 3D lines which in this case are the edges of the triangles, and provide the TINs in the common ESRI Shapefile and GeoPackage formats which are, although very inefficient for this purpose, understood by most GIS software.


### Groundtypes with noise characteristcs
Also for modelling noise-reflection and -absorption values, we use the BGT as basis. Neighbouring polygons with same values have been aggregated, small areas have been eliminated and boundaries have been simplified. 

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

The test data is available as *ESRI shape*.

The following source data was used:
* BGT: date 11-02-2019, <a href="{{ "source_bgt.zip" | prepend: "/download/noise3d/v02/" | prepend: site.baseurl }}">[download source data]</a>
* BAG: date 25-02-2019, <a href="{{ "source_bag.zip" | prepend: "/download/noise3d/v02/" | prepend: site.baseurl }}">[download source data]</a>
* AHN: version 3, download tiles from PDOK: [37ez2](https://geodata.nationaalgeoregister.nl/ahn3/extract/ahn3_laz/C_37EZ2.LAZ), [37fz1](https://geodata.nationaalgeoregister.nl/ahn3/extract/ahn3_laz/C_37FZ1.LAZ), [37gn2](https://geodata.nationaalgeoregister.nl/ahn3/extract/ahn3_laz/C_37GN2.LAZ), [37hn1](https://geodata.nationaalgeoregister.nl/ahn3/extract/ahn3_laz/C_37HN1.LAZ)

For the sample area we prepared the following data sets.

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
    <th class="tg-fymr">Explanation</th>
    <th class="tg-fymr">File name</th>
    <th class="tg-fymr">Download</th>
  </tr>
  <tr>
    <td class="tg-pcvp">ground type</td>
    <td class="tg-pcvp">Ground types classified by their noise reflecting property. Objects that are smaller than 6 square meters are merged into their neighbour and obtain the neighbour's reflectance property.</td>
    <td class="tg-pcvp">&lt;tile id&gt;_bodemvlakken</td>
    <td class="tg-pcvp">
      <a href="{{ "bodemvlakken.zip" | prepend: "/download/noise3d/v02/" | prepend: site.baseurl }}">[ESRI Shapefile]</a><br/>
    </td>
  </tr>
  <tr>
    <td class="tg-0pky">terrain<br></td>
    <td class="tg-0pky">Terrain modelled with 3D lines (not contour lines and not breaklines)</td>
    <td class="tg-0pky">&lt;tile id&gt;_hoogtelijnen</td>
    <td class="tg-0pky">
      <a href="{{ "hoogtelijnen.zip" | prepend: "/download/noise3d/v02/" | prepend: site.baseurl }}">[ESRI Shapefile]</a><br/>
      </td>
  </tr>
  <tr>
    <td class="tg-pcvp">building in LoD1.0</td>
    <td class="tg-pcvp">Building footprints with a single height value per building. The height of the building model is computed as the 75th and 95th percentile of the points that are part of the roof.</td>
    <td class="tg-pcvp">&lt;tile id&gt;_lod10_&lt;percentile&gt;</td>
    <td class="tg-pcvp">
      <a href="{{ "lod10.zip" | prepend: "/download/noise3d/v02/" | prepend: site.baseurl }}">[ESRI Shapefile]</a><br/>
      </td>
  </tr>
  <tr>
    <td class="tg-0pky">building in LoD1.3</td>
    <td class="tg-0pky">Building footprints with a single height value per <em>building-part</em>. The height of the building model is computed as the 75th and 95th percentile of the points that are part of the roof. If the building has slanted roof surfaces (<code>dak_type</code> is <code>2</code>), then it is reconstructed in LoD1.0.</td>
    <td class="tg-0pky">&lt;tile id&gt;_lod13_&lt;percentile&gt;</td>
    <td class="tg-0pky">
      <a href="{{ "lod13.zip" | prepend: "/download/noise3d/v02/" | prepend: site.baseurl }}">[ESRI Shapefile]</a><br/>
      </td>
  </tr>
  <tr>
    <td class="tg-pcvp">building in LoD1.3 (experimental version)</td>
    <td class="tg-pcvp">Bulding footprints with a single height value per <em>building-part</em>. The height of the building model is computed as the 75th and 95th percentile of the points that are part of the roof. If the building has slanted roof surfaces (<code>dak_type</code> is <code>2</code>), then it is reconstructed in LoD1.3.</td>
    <td class="tg-pcvp">&lt;tile id&gt;_lod13_&lt;percentile&gt;_experimenteel</td>
    <td class="tg-pcvp">
      <a href="{{ "lod13_experimenteel.zip" | prepend: "/download/noise3d/v02/" | prepend: site.baseurl }}">[ESRI Shapefile]</a><br/>
      </td>
  </tr>
</table>

#### Terrain data

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-top-width:1px;border-bottom-width:1px;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-top-width:1px;border-bottom-width:1px;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-uzvj{font-weight:bold;border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-7btt{font-weight:bold;border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-g7sd{font-weight:bold;border-color:inherit;text-align:left;vertical-align:middle}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
<div class="tg-wrap"><table class="tg">
  <tr>
    <th class="tg-uzvj" rowspan="2">Geometry</th>
    <th class="tg-uzvj" rowspan="2">Format</th>
    <th class="tg-7btt" colspan="12">Error threshold</th>
  </tr>
  <tr>
    <td class="tg-7btt" colspan="4">0,3m</td>
    <td class="tg-7btt" colspan="4">0,5m</td>
    <td class="tg-7btt" colspan="4">1,0m</td>
  </tr>
  <tr>
    <td class="tg-uzvj" rowspan="3">TIN</td>
    <td class="tg-0pky">ESRI Shapefile</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
  </tr>
  <tr>
    <td class="tg-0pky">GeoPackage</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
  </tr>
  <tr>
    <td class="tg-0pky">Wavefront OBJ</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
  </tr>
  <tr>
    <td class="tg-g7sd" rowspan="2">3D Lines</td>
    <td class="tg-0pky">ESRI Shapefile</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
    <td class="tg-c3ow">37ez2</td>
    <td class="tg-c3ow">37fz1</td>
    <td class="tg-c3ow">37gn2</td>
    <td class="tg-c3ow">37hn1</td>
  </tr>
  <tr>
    <td class="tg-0pky">ESRI Shapefile</td>
    <td class="tg-c3ow">37ez2 tiles</td>
    <td class="tg-c3ow">37fz1 tiles</td>
    <td class="tg-c3ow">37gn2 tiles</td>
    <td class="tg-c3ow">37hn1 tiles</td>
    <td class="tg-c3ow">37ez2 tiles</td>
    <td class="tg-c3ow">37fz1 tiles</td>
    <td class="tg-c3ow">37gn2 tiles</td>
    <td class="tg-c3ow">37hn1 tiles</td>
    <td class="tg-c3ow">37ez2 tiles</td>
    <td class="tg-c3ow">37fz1 tiles</td>
    <td class="tg-c3ow">37gn2 tiles</td>
    <td class="tg-c3ow">37hn1 tiles</td>
  </tr>
</table></div>

### Attributes

The table below describes the attributes of the *buildings* and *ground types* data sets. The lines in the *terrain* data set do not have attributes.

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
    <th class="tg-fymr">Attribute</th>
    <th class="tg-fymr">Explanation</th>
  </tr>
  <tr>
    <td class="tg-0pky">building</td>
    <td class="tg-0pky">bag_id</td>
    <td class="tg-0pky">the <code>identificatie</code> attribute from the BAG</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-pcvp">dak_type</td>
    <td class="tg-pcvp">type of the roof of building<br>
      <code>2</code> – roof with at least one slanted surface<br>
      <code>1</code> – roof with multiple, only horizontal surfaces<br>
      <code>0</code> – roof with a single horizontal surface<br>
      <code>-1</code> – no AHN point was found for the building<br>
      <code>-2</code> – could not detect a roof surface, even though AHN points were found
      </td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky">hoogte_abs</td>
    <td class="tg-0pky"><em>hoogte absolute</em> or absolute height of the building (height measure from NAP)</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-pcvp">maaiveld_h</td>
    <td class="tg-pcvp"><em>maaiveld hoogte</em> or absolute ground height of the building</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky">maaiveld_p</td>
    <td class="tg-0pky"><em>aantal maaiveld punten</em> or number of AHN points that were used for calculating the ground height. Note that a value below 3 might indicate an unreliable value for <code>maaiveld_h</code></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-pcvp">ahn_geldig</td>
    <td class="tg-pcvp">or valid height<br>
      <code>1</code> – building was built <em>before</em> the point cloud was collected for the tile<br>
      <code>0</code> – building was built <em>after</em> the point cloud was collected for the area
    </td>
  </tr>
  <tr>
    <td class="tg-0pky" style="border-bottom-width:0.5px"></td>
    <td class="tg-0pky" style="border-bottom-width:0.5px">ahn_datum</td>
    <td class="tg-0pky" style="border-bottom-width:0.5px">the date of the acquisition of the point cloud for the tile</td>
  </tr>
  <tr>
    <td class="tg-0pky">ground type</td>
    <td class="tg-0pky">uuid</td>
    <td class="tg-0pky">unique ID of the object</td>
  </tr>
  <tr>
    <td class="tg-0pky" style="border-bottom-width:0.5px"></td>
    <td class="tg-pcvp" style="border-bottom-width:0.5px">bodemfactor</td>
    <td class="tg-pcvp" style="border-bottom-width:0.5px">sound reflectance property of the ground<br>
      <code>0</code> – reflecting<br>
      <code>1</code> – non-reflecting
    </td>
  </tr>
  <tr>
    <td class="tg-0pky">terrain</td>
    <td class="tg-0pky">-</td>
    <td class="tg-0pky">-</td>
  </tr>
</table>

## Feedback Form
In case of questions or comments about the data please fill out our [feedback form](https://docs.google.com/forms/d/e/1FAIpQLSfgWxv-5xdSWcEAxmmu6tnzwlc9fw6N-wHQuJLnnSNJv2NCtg/viewform).

# Disclaimer
The 3D noise data version 0.2 is only made available for testing purposes. No rights can be obtained from the data. None of the parties involved can be hold responsible for damage that is caused by using the data.

----
# Project partners

{% include noise3d/partners.html %}
