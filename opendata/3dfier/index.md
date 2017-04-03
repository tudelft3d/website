---
layout: page
title: Open datasets created with 3dfier
permalink: /opendata/3dfier/
---

A few Dutch cities that we reconstructed with [3dfier](https://github.com/tudelft3d/3dfier) by combining the [BGT dataset (large-scale topographic dataset of the Netherlands)](https://www.pdok.nl/nl/producten/pdok-downloads/download-basisregistratie-grootschalige-topografie) (license is [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/)) and the [AHN3 datasets (laser altimetry)](https://www.pdok.nl/nl/ahn3-downloads) (license is [CC0 1.0](https://creativecommons.org/publicdomain/zero/1.0)).

The dataset below are all available under the [Creative Commons CC0 Public Domain Dedication](https://creativecommons.org/publicdomain/zero/1.0).

We offer different formats:

  - OBJ: simple format useful for visualisation, use this to visualise the models. The free software [MeshLab](http://meshlab.sourceforge.net) works great, and is cross-platform.
  - CityGML: the file will be much bigger than the OBJ. You can visualise it with our free software [Azul](https://github.com/tudelft3d/azul) (MacOS) or [FZKViewer](http://iai-typo3.iai.fzk.de/www-extern-kit/index.php?id=1134) (Windows).
  - IMGeo: Dutch format, more details [there](http://www.geonovum.nl/onderwerp-artikel/toolkit-3d). There are no proper visualiser for this at this moment.

- - -

<div class="row">
{% for i in site.data.data-3dfier %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <img src="{{ i.image | prepend: site.baseurl }}"/>
      <div class="caption">
        <h3>{{ i.name }}
        <br />
        <small>
        {% if i.citygml %}
          <a href="{{ i.citygml | prepend: "/download/3dfier/" | prepend: site.baseurl }}">[CityGML]</a> 
        {% endif %}
        {% if i.obj %}
          <a href="{{ i.obj | prepend: "/download/3dfier/" | prepend: site.baseurl  }}">[OBJ]</a> 
        {% endif %}
        {% if i.imgeo %}
          <a href="{{ i.imgeo | prepend: "/download/3dfier/" | prepend: site.baseurl }}">[IMGeo]</a> 
        {% endif %}
        </small>
        </h3>
        <p>{{ i.description }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>

