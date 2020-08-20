<?php

function isArmstrongNumber(int $number)
{
	$strNumb   = (string) $number;
	$numbLen   = strlen($strNumb);
	$arrDigits = str_split($strNumb);

	$numbResult = 0;

	foreach ($arrDigits as $strChar) {
		$digit = (int) $strChar;
		$numbResult += pow($digit, $numbLen);	
	}

	return ($number === $numbResult) ?? true;
}

echo isArmstrongNumber(154) ? 'true' : 'false';
