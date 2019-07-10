#!/usr/bin/php
<?php

if ($argc > 1) {
    $words = preg_replace('/\s+/', " ", $argv[1]);
    print_r(trim($words));
}

?>
