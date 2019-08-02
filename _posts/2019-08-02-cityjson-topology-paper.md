---
layout: post
title:  "Paper about incorporating a topological data structure in CityJSON published."
categories: news
date: 2019-08-02 12:40
---

A new paper has been published:

<div class="filteredelement"><strong> Incorporating Topological Representation in 3D City Models </strong>. Stelios Vitalis, Ken Arroyo Ohori, and Jantien Stoter.<em> ISPRS Int. J. Geo-Inf.</em>. 2019, 8, 347. <br/><a href="https://doi.org/10.3390/ijgi8080347"><i class="fas fa-external-link-alt"></i> DOI</a> <a href="#myref" data-toggle="collapse"><i class="fas fa-caret-square-down"></i> BibTeX</a> <div id="myref" class="collapse" tabindex="-1"><pre class="bibtex">@Article{ijgi8080347,
AUTHOR = {Vitalis, Stelios and Ohori, Ken Arroyo and Stoter, Jantien},
TITLE = {Incorporating Topological Representation in 3D City Models},
JOURNAL = {ISPRS International Journal of Geo-Information},
VOLUME = {8},
YEAR = {2019},
NUMBER = {8},
ARTICLE-NUMBER = {347},
URL = {https://www.mdpi.com/2220-9964/8/8/347},
ISSN = {2220-9964},
ABSTRACT = {3D city models are being extensively used in applications such as evacuation scenarios and energy consumption estimation. The main standard for 3D city models is the CityGML data model which can be encoded through the CityJSON data format. CityGML and CityJSON use polygonal modelling in order to represent geometries. True topological data structures have proven to be more computationally efficient for geometric analysis compared to polygonal modelling. In a previous study, we have introduced a method to topologically reconstruct CityGML models while maintaining the semantic information of the dataset, based solely on the combinatorial map (C-Map) data structure. As a result of the limitations of C-Map&rsquo;s semantic representation mechanism, the resulting datasets could suffer either from semantic information loss or the redundant repetition of them. In this article, we propose a solution for a more efficient representation of geometry, topology and semantics by incorporating the C-Map data structure into the CityGML data model and implementing a CityJSON extension to encode the C-Map data. In addition, we provide an algorithm for the topological reconstruction of CityJSON datasets to append them according to this extension. Finally, we apply our methodology to three open datasets in order to validate our approach when applied to real-world data. Our results show that the proposed CityJSON extension can represent all geometric information of a city model in a lossless way, providing additional topological information for the objects of the model.},
DOI = {10.3390/ijgi8080347}
}
</pre></div></div>

<br>

The article proposes a true topological representation for the geometric data of a 3D city model, through Combinatorial Maps, and describes a CityJSON extensions that enables those topological information to be stored in a CityJSON file.

<a href="https://doi.org/10.3390/ijgi8080347"><img src="{{ site.baseurl }}/img/2019/cityjon-topology-paper.png"/></a><br/>
