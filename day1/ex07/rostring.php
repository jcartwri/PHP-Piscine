#!/usr/bin/php
<?php

function ft_split($str)
{
	$arr = [];
	$my_tab = explode(" ", $str);
	foreach ($my_tab as $element)
	{
		if ($element || $element == "0")
		{
			$arr[] = $element;
		}
	}
	return ($arr);
}

$mas = array();
if ($argc > 1)
{
	$i = 1;
	$mas = [];
	$arr = ft_split($argv[1]);
	$str = $arr[0];
	foreach ($arr as $element)
	{
		if ($i != 1)
		{
			$mas[] = $element;
		}
		$i = 0;
	}
	$mas[] = $str;
	$i = 0;
	for ($i = 0; $i < count($mas); $i++) 
	{ 
		echo "$mas[$i]";
		if ($i != count($mas) - 1)
			echo " ";
	}
	echo "\n";
}
?>