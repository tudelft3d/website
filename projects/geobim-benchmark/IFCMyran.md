---
layout: benchmark
title: Myran IFC model
permalink: /projects/geobim-benchmark/ifcmyran.html
---

<h1>Myran IFC model</h1>

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-1.gif" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Short description

It is the IFC model of a 2-floor office building in Falun, Sweden.

It was provided for this study by .

The data represent the architectural model of the BIM.

It was exported on 25/10/2017 from the base software Autodesk Revit 2018 (ENU)

## Technical details

Name of the file: <strong>Myran.ifc</strong>

Used IFC version: 2x3 (MVD: CoordinationView v.2.0)

## Georeferencing details

### Original georeferencing details (for Task 1)
<strong>Coordinate reference system:</strong> none

<strong>Coordinates of the reference point (blue in Figure 1):</strong>

<strong>E:</strong> 152677.777 m

<strong>N:</strong> 6555555.555 m

<strong>H:</strong> 148.2 m

<strong>Rotation to the true North</strong> of the reference direction (blue in Figure 1): 32.3°.

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig1.gif" }}" title="Figure 1 - 2D view of a floor of the Myran building and its site in the IFC model, as visualised in Autodesk Revit. The blue point represents the Project point and the Origin point (overlapping), to be considered as reference point. Here we can already visualise the model as correctly oriented towards the true North." style="max-height: 300px">
</div>


### Georeferencing parameters (for Task 2)
<strong>Coordinate reference system:</strong> EPSG::3013 SWEREF 99 15 45, RH2000

<strong>Coordinates of the reference point (blue in Figure 1):</strong>

<strong>E:</strong> 145312.8320 m

<strong>N:</strong> 6721748.645 m

<strong>H:</strong> 340.5 m

<strong>Rotation to the true North</strong> of the reference direction (blue in Figure 2): 48°.

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig2.gif" }}" title="Figure 2 - 2D view of a floor of the Myran building in the IFC model. The rotation needed to reach the true north is shown."  style="max-height: 300px">
</div>


### Units of measure and dimensions
The used unit of measure in the model is <strong>millimetre</strong>.

In the following Figures 3-4 some dimensions are shown, to be considered for Task 1


<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig3.gif" }}" title="Figure 3 - Some dimensions in the 2D floor plan." >
</div>


<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig4.gif" }}" title="Figure 4 - Some dimensions in two 2D sections of the building.">
</div>


## Semantics details

Here, the entities included in the model (following 'inclusion' hierarchy) are listed:

IfcProject

- IfcSite

  - IfcBuilding

    - IfcBuildingStorey

      - IfcWall

      - IfcWallStandardCase

      - IfcCurtainWall

      - IfcColumn

      - IfcSlab

      - IfcPlate

      - IfcBeam

      - IfcStair

      - IfcStairFlight

      - IfcRoof

      - IfcCovering

      - IfcOpeningElement

      - IfcDoor

      - IfcWindow

      - IfcRailing

      - IfcFlowTerminal

      - IfcFlowSegment

      - IfcFurnishingElement

      - IfcMember

      - IfcBuildingElementProxy

Note: Semantics are usually consistently assigned and many attributes are filled.

You can browse the full list of IFC entities, with related descriptions, definitions and foreseen attributes in the [buildingSMART website](http://standards.buildingsmart.org/IFC/RELEASE/IFC2x3/TC1/HTML/).


For checking the semantics of the model, <strong>we propose here some elements in a higher detail.</strong>

Anyway, we suggest to have an overall look at the model and its elements, and report on them all, including the more general entities <strong>IfcSite</strong> and <strong>IfcBuilding</strong> and <strong>IfcBuildingStoreys</strong>, even if, in this case, they contain very few attributes (namely, only the attribute ‘NumberOfStoreys = 3’ is added to IfcBuilding, and ‘AboveGround = .U.’ to IfcBuildingStoreys).


### 9 Elements

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig5.gif" }}" title="Element 1)	Door of the one-floor part of the building (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig6.gif" }}" title="Element 2)	External railing  (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig7.gif" }}" title="Element 3)	Window in the ground floor (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig8.gif" }}" title="Element 4)	Element of an external stair (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig9.gif" }}" title="Element 5)	Roof of the two-floors part of the building (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig10.gif" }}" title="Element 6)	Internal wall (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig11.gif" }}" title="Element 7)	Internal floor (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig12.gif" }}" title="Element 8)	Element of the glazed entrance (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig13.gif" }}" title="Element 9)	External wall (in red), with its hierarchy and attributes." >
</div>


## Elements groups: the 3 storeys

For the Task 1, you should also check that the objects are grouped in the same building storeys.

The grouping of the model is not completely consistent with the definition:

* storey 1 includes the ground floor, some structures rising for the whole building heights and the roof;

* storey 2 includes the first floor of the building, without roof, and the roof of the close building 2-storeys height;

* storey 3 only includes the roof structure. However, we will evaluate the consistency of the model with itself).

However, we won’t judge this, only checking that it remains consistent with itself once imported. In the following Figures, we add several images of the single storeys so that you can check visually that no changes have happen, as far as you can. We will eventually go in further detail during the final benchmark analysis using the models delivered by you.

### Building storey 1

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig14.gif" }}" title="Many views of the IfcBuildingStorey ‘VAN 1’ in the software IfcViewer." >
</div>
------------
### Building storey 2

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig15.gif" }}" title="Many views of the IfcBuildingStorey ‘VAN 2’ in the software IfcViewer." >
</div>
------------
### Building storey 3

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Myran-Fig16.gif" }}" title="Many views of the IfcBuildingStorey ‘VAN 3’ in the software IfcViewer." >
</div>

## Relationships

In Task 1, you are also asked to check other relationships.
Some examples, in the Myran.ifc model are:

<strong>IfcRelAssociatesMaterial</strong>, connecting the objects (e.g. IfCWallType or IfCWallStandardCase) to their materials (e.g. IfcMaterialLayerSet, IfcMaterialLayerSetUsage).

<strong>IfcRelAggregates</strong>, between one object to others (e.g. IfCurtainWall to IfcMember and IfcWallStandardCase; IfcRoof to IfcSlab; IfcStair to IfcRailing and IfcStairFlight and IfcMemebr, and so on).

<strong>IfcRelFillsElement</strong>, between IfcOpeningElement to IfcDoor or IfcWindow.

<strong>IfcRelContainedInSpatialStructure</strong>, between IfcBeam and IfcFlowSegment (and many more) to IfcBuildngStorey.


 - - -
