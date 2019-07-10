<?php
function auth($login, $passwd)
{
    $folder = "../private/";
    if ($login && $passwd)
    {
        $passwd = hash("sha512",$passwd);
        $passwd_file = file_get_contents($folder."passwd");
        $unserial = unserialize($passwd_file);
        if ($unserial)
        {
            foreach ($unserial as $value)
            {
                if ($value['login'] == $login)
                {
                    if ($value['passwd'] == $passwd )
                        return (true);
                    else
                        return (false);
                }
            }
        }
    }
    return (false);
}