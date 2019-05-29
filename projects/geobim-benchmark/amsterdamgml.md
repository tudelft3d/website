---
layout: benchmark
title: Amsterdam CityGML model
permalink: /projects/geobim-benchmark/amsterdamgml.html
---

<h1>Amsterdam GityGML model LoD 1</h1>

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/amsterdam-1.gif" }}" style="max-height: 500px"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Short description

This model represents the city of Amsterdam in CityGML, including all the entities for a seamless 3D city model (buildings, roads, vegetation, and so on).

It was produced with the software 3dfier by the TUDelft 3D geoinformation group, and, together with other datasets, can be downloaded from: [https://3d.bk.tudelft.nl/opendata/3dfier/](https://3d.bk.tudelft.nl/opendata/3dfier/).

The used Level of Detail (LoD) is 1. Check the CityGML description in the website and related documentation to have more details.


## Technical details

Name of the file: <strong>Amsterdam.gml</strong>

Used CityGML version:<strong> 2</strong>

Level(s) of Detail: <strong>LoD 1</strong>

The geometries are all managed as<strong> MultiSurfaces.</strong>

## Georeferencing details

Coordinate reference system:<strong> EPSG: 7415 (Combined SRS for 3D data, based on Amersfoort / RD New system)</strong>

Envelope lowerCorner:

E 116137.400

N 481250.300

H 0

Envelope upperCorner:

E 129664.253

N 490288.900

H 100

## Semantics details

Here, the entities included in the model are listed model (you can read the CityGML documentation for their full description):

* core:CityModel
* LandUse
* WaterBody
* Road
* bldg:Buildings
* PlantCover
* GenericCityObject
* Bridge

### 4 Elements

In the following images (in the software Azul), you can see the classification (and hierarchies) of specific elements, to be used as reference while performing the Task 3.
From these views you can also have a view about how the geometry looks like, in order to have a visual reference for testing your software.

<strong> Element 1 - WaterBody</strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/amsterdam-Fig2.gif" }}" title="Element 1)	Waterbody (in yellow)." >
</div>
------------
<strong> Element 2 - LandUse</strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/amsterdam-Fig3.gif" }}" title="Element 2)	LandUse (in yellow)." >
</div>
------------
<strong> Element 3 - Building</strong>

For this element it is also possible to consider the attribute 'measuredHeight' (value 11.74 m)
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/amsterdam-Fig4.gif" }}" title="Element 3)	Building (in yellow)" >
</div>
------------
<strong> Element 4 - PlantCover</strong>
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/amsterdam-Fig5.gif" }}" title="Element 4)	PlantCover (in yellow)." >
</div>

--------------------------
## Download

You can download the amsterdam.gml data from this [**link**](https://www.dropbox.com/s/fw9m8r1chhscarq/amsterdam.gml?dl=0)
 - - -
