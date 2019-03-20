---
layout: benchmark
title: Savigliano IFC model
permalink: /projects/geobim-benchmark/savigliano.html
---

<h1>Savigliano IFC model</h1>

<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-1.gif" }}" style="max-height: 500px"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Short description

It is the IFC model of a residential building under construction in Rotterdam, the Netherlands.

It was modelled during a research project in Politecnico di Torino, by L. Polia.

The data represent the architectural model of the BIM.

It was exported on 14/03/2019 from the base software Autodesk Revit 2019 (ITA)

## Technical details

Name of the file: <strong>Savigliano.ifc</strong>

Used IFC version: 4 (MVD: DesignTransferView v.1.0)

## Georeferencing details

### Original georeferencing details (for Task 1)
<strong>Coordinate reference system:</strong> none

<strong>Coordinates of the reference point (blue in Figure 1):</strong>

<strong>E:</strong> 0 m

<strong>N:</strong> 0 m

<strong>H:</strong> 0 m

<strong>Rotation to the true North</strong> of the reference direction (red in Figure 1): 0°.

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-2.gif" }}" title="Figure 1 - 3D view of the Savigliano IFC model, as visualised in Solibri model viewer. The red-green arrows represents the insertion point of the model; the green arrow is the direction taken as reference for rotating the model towards the true north (using the reference point as centre of the rotation)."  style="max-height: 300px">
</div>


### Georeferencing parameters (for Task 2)
<strong>Coordinate reference system:</strong> EPSG: 28992 – Amersfoort / RD New

<strong>Coordinates of the reference point (blue in Figure 1 and 2):</strong>

<strong>E:</strong> 93065.2 m

<strong>N:</strong> 436770.4 m

<strong>H:</strong> -1.5 m

<strong>Rotation to the true North</strong> of the reference direction (blue in Figure 2): 106.65°.

Centre of rotation is the same reference point (in blue in Figures 1 and 2).

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/UpTown-Fig2.gif" }}" title="Figure 2 - 2D view of a floor of the Up:Town building in the IFC model, visualised in the map; the red line represents the (rotated) reference line and the blue point represents the reference point)."  style="max-height: 300px">
</div>


### Units of measure and dimensions
The used unit of measure in the model is <strong>metre</strong>.

In the following Figures 3 some dimensions are shown, to be considered for Task 1


<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/UpTown-Fig3.gif" }}" title="Figure 3 - Some dimensions in the 2D floor plan." >
</div>


## Semantics details

Here, the entities included in the model (hierarchically organised) are listed:

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

      - IfcRoof

      - IfcCovering

      - IfcOpeningElement

      - IfcDoor

      - IfcWindow

      - IfcRailing

      - IfcFlowTerminal

      - IfcEnergyConversionDevice

      - IfcFurnishingElement

      - IfcMember

      - IfcBuildingElementProxy

Note: The use of semantic entities is not perfect. For Example, many IfcBuildingElementProxy describe elements having well-defined semantics in IFC (e.g. stairs) and many attributes are missing, <strong>but we will evaluate the consistency of the model with itself through the conversions.</strong>

You can browse the full list of IFC entities, with related descriptions, definitions and foreseen attributes in the [buildingSMART website] (http://standards.buildingsmart.org/IFC/RELEASE/IFC2x3/TC1/HTML/).


For checking the semantics of the model, <strong>we propose here some elements in a higher detail.</strong>

Anyway, we suggest to have an overall look at the model and its elements, and report on them all, including the more general entities <strong>IfcSite</strong> and <strong>IfcBuilding</strong> (Figure 4).

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/UpTown-Fig4.gif" }}" title="Figure 4 – Attributes under the entity IfcSite and IfcBuilding." >
</div>


### 4 Elements in detail

Some entities can be semantically defined in inaccurate way.

However, in Task 1, you will need to check that the given semantics are maintained through the conversions, independently from teir actual meaning.

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/UpTown-Fig5.gif" }}" title="Element 1)	Roof of the lower part of the building  (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/UpTown-Fig6.gif" }}" title="Element 2)	Railing of the 7th floor over the roof of the lowest part of the building, in the tower  (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/UpTown-Fig7.gif" }}" title="Element 3)	Wall in the last floor of the lowest part of the building (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/UpTown-Fig8.gif" }}" title="Element 4)	Up-left window in the lowest part of the building (having the tower on the right)  (in red), with its hierarchy and attributes." >
</div>


## Relationships

In Task 1, you are also asked to check other relationships.
Some examples, in the UpTown.ifc model are:

<strong>IfcRelAssociatesClassification</strong>, connecting objects (e.g. IfCWallStandardCase or IfcOpeningElement) to IfcClassificationReference.

<strong>IfcRelAggregates</strong>, between IfcWallStandardCase to IfcWallType or IfcPlate to IfcPlateType, and so on.

<strong>IfcRelDefinesByType</strong>, , between IfcWallStandardCase to IfcWallType or IfcPlate to IfcPlateType, and so on.

<strong>IfcRelContainedInSpatialStructure</strong>, between many Ifc entities to, e.g., IfcBuildingStorey.


 - - -
