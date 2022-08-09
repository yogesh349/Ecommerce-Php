


// Quantity Js
$(document).ready(function () {


  $("#ham_img").click(function(e){
    console.log("clicked");
    e.preventDefault();
    $("#ham-items").toggle(10,function(){
        $("#ham-items").css('display','block');
        console.log("Yep clicked");
    });
})

  $(".increment-btn").click(function (e) { 
    e.preventDefault();
    var inc_value=$(this).closest('.product_data').find('.product-qty').val();
    var qty=parseInt(inc_value);
    qty_value=isNaN(qty) ? 0:qty;

    if(qty_value<10){
      qty_value++
      // $('.product-qty').val(qty_value);
      console.log("Increment" +qty_value)
      $(this).closest('.product_data').find('.product-qty').val(qty_value);
      
    }
    
  });

  $(".decrement-btn").click(function (e) { 
    e.preventDefault();

    var dec_value=$(this).closest('.product_data').find('.product-qty').val();
    var qty=parseInt(dec_value);
    qty_value=isNaN(qty) ? 0:qty;
    if(qty_value>1){
      qty_value--
      $(this).closest('.product_data').find('.product-qty').val(qty_value)
      
      
    }
    
  });


  $(".addToCartbtn").click(function (e) { 
    e.preventDefault();
    var product_id=$(".prod_id").val();
    var product_qty=$(".product-qty").val();

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      type: "POST",
      url: "/add-to-cart",
      data: {
        'product_id':product_id,
        'product_qty':product_qty,
      },
      success: function (response) {
        alert(response.status);
        
      }
    });
    
  });


  $('.delete_cart_img').click(function (e) { 
    e.preventDefault();
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var prod_id=$(this).closest('.delete_cart').find('.cart_id').val();
    console.log(prod_id);

    $.ajax({
      type: "POST",
      url: "/delete-cart-item",
      data: {
        'cart_id':prod_id
      },
      success: function (response) {
        window.location.reload();
        console.log(response.status);
      }
    });
    
  });

  $('.changeQuantity').click(function (e) { 
    e.preventDefault();

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

   
    var prod_id=$(this).closest('.product_data').find('.prod_id').val();
    console.log(prod_id);
    var qty=$(this).closest('.product_data').find('.product-qty').val();
    console.log("the quantity"+qty);


    $.ajax({
      type: "POST",
      url: "update-cart",
      data: {
        'product_id':prod_id,
        'qty':qty
      },
      success: function (response) {
        window.location.reload();
        
      }
    });
    
  });


 $(".addToWishList").click(function (e) { 
  e.preventDefault();
  var product_id=$(".prod_id").val();

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    type: "POST",
    url: "/add-to-wish",
    data: {
      'product_id':product_id,
    },
    success: function (response) {
      alert(response.status);
      
    }
  });
  

  
 });



});