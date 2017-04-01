<?php

$obj1 = new ToyotaAuto('Toyota', 'Ist');
$obj2 = new Auto('Nissan', 'Sunny');
$obj3 = new Auto('Ford', 'Focus');

$obj4 = AutoFactory::create('Toyota', 'Lexus', 'black');
$obj5 = AutoFactory::create('Nissan', 'Sunny', 'pink');

var_dump($obj1);
var_dump($obj2);
var_dump($obj3);

var_dump($obj4);
var_dump($obj5);

class AutoFactory {
	public static function create($make, $model, $color = 'white')
	{
		if ($make == 'Toyota') {
			return new ToyotaAuto($make, $model, $color);
		}
		return new Auto($make, $model);
	}
}

class ToyotaAuto extends Auto {
	public $color;

	public function __construct($make, $model, $color = 'white')
	{
		parent::__construct($make, $model);
		$this->color = $color;
	}
}

class Auto {
	private $make;
	private $model;

	public function __construct($make, $model)
	{
		$this->make = $make;
		$this->model = $model;
	}

	public function getMakeAndModel()
	{
		return $this->make . '::' . $this->model;
	}
}
