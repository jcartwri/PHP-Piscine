#!/usr/bin/php
<?php
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
}
else
{
	$s1 = trim($argv[1]);
	$s2 = trim($argv[2]);
	$s3 = trim($argv[3]);

	if ($s2 == '+')
	{
		echo ($s3 + $s1) . "\n";
	}
	else if ($s2 == '-')
	{
		echo ($s1 - $s3) . "\n";
	}
	else if ($s2 == "*")
	{
		echo ($s1 * $s3) . "\n";
	}
	else if ($s2 == '/')
	{
		echo ($s1 / $s3) . "\n";
	}
	else if ($s2 == '%')
	{
		echo ($s1 % $s3) . "\n";
	}
}
?>