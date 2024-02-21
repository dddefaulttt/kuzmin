<?php 

session_start();

include_once 'connect_bd.php';

$username = explode(" ",$_SESSION['user']['Name']); // Получение ФИО авторизированного пользователя
unset($username[2]);                                // Убираем отчество
$username = implode(" ",$username);                 // Склеиваем Фамилию и имя

$d = $_GET['d']; /// получаем id новости

$news = mysqli_query($link,"SELECT * FROM news INNER JOIN users WHERE users.ID = news.Author AND news.ID = $d");

for ($newsdata = []; $row = mysqli_fetch_assoc($news); $newsdata[] = $row); /// получаем из бд запросом нужную новость

?>