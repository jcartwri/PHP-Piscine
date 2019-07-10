<?php
    $folder = "../private/";
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    if ($login && $passwd && $_POST['submit'] == 'OK')
    {
        if (!file_exists($folder))
            mkdir($folder);
        if (file_exists($folder."passwd"))
        {
            $passwd_file = file_get_contents($folder."passwd");
            $unserial = unserialize($passwd_file);
            if ($unserial)
                foreach ($unserial as $value)
                    if ($value['login'] == $login)
                    {
                        echo "ERROR\n";
                        return ;
                    }
        }
        $unserial[] = ["login" => $login, "passwd" => hash("sha512", $passwd)];
        $serial = serialize($unserial);
        file_put_contents($folder."passwd", $serial . "\n");
        echo "OK\n";
    }
    else
        echo "ERROR\n";
?>
