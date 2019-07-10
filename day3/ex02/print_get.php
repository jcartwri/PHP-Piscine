<?php
	$mas = [];
	if ($_GET)
	{
		foreach ($_GET as $key => $value)
		{
			echo "$key" . ": " . "$value\n";
			$mas[$key] = $value;
		}
	}
?>