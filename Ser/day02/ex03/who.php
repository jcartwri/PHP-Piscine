#!/usr/bin/php
<?php
	$fd = fopen("/var/run/utmpx", 'r');
	date_default_timezone_set("Europe/Moscow"); //The Mac OS X 10.5 utmpx record is 628 bytes in size https://github.com/libyal/dtformats/blob/master/documentation/Utmp%20login%20records%20format.asciidoc
	while ($str = fread($fd, 628)) {
		$elem = unpack("a256user/a4id/a32line/ipid/itype/Itime", $str);
		if ($elem['type'] == 7) {
			echo "$elem[user] $elem[line]  ". date('M  j H:i', $elem[time])."\n";
		}
	}
?>
