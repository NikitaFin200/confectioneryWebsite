<?php
$serevername = "localhost";
$username = "root";
$password = "";
$dbname = "bd";

$link = new mysqli($serevername, $username, $password, $dbname);

if($link->connect_error){
    die("Connection failed: " . $link->connect_error);
}

$sql = "CREATE TABLE user(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR (30) NOT NULL,
        surname VARCHAR (30) NOT NULL,
        age INT(30) NOT NULL,
        email VARCHAR (30) NOT NULL,
        login VARCHAR (30) NOT NULL,
        password VARCHAR (30) NOT NULL)";

if($link->query($sql) === TRUE){
    print("Table users created successfully");
}
else {
    print("Error" . $link->error);
}

$link->close();
?>