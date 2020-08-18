/*jQuery(document).ready(function($) {
    $('.dropdown-menu').on("click.bs.dropdown", function(e){
        e.stopPropagation(); e.preventDefault(); 
    })
});*/

jQuery(document).ready(function($) {

    $(".js-plus").on("click", function(e) {
        e.preventDefault();
      
        var $button = $(".js-plus");
        var oldValue = $(".e-quantity").find("input").val();

    
        //if ($button.click(".js-plus")) {  
            var newVal = parseFloat(oldValue) + 1;
        //} 
           // Don't allow decrementing below zero

        $(".e-quantity").find("input").val(newVal);
    
        
      
    
     /*  var id = $button.attr("id");
    $.ajax({
      type: "POST",
      url: "cart.php?id=" + id + "&newvalue=" + newVal,
      success: function() {
       $(".e-quantity").find("input").val(newVal);
      }
    });*/
    
      });


      $(".js-minus").on("click", function(e) {
          e.preventDefault();
      
        var $button = $(".js-minus");
        var oldValue = $(".e-quantity").find("input").val();

    
           // Don't allow decrementing below zero
          if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
            } else {
            newVal = 0;
          }
        
    
    $(".e-quantity").find("input").val(newVal);
    
    /*   var id = $button.attr("id");
    $.ajax({
      type: "POST",
      url: "cart.php?id=" + id + "&newvalue=" + newVal,
      success: function() {
        $(".e-quantity").find("input").val(newVal);
      }
    });*/
    
      });

      $("#myInput").on("input", function(){
          $("#result").text($(this).val());
      });

    $(function cartForm(){
    
        var dataString =  $(this).serialize();
        $.ajax({
            type: 'post',
            url: 'products_test.php',
            data: dataString,
            success: function () {
                alert("success");
            }
        });
     return False;  
     
    });

    

    
    

    $(function removeForm(){
       
   var dataString =  $(this).serialize();
        $.ajax({
            type: 'post',
            url: 'products_test.php',
            data: dataString,
            success: function () {
                alert("success");
            }
        });
        
        return false;

        
    });


      //  $(".numbers-row").append('<div class="inc button">+</div><div class="dec button">-</div>');
      
       
      
    


      
      
      });
  