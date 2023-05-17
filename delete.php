<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $login = htmlspecialchars(filter_var(trim($_POST['login'])));

    $pass = htmlspecialchars(filter_var(trim($_POST['pass'])));

    $link = new mysqli($serevername, $username, $password, $bdname);

    if($link->connect_error){
        die("Connection failed: " . $link->connect_error);
    }

    $result = $link->query("DELETE FROM `user`
                    WHERE `login` = '$login' AND
                    `password` = '$pass'");

$mysql->close;
header('Location: http://project/сайт/confectioneryWebsite/main.html');
?>