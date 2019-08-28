<?php
$filepath = __FILE__;
echo '__FILE__ => ' . $filepath . PHP_EOL;
echo 'basename(__FILE__) => ' . basename($filepath) . PHP_EOL;
echo 'dirname(__FILE__) => ' . dirname($filepath) . PHP_EOL;
echo  'pathinfo(__FILE__) => ' . PHP_EOL;
var_dump(pathinfo($filepath));