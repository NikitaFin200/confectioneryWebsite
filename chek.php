<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $login = htmlspecialchars(filter_var(trim($_POST['login'])));

    $name = htmlspecialchars(filter_var(trim($_POST['name'])));

    $pass = htmlspecialchars(filter_var(trim($_POST['pass'])));

    if(mb_strlen($login) < 5 || mb_strlen($login)>90){
        print("Недопустимая длина логина");
        exit();
    }
    else if(mb_strlen($name) < 3 || mb_strlen($name)>50){
        print("Недопустимая длина логина");
        exit();
    }
    else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6){
        print("Недопустимая длина пароль(от 2 до 6)");
        exit();
    }

    $link = new mysqli($serevername, $username, $password, $bdname);

    if($link->connect_error){
        die("Connection failed: " . $link->connect_error);
    }

    $link->query("INSERT INTO `user`(`login`, `name`, `password`)
            VALUES('$login', '$name', '$pass')");
    
    $mysql->close;
?>