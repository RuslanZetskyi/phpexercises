<?php

function reveseAnyNumber($number)
{
	$strNumber = (string) $number;
	$strRevNumber = strrev($strNumber);

	if (strpos($strRevNumber, '.')) {
		$result = (float) $strRevNumber;
	} else {
		$result = (int) $strRevNumber;
	} 

	return $result;
}

var_dump(reveseAnyNumber($_GET['number']));