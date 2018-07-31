<?php

namespace m\service;

use m\orm\Menu;

/**
 * Created by PhpStorm.
 * User: kexiangzhang
 * Date: 2018/7/31
 * Time: 下午12:12
 */
class MenuFilter
{
    /**
     * 获取游客菜单
     * @return array
     */
    public function guestMenu()
    {
        $m = new Menu();
        return $m->getList();
    }
}