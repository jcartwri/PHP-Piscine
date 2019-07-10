<?php
	if ($_GET['action'] == "set" && $_GET['name'] && $_GET['value'])
		setcookie($_GET['name'], $_GET['value']);
	else if ($_GET['action'] == "get")
	{
		if ($_GET['name'] && $_COOKIE[$_GET['name']] && !$_GET['value'])
			echo $_COOKIE[$_GET['name']], "\n"; //culture of quering
	}
	else if ($_GET['action'] == "del")
	{
		if ($_GET['name'] && !$_GET['value'])
			setcookie($_GET['name'], '', 1);
	}
?>