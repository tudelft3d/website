---
layout: page
title: "SUM: A Benchmark Dataset of Semantic Urban Meshes"
permalink: /projects/meshannotation/
---

<!---<div class="row">
  <div class="col-sm-12 col-xs-12"><img class="img-responsive" src="{{ "img/meshannotation.jpg" }}"></div>
</div>--->

<div class="col-sm-12 col-xs-12">
    <center>
    <img class="img-responsive" width="80%" height="80%" src="{{ "img/mesh_overview.jpg" }}">
    </center>
    <p style="text-align: center;">Figure 1: Overview of the semantic urban mesh benchmark. Left: the textured meshes. Right: the ground truth meshes.</p>
</div>

- - -

* Table of Content
{:toc}

- - -

## Summary
<div class="row featurette">
  <div class="col-md-7">
    <p>We introduce a new benchmark dataset of semantic urban meshes which covers about 4 km<sup>2</sup> in Helsinki (Finland), with six classes: <span style="color: #CD853F"><b>Ground</b></span>, <span style="color: #00FF00"><b>Vegetation</b></span>, <span style="color: #FFE600"><b>Building</b></span>, <span style="color: #00FFFF"><b>Water</b></span>, <span style="color: #FF00FF"><b>Vehicle</b></span>, and <span style="color: #000099"><b>Boat</b></span>.</p>
    <p>We have used <a href="https://www.hel.fi/helsinki/en/administration/information/general/3d/3d">Helsinki 3D</a> textured meshes as input and annotated them as a benchmark dataset of semantic urban meshes. The Helsinki's raw dataset covers about 12 km<sup>2</sup> and was generated in 2017 from oblique aerial images that have about a 7.5 cm ground sampling distance (GSD) using an off-the-shelf commercial software namely <a href="https://www.bentley.com/en/products/brands/contextcapture">ContextCapture</a>. The entire region of Helsinki is split into tiles, and each of them covers about 250 m<sup>2</sup>. As shown in the figures below, we have selected the central region of Helsinki as the study area, which includes 64 tiles. </p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive " width="60%" height="60%" src="{{ "img/hel_map.jpg" | prepend: site.baseurl }}" alt="Generic placeholder image">
    <p style="text-align: left;">Figure 2: Selected area of Helsinki </p>
  </div>
</div>

<div class="row featurette">
    <div class="col-md-6">
    <img class="featurette-image img-responsive" src="{{ "img/texture_zoom_in.jpg" | prepend: site.baseurl }}" alt="Generic placeholder image">
    </div>
   <div class="col-md-6">
    <img class="featurette-image img-responsive" src="{{ "img/semantic_zoom_in.jpg" | prepend: site.baseurl }}" alt="Generic placeholder image">
   </div>
    <p style="text-align: center;">Figure 3: Part of our semantic urban mesh dataset. Left: The input textured mesh. Right: The mesh labelled with one of the six possible classes (unclassified regions are showed in black). </p>
</div>

## Data Download
<div class="row featurette">
  <div class="col-md-7">
    <p>We only provide the data in PLY format, and the semantic classes and colours are defined as in the table. The mesh data can be visualized in <a href="http://meshlab.sourceforge.net">MeshLab</a> and our <a href="https://github.com/tudelft3d/3D_Urban_Mesh_Annotator">3D Annotator</a>. We also provide the sampled point clouds with semantics, colours and corresponding face ids in two sampling density (refer to surface area): 30 pts/m<sup>2</sup> and  300 pts/m<sup>2</sup>. </p>
    <p><b>Download link:</b> <a href="https://3d.bk.tudelft.nl/opendata/sum/">SUM Helsinki 3D</a> </p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive" width="50%" height="50%" src="{{ "img/label_table.jpg" | prepend: site.baseurl }}" alt="Generic placeholder image">
  </div>
</div>

## Labelling Workflow
Rather than manually labelling each individual triangle face of the raw meshes, we design a semi-automatic mesh labelling framework to accelerate the labelling process. Firstly, we over-segment the input meshes into a set of planar segments. To acquire the first ground truth data, we manually annotate the mesh (with segments) that is selected with the highest feature diversity. Then, we add the first labelled mesh into the training dataset for the supervised classification. Specifically, we use the segment-based features as input for the classifier, and the output is a pre-labelled mesh dataset. We then use the mesh annotation tool to manually refine the pre-labelled mesh according to feature diversity. In addition, the new refined mesh will be added to the training dataset in order to improve the automatic classification accuracy incrementally.

<div class="col-md-12">
    <img class="featurette-image img-responsive" width="80%" height="80%" src="{{ "img/labeling_workflow.jpg" | prepend: site.baseurl }}" alt="Generic placeholder image">
    <p style="text-align: center;">Figure 4: The pipeline of the labelling workflow</p>
</div>


Following the proposed framework, a total of 19,080,325 triangle faces have been labelled, which took around **400** working hours. Compared with a triangle-based manual approach, we estimate that our framework saved us more than **600** hours of manual labour.

## Comparison of Existing 3D Urban Benchmark Datasets
Urban datasets can be captured with different sensors and be reconstructed with different methods, and the resulting datasets will have different properties. The input of the semantic labelling process can be raw or pre-processed urban datasets such as the pre-labelled results of semantic segmentation. Regardless of the input data, it still needs to be manually checked and annotated with a labelling tool, which involves selecting a correct semantic label from a predefined list for each triangle (or point, depending on the dataset) by users. In addition, some interactive approaches can make the labelling process semi-manual. However, unlike our proposed approach, the labelling work of most of 3D benchmark data does not take full advantage of pre-processing steps like over-segmentation and semantic segmentation on 3D data, and interactive annotation in the 3D space.  
 
