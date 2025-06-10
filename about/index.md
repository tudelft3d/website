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
      <h3>Where to find us</h3>
      <div class="row">
       <div class="col-xs-8">
          <i class="fas fa-map-marker-alt fa-fw"></i> Room BG.West.550<br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> Faculty of Architecture,  TU Delft<br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> Julianalaan 134<br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> Delft 2628BL<br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> The Netherlands<br><br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i> <a href="https://www.tudelft.nl/en/architecture-and-the-built-environment/about-the-faculty/contact-and-map/"> How to get here</a><br>
          <i class="fas fa-map-marker-alt fa-fw fade"></i>
        </div>
        <div class="col-xs-4">
          <div style="font-size: 2rem;">
          <a href="https://github.com/tudelft3d"><i class="fab fa-github fa-fw"></i> GitHub</a><br />
            <a href="https://www.linkedin.com/company/3d-geoinformation-group"><i class="fab fa-linkedin fa-fw"></i> Linkedin</a><br />
            <a href="https://www.youtube.com/channel/UCbK2N4c3QyhGLvjx1Xx2lRw"><i class="fab fa-youtube fa-fw"></i> YouTube</a><br /> 
            
          </div>
        </div>

        <div class="col-xs-12">
          <div id="map"></div>
        </div>
      </div>
    </section>
<script>

  maptilersdk.config.apiKey = '2dYabeYkcrcV251vBirk';

  var map = new maptilersdk.Map({
      container: 'map',
      style: maptilersdk.MapStyle.BASIC.LIGHT,
      center: [4.3697572, 52.0056088],
      zoom: 16,
      pitch: 60
    });

  // Add a marker
  new maptilersdk.Marker({
          color: "#00A6D6"
        })
    .setLngLat([4.3697572, 52.0056088])
    .addTo(map);


  

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

