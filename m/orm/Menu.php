<?php

namespace m\orm;

use m\config\MysqlLocal;
use Medoo\Medoo;

/**
 * Class Menu
 * @package m\service
 */
class Menu
{
    /**
     * 查询菜单列表
     * @return array
     */
    public function getList()
    {
        $db = new Medoo(MysqlLocal::cfg());
        $querySql = <<<SQL
SELECT * FROM menu WHERE id>:id;
SQL;
        $result = $db->query($querySql, [':id' => 100])->fetchAll();
        return $result;
    }
}