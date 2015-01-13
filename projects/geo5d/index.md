---
layout: page
title:  5D geo-modelling
permalink: /projects/geo5d/
---

<div class="row">
  <!-- <div class="col-sm-3 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/geo5d/img/gmaps.png" | prepend: site.baseurl }}"></div> -->
  <div class="col-sm-3 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/geo5d/img/lod34.png" | prepend: site.baseurl }}"></div>
  <div class="col-sm-3 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/geo5d/img/lod1.png" | prepend: site.baseurl }}"></div>
	<div class="col-sm-6 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/geo5d/img/extrusion.png" | prepend: site.baseurl }}"></div>
</div>

---

## 5D modelling

The aim of the 5D modelling research project is to integrate the multi-dimensional characteristics of geographic data, i.e. 2D/3D, time and scale (also indicated as 'Level of Detail', 'resolution' or 'granularity') at a fundamental level of data modelling.<br />
The resulting conceptual 5D model creates a new approach for modelling geographic data (geo-data), as until now geo-data modelling has focused on the issues of single dimensions only, with at most some minimum attention for the other dimensions.

The integrated approach provides a sustainable foundation for spatial data infrastructures:

  - A true 5D approach accomplishes a highly formal definition of geo-data that fully addresses the relationships between space, time and scale. This avoids having to handle special cases separately.
  - The model enforces consistency across dimensional borders, which improves data quality.
  - Optimal efficient 5D searching and maintenance can only be realised if a 5D data structure is used, otherwise the DBMS query plan has to select first on space, then on time and then on scale (or in another order).

The 5D data modelling is being studied at two levels. At first a 5D data model and data structure are being accomplished on which any geo-information model can be founded. Secondly, it is being studied how GIS data can be modelled in an nD way accordingly.

Because of the high ambitions to realise a true 5D model, the focus is on laying down a foundation for n-dimensional data modelling by defining a theory validated through prototype implementations, which can be further developed in the future. In addition, in a step-wise approach mathematical theories on n-dimensional modelling are being applied to established principles in 2D/3D, time and multi-scale modelling. Studying several combinations of the different dimensions will identify the optimal method for including multi-dimensional concepts and notions in geo-data modelling.

The research will result in well-tested technology for 5D data modelling after 5 years. However as the research approach extends currently available single-dimensional models in a step-wise approach, the intermediate models that integrate multiple but not all dimensional concepts are already in reach for use in practice and commercial implementations within the next few years, i.e. several 3D models after one to two years (3D space, 2D space+time, 2D space+scale) and several 4D models after several years (3D space+time, 3D space+scale, 2D space+time+scale), all based on a solid mathematical theory and recent GIS technology developments.

In 2010 this research project was awarded with a Vidi grant from the [Dutch Technology Foundation STW](http://www.stw.nl), which is part of the [Netherlands Organisation for Scientific Research (NWO)](http://www.nwo.nl). Since then several PhDs, Post-docs, MSc students and visiting scientists have been working in the project.

---

<div class="row">
  <div class="col-lg-offset-3 col-lg-3">
      <img class="img-circle img-responsive" src="{{ "/img/staff/pirouz.png" | prepend: site.baseurl }}">
      <h3>Pirouz Nourian <br><small>PhD candidate</small></h3>
  </div>
  <div class=" col-lg-3">
      <a href="http://3dgeoinfo.bk.tudelft.nl/szlatanova/"><img class="img-circle img-responsive" src="{{ "/img/staff/sisi.jpg" | prepend: site.baseurl }}"></a>
      <h3>Sisi Zlatanova <br><small>Project leader</small></h3>
  </div>
</div>