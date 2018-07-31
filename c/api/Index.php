<?php

namespace c\api;

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
}