---
layout: page
title: About
permalink: /about/
map: true
---

<div class="row">
  <div class="col-sm-6">
    <h3>Our Group</h3>
    <p>
    The 3D geoinformation research group is part of Section Urban Data Science , <a href="http://www.tudelft.nl">Delft University of Technology</a>, and is affiliated with <a href="http://www.ams-institute.org">AMS</a>, the Amsterdam Institute for Advanced Metropolitan Solutions. </p>
    <p>
    The group focuses on technologies underpinning 3D geo-data and the integration with Building Information Models (BIMs) and aims at designing, developing, and implementing open data and open source solutions to model cities, buildings, and landscapes in 3D for environmental and urban studies. Open Science is an important principle of our research. We are also the main provider of education in the <a href="https://www.tudelft.nl/onderwijs/opleidingen/masters/geomatics/msc-geomatics">MSc Geomatics</a>. 
    </p>
    <p>
    It is a multidisciplinary group of about <a href="https://3d.bk.tudelft.nl/about/#people">25 people</a>, including computer scientists, geomatics engineers, and geographers. It has a history of successful collaborations with the industry and the government: its research has led to <a href="{{ "/code/" |  prepend: site.baseurl }}">software</a> and international standards for the management of 3D geographic information. The staff of the group is active in several international organisations such as the <a href="https://www.ogc.org">Open Geospatial Consortium</a>, <a href="http://www.eurosdr.net">EuroSDR</a>, and the <a href="https://www.isprs.org">International Society for Photogrammetry and Remote Sensing</a>. Nationally we have strong links to <a href="https://www.kadaster.nl/">Kadaster</a> and <a href="https://www.geonovum.nl/">Geonovum</a>.
    </p>
    <p>
    Our research funding mostly comes from the following organisations:
    </p>
    <div class="row">
      <div class="col-xs-4"><a href="https://erc.europa.eu"><img class="img-responsive" src="{{ "/img/partners/erc.svg" | prepend: site.baseurl }}" alt="ERC logo" style="height: 100px; margin: auto;" /></a></div>
      <div class="col-xs-4"><a href="https://www.nwo.nl"><img class="img-responsive" src="{{ "/img/partners/nwo.svg" | prepend: site.baseurl }}" alt="NWO logo" style="height: 100px; margin: auto;" /></a></div>
      <div class="col-xs-4"><a href="https://www.ams-institute.org"><img class="img-responsive" src="{{ "/img/partners/ams.svg" | prepend: site.baseurl }}" alt="AMS logo" style="height: 100px; margin: auto;" /></a></div>
      <div class="col-xs-4"><a href="https://www.kadaster.nl"><img class="img-responsive" src="{{ "/img/partners/kadaster.svg" | prepend: site.baseurl }}" alt="Kadaster logo" style="height: 100px; margin: auto;" /></a></div>
      <div class="col-xs-4"><a href="https://www.rijkswaterstaat.nl"><img class="img-responsive" src="{{ "/img/partners/rws.svg" | prepend: site.baseurl }}" alt="RWS logo" style="height: 100px; margin: auto;" /></a></div>
      <div class="col-xs-4"><a href="https://www.rijksoverheid.nl/"><img class="img-responsive" src="{{ "/img/partners/rijksoverheid.png" | prepend: site.baseurl }}" alt="Rijksoverheid logo" style="height: 100px; margin: auto;" /></a></div>
    </div>
  </div>
  <div class="col-sm-6">
    <section id="where">
      <h3>Our Location</h3>
      <div class="row">
        <div class="col-xs-4">
          <div style="font-size: larger;">
            <a href="https://twitter.com/tudelft3d"><i class="fab fa-twitter fa-fw"></i> Twitter</a><br /> 
            <a href="https://www.youtube.com/channel/UCbK2N4c3QyhGLvjx1Xx2lRw"><i class="fab fa-youtube fa-fw"></i> Youtube</a><br /> 
            <a href="https://github.com/tudelft3d"><i class="fab fa-github fa-fw"></i> Github</a>
          </div>
        </div>
        <div class="col-xs-8">
          <i class="fas fa-map-marker-alt fa-fw">     </i> Room BG.West.550<br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> Building 8 (BK City) <br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> Delft University of Technology <br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> Julianalaan 134 <br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> Delft 2628BL<br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> the Netherlands <br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> <a href="https://www.tudelft.nl/en/architecture-and-the-built-environment/about-the-faculty/contact-and-map/">How to get here</a>
          <br />
        </div>
        <div class="col-xs-12">
          <br />
          <div id="map"></div>
        </div>
      </div>
    </section>
    <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoieWxhbm5sIiwiYSI6ImNrNjB6MDdkZzBjYWgzbG1idnNtY2NwN3oifQ.Tcrga-SiNjx2Sy6Sr8JrUQ';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/ylannl/ck6528mj226nu1io7q2qf4nam',
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
            "description": "<h3>3D Geoinformation</h3><p>Room BG.West.550</p>",
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
  </div>
</div>
- - - 
<section id="people">
  <h2>Our Staff</h2>
  {% assign members = site.data.staff | better_sort: 'surname' %}
  <div class="row">
    {% for member in members %}
      <div class="col-md-3 col-sm-4 col-xs-6">
        {% include contact.html person=member role=member.title %}
      </div>
    {% endfor %}
  </div>
</section>
- - -
<section id="visiting people">
  <h2>Academic visitors</h2>
  {% assign members = site.data.staff_visiting | better_sort: 'surname' %}
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
  <h2>Former staff</h2>
  <a href="{{ "/about/formerstaff" | prepend: site.baseurl }}">List of former staff</a>
</section>

