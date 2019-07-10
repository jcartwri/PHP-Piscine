<?php
	$file = '../img/42.png';
	
	if (file_exists($file))
	{
		header('Content-Type: image/png');
		readfile($file);
	}
?>