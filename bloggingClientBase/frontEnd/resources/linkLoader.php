<?php
	$val = scandir('./posts');

	$out = array();

	$files = array_slice($val,2);

	for($i=0;$i<count($files);$i++)
	{
		//if(strpos($files[$i],'.')=== false)
		//{
			array_push($out, $files[$i]);
		//}
	}

?>
