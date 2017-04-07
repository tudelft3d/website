---
layout: page
title: "GeoBIM: Bridging the gap between Geo and BIM"
permalink: /projects/geobim/
---

<div class="row">
  <div class="col-sm-6 col-xs-6"><img class="img-responsive" src="{{ "shadow.jpg" }}"></div>
  <div class="col-sm-6 col-xs-6"><img class="img-responsive" src="{{ "height.jpg" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Summary

This project, in which the main stakeholders in the field collaborate, will develop an interface between CityGML and IFC to prepare for a fundamental solution to bridge the gap between Geo and BIM. The project will show with two use cases how integration between Geo and BIM can be realised: what works and what does not; what is a feasible direction to support both domains; and, what (technical and standardisation) agreements are required to bridge the BIM/Geo gap. Involvement with relevant stakeholders will assure that the project will be anchored within the national and international standardisation initiatives.

## Introduction

In both the Geographic Information (Geo) and Building Information Modelling (BIM) domains, it is widely acknowledged that the integration of data from both domains is beneficial and a crucial step forwards for future 3D city modelling as well as for facing the multi-disciplinary challenges of our built environment. BIM data (i.e. detailed data about design and construction) can feed Geo data (i.e. more general data useful for region-scale spatial analyses) and Geo data can serve as a reference for BIM data. In fact, in many domains, 3D models are already a widespread technology (e.g. water, noise, air quality, energy, building & construction). But it is still very hard to share 3D information among different users throughout the lifecycle of urban and environmental processes (from plan, design and construction to maintenance). The proposed project aims at developing a fundamental solution to integrate models of single buildings and construction sites (BIM) with models of complete urban areas (Geo). The solution will be developed alongside two use cases.

**Use case 1**: The process of submitting an IFC model to a building permit-application portal by citizens and companies; checking the IFC design against the existing physical world (represented in a 3D city model) and against a 3D zoning plan; and finally updating the 3D city model by integrating the 3D building model.

**Use case 2**: The process of supporting the life-cycle of objects with a continuous information chain: using information about complete urban areas in the design process (i.e. using geo-information in a BIM application) and, at a later stage, converting plan, design and construction data to maintenance data. The focus of this second use case is on large infrastructure projects.

For the BIM/Geo data interface, this project will focus on the two most prominent standards in the domains. These are Industry Foundation Classes (IFC) building models, which contain the physical elements of single constructions in great detail, and CityGML models, which can represent entire cities in a simpler format that is usable for exchange, dissemination and spatial analyses, such as solar potential and wind simulations. The two modelling paradigms embodied by IFC and CityGML are good use cases of BIM and Geo data, and they are still broadly incompatible as they originally targeted different groups of people and now they cannot be used in the same tools (Figure 1).

## Previous work

Many researchers and practitioners have studied how to best share information between BIM and Geo, including models that combine both approaches, the generalisation of detailed BIM data, adding detail into Geo 3D datasets, and the creation of converters between IFC and CityGML. The ambitions are getting bigger now the that two domains are increasingly intersecting: BIM methodologies are applied to infrastructural works; city models are getting more detailed; Smart City concepts ask for an integrated reasoning on our city infrastructure; and objectives towards sustainability urge for an approach on multiple levels of detail. Yet, these disciplines are disconnected by their modelling paradigms and software tools, which differ fundamentally with respect to their semantics, geometry and level of detail. Until now solutions on integration were unsuccessful since it is very complex to address all these differences.

## The proposed solution

This project will start with building an interface between data from the two domains, applying it to the two use cases mentioned above, and formulating recommendations for developments of techniques and standardisation for further integration. There are two aspects that we see as extremely important for a successful integration as well for obtaining thorough understanding on required future steps: 1) a close collaboration between data-experts from both domains and 2) involvements of users and use cases to assure that the development is more than an academic or theoretical standardisation exercise. Both will be organised in this project.

## Deliverables

The two main deliverables will be a CityGML/IFC interface and an agreed and supported plan for follow up.

## CityGML/IFC interface

The CityGML/IFC interface will be an open source library/API that can read and write both IFC and CityGML, integrate multiple models into one, and can then perform operations (e.g. Boolean operations such as union or intersection) to manipulate and analyse the models. It will 
cover the most important geometric and semantic classes of IFC and CityGML. The focus will be on the geometry, and specifically on boundary representation models, all of which will be completely supported. Other geometry types, such as Constructive Solid Geometry and Sweeps will be supported if time allows. We do not aim for a complete implementation of all of the semantic classes in IFC or CityGML.

A prototype implementation of the library will be developed within the framework of this project. We have already studied and experimented with many open source software and libraries and selected CGAL Nef Polyhedra as a promising base. It is a very powerful and robust geometry engine that is also free and open source but does not currently support any BIM or Geo standard. The software will be developed under an open source model, where the source code of the software is published in a public repository and provided for the use of others. Testing will be done using real-world data within the context of the two mentioned use cases. Communication about the IFC/CityGML interface development will be handled according to an open source model: documenting the development and testing the process, disseminating it through blog posts and websites, and communicating directly with the users of the use cases.

## Agreed and supported plan for follow up

Parallel to the development of the interface, the project will deliver recommendations on how standards, technologies and organisations should make further steps to facilitate further BIM/ Geo integration. These will be based on the insights obtained from the use cases and the developed CityGML/IFC interface. The recommendations will also cover defining stricter modelling guidelines for both IFC and CityGML, which makes a better integration and re-use of CityGML data in BIM domain and vice versa possible.

