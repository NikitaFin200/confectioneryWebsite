<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $product = htmlspecialchars(filter_var(trim($_POST['product'])));

    $filling = htmlspecialchars(filter_var(trim($_POST['filling'])));

    $weight = htmlspecialchars(filter_var(trim($_POST['weight'])));

    $name = htmlspecialchars(filter_var(trim($_POST['name'])));

    $surname = htmlspecialchars(filter_var(trim($_POST['surname'])));

    $address = htmlspecialchars(filter_var(trim($_POST['where'])));

    if(mb_strlen($product) < 1 || mb_strlen($product)>15){
        print("Недопустимая длина продукта");
        exit();
    }
    else if(mb_strlen($filling) < 1 || mb_strlen($filling)>15){
        print("Недопустимая длина начинки");
        exit();
    }
    else if(mb_strlen($weight) < 1 || mb_strlen($weight) > 15){
        print("Недопустимый вес(от 1 до 99)");
        exit();
    }
    else if(mb_strlen($name) < 1 || mb_strlen($name) > 15){
        print("Недопустимая длина имени(от 1 до 15)");
        exit();
    }
    else if(mb_strlen($surname) < 1 || mb_strlen($surname) > 20){
        print("Недопустимая длина фамилии(от 0 до 20)");
        exit();
    }

    /*$pass = md5($pass."nnniikita667872");*/

    $link = new mysqli($serevername, $username, $password, $bdname);

    if($link->connect_error){
        die("Connection failed: " . $link->connect_error);
    }

    $link->query("INSERT INTO `orders`(`product`, `filling`, `weight`)
            VALUES('$product', '$filling', '$weight')");
            

    $orders =  $link->query('SELECT MAX(id) FROM `orders`');

    $row=mysqli_fetch_row($orders);

    //echo $row[0];

    $link->query("INSERT INTO `customer`(`name`, `surname`, `orders`)
    VALUES('$name', '$surname', '$row[0]')");
    
    $link->query("INSERT INTO `place`(`address`, `orders`)
    VALUES('$address', '$row[0]')");

    $mysql->close;

    header('Location: http://project/сайт/confectioneryWebsite/main.html');
?>