---
layout: page
title: IFC/CityJSON
permalink: /projects/i3s/
---

<div class="row">
  <div class="col-sm-6 col-xs-6">
    <img class="img-responsive" src="{{ "/projects/i3s/img/simple.png" | prepend: site.baseurl }}">
  </div>
  <div class="col-sm-6 col-xs-6">
    <img class="img-responsive" src="{{ "/projects/i3s/img/complex.png" | prepend: site.baseurl }}">
  </div>
</div>

Building Information Modelling (BIM) is a fairly novel paradigm in the construction sector in which a multi-disciplinary information in construction is exchanged between stakeholders as a decomposition of individual elements. These elements are defined as a solid volume geometry that is procedurally defined, semantic information associated to elements as key-value pairs (property sets) and relationships between these elements such as decomposition relationships and wall and space boundary connectivity.

Conversely in the field of Geographic Information Systems (GIS) a higher level view is required and there is a stronger focus on functional characteristics (for the purpose of e.g Facility Management) and spatial analysis. Due to these discrepancies in information management a direct conversion of an IFC building model to, for example, CityGML (the predominant standard for semantic city models) is suboptimal: the individual building elements do not form a complete manifold shell that separates interior and exterior and there is geometric information in the model that might be too detailed for this purpose.

This project [developed a open source application](https://github.com/tudelft3d/esri_geobim) that offers a transformation from IFC to CityJSON that takes into account these considerations. It is a reimplementation of [this project](https://github.com/tudelft3d/ifc2citygml), which was previously published in:

Donkers, S., Ledoux, H., Zhao, J., & Stoter, J. (2016). Automatic conversion of IFC datasets to geometrically and semantically correct CityGML LOD3 buildings. Transactions in GIS, 20(4), 547-569.

In short, interpreted geometries in IFC building models are enlarged (dilated) as the Minkowski sum of the IFC volumes and a constant size polyhedron (small cube in our case for now). The resulting geometries are all accumulated as the Boolean sum of the enlarged element volumes.

A specific branch of IfcOpenShell is used that can use CGAL to process the element geometries. The application uses the Nef Polyhedron 3 and Minkowski sum packages from CGAL.

- - - 

## Team

<div class="row">
    {% include project_team.html project_name='i3s' %} 
</div>