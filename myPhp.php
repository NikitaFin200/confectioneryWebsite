<?php
$serevername = "localhost";
$username = "root";
$password = "";

$link = new mysqli($serevername, $username, $password);

if($link->connect_error){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}

$sql = "CREATE DATABASE base";

if($link->query($sql)===TRUE){
    print("Database created successfully");
}
else {
    print("Error" . mysqli_connect_error());
}

$link->close();
?>

