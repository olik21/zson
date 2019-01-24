<?php @include_once('header.php'); ?>

<?php @include_once('breadcrumbs.php');?>

<div class="container mo-post mo-post-left-sidebar">
    <h1>Личный кабинет Петрова Петра Петровича</h1>
    <?php @include_once('sidebar_cabinet.php');?>
    <main class="cabinet container-sidebar">

        <link rel="stylesheet" href="mo-css.css">
        <section class="cabinet__schedule">
            <h2 class="cabinet__schedule-title">
                Мероприятия Законодательного собрания на 30.08.2018
            </h2>

            <ul class="cabinet__schedule-list">
                <li>
                    Планируется проведение такого-то мероприятия Законодательного собрания
                </li>
                <li>
                    Планируется проведение такого-то мероприятия Законодательного собрания
                </li>
                <li>
                    Планируется проведение такого-то мероприятия Законодательного собрания
                </li>
            </ul>

            <section class="calendar cabinet__calendar">
                <h2 class="visually-hidden">Календарь</h2>
                <div >
                    <table id="calendar-cabinet">
                    <thead>
                        <tr><td colspan="2"><b>‹</b><td colspan="3"><td colspan="2"><b>›</b>
                        <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
                    </thead>
                    <tbody></tbody>
                    </table>
                    </div>
            </section>
        </section>


    </main>
</div>


<script  src="assets/build/js/main_calendar.min.js"></script>
<?php @include_once('footer.php');?>

