<?php

$link = mysqli_connect("localhost", "vagrant", "vagrant", "myproject");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

/* Select запросы возвращают результирующий набор */
if ($result = mysqli_query($link, "SELECT author, category, title, year FROM classics LIMIT 10")) {
	var_dump($result);

    printf("Select вернул %d строк.\n", mysqli_num_rows($result));
    

    /* очищаем результирующий набор */
    mysqli_free_result($result);
}

mysqli_close($link);