#!/usr/bin/php
<?php

function call_me($arr) {
    return preg_replace_callback('/>.+</', function ($matches){
        return strtoupper($matches[0]);
    }, $arr[0]);
}


if ($argc > 1) {
    $content = file_get_contents($argv[1]);
    $new = preg_replace_callback('/<a [^>]+>[^><]+<.a>/', "call_me", $content);
}
print("$new\n");

?>