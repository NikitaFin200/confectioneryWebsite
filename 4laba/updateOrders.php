<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $id = htmlspecialchars(filter_var(trim($_POST['id'])));

    $product = htmlspecialchars(filter_var(trim($_POST['product'])));

    $filling = htmlspecialchars(filter_var(trim($_POST['filling'])));

    $weight = htmlspecialchars(filter_var(trim($_POST['weight'])));

    $name = htmlspecialchars(filter_var(trim($_POST['name'])));

    $surname = htmlspecialchars(filter_var(trim($_POST['surname'])));

    $address = htmlspecialchars(filter_var(trim($_POST['where'])));

    $link = new mysqli($serevername, $username, $password, $bdname);

    if($link->connect_error){
        die("Connection failed: " . $link->connect_error);
    }

    if(!empty($_POST['product'])){  
        $result = $link->query("UPDATE orders
                    SET product = '$product'
                    WHERE id = '$id'");
    }

    if(!empty($_POST['filling'])){  
        $result = $link->query("UPDATE `orders`
                    SET `filling` = '$filling'
                    WHERE `weight` = '$weight'");
    }

    if(!empty($_POST['weight'])){  
        $result = $link->query("UPDATE `orders`
                    SET `weight` = '$weight'
                    WHERE `product` = '$product'");
    }

    if(!empty($_POST['name'])){  
        $result = $link->query("UPDATE `customer`
                    SET `name` = '$name'
                    WHERE id = '$id'");
    }

    if(!empty($_POST['surname'])){  
        $result = $link->query("UPDATE `customer`
                    SET `surname` = '$surname'");
    }

    if(!empty($_POST['address'])){  
        $result = $link->query("UPDATE `oders`
                    SET `address` = '$address'");
    }

    $mysql->close;
    header('Location: http://project/сайт/confectioneryWebsite/main.html');
?>