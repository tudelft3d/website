---
layout: post
title:  New paper about a novel method for edge-matching
categories: news
date: 2017-01-05 11:09
---

We published a new paper:

<div class="filteredelement"><strong>Solving the horizontal conflation problem with a constrained Delaunay triangulation</strong>. Hugo Ledoux and Ken Arroyo Ohori. <em>Journal of Geographical Systems</em> 19(1), 2017, pp. 21&ndash;42. <br /> <a href="https://3d.bk.tudelft.nl/hledoux/pdfs/17_jgsy_em.pdf"><i class="fas fa-file-pdf"></i> PDF</a> <a href="http://dx.doi.org/10.1007/s10109-016-0237-7"><i class="fas fa-external-link-alt"></i> DOI</a> <a href="#bib17_jgsy_em" data-toggle="collapse"><i class="far fa-caret-square-down"></i> BibTeX</a><div id="bib17_jgsy_em" class="collapse" tabindex="-1"><pre class="bibtex">@article{17_jgsy_em,
  author = {Ledoux, Hugo and Arroyo Ohori, Ken},
  journal = {Journal of Geographical Systems},
  number = {1},
  pages = {21--42},
  title = {Solving the horizontal conflation problem with a constrained {D}elaunay triangulation},
  year = {2017}
}</pre></div></div>

<br>

We propose an alternative method to performing horizontal conflation, almost known as edge-matching.
'Traditional' methods snap vertices based on a user-defined threshold, but, as we argue in the paper, this leads to invalid geometries, is error-prone, and leaves several discrepancies along the boundaries.
Our method is based on a constrained Delaunay triangulation to identify and eliminate the discrepancies, and the alignment is performed without moving vertices with a snapping operator.
This allows us to *guarantee* that the datasets have been properly conflated and that the polygons are geometrically valid.

Our implementation is based on the stable and fast triangulator in CGAL, and has been tested with several real-world datasets.
It is available as one option in our software [pprepair](https://github.com/tudelft3d/pprepair).



<img src="{{ site.baseurl }}/img/2017/em-cover.png"/><br/><br/>
<img src="{{ site.baseurl }}/img/2017/em-examples.png"/><br/><br/>
