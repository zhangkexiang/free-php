<?php

namespace c\api;

use m\service\MenuFilter;

/**
 * api demo
 * Class Index
 * @package c\api
 */
class Index
{
    /**
     * Index constructor.
     */
    public function __construct()
    {
        header('Content-type: application/json');
    }

    /**
     * 示例 api请求demo
     */
    public function auto()
    {
        echo json_encode(['code' => 200, 'msg' => "success"]);
    }

    /**
     * mysql 示例:查询菜单
     */
    public function menu()
    {
        $service = new MenuFilter();
        echo json_encode($service->guestMenu());
    }
}