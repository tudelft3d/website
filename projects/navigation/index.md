---
layout: page
title: Navigation for first responders among moving obstacles
permalink: /projects/navigation/
---

<div class="row">
	<div class="col-sm-2 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/navigation/img/AIBV B 05.jpg" | prepend: site.baseurl }}"></div>
	<div class="col-sm-2 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/navigation/img/AIBV B 07.jpg" | prepend: site.baseurl }}"></div>
	<div class="col-sm-2 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/navigation/img/AIBV B 10.jpg" | prepend: site.baseurl }}"></div>
	<div class="col-sm-2 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/navigation/img/AIBV B 11.jpg" | prepend: site.baseurl }}"></div>
	<div class="col-sm-2 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/navigation/img/AIBV B 16.jpg" | prepend: site.baseurl }}"></div>
	<div class="col-sm-2 hidden-xs nopadding"><img class="img-responsive" src="{{ "/projects/navigation/img/AIBV P 02.jpg" | prepend: site.baseurl }}"></div>
</div>

---

Natural or man-made disasters can cause different kinds of moving obstacles (e.g., fires, plumes, floods), which make some parts of the road network temporarily unavailable. After such incidents occur, responders have to go to different destinations to perform their tasks in the environment affected by the disaster. Therefore they need a path planner that is capable of dealing with such moving obstacles, as well as generating and coordinating their routes quickly and efficiently. The general problem we address is “How do we navigate one or more first responders to one or multiple destinations, avoiding moving obstacles”.

In this research, we aim at developing an integrated navigation system for first responders in the presence of moving obstacles, using the agent technology. We employ hazard models to provide the predicted information about the obstacles, and select a geo-database to store the data needed for emergency navigation. With these technologies, we have investigated:

1. a multi-agent system, which supports the spatial data processing and analysis involved in the routing process. 
2. algorithms for path planning in the presence of moving obstacles
3. spatial data models, which structure the disaster-related information for routing

--- 

<div class="row featurette">
	<div class="col-md-7">
		<h2 class="featurette-heading">One to one navigation, avoiding moving obstacles</h2>
		<p>
			In some circumstances, the moving obstacles (e.g. plumes) can make roads unavailable for some specific periods of time. Waiting at some points strategically may be beneficial, saving more time than it would take to follow other alternative routes. 
			Based on the A* algorithm, new path planning algorithms have been proposed, incorporating the predicted information of moving obstacles. Besides, the waiting option is also introduced in the algorithms to allow the rescue vehicle to avoid the moving obstacles, minimizing the total traveling time. 
		</p>
	</div>
	<iframe class="col-md-5" height="315" src="//www.youtube.com/embed/9fd14_htfjk" frameborder="0" allowfullscreen></iframe>
</div>

<hr class="featurette-divider">

<div class="row featurette">
	<iframe class="col-md-5" height="315" src="//www.youtube.com/embed/N05lDSrMDBk" frameborder="0" allowfullscreen></iframe>
	<div class="col-md-7">
		<h2 class="featurette-heading">One to many navigation, avoiding moving obstacles</h2>
		<p>
			Because responders should spend a certain amount of time in performing their tasks, the operation time of each task is also important in the path planning among moving obstacles. Our navigation system can plan a trip connecting the locations associated with the involved tasks, considering both the operation time of the task and the predicted information about the environment affected by the moving obstacles. 
		</p>
	</div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
	<div class="col-md-7">
		<h2 class="featurette-heading">Many to many navigation, avoiding moving obstacles</h2>
		<p>
			Our system can also calculate obstacle-avoiding routes for multiple vehicles. By considering the predictions of moving obstacles, the system can give a more reliable estimation of arrival time for different types of vehicles starting from different places and different time instances, which would make emergency plans more effective and contributes to an improvement of performance of the response units.
		</p>
	</div>
	<iframe class="col-md-5" height="315" src="//www.youtube.com/embed/mFm6ExkqTzY" frameborder="0" allowfullscreen></iframe>
</div>
<hr class="featurette-divider">

<div class="row">
  <div class="col-lg-offset-3 col-lg-3">
      <a href="http://3dgeoinfo.bk.tudelft.nl/zhiyong/"><img class="img-circle img-responsive" src="{{ "/img/staff/zhiyong.png" | prepend: site.baseurl }}"></a>
      <h3>Zhiyong Wang <br><small>PhD candidate</small></h3>
  </div>
  <div class=" col-lg-3">
      <a href="http://3dgeoinfo.bk.tudelft.nl/szlatanova/"><img class="img-circle img-responsive" src="{{ "/img/staff/sisi.jpg" | prepend: site.baseurl }}"></a>
      <h3>Sisi Zlatanova <br><small>Project leader</small></h3>
  </div>
</div>