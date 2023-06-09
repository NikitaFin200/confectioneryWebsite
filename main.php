<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tortillo</title>

    <link rel="stylesheet" href="style1.css">
    <script src="myPhp.php"></script>
    <script src="update.php"></script>

</head>

<body>
    <div class="home">
    <?php require "authorization.html"; ?>
    </div>
    
    <div class="container">
        <div class="Tortillo">
            <h1>Tortillo</h1>
        </div>

        <div class = "reg">
            <a href="authorization.html">Регистрация</a>
        </div>
    </div> 

    <div class="col">
        <div class="text_above_the_cake">
            <h2>Регистрация</h2>
        </div>
        
            <form action="registration.php" method="post">
                <input type="text" class="form-control" name="login"
                id="login" placeholder="Введите логин"><br>

                <input type="text" class="form-control" name="name"
                id="name" placeholder="Введите имя"><br>

                <input type="password" class="form-control" name="pass"
                id="pass" placeholder="Введите пароль"><br>

                <button class="btn btn-success" type="submit">Зарегестрировать</button>
            </form>
    </div>
    
    <div class="container">
        <div class = "row">
            <div class="col">
                    <h2>Вывод по букве</h2>
                    <form action="5laba/searchByLetter.php" method="post">
                        <input type="text" class="form-control" name="letter"
                        id="letter" placeholder="Введите букву"><br>

                        <select name="database" id="database">
                            <option>orders</option>
                            <option>place</option>
                            <option>customer</option>
                        </select>

                        <select name="field" id="field">
                            <option>name</option>
                            <option>surname</option>
                            <option>product</option>
                            <option>filling</option>
                            <option>address</option>
                        </select>
                        <button class="btn btn-success" type="submit">Вывести</button>
                    </form>
                </div>

                <div class="col">
                    <h2>Вывод заказчика и его заказы</h2>
                    <form action="getCustomersOrders.php" method="post">
                        <input type="text" class="form-control" name="customer"
                        id="customer" placeholder="Имя"><br>

                        <input type="text" class="form-control" name="surname"
                        id="surname" placeholder="Фамилия"><br>

                        <button class="btn btn-success" type="submit">Вывести</button>
                    </form>
                </div>
        </div>
    </div>

    <div class="container">
        <!--
        <div class="entrance">
            <button type="button" onclick="myABS()">Вход</button>
        </div>

        <div class="registration">
            <button type="button" onclick="myABS()">Регистрация</button>
        </div>
    -->
        <div class="menu">
            <button type="button" onclick="myABS()">Меню</button>
        </div>

        <div class="reviews">
            <button type="button" onclick="myABS()">Отзывы</button>
        </div>

        <div class="decoration">
            <button type="button" onclick="myABS()">Оформление</button>
        </div>
    </div>

    <div class="container">
        <div class="text_above_the_cake">
            <h2>Свадебные торты</h2>
        </div>
    </div>

    <div class="container">
        <div class="cakes">
            <img class = "merry___png" src="img/sv.jpg" alt="Картинка свадебного торта">
                <form action="order.html" target="_blank">
                    <button class="but">Офромить заказ</button>
                </form>
        </div>
    </div>

    <div class="container">
        <div class="text_above_the_cake">
            <h2>Детские торты</h2>
        </div>
    </div>

    <div class="container">
        <div class="cakes">
            <img class = "child___png" src="img/amnyam.jpg" alt="Картинка детского торта">
            <button class="but">Офромить заказ</button>
        </div>
    </div>

    <div class="container">
        <div class="text_above_the_cake">
            <h2>3d торты</h2>
        </div>
    </div>
    
    <div class="container">
        <div class="cakes">
            <img class = "3d___png" src="img/mountains.jpg" alt="Картинка 3d торта">
            <button class="but">Офромить заказ</button>
        </div>
    </div>
</body>
</html>