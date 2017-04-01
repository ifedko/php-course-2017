<?php

$dbHost = "localhost";
$dbUser = "vagrant";
$dbPassword = "vagrant";
$dbName = "myproject";

$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}

/* Select запросы возвращают результирующий набор */
$sql = "SELECT author, category, title, year FROM classics LIMIT 10";
if ($result = $mysqli->query($sql)) {
	var_dump($result);
    printf("Select вернул %d строк.\n", $result->num_rows);
    //while ($row = $result->fetch_assoc()) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
	    var_dump($row);
	}

    /* очищаем результирующий набор */
    $result->close();

}

$mysqli->close();
