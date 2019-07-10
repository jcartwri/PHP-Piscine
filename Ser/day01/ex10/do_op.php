#!/usr/bin/php
<?php
	function ops($op, $a, $b)
	{
		switch ($op)
		{
			case "+":
				echo $a + $b;
				break;
			case "-":
				echo $a - $b;
				break;
			case "/":
				echo $a / $b;
				break;
			case "%":
				echo $a % $b;
				break;
			case "*":
				echo $a * $b;
				break;
		}
		echo "\n";
	}

	function do_op($base)
	{
		$list = array();
		array_splice($base, 0, 1);
		foreach ($base as $i)
			$list[] = trim($i);
		if (sizeof($list) != 3)
		{
			echo "Incorrect Parameters\n";
			return (NULL);
		}
		$a = $list[0];
		$b = $list[2];
		$op = $list[1];
		ops($op, $a, $b);
	}
	do_op($argv);
?>