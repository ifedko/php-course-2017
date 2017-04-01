<?php

$obj = new UserSubscriber();
$obj->name = 'John';
$obj->email = 'john@gmail.com';
$info = $obj->getInfo();
var_dump($info);

class User {
	public $name;
}

class Subscriber extends User {
	public $email;
}

class UserSubscriber extends Subscriber 
{
	public function getInfo()
	{
		return [
			'name' => $this->name,
			'email' => $this->email
		];
	}
}
