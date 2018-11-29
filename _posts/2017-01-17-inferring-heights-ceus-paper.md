---
layout: post
title:  Generating 3D city models without elevation data
categories: news
date: 2017-01-17 15:50
---

We published a new paper:

<div class="filteredelement"><strong>Generating 3D city models without elevation data</strong>. Filip Biljecki, Hugo Ledoux, and Jantien Stoter. <em>Computers, Environment and Urban Systems</em> 64, 2017, pp. 1&ndash;18. <br /> <a href="http://filip.biljecki.com/publications/2017_ceus_inferring_heights.pdf"><i class="fas fa-file-pdf"></i> PDF</a> <a href="http://dx.doi.org/10.1016/j.compenvurbsys.2017.01.001"><i class="fas fa-external-link-alt"></i> DOI</a> <a href="#bib2017_ceus_inferring_heights" data-toggle="collapse"><i class="fas fa-caret-square-down"></i> BibTeX</a><div id="bib2017_ceus_inferring_heights" class="collapse" tabindex="-1"><pre class="bibtex">@article{2017_ceus_inferring_heights,
  author = {Biljecki, Filip and Ledoux, Hugo and Stoter, Jantien},
  journal = {Computers, Environment and Urban Systems},
  vol = {64},
  pages = {1--18},
  title = {Generating 3D city models without elevation data},
  year = {2017},
  doi = {10.1016/j.compenvurbsys.2017.01.001}
}</pre></div></div>

<br>

Elevation datasets (e.g. point clouds) are an essential but often unavailable ingredient for the construction of 3D city models. We investigate in this paper to what extent can 3D city models be generated solely from 2D data without elevation measurements. We show that it is possible to predict the height of buildings from 2D data (their footprints and attributes available in volunteered geoinformation and cadastre), and then extrude their footprints to obtain 3D models suitable for a multitude of applications. The predictions have been carried out with machine learning techniques (random forests) using 10 different attributes and their combinations, which mirror different scenarios of completeness of real-world data. Some of the scenarios resulted in surprisingly good performance (given the circumstances): we have achieved a mean absolute error of 0.8m in the inferred heights, which satisfies the accuracy recommendations of CityGML for LOD1 models and the needs of several GIS analyses. We show that our method can be used in practice to generate 3D city models where there are no elevation data: the following image shows a 3D city model of Rotterdam constructed using 2D data, predicting the height of each building from the footprint.

<img src="{{ site.baseurl }}/img/2017/ceus-generating2.png"/><br/><br/>


The method can also be used to supplement existing datasets with 3D models of newly constructed buildings to facilitate rapid update and maintenance of data.<br/><br/>

The paper is available at the <a href="http://dx.doi.org/10.1016/j.compenvurbsys.2017.01.001">journal</a>, while a free version (author's draft) can be found <a href="http://filip.biljecki.com/publications/2017_ceus_inferring_heights.pdf">here</a>.<br/><br/>

<a href="http://dx.doi.org/10.1016/j.compenvurbsys.2017.01.001"><img src="{{ site.baseurl }}/img/2017/ceus-generating1.png"/></a>