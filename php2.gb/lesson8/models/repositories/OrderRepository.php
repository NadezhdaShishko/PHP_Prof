<?php

namespace app\models\repositories;

use app\models\Repository;
use app\models\entities\Orders;

class OrderRepository extends Repository
{

    public function getEntityClass() {
        return Orders::class;
    }

    public function getTableName() {
        return 'orders';
    }
}