#!/usr/bin/php
<?php
	function magnifying_glass($file_name)
	{
		if (file_exists($file_name))
		{
			$tag_a = array();
			$html = file_get_contents('./' . $file_name, true);
			$tag_a[] = preg_replace_callback('/<a.*?>.*<\/a>/is',
				function ($matches)
				{
					$matches[0] = preg_replace_callback('/( title\s*=\s*\")(.*?)(\")/i',
						function ($title)
						{
							return ($title[1] . strtoupper($title[2]) . $title[3]);
						},
						$matches[0]);
					$matches[0] = preg_replace_callback('/>(.*?)</is',
						function ($value)
						{
							return ('>' . strtoupper($value[1]) . '<');
						},
						$matches[0]);
					return ($matches[0]);
				},
				$html);
			print_r($tag_a[0]);
		}
	}
	magnifying_glass($argv[1]);
?>