#!/usr/bin/php
<?php
$i = 0;
foreach ($argv as $key)
{
	if ($i != 0)
		echo $key, "\n";
	$i += 1;
}
?>