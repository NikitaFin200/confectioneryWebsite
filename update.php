<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $login = htmlspecialchars(filter_var(trim($_POST['login'])));

    $name = htmlspecialchars(filter_var(trim($_POST['name'])));

    $pass = htmlspecialchars(filter_var(trim($_POST['pass'])));

    $link = new mysqli($serevername, $username, $password, $bdname);

    if($link->connect_error){
        die("Connection failed: " . $link->connect_error);
    }

    $result = $link->query("UPDATE `user`
                    SET `name` = '$name'
                    WHERE `password` = '$pass'");

    /*
    $usert = array("name"=>$name);

    if($result = TRUE){
        print("Привет, " . $usert['name'] . ". Вы успешно поменяли имя.");
    }
    else{
        print("No");
    }

    if(count($usert) == 0){
        print("Такой пользователь не найден");
        exit();
    }
    else{
    print("Привет, " . $usert['name'] . ". Вы успешно поменяли имя.");
    }
    */

    $mysql->close;
    header('Location: http://project/сайт/confectioneryWebsite/main.html');
?>