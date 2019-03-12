---
layout: page
title: 3D data set for noise studies
permalink: /opendata/noise3d/
---

In a collaboration of Rijkswaterstaat, RIVM, Kadaster and the 3D geoinformation research group, TU Delft, we are investigating how 3D data on noise sources and the environment, as required in legally prescribed noise studies, can be automatically generated for the whole of the Netherlands from existing data such as the Key Register Addresses and Buildings (BAG), the Basic Register for Large-Scale Topography (BGT) and the airborne LiDAR point cloud covering the whole of The Netherlands (AHN). 

This is an ongoing project and here we offer the outcome of its milestones. A more detailed project description can be found [here]({{ "/projects/noise3d/" | prepend: site.baseurl  }})

-----

## Version 0.2

In the span of 2018–Q1 2019 we finialized the second milestone of the project. In this we further improved the 3D reconstruction of buildings by adding more detail and geometric accuracy, improved the terrain model by optimising the amount of terrain features and complexity, and improved the classification of objects according to their sound reflectance property.

Throughout the project we kept ourselves to the requirements and limitations of the currently available noise simluation software on the market.

<div style="width:600px; margin:20px auto;">
  <img src="{{ "testarea_v02_extent.png" | prepend: site.baseurl }}" alt="Sample area v0.2" style="display:block; margin:auto;">
</div>

We offer a sample of this improved data set. The sample spans four AHN tiles nearby the city of Rotterdam, namely *37ez2*, *37fz1*, *37gn2*, *37hn1*.

### Attributes

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
    <td class="tg-pcvp">hoogte_act</td>
    <td class="tg-pcvp"><em>hoogte actueel</em> or valid height<br>
      <code>1</code> – building was built <em>before</em> the point cloud was collected for the tile<br>
      <code>0</code> – building was built <em>after</em> the point cloud was collected for the area
    </td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky">maaiveld_h</td>
    <td class="tg-0pky"><em>maaiveld hoogte</em> or absolute ground height of the building</td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-pcvp">maaiveld_p</td>
    <td class="tg-pcvp"><em>aantal maaiveld punten</em> or number of AHN points that were used for calculating the ground height. Note that a value below 3 might indicate an unreliable value for <code>maaiveld_h</code></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0pky">ahn_datum</td>
    <td class="tg-0pky">the date of the acquisition of the point cloud for the tile</td>
  </tr>
  <tr>
    <td class="tg-0pky" style="border-bottom-width:0.5px"></td>
    <td class="tg-pcvp" style="border-bottom-width:0.5px">bag_id</td>
    <td class="tg-pcvp" style="border-bottom-width:0.5px">the <code>identificatie</code> attribute from the BAG</td>
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

### Downloads

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
    <td class="tg-pcvp">Ground types classified by their noise reflecting property</td>
    <td class="tg-pcvp">&lt;tile id&gt;_bodemvlakken</td>
    <td class="tg-pcvp">
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[ERSI Shapefile]</a><br/>
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[GML]</a><br/>
      </td>
  </tr>
  <tr>
    <td class="tg-0pky">terrain<br></td>
    <td class="tg-0pky">Terrain modelled with 3D lines (not contour lines and not breaklines)</td>
    <td class="tg-0pky">&lt;tile id&gt;_hoogtelijnen</td>
    <td class="tg-0pky">
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[ERSI Shapefile]</a><br/>
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[GML]</a><br/>
      </td>
  </tr>
  <tr>
    <td class="tg-pcvp">building in LoD1.0</td>
    <td class="tg-pcvp">Bulding footprints with a single height value per building. The height of the building model is computed as the 75th percentile of the roof.</td>
    <td class="tg-pcvp">&lt;tile id&gt;_pand_lod10_p75</td>
    <td class="tg-pcvp">
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[ERSI Shapefile]</a><br/>
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[GML]</a><br/>
      </td>
  </tr>
  <tr>
    <td class="tg-0pky">building in LoD1.3</td>
    <td class="tg-0pky">Bulding footprints with a single height value per <em>building-part</em>. If the building has slanted roof surfaces (<code>dak_type</code> is <code>2</code>), then it is reconstructed in LoD1.0.</td>
    <td class="tg-0pky">&lt;tile id&gt;_pand_lod13</td>
    <td class="tg-0pky">
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[ERSI Shapefile]</a><br/>
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[GML]</a><br/>
      </td>
  </tr>
  <tr>
    <td class="tg-pcvp">building in LoD1.3 (experimental version)</td>
    <td class="tg-pcvp">Bulding footprints with a single height value per <em>building-part</em>. If the building has slanted roof surfaces (<code>dak_type</code> is <code>2</code>), then it is reconstructed in LoD1.3.</td>
    <td class="tg-pcvp">&lt;tile id&gt;_pand_lod13_experimenteel</td>
    <td class="tg-pcvp">
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[ERSI Shapefile]</a><br/>
      <a href="{{ somefile | prepend: "/download/noise3d/" | prepend: site.baseurl }}">[GML]</a><br/>
      </td>
  </tr>
</table>