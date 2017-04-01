<?php

class Sort {
	private $array;

	public function __construct($array)
	{
		$this->array = $array;
	}

	public function sort()
	{
		sort($this->array);
		return $this->array;
	}
}

$array1 = [11, -2, 4, 35, 0, 8, -9];
$array2 = [-100000002, 11, -2, 4, 35, 0, 8, -9, 35, 0, 8, -9];

$sortObj = new Sort($array1);
$sortedArray1 = $sortObj->sort();
var_dump($sortedArray1);

$sortObj2 = new Sort($array2);
$sortedArray2 = $sortObj2->sort();
var_dump($sortedArray2);
