// JavaScript Document
(function($){
  $.fn.validarDatos=function(){
	  
  	$(this).each(function(){
         if($(this).val() != 0){
		 var frase=$(this).val();
		 console.log(frase);
		 var expresion=/^[a-z]{2,25}@[a-z]{2,10}.[a-z]{1,8}$/;
		 if(expresion.test(frase)){
			 $(this).css("border-color","#0F0");
			 }
			 else{
				  $(this).css("border-color","#F00");
				 };
         }else if($(this).val() == 0){
             $(this).css("border-color","default");
         }
		});
  
    
  };
    
  $.fn.validarPass=function(){
	  
  	$(this).each(function(){
         if($(this).val() != 0){
		 var frase=$(this).val();
		 console.log(frase);
		 var expresion=/^[a-z 0-9]{2,16}$/;
		 if(expresion.test(frase)){
			 $(this).css("border-color","#0F0");
			 }
			 else{
				  $(this).css("border-color","#F00");
				 };
         }else if($(this).val() == 0){
             $(this).css("border-color","default");
         }
		});
  
    
  };
    $.fn.validarName=function(){
	  
  	$(this).each(function(){
         if($(this).val() != 0){
		 var frase=$(this).val();
		 console.log(frase);
		 var expresion=/^[a-z]{2,16} [a-z]{2,16}$/;
		 if(expresion.test(frase)){
			 $(this).css("border-color","#0F0");
             document.getElementById("sound_element").innerHTML="<embed src='tada.mp3' hidden=true autostart=true loop=false>";
			 }
			 else{
				  $(this).css("border-color","#F00");
                  
				 };
         }else if($(this).val() == 0){
             $(this).css("border-color","default");
         }
		});
  
    
  };
  
  
    
}(jQuery))



