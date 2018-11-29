---
layout: page
title: "GeoBIM: Bridging the gap between Geo and BIM"
permalink: /projects/geobim/
---

<div class="row">
  <div class="col-sm-6 col-xs-12"><img class="img-responsive" src="{{ "volumetric.png" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Summary

Geographic information systems (GIS) have long been used to model the environment and to perform 2D spatial analyses of large areas.
However, with the increasing availability of computing power, advanced data acquisition methods, and automated workflows that generate detailed 3D data, GIS models have become increasingly detailed and started to contain models of individual buildings---the traditional domain of building information modelling (BIM).

At the same time, the increase in computing power and the availability of better software have enabled BIM methodologies to move to the mainstream, disrupting more traditional building design platforms based on 2D CAD drawings.
As users of BIM software want to incorporate the surrounding features into their workflow, it is only logical that the BIM domain is currently enhancing its standards to support environmental information such as infrastructure and that BIM users turn to existing GIS datasets containing environmental information.
Both domains are thus now overlapping, increasingly modelling the same objects, even if the data is represented and stored in rather different ways.

While the GIS and the BIM domains clearly overlap when the modelling of cities is concerned, each domain retains its own focus and has its own characteristics.
The BIM domain focuses on information about the design and construction of building sites, and thus has very detailed and semantically rich information about all the physical elements that comprise an individual building as it is designed or built.
Meanwhile, GIS describe information about the environment as captured at different points in time, thus having less detailed but regularly updated datasets covering wide regions.

Due to the overlap in the features modelled in both domains as well as their differing strengths and weaknesses, it is widely acknowledged that the integration of data from both domains is beneficial and a crucial step forward for future 3D city modelling.
This integration can avoid unnecessary efforts in redundant modelling and allow for new data flows in both directions and new applications.
In this way, more detailed BIM data can feed more general GIS data and GIS data can provide the context that is usually missing in BIM data.
By pursuing the integration of GIS and BIM data, many new possibilities appear: with contextual GIS information, BIM methodologies can be better applied to infrastructural works; more detailed 3D city models can be built by reusing BIM data; smart city concepts can perform integrated reasoning on terrain, buildings and city infrastructure; and spatial analyses can support multiple levels of detail and the complete life cycles of objects.

Yet, the disciplines of GIS and BIM are disconnected by their modelling paradigms, software tools and open standards---respectively CityGML for GIS and IFC for BIM.
Consequently, GIS and BIM datasets differ fundamentally with respect to their semantics, geometry and level of detail, and because of the different modelling approach of both, there is not one optimal nor uniform conversion between the information models.
Even as researchers and practitioners have studied how to best share information between BIM and GIS and how to address all the differences from different perspectives, it is still very hard (if not impossible) to share 3D information among different users throughout the life cycle of urban and environmental processes, i.e. from plan, design and construction to maintenance.
Moreover, most of the research so far has focused on the semantic aspects of GIS-BIM integration (e.g. mapping equivalent types), leaving the difficult task of geometric processing on the background.

In view of these integration problems, in the beginning of 2017, we started the GeoBIM project, in which we worked on an interface to process complex architectural IFC models in an automated fashion, such as performing automated tests on them and converting them to CityGML.
We created such an interface based on IfcOpenShell and CGAL, a pair of libraries respectively used to process BIM and GIS models.
The project is a collaboration of two research groups on BIM and 3D GIS (Technical universities of Eindhoven respectively Delft), the two respective national standardisation bodies (BIM Loket and Geonovum) and several users who have a high interest in closer BIM/GIS integration, i.e. Rijkswaterstaat, Kadaster and the cities of Den Haag and Rotterdam.

The results of this project are mixed.
On one hand, we found a series of errors that seem to be pervasive in IFC models and which make automated processing of complex architectural models very difficult, and since fully dealing with such errors would require automatic repair algorithms, a complete working interface could unfortunately not be developed within the timeframe of the GeoBIM project.
However, we took the opportunity to look into these errors and converted them into a set of recommended guidelines that should enable the automated processing of IFC models.

