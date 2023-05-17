<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $product = htmlspecialchars(filter_var(trim($_POST['product'])));

    $name = htmlspecialchars(filter_var(trim($_POST['name'])));

    $surname = htmlspecialchars(filter_var(trim($_POST['surname'])));

    $link = new mysqli($serevername, $username, $password, $bdname);

    if($link->connect_error){
        die("Connection failed: " . $link->connect_error);
    }

    $id =  $link->query("SELECT `orders` FROM `customer`
                        WHERE `name` = '$name' AND `surname` = '$surname'");
    
    $row = mysqli_fetch_row($id);

    $result = $link->query("DELETE FROM `customer`
                    WHERE `name` = '$name' AND
                    `surname` = '$surname'");

    $res = $link->query("DELETE FROM `orders`
                    INNER JOIN `customer`
                    ON `customer.orders` = `orders.id`
                    WHERE `orders.id` = `customer.orders`");

    $result = $link->query("DELETE FROM `place`
                    WHERE `orders` = '$row[0]'");

$mysql->close;
header('Location: http://project/сайт/confectioneryWebsite/main.html');
?>