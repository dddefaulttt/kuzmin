<!DOCTYPE html>
<?php

include 'php/main.php';
include_once 'php/formatting.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/generalStyle.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Главная</title>
</head>
<body>
    <header>
        <a href="main.php"><img class="headerLogo" src="img/logo.png" alt=""></a>
        <div class="headerNameBlock">
            <h3 class="h3ImpB"><?echo $username;?></h3>
            <img class="arrowBurger" src="img/arrowBurger.svg" alt="">
        </div>
    </header>

<!---------------------------- БУРГЕР МЕНЮ ---------------------------->
<div class="menu">
        <div class="modalWrapper"></div>
        <div class="modalMenu ">
            <div class="openProfile modalMenuElement"><h4>Профиль</h4></div>
            <div class="modalMenuElement"><h4>Оценки</h4></div>
            <div class="modalMenuElement"><h4>Личные файлы</h4></div>
            <a href="index.php" style="border-radius: 0px 0px 5px 5px;"><h4>Выйти</h4></a>
        </div>
</div>

<!---------------------------- ЛИЧНЫЙ ПРОФИЛЬ ---------------------------->
<div class="profile">

        <div class="modalProfile">

            <div class="modalProfileHeader">
                <h1 class="h1G">Профиль</h1>
                <img class="closeModal" src="/img/close.png" alt="">
            </div>

            <div class="line" style="margin-top: 0;"></div>
            
            <div class="modalProfileBody">
                <div class="modalProfileName">
                    <h4 class="h4G" style="margin-top: 0;">ФИО</h4>
                    <p><?echo $data_profile[0]['UserName']?></p>
                </div>
                <div class="modalProfileMail">
                    <h4 class="h4G">Почта</h4>
                    <p><?echo $data_profile[0]['Email']?></p>
                </div>
                <div class="modalProfileGroup">
                    <h4 class="h4G">Группа</h4>
                    <p><?echo $data_profile[0]['ClasseName']?></p>
                </div>
            </div>
            
            <div class="modalProfileButton">
                <div class="editMail"><h4>Изменить почту</h4></div>
                <div class="editPassword"><h4>Изменить пароль</h4></div>
            </div>
        </div>

<!---------------------------- РЕДАКТИРОВАНИЕ ПОЧТЫ ---------------------------->

        <div class="modalEditMail">

            <div class="modalEditMailHeader">
                <h1 class="h1G">Редактирование почты</h1>
                <img class="closeModal" src="/img/close.png" alt="">
            </div>

            <div class="line" style="margin-top: 0;"></div>

            <div class="modalEditMailBody">
                <form action="">
                    <h4 class="h4G">Старая почта</h4>
                    <input type="text" value="<?echo $data_profile[0]['Email']?>" readonly class="mailCheck" name="" id="">
                    <h4 class="h4G" style="margin-top: 30px;">Новая почта</h4>
                    <input type="text" class="mailEdit" name="" id="">
                </form>
            </div>

            <div class="modalEditMailButton">
                <div class="backProfile"><h4>Назад</h4></div>
                <div class="confirmMail"><h4>Подтвердить</h4></div>
            </div>

        </div>

<!---------------------------- РЕДАКТИРОВАНИЕ ПАРОЛЯ ---------------------------->

        <div class="modalEditPassword">

            <div class="modalEditPasswordHeader">
                <h1 class="h1G">Редактирование пароля</h1>
                <img class="closeModal" src="/img/close.png" alt="">
            </div>

            <div class="line" style="margin-top: 0;"></div>

            <div class="modalEditPasswordBody">
                <form action="">
                    <h4 class="h4G">Старый пароль</h4>
                    <input type="text" class="oldPassword" name="" id="">
                    <h4 class="h4G" style="margin-top: 30px;">Новый пароль</h4>
                    <input type="text" class="newPassword" name="" id="">
                    <h4 class="h4G" style="margin-top: 30px;">Подтверждение нового пароля</h4>
                    <input type="text" class="confirmNewPassword" name="" id="">
                </form>
            </div>

            <div class="modalEditPasswordButton">
                <div class="backProfile"><h4>Назад</h4></div>
                <div class="confirmPassword"><h4>Подтвердить</h4></div>
            </div>

        </div>

