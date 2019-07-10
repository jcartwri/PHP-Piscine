<?php
    session_start();
    if ($_GET['submit'] == 'OK')
    {
        $login = $_GET['login'];
        $passwd = $_GET['passwd'];
        $_SESSION['login'] = $login;
        $_SESSION['passwd'] = $passwd;
    }
?>
<html><body>
<form name="index.php" action="" method="GET">
    Username: <input type="text" name="login" value="<?php echo $_SESSION['login'] ?>">
    <br />
    Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd'] ?>">
    <input type="submit" name="submit" value="OK">
</form>
</body></html>
