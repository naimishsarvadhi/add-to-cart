$(document).ready(function(){

    $('.add-to-cart').click(function(e){
        e.preventDefault();
        //alert('ok');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var p_id = $(this).attr('data-id');
        $.ajax({
            url : "/add-to-cart",
            type : "POST",
            data : {
                    cart_id:p_id,
                    _token : CSRF_TOKEN
                },
            success : function(responce){
                //console.log(responce);
                location.reload();
            }
        })

       });

    $('.remove-cart-item').click(function(e){
        e.preventDefault();
        var p_id = $(this).attr('data-id');
        $.ajax({
            url: './check.php',
            method: 'POST',
            data: {removecart:p_id},
            success: function(responce){
                location.reload();
            }
        });
    });

    $('.item-qty').change(function(){
        var qty = $(this).val();
        var price = $(this).siblings('.item-price').val();
        var new_price = (qty * price);
       // alert(new_price);
        $.ajax({
            url : "./check.php",
            type : "POST",
            data : {price_id:new_price},
            success : function(responce){
                $('.sub-total').html(responce);
            }
        })
    });
});
