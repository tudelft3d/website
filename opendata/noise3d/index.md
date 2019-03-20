---
layout: page
title: Automatically generated 3D input data for noise studies - downloads available
permalink: /opendata/noise3d/
---

In a collaboration of Rijkswaterstaat, RIVM, Kadaster and the 3D geoinformation research group from TU Delft, we are investigating how 3D data on noise sources and the environment, as required in legally prescribed noise studies, can be automatically generated for the whole of the Netherlands from existing data such as the Key Register Addresses and Buildings (BAG), the Basic Register for Large-Scale Topography (BGT) and the airborne LiDAR point cloud covering the whole of The Netherlands (AHN). 

This is an ongoing project (started in 2017) and here we offer the outcome of its milestones. A more detailed project description can be found [here]({{ "/projects/noise3d/" | prepend: site.baseurl  }})

## Feedback 

# Feedback Form
In case of questions or comments about the data please fill out our [feedback form](https://docs.google.com/forms/d/e/1FAIpQLSfgWxv-5xdSWcEAxmmu6tnzwlc9fw6N-wHQuJLnnSNJv2NCtg/viewform).

# Feedback Session on 11 April 2019
On the 11th of April 2019 we are organising a feedback session at the offices of the Kadaster in Rotterdam (10:00-12:00). During this session we will present our approach and we will recieve your feedback for further development.

You can register using [this form](https://docs.google.com/forms/d/e/1FAIpQLSdlVlcyZ-vCFcH5KYUKeSWgd7MX7t0msp4dL3wnKpD0fiHAPg/viewform).


# Version 0.2

In 2017, we started investigating the possibilities to automatically reconstruct 3D input data for noise simulation (i.e. buildings, terrain height, land use objects w.r.t. noise absorption and reflection, noise barriers and bridges). 
In 2018 and Q1 2019 we further developed these ideas and prototypes and specifically improved the 3D reconstruction of buildings by adding more detail and geometric accuracy, improved the terrain model by optimising the amount of terrain features and complexity, and improved the classification of land use objects according to their sound reflectance property.
Parallel to this, we studied how to generate the required data about bridges and noise barriers.

Throughout the project we kept ourselves to the requirements and limitations of the currently available noise simulation software on the market.

<div style="width:600px; margin:20px auto;">
  <img src="{{ "testarea_v02_extent.png" | prepend: site.baseurl }}" alt="Sample area v0.2" style="display:block; margin:auto;">
</div>

On this page, we offer a sample of the current version of the generated data set, i.e. version 0.2 The data consists of buildings, terrain heights (i.e. height lines) and noise reflection/absorption factors for land use objects. The sample spans four AHN tiles nearby the city of Rotterdam, namely *37ez2*, *37fz1*, *37gn2*, *37hn1*.

## Building models

In the current noise simulation practice each building, regardless of its roof shape, is modelled with a single height level. The resulting block-shaped building representation is called *LoD1.0*. Modelling a building with only a single height can lead to large errors in the modelled height in case the building in reality consists of different parts that each have a very different height. Therefore, we have investigated how to automatically create building models in which multiple height levels are possible, i.e. using the *LoD1.3* representation.

We offer three alternative data sets with building models, *LoD1.0*, *LoD1.3* and *LoD1.3 experimental* (see graphic below). 

1. In the *LoD1.0* data set each building is modelled with a single height value. 
2. In the *LoD1.3* data set the buildings with *only* horizontal roofparts are modelled with multiple heights. To achieve this the footprint is subdivided into several roofparts and each roofpart is assigned its own height. Buildings with slanted roofs are modelled with a single height.
3. In the *LoD1.3 experimental* dataset, also the buildings with slanted roofparts are modelled with multiple heights. These buildings are the most difficult to model in *LoD1.3*, and these results are merely indicative of the current status of our LoD1.3 building reconstruction method. We intend to further improve this method in the near future.

The height of each roofpart is computed by taking a percentile of the elevations points it contains. We offer both a 75th percentile and a 95th percentile variant.

<div style="width:900px; margin:20px auto;">
  <img src="{{ "building_lod.png" | prepend: site.baseurl }}" alt="Building model versions" style="display:block; margin:auto;">
</div>

## Downloads

For the sample area we prepared the following data sets:

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
    <td class="tg-pcvp">Bulding footprints with a single height value per building. The height of the building model is computed as the 75th and 95th percentile of the points that are part of the roof.</td>
    <td class="tg-pcvp">&lt;tile id&gt;_lod10_&lt;percentile&gt;</td>
    <td class="tg-pcvp">
      <a href="{{ "lod10.zip" | prepend: "/download/noise3d/v02/" | prepend: site.baseurl }}">[ESRI Shapefile]</a><br/>
      </td>
  </tr>
  <tr>
    <td class="tg-0pky">building in LoD1.3</td>
    <td class="tg-0pky">Bulding footprints with a single height value per <em>building-part</em>. The height of the building model is computed as the 75th and 95th percentile of the points that are part of the roof. If the building has slanted roof surfaces (<code>dak_type</code> is <code>2</code>), then it is reconstructed in LoD1.0.</td>
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
      <a href="{{ "lod13_experimenteel.zip" | prepend: "/download/noise3d/v02" | prepend: site.baseurl }}">[ESRI Shapefile]</a><br/>
      </td>
  </tr>
</table>


## Attributes

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
    <td class="tg-0pky"></td>
    <td class="tg-pcvp">demping</td>
    <td class="tg-pcvp">sound reflectance property of the ground<br>
      <code>hard</code> – reflecting<br>
      <code>zacht</code> – non-reflecting
    </td>
  </tr>
</table>


- - -

# Project partners

<div class="row">
<div style="padding:5px" class="col-md-4 col-sm-4 col-xs-8"><a href="http://www.rws.nl" title="RWS website"><img src="/img/partners/rws.png" alt="RWS logo" ></a></div>
<div style="padding:5px" class="col-md-4 col-sm-4 col-xs-8"><a href="https://www.rivm.nl" title="RIVM website"><img src="/img/partners/rivm.png" alt="RIVM logo" ></a></div>
<div style="padding:5px" class="col-md-4 col-sm-4 col-xs-8"><a href="http://www.kadaster.nl" title="Kadaster website"><img src="/img/partners/kadaster.png" alt="Kadaster logo" ></a></div>
<div style="padding:5px" class="col-md-4 col-sm-4 col-xs-8"><a href="https://ipo.nl/" title="IPO website"><img src="/img/partners/ipo.jpg" alt="IPO logo" ></a></div>
</div>
