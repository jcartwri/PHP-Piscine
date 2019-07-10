<?php
	session_start();
	if ($_GET['submit'] == "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>
<!DOCTYPE html>
<html><body>
	<form name="feedback" action="" method="get">
		Username: <input type="text" name="login" placeholder="Login" value="<?php if ($_SESSION['login']){echo $_SESSION['login'];}?>" /><br/>
		Password: <input type="text" name="passwd" placeholder="password" value="<?php if ($_SESSION['passwd']){echo $_SESSION['passwd'];}?>" /> <br/>
		<input type="submit" name="submit" value="OK" />
	</form>
</body></html>