</div>





    <main>
        
        <!---------------------------- БЛОК ВАЖНОЕ ---------------------------->
        <?php if(!empty($newsdata)){?>
        <div class="important">
            <h1 class="h1G">Важное</h1>
            <div class="contentBlock">
                <?php foreach($newsdata as $newsval){?>
                <div class="importantNews">
                    <h3><?echo normaldate($newsval['Date']);?></h3>
                    <div class="importantContent">
                        <img class="importantLogo" src="img/imortant.png" alt="">
                        <div class="importantText">
                        <h3 class="h2G"><?echo $newsval['Title'];?></h3>
                            <h4><?echo reduction($newsval['Name'])?></h4>
                            <p><?echo $newsval['Description']?></p>
                        </div>
                    </div>
                    <a class="importantFull" href="ad.php?d=<?echo $newsval['IDN']?>"><h4 class="h4G">Подробнее</h4><img src="img/arrow.png" alt=""></a>
                    <div class="line"></div>
                </div>
                <?}?>
            </div>
        </div>
        <?}?>
        <!---------------------------- БЛОК КУРСЫ ---------------------------->
        
        <div class="сourses">
            <h1 class="h1G">Недавно посещенные курсы</h1>
            <div class="contentBlock">
                <div class="сoursesContent">
                    <?php
                        foreach ($data as $val){
                    ?>
                            <div class="coursesItems">
                                <div class="coursesImg"></div>
                                <h4 class="h4G"><?echo $val['course'];?></h4>
                                <p><?echo reduction($val['teacher']);?></p>
                            </div>
                    <?
                        }
                    ?>
                </div>
                <div class="coursesFull">
                    <a href="courses.php"><h4 class="h4G">Все курсы </h4><img src="img/arrow.png" alt=""></a>
                </div>
                
            </div>
        </div>

        <!---------------------------- БЛОК ШКАЛА ВРЕМЕНИ ---------------------------->

        <div class="timeScale">
            <h1 class="h1G">Шкала времени</h1>
            <div class="contentBlock">
                <div class="timeScaleContent">
                    
                    
                    <div class="filter" id="filter">
                        <div class="filterSelectItem" id="filterSelectItem">
                            <p>Дата по убыванию</p>
                            <svg class="filterArrow" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.5" viewBox="0 0 24 24">
                                <path class="filterArrowPath" d="m6 9 6 6 6-6" stroke="black" stroke-linecap="round" stroke-linejoin="round" class="stroke-000000"/>
                            </svg>
                        </div>
                        <div class="filterItem">
                            <div class="filterItemOne" style="padding: 27px 15px 10px 15px;" id="filterItemOne"><p>Дата по убыванию</p></div>
                            <div class="filterItemTwo" id="filterItemTwo"><p>Дата по возврастанию</p></div>
                        </div>
                    </div>
                    <div class="line"></div>

                <div id="filter" >
                    <? foreach($data_tasks as $val_tasks){?>
                    <div class="timeScaleItems" >
                            <h3><?echo normaldate($val_tasks['Date_']);?></h3>
                            <div class="rSContent">
                                <img class="timeScaleArrow" src="img/arrowBurger.svg" alt="">
                                <p class="timeScaleTime">00:00</p>
                                <img class="timeScaleLogo" src="/img/timeScale.png" alt="">
                                <div class="tSC">
                                    <div class="timeScaleText">
                                        <h3 class="h2G"><?echo $val_tasks['task'];?></h3>
                                        <p><?echo $val_tasks['type_'];?> - <?echo $val_tasks['course_'];?> <?echo reduction($val_tasks['name_'])?></p>
                                    </div>
                                    <div class="timeScaleStatus"><h4>Просрочено</h4></div>
                                </div>
                            </div>
                            <div class="timeScaleAccordion">
                                <a class="accordionItem" href=""><h4>Просмотреть задание</h4></a>
                                <a class="accordionItemTwo" href=""><h4>Добавить ответ на задание</h4></a>
                            </div>
                        <div class="line"></div>
                    </div>
                        <?}?>
                </div>
                </div>
            </div>
        </div>

    </main>
</body>
<script src="js/modal.js"></script>
<script src="js/main.js"></script>
</html>