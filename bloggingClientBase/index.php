<!DOCTYPE html>

<html>
<head>
<title>Add your title here</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="css\style.css">
<link rel="stylesheet" href="css\pure-min.css">
<link rel="stylesheet" href="css\wysiwyg.css">

<script type="text/javascript" src="js\tinymce.min.js"></script>

</head>

<body>
	

	<div class="oneTenth pageHead">true header</div>	

	<div class="wrapper ninety" id="container">

		<div class="leftBar" id="leftBar">
			
			<button id='btn' class="primary-button">click me motherfucker</button>
<div class="wysiwyg" id="thisisthetarget">
  <p><code>asdfasdfasdfasdf</code></p><p>
  
  </p><blockquote><p><strong>this_is_some_text</strong></p></blockquote><p>
  
  </p><p>and_this_is_some_more!_<em>Shocking!</em></p><p>
  
  </p><p><em><p><code>asdfasdfasdfasdf</code></p><p>
  
  </p><blockquote><p><strong>this_is_some_text</strong></p></blockquote><p>
  
 </p><p>and_this_is_some_more!_<em>Shocking!</em></p></em></p>
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
	var button = document.getElementById('btn');
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
		
		console.log(textBody);

  		postRequest('resources/postHandler.php',
  			function(response){
  				console.log(response);
  				//console.log("let's try rotting it");
  				//console.log(atob(response));
  				//console.log("allegedly no error");
  				//let newResponse = JSON.parse(response);
  				//console.log(newResponse);
  				//let outgoing = response.replace(/myCustomAmp/g, "&");
  				//outgoing = outgoing.replace(/myCustomEq/g, "=");
  				//console.log("the response "+outgoing);
  				//theTargetDiv.innerHTML = outgoing;
  				//resultDiv.innerHTML = response;
  			},
  			function(response){
  				//resultDiv.innerHTML = 'An error occurred during your request: ' +  response.status + ' ' + response.statusText;
  				console.log('An error occurred during your request: ' +  response.status + ' ' + response.statusText);
  			},
  			textBody.innerHTML	);
			
	});



</script>