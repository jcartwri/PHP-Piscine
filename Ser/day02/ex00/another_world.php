#!/usr/bin/php
<?php

function another_world($base)
{
	print_r(preg_replace('/[ |\t]+/', ' ', trim($base))."\n");
}
$argc > 1 ? another_world($argv[1]) : 0;
?>