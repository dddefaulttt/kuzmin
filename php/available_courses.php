<?php

session_start();

require 'php/connect_bd.php';

$username = explode(" ",$_SESSION['user']['Name']); // Получение ФИО авторизированного пользователя
unset($username[2]);                                // Убираем отчество
$username = implode(" ",$username);                 // Склеиваем Фамилию и имя

$userID = $_SESSION['user']['ID'];
$courses = mysqli_query($link,"SELECT *,
courses_users.ID AS cuID,
users.Name AS teacher,
courses.Name AS course
FROM courses_users
INNER JOIN courses
INNER JOIN users
WHERE courses_users.Course = courses.ID
AND users.ID = courses.Author
AND courses_users.User = $userID"); // запрос на получение выборки курсов доступных пользователю под которым авторизованны
for ($data = []; $row = mysqli_fetch_assoc($courses); $data[] = $row);

?>