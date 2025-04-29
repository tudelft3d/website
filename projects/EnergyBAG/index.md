---
layout: page
title: Enhanching energy applications through semantic 3D city models and open data
permalink: /projects/EnergyBAG/
---

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/3DRijssen_GnRd.png" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -
## Summary

Urban Building Energy Modelling (UBEM) refers to the techniques, methods and software tools used to simulate the energy performance of buildings at several scales of analysis. However, UBEM is heavily dependent on detailed, high-quality data—a challenge compounded by the limited availability and fragmentation of open data sources. In our research, we use semantic 3D city models (s3DCMs) and open data to enhance urban energy applications using as case of study The Netherlands.

<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{"img/UBEM_overview.png"}}"></div>
</div>

Our research is split into two main elements: first, the creation of the corresponding dataset that aggregate the multiple open datasets into a s3DCM enriched with energy-related data. Second, the creation of in house software tools to perform energy simulations such as solar analysis and energy performance of buildings.

- - -
## Output

### CityGML-based 3D city model testbed for energy-related applications
This repository contains a open testbed for energy applications based on the CityGML v2.0 standard. The study area is located in the municipality of Rijssen-Holten (circa 38.000 inhabitants, corresponding to circa 23.000 buildings) located in the eastern part of The Netherlands.

Publication: <a href="https://isprs-archives.copernicus.org/articles/XLVIII-4-W5-2022/97/2022/">pdf</a> <br>
Repository: <a href="https://github.com/tudelft3d/Testbed4UBEM"> Testbed4UBEM</a>

### Solar simulations based on s3DCM
Based on the work of MSc in Geomatics Longxiang Xu, we have perform analyses in the use of s3DCMs for solar energy.
<div class="row">
  <div class="col-sm-8 col-xs-8"><img class="img-responsive" src="{{ "img/delft_result_1.png" }}"></div>
</div>
<br>

Shadowing calculations: <a href="https://link.springer.com/chapter/10.1007/978-3-031-43699-4_2">publication</a> <br>
Solar irradiance analysis: <a href="https://isprs-archives.copernicus.org/articles/XLVIII-4-W11-2024/167/2024/">publication</a> <br>
- - -

## Team

<div class="row">

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="https://3d.bk.tudelft.nl/cleon"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/camilo.jpg" alt="Camilo León-Sánchez photo" /></a>
    <h3>Camilo León-Sánchez<br /><small>PostDoc (TUD)</small></h3>
    <p>
        <a href="https://3d.bk.tudelft.nl/cleon"><i class="fas fa-home"></i></a>
        <a href="mailto:c.a.leonsanchez@tudelft.nl"><i class="fas fa-envelope"></i></a><br />
    </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="https://3d.bk.tudelft.nl/gagugiaro"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/giorgio.jpg" alt="Giorgio Agugiaro photo" /></a>
    <h3>Giorgio Agugiaro<br /><small>Assistant Professor (TUD)</small></h3>
    <p>
        <a href="https://3d.bk.tudelft.nl/gagugiaro"><i class="fas fa-home"></i></a>
        <a href="mailto:g.agugiaro@tudelft.nl"><i class="fas fa-envelope"></i></a><br />
    </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-6">
        <a href="http://3d.bk.tudelft.nl/jstoter"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/jantien.jpg" alt="Jantien Stoter photo" /></a>
      <h3>Jantien Stoter<br /><small>Professor (TUD)</small></h3>
      <p>
          <a href="http://3d.bk.tudelft.nl/jstoter"><i class="fas fa-home"></i></a>
          <a href="mailto:j.e.stoter@tudelft.nl"><i class="fas fa-envelope"></i></a><br />
      </p>
  </div>


</div>  
  
