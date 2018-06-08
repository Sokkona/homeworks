<?php

include '2l.php';

echo 'Всего рисунков: ', ALL_PICS, PHP_EOL;
echo 'Фломастером: ', MARKER_PICS, PHP_EOL;
echo 'Карандашом: ',PENCIL_PICS, PHP_EOL;

echo 'Для отыскания числа рисунков красками необходимо вычесть из общего числа рисунков (', ALL_PICS, ')'.PHP_EOL;
echo 'cуммарное число рисунков, выполненных не красками(', MARKER_PICS+PENCIL_PICS, ') '.PHP_EOL;

echo 'Таким образом, рисунков красками: ', ALL_PICS-MARKER_PICS-PENCIL_PICS;
