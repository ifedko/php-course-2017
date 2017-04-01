<?php

function getDbConnection($dsn, $user, $password)
{
	return new PDO($dsn, $user, $password);
}
