<?php

function reduction($val){ /// функция для сокращения ФИО
    $temp_val = explode(" ",$val); // Строку с ФИО преобразуем в массив
    for ($i = 1; $i <= 2; $i++){
        $t = $temp_val[$i]; // Записываем имя или отчество в переменную
        
        if (!empty(preg_match('/^[A-z]+$/',$t))){
            $temp_val[$i] = $t[0].'.';
        }
        else{
            $temp_val[$i] = $t[0].$t[1].'.'; // Перезаписываем только первый символ и добавляем точку
        }     
    }
    $val = implode(" ",$temp_val); // Преобразуем Массив обратно в строку

    return($val);
}

function normaldate($date){ /// Функция для преобразования даты к читабельному виду (на русском)
    $month = [
        'Января',
        'Февраля',
        'Марта',
        'Апреля',
        'Мая',
        'Июня',
        'Июля',
        'Августа',
        'Сентября',
        'Октября',
        'Ноября',
        'Декабря'
    ];/// Массив месяцев на русском
    $daysWeek = [
        'Monday'=>'Понедельник',
        'Tuesday'=>'Вторник',
        'Wednesday'=>'Среда',
        'Thursday'=>'Четверг',
        'Friday'=>'Пятница',
        'Saturday'=>'Суббота',
        'Sunday'=>'Воскресенье',
    ];/// Массив дней недели на русском
    
    $date = explode("-",$date);

    $CurrentDate = date("l j F Y", mktime(0, 0, 0, $date[1], $date[2], $date[0]));
    $CurrentDate = str_replace(date("F", mktime(0, 0, 0, $date[1], $date[2], $date[0])),$month[$date[1]-1],$CurrentDate);
    $CurrentDate = str_replace(date("l", mktime(0, 0, 0, $date[1], $date[2], $date[0])),$daysWeek[date("l", mktime(0, 0, 0, $date[1], $date[2], $date[0]))],$CurrentDate);
    
    return $CurrentDate;
}

?>