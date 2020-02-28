<?php
	$variables1 = [];
	$variables2 = [];
	for( $i = 0; $i < 100000; $i++ ) {
		$variables1[] = md5(rand());
		$variables2[] = md5(rand());
	}
