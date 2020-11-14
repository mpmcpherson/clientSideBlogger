<!DOCTYPE html>

<html>
<head>
<title>Add your title here</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="css\style.css">
<script type="text/javascript" src="js\tinymce.min.js"></script>

</head>

<body>
	<?php require 'resources/logger.php';?>

	<div class="oneTenth pageHead">true header</div>

	<div class="wrapper ninety" id="container">

		<div class="leftBar" id="leftBar">
			left bar
		</div>

		<div class="mainBody full" id="thisThing">
			<form class="full" id="body" method="post" target="resources/postHandler.php"> 

			</form>
		</div>

	</div>
</body>	
</html>


<script type="text/javascript" src="js\helper.js"></script>

<script type="text/javascript">
	//var button = document.getElementById('btn');
	var resultDiv = document.	getElementById('results');

	docReady(function() {
    	let leftbar = document.getElementById('leftBar');
    	leftbar.setAttribute("class","leftBar full")
		let myMCE = tinyMCE;
		myMCE.init({
		    selector: '#body',
			skin: "oxide-dark",
			content_css: "dark"
		});
		console.log(myMCE);


		//setTimeout(function(){myMCE.triggerSave();}, 15);

		//let t = tinyMCE.get(0);
    	//t.getBody().style.backgroundColor = 'gray';
    	//tinymce.bod.ystyle.backgroundColor = 'gray';
	});

 
	/*button.addEventListener('click', function() {
		//console.log("hit click");
		alert("click");
  		/*getRequest('basicGenerator.php',
  			function(response){
  				//console.log(response);
  				resultDiv.innerHTML = response;
  			},
  			function(response){
  				resultDiv.innerHTML = 'An error occurred during your request: ' +  response.status + ' ' + response.statusText;
  			},
  			null);

	});*/



</script>