<?php

class Sort {
	public static function sortArray($array)
	{
		sort($array);
		return $array;
	}
}

$array1 = [11, -2, 4, 35, 0, 8, -9];
$array2 = [-100000002, 11, -2, 4, 35, 0, 8, -9, 35, 0, 8, -9];

$sortedArray1 = Sort::sortArray($array1);
var_dump($sortedArray1);

$sortedArray2 = Sort::sortArray($array2);
var_dump($sortedArray2);
