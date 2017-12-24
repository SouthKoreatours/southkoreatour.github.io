/**
 * Parallax Scrolling Tutorial
 * For NetTuts+
 *  
 * Author: Mohiuddin Parekh
 *	http://www.mohi.me
 * 	@mohiuddinparekh   
 */


$(document).ready(function(){
	// Кешируем объект окна
	$window = $(window);
                
   $('section[data-type="background"]').each(function(){
     var $bgobj = $(this); // Назначаем объект
                    
      $(window).scroll(function() {
                    
		// Прокручиваем фон со скоростью var.
		// Значение yPos отрицательное, так как прокручивание осуществляется вверх!
		var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
		
		// Размещаем все вместе в конечной точке
		var coords = '50% '+ yPos + 'px';

		// Смещаем фон
		$bgobj.css({ backgroundPosition: coords });
		
	}); 

 });	
 
 
 
 
   $('#submit').click(function () {                                                  
        var FLAG = 0;                                                                     
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;         
        
        
         if ($('#fname').val() == 'Имя')                                                       
        {FLAG = 1;  $('#fname').css("border","red solid 1px");   }
        else {  $('#fname').css("border","#444444 solid 1px;"); }  

        
       if(!pattern.test($('#email').val()))                                                    
          {FLAG = 1; $('#email').css("border","red solid 1px"); }                                            
        else {  $('#email').css("border","#444444 solid 1px;"); }                                                 

                                                                                          
                                                                                          
        if ($('#subject').val() == 'Тема сообщения')                                                      
        {FLAG = 1; $('#subject').css("border","red solid 1px"); }                                              
        else {  $('#subject').css("border","#444444 solid 1px;"); }                                                 

        

        if (FLAG == 0){                                                                   
           form.submit();
        }   

          	return false;
   });
 

}); 
/* 
 * Создаем элементы HTML5 для IE
 */

document.createElement("article");
document.createElement("section");


/*
 * Обработчик для формы обратной связи
 */





$('#sendfm').click(function() {
                                                                                        
                                                                                        
      var fio = $("#fio").val();                                                        
      var email = $("#email").val();                                                    
      var phone = $("#phone").val();                                                    
      var city = $("#city").val();                                                      
      var text = $("#text").val();                                                      
                                                                                        
                                                                                        
   if ( !fio ) { $('#fiospan').show(); } else { $('#fiospan').hide(); }                 
   if ( !email ) { $('#emailspan').show(); }  else { $('#emailspan').hide();  }         
   if ( !phone ) { $('#phonespan').show(); }  else { $('#phonespan').hide();  }         
   if ( !city ) { $('#cityspan').show(); }  else { $('#cityspan').hide();  }            
   if ( !text ) { $('#textspan').show(); }  else { $('#textspan').hide();  }            
                                                                                        
                                                                                        
  if ( !fio || !email || !phone || !city || !text )  {      return false;  	  }         
                                                                                        
                                                                                        
  });                                                                                   