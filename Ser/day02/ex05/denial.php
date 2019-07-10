#!/usr/bin/php
<?php

	function query_db()
	{
		$stdin = fopen('php://stdin', 'r');
		echo "Enter your command: ";
		$query = fgets($stdin);
		fclose($stdin);
		return ($query);
	}

	function read_csv($db, $key)
	{
		if (($handle = fopen($db, "r")) !== FALSE)
		{
			$date = fgetcsv($handle);
			$header = explode(";", $date[0]);
			$key_g = array_search($key, $header);
			
			if (!array_search($key, [" ", "nom", "prenom", "mail", "IP", "pseudo"]))
				return (NULL);
			while ($date = fgetcsv($handle))
			{
				$date_split = explode(";", $date[0]);
				$nom[$date_split[$key_g]]  = $date_split[0];	
				$prenom[$date_split[$key_g]]  = $date_split[1];
				$mail[$date_split[$key_g]]  = $date_split[2];
				$IP[$date_split[$key_g]]  = $date_split[3];
				$pseudo[$date_split[$key_g]] = $date_split[4];
			}
			while ($query = query_db())
				eval($query);
			echo "^D\n";
		}
	}
	$argc == 3 ? read_csv($argv[1], $argv[2]) : 0;
?>