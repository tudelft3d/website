---
layout: benchmark
title: Rotterdam CityGML buildings
permalink: /projects/geobim-benchmark/rotterdamlod12.html
---

<h1>Rotterdam multi-LoDs CityGML buildings</h1>

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamLOD12-1.gif" }}" style="max-height: 500px"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Short description

Surrounding area of the Up:Town building (one of the provided IFC model for this benchmark); it represents the Maritiem district in Rotterdam.

This is an open data produced and provided by the Municipality of Rotterdam.

Only buildings are included, and they are represented in 2 Levels of Details (LoDs): LoD1 (extruded building footprints), LoD2 (more detailed external surfaces of the buildings, with realistic roof shapes and different semantics for walls and roofs). Check the CityGML description in the benchmark website and related documentation to have more details.

The textures for LoD2 are also present (in the updated version of the file 11/06/2019).

The file was further checked, validated and improved through '3DcityDB' and 'Safe Software FME' Validation tools, manual editing and processing through FME tools.

*An improved and corrected version is published on 11th June 2019.* Please, download and use this new version (at the end of this page).

## Technical details

Name of the file: <strong>RotterdamLOD12.gml</strong>

Used CityGML version:<strong> 2</strong>


Level(s) of Detail: <strong>LoD 1 & LoD 2</strong> (in the same GML file)

The geometries are all managed as<strong> MultiSurfaces.</strong>

## Georeferencing details

Coordinate reference system:<strong> EPSG: 28992 – Amersfoort / RD New</strong>

Bounding box coordinates:

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamSRSdetails.gif" }}" style="max-height: 500px"></div>
</div>

Model orientations:

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamOrientation.gif" }}" style="max-height: 500px"></div>
</div>



## Semantics details

Here, the entities included in the model are listed model (you can read the CityGML documentation for their full description):

* core:CityModel
* core:xalAddress
* bldg:Buildings
* bldg:BuildingInstallation
* bldg:BuildingPart
* bldg:ClosureSurface
* bldg:GroundSurface
* bldg:OuterCeilingSurface
* bldg:RoofSurface
* bldg:WallSurface

### 3+4 Elements

In the following images and videos you can see the model (in the software Azul), with the classification (and hierarchies) of objects and <strong> attributes</strong>  of specific elements, to be used as reference while performing the Task 3.
From these views you can also have a view about how the geometry looks like, in order to have a visual reference for testing your software.

#### LoD 1 geometry

<strong> Element 1</strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamLOD12-Fig6.gif" }}" title="Element 1	(in yellow)." >
</div>
------------
<strong> Element 2 </strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamLOD12-Fig7.gif" }}" title="Element 2	(in yellow)." >
</div>
------------
<strong> Element 3</strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamLOD12-Fig8.gif" }}" title="Element 3	(in yellow)" >
</div>



#### LoD 2 geometry

<strong> Element 3</strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamLOD12-Fig1.gif" }}" title="Element 3	 (in yellow)." >
</div>
------------
<strong> Element 4</strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamLOD12-Fig2.gif" }}" title="Element 4	 (in yellow)." >
</div>
------------
<strong> Element 5</strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamLOD12-Fig3.gif" }}" title="Element 5 (in yellow)" >
</div>
------------
<strong> Element 6 </strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamLOD12-Fig4.gif" }}" title="Element 6 (in yellow)." >
</div>
---------------------------------

### Grouping relationships

Reference for checking the part-of relationships:

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/RotterdamGrouping.gif" }}" style="max-height: 1000px"></div>
</div>



### Video of the LoD 1 model

<iframe width="560" height="315" src="https://www.youtube.com/embed/Y8rJa00Z8Bc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



### Video of the LoD 2 model

<iframe width="560" height="315" src="https://www.youtube.com/embed/1O27Iuf8eBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
--------------------------
## Download


You can download the RotterdamLOD12.gml data (corrected version 11/06/2019) from this [**link**](https://www.dropbox.com/s/jpo3dzcgi53nq2k/rotterdam_LoD1_LoD2.zip?dl=0)
 - - -
