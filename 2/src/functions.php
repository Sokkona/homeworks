<?php

// task1 принимает массив строк и выводит кжадую строку в отдельном параграфе
// при наличии второго параметра true выводит массив в виде объединенной строки

function task1($str, $flag = false) {
	
	$k = count ($str); 
	for ($i = 0;$i < $k; $i++) echo "<p> $str[$i]", PHP_EOL;
	
	if ($flag) {
		$un_str = '<p>'. implode ('',$str);
		return ($un_str);
	}
}

// task2 принимает переменное число аргументов
// первый: строка, указывающая арифм действие (= - * .)
// остальные: целые и/или вещественные числа
// возвращает результат этой операции над всеми числами

	
function task2 () {
	$param = func_get_args();
	$k = func_num_args(); 
	
	// $numr  -  флаг, принимает false если хоть один из переданных параметров, кроме первого строкового,
    //	не является числом либо строкой, содержащей число
	
	$numr = true;                
	for ($i = 1; $i < $k; $i++) {
		if (!is_numeric($param[$i])) $numr = false;
	}

	if ($numr) {
		switch ($param[0]) {
			case ('+'): {
				$res = 0;
				for ($i = 1; $i < $k; $i++) $res+= $param[$i];
				return ($res);
				break;
			}
			case ('-'): {
				$res = $param[1];
				for ($i = 2; $i < $k; $i++) $res-= $param[$i];
				return ($res);
				break;
			}
			case ('*'): {
				$res = 1;
				for ($i = 1;$i < $k; $i++) $res*= $param[$i];
				return ($res);
				break;
			}
			case ('/'): {
				$res = $param[1];
				for ($i = 2; $i < $k; $i++) $res/= $param[$i];
				return ($res);
				break;
			}
			default: echo 'Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами', PHP_EOL;
		}		
		
	}
	else echo 'аргументы должны быть целыми или вещественными числами', PHP_EOL;
}
	
	
// task3 принимает два целых числа и делает для них таблицу умножения
// Принадлежность к целым числам проверяется
// Ограничения на максимальное значение не устанавливаются
	
function task3 ($a,$b) {
	
	function sign ($s) {
		if ($s < 0) {
			return -1;
		}	elseif ($s === 0) {
			return 0;
		}	else return 1;
	}
	
	if (is_int($a) and is_int($b)) {
		
		echo "<table border='3'>";
		$sgn = sign($a)*sign($b);
		if ($a === 0) $a = 1; 
		if ($b === 0) $b = 1;
		
		for ($i = 1; $i <= abs($a); $i++) {
			echo '<tr>';
			for ($j = 1; $j <= abs($b); $j++) {
				echo '<td align="center">'. $sgn*$i*$j .'</td>';        
			}
    		echo '</tr>';
		}
		echo '</table>';
	}
	else echo 'вводимые числа должны быть целыми', PHP_EOL;
}

// task6. Принимает имя файла и открывает его только для чтения.
// выводит содержимое файла на экран.


function task6($file_name) {
    $handle = fopen($file_name, "r");
    echo '<p>';
    readfile('test.txt');
    fclose($handle);
}

?>
