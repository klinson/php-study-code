<?php
include_once 'User.php';

// 注意：创建反射类时传送的类名，必须包含完整的命名空间，即使使用了 use 关键字。否则找不到类名会抛出异常

// 访问
$class = new ReflectionClass('User');  // 将类名User作为参数，即可建立User类的反射类
$instance = $class->newInstance('youyou', '***');  // 创建User类的实例
var_dump($instance);
$instance->setUsername('youyou_2');  // 调用User类的实例调用setUsername方法设置用户名
$value = $instance->getUsername();   // 用过User类的实例调用getUsername方法获取用户名
echo $value;
echo "\n";   // 输出 youyou_2

$class->getProperty('username')->setValue($instance, 'youyou_3');  // 通过反射类ReflectionProperty设置指定实例的username属性值
$value = $class->getProperty('username')->getValue($instance);  // 通过反射类ReflectionProperty获取username的属性值
echo $value;
echo "\n";   // 输出 youyou_3

$class->getMethod('setUsername')->invoke($instance, 'youyou_4'); // 通过反射类ReflectionMethod调用指定实例的方法，并且传送参数
$value = $class->getMethod('getUsername')->invoke($instance);    // 通过反射类ReflectionMethod调用指定实例的方法
echo $value;
echo "\n";   // 输出 youyou_4

try {
    $property = $class->getProperty('password');
    $property->setAccessible(true);   // 修改 $property 对象的可访问性
    $property->setValue($instance, 'password_2');  // 可以执行
    $value = $property->getValue($instance);     // 可以执行
    echo $value;
    echo "\n";   // 输出 password_2
    $class->getProperty('password')->setAccessible(true);    // 修改临时ReflectionProperty对象的可访问性
    $class->getProperty('password')->setValue($instance, 'password');// 不能执行，抛出不能访问异常
    $value = $class->getProperty('password')->getValue($instance);   // 不能执行，抛出不能访问异常
    $value = $instance->password;   // 不能执行，类本身的属性没有被修改，仍然是private
} catch (Exception $e) {
    echo $e->getMessage() . ':' . $e->getLine();
}