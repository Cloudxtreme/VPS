<?php

// formatting file size
function RealSize($filepath)
{
	$size = filesize($filepath);

	if ($size < 1024)
	{
		return $size.' Byte';
	}
	if ($size < 1024 * 1024)
	{
		return round($size / 1024, 2).' KB';
	}
	if ($size < 1024 * 1024 * 1024)
	{
		return round($size / 1048576, 2).' MB';
	}
	if ($size < 1024 * 1024 * 1024 * 1024)
	{
		return round($size / 1073741824, 2).' GB';
	}
}

// counting lines
function CountLines($filepath) 
{
	/*** open the file for reading ***/
	$handle = fopen( $filepath, "r" );
	/*** set a counter ***/
	$count = 0;
	/*** loop over the file ***/
	while( fgets($handle) ) 
	{
		/*** increment the counter ***/
		$count++;
	}
	/*** close the file ***/
	fclose($handle);
	/*** show the total ***/
	return $count;
}

?>