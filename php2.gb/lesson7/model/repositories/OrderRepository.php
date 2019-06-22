<?php

namespace \app\model\repositories;

use app\model\Repository;
use app\model\entities\Orders;

class OrderRepository extends Repository
{

    public function getEntityClass() {
        return Orders::class;
    }

    public static function getTableName() {
        return 'orders';
    }

}