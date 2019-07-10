#!/usr/bin/php
<?php

function key_validation($key)
	{
		$pattern_w = "/^[^:\s]+$/";

		if (preg_match($pattern_w, $key))
			return (true);
		return (false);
	}

function search_it($base)
{
	$key = $base[1];
	if (!key_validation($key))
		return ;
	unset($base[0], $base[1]);
	$reg = '/^'. $key .'[:]([^:]?)+$/';
	foreach (array_reverse($base) as $i)
	{
		if (preg_match($reg, $i, $m))
		{
			preg_match('/[:].+$/', $m[0], $n);
			echo (substr($n[0], 1)), "\n";
			return (NULL);
		}
	}
}
search_it($argv);
?>