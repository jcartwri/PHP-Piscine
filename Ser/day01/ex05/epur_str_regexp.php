#!/usr/bin/php
<?php
	function epur($str)
	{
		print_r(trim(preg_replace("/(\s+)/", " ", $str))."\n");
	}
	epur($argv[1]);
?>