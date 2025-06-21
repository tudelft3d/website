---
layout: post
title: SUM Parts Accepted at CVPR 2025
categories: news
date: 2025-06-22 10:00
---

Our new paper on urban mesh segmentation has been accepted at CVPR 2025:

<div class="filteredelement"><strong> SUM Parts: Benchmarking Part-Level Semantic Segmentation of Urban Meshes </strong>. Weixiao Gao, Liangliang Nan, and Hugo Ledoux. <em> IEEE/CVF Conference on Computer Vision and Pattern Recognition (CVPR)</em>, 2025.<br/>
<a href="https://openaccess.thecvf.com/content/CVPR2025/html/Gao_SUM_Parts_Benchmarking_Part-Level_Semantic_Segmentation_of_Urban_Meshes_CVPR_2025_paper.html"><i class="fas fa-external-link-alt"></i> PDF</a>
<a href="#sum-parts-ref" data-toggle="collapse"><i class="fas fa-caret-square-down"></i> BibTeX</a> 
<div id="sum-parts-ref" class="collapse" tabindex="-1"><pre class="bibtex">@            @InProceedings{Gao_2025_CVPR,
            author    = {Gao, Weixiao and Nan, Liangliang and Ledoux, Hugo},
            title     = {SUM Parts: Benchmarking Part-Level Semantic Segmentation of Urban Meshes},
            booktitle = {Proceedings of the Computer Vision and Pattern Recognition Conference (CVPR)},
            month     = {June},
            year      = {2025},
            pages     = {24474-24484}
            }
}
</pre></div></div>

### Research Highlights
[Dr. Weixiao Gao](https://3d.bk.tudelft.nl/weixiao/) presented this work at CVPR 2025 in Nashville, showcasing our three key contributions:

1. **First large-scale benchmark**: 2.5km² urban textured meshes with part-level semantic labels across 21 object classes
2. **Novel annotation framework**: Unified tool for efficient labeling of mesh faces and textures
3. **Comprehensive analysis**: Benchmarking of 3D semantic segmentation methods on urban objects

<a href="https://tudelft3d.github.io/SUMParts/">
  <img src="{{ site.baseurl }}/img/2025/sumparts_overview.png" width="800px" alt="SUM Parts Dataset Visualization"/>
</a>

<p style="text-align: justify;">
From left to right: textured mesh, face-based and texture-based annotations. Classes include unclassified
<img src="{{ site.baseurl }}/img/2025/icons/unclassified.png" alt="unclassified" style="height:0.8em; vertical-align:middle">,
terrain
<img src="{{ site.baseurl }}/img/2025/icons/terrain.png" alt="terrain" style="height:0.8em; vertical-align:middle">,
high vegetation
<img src="{{ site.baseurl }}/img/2025/icons/high_vegetation.png" alt="high vegetation" style="height:0.8em; vertical-align:middle">,
water
<img src="{{ site.baseurl }}/img/2025/icons/water.png" alt="water" style="height:0.8em; vertical-align:middle">,
car
<img src="{{ site.baseurl }}/img/2025/icons/car.png" alt="car" style="height:0.8em; vertical-align:middle">,
boat
<img src="{{ site.baseurl }}/img/2025/icons/boat.png" alt="boat" style="height:0.8em; vertical-align:middle">,
wall
<img src="{{ site.baseurl }}/img/2025/icons/wall.png" alt="wall" style="height:0.8em; vertical-align:middle">,
roof surface
<img src="{{ site.baseurl }}/img/2025/icons/roof_surface.png" alt="roof surface" style="height:0.8em; vertical-align:middle">,
facade surface
<img src="{{ site.baseurl }}/img/2025/icons/facade_surface.png" alt="facade surface" style="height:0.8em; vertical-align:middle">,
chimney
<img src="{{ site.baseurl }}/img/2025/icons/chimney.png" alt="chimney" style="height:0.8em; vertical-align:middle">,
dormer
<img src="{{ site.baseurl }}/img/2025/icons/dormer.png" alt="dormer" style="height:0.8em; vertical-align:middle">,
balcony
<img src="{{ site.baseurl }}/img/2025/icons/balcony.png" alt="balcony" style="height:0.8em; vertical-align:middle">,
roof installation
<img src="{{ site.baseurl }}/img/2025/icons/roof_installation.png" alt="roof installation" style="height:0.8em; vertical-align:middle">,
window
<img src="{{ site.baseurl }}/img/2025/icons/window.png" alt="window" style="height:0.8em; vertical-align:middle">,
door
<img src="{{ site.baseurl }}/img/2025/icons/door.png" alt="door" style="height:0.8em; vertical-align:middle">,
low vegetation
<img src="{{ site.baseurl }}/img/2025/icons/low_vegetation.png" alt="low vegetation" style="height:0.8em; vertical-align:middle">,
impervious surface
<img src="{{ site.baseurl }}/img/2025/icons/impervious_surface.png" alt="impervious surface" style="height:0.8em; vertical-align:middle">,
road
<img src="{{ site.baseurl }}/img/2025/icons/road.png" alt="road" style="height:0.8em; vertical-align:middle">,
road marking
<img src="{{ site.baseurl }}/img/2025/icons/road_marking.png" alt="road marking" style="height:0.8em; vertical-align:middle">,
cycle lane
<img src="{{ site.baseurl }}/img/2025/icons/cycle_lane.png" alt="cycle lane" style="height:0.8em; vertical-align:middle">,
and sidewalk
<img src="{{ site.baseurl }}/img/2025/icons/sidewalk.png" alt="sidewalk" style="height:0.8em; vertical-align:middle">.
</p>

### Project Resources
- **Project**: [SUM Parts Benchmarks](https://tudelft3d.github.io/SUMParts/)
- **Code**: [GitHub](https://github.com/tudelft3d/SUM-Parts-Benchmarking-Part-Level-Semantic-Segmentation-of-Urban-Meshes.git)
- **Data**: [Hugging Face](https://huggingface.co/datasets/gwxgrxhyz/SUM-Parts)
- **Video**: [YouTube Explainer](https://youtu.be/CUi1Hf_GSlQ?si=AvghBzWzSCtXCllk)

*This work advances our group's research on 3D urban modeling following our previous [SUM dataset](https://3d.bk.tudelft.nl/projects/meshannotation/) published in ISPRS 2021.*