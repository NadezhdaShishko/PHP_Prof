<?php
/** @var \app\model\Products $product  */
?>

<h2><?= $product->name ?></h2>
<p><?= $product->description ?></p>
<p>Стоимость: <?= $product->price ?> руб.</p>

<button data-id="<?=$product->id?>" class="action">Купить</button><br>

<script>
    $(document).ready(function(){
        $(".action").on('click', function(){
            let id = $(this).attr('data-id');
            // console.log(id);
            $.ajax({
                url: "/basket/AddBasket",
                type: "POST",
                dataType : "json",
                data:{
                    id: id
                },
                error: function() {alert('error');},
                success: function(answer){
                    {
                        $("#count").html(answer.count);
                    }
                }
            })
        });
    });
</script>