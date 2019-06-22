'use strict';

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
            error: function() {alert('Что-то пошло не так...');},
            success: function(answer){
                {
                    $("#count").html(answer.count);
                }
            }
        })
    });
});

$(document).ready(function(){
    $(".delete").on('click', function(){
        let id = $(this).attr('data-id');
        // console.log(id);
        $.ajax({
            url: "/basket/delete",
            type: "POST",
            dataType : "json",
            data:{
                id: id
            },
            error: function() {alert('Что-то пошло не так...');},
            success: function(answer){
                {
                    $("#" + id).remove();
                    $("#count").html(answer.count);
                }
            }
        })
    });
});