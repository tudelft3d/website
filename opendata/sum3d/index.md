---
layout: page
title: Semantic Urban Meshes in Helsinki (Finland)
permalink: /opendata/sum3d/
---

The benchmark dataset of semantic urban meshes covers about 4 km<sup>2</sup> in Helsinki (Finland), with six classes. The entire region is split into 64 tiles, and each of them covers about 250 m<sup>2</sup>. We provide the data in PLY format, and the semantic classes and colours are defined as follows:

| Labels | Semantics    |    RGB       |
| :-----:| :----------: | :----------:|
| -1     | unclassified | 0  , 0  , 0  |
| 1      | ground       | 170, 85 , 0  |
| 2      | vegetation   | 0  , 255, 0  |
| 3      | building     | 255, 255, 0  |
| 4      | water        | 0  , 255, 255|
| 5      | car          | 255, 0  , 255|
| 6      | boat         | 0  , 0  , 153|

To perform the semantic segmentation task, we randomly select 40 tiles from the annotated 64 tiles of Helsinki as training data, 12 tiles as test data, and 12 tiles as validation data.
The mesh data can be visualized in [MeshLab](http://meshlab.sourceforge.net) and our [3D Annotator](https://github.com/tudelft3d/3D_Urban_Mesh_Annotator). We also provide the sampled point clouds from all the meshes with semantics and colours in two sampling density (refer to surface area): 30 pts/m<sup>2</sup> and  300 pts/m<sup>2</sup>. 

---
## Download:
https://3d.bk.tudelft.nl/opendata/sum/

## Citation
If you use SUM-Helsinki in a scientific work, we kindly ask you to cite it:

<div class="filteredelement"><strong> SUM: A Benchmark Dataset of Semantic Urban Meshes </strong>. Weixiao Gao, Liangliang Nan, Bas Boom and Hugo Ledoux<em> arXiv preprint arXiv:2103.00355</em>. 2021 <br/><a href="https://arxiv.org/abs/2103.00355"><i class="fas fa-external-link-alt"></i> PDF</a> <a href="#myref" data-toggle="collapse"><i class="fas fa-caret-square-down"></i> BibTeX</a> <div id="myref" class="collapse" tabindex="-1"><pre class="bibtex">@misc{sum2021,
author = {Weixiao Gao and Liangliang Nan and Bas Boom and Hugo Ledoux},
title = {SUM: A Benchmark Dataset of Semantic Urban Meshes},
year={2021},
eprint={2103.00355},
archivePrefix={arXiv},
}
</pre></div></div>