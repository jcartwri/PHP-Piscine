<?php

$folder = "../private/";
$login = $_POST['login'];
$newpw =$_POST['newpw'];
$oldpw = $_POST['oldpw'];


if ($login && $oldpw && $newpw && $_POST['submit'] == 'OK' && $oldpw != $newpw)
{
    if (!file_exists($folder))
        mkdir($folder);
    if (file_exists($folder."passwd"))
    {
        $newpw = hash("sha512",$newpw);
        $oldpw =  hash("sha512", $oldpw);
        $passwd_file = file_get_contents($folder."passwd");
        $unserial = unserialize($passwd_file);
        if ($unserial)
        {
            $i = 0;
            foreach ($unserial as $value)
            {
                if ($value['login'] == $login)
                {
                    if ($value['passwd'] == $oldpw )
                    {
                        $unserial[$i]['passwd'] = $newpw;
                        $serial = serialize($unserial);
                        file_put_contents($folder."passwd", $serial . "\n");
                        echo "OK\n";
                        return ;
                    }
                    else
                    {
                        echo "ERROR\n";
                        return (false);
                    }
                }
                $i++;
            }
        }
    }
}
    echo "ERROR\n";
?>
