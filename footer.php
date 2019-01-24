</div> <!-- end all-height -->
<footer>
	<div class="container">
	
	<section class="footer-adress">
		<h2 class="visually-hidden">информация</h2>
		<ul>
			<li>Законодательное Собрание<br />
				Нижегородской области<br />
				© 2017
			</li>
			<li>
				603082, Нижний Новгород, <br />
				Кремль, корп. 2
			</li>
			<li>
				(831) 439-06-69
			</li>
		</ul>

	</section>
	
	<section class="footer-menu">
		<h2 class="visually-hidden">Конституция РФ</h2>
		<ul>
			<li><a href="">Конституция РФ</a></li>
			<li><a href="">Устав</a></li>
			<li><a href="">Герб</a></li>
			<li><a href="">Гимн</a></li>
			<li><a href="">Флаг</a></li>
			<li><a href="">Закон</a></li>
			
		</ul>
	</section>
	
	<section class="footer-menu">
		<h2 class="visually-hidden">Трансляция заседаний</h2>
		<ul>
			<li><a href="">Трансляция заседаний</a></li>
			<li><a href="">Фотогалерея</a></li>
			<li><a href="">Видео</a></li>
			<li><a href="">Документы</a></li>
			<li><a href="">Контакты</a></li>
			<li><a href="">Связаться с нами</a></li>
		</ul>
	</section>
	
	<section class="footer-social">
		<h2 class="">Мы в соц. сетях</h2>
		<ul>
            <li><a class="social-button vk" href="#">Вконтакте</a></li>
            <li><a class="social-button at" href="#">at</a></li>
            <li><a class="social-button ya" href="#">Яндекс</a></li>
            <li><a class="social-button pn" href="#">Пенсил</a></li>
            <li><a class="social-button ok" href="#">Одноклассники</a></li>
            
        </ul>

		<button class="white">Виртуальная экскурсия</button>
	</section>
	
	</div>
    
</footer> 


<?php if($_SERVER['REQUEST_URI'] == '/' or $_SERVER['REQUEST_URI'] == '/index.php' or $_SERVER['REQUEST_URI'] == '/markup/' or $_SERVER['REQUEST_URI'] == '/markup/index.php' )
		{
			echo '<script  src="assets/build/js/calendar_index.min.js"></script>';
			echo '<script  src="assets/build/js/main_calendar.min.js"></script>';
		}
		else {
			//echo '<script  src="assets/build/js/main_calendar.min.js"></script>';
		}
		//echo 'test 123|'.$_SERVER['REQUEST_URI'];
?>



  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.js"></script>
<script src="assets/build/js/jquery.selectric.min.js"></script>





<!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">


<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<!-- 
<script  src="assets/sources/js/app.js"></script>

-->
<script  src="assets/build/js/app.min.js"></script>


<script  src="assets/build/js/map.js"></script>

</body>
</html>