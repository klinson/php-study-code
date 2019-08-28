<?php
/**
 * 微博提供的登录类
 * Class Weibo
 */
class Weibo {
    public function myLogin($username,$password){
        echo $username.' is logining weibo with password '. $password. PHP_EOL;
    }
}

/**
 * 微信提供的登录类
 * Class Weixin
 */
class Weixin {

    public function login2($config){
        echo $config['username'].' is logining weixin with password '. $config['password']. PHP_EOL;
    }
}

/**
 * 我们设计的适配器接口
 * Interface Adapter
 */
interface Adapter {
    public function login($username, $password);
}

/**
 * 微博的适配器类
 * Class WeiboAdapter
 */
class WeiboAdapter extends Weibo implements Adapter {

    public function login($username, $password) {
        $this->myLogin($username, $password);
    }
}

/**
 * 微信的适配器类
 * Class WeixinAdapter
 */
class WeixinAdapter extends WeiXin implements Adapter {

    public function login($username, $password) {
        $this->login2(['username'=>$username, 'password'=> $password]);
    }
}

/**
 * 主业务类
 * Class User
 */

class User {
    private $adapter;

    public function setAdapter(Adapter $adapter) {
        $this->adapter = $adapter;
    }

    public function login($username, $password){
        $this->adapter->login($username, $password);
    }
}

$weiboUser = new User();
// 实例化微博适配器
$adapter = new WeiboAdapter();
// 设置适配器
$weiboUser->setAdapter($adapter);
$weiboUser->login('klinson', '123456');

$Wxuser = new User();
// 实例化微博适配器
$adapter = new WeixinAdapter();
// 设置适配器
$Wxuser->setAdapter($adapter);
$Wxuser->login('klinson', '123456');