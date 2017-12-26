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
           
           
           $.ajax({ 
             type: “POST”,
             url: “https://mandrillapp.com/api/1.0/messages/send.json”,
              data: {
              ‘key’: ‘c7002fc8c731a013934a4f84c5e0d302-us17’,
              ‘message’: {
              ‘from_email’: ‘SouthKoreatours@ya.ru’,
               ‘to’: [
                    {
                        ‘email’: ‘SouthKoreatours@ya.ru’,
                        ‘name’: ‘Ekaterina’,
                        ‘type’: ‘to’
          },
          {
            ‘email’: ‘sitecode@ya.ru’,
            ‘name’: ‘ANOTHER’,
            ‘type’: ‘to’
          }
        ],
      ‘autotext’: ‘true’,
      ‘subject’: ‘Посложней но не намного’,
      ‘html’: ‘нарисовать что-то при помощи SVG’
    }
  }
 }).done(function(response) {
   console.log(response); 
 });
           
           
        }   

          	return false;
   });
 

}); 
/* 
 * Создаем элементы HTML5 для IE
 */

document.createElement("article");
document.createElement("section");


