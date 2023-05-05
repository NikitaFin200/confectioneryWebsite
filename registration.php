<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $name = htmlspecialchars(filter_var(trim($_POST['name'])));

    $surname = htmlspecialchars(filter_var(trim($_POST['surname'])));

    $age = htmlspecialchars(filter_var(trim($_POST['age'])));

    $email = htmlspecialchars(filter_var(trim($_POST['email'])));
    
    $login = htmlspecialchars(filter_var(trim($_POST['login'])));

    $pass = htmlspecialchars(filter_var(trim($_POST['pass'])));

    $pass2 = htmlspecialchars(filter_var(trim($_POST['pass2'])));


    if(!(preg_match("/^[А-Яа-я]+$/u", $name))){
        print("В имени могут быть только русские буквы ");
        exit();
    }

    if(!(preg_match("/^[А-Яа-я]+$/u", $surname))){
        print("В фамилии могут быть только русские буквы ");
        exit();
    }

    if($age<10){
        print("Возраст должен быть больше 9 лет");
        exit();
    }

    if (!(preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i', $email))) {
        print("Недопустимый email");
        exit();
    } 

    if(!(preg_match('/^[a-zA-Z]{1,}[0-9]{1,}$/', $login))){
        print("Неверный логин. Снчала должны быть буквы, а затем цифры.");
        exit();
    }

    if(mb_strlen($login)<6 || mb_strlen($login)>10){
        print("Длинна логина должна быть от 6 до 10");
        exit();
    }

    if(((preg_match('/^[a-z0-9]+$/',$pass)))){
        print("Пароль должен состоять из прописных букв, заглавных больших и цифр.");
        exit();
    }

    if(mb_strlen($pass)<9){
        print("Пароль должен быть длинной больше 8.");
        exit();
    }

    if($pass!=$pass2){
        print("Пароли не совпадают");
        exit();
    }
    
    /*$pass = md5($pass."nnniikita667872");*/

    $link = new mysqli($serevername, $username, $password, $bdname);

    if($link->connect_error){
        die("Connection failed: " . $link->connect_error);
    }

    $sql=("SELECT `login` FROM `user` WHERE `login`= '$login'");

    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result)>0){
        print("Такой логин уже используется другим пользователем.");
        exit();
    }

    $link->query("INSERT INTO `user`(`name`, `surname`, `age`, `email`,`login`,`password`)
            VALUES('$name', '$surname', '$age', '$email', '$login', '$pass')");
    
    $mysql->close;

    header('Location: http://project/сайт/confectioneryWebsite/main.html');
?>