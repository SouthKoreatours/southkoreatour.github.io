<!DOCTYPE HTML>
<html lang="ru">
<head>
<title>Отправка сообщения</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" itemprop="keywords" content="туры в Южную Корею, Южная Корея, туризм в Кореи, перелет в Южную Корею" />
<meta name="description" itemprop="description" content="Туристические путевки эконом класса в Южную Корею" />

<meta property="og:title" content="Южная Корея"/>
<meta property="og:description" content="Туристические путевки эконом класса"/>
<meta property="og:image" content="images/South-Korea.jpg">
<meta property="og:type" content="profile"/>
<meta property="og:url" content= "/index.php" />
 <!-- Custom Theme files -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!-- Custom Theme files -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>

<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<script type="text/javascript">
$(document).ready(function(){ 
	var touch 	= $('#touch-menu');
	var menu 	= $('.menu');
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
	
});
</script>
</head>
<body>
			<!----- Шапка ---->
			<div id="home" class="header">
				<div class="container">
					<div class="logo">
						<a href="/"><img src="images/logo.png" title="logo" /></a>
					</div>

<a id="touch-menu" class="mobile-menu" href="#">Меню</a>
<nav>
<ul class="menu">
<li><a href="/">ГЛАВНАЯ</a></li>
<li><a href="/o-nas.php">О НАС</a></li>
<li><a href="/tury-po-gorodam.php">ТУРЫ ПО ГОРОДАМ</a>
<ul class="sub-menu">
<li><a href="/tury-po-gorodam.php#Seoul">Сеул</a></li>
<li><a href="/tury-po-gorodam.php#Busan">Пусан</a></li>
<li><a href="/tury-po-gorodam.php#Daegu">Тэгу</a></li>
<li><a href="/tury-po-gorodam.php#Incheon">Инчхон</a></li>
<li><a href="/tury-po-gorodam.php#Gwangju">Кванджу</a></li>
</ul>
</li>
<li><a href="/otzyvy.php">ОТЗЫВЫ</a></li>
<li><a href="/kontakty.php">КОНТАКТЫ</a></li>
</ul>
</nav>
          
					<div class="clearfix"> </div>
          
				</div>
			</div>
			<!----- //End шапка---->
			<!---- скрипт для слайдера ---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>

			<!-- Основной слайдер -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
            
			        <li>
			          <img src="images/slide1.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<span>Сеул</span>
			          		<h1>Город особого статуса</h1>
			          		<label>экономический и культурный центр Республики Корея</label>
			          	</div>
			          </div>
			        </li>
              
			        <li>
			          <img src="images/slide2.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<span>Пусан</span>
			          		<h1>Крупнейший порт Южной Кореи</h1>
			          		<label>один из современнейших городов Азии</label>
			          	</div>
			          </div>
			        </li>
	
  
  		        <li>
			          <img src="images/slide3.jpg" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<span>Тэгу</span>
			          		<h1>Город-метрополия</h1>
			          		<label>исторический и культурный центр Южной Кореи</label>
			          	</div>
			          </div>
			        </li>

  		        <li>
			          <img src="images/slide4.jpg" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<span>Инчхон</span>
			          		<h1>Международный центр бизнеса</h1>
			          		<label>третий по населению город Южной Кореи</label>
			          	</div>
			          </div>
			        </li>
              
              
  		        <li>
			          <img src="images/slide5.jpg" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<span>Кванджу</span>
			          		<h1>Город-метрополия</h1>
			          		<label>родина корейской поэзии каса</label>
			          	</div>
			          </div>
			        </li>                            
              
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			<!----- //End основной слайдр---->




			<div class="features" id="features">
				<div class="container">
					<div class="features-head text-center">
						<h2>Ваше сообщение <span>отправлено!</span></h2>
<!--						<p>Достоинства Южной Кореи — целебные минеральные источники и чистые песчаные пляжи.</p>  -->
					</div>

					<div class="feature-grids">
<?


$fname = strip_tags($_POST['fname']);
$email = strip_tags(trim($_POST['email']));

$subject = strip_tags(trim($_POST['subject']));
$ftext = strip_tags($_POST['ftext']);



$tema = "Сообщение с формы обратной связи";

$print='<strong>Сообщение с формы обратной связи</strong><br /><br />
<strong>Контактное лицо</strong> : <i>'.$fname.'</i><br /><br />
<strong>E-mail</strong> : <i>'.$email.'</i><br />
<strong>Тема сообщения</strong> : <i>'.$subject.'</i><br />
<strong>Текст сообщения</strong> : <i>'.$ftext.'</i><br />';

echo  $print;


$toaddress= 'vitaliydnv1978@mail.ru';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";


  if (mail($toaddress, $tema, $print, $headers))  echo '<center>Ваш запрос отправлен. Спасибо!</center>';

// mail($toaddress, $tema, $print, $headers);

?>

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>

	        <div class="gallery" id="partner">
				<div class="container">
					<div class="gallery-head text-center">
					  <h3>Достопримечательности Южной Кореи</h3><span></span>
					</div>
					<ul id="flexiselDemo3">
						<li><img src="images/f1.jpg" /></li>
						<li><img src="images/f2.jpg" /></li>
						<li><img src="images/f3.jpg" /></li>
						<li><img src="images/f4.jpg" /></li>
						<li><img src="images/f5.jpg" /></li>
						<li><img src="images/f6.jpg" /></li>
						<li><img src="images/f7.jpg" /></li>            
					</ul>
	<script type="text/javascript">
$(window).load(function() {
	

	$("#flexiselDemo3").flexisel({
		visibleItems: 5,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });
    
});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</div>
</div>



<div class="footer">
  	<div class="container">
	   <div class="footer-top">
		    <ul class="footer-menu">
           <li><a href="/">ГЛАВНАЯ</a></li>
           <li><a href="/o-nas.php">О НАС</a></li>
           <li><a href="/tury-po-gorodam.php">ТУРЫ ПО ГОРОДАМ</a></li>
           <li><a href="/otzyvy.php">ОТЗЫВЫ</a></li>
           <li><a href="/kontakty.php">КОНТАКТЫ</a></li>
		 	</ul>

      
      
      <div class="social">
        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,viber,whatsapp,telegram"></div>
      </div>
      			<div class="clearfix"> </div>
		</div>
    
		<div class="footer-bottom" id="contact">
		  <div class="container contact">
      	  	 <div class="col-md-4 contact-top_left">
			  <h3>Контакты</h3>
			  <ul class="contact_info">
			  	<li><i class="mobile"> </i><span>8-800-755-4001</span></li>
			  	<li><i class="message"> </i><span class="msg">SouthKoreaTours@ya.ru</span></li>
			  </ul>
	 		 </div>
      		
            </div>
      	    <div class="copy">
		       <p> &copy Южная Корея - <a href="/">Туристические путевки эконом класса</a> | Ekaterina Vasilchenko 2017</p>
		    </div>
          </div>
          <script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
		    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">Наверх </span></a>
			</div>
		</div>
</body>
</html>

