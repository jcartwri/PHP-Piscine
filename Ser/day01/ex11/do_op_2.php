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
	
	function new_validator($str)
	{
		$list = array();
		$j = 0;
		$x = 0;
		$y = 0;
		$sign = 1;
		$sign2 = 1;
		if ($str[$j] == '+' || $str[$j] == '-')
		{
			if ($str[$j] == '-')
				$sign *= -1;
			$j++;
		}
		while (is_numeric($str[$j]))
		{
			$j++;
		}
		if ($str[$j+1] == '-')
			$sign2 = -1;
		$op = $str[$j];
		if ($op != '+' && $op != '-' && $op != '*' && $op != '/' && $op != '%')
		{
			echo "Syntax Error\n";
			return (NULL);
		}
		$list = explode($str[$j], $str);
		if (!$list[0] && $list[0] !== "0")
			array_splice($list, 0, 1);
		if (!$list[1] && $list[1] !== "0")
			array_splice($list, 1, 1);
		if (sizeof($list) != 2)
		{
			echo "Syntax Error\n";
			return(NULL);
		}
		if ($list[0] < 0)
		{
			$a = $list[0];
		}
		else
			$a = $list[0] * $sign;
		if ($list[1] < 0)
			$b = $list[1];
		else
			$b = $list[1] * $sign2;
		$op = $str[$j];
		if (!is_numeric($list[0]))
		{
			echo "Syntax Error\n";
			return(NULL);
		}
		if (!is_numeric($list[1]))
		{
			echo "Syntax Error\n";
			return(NULL);
		}
		if ($op == '+' || $op == '-' || $op == '*' || $op == '/' || $op == '%')
			ops($op, $a, $b);
	}

	function validator($str)
	{
		$list = array();
		$j = 0;
		$x = 0;
		$y = 0;
		$str = trim($str);
		$str = str_replace(" ", "", $str);
		$str = str_replace("\t", "", $str);
		new_validator($str);
	}


	function do_op($base)
	{
		$list = array();
		if (sizeof($base) != 2)
		{
			echo "Incorrect Parameters\n";
			return (NULL);
		}
		validator($base[1]);
	}
	do_op($argv);
?>