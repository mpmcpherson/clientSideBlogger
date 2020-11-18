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

			<button id='save_btn' class="pure-button-primary fillHorizontal" style="height: 5%;">save</button>
			
			<button id='load_btn' class="pure-button-primary fillHorizontal" style="height: 5%;">load</button>

			<button id='save_and_publish' class="pure-button-primary fillHorizontal"style="height: 5%;">save and publish</button>

			<button id='configuration' class="pure-button-primary fillHorizontal" style="height: 5%;">configuration</button>
			<div id="config-folder" style="display: none;">
				<input id="username" class="fillHorizontal forms" placeholder="username..."/>
				<input type="password" id="password" class="fillHorizontal forms"  placeholder="password..."/>
				<input id="server" class="fillHorizontal forms" placeholder="target server..."/>
				<input id="path"class="fillHorizontal forms" placeholder="filepath..."/>
				<div id="save-config" class="pure-button">save config</div>
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
	let userName = document.getElementById('username');
	let password = document.getElementById('password');
	let server = document.getElementById('server');
	let path = document.getElementById('path');
	

	let save = document.getElementById('save_btn');
	let load = document.getElementById('load_btn');
	let publish = document.getElementById('save_and_publish');
	let resultDiv = document.getElementById('results');
	let myMCE = tinyMCE;
	let theTargetDiv = document.getElementById('thisisthetarget');

	let textBody = document.getElementById('body');

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


 
	save.addEventListener('click', function() {
		//trigger transcription to the element I can get at easily
		myMCE.triggerSave();

		let text = textBody.innerHTML;

		window.localStorage.setItem('text', text);

	});

	load.addEventListener('click', function() {
		//trigger transcription to the element I can get at easily
		//myMCE.triggerSave();

		let text = window.localStorage.getItem('text');
		console.log(text);
		myMCE.activeEditor.setContent(text);
		//textBody.innerHTML = text;
	});

 
	publish.addEventListener('click', function() {
		//trigger transcription to the element I can get at easily
		myMCE.triggerSave();

		//save locally
		window.localStorage.setItem('text', text);

  		postRequest('resources/postHandler.php',
  			function(response){
  				console.log(response);
  				theTargetDiv.innerHTML = response;
  			},
  			function(response){
  				console.log('An error occurred during your request: ' +  response.status + ' ' + response.statusText);
  			},
  			textBody.innerHTML	);
			
	});

	let config = document.getElementById('configuration');
	config.addEventListener('click', function(){
		toggleHidden('config-folder');
	});

</script>