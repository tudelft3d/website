---
layout: page
title: About
permalink: /about/
map: true
---

<div class="footnotes">
  <ol>
    <li id="fn:1">
      <p>We are aware that the correct name is "Faculty of Architecture and the Built Environment". We swapped the names has a silent protest against the fact that many at the faculty omit the "and the Built Environment" part, and that this reflects little attention that is spent on non-architecture research groups and projects.</p>
    </li>
  </ol>
</div>


<div class="row">
  <div class="col-sm-6">
    <h3>What</h3>

    The 3D geoinformation research group is part of the <a href="https://www.tudelft.nl/en/architecture-and-the-built-environment/about-the-faculty/departments/urbanism/">Department of Urbanism</a>, <a href="http://www.bk.tudelft.nl">Faculty of the Built Environment and Architecture</a><sup id="fnref:1"><a href="#fn:1" class="footnote">*</a></sup> of the <a href="http://www.tudelft.nl">Delft University of Technology</a>, and is affiliated with <a href="http://www.ams-institute.org">AMS</a>, the Amsterdam Institute for Advanced Metropolitan Solutions. 
    It focuses on the technologies underpinning geographical information systems (GIS), and aims at designing, developing, and implementing better systems to model 3D cities, buildings, and landscapes.
    These systems help in environmental modelling, urban planning, crisis management, automated cartographic generalisation, information modelling, modelling of the interior of buildings, etc.


    It is a multidisciplinary group (computer scientists, geomatics engineers, and geographers) composed of 4 permanent research staff and several PhD students, postdocs, and visitors.

    It has a history of successful collaborations with the industry and the government: its research has led to <a href="{{ "/code/" |  prepend: site.baseurl }}">software</a> and international standards for the management of 3D geographic information.

    The staff of the group is active in several international organisations such as the <a href="http://www.opengeospatial.org">Open Geospatial Consortium</a>, <a href="http://www.eurosdr.net">EuroSDR</a>, and the <a href="http://www.isprs.org">International Society for Photogrammetry and Remote Sensing</a>.

    Our research funding mostly comes from the following organisations:

    <div class="row">
      <div class="col-xs-4"><a href="https://erc.europa.eu"><img class="img-responsive" src="{{ "/img/partners/erc.svg" | prepend: site.baseurl }}" alt="ERC logo" style="height: 100px; margin: auto;" /></a></div>
      <div class="col-xs-4"><a href="https://www.nwo.nl"><img class="img-responsive" src="{{ "/img/partners/nwo.svg" | prepend: site.baseurl }}" alt="NWO logo" style="height: 100px; margin: auto;" /></a></div>
      <div class="col-xs-4"><a href="https://www.ams-institute.org"><img class="img-responsive" src="{{ "/img/partners/ams.svg" | prepend: site.baseurl }}" alt="AMS logo" style="height: 100px; margin: auto;" /></a></div>
      <div class="col-xs-offset-2 col-xs-4"><a href="https://www.kadaster.nl"><img class="img-responsive" src="{{ "/img/partners/kadaster.svg" | prepend: site.baseurl }}" alt="Kadaster logo" style="height: 100px; margin: auto;" /></a></div>
      <div class="col-xs-4"><a href="https://www.rijkswaterstaat.nl"><img class="img-responsive" src="{{ "/img/partners/rws.svg" | prepend: site.baseurl }}" alt="RWS logo" style="height: 100px; margin: auto;" /></a></div>
    </div>
  </div>
  <div class="col-sm-6">
    <section id="where">
      <h3>Where</h3>

      <div class="row">
        <div class="col-xs-4">
          <div style="font-size: larger;">
            <a href="https://twitter.com/tudelft3d"><i class="fab fa-twitter fa-fw"></i> Twitter</a><br /> 
            <a href="https://www.youtube.com/channel/UCbK2N4c3QyhGLvjx1Xx2lRw"><i class="fab fa-youtube fa-fw"></i> Youtube</a><br /> 
            <a href="https://github.com/tudelft3d"><i class="fab fa-github fa-fw"></i> Github</a>
          </div>
        </div>
        <div class="col-xs-8">
          <i class="fas fa-map-marker-alt fa-fw">     </i> Room BG.West.550 (building #8) <br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> BK-City <br>
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
  </div>
</div>


- - - 

<section id="people">
  <h2>Who</h2>

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

<section name="people">
  <h2>Former staff</h2>

  <a href="{{ "/about/formerstaff" | prepend: site.baseurl }}">List of former staff</a>

</section>



