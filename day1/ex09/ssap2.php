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

function ssap()
{
	global $argv;

	$i = 0;
	$res = [];
	foreach ($argv as $element)
	{
		if ($i == 1)
		{
			$res[] = $element;
		}
		$i = 1;
	}
	$res = ft_split(implode(" ", $res));
	if ($res)
	{
		sort($res);
		return ($res);
	}
}

function custom_sort($a, $b)
{
	$acopy = strtolower($a);
	$bcopy = strtolower($b);
	$base = "abcdefghijklmnopqrstuvwxyz0123456789!\"	 #$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	$i = 0;
	while ($i < strlen($a) && $i < strlen($b))
	{
		$apos = strpos($base, $acopy[$i]);
		$bpos = strpos($base, $bcopy[$i]);
		if ($apos > $bpos)
		{
			return (1);
		}
		else if ($apos < $bpos)
			return (-1);
		else
			$i++;
	}
}

function ssap2()
{
	global $argv;

	$list = ssap();
	if ($list)
	{
		usort($list, "custom_sort");
		foreach ($list as $element)
		{
			echo $element, "\n";
		}
	}
	else
	{
		echo ($argv[1] . "\n");
	}
}

($argc >= 2) ? ssap2() : 0;
?>