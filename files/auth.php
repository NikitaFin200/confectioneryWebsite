<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $login = htmlspecialchars(filter_var(trim($_POST['login'])));

    $pass = htmlspecialchars(filter_var(trim($_POST['pass'])));

    $link = new mysqli($serevername, $username, $password, $bdname);

    $result = $link->query("SELECT * FROM `user` WHERE `login` = 
    '$login' AND `password` = '$pass'");

    $usert = $result->fetch_array();

    if(count($usert) == 0){
        print("Такой пользователь не найден");
        exit();
    }

    setcookie('user', $usert['name'],  time() + 3600);    
    $mysql->close;
?>