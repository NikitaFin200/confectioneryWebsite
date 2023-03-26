<?php
$link = mysqli_connect("localhost", "root", "3306", "base");

if($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}

$sql = 'INSERT INTO cak SET b = "Санкт-Петербург"';
$result = mysqli_query($link, $sql);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}
?>
