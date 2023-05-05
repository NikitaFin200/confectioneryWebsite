<?php
$serevername = "localhost";
$username = "root";
$password = "";
$dbname = "base";

$link = new mysqli($serevername, $username, $password, $dbname);

if($link->connect_error){
    die("Connection failed: " . $link->connect_error);
}

$sql = "INSERT INTO users (name, surname, password)
        VALUES('Nikita', 'Findyurov', '12345')";
    
if($link->query($sql) === TRUE){
    print("Record created");
}

$link->close();
?>