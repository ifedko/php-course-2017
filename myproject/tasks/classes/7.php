<?php


function test()
{
	static $variable = 10;

	echo 'Init of function:';
	echo $variable;
	echo '<br>';

	$variable += 10;
}

test();
test();

$obj = new MyClass();
echo 'Init:';
echo $obj->getStaticProperty();
$obj->changeStaticProperty();
echo '<br>';
echo 'After changing:';
echo $obj->getStaticProperty();

echo '<br>';
$objNew = new MyClass();
echo 'Init of objNew:';
echo $obj->getStaticProperty();

class MyClass {
	static $staticProperty = 1;

	public function changeStaticProperty()
	{
		self::$staticProperty++;
	}

	public function getStaticProperty()
	{
		return self::$staticProperty;
	}
}
