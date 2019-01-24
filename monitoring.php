<?php @include_once('header.php'); ?>

<?php @include_once('breadcrumbs.php');?>

<div class="container mo-post mo-post-left-sidebar">
    <h1>Мониторинг правоприменения нормативных правовых актов</h1>

    <main class="monitoring container-sidebar">
        <link rel="stylesheet" href="mo-css.css">

        <form class="input-wrapper monitoring__input-wrapper" method="POST" action=".">
            <input id="searchInput"
                name="search" required="required"
                class="input-wrapper__input monitoring__input"
                placeholder="Поиск по законам / комитетам">

            <button type="submit" class="monitoring__search-btn">Поиск</button>
        </form>

        <div class="monitoring__table-container">
            <table class="monitoring__table">
                <thead>
                    <tr>
                        <th>Наименование закона</th>
                        <th>Ответственный комитет</th>
                        <th>Срок</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Закон номер 1</td>
                        <td>Название закона</td>
                        <td>00/00/2018</td>
                        <td>Принятые по итогам проведения мониторинга решения с возможностью установки отметки о выполенных решениях</td>
                    </tr>
                    <tr>
                        <td>Закон номер 2</td>
                        <td>Название закона</td>
                        <td>00/00/2018</td>
                        <td>Принятые по итогам проведения мониторинга решения с возможностью установки отметки о выполенных решениях</td>
                    </tr>
                    <tr>
                        <td>Закон номер 3</td>
                        <td>Название закона</td>
                        <td>00/00/2018</td>
                        <td>Принятые по итогам проведения мониторинга решения с возможностью установки отметки о выполенных решениях</td>
                    </tr>
                    <tr>
                        <td>Закон номер 4</td>
                        <td>Название закона</td>
                        <td>00/00/2018</td>
                        <td>Принятые по итогам проведения мониторинга решения с возможностью установки отметки о выполенных решениях</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <ul class="pagination monitoring__pagination">
            <li class="pagination__item active"><a href="#">1</a></li>
            <li class="pagination__item"><a href="#">2</a></li>
            <li class="pagination__item"><a href="#">3</a></li>
            <li class="pagination__item empty">...</li>
            <li class="pagination__item"><a href="#">6</a></li>
            <li class="pagination__item"><a href="#">7</a></li>
            <li class="pagination__item"><a href="#">8</a></li>
        </ul>
    </main>
</div>

<?php @include_once('footer.php');?>
