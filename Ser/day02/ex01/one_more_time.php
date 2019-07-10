#!/usr/bin/php
<?php
	function search_it($base, &$key)
	{
		$reg = '/(?i)^'. $key .'[:]([^:]?)+$/';
		foreach (explode(" ", $base) as $i)
		{
			if (preg_match($reg, $i, $m))
			{
				preg_match('/[:].+$/', $m[0], $n);
				$key = substr($n[0], 1);
				return ;
			}
		}
	}

	function str2time($hash_base, $french_date)
	{
		date_default_timezone_set('UTC');       // maybe Europe/Paris
		$week_day = $french_date[1];
		$week_list = [
			"lundi" => "1",
			"mardi" => "2",
			"mercredi" => "3",
			"jeudi" => "4",
			"vendredi" => "5",
			"samedi" => "6",
			"dimanche" => "7"
		];

		unset($french_date[0], $french_date[1]);
		search_it($hash_base, $french_date[3]);
		$time = strtotime(implode(" ", $french_date));
		if (date("N", $time) == $week_list[strtolower($week_day)])
			echo $time . "\n";
		else
			echo "Wrong Format\n";
	}

	function one_more_time($base)
	{
		$hash_base = "janvier:January février:February mars:March avril:April mai:May juin:June juillet:July août:August septembre:September octobre:October novembre:November décembre:December";

		if (!preg_match('/(L|l]undi|[M|m]ardi|[M|m]ercredi|[J|j]eudi|[V|v]endredi|[S|s]amedi|[D|d]imanche)\s([1-9]|[(0-2][0-9]|[[3][0-1])\s([J|j]anvier|[F|f]évrier|[M|m]ars|[A|a]vril|[M|m]ai|[J|j]uin|[J|j]uillet|[A|a]oût|[S|s]eptembre|[O|o]ctobre|[N|n]ovembre|[D|d]écembre)\s(19[7-9]\d|[2-9]\d\d\d)\s([0-2][0-3]:[0-5][0-9]:[0-5][0-9])/', $base, $french_date))
		{
			echo "Wrong Format\n";
			return ;
		}
		str2time($hash_base, $french_date);
	}
	one_more_time($argv[1])
?>