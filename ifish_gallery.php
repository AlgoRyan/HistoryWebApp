
<!DOCTYPE html>
<html>
  <head>
    <title>iFish 6</title>
	
	<link rel="stylesheet" type="text/css" href="css/goodLookingFish.css">

	<script src="js/ifish/jquery.js"></script>
	<script src="js/ifish/Observable.js"></script>
	<script src="js/ifish/iFisheryUpdate.js"></script><!-- not used? -->
	<script src="js/ifish/iFishery.js"></script>
	
	<script src="js/ifish/iFishModel.js"></script>
	
	<script src="js/ifish/iFishController.js"></script>
	
	<script src="js/ifish/SliderView.js"></script>
	<script src="js/ifish/FilterView.js"></script>
	<script src="js/ifish/AquariumView.js"></script><!-- This is where our fish swim -->
	<script src="js/ifish/fishView.js"></script>
	
	
	<script src="js/ifish/iFish_physics.js"></script>
	<script src="js/ifish/iFish_layout_config.js"></script>



  </head>

  <body>

  
  
  
	<div id="template-parent" style="display:none;" >
		<!-- 
		
			This is our default template for each fish. 
		
		-->
	
		<div id="fish-template" class="simpleFishLook" >
			<div class="simpleFishTitleLook" data-bind="title">
				<span>Lorem Ipsum</span><!-- Title data binding -->
			</div>
		</div>
		
	</div>


  
  
  
  
  
<div id="swiming_area">
<!-- here be where the fish swim -->
</div>

<div style="position:absolute;top:150px;">
  <div>

	Common
	<input type="range" min="1" max="20" data-slug="Common_Rare" class="slider" id="Common_Rare" />
	Rare<br/>


	Old
	<input type="range" min="1" max="20" data-slug="Old_New" class="slider" id="Old_New" />
	New<br/>


	Small
	<input type="range" min="1" max="20" data-slug="Small_Big" class="slider" id="Small_Big" />
	Big<br/>



  </div>
  <br/>  <br/>

  <div>

	<!-- 	
		The class="filter" allows our code to recognise these as checkbox-like filters 
		and harvests their values for strange ungodly purposes...
	-->
	<input type="checkbox" data-slug="CSIRAC" class="filter" />CSIRAC</br>
	<input type="checkbox" data-slug="documentation" class="filter" />Documentation</br>
	<input type="checkbox" data-slug="hardware" class="filter" />Hardware</br>

  </div>
  
  <br/> <a href="http://ifish.io" >Powered by ifish.io</a>
</div>



	
	<script src="http://www.ifish.io/assets/api/v1/fishpond.js" type="text/javascript"></script>
    <script src="js/ifish/iFish.js"></script>


    


	
  </body>
</html>


