<?php @include_once('header.php'); ?>

<?php @include_once('breadcrumbs.php');?>

<div class="container mo-post mo-post-left-sidebar">
    <h1>Комитет по бюджету и экономической политике</h1>

    <aside class="sidebar sidebar--wide sidebar--float">
        <section class="menu">
            <h2 class="visually-hidden">Меню</h2>
            <ul>
                <li class="active dropdown">
                    <a href="#">О комитете</a>

                    <ul class="dropdown__menu">
                        <li class="dropdown__item"><a href="#">Вопросы ведения комитета</a></li>
                        <li class="dropdown__item active"><a href="#">Планы работы комитета</a></li>
                        <li class="dropdown__item"><a href="#">Повестки заседаний</a></li>
                        <li class="dropdown__item"><a href="#">Отчеты о работе комитета</a></li>
                    </ul>
                </li>

                <li><a href="#">О входящих в него депутатах</a></li>
                <li><a href="#">О проводимых мероприятиях</a></li>
                <li><a href="#">Результаты мониторингов</a></li>
            </ul>

        </section>
    </aside>

    <main class="committee container-sidebar">
        <link rel="stylesheet" href="mo-css.css">

        <h2 class="committee__title">Планы работы комитета</h2>

        <div class="input-wrapper committee__input-wrapper">
            <select id="filterInput"  name="filter" required="required" class="input-wrapper__select committee__select">
                <option value>План комитета за:</option>
                <option value="1">Другой вариант:</option>
            </select>
        </div>

        <table class="committee__table">
            <tbody>
                <tr>
                    <td>
                        <img src="assets/build/img/doc2.png" alt="Планы комитета по бюджету" width="29" height="36">
                    </td>
                    <td>Планы комитета по бюджету и экономической политике за май 2016 года (628 kb)</td>
                    <td><a class="committee__download-lnk" href="#" target="_blank">Скачать</a></td>
                </tr>
            </tbody>
        </table>
    </main>
</div>

<?php @include_once('footer.php');?>
