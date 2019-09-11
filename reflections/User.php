<?php

/**
 * 用户相关类
 * Class User
 * @package Extend
 */
class User
{
    const ROLE = 'Students';
    public $username = '';
    private $password = '';

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * 获取用户名
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * 设置用户名
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * 获取密码
     * @return string
     */
    private function getPassword()
    {
        return $this->password;
    }

    /**
     * 设置密码
     * @param string $password
     */
    private function setPassword($password)
    {
        $this->password = $password;
    }
}