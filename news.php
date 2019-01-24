<?php @include_once('header.php'); ?>

<?php @include_once('breadcrumbs.php');?>

<main class="container">
	
	
	<section class="section-tabs ">
		<h1 >Открытые данные</h1>
		<div class="tabs">
	           
	           <input type="radio" name="odin"  id="vkl1"/><label for="vkl1">Новости</label>
	           <input type="radio" name="odin" checked="checked" id="vkl2"/><label for="vkl2">Документы</label>
	           <input type="radio" name="odin" id="vkl3"/><label for="vkl3">История успеха</label>
	           <input type="radio" name="odin" id="vkl4"/><label for="vkl4">База знаний</label>
           	<p class="hrtb"></p>  	

            <div class="">
            	
            </div>

            <div class="news">
            	<form role="search" method="get" class="searchform" action="index.php">
				<input type="text" value="" name="s" id="s" placeholder="поиск по названию">
				<input type="submit" id="searchsubmits" value="">
				
       		</form>
		        <div>
		        	
		        	<form action="" class="searchname">
					<span>Дата публикации ( выберите период)с </span>
					<input type="text" id="datepicker1" />
					<span>по </span><input type="text" id="datepicker2" />
					
					
					
					</form>
		        </div>
		        <table>
		        	<tr>
		        		<th>Тип документа</th>
		        		<th>Название документа</th>
		        		<th>Дата<br/> публикации</th>
		        		<th>Размер</th>
		        		<th></th>
		        	</tr>
		        	<tr>
		        		<td><img src="assets/build/img/pdf.png" alt=""/></td>
		        		<td>План мероприятий “Открытые данные Российской Федерации на 2016-2017 гг</td>
		        		<td>02.01.2017</td>
		        		<td>12 Кб</td>
		        		<td ><a href="" class="download" >Скачать</a></td>
		        	</tr>
		        	<tr>
		        		<td><img src="assets/build/img/doc.png" alt=""/></td>
		        		<td>План мероприятий “Открытые данные Российской Федерации на 2016-2017 гг</td>
		        		<td>02.01.2017</td>
		        		<td>12 Кб</td>
		        		<td ><a href="" class="download" >Скачать</a></td>
		        	</tr>
		        	<tr>
		        		<td><img src="assets/build/img/pdf.png" alt=""/></td>
		        		<td>План мероприятий “Открытые данные Российской Федерации на 2016-2017 гг</td>
		        		<td>02.01.2017</td>
		        		<td>12 Кб</td>
		        		<td ><a href="" class="download" >Скачать</a></td>
		        	</tr>
		        </table>
		        <p class="hrtb"></p>
		        <div class="buttons">
		        	<button class="call-back">Обратная связь</button>
					<button class="call-error">Сообщить об ошибке</button>
		        </div>
            </div>

            <div class="">
            	
            </div>
            
            <div class="">
            	
            </div>
        </div>
		
	</section>
    
</main>



<?php @include_once('footer.php');?>
