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

It was modelled by Lorenzo Polia during a research in Politecnico di Torino, Department of Architecture and Design.

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
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-Fig1.gif" }}" title="Figure 1 - 2D view of the Savigliano IFC model, as visualised in Revit. The blue point represents the reference point of the model; the red line is the direction taken as reference for rotating the model towards the true north (using the reference point as centre of the rotation)."  style="max-height: 300px">
</div>


### Georeferencing parameters (for Task 2)
<strong>Coordinate reference system:</strong> EPSG: 32632 WGS 84 / UTM zone 32N

<strong>Coordinates of the reference point (blue in Figure 1 and 2):</strong>

<strong>E:</strong> 394411.14 m

<strong>N:</strong> 4944441.08 m

<strong>H:</strong> 450 m

<strong>Rotation to the true North</strong> of the reference direction (blue in Figure 2): 43.65°.

Centre of rotation is the same reference point (in blue in Figure 1).


### Units of measure and dimensions
The used unit of measure in the model is <strong>metre</strong>.

In the following Figures 2 and 3 some dimensions are shown, to be considered for Task 1


<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-Fig2.gif" }}" title="Figure 2 - Some dimensions in the 2D floor plan." >
</div>

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-Fig3.gif" }}" title="Figure 3 - Some dimensions in the 2D section." >
</div>


## Semantics details

Here, the entities included in the model (following 'inclusion' hierarchy) are listed:

IfcProject

- IfcSite

  - IfcBuilding

    - IfcBuildingStorey

      - IfcWall

      - IfcCurtainWall

      - IfcColumn

      - IfcSlab

      - IfcPlate

      - IfcRoof

      - IfcOpeningElement

      - IfcDoor

      - IfcWindow
      
      - IfcStair
      
          - IfcStairFlight
          
          - IfcSlab
          
          - IfcRailing

      - IfcRailing

      - IfcPipeFitting

      - IfcPipeSegment

      - IfcDistributionPort

      - IfcMember

      - IfcBuildingElementProxy

Note: The use of semantic entities is generally accurate, and no inconsistent entities are defined.

You can browse the full list of IFC entities, with related descriptions, definitions and foreseen attributes in the [buildingSMART website](http://standards.buildingsmart.org/IFC/RELEASE/IFC4/FINAL/HTML/).


For checking the semantics of the model, <strong>we propose here some elements in a higher detail.</strong>

Anyway, we suggest to have an overall look at the model and its elements, and report on them all, including the more general entities <strong>IfcSite</strong> and <strong>IfcBuilding</strong>.

### 6 Elements in detail

<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-Fig4.gif" }}" title="Element 1)	Side wall enclosing one staircase (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-Fig5.gif" }}" title="Element 2)	Roof of a part of one building (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-Fig6.gif" }}" title="Element 3)	Stair Flight (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-Fig7.gif" }}" title="Element 4)	Slab on the 5th level of one building (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-Fig8.gif" }}" title="Element 5)	Window in the upper-right corner of one building (in red), with its hierarchy and attributes." >
</div>
------------
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-Fig9.gif" }}" title="Element 6)	Column (in red), with its hierarchy and attributes." >
</div>

## Elements groups: the 3 storeys

For the Task 1, you should also check that the objects are grouped in the same building storeys.

The grouping of the model is completely consistent with the definition. Some elements running for the whole height of the buildings (e.g. staircases, columns, installations) are in the group where they are based (from the (sub)groundfloor to higher floors):

### Building storey -1
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-St-1.gif" }}" title="Many views of the IfcBuildingStorey -1 in the software IfcViewer." >
</div>

### Building storey 0
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-St0.gif" }}" title="Many views of the IfcBuildingStorey Ground floor in the software IfcViewer." >
</div>

### Building storey 1
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-St1.gif" }}" title="Many views of the IfcBuildingStorey 1 in the software IfcViewer." >
</div>

### Building storeys 2, 3 and 4
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-St234.gif" }}" title="Many views of the IfcBuildingStoreys 2, 3 and 4 (which are similar each other) in the software IfcViewer." >
</div>

### Building storey 'roof'
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-StR.gif" }}" title="Many views of the IfcBuildingStorey regarding the roof level in the software IfcViewer." >
</div>

### Building storey 'roof slabs'
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-StRS.gif" }}" title="Many views of the IfcBuildingStorey finishing the Roof in the software IfcViewer." >
</div>

### Building storey 'staircases roofs'
<div class="row">
	<img class="img-responsive" src="{{ "/projects/geobim-benchmark/img/Savigliano-StRR.gif" }}" title="Many views of the IfcBuildingStorey representing the roof of staircases in the software IfcViewer." >
</div>
------------
## Relationships

In Task 1, you are also asked to check other relationships.
Some examples, in the Savigliano.ifc model are:

<strong>IfcRelAggregates</strong>, between IfcStairFlight, IfcSlab, IfcRailing to IfcStair, or IfcPlate and IfcMember to IfcCurtainWall.

<strong>IfcRelDefinesByType</strong>, , between IfcWallStandardCase to IfcWallType or IfcPlate to IfcPlateType, and so on.

<strong>IfcRelContainedInSpatialStructure</strong>, between many Ifc entities to, e.g., IfcBuildingStorey.


 - - -
