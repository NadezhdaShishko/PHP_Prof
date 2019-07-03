<h2>Каталог:</h2> <br>

<? foreach ($products as $product):?>

    <h2><a href="/product/card/?id=<?= $product['id'] ?>"><?= $product['name'] ?></a></h2>
    <p><?= $product['description'] ?></p>
    <p>Стоимость: <?= $product['price'] ?> руб.</p>

    <button data-id="<?=$product['id']?>" class="action">Купить</button><br>

<? endforeach;?>

<a href="/product/catalog/?page=<?= $page ?>">Еще 5 ...</a>