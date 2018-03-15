---
layout: default_umnd
title: Urban modelling in higher dimensions (UMnD)
permalink: /projects/umnd/
---

Urban modelling in higher dimensions, UMnD for short, is a project funded by the [ERC Starting Grant](http://erc.europa.eu/starting-grants) to [Jantien Stoter]({{ "/jstoter" | prepend: site.baseurl }}); 1.5 million euros for a five-year research project. 
It started in September 2016.

Geographic data about urban objects (buildings, roads) is needed to monitor and control the processes within modern urban areas (noise, flooding, energy demand-supply). As these processes occur in 3D, urban applications require 3D data and each application requires its own
specific semantic and geometric level of detail (LoD) of the 3D data. The scientific challenge of Jantien's project is that it requires
enormous efforts to collect and transform 3D data to make it suitable for a specific application. The project will develop a 4D data model
that captures application specific LoDs of urban objects as additional dimension to the three spatial ones (i.e. 3D+LoD). This will result in
a fundamental solution for providing 3D data at application specific LoDs and it will solve the current problem of independently acquired
and stored LoDs of a 3D urban model.

- - - 

## Research Lines

- - -

## Team

{% assign members = site.data.staff | sort: 'surname' %}

  <div class="row">
    {% for member in members %}
      <div class="col-md-3 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      {% if member.homepage %}
        {% if member.swapnames == False %}
          <a href="http://{{ member.homepage }}"><img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}" alt="{{ member.name }} {{ member.van }} {{ member.surname }} photo" /></a>
        {% else %}
          <a href="http://{{ member.homepage }}"><img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}" alt="{{ member.surname }} {{ member.name }} photo" /></a>
        {% endif %}
      {% else %}
        {% if member.swapnames == False %}
          <img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}" alt="{{ member.name }} {{ member.van }} {{ member.surname }} photo" />
        {% else %}
          <img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}" alt="{{ member.surname }} {{ member.name }} photo" />
        {% endif %}
      {% endif %}
      {% if member.swapnames == False %}
        <h3>{{ member.name }} {{ member.van }} {{ member.surname }}<br><small>{{ member.title }}</small></h3>
      {% else %}
        <h3>{{ member.surname }} {{ member.name }}<br><small>{{ member.title }}</small></h3>
      {% endif %}
        <p>
          {% if member.homepage %}
            <i class="fa fa-home"></i> <a href="http://{{ member.homepage }}">{{ member.homepage }}</a><br>
          {% endif %}
          {% if member.email %}
            <i class="fa fa-envelope"></i> <a href="mailto:{{ member.email }}">{{ member.email }}</a><br>
          {% endif %}
          {% if member.phone %}
            <i class="fa fa-phone"></i> <a href="tel:{{ member.phone }}">{{ member.phone }}</a><br>
          {% endif %}
          {% if member.twitter %}
            <i class="fa fa-twitter"></i> <a href="https://twitter.com/{{ member.twitter }}">@{{ member.twitter }}</a><br>
          {% endif %}
          {% unless member.homepage %}
            <br>
          {% endunless %}
          {% unless member.email %}
            <br>
          {% endunless %}
          {% unless member.phone %}
            <br>
          {% endunless %}
          {% unless member.twitter %}
            <br>
          {% endunless %}
        </p>
      </div>
    {% endfor %}
  </div>

<!-- <div class="row">

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="http://3d.bk.tudelft.nl/alabetski"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/anna.png" alt="Anna  Labetski photo" /></a>
    <h3>Anna  Labetski<br /><small>PhD candidate</small></h3>
    <p>
        <a href="http://3d.bk.tudelft.nl/alabetski"><i class="fa fa-home"></i></a> | <a href="mailto:a.labetski@tudelft.nl"><i class="fa fa-envelope"></i></a> | <a href="https://twitter.com/BigLabetski"><i class="fa fa-twitter"></i></a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="http://tudelft.nl/hledoux"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/hugo.jpg" alt="Hugo  Ledoux photo" /></a>
      <h3>Hugo  Ledoux<br /><small>Associate-prof.</small></h3>
      <p>
          <a href="http://tudelft.nl/hledoux"><i class="fa fa-home"></i></a> | 
          <a href="mailto:h.ledoux@tudelft.nl"><i class="fa fa-envelope"></i></a> | 
          <a href="tel:+31 15 27 86114"><i class="fa fa-phone"></i></a> | 
          <a href="https://twitter.com/hugoledoux"><i class="fa fa-twitter"></i></a><br />
      </p>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="http://3d.bk.tudelft.nl/jstoter"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/jantien.jpg" alt="Jantien  Stoter photo" /></a>
      <h3>Jantien Stoter<br /><small>Professor</small></h3>
      <p>
          <i class="fa fa-home"></i> <a href="http://3d.bk.tudelft.nl/jstoter">3d.bk.tudelft.nl/jstoter</a><br />
          <i class="fa fa-envelope"></i> <a href="mailto:j.e.stoter@tudelft.nl">j.e.stoter@tudelft.nl</a><br />
          <i class="fa fa-phone"></i> <a href="tel:+31 15 27 81664">+31 15 27 81664</a><br />
          <i class="fa fa-twitter"></i> <a href="https://twitter.com/jantienstoter">@jantienstoter</a><br />
      </p>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="http://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/ken.jpg" alt="Ken Arroyo Ohori photo" /></a>
      <h3>Ken Arroyo Ohori<br /><small>Postdoc</small></h3>
      <p>
          <i class="fa fa-home"></i> <a href="http://3d.bk.tudelft.nl/ken">3d.bk.tudelft.nl/ken</a><br />
          <i class="fa fa-envelope"></i> <a href="mailto:g.a.k.arroyoohori@tudelft.nl">g.a.k.arroyoohori@tudelft.nl</a><br />
      </p>
  </div>

  <div class="col-md-2 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
          <a href="http://3d.bk.tudelft.nl/svitalis"><img class="img-circle img-responsive" src="/img/staff/stelios.jpg" alt="Stelios Vitalis photo" /></a>
        <h3>Stelios  Vitalis<br /><small>PhD candidate</small></h3>
        <p>
            <i class="fa fa-home"></i> <a href="http://3d.bk.tudelft.nl/svitalis">3d.bk.tudelft.nl/svitalis</a><br />
            <i class="fa fa-envelope"></i> <a href="mailto:s.vitalis@tudelft.nl">s.vitalis@tudelft.nl</a><br />
            <br />
            <br />
        </p>
      </div>
</div> -->
