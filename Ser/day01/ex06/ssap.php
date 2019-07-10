#!/usr/bin/php
<?php
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

	function ssup()
	{
		global $argv;
	
		$list = array();
		foreach ($argv as $i)
			$list[] = implode(" ", ft_split($i));
		$sort = array();
		$sort = ft_split(implode(" ", $list));
		array_splice($sort, 0, 1);
		sort($sort);
		foreach ($sort as $i)
			echo $i, "\n";
	}
	ssup();
?>