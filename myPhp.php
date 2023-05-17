<?php
<<<<<<< HEAD
$serevername="localhost";
$username="root";
$password="";

$link = new mysqli($serevername, $username, $password);
if($link == false){
=======
$serevername = "localhost";
$username = "root";
$password = "";

$link = new mysqli($serevername, $username, $password);

if($link->connect_error){
>>>>>>> cbafb2e25c6abd4c0d4d91190c8178817e911478
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
<<<<<<< HEAD
?>
=======

$sql = "CREATE DATABASE bd";

if($link->query($sql)===TRUE){
    print("Database created successfully");
}
else {
    print("Error" . mysqli_connect_error());
}

$link->close();
?>

>>>>>>> cbafb2e25c6abd4c0d4d91190c8178817e911478
