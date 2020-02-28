<?php

	require "_setup.php";

	$start = microtime(true);
	for( $i = 0; $i < 100000; $i++ ) {
		$a = "Hello $variables1[$i], how are you this $variables2[$i]";
	}
	$end = microtime(true);
	$time = $end - $start;
	echo $time;
	exit;