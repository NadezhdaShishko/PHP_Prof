<?php
/** @var \app\model\Products $product  */
?>

<h2><?= $product->name ?></h2>
<p><?= $product->description ?></p>
<p>Стоимость: <?= $product->price ?> руб.</p>

<button data-id="<?=$product->id?>" class="action">Купить</button><br>