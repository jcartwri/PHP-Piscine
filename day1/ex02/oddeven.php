#!/usr/bin/php
<?PHP
$fh = fopen('php://stdin','r');
while (!feof($fh))
{
	echo "Enter a number: ";
	$a =  str_replace("\n", "", fgets($fh));
	if (feof($fh))
	{
		echo ("^D\n");
		break ;
	}
	else if (is_numeric($a) == FALSE)
		echo "'$a' is not a number\n";
	else if ($a % 2 == 0)
		echo "The number $a is even\n";
	else
		echo "The number $a is odd\n";
}
fclose($fh);
?>