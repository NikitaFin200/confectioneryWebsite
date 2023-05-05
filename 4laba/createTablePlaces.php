<?php
$serevername = "localhost";
$username = "root";
$password = "";
$dbname = "bd";

$link = new mysqli($serevername, $username, $password, $dbname);

if($link->connect_error){
    die("Connection failed: " . $link->connect_error);
}

$sql = "CREATE TABLE place(
        id INT AUTO_INCREMENT PRIMARY KEY,
        address VARCHAR (30) NOT NULL,
        orders INT NOT NULL,
        FOREIGN KEY (orders) REFERENCES orders(id))";

if($link->query($sql) === TRUE){
    print("Table users created successfully");
}
else {
    print("Error - " . $link->error);
}

$link->close();
?>