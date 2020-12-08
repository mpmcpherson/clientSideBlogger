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
			  <?php 
			  $out = "&lt;div id=&quot;thisThing&quot; class=&quot;mainBody full&quot;&gt;&lt;br/&gt;&lt;div id=&quot;thisisthetarget&quot; class=&quot;wysiwyg&quot;&gt;&lt;br/&gt;&lt;p&gt;&lt;strong&gt;Patron: The lord and Lady Havulbom&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;&lt;br/&gt;&lt;p&gt;&lt;strong&gt;Villain: Humanoid criminal mastermind;&lt;/strong&gt;&amp;nbsp;immediately a vampire controlling the vampire and a necromancer&lt;/p&gt;&lt;br/&gt;&lt;p&gt;Ally: Fey ally&lt;/p&gt;&lt;br/&gt;&lt;p&gt;&lt;strong&gt;introduction: An npc the characters care about needs them to go to the adventure location&lt;/strong&gt;&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 40px;&quot;&gt;Specifically, the area is starting to get run down as these dire/etc wolves prey on the Millvale Manor Estate.&amp;nbsp;&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 80px;&quot;&gt;Why the hell is a very aware being (the vampire spawn leading them) doing this? What effects will he be acheiving?&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 120px;&quot;&gt;Financial issues&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 120px;&quot;&gt;People are starting to die&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 120px;&quot;&gt;the Havulboms are going to be impoverishing themselves feeding and trying to protect people&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 120px;&quot;&gt;if they&#039;re poor, they&#039;re desperate.&amp;nbsp;&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 120px;&quot;&gt;if they&#039;re desperate, then they&#039;ll compromise or offer access to someone they normally wouldn&#039;t.&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 120px;&quot;&gt;So what do they have that someone else wants? Specifically, that the vampire spawn or the necromancers want?&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 160px;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;br/&gt;&lt;p&gt;&lt;strong&gt;goal: Locate a dungeon or other site of interest&lt;/strong&gt;&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 40px;&quot;&gt;The dungeon has more or less been found, and they&#039;re investigating the contents of the dungeon.&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 40px;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;br/&gt;&lt;p&gt;&lt;strong&gt;complication: Moral quandary&lt;/strong&gt;&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 40px;&quot;&gt;the vampire spawn is serving against his will, and is the servitor of a powerful vampire who is...elsewhere.&lt;/p&gt;&lt;br/&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;br/&gt;&lt;p&gt;&lt;strong&gt;side quest: Discover the nature and origin of a strange phenomenon in the area&lt;/strong&gt;&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 40px;&quot;&gt;Why the fuck are all these dire wolves here? Sure, maybe a small pack, but a fucking dozen or so? That&#039;s a *lot* of dire (and otherwise) wolves.&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 80px;&quot;&gt;Let&#039;s say there&#039;s a planar gateway here, which is....eh, fuck, &quot;empowering the vampire spawn&quot; --just stat him as two spawn (inc. attacks [cut extra attacks after one spawn&#039;s worth of damage taken], saves, etc)-- in addition to allowing some number of extra wolves through every [period of time].&amp;nbsp;&lt;/p&gt;&lt;br/&gt;&lt;p&gt;twist: The adventurers have received false or extraneous information&lt;/p&gt;&lt;br/&gt;&lt;p&gt;climax: The adventurers confront the main villain and a group of minions in a bloody battle ot the finish.&lt;/p&gt;&lt;br/&gt;&lt;p style=&quot;padding-left: 40px;&quot;&gt;At which point, the vampire spawn, after being &#039;killed&#039; springs the moral quandary on them: he is the Havulbom&#039;s son, captured and turned in Chaunfall, and sent back home to cause trouble for the property he knew so well. His parents don&#039;t know he&#039;s missing, as he is supposed to be fostering with a noble family there.&amp;nbsp;&lt;/p&gt;&lt;br/&gt;&lt;p&gt;framing event: Travel to Chaunfall&lt;/p&gt;&lt;br/&gt;&lt;/div&gt;&lt;br/&gt;&lt;/div&gt;";
			  echo br2nl(html_entity_decode($out, ENT_QUOTES));
			  
			  function br2nl ( $string )
				{
				    return preg_replace('/\<br(\s*)?\/?\>/i', PHP_EOL, $string);
				    //return str_replace(["\r\n", "\r", "\n"], '<br/>', $string);
				}
			   ?>
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