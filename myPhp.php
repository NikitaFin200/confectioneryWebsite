<?php
$serevername = "localhost";
$username = "root";
$password = "";

$link = new mysqli($serevername, $username, $password);

if($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}


?>

