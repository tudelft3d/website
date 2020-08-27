---
layout: page
title: About
permalink: /about/
map: true
---

The 3D geoinformation research group is part of the [Department of Urbanism](https://www.tudelft.nl/en/architecture-and-the-built-environment/about-the-faculty/departments/urbanism/), [Faculty of the Built Environment and Architecture](http://www.bk.tudelft.nl) of the [Delft University of Technology](http://www.tudelft.nl), and is affiliated with [AMS, the Amsterdam Institute for Advanced Metropolitan Solutions](http://www.ams-institute.org). 
It focuses on the technologies underpinning geographical information systems (GIS), and aims at designing, developing, and implementing better systems to model 3D cities, buildings, and landscapes.
These systems help in environmental modelling, urban planning, crisis management, automated cartographic generalisation, information modelling, modelling of the interior of buildings, etc.

It is a multidisciplinary group (computer scientists, geomatics engineers, and geographers) composed of 4 permanent research staff and several PhD students, postdocs, and visitors.

It has a history of successful collaborations with the industry and the government: its research has led to [software]({{ "/code/" |  prepend: site.baseurl }}) and international standards for the management of 3D geographic information.

The staff of the group is active in several international organisations such as the [Open Geospatial Consortium](http://www.opengeospatial.org), [EuroSDR](http://www.eurosdr.net), and the [International Society for Photogrammetry and Remote Sensing](http://www.isprs.org).

Our research funding mostly comes from the following organisations:

<div class="row">
  <div class="col-sm-offset-1 col-sm-2 col-xs-4"><a href="https://erc.europa.eu"><img class="img-responsive" src="{{ "/img/partners/erc.svg" | prepend: site.baseurl }}" alt="ERC logo" style="height: 100px; margin: auto;" /></a></div>
  <div class="col-sm-2 col-xs-4"><a href="https://www.nwo.nl"><img class="img-responsive" src="{{ "/img/partners/nwo.svg" | prepend: site.baseurl }}" alt="NWO logo" style="height: 100px; margin: auto;" /></a></div>
  <div class="col-sm-2 col-xs-4"><a href="https://www.ams-institute.org"><img class="img-responsive" src="{{ "/img/partners/ams.svg" | prepend: site.baseurl }}" alt="AMS logo" style="height: 100px; margin: auto;" /></a></div>
  <div class="col-sm-2 col-sm-offset-0 col-xs-offset-2 col-xs-4"><a href="https://www.kadaster.nl"><img class="img-responsive" src="{{ "/img/partners/kadaster.svg" | prepend: site.baseurl }}" alt="Kadaster logo" style="height: 100px; margin: auto;" /></a></div>
  <div class="col-sm-2 col-xs-4"><a href="https://www.rijkswaterstaat.nl"><img class="img-responsive" src="{{ "/img/partners/rws.svg" | prepend: site.baseurl }}" alt="RWS logo" style="height: 100px; margin: auto;" /></a></div>
</div>

- - - 

<section id="people">
  <h2>Staff</h2>

  {% assign members = site.data.staff | sort_natural: 'surname' %}

  <div class="row">
    {% for member in members %}
      <div class="col-md-3 col-sm-4 col-xs-6">
        {% include contact.html person=member role=member.title %}
      </div>
    {% endfor %}
  </div>
</section>

- - - 

<section name="people">
  <h2>Former Staff</h2>

  <a href="{{ "/about/formerstaff" | prepend: site.baseurl }}">List of former staff</a>

</section>

- - -

<section id="where">
  <h2>Our offices</h2>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <i class="fas fa-map-marker-alt fa-fw">     </i> Room BG.West.550 (building #8) <br>
    <i class="fas fa-map-marker-alt fa-fw fade"></i> Faculty of the Built Environment <br>
    <i class="fas fa-map-marker-alt fa-fw fade"></i> and Architecture<br>
    <i class="fas fa-map-marker-alt fa-fw fade"></i> Delft University of Technology <br>
    <i class="fas fa-map-marker-alt fa-fw fade"></i> Julianalaan 134 <br>
    <i class="fas fa-map-marker-alt fa-fw fade"></i> Delft 2628BL<br>
    <i class="fas fa-map-marker-alt fa-fw fade"></i> the Netherlands <br>
    <i class="fas fa-map-marker-alt fa-fw fade"></i> <a href="https://www.tudelft.nl/en/architecture-and-the-built-environment/about-the-faculty/contact-and-map/">How to get here</a>
    <br />
  </div>
  <div class="col-md-8 col-sm-6 col-xs-12">
    <div id="map"></div>
  </div>
</section>
<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoia2Vub2hvcmkiLCJhIjoiY2pnNnc1bDJkMjcxNzMzeGZjOGI4aW5ibyJ9.gonBY78tu7tCtqUAQr5YfA';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/kenohori/cim0i33ql00jmbjlw9l1pro1i',
    center: [4.3697572,52.0056088],
    zoom: 13.5,
    pitch: 60
  });
  map.addControl(new mapboxgl.NavigationControl());
  var markers = {
    "type": "FeatureCollection",
    "features": [{
      "type": "Feature",
      "properties": {
        "description": "<h3>3D Geoinformation</h3><p>Room BG.West.010</p>",
        "iconSize": [50, 50]
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.3697572,52.0056088]
      }
    }]
  }
  // add markers to map
  markers.features.forEach(function(marker) {
    // create a DOM element for the marker
    var el = document.createElement('div');
    el.className = 'marker';
    el.style.backgroundImage = 'url({{ site.url }}{{ site.baseurl }}/img/map/marker.svg)';
    el.style.width = marker.properties.iconSize[0] + 'px';
    el.style.height = marker.properties.iconSize[1] + 'px';

    el.addEventListener('click', function() {
      var popup = new mapboxgl.Popup({closeOnClick: false})
        .setLngLat(markers.features[0].geometry.coordinates)
        .setHTML(markers.features[0].properties.description)
        .addTo(map);
    });

    // add marker to map
    new mapboxgl.Marker(el)
      .setLngLat(markers.features[0].geometry.coordinates)
      .addTo(map);
  });
</script>
