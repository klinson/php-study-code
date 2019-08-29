<?php


// 冒泡排序
function bubbling_sort($arr)
{
    $len = count($arr);
    if ($len <= 1) return $arr;

    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = 0; $j < $len - $i -1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                $tmp = $arr[$j+1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }

    return $arr;
}

// 快速排序
function quick_sort($arr)
{
    $len = count($arr);
    if ($len <= 1) return $arr;

    $base = $arr[0];
    $left = [];
    $right = [];

    for ($i = 1; $i < $len; $i++) {
        if ($arr[$i] > $base) $right[] = $arr[$i];
        else $left[] = $arr[$i];
    }

    $left = quick_sort($left);
    $right = quick_sort($right);

    return array_merge($left, [$base], $right);
}

// 选择排序
function select_sort($arr)
{
    $len = count($arr);
    if ($len <= 1) return $arr;

    for ($i = 0; $i < $len - 1; $i++) {
        $min = $i;

        for ($j = $i+1; $j < $len; $j ++) {
            if ($arr[$min] > $arr[$j]) {
                $min = $j;
            }
        }

        if ($min !== $i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $tmp;
        }
    }

    return $arr;
}

// 运行
$i = 0;
$count = pow(2, 16);
$arr = [];
while ($i < $count) {
//    $arr[] = $count - $i;
    $arr[] = rand(0, $count * 10);
    $i++;
}
echo '乱序数组[', $count, ']', PHP_EOL;

//$arr = [19, 4, 5, 1, 22, 23, 45, 21, 6, 33];
//echo '乱序数组', "\t\t", implode(', ', $arr), PHP_EOL;

run('bubbling_sort', $arr);
run('quick_sort', $arr);
run('select_sort', $arr);


function run($function, $arr, $show_result = 0)
{
    $startTime = microtime(true);
    $res = $function($arr);
    $endTime = microtime(true);

    echo $function, '结果';

    if ($show_result) {
        echo ': ', "\t", implode(', ', $res), '; ';
    }

    echo '耗时: ', number_format($endTime - $startTime, 10), 's; ', PHP_EOL;
}