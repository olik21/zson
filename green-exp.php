<?php @include_once('header.php'); ?>

<div class="container mo-post mo-post-left-sidebar cf">
    <h1>Экспертная оценка зеленых насаждений</h1>
    <?php @include_once('sidebar4.php');?>
    <main class="container-sidebar expert-page">

        <link rel="stylesheet" href="mo-css.css">
        <section>
	        <h2 hidden>Экспертная оценка зеленых насаждений</h2>
            <div class="expert-page__tabs tabs">
                <nav class="tabs__nav">
                    <a href="#" class="tabs__item tabs__link active" data-tab="1">По дате размещения</a>
                    <a href="#" class="tabs__item tabs__link" data-tab="2">По районам города</a>
                    <a href="#" class="tabs__item tabs__link" data-tab="3">По экспертам</a>
                </nav>
                <div class="tabs__content">
                    <div class="tabs__tab active" data-tab="1">
                        <div class="expert-page__filter">
                            <select class="input-wrapper__select expert-page__select expert-page__select--year">
                                <option value="201">2017</option>
                                <option value="201">2016</option>
                                <option value="201">2015</option>
                            </select>
                            <select class="input-wrapper__select expert-page__select expert-page__select--monthe">
                                <option value="201">январь</option>
                                <option value="201">февраль</option>
                                <option value="201">март</option>
                            </select>

                        </div>
                        <div class="expert-page__table-wrap containerHasScrollBar">
                            <table class="expert-page__table">
                                <tr>
                                    <th>Адрес территории</th>
                                    <th>Эксперт</th>
                                    <th>Экспертное заключение</th>
                                    <th class="expert-page__cell-date-start">Дата <br> размещения</th>
                                    <th class="expert-page__cell-date-end">Срок действия</th>
                                </tr>
	                            <tr>
		                            <td>Нижний Новгород, Автозаводской район, ул. Автоматная, у дома №11</td>
		                            <td class="expert-page__cell-expert"><a href="#">Игошева К. О.</a></td>
		                            <td>
			                            <ul class="expert-page__link-list">
				                            <li><a href="#">Пояснительная записка</a></li>
				                            <li><a href="#">Ведомость инвентаризации древесно - кустарниковой растительности</a></li>
				                            <li><a href="#">Схема расположения зеленых насаждений</a></li>
			                            </ul>
		                            </td>
		                            <td class="expert-page__cell-date-start"><span>02.01.2017</span></td>
		                            <td class="expert-page__cell-date-end"><span>до 02.01.2017</span></td>
	                            </tr>
	                            <tr>
		                            <td>Нижний Новгород, Автозаводской район, ул. Автоматная, у дома №11</td>
		                            <td class="expert-page__cell-expert"><a href="#">Игошева К. О.</a></td>
		                            <td>
			                            <ul class="expert-page__link-list">
				                            <li><a href="#">Пояснительная записка</a></li>
				                            <li><a href="#">Ведомость инвентаризации древесно - кустарниковой растительности</a></li>
				                            <li><a href="#">Схема расположения зеленых насаждений</a></li>
			                            </ul>
		                            </td>
		                            <td class="expert-page__cell-date-start"><span>02.01.2017</span></td>
		                            <td class="expert-page__cell-date-end"><span>до 02.01.2017</span></td>
	                            </tr>
	                            <tr>
		                            <td>Нижний Новгород, Автозаводской район, ул. Автоматная, у дома №11</td>
		                            <td class="expert-page__cell-expert"><a href="#">Игошева К. О.</a></td>
		                            <td>
			                            <ul class="expert-page__link-list">
				                            <li><a href="#">Пояснительная записка</a></li>
				                            <li><a href="#">Ведомость инвентаризации древесно - кустарниковой растительности</a></li>
				                            <li><a href="#">Схема расположения зеленых насаждений</a></li>
			                            </ul>
		                            </td>
		                            <td class="expert-page__cell-date-start"><span>02.01.2017</span></td>
		                            <td class="expert-page__cell-date-end"><span>до 02.01.2017</span></td>
	                            </tr>
	                            <tr>
		                            <td>Нижний Новгород, Автозаводской район, ул. Автоматная, у дома №11</td>
		                            <td class="expert-page__cell-expert"><a href="#">Игошева К. О.</a></td>
		                            <td>
			                            <ul class="expert-page__link-list">
				                            <li><a href="#">Пояснительная записка</a></li>
				                            <li><a href="#">Ведомость инвентаризации древесно - кустарниковой растительности</a></li>
				                            <li><a href="#">Схема расположения зеленых насаждений</a></li>
			                            </ul>
		                            </td>
		                            <td class="expert-page__cell-date-start"><span>02.01.2017</span></td>
		                            <td class="expert-page__cell-date-end"><span>до 02.01.2017</span></td>
	                            </tr>
	                            <tr>
		                            <td>Нижний Новгород, Автозаводской район, ул. Автоматная, у дома №11</td>
		                            <td class="expert-page__cell-expert"><a href="#">Игошева К. О.</a></td>
		                            <td>
			                            <ul class="expert-page__link-list">
				                            <li><a href="#">Пояснительная записка</a></li>
				                            <li><a href="#">Ведомость инвентаризации древесно - кустарниковой растительности</a></li>
				                            <li><a href="#">Схема расположения зеленых насаждений</a></li>
			                            </ul>
		                            </td>
		                            <td class="expert-page__cell-date-start"><span>02.01.2017</span></td>
		                            <td class="expert-page__cell-date-end"><span>до 02.01.2017</span></td>
	                            </tr>
                            </table>

                        </div>
                    </div>
	                <div class="tabs__tab" data-tab="2">
		                <div class="expert-page__filter">
			                <select class="input-wrapper__select expert-page__select expert-page__select--year">
				                <option value="201">2017</option>
				                <option value="201">2016</option>
				                <option value="201">2015</option>
			                </select>
			                <select class="input-wrapper__select expert-page__select expert-page__select--monthe">
				                <option value="201">январь</option>
				                <option value="201">февраль</option>
				                <option value="201">март</option>
			                </select>

		                </div>
		                <div class="expert-page__table-wrap containerHasScrollBar">
			                <table class="expert-page__table">
				                <tr>
					                <th>Адрес территории</th>
					                <th>Эксперт</th>
					                <th>Экспертное заключение</th>
					                <th>Дата <br> размещения</th>
					                <th>Срок действия</th>
				                </tr>
				                <tr>
					                <td>Нижний Новгород, Автозаводской район, ул. Автоматная, у дома №11</td>
					                <td class="expert-page__cell-expert"><a href="#">Игошева К. О.</a></td>
					                <td>
						                <ul class="expert-page__link-list">
							                <li><a href="#">Пояснительная записка</a></li>
							                <li><a href="#">Ведомость инвентаризации древесно - кустарниковой растительности</a></li>
							                <li><a href="#">Схема расположения зеленых насаждений</a></li>
						                </ul>
					                </td>
					                <td class="expert-page__cell-date-start"><span>02.01.2017</span></td>
					                <td class="expert-page__cell-date-end"><span>до 02.01.2017</span></td>
				                </tr>
			                </table>

		                </div>
	                </div>
                </div>

            </div>

        </section>


    </main>
</div>



<?php @include_once('footer.php');?>
