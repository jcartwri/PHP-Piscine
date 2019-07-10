#!/usr/bin/php
<?php

// function ft_split($str, $a)
// {
// 	$i = 0;
// 	$my_tab = explode($a, $str);
// 	foreach ($my_tab as $element)
// 	{
// 		if (empty($element))
// 			unset($my_tab[$i]);
// 		$i++;
// 	}
// 	//sort($my_tab);
// 	return ($my_tab);
// }

function ft_check($my_tab, $a)
{
	$my_tab[0] = trim($my_tab[0]);
	$my_tab[1] = trim($my_tab[1]);
	if (is_numeric($my_tab[0]) == FALSE || is_numeric($my_tab[1]) == FALSE)
	{
		echo "Syntax Error\n";
	}
	else
	{
		$s1 = $my_tab[0];
		$s2 = $a;
		$s3 = $my_tab[1];
		if ($s2 == '+')
			echo ($s3 + $s1) . "\n";
		else if ($s2 == '-')
			echo ($s1 - $s3) . "\n";
		else if ($s2 == "*")
			echo ($s1 * $s3) . "\n";
		else if ($s2 == '/')
			echo ($s1 / $s3) . "\n";
		else if ($s2 == '%')
			echo ($s1 % $s3) . "\n";
	}
}

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
}
else
{
	$s = trim($argv[1]);
	$i = 0;
	$a = '\0';
	while ($s[$i])	
	{
		if (($s[$i] == '+' || $s[$i] == '-' || $s[$i] == '*' ||
			$s[$i] == '/' || $s[$i] == '%') && $a == '\0')
		{
			$a = $s[$i];
		}
		$i++;
	}
	if ($a == '\0')
	{
		echo "Syntax Error\n";
		break;
	}
	
	$my_tab = explode($a, $s);
	if (count($my_tab) != 2)
	{		
		echo "Syntax Error\n";	
	}
	else
	{
		ft_check($my_tab, $a);
	}
	print_r ($my_tab);
}
?>