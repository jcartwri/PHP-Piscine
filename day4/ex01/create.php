<?php
	function ft_error()
	{
		echo "ERROR\n";
		exit (-42);
	}

	if ($_POST["login"] === "" || $_POST["passwd"] === "")
		ft_error();
	else
	{
		if (!file_exists("../private"))
		{
			mkdir("../private");
		}
		if (file_exists("../private/passwd") && file_get_contents("../private/passwd") !== "")
		{
			$str = file_get_contents("../private/passwd");
			$mas = unserialize(file_get_contents("../private/passwd"));
			foreach ($mas as $elem)
			{
				if ($elem["login"] === $_POST["login"])
				{
					echo "ERROR\n";
					return ;
				}
			}
		}
		$arr["login"] = $_POST["login"];
		$arr["passwd"] = $_POST["passwd"];
		$mas[] = $arr;
		$str1 = serialize($mas);
		file_put_contents("../private/passwd", $str1); 
		echo "OK\n";	
	}
?>