<? foreach ($products as $product):?>

    <a href="/product/card/?id=<?= $product['id'] ?>"><h2><?= $product['name'] ?></h2></a>
    <p><?= $product['description'] ?></p>
    <p>Стоимость: <?= $product['price'] ?> руб.</p>

    <button data-id="<?=$product['id']?>" class="action">Купить</button><br>

<? endforeach;?>

<a href="/product/catalog/?page=<?= $page ?>">Еще 5 ...</a>