## The collaboration

As argued above, successful solution to bridge the prevailing gap between Geo and BIM requires a close collaboration between experts and organisations from both domains. The developers form the core of the project. They will develop the CityGML/IFC interface and are BIM-data researchers from TU Eindhoven and Geo-data researchers from TU Delft, completed with developers from the partner organisations. The developers have ample experiences in developing and maintaining open source software solutions in these fields.  See [3d.bk.tudelft.nl/code/](https://3d.bk.tudelft.nl/code/) and [ifcopenshell.org](http://www.ifcopenshell.org). Besides the developers, an advisory board will be established to define and provide the requirements for the use cases, to organise the use cases and to reflect on (intermediate) results. The advisory board is also important to provide input and confirm the recommendations for follow up. The follow-up plan will be a collaborative work of the advisory board.
The participants, and the research groups and organisations they belong to, are actively involved in national and international standardisation organisations related to CityGML and IFC, and we thus expect that the results will lead to an improvement of the standards.

## Planning

The project will start with a kick off with the stakeholders in January 2017. After that, a fast software development process will be applied to provide a preliminary prototype by April and a final prototype by Sept/Oct 2017. The developers will start by defining the programming interface in accordance with stakeholder demands (as collected in the kick off), with a unified and interoperable geometric interpretation of the elements in IFC and CityGML by the preliminary prototype. Two workshops on intermediate results will validate the results with the stakeholders.  More complete coverage of both schemas will be present in the final prototype. Parallel to the development of the IFC/CityGML interface, the use cases will be run by the partner organisations. Requirements on further developments of technologies and standards will continuously be collected and reported back to the advisory board.

## Meetings

### Launch on 2017-02-15 at the BIM Loket in Delft

<div class="row">
  <div class="col-xs-12 col-md-6">
    <script async class="speakerdeck-embed" data-id="876a2e1d5fcf4dad8f873a91b4dce644" data-ratio="1.33333333333333" src="//speakerdeck.com/assets/embed.js"></script>
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

  <div class="col-md-3 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="https://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/ken.jpg" alt="Ken Arroyo Ohori photo" /></a>
    <h3>Ken Arroyo Ohori<br /><small>Postdoc (TUD)</small></h3>
    <p>
        <i class="fa fa-home"></i> <a href="https://3d.bk.tudelft.nl/ken">3d.bk.tudelft.nl/ken</a><br />
        <i class="fa fa-envelope"></i> <a href="mailto:g.a.k.arroyoohori@tudelft.nl">g.a.k.arroyoohori@tudelft.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-3 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="https://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="jakob.jpg" alt="Jakob Beetz photo" /></a>
    <h3>Jakob Beetz<br /><small>Assistant-prof. (TU/e)</small></h3>
    <p>
        <i class="fa fa-home"></i> <a href="http://www.tue.nl/staff/j.beetz">tue.nl/staff/j.beetz</a><br />
        <i class="fa fa-envelope"></i> <a href="mailto:j.beetz@tue.nl">j.beetz@tue.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-3 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      <a href="https://3d.bk.tudelft.nl/ken"><img class="img-circle img-responsive" src="thomas.png" alt="Thomas Krijnen photo" /></a>
    <h3>Thomas Krijnen<br /><small>PhD candidate (TU/e)</small></h3>
    <p>
        <i class="fa fa-home"></i> <a href="http://thomaskrijnen.com">thomaskrijnen.com</a><br />
        <i class="fa fa-envelope"></i> <a href="mailto:t.f.krijnen@tue.nl">t.f.krijnen@tue.nl</a><br />
        <br />
        <br />
    </p>
  </div>

  <div class="col-md-3 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="https://www.tudelft.nl/hledoux"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/hugo.jpg" alt="Hugo Ledoux photo" /></a>
      <h3>Hugo Ledoux<br /><small>Associate-prof. (TUD)</small></h3>
      <p>
          <i class="fa fa-home"></i> <a href="https://www.tudelft.nl/hledoux">tudelft.nl/hledoux</a><br />
          <i class="fa fa-envelope"></i> <a href="mailto:h.ledoux@tudelft.nl">h.ledoux@tudelft.nl</a><br />
          <i class="fa fa-phone"></i> <a href="tel:+31 15 27 86114">+31 15 27 86114</a><br />
          <i class="fa fa-twitter"></i> <a href="https://twitter.com/hugoledoux">@hugoledoux</a><br />
      </p>
  </div>

  <div class="col-md-3 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
        <a href="http://3d.bk.tudelft.nl/jstoter"><img class="img-circle img-responsive" src="{{ site.baseurl }}/img/staff/jantien.jpg" alt="Jantien Stoter photo" /></a>
      <h3>Jantien Stoter<br /><small>Professor (TUD)</small></h3>
      <p>
          <i class="fa fa-home"></i> <a href="http://3d.bk.tudelft.nl/jstoter">3d.bk.tudelft.nl/jstoter</a><br />
          <i class="fa fa-envelope"></i> <a href="mailto:j.e.stoter@tudelft.nl">j.e.stoter@tudelft.nl</a><br />
          <i class="fa fa-phone"></i> <a href="tel:+31 15 27 81664">+31 15 27 81664</a><br />
          <i class="fa fa-twitter"></i> <a href="https://twitter.com/jantienstoter">@jantienstoter</a><br />
      </p>
  </div>

</div>
