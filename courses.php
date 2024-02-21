<!DOCTYPE html>
<?php

include 'php/available_courses.php';
include_once 'php/formatting.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/allCourses.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/generalStyle.css">
    <title>Курсы</title>
</head>
<body>
<header>
        <a href="main.php"><img class="headerLogo" src="img/logo.png" alt=""></a>
        <div class="headerNameBlock">
            <h3 class="h3ImpB"><?echo $username;?></h3>
            <img class="arrowBurger" src="img/arrowBurger.png" alt="">
        </div>
    </header>

<!---------------------------- БУРГЕР МЕНЮ ---------------------------->
<div class="menu">
        <div class="modalWrapper"></div>
            <div class="modalMenu">
                <a href=""><h4>Профиль</h4></a>
                <a href=""><h4>Оценки</h4></a>
                <a href=""><h4>Личные файлы</h4></a>
                <a href="index.php" style="border-radius: 0px 0px 5px 5px;"><h4>Выйти</h4></a>
        </div>
</div>

    <main>
        <div class="blockBack">
            <a class="allCoursesBack" href="main.php"><img src="img/arrow.png" alt=""><h3>Назад</h3></a>
        </div>

        <!---------------------------- БЛОК ВСЕ КУРСЫ ---------------------------->

        <div class="sectionAllCourses">
                <h1 class="h1G">Все курсы</h1>
            <div class="contentBlock">
                <div class="сoursesContent">
                    <?php foreach ($data as $val){?>
                            <div class="coursesItems">
                                <div class="coursesImg"></div>
                                <h4 class="h4G"><?echo $val['course'];?></h4>
                                <p><?echo reduction($val['teacher']);?></p>
                            </div>
                    <?    } ?>
                </div>
            </div>
        </div>
        <div></div>
    </main>
</body>
<script src="js/modal.js"></script>
</html>