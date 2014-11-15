---
layout: homepage
title: Jantien Stoter
permalink: /jstoter/
---


<div class="row">
  <div class="col-md-3">
    <img class="img-circle img-responsive" src="{{ "/img/staff/jantien.jpg" | prepend: site.baseurl }}"/>
  </div>
  <div class="col-md-6">
    <h3>Professor 3D geoinformation</h3>
    <p>My research is bla bla bla... Bacon ipsum dolour sit amet porchetta beef turkey, bacon turducken boudin hamburger venison ball tip. Brisket pork loin bresaola short loin ground round leberkas pastrami tongue jerky cow turducken beef ribs. Pork ribeye landjaeger prosciutto pig venison tenderloin. Swine beef ribs kielbasa, porchetta tenderloin salami venison pork belly tail.</p>
  </div>
  <div class="col-md-3">
    {% for i in site.data.staff %}
      {% if i.name == 'Jantien Stoter' %}
        {% if i.email %}
          <i class="fa fa-envelope"></i> <a href="mailto:{{ i.email }}">{{ i.email }}</a><br>
        {% endif %}
        {% if i.phone %}
          <i class="fa fa-phone"></i> <a href="tel:{{ i.phone }}">{{ i.phone }}</a><br>
        {% endif %}
        {% if i.twitter %}
          <i class="fa fa-twitter"></i> <a href="https://twitter.com/{{ i.twitter }}">@{{ i.twitter }}</a><br>
        {% endif %}        
    <i class="fa fa-map-marker fa-fw">     </i> Room {{ i.room }} (building #8) <br>
    <i class="fa fa-map-marker fa-fw fade"></i> Faculty of Architecture <br>
    <i class="fa fa-map-marker fa-fw fade"></i> and the Built Environment<br>
    <i class="fa fa-map-marker fa-fw fade"></i> Delft University of Technology <br>
    <i class="fa fa-map-marker fa-fw fade"></i> Julianalaan 134 <br>
    <i class="fa fa-map-marker fa-fw fade"></i> Delft 2628BL<br>
    <i class="fa fa-map-marker fa-fw fade"></i> the Netherlands <br>
    <i class="fa fa-map-marker fa-fw fade"></i> <a href="http://www.tudelft.nl/en/about-tu-delft/contact-and-accessibility/housing-tu-delft/accessibility/building-8/">How to get here</a>
      {% endif %}
    {% endfor %}
  </div>
</div>

---

## Publications


