<!DOCTYPE html>
<?php require 'resources/config.php';?>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="css\style.css">
<link rel="stylesheet" href="css\pure-min.css">
<link rel="stylesheet" href="css\wysiwyg.css">

<script type="text/javascript" src="js\tinymce.min.js"></script>

</head>

<body>
	

	<div class="oneTenth pageHead"><?php echo "<h2>".$pageHeader."</h2>"; ?></div>	

	<div class="wrapper ninety" id="container">

		<div class="leftBar" id="leftBar">
			
			<button id='save_btn' class="pure-button-primary" style="width: 95%; height: 5%;">save</button>
			<button id='save_and_publish' class="pure-button-primary" style="width: 95%; height: 5%;">save and publish</button>
			<button id='configuration' class="pure-button-primary" style="width: 95%; height: 5%;">configuration</button>

			<div class="wysiwyg" id="thisisthetarget">
			  
			</div>	
		</div>

		<div class="mainBody full" id="thisThing">
			<form class="full" id="body" method="post" target="~/resources/postHandler.php"> 

			</form>
		</div>

	</div>
</body>	
</html>


<script type="text/javascript" src="js\helper.js"></script>

<script type="text/javascript">
	var button = document.getElementById('save_btn');
	var resultDiv = document.getElementById('results');
	let myMCE = tinyMCE;
	let theTargetDiv = document.getElementById('thisisthetarget');

	var textBody = document.getElementById('body');

	docReady(function() {
    	let leftbar = document.getElementById('leftBar');
    	leftbar.setAttribute("class","leftBar full");
		myMCE.init({
		    selector: '#body',
			skin: "oxide-dark",
			content_css: "dark",
			setup: function (editor) {
        		editor.on('change', function () {
            		editor.save();
        		});
    		}
		});
		console.log(myMCE);

	});

 
	button.addEventListener('click', function() {
		//console.log("hit click");
		//myMCE.triggerSave();
		myMCE.triggerSave();

		//alert("click");
		
		//console.log(textBody);

  		postRequest('resources/postHandler.php',
  			function(response){
  				console.log(response);
  				//textBody.innerHTML = "";
  				theTargetDiv.innerHTML = response;
  			},
  			function(response){
  				console.log('An error occurred during your request: ' +  response.status + ' ' + response.statusText);
  			},
  			textBody.innerHTML	);
			
	});



</script>