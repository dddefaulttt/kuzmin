<!DOCTYPE html>

<?php

include 'php/user.php';
include_once 'php/formatting.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/importantNews.css">
    <link rel="stylesheet" href="css/generalStyle.css">
    <title>Новости</title>
</head>
<body>
    <header>
        <a href=""><img class="headerLogo" src="img/logo.png" alt=""></a>
    </header>

    <main>
        <div>
            <a class="newsBack" href="main.php"><img src="img/arrow.png" alt=""><h3>Назад</h3></a>
        </div>
        <?php foreach($user as $unit){?>
        <div>
            <h3><?echo $unit['user_name'];?></h3>
            <h3><?echo $unit['user_role'];?></h3>
            <h3><?echo $unit['user_class'];?></h3>
            <h3><?echo $unit['Email'];?></h3>
            <a href="test.php">Сменить пароль</a>
            <a href="">Сменить почту</a>
        </div>
        <?php };?>
    </main>
</body>
</html>