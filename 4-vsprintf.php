<?php

	require "_setup.php";

	$start = microtime(true);
	for( $i = 0; $i < 100000; $i++ ) {
		$a = vsprintf( "Hello %s, how are you this %s", [ $variables1[$i], $variables2[$i] ] );
	}
	$end = microtime(true);
	$time = $end - $start;
	echo $time;
	exit;