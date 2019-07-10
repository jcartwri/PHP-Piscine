<?PHP
function ft_split($str)
{
	$arr = [];
	$my_tab = explode(" ", $str);
	foreach ($my_tab as $element)
	{
		if ($element || $element == "0")
		{
			$arr[] = $element;
		}
	}
	sort($arr);
	return ($arr);
}
?>