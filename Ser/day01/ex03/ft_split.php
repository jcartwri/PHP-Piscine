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
		sort($split);
		return ($split);
	}
?>