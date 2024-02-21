<!DOCTYPE html>
<?php

    include 'php/login.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/generalStyle.css">
</head>
<body>
    
<main>
    <form method="POST" class="loginBlock">
        <img class="loginLogo" src="img/logo.png" alt="">
        <input type="text" name="login" class="loginLogin" placeholder="Логин" value="<?if (!empty($login)) echo $login;?>">
        <input type="password" name="password" class="loginPassword" placeholder="Пароль">
        
        <div class="loginBtn"> 
            <input name="submit" type="submit" class="loginEnter" value="Войти">
            <a href="" id="ForgotPass">Забыл пароль?</a>
        </div>
        <h4 class="enterFalse">
            <?php 
                if (!empty($login)){
                    echo $err;
                }
            ?>
        </h4>
    </div>
</main>
</body>
</html>
