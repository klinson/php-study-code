<?php
include_once 'User.php';

// 注意：创建反射类时传送的类名，必须包含完整的命名空间，即使使用了 use 关键字。否则找不到类名会抛出异常

// 访问
$class = new ReflectionClass('User');  // 将类名User作为参数，即可建立User类的反射类
$properties = $class->getProperties();  // 获取User类的所有属性，返回ReflectionProperty的数组
$property = $class->getProperty('password'); // 获取User类的password属性ReflectionProperty
$methods = $class->getMethods();   // 获取User类的所有方法，返回ReflectionMethod数组
$method = $class->getMethod('getUsername');  // 获取User类的getUsername方法的ReflectionMethod
$constants = $class->getConstants();   // 获取所有常量，返回常量定义数组
$constant = $class->getConstant('ROLE');   // 获取ROLE常量
$namespace = $class->getNamespaceName();  // 获取类的命名空间
$comment_class = $class->getDocComment();  // 获取User类的注释文档，即定义在类之前的注释
$comment_method = $class->getMethod('getUsername')->getDocComment();  // 获取User类中getUsername方法的注释文档

var_dump($class, $properties, $property, $methods, $method, $constants, $constant, $namespace, $comment_class, $comment_method);