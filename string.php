<?php
$str = 'klinson';
$array = explode('n', $str);
var_dump($array, join('n', $array), implode('n', $array));
echo 'strrev(\'klinson\') => ' . strrev($str) . PHP_EOL;
$str = ' klinson ';
var_dump(trim($str), ltrim($str), rtrim($str));
echo 'strstr(\'klinson\', \'n\') => '.strstr($str, 'n') . PHP_EOL;
echo 'number_format(100000000000) => ' . number_format(100000000000) . PHP_EOL;