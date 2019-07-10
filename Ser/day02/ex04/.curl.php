#!/usr/bin/php
<?php
	
	function dl_img($image_url, $image_file)
	{
		$fp = fopen ($image_file, 'w+');					// open file handle

		$c = curl_init($image_url);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false); 	// ssl encryption
		curl_setopt($c, CURLOPT_FILE, $fp);					// output to file
		curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($c, CURLOPT_TIMEOUT, 1000);				// some large value to allow curl to run for a long time
		curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0');
		// curl_setopt($c, CURLOPT_VERBOSE, true);				// Enable this line to see debug prints
		curl_exec($c);

		curl_close($c);										// closing curl handle
		// close($fp);											// closing file handle
	}

	function img_getter($url)
	{
		$c = curl_init(trim($url));
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		$str = curl_exec($c);
		curl_close($c);	
		$dir = preg_replace('/^https?\:\/\/(.+)\/?/', '$1', $url);
		if (!file_exists('./'.$dir))
    	{
    			mkdir($dir, 0777, true);
    	}
    	// print_r($dir);
    	preg_match_all('/img src="(\/.+?)"/', $str, $img);
    	# preg_match_all('/img src="(.+?)"/', $str, $img);
    	print_r($img);
    	foreach ($img[1] as $elem)
    	{
    		preg_match('/\w+\.\w{1,5}$/', $elem, $m);
    		echo $url.$elem, "\n";
    		echo './'.$dir.'/'.$m[0],"\n";
    		dl_img($url.$elem, './'.$dir.'/'.$m[0]);
    	}
    	// print_r($str);
	}


	img_getter($argv[1]);
?>
<!-- https://stackoverflow.com/questions/1234537/managing-curl-output-in-php
managing curl output -->
