<?php
    $serevername = "localhost";
    $username = "root";
    $password = "";
    $bdname = "bd";

    $letter = htmlspecialchars(filter_var(trim($_POST['letter'])));

    $database = htmlspecialchars(filter_var(trim($_POST['database'])));

    $field = htmlspecialchars(filter_var(trim($_POST['field'])));
    /*$pass = md5($pass."nnniikita667872");*/

    $link = new mysqli($serevername, $username, $password, $bdname);

    if($link->connect_error){
        die("Connection failed: " . $link->connect_error);
    }

    /*$sql="SELECT `id`,`product` FROM `orders` 
                WHERE `product` LIKE '%$letter%'";
      */      
    
    /*
    $sql="SELECT `id`, $field FROM `customer` 
    WHERE $field LIKE '%$letter%'";
    $result = mysqli_query($link, $sql);
    */
    
    $sql=("SELECT `id`, `$field` FROM `$database` 
    WHERE $field LIKE '%$letter%'");

    $result = mysqli_query($link, $sql);
    
    if($link->query($sql) === FALSE){
        print("There is no such field in the selected table");
    }

    while($row = mysqli_fetch_assoc($result))// получаем все строки в цикле по одной
        {
            echo '<p>Запись id = '.$row['id'].'. Текст: '.$row[$field].'</p>';// выводим данные
        }

    $mysql->close;
?>