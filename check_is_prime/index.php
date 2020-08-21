<?php

function isPrime($number) {
	if ($number === 1) {
		return false;
	}

	$sqrtNum = sqrt($number);

	for($i = 2; $i < $sqrtNum; $i++) {
		if ($number % $i === 0) {
			return false;
		}
	}

	return true;
}

echo isPrime((int) $_GET['number']) ? 'true' : 'false';