<?php

abstract class Product
{
    protected $name;
    protected $price;

    protected static $profit = 0;

    function __construct($name, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function sell($quantity);

    public function printProfit()
    {
        echo "Доход с продаж составляет: " . static::$profit;
    }
}

class IT_Product extends Product
{
    public function sell($quantity)
    {
        parent::$profit = parent::$profit + ($quantity * $this->price * 0.5);
    }
}

class Real_Product extends Product
{   

    public function sell($quantity)
    {
        parent::$profit = parent::$profit + ($quantity * $this->price);
    }
}

class Weight_Product extends Product
{
    public function getFinalPrice($weight)
    {
        if($weight < 3) {
            return $this->price;
        }
        elseif($weight >= 3 and $weight < 5) {
            return $this->price * 0.3;
        }
        else {
            return $this->price * 0.5;
        }
    }
    public function sell($weight)
    {
        parent::$profit = parent::$profit + ($weight * $this->getFinalPrice($weight));
    }
}


$r_product = new Real_Product("Б.Акунин 'Вдовий плат'", 1200);
$it_product = new IT_Product("Б.Акунин 'Бох и Шельма'", 1800);
$w_product = new Weight_Product("Сахар", 50);

$r_product->sell(1);
var_dump($r_product);
echo "</br>";
$it_product->sell(2);
var_dump($it_product);
echo "</br>";
$w_product->sell(10);
var_dump($w_product);
echo "</br>";
$w_product->printProfit();