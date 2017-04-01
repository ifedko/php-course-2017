<?php

class MyCalculator {
	private $x;
	private $y;

	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}

	public function add()
	{
		return $this->x + $this->y;
	}

	public function extract()
	{
		return $this->x - $this->y;
	}

	public function multiply()
	{
		return $this->x * $this->y;
	}

	public function divide()
	{
		return $this->x / $this->y;
	}
}

$calculator = new MyCalculator(12, 6);
echo $calculator->add();
echo '<br>';
echo $calculator->extract();
echo '<br>';
echo $calculator->multiply();
echo '<br>';
echo $calculator->divide();
echo '<br>';
