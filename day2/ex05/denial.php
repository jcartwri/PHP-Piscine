#!/usr/bin/php
<?php

if ($argc == 3 && file_exists($argv[1])) {
$data = file($argv[1]);
$IP = [];
$name = [];
$surname = [];
$mail = [];
$login = [];
$types = array("name", "surname", "mail", "IP", "login");
$titles = array("name"=>"name", "surname"=>"surname", "mail"=>"mail", "IP"=>"IP", "login"=>"login", "nom"=>"name", "prenom"=>"surname", "pseudo"=>"login");
if (array_key_exists($argv[2], $titles)) {
    $key_type = $titles[$argv[2]];
    for ($i = 1; $data[$i]; $i++){
        $data[$i]=trim($data[$i]);
        $ar = explode(";", $data[$i]);
        $ar = array_combine($types, $ar);
        $name[$ar[$key_type]] =  $ar["name"];
        $surname[$ar[$key_type] = $ar["surname"]];
        $mail[$ar[$key_type] = $ar["mail"]];
        $IP[$ar[$key_type] = $ar["IP"]];
        $login[$ar[$key_type] = $ar["login"]];
    }
    print("Enter your command: ");
    while ($com = fgets(STDIN)) {
        eval($com);
        print("Enter your command: ");
    }
}
}
?>