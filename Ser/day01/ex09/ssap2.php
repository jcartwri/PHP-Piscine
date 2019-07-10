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
	function ssup_light()
	{
		global $argv;
	
		$list = array();
		foreach ($argv as $i)
			$list[] = implode(" ", ft_split($i));
		$sort = array();
		$sort = ft_split(implode(" ", $list));
		array_splice($sort, 0, 1);
		sort($sort);
		return ($sort);
	}
	
	function custom_sort($a, $b)
	{
		$la = strtolower($a);
		$lb = strtolower($b);
		$base = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		$count = 0;
		while ($count < strlen($a) && $count < strlen($b))
		{
			$apos = strpos($base, $la[$count]);
			$bpos = strpos($base, $lb[$count]);
			if ($apos > $bpos)
				return (1);
			else if ($apos < $bpos)
				return (-1);
			else
				$count += 1;
		}
		return (1);
	}
	
	function print_ssup($list)
	{
		foreach($list as $i)
			echo $i, "\n";
	}

	$list = ssup_light();
	usort($list, "custom_sort");
	print_ssup($list);
?>