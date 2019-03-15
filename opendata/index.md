---
layout: page
title: Open datasets
permalink: /opendata/
---

<!-- # TODO B: create a rendering in Blender with the bodemvlakken draped over the terrain and the extruded buildings-->

<div class="row">
  
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="opencities"><img src="{{ "/img/code/opencities.png" | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>3D city models
        <br/>
        </h3>
        <p>List of cities around the world with open 3D datasets, available in various formats.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="http://www.cityjson.org/en/0.9/datasets/"><img src="{{ "/img/code/cityjson.png" | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>3D city models in CityJSON
        <br/>
        </h3>
        <p>Several 3D cities are available in CityJSON</p>
      </div>
    </div>
  </div>

 
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="3dfier"><img src="{{ "/img/code/3dfier.png" | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>Dutch 3D city models
        <br/>
        </h3>
        <p>Created with <a href="https://github.com/tudelft3d/3dfier">3dfier</a>, available in OBJ, CityGML, and IMGeo.</p>
      </div>
    </div>
  </div>  
 
  
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="random3dcity"><img src="{{ "/img/code/random3dcity.png" | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>Procedural multi-LoD data
        <br/>
        </h3>
        <p>Created with <a href="https://github.com/tudelft3d/Random3Dcity">Random3Dcity</a>, available in OBJ and CityGML.</p>
      </div>
    </div>
  </div>
  
</div>

<h2>Curated lists</h2>

Furthermore, Wikipedia has <a href="https://en.wikipedia.org/wiki/National_lidar_dataset">a list of national lidar datasets</a>. These datasets can be used as input to generate 3D city models. A possibility is to use the open-source software <a href="https://github.com/tudelft3d/3dfier">3dfier</a> developed at our group, or <a href="https://www.citygml.guru/software/#generators-of-3d-city-models-in-citygml">other CityGML software</a>.