#!/usr/bin/php
<?php
	function moveElement(&$array, $a, $b)
	{
	    $out = array_splice($array, $a, 1);
	    array_splice($array, $b, 0, $out);
	}

	function ft_split($str)
	{
		$word = explode(" ", $str);
		$split = array();
		$j = 0;
		foreach ($word as $i)
		{
			if ($i || $i === "0")
				$split[$j] = $i;
			$j += 1;
		}
		return ($split);
	}
	if ($argc >= 2)
	{
		$str = $argv[1];
		$str = ft_split($str);
		$j = 0;
		moveElement($str, 0, sizeof($str));
		foreach ($str as $i)
		{
			echo $i;
			if ($j != sizeof($str) - 1)
				echo (" ");
			$j++;
		}
		echo "\n";
	}
?>