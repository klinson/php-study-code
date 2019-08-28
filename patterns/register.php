<?php
class Register
{
    // 树的枝干-用于储存树上的果实（实例）
    public static $objects;

    /**
     * 将实例插入注册树中
     *
     * @param $alias 对象别名-注册树中的名称
     * @param $object 对象实例
     */
    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    /**
     * 从注册树中读取实例
     *
     * @param $alias 对象别名-注册树中的名称
     *
     * @return mixed 返回的对象实例
     */
    public static function get($alias)
    {
        if (isset(self::$objects[$alias])) {
            return self::$objects[$alias];
        } else {
            echo '您要找的对象实例不存在哦' . PHP_EOL;
            return false;
        }

    }

    /**
     * 销毁注册树中的实例
     *
     * @param $alias 对象别名-注册树中的名称
     */
    public static function unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}

/**
 * Class demo 演示类
 */
class demo
{
    /*
     * 测试方法
     */
    public function test()
    {
        echo '看这里看这里' . PHP_EOL;
    }
}

// 实例化测试类，获取对象实例
$demo = new demo();
// 注册到树上
$tree = Register::set('demo', $demo);
// 取出来
$de_true = Register::get('demo');
// 测试
$de_true->test();
// 销毁
Register::unset('demo');
// 尝试再次取出来
$de_true_two = Register::get('de');
// 尝试再次测试
var_dump($de_true_two);