<div class="col-md-12">
    <img class="featurette-image img-responsive" width="80%" height="80%" src="{{ "img/table_benchmarks.png" | prepend: site.baseurl }}" alt="Generic placeholder image">
    <p style="text-align: center;">Table 1: Comparison of existing 3D urban benchmark datasets.</p>
</div>

## Data Split
To perform the semantic segmentation task, we randomly select 40 tiles from the annotated 64 tiles of Helsinki as training data, 12 tiles as test data, and 12 tiles as validation data. For each of the six semantic categories, we compute the total area in the training and test dataset to show the class distribution.

<div class="col-md-12">
    <img class="featurette-image img-responsive" width="80%" height="80%"  src="{{ "img/data_split.jpg" | prepend: site.baseurl }}" alt="Generic placeholder image">
    <p style="text-align: center;">Figure 5: Overview of the data used in our experiment. Left: The distribution of the training, test, and validation dataset. Right: Semantic categories of training (including validation data) and test dataset.</p>
</div>

## Evaluation
We sample the mesh into coloured point clouds with a density of about 30 pts/m<sup>2</sup> as input for the competing deep learning methods. To evaluate and compare with the current state-of-the-art 3D deep learning methods that can be applied to large-scale urban dataset, we select five representative approaches ([PointNet](http://openaccess.thecvf.com/content_cvpr_2017/papers/Qi_PointNet_Deep_Learning_CVPR_2017_paper.pdf), [PointNet++](https://ai.berkeley.edu/~ee290t/fa18/readings/point-net++-guibas.pdf), [SPG](http://openaccess.thecvf.com/content_cvpr_2018/papers/Landrieu_Large-Scale_Point_Cloud_CVPR_2018_paper.pdf), [KPConv](https://openaccess.thecvf.com/content_ICCV_2019/papers/Thomas_KPConv_Flexible_and_Deformable_Convolution_for_Point_Clouds_ICCV_2019_paper.pdf), and [RandLA-Net](http://openaccess.thecvf.com/content_CVPR_2020/papers/Hu_RandLA-Net_Efficient_Semantic_Segmentation_of_Large-Scale_Point_Clouds_CVPR_2020_paper.pdf)), and we perform the experiment on an NVIDIA GEFORCE GTX 1080Ti GPU. In addition, we also compare with the [joint RF-MRF](https://www.sciencedirect.com/science/article/pii/S0924271616301812?casa_token=dFyuttETI9gAAAAA:lRmrFeYuGZisXbi9WAKuTL9FS_H0XZQmgzPIgB9FZ395rRxOqHWMQas2AqzXn6Pcp8n7gHdaA9k), which is the only method that directly takes the mesh as input and without using GPU for computation. The hyper-parameters of all the competing methods are tuned to achieve the best results we could acquire. We achieve about **93.0%** overall accuracy and **66.2%** mIoU. Specifically, our approach outperforms RF-MRF with a margin of about 5.3% mIoU, and other deep learning methods from 0.7% to 28.1% mIoU.

<div class="col-md-12">
  <center>
    <img class="featurette-image img-responsive" src="{{ "img/table_comparision.png" | prepend: site.baseurl }}" alt="Generic placeholder image">
  </center>
<p style="text-align: center;">Table 2: Comparison of various semantic segmentation methods on the new benchmark dataset. The results reported in this table are per-class IoU (%), mean IoU (mIoU, %), Overall Accuracy (OA, %), mean class Accuracy (mAcc, %), mean F1 score (mF1, %), and the running times for training and testing (minutes). The running times of RF-MRF and the baseline (ours) methods also include feature computation. </p>
</div>

<div class="row featurette">
  <div class="col-md-5">
    <p>We also evaluated the performance of semantic segmentation with different amounts of input training data on our baseline approach and <a href="https://openaccess.thecvf.com/content_ICCV_2019/papers/Thomas_KPConv_Flexible_and_Deformable_Convolution_for_Point_Clouds_ICCV_2019_paper.pdf">KPConv</a> with the intention of understanding the required amount of data to obtain decent results. We found that we only need about 7% of the training dataset (which covers about 0.23 km<sub>2</sub>) to achieve the acceptable and robust results compared to 33% (which covers about 1.0km<sub>2</sub>) for KPConv. </p>
  </div>
  <div class="col-md-7">
    <img class="featurette-image img-responsive" width="70%" height="70%" src="{{ "img/train_increase.jpg" | prepend: site.baseurl }}" alt="Generic placeholder image">
    <p style="text-align: left;">Figure 6: Effect of the amount of input training data on the performance of our baseline method and KPConv.</p>
  </div>
</div>

## Video Demo
<iframe src="https://player.vimeo.com/video/518579204" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>

<iframe src="https://player.vimeo.com/video/518669528" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>

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

## Funding

<div class="row">
<div style="padding:5px" class="col-md-4 col-sm-4 col-xs-8"><a href="http://www.eurosdr.net/" title="RWS website"><img src="/img/partners/eurosdr.jpg" alt="EuroSDR logo" ></a></div>
<div style="padding:5px" class="col-md-4 col-sm-4 col-xs-8"><a href="https://www.cyclomedia.com/" title="RIVM website"><img src="/img/partners/cmt.png" alt="CMT logo" ></a></div>
</div>

This project has received funding from [EuroSDR](http://www.eurosdr.net/) and support from [CycloMedia](http://www.cyclomedia.com).

- - - 

## Team

<div class="row">
    {% include project_team.html project_name='meshannotation' %} 
</div>

## Student Helper

**Ziqian Ni**, assists in software development, from 2019-07 to 2019-09. <br> 
**Mels Smit**, assists in mesh annotation, from 2020-07 to 2020-09. <br>
**Charalampos Chatzidiakos**, assists in mesh annotation, from 2020-07 to 2020-09. <br>

