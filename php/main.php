<?php

session_start();

require 'php/connect_bd.php';

$username = explode(" ",$_SESSION['user']['Name']); // Получение ФИО авторизированного пользователя
unset($username[2]);                                // Убираем отчество
$username = implode(" ",$username);                 // Склеиваем Фамилию и имя

$news = mysqli_query($link,"SELECT *, news.ID AS IDN 
FROM news 
INNER JOIN users 
WHERE users.ID = news.Author");
for ($newsdata = []; $row = mysqli_fetch_assoc($news); $newsdata[] = $row); /// получение новостей из бд

$userID = $_SESSION['user']['ID'];

$user_profile = mysqli_query($link,"SELECT *, 
classes.Name AS ClasseName,
Users.Name AS UserName
FROM Users
INNER JOIN classes ON classes.ID = Users.class
WHERE Users.ID = $userID");
for ($data_profile = []; $row_profile = mysqli_fetch_assoc($user_profile); $data_profile[] = $row_profile);

$courses = mysqli_query($link,"SELECT *,
courses_users.ID AS cuID,
users.Name AS teacher,
courses.Name AS course
FROM courses_users
INNER JOIN courses
INNER JOIN users
WHERE courses_users.Course = courses.ID
AND users.ID = courses.Author
AND courses_users.User = $userID
ORDER BY courses_users.Time_Enter DESC"); // запрос на получение выборки курсов доступных пользователю под которым авторизованны
for ($data = []; $row = mysqli_fetch_assoc($courses); $data[] = $row);

$tasks = mysqli_query($link,"SELECT tasks.ID AS id, 
tasks.Name AS task, 
types_tasks.Name AS type_, 
chapter.Name AS chapter_, 
courses.Name AS course_, 
users.Name AS name_,
tasks.Date_ AS Date_ 
FROM tasks 
INNER JOIN types_tasks ON types_tasks.ID = tasks.Type 
INNER JOIN chapter_tasks ON tasks.ID = chapter_tasks.Task 
INNER JOIN chapter ON chapter.ID = chapter_tasks.Chapter 
INNER JOIN courses_сhapter ON chapter.ID = courses_сhapter.Chapter 
INNER JOIN courses ON courses.ID = courses_сhapter.Course 
INNER JOIN courses_users ON courses.ID = courses_users.Course 
INNER JOIN users ON users.ID = courses.Author 
WHERE courses_users.User = '$userID'
ORDER BY Date_ DESC"); // запрос на получение выборки заданий для шкалы времени

for ($data_tasks = []; $row_tasks = mysqli_fetch_assoc($tasks); $data_tasks[] = $row_tasks);

// $tasksR = mysqli_query($link,"SELECT tasks.ID AS id, 
// tasks.Name AS task, 
// types_tasks.Name AS type_, 
// chapter.Name AS chapter_, 
// courses.Name AS course_, 
// users.Name AS name_,
// tasks.Date_ AS Date_ 
// FROM tasks 
// INNER JOIN types_tasks ON types_tasks.ID = tasks.Type 
// INNER JOIN chapter_tasks ON tasks.ID = chapter_tasks.Task 
// INNER JOIN chapter ON chapter.ID = chapter_tasks.Chapter 
// INNER JOIN courses_сhapter ON chapter.ID = courses_сhapter.Chapter 
// INNER JOIN courses ON courses.ID = courses_сhapter.Course 
// INNER JOIN courses_users ON courses.ID = courses_users.Course 
// INNER JOIN users ON users.ID = courses.Author 
// WHERE courses_users.User = '$userID'
// ORDER BY Date_ ASC"); // запрос на получение выборки заданий для шкалы времени

// for ($data_tasksR = []; $row_tasksR = mysqli_fetch_assoc($tasksR); $data_tasksR[] = $row_tasksR);
?>