$(document).on('click',"#cat",function(){
    
    var id = $(this).attr('class');
    $.ajax({url:"index.php?action=productes&category_id="+id.substr(3),success:function(result){

         $(result).replaceAll("#cats");
        
           }});
});


$(document).on('click',"#prod",function(){
         var id = $(this).attr('class');
         $.ajax({url:"index.php?action=producte&product_id="+id.substr(4),success:function(result){
         $(result).replaceAll("#prods");
        
           }});
});

$(document).on('click',"#Afegir",function(){
    var id = $(this).attr('class');
    $.ajax({url:"index.php?action=afegirCarret&product_id="+id.substr(3),success:function(result){
            $("#tail").html(result);
        }});

});
$(document).on('click',"#deleteButton",function(){
    var id = $(this).attr('class');
    $.ajax({url:"index.php?action=delete&productCart_id="+id.substr(4),success:function(result){
            $("#resume").html(result);
        }});

});

$(document).ready(function() {
    $menu = $('#header').find('ul').find('li');

    $menu.hover(function() {
        $(this).children('ul').stop();
        $(this).children('ul').slideDown();
    }, function() {
        $(this).children('ul').stop();
        $(this).children('ul').slideUp();
    });
});

