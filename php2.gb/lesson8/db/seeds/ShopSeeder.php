<?php


use Phinx\Seed\AbstractSeed;

class ShopSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $sql = 'TRUNCATE basket';
        $result = $this->adapter->query($sql);
        $sql = 'TRUNCATE orders';
        $result = $this->adapter->query($sql);
        $sql = 'TRUNCATE products';
        $result = $this->adapter->query($sql);
        $products = [
            [
                'name' => 'Гамбургер',
                'description' => 'Булка с котлетой из говядины',
                'price' => '75'
            ],
            [
                'name' => 'Чизбургер',
                'description' => 'Булка с котлетой из говядины и сыром',
                'price' => '85'
            ],
            [
                'name' => 'Чикенбургер',
                'description' => 'Булка с куриной котлетой',
                'price' => '70'
            ],
            [
                'name' => 'Фишбургер',
                'description' => 'Булка с котлетой из рыбы',
                'price' => '90'
            ],
            [
                'name' => 'Картофель фри',
                'description' => 'Картофель брусочками, жареный во фритюре',
                'price' => '45'
            ],
            [
                'name' => 'Картофель по-домашнему',
                'description' => 'Картофель дольками',
                'price' => '52'
            ],
            [
                'name' => 'Пепси',
                'description' => 'Напиток газированный',
                'price' => '60'
            ],
            [
                'name' => 'Кола',
                'description' => 'Напиток газированный',
                'price' => '60'
            ],
            [
                'name' => 'Фанта',
                'description' => 'Напиток газированный',
                'price' => '60'
            ],
        ];
        $this->table('products')->insert($products)->save();

        $sql = 'TRUNCATE users';
        $result = $this->adapter->query($sql);
        $users = [
            [
                'login' => 'admin',
                'pass' => admin,
                'hash' => password_hash(admin, PASSWORD_DEFAULT),
                'role' => 1
            ],
            [
                'login' => 'user',
                'pass' => 123,
                'hash' => password_hash(123, PASSWORD_DEFAULT),
                'role' => 2
            ],
        ];
        $this->table('users')->insert($users)->save();
    }
}
