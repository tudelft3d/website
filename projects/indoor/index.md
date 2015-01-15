---
layout: page
title: Indoor Semantic Modeling to Support Path-Finding
permalink: /projects/indoor/
---

## Indoor navigation

Navigation and location-based services is one of the fast developing applications in Geographic information System (GIS) field. Presently, a considerable attention has been paid to indoor navigation or seamless indoor-outdoor navigation. Because people spend most of their time indoors, which boosts the number of user-required services similar to outdoor navigator especially when they explore complex and large indoor environments.



## Problems
Difficulties commonly exist in indoor data acquisition, indoor modelling and user-dependent path planning. There are diverse 3D geometric building models and semantics designed for different purposes (e.g. CityGML, BIM) but they fail short of sufficient information for indoor navigation to the large diversity of potential users. Moreover, sometimes outdoor path planning may not completely apply to the indoor environments due to their different navigation networks and various navigation semantics architecture.  

## This research – Indoor Semantic Modelling
This research investigates the contribution of semantic modeling for indoor navigation, especially in complex indoor environments. A semantic modeling method named Indoor Navigation Space Model (INSM) has been proposed, which is related to any assigned type of subdivision of buildings. It not only conceptualizes all the necessary building elements for navigation purposes, but also attach to geometric parts of buildings (e.g. rooms, doors, stairs, etc.). 

One of the advantages of *INSM* is that it can be employed to almost all kinds of geometric models.  Basic semantics of *INSM* include *Navigable Space Cell* (e.g. any Room or Space), *NSC* for short, *Opening* (e.g. Doors or Windows) and *Obstacles* (e.g. desks, columns or other furniture). The pivotal notions of *NSC* are: 1) *Horizontal Unit* for horizontal movements, including *Horizontal Connector* (e.g. corridors) and *End* (only connects one other room); 2) *Vertical Unit* for “up-or-down” movements, e.g. stairs or elevators; 3) *Vertical Connector*, a type of special *Horizontal Unit* which articulates the other *Horizontal Unit* and *Vertical Unit*. Given the *INSM* semantics, we could readily extract path pattern, and leverage the pattern for path finding.

--- 

<div class="row">
	<div class="col-sm-12">
    <img class="img-responsive" alt="Indoor Navigation Space Model" src="{{ "/projects/indoor/img/INSM.jpg" | prepend: site.baseurl }}">
	</div>
</div>

--- 

We also provide a transformation means from some semantics data formats (e.g. CityGML LoD4 or BIM IFC). The *INSM* semantics is not the intrinsic feature of many existing data formats. For example, we regard two other types of semantic data as input and enrich the data with *INSM* semantics. i.e. CityGML LoD4 (indoor) and *BIM IFC*. This transformation also works on digital floor plans with necessary category information (e.g. notifying *Stair* and *Elevator*).

Connectivity Graph derived from CityGML and data:

---

<div class="row">
  <div class="col-sm-6 col-xs-12">
    <img class="img-responsive" alt="Generating Logical Model" src="{{ "/projects/indoor/img/FromCityGML.jpg" | prepend: site.baseurl }}">
  </div>
  <div class="col-sm-6 col-xs-12">
    <img class="img-responsive" alt="Examples of Floor Plans" src="{{ "/projects/indoor/img/FromFloorPlans.jpg" | prepend: site.baseurl }}">
  </div>
</div>

---

Connectivity Graph derived from an IFC Model:

---

<div class="row">
  <div class="col-sm-4 col-xs-12">
    <img class="img-responsive" alt="IFC Model" src="{{ "/projects/indoor/img/Ifc1.png" | prepend: site.baseurl }}">
  </div>
  <div class="col-sm-4 col-xs-12">
    <img class="img-responsive" alt="IFC Model with Connectivity Graph" src="{{ "/projects/indoor/img/ifc2.png" | prepend: site.baseurl }}">
  </div>
  <div class="col-sm-4 col-xs-12">
    <img class="img-responsive" alt="Connectivity Graph" src="{{ "/projects/indoor/img/ifc3.png" | prepend: site.baseurl }}">
  </div>
</div>

---

## This research – Two level approach for navigation
Based on *INSM* a two-level indoor routing strategy has been developed for indoor path planning. On the coarse level, meaningful logical paths are generated in the connectivity graph derived from *INSM*; on the detailed level, we can compute detailed geometric paths which are free of obstacles insides rooms. By combining indoor semantic modeling and two-level strategy we also could conduct user-dependent indoor routing. User profiles and preferences are important criteria on the selection of multiple paths.

Path on the coarse level:



Path on the detailed level:

---

<div class="row">
  <div class="col-sm-12">
    <img class="img-responsive" alt="Detailed Level Path" src="{{ "/projects/indoor/img/2ndLevelPath.png" | prepend: site.baseurl }}">
  </div>
</div>