<?php

require 'src/functions.php';

// Задание #1. 
// $st - массив строк
// в функции task1 второй параметр необязателен

$st = ['эйя','фьядла','йё','кюдль'];

echo 'Task 1', PHP_EOL;
echo task1($st, true);

// Задание №2.
// строка с арифметическим действием: допустимые значения + - * /

echo '<p> Task 2:', PHP_EOL;
echo task2('/', 150, 3, 5);

// Задание №3. Таблица умножения двух чисел

echo "<p> Task 3";
task3(9, 8);

// Задание №4. выводится информация о текущей дате в формате d.m.y h.i
// unixtime 24/02/2016 00.00.00.

echo "<p> Task 4";
echo '<p>Сегодня > ', date('d.m.y h.i'), PHP_EOL;
echo '<p> Unixtime 01.01.2016 is :', date_format(date_create('2016-01-01'), 'U');

// Задание №5. 
// Удаляет из строки “Карл у Клары украл Кораллы” все заглавные буквы “К”.
// Заменяет "Две" на "Три" в строке "Две бутылки лимонада"

str_replace('К', '', 'Карл у Клары украл Кораллы');

str_replace('Две', 'Три', 'Две бутылки лимонада');


// Задание №6. Создает файл test.txt и заполняет его текстом Hello again!
// вызывает функцию task6, выводящую содержимое файла на экран

$fname = 'test.txt';
$handle = fopen($fname, "w");
fwrite($handle, 'Hello again!');

if (!fclose($handle)) {
    echo 'ошибка закрытия файла';
}
echo '<p> Task 6 :';
task6($fname);
