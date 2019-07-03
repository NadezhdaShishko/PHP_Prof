<h2>Корзина</h2><hr>

<?php
foreach ($products as $product):?>
    <div id="<?= $product['id_basket'] ?>">
        <h2><a href="/product/card/?id=<?= $product['id_prod'] ?>"><?= $product['name'] ?></a></h2>
        <p>Описание: <?= $product['description'] ?></p>
        <p>Цена: <?= $product['price'] ?> руб.</p>

        <button data-id="<?= $product['id_basket']?>" class="delete">Удалить</button>
    </div>
<? endforeach;?>
<br>
<a href="/product/catalog">Каталог</a>
