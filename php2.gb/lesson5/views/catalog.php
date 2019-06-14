<? foreach ($products as $product):?>

    <a href="?c=product&a=card&id=<?= $product['id'] ?>"><h2><?= $product['name'] ?></h2></a>
    <p><?= $product['description'] ?></p>
    <p>Стоимость: <?= $product['price'] ?> руб.</p>

<? endforeach;?>

<a href="?c=product&a=catalog&page=<?= $page ?>">Еще 5 ...</a>
