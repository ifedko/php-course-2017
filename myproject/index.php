<?php
require_once __DIR__ . '/../src/core/classes/Config.php';
require_once __DIR__ . '/../src/core/functions/db.php';
$pathToConfig = __DIR__ . '/../config/app.php';

$oConfig = new Config($pathToConfig);
$countOfNews = $oConfig->get('count_of_news');
$dbConfig = $oConfig->get('db');

$dbConnection = getDbConnection($dbConfig['dsn'], $dbConfig['user'], $dbConfig['password']);
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Tasks</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<style>
		</style>
	</head>
	<body>
		<div class="header">
			<a href="/">Tasks of ifedko</a>
		</div>
		<div class="content">
			<div class="workarea">
				TEST
			</div>
		</div>
		<div class="footer">
			&copy; 2017 <a href="/" title="ifedko">ifedko</a>
		</div>
	</body>
</html>
