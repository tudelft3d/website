---
layout: page
title: "Data-driven design tool for healthy Indoor Environments"
permalink: /projects/data-driven_ventilation
---

<div class="row">
  <div class="col-md-12 col-xs-12"><img class="img-responsive" src="{{ "processDDIE.png" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Summary

2020 year has surprised humanity with a historic pandemic that has changed the way we see our current and future lives. The pandemic turned around the way we envision indoor designs, nowadays mainly focused on energy and economic savings. However, it is clear now that the potential of future indoor designs resides not only in minimizing economic and energy consumption, but also in ensuring healthy and comfortable environments within a pandemic frame, where a highly contagious disease such as COVID-19 may be present. The current research will develop an open-source design tool that optimizes indoor designs and ventilation configurations through the combination of computational fluid dynamic (CFD) simulations and experimental data.

On the experimental side, through collaboration with the Indoor Environment group of Prof. Philomena Bluyssen, we will use experimental data collected with experimental set-ups in the SenseLab. Their research focuses on indoor environmental measurements, where they use nebulizers, PIV (Particle Image Velocimetry), tracers, and air velocity sensors, to study indoor airflow distributions. On the numerical side, the current applicant will use her expertise in computational fluid dynamics and data assimilation techniques to reproduce indoor airflow distributions. The numerical approach will use open-source CFD and uncertainty quantification tools, such as OpenFOAM and Dakota. The advantage of the numerical method is that it allows to study several configurations under diverse ventilation conditions before installation.
The project final scope is to develop a tool with which engineers and architects can make decisions regarding ventilation and set-ups in indoor spaces. To accomplish this goal, the research is divided in four milestones shown hereafter. First numerical predictions with CFD will be evaluated using measurement data collected at the SenseLab1, to determine their current predictive capabilities. Then, experimental data collected will be used to apply Bayesian inference2 in order to reduce the differences from the numerical predictions and experimental data, deriving an improved CFD solver. In the application phase, we will use the CFD solver to predict plausible scenarios at schools (where measurements were performed by Bluyssen's research group). In these cases, we will use an uncertainty quantification approach to include some of the boundary uncertainties present in the study. This approach will allow to evaluate at once several predictions under diverse ventilation conditions3 (mixed, natural or mechanical), different meteorological states4 (if natural ventilation is used) and multiple occupation set-ups. The final year of the project will be dedicated to develop a user friendly front-end application that other users can benefit from. This tool will allow to study standard square rooms, as well as include more complex geometries. In addition, the tool will provide solutions for diverse ventilation conditions, occupation and meteorological changes. Lastly, the tool will also help to determine best positions for filters under different configurations.

<!---## 3dgeoinfo abstract 
An abstract has been accepted at the 3dgeoinformation conference in 2021, and a full paper is currently under preparation.

<i class="fas fa-file-pdf">
  <a href="3dgeoinfo2021.pdf">Garcia-Sanchez_etal_3Dgeoinfo2021.pdf</a>
</i>---!>



<!---## Final presentation

<div class="row">
  <div class="col-xs-12 col-md-6">
<script async class="speakerdeck-embed" data-id="d46a020b8b75460ca6b8ed9cf7c53582" data-ratio="1.33333333333333" src="//speakerdeck.com/assets/embed.js"></script>
  </div>
</div>
-->
