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
	sort($arr);
	return ($arr);
}

$mas = array();
if ($argc > 1)
{
	$j = 1;
	while ($j < $argc)
	{
		$arr = ft_split($argv[$j]);
		for ($i = 0; $i < count($arr); $i++)
		{
			array_push($mas, $arr[$i]);
		}
		$j++;
	}
	sort($mas);
	foreach ($mas as $element)
	{
		echo "$element\n";
	}
}
?>