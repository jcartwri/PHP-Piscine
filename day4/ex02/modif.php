<?php
	function ft_error()
	{
		echo "ERROR\n";
		exit (-42);
	}

	$file = "../private/passwd";
	if ($_POST["submit"] !== "OK")
	{
		return (-1);
	}
	if ($_POST["login"] === "" || $_POST["oldpw"] === "" || $_POST["newpw"] === "")
	{
		ft_error();
	}
	else
	{
		if (!file_exists("../private") || !file_exists($file))
		{
			ft_error();
		}
		$a = 0;
		if (file_exists($file))
		{
			$str = file_get_contents($file);
			$mas = unserialize($str);
			foreach ($mas as &$elem)
			{
				if ($elem["login"] === $_POST["login"])
				{
					$elem["passwd"] = $_POST["newpw"];
					file_put_contents($file, serialize($mas));
					echo "OK\n";
					exit (42);
				}
			}
		}
		ft_error();
	}
?>