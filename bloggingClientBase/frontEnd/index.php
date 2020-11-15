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
			
			<button id='save_btn' class="pure-button-primary" style="width: 95%; height: 5%;">save</button>
			<button id='save_and_publish' class="pure-button-primary" style="width: 95%; height: 5%;">save and publish</button>
			<button id='configuration' class="pure-button-primary" style="width: 95%; height: 5%;">configuration</button>

			
		</div>

		<div class="mainBody full" id="thisThing">
			<div class="wysiwyg" id="thisisthetarget">
			  <?php echo file_get_contents("resources/lorem1.txt") ?>
			</div>	
		</div>

	</div>
</body>	
</html>


<script type="text/javascript" src="js\helper.js"></script>

<script type="text/javascript">
	var button = document.getElementById('save_btn');
	var resultDiv = document.getElementById('results');

	let theTargetDiv = document.getElementById('thisisthetarget');

	var textBody = document.getElementById('body');

	

 
	



</script>