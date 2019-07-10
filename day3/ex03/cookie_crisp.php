<?php
	$mas = [];
	if ($_GET)
	{
		foreach ($_GET as $key => $value)
		{
			$mas[$key] = $value;
		}
		if (array_key_exists("action", $mas) && $mas["action"] === "get")
		{
			if ($_COOKIE[$mas["name"]])
				echo $_COOKIE[$mas["name"]] . "\n";
		}
		else if (array_key_exists("action", $mas) && $mas["action"] === "set") 
		{
			setcookie($mas["name"], $mas["value"]);
		}
		else if (array_key_exists("action", $mas) && $mas["action"] === "del") 
		{
			setcookie($mas["name"], $mas["value"], time() + 0);
		}
	}
?>