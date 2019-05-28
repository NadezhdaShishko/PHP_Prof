<?php

class Goods 
{
    protected $id;
    protected $name;
    protected $brand;
    protected $description;
    protected $price;

    public function __construct($id, $name, $brand, $description, $price) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->description = $description;
        $this->price = $price;

    }

    function info() 
    {
        echo "
        <h3> Карточка товара: </h3>
            Название: {$this->name}. </br>
            Бренд: {$this->brand}. </br>
            Описание: {$this->description}. </br>
            Цена: {$this->price}. </br>";
    }

    
}

class Women extends Goods 
{
    private $discount;

    public function __construct($id, $name, $brand, $description, $price, $discount) 
    {
        $this->discount = $discount;
        parent::__construct($id, $name, $brand, $description, $price);
    }

    public function makeDiscount(Women $product)
    {
        $this->price -= $product->discount;
        echo "Купите с товаром: {$this->name} товар {$product->name} получите скидку {$product->discount}рублей. </br>
              Цена товара {$this->name} с учетом скидки составит {$this->price}. </br>";  
    }
}

function displayInfo(Goods $goods) {
    $goods->info();
}

$dress = new Goods(1, "Платье", "D&G", "Свадебное платье.", 5700);
$t_shot = new Goods(2, "Футболка", "Versace", "Летняя футболка.", 1200);

displayInfo($dress);
displayInfo($t_shot);

$dress = new Women(1, "Платье", "D&G", "Свадебное платье.", 5700, 200);
$t_shot = new Women(2, "Футболка", "Versace", "Летняя футболка.", 1200, 100);

displayInfo($dress);
$dress->makeDiscount($t_shot);

displayInfo($t_shot);
$t_shot->makeDiscount($dress);