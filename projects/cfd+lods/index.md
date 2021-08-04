---
layout: page
title: "Analyzing the impact of semantic LoDs in computational fluid dynamic predictions"
permalink: /projects/cfd+lods/
---

<div class="row">
  <div class="col-md-12 col-xs-12"><img class="img-responsive" src="{{ "banner.jpg" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Summary

Climate change and urbanization rates are transforming urban environments, making the use of 3D city models in computational fluid dynamics (CFD) a fundamental ingredient to evaluate urban layouts before construction. However, the current geometries used in CFD simulations tend to be built by CFD experts to test specific cases, most of the times oversimplifying their designs due to lack of information or in order to reduce complexity. In this work we explore what are the effects of oversimplifying geometries by comparing wind simulations of different level of detail geometries. We use semantic 3D city models automatically built by the 3dgeoinformation group (experts in geometric reconstruction), and adjust them to their suitable use in CFD. For the first test, we explore wind simulations within a troublesome section of the TU Delft campus (the passage next to the EWI building), where the use of 3D city model variants show how differences in geometry and surfaces affect local wind conditions.

The path to perform these simulations without the support of 3D city models automatically created is somewhat cumbersome. For this case, the two LoD variants used, LoD1.3 and LoD2.2 were directly downloaded in tiles from [3Dbag](https://3dbag.nl/en/viewer). Using [cjio](https://github.com/cityjson/cjio) we converted the models into object files, which allowed their use with the open source CFD code OpenFOAM. The manual work required to set-up these simulations summed up to around 12h. LoDs differences can be observed in the leftmost figure shown at the beginning of this section.

The rightmost figure presents the comparison of wind flow results in the form or contour plots at pedestrian height (1.75m). The colorbar represents the signed percentage change in velocity magnitude with respect to the inflow wind velocity at 1.75m height. The differences retrieved ranged from -3.1 to 3.3 m/s, with a few locations around the buildings, where these differences are considerable. The maximum difference in wind speed is typically found closest to tall buildings, but we also see noticeable deviations caused by low buildings differences in bottom left locations. We can conclude that different levels of detail leads to diverse wind patterns in built environments. The result is relevant for wind flows, but it might be relevant for pollution or pathogens transport as well (to be explored in future simulations).


## 3dgeoinfo abstract 
An abstract has been accepted at the 3dgeoinformation conference in 2021, and a full paper is currently under preparation.

<i class="fas fa-file-pdf">
  <a href="3dgeoinfo2021.pdf">Garcia-Sanchez_etal_3Dgeoinfo2021.pdf</a>
</i>



<!---## Final presentation

<div class="row">
  <div class="col-xs-12 col-md-6">
<script async class="speakerdeck-embed" data-id="d46a020b8b75460ca6b8ed9cf7c53582" data-ratio="1.33333333333333" src="//speakerdeck.com/assets/embed.js"></script>
  </div>
</div>
-->