Additionally, we took a more in-depth look at the issues surrounding the georeferencing of IFC models.
Our results show that there are several tools made available in BIM software (e.g. Revit) which support the proper definition of the georeferencing information for a BIM model when exported as IFC.
We have introduced the [IfcLocator](https://github.com/tudelft3d/IfcLocator) tool, which stands as an open-source alternative to the commercial software products.
Although it is at a very early stage, the tool is already able to provide an intuitive point of view of the actual location stored in an IFC file and perform a simple change of location.

## Final reports

  1. The final report of the project, including a recommended set of IFC guidelines for automated geometric processing, is found [here](https://3d.bk.tudelft.nl/ken/files/18_geobim.pdf).
  2. The additional report that explains the issues around georeferencing IFC models is [here](https://3d.bk.tudelft.nl/pdfs/18_georeferencing.pdf).
  3. The report that studies the integration between an IFC design and the geological subsurface can be found [here](https://3d.bk.tudelft.nl/pdfs/BIM_Subsurface%20report%20Version%20June%202017.pdf). NB: The title page is Dutch; but the report is written in English.

## Open-source software

  1. [IfcOpenShell_CGAL](https://github.com/aothms/IfcOpenShell_CGAL)
  2. [IfcLocator](https://github.com/tudelft3d/IfcLocator)


## Meetings

### Launch on 2017-02-15 at the BIM Loket in Delft

<div class="row">
  <div class="col-xs-12 col-md-6">
    <script async class="speakerdeck-embed" data-id="876a2e1d5fcf4dad8f873a91b4dce644" data-ratio="1.33333333333333" src="//speakerdeck.com/assets/embed.js"></script>
  </div>
</div>

### First prototype on 2017-04-19

<div class="row">
  <div class="col-xs-12 col-md-6">
    <script async class="speakerdeck-embed" data-id="1f51a84e65cb4cdaba22edcc4381487a" data-ratio="1.33333333333333" src="//speakerdeck.com/assets/embed.js"></script>
  </div>
</div>

### Agreeing on IFC guidelines on 2017-09-05

<div class="row">
  <div class="col-xs-12 col-md-6">
    <script async class="speakerdeck-embed" data-id="3af1de4df4e4491caff247efe4af98a2" data-ratio="1.33333333333333" src="//speakerdeck.com/assets/embed.js"></script>
  </div>
</div>

- - -

## Sponsors

<div class="hidden-xs" style="display:table-cell; padding: 20px;"><a href="http://www.bimloket.nl" title="BIM Loket website"><img src="bimloket.jpg" alt="BIM Loket logo" style="max-height: 200px;"></a></div>
<div class="hidden-xs" style="display:table-cell; padding: 20px;"><a href="https://www.denhaag.nl" title="Den Haag website"><img src="denhaag.jpg" alt="Den Haag logo" style="max-height: 200px;"></a></div>
<div class="hidden-xs" style="display:table-cell; padding: 20px;"><a href="http://www.geonovum.nl" title="Geonovum website"><img src="geonovum.png" alt="Geonovum logo" style="max-height: 200px;"></a></div>
<div class="hidden-xs" style="display:table-cell; padding: 20px;"><a href="https://www.kadaster.nl" title="Kadaster website"><img src="kadaster.jpg" alt="Kadaster logo" style="max-height: 200px;"></a></div>
<div class="hidden-xs" style="display:table-cell; padding: 20px;"><a href="http://www.rijkswaterstaat.nl" title="Rijkswaterstaat website"><img src="rws.png" alt="Rijkswaterstaat logo" style="max-height: 200px;"></a></div>
<div class="hidden-xs" style="display:table-cell; padding: 20px;"><a href="http://www.rotterdam.nl" title="Rotterdam website"><img src="rotterdam.png" alt="Rotterdam logo" style="max-height: 200px;"></a></div>

<div class="row">
  <div class="visible-xs thumbnail"><a href="http://www.bimloket.nl" title="BIM Loket website"><img src="bimloket.jpg" alt="BIM Loket logo"></a></div>
  <div class="visible-xs thumbnail"><a href="https://www.denhaag.nl" title="Den Haag website"><img src="denhaag.jpg" alt="Den Haag logo"></a></div>
  <div class="visible-xs thumbnail"><a href="http://www.geonovum.nl" title="Geonovum website"><img src="geonovum.png" alt="Geonovum logo"></a></div>
  <div class="visible-xs thumbnail"><a href="https://www.kadaster.nl" title="Kadaster website"><img src="kadaster.jpg" alt="Kadaster logo"></a></div>
  <div class="visible-xs"><a href="http://www.rijkswaterstaat.nl" title="Rijkswaterstaat website"><img src="rws.png" alt="Rijkswaterstaat logo"></a></div>
  <div class="visible-xs thumbnail"><a href="http://www.rotterdam.nl" title="Rotterdam website"><img src="rotterdam.png" alt="Rotterdam logo"></a></div>
</div>

- - - 

## Team

<div class="row">

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="https://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/ken.jpg" alt="Ken Arroyo Ohori photo" /></a>
    <h3>Ken Arroyo Ohori<br /><small>Postdoc (TUD)</small></h3>
    <p>
        <i class="fas fa-home"></i> <a href="https://3d.bk.tudelft.nl/ken">3d.bk.tudelft.nl/ken</a><br />
        <i class="fas fa-envelope"></i> <a href="mailto:g.a.k.arroyoohori@tudelft.nl">g.a.k.arroyoohori@tudelft.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="https://3d.bk.tudelft.nl/adiakite"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/abdou.png" alt="Abdoulaye Diakité photo" /></a>
    <h3>Abdoulaye Diakité<br /><small>Postdoc (TUD)</small></h3>
    <p>
        <i class="fas fa-home"></i> <a href="https://3d.bk.tudelft.nl/adiakite">3d.bk.tudelft.nl/adiakite</a><br />
        <i class="fas fa-envelope"></i> <a href="mailto:a.a.diakite@tudelft.nl">a.a.diakite@tudelft.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="https://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="thomas.png" alt="Thomas Krijnen photo" /></a>
    <h3>Thomas Krijnen<br /><small>PhD candidate (TU/e)</small></h3>
    <p>
        <i class="fas fa-home"></i> <a href="http://thomaskrijnen.com">thomaskrijnen.com</a><br />
        <i class="fas fa-envelope"></i> <a href="mailto:t.f.krijnen@tue.nl">t.f.krijnen@tue.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="https://www.tudelft.nl/hledoux"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/hugo.jpg" alt="Hugo Ledoux photo" /></a>
      <h3>Hugo Ledoux<br /><small>Associate-prof. (TUD)</small></h3>
      <p>
          <i class="fas fa-home"></i> <a href="https://www.tudelft.nl/hledoux">tudelft.nl/hledoux</a><br />
          <i class="fas fa-envelope"></i> <a href="mailto:h.ledoux@tudelft.nl">h.ledoux@tudelft.nl</a><br />
          <i class="fas fa-phone"></i> <a href="tel:+31 15 27 86114">+31 15 27 86114</a><br />
          <i class="fab fa-twitter"></i> <a href="https://twitter.com/hugoledoux">@hugoledoux</a><br />
      </p>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="http://3d.bk.tudelft.nl/jstoter"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/jantien.jpg" alt="Jantien Stoter photo" /></a>
      <h3>Jantien Stoter<br /><small>Professor (TUD)</small></h3>
      <p>
          <i class="fas fa-home"></i> <a href="http://3d.bk.tudelft.nl/jstoter">3d.bk.tudelft.nl/jstoter</a><br />
          <i class="fas fa-envelope"></i> <a href="mailto:j.e.stoter@tudelft.nl">j.e.stoter@tudelft.nl</a><br />
          <i class="fas fa-phone"></i> <a href="tel:+31 15 27 81664">+31 15 27 81664</a><br />
          <i class="fab fa-twitter"></i> <a href="https://twitter.com/jantienstoter">@jantienstoter</a><br />
      </p>
  </div>

</div>
