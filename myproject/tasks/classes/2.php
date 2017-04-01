<?php

class Greeting {
	public function hello($name)
	{
		$name = ucfirst($name);
		echo "Hello All, I'm $name";
	}
}

$name = 'scott';
$greeting = new Greeting();
$greeting->hello($name);
