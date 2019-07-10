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

	function epur($str)
	{
		$i = 0;
		$str = ft_split(trim($str));
		while ($str[$i] || $str[$i] === "0")
		{
			if ($str[$i] == ' ')
			{
				while ($str[$i] == ' ')
					$i += 1;
				echo " ";
			}
			echo $str[$i];
			$i += 1;
		}
		echo "\n";
	}
	$argc == 2 ? epur($argv[1]) : 0;
?>