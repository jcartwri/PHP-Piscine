#!/usr/bin/php
<?php
	function dl_img($image_url, $image_file)
	{
		$fp = fopen($image_file, 'w+');
		$c = curl_init($image_url);
		curl_setopt($c, CURLOPT_FILE, $fp);
		curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($c, CURLOPT_TIMEOUT, 1000);
		// curl_setopt($c, CURLOPT_VERBOSE, true);
		curl_exec($c);
		curl_close($c);
		fclose($fp);
	}

	function img_getter($url)
	{
		$c = curl_init(trim($url));
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		$str = curl_exec($c);
		curl_close($c);
		$dir = preg_replace('/^https?\:\/\/(.+)\/?/', '$1', $url);
		if (!file_exists('./'.$dir))
			mkdir($dir, 0777, true);
		preg_match_all('/<img(.*?)src=("|\')([^"\'>]+(\.jpg|png|gif|svg|jpeg))/', $str, $img);
		foreach ($img[3] as $elem)
		{
			preg_match('/\w+\.\w{1,5}$/', $elem, $m);
			if (preg_match("/https?/", $elem, $x) == 1)
				dl_img($elem, './'.$dir.'/'.$m[0]);
			else
				dl_img($url.$elem, './'.$dir.'/'.$m[0]);
		}
	}
	img_getter($argv[1]);
?>