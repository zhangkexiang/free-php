<?php

namespace c\web;
/**
 * api demo
 * Class Index
 * @package c\home
 */
class Index
{
    /**
     * 构造方法
     * Index constructor.
     */
    public function __construct()
    {
    }

    /**
     * 示例html页面
     * 需要模版引擎对自己找自己加
     * 也可以不用controller 直接静态文件请求
     */
    public function index()
    {
        include(__DIR__ . "/../../v/welcome.html");
    }

}