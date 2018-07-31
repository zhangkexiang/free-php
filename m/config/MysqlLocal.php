<?php

namespace m\config;

/**
 * Class MysqlLocal
 * @package m\config
 */
class MysqlLocal
{
    /**
     * 该包的驱动
     * https://medoo.lvtao.net/index.php
     * @return array
     */
    public static function cfg()
    {
        return [
            'database_type' => 'mysql',
            'database_name' => 'template',
            'server' => 'mysql.docker',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8'
        ];
    }
}