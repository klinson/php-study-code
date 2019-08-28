<?php
class Db
{
    protected static $instance;

    public static function getInstance($config = [])
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    public function __construct($config = [])
    {
        // TODO:: 数据库连接操作

        echo '这里已经完成数据库的连接！' . PHP_EOL;
    }

    public function getData($table)
    {
        // TODO:: 数据库读取数据操作

        echo "这里获取了表 [ {$table} ] 的数据了！" . PHP_EOL;
    }
}

Db::getInstance()->getData('klinson0');
Db::getInstance()->getData('klinson1');
Db::getInstance()->getData('klinson2');