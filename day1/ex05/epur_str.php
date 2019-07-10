#!/usr/bin/php
<?php
$i = 0;
$y = 0;
if ($argc > 1)
{
	$my_tab = [];
	$arr = explode(" ", $argv[1]);
	foreach ($arr as $elem) 
	{
		if ($elem || $elem == "0")
		{
			$my_tab[] = $elem;
		}
	}
	$y = count($my_tab);
	$i = 0;
	foreach ($my_tab as $elem) 
	{
		$i++;
		echo "$elem";
		if ($i != $y)
			echo " ";
	}
	echo "\n";
}
?>