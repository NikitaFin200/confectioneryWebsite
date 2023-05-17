<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $customer = htmlspecialchars(filter_var(trim($_POST['customer'])));

    $surname = htmlspecialchars(filter_var(trim($_POST['surname'])));


    /*$pass = md5($pass."nnniikita667872");*/

    $link = new mysqli($serevername, $username, $password, $bdname);

    if($link->connect_error){
        die("Connection failed: " . $link->connect_error);
    }
    /*
    $sql=("SELECT `id`, `name` FROM `customer`

            WHERE `name` = '$customer'");
    */

    $sql=("SELECT customer.`id`, customer.`name`,customer.`surname`, orders.`id`, orders.`product` FROM `customer`
            INNER JOIN `orders`
            ON customer.`orders` = orders.`id` 
            WHERE customer.`name` = '$customer' AND customer.`surname` = '$surname'");

    $result = mysqli_query($link, $sql);
    
    if($link->query($sql) === FALSE){
        print("There is no such field in the selected table");
    }

    while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
        {
            echo '<p>'.' Имя: '.$row['name'].' Фамилия: '.$row['surname'].'. id заказа = '.$row['id'].'. Продукт: '.$row['product'].'</p>';// выводим данные
        }

    $mysql->close;
?>