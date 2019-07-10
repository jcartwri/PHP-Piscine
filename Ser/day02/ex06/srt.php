#!/usr/bin/php
<?php

	function print_dates($date_list, $text)
	{
		$i = 1;

		foreach ($date_list as $date) {
			echo($i . "\n");
			echo $date . "\n";
			foreach ($text as $line) {
				if ($date === $line[1])
					echo($line[2] . "\n");
			}
			$i++;
			if ($i != sizeof($date_list) + 1)
				echo "\n";
		}
	}

	function srt($file_name)
	{
		$i = 0;
		$j = 0;
		$dates = array();
		$text = array();

		if (!file_exists($file_name))
			return ;
		$read = file($file_name, FILE_IGNORE_NEW_LINES);
		foreach ($read as $line) {
			if ($j == 0)
			{
				if ($line != $i + 1)
					return ;
			}
			else if ($j == 1)
			{
				if (!preg_match('/^[0-9]{2}:[0-9]{2}:[0-9]{2},[0-9]{3} --> [0-9]{2}:[	0-9]{2}:[0-9]{2},[0-9]{3}$/', $line))
					return ;
				array_push($dates, $line);
				$text[$i][$j] = $line;
			}
			else if ($j == 2)
			{
				if (empty($line))
					return ;
				$text[$i][$j] = $line;
			}
			else
			{
				if (!empty($line))
					return ;
				$j = -1;
				$i++;
			}
			$j++;

		}
		if (sizeof($dates) != $i + 1)
			return ;
		sort($dates);
		print_dates($dates, $text);
	}
	($argc == 2) ? srt($argv[1]) : 0;
?>