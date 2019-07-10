#!/usr/bin/php
<?php

function ft_is_sort($arr)
{
	if (is_null($arr))
		return (NULL);
	$sort = $arr;
	sort($sort);
	return ($arr == $sort ? true : false);
}
?>