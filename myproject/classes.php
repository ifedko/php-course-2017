<?php

echo 'Examples<br>';

class User {
	public $name = 'John';
	public $lastName = 'Trump';
	protected $job = 'New president';
	private $age = 18;

	public function __construct()
	{
		echo 'From User class';
		var_dump($this->job);
		var_dump($this->age);
		$this->doSmt();
	}

	private function doSmt()
	{
		echo 'DO SMT IN USER class';
	}
}

class Admin extends User {
	public function __construct()
	{
		parent::__construct();

		echo 'From Admin class';
		var_dump($this->job);
		// var_dump($this->age);
	}
}

$user = new User();

var_dump($user);

$admin = new Admin();

var_dump($admin);

// $admin = new Admin();
// $admin->name = 'Sasha';
// $admin->doSmt = function ($arg) {
// 	return 'DO SOMETHING - ' . $arg;
// };
// var_dump($admin);
// $result = $admin->doSmt;
// var_dump($result('argument'));

// echo test('Hey');

// $user1 = new User();
// $user1->name = 'Alice';
// $user1->lastName = 'Trump';

// echo 'user1';
// var_dump($user1);

// $user2 = $user1;
// echo 'user2';
// var_dump($user2);
// $user2->name = 'Amy';

// echo 'user1';
// var_dump($user1);
// echo 'user2';
// var_dump($user2);

// function test($arg)
// {
// 	return $arg . ' from test function';
// }
