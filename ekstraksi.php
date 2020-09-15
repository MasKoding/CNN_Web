
<html lang="en">

<head>
<meta charset="utf-8">
<title>Rice Leaf Disease Analyzer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Use the power of Machine Learning to detect three types of rice leaf diseases.">


<!--Code to prevent the browser from caching the page-->
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>



<!--CSS Stylesheets-->
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/rice.css">

<!--Link to Font Awesome icons-->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>



<!--Link to fonts from google fonts-->
<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


<link rel="shortcut icon" type="image/png" href="robotfavicon.png">


<style>
html,body,h2,h3,h4,p,h5,li {font-family: Roboto, sans-serif}

</style>



</head>




<body class="bground-color">



<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content. -->
<div class="w3-content" style="max-width:960px">



<!-- 1. HOME PAGE -->
<div class="tabbed w3-animate-opacity w3-white" id="home">

	

<!-- Front page image -->
<!-- This image will be replaced once the js code runs. -->

<div class="w3-center topp-padding w3-padding-bottom">
	<img id="selected-image" class="w3-round adjust-image" src="assets/brown_spot.jpg" height="250" alt="Image for analysis"> 
	
</div> 



<!-- Button -->
<div id="btnn" class="w3-center">
	
	<button class="w3-btn w3-deep-orange w3-hover-blue w3-round w3-margin-bottom adjust-spacing btn-font w3-padding w3-space-letters" onclick="setTimeout(simulateClick.bind(null, 'image-selector'), 200)"><i class='fas fa-camera w3-padding-right' style='font-size:15px'></i>
		<b>Rice Leaf Disease Analyzer</b></button>
	<p class="w3-text-teal"><p class="w3-text-teal">For best results please place the rice leaf<br>
		flat against a white background<br>before taking the picture.</p></p>
	
</div> 



<div class="w3-center">
	<div  class="progress-bar w3-text-teal space-letters">
	<p>Model is loading...</p></div>
</div>



<!-- Progress Bar -->
<div class="w3-light-grey side-margin w3-opacity">
<div  id="myBar" class="w3-container w3-blue" style="height:5px;width:0%"></div>
</div>



<div class="w3-center w3-border add-margin side-margin w3-round w3-sand
text-color space-letters bottom-margin">
	
	<p id="status" class='space-letters text-color mob-font1'></p>
	<ol class='w3-left-align text-color' id='prediction-list'></ol>
		
</div>





<div class='w3-padding'>
	<p class='w3-round w3-margin w3-margin-bottom w3-text-teal w3-small space-letters'>
	Please note:<br> This is just a prototype.</p>
</div> 

<!-- Bottom Bar -->
<div class='w3-center w3-padding-bottom'>
	<p class="space-letters w3-text-teal"><a class="w3-small" href="https://woza.work/">
		<b>woza.work</b></a>
	</p>
</div>


</div><!--END OF HOME PAGE-->



<!-- We simulate clicks on these two. -->
<div class="hide">
	<button id='predict-button'>Predict</button>
</div>

<div class="hide">
	<input id="image-selector" type="file">
</div>
<!--===================================-->

<script>

	myStorage = window.localStorage;
	console.log('myStorage',myStorage);
</script>

	<!-- Load jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

	</script>
	
	
	<!-- Load TensorFlow.js -->
	<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.6.0/dist/tf.min.js"> 
	</script>
	
	<!-- Load the js files -->
	<script src="jscript/target_classes.js"></script>
	<script src="jscript/predict.js"></script> 
	
	
	
	
</div> <!-- w3-content -->



</body>
</html>

