<?php

$baseUser = new BaseUser();
$user = new User();
$extendedUser = new ExtendedUser();

$baseUser->copyright();
$user->copyright();
$extendedUser->copyright();

class BaseUser {
	public function copyright()
	{
		echo '&copy;2016';
		echo '<br>';
	}
}

class User extends BaseUser {
	final public function copyright()
	{
		echo '&copy;2017';
		echo '<br>';
	}
}

class ExtendedUser extends BaseUser {
	
}
