<?php
/* Подключение к базе данных MySQL, используя вызов драйвера */
$dsn = 'mysql:dbname=myproject;host=localhost';
$user = 'vagrant';
$password = 'vagrant';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

echo "Подключились к БД: myproject<br>";

getAuthors($dbh);

function getAuthors($conn) {
    $sql = "SELECT * FROM classics WHERE author='Mark Twain'";

    $result = $conn->query($sql);
    foreach ($result as $row) {
        print $row['author'] . "/";
        print $row['title'] . "/";
        print $row['category'] . "<br>";
    }
}
