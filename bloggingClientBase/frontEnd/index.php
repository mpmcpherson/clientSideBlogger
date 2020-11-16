<?php require 'resources/linkLoader.php'; ?>

<!DOCTYPE html>
<?php require 'resources/config.php';?>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="css\style.css">
<link rel="stylesheet" href="css\pure-min.css">
<link rel="stylesheet" href="css\wysiwyg.css">

</head>

<body>
	

	<div class="oneTenth pageHead"><?php echo "<h2>".$pageHeader."</h2>"; ?></div>	

	<div class="wrapper ninety" id="container">

		<div class="leftBar" id="leftBar">
			<?php 
			for($i=0;$i<count($out);$i++)
			{		
				echo "<div class='pure-button-primary postLinks' style='margin: 3px;' id='".$out[$i]."'>".$out[$i]."</div>";
			}
			?>



			
		</div>

		<div class="mainBody full" id="thisThing">
			<div class="wysiwyg" id="thisisthetarget">
			  <?php echo file_get_contents("posts/lorem1.txt") ?>
			</div>	
		</div>

	</div>
</body>	
</html>


<script type="text/javascript" src="js\helper.js"></script>

<script type="text/javascript">
	let buttons = document.getElementsByClassName('postLinks');

	//let resultDiv = document.getElementById('results');

	let theTargetDiv = document.getElementById('thisisthetarget');

	//let textBody = document.getElementById('body');

	for(let i = 0; i < buttons.length; i++)
	{
		buttons[i].addEventListener('click', function() {
		console.log(buttons[i].id);

		
  		postRequest('resources/loadPost.php',
  			function(response){
  				console.log(response);
  				//textBody.innerHTML = "";
  				theTargetDiv.innerHTML = response;
  			},
  			function(response){
  				console.log('An error occurred during your request: ' +  response.status + ' ' + response.statusText);
  			},
  			buttons[i].id	);
			
		});
	}

 
	



</script>