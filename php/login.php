<?php

require 'connect_bd.php';

session_start();

if (isset($_POST['submit'])){
    
    if  (!empty($_POST['login']) and !empty($_POST['password'])){
        
        $login = $_POST['login'];
        $password = $_POST['password'];
        $verification = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
        $result = mysqli_query($link,$verification);
        $user = mysqli_fetch_assoc($result);
    
        if  (!empty($user)){
            $_SESSION['auth'] = true;
            $_SESSION['user'] = $user;
            header('location:main.php');
        }
        else{
            $err = 'Не верный логин или пароль';
            $login = $_POST['login'];
            // $_SESSION['errors_auth'] = 'Не верный логин или пароль';
            // $_SESSION['login'] = $login;
            // header('location:/');
        }
    }
    else{
         $_SESSION['login'] = null;
         unset($_SESSION['errors_auth']);
    }

}





?>