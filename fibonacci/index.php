<?php

function getFibonacciOnPosition(int $position, array $fibonacciStart = [1, 1])
{
	if (!array_key_exists($position, $fibonacciStart)) {

		$loops = $position - count($fibonacciStart);
		while($loops) {
			$arrayLastKey = array_key_last($fibonacciStart);
			$fibonacciStart[] = $fibonacciStart[$arrayLastKey] + $fibonacciStart[$arrayLastKey-1];
			$loops--;
		}
	}

	return implode(', ', $fibonacciStart);/*$fibonacciStart[$position]*/;
}

echo getFibonacciOnPosition(7);