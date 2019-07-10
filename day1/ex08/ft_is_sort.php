<?php
function ft_is_sort($mas)
{
	$arr = $mas;
	sort($arr);
	$i = 0;
	while ($mas[$i])
	{
		if ($mas[$i] != $arr[$i])
			return (FALSE);
		$i++;
	}
	return (TRUE);
}
?>