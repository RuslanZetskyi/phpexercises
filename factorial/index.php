<?php


function factorial(int $number)
{
	$answer = 1;
	while($number) {
		$answer = $answer * $number;
		$number--;
	}

	return $answer;
}

echo factorial(10);