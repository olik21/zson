<?php @include_once('header.php'); ?>

<div class="container mo-post mo-post-left-sidebar cf">
    <h1>Интернет - конференция</h1>
    <?php @include_once('sidebar3.php');?>
    <main class="container-sidebar conference-themes-page">

        <link rel="stylesheet" href="mo-css.css">
        <section>
            <h2>Темы интернет конференции</h2>
            <div class="mo-filter-panel">
                <ul class="mo-paging">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                </ul>
                <select name="filter" class="mo-filter input-wrapper__select" required="required" >
                    <option value>Сортировка по дате </option>
                    <option value="2012">Сортировка по дате </option>
                    <option value="2013">Сортировка по дате </option>
                </select>
            </div>

            <div class="mo-themes-items">
                <div class="mo-themes-item">
                    <h3 class="mo-themes-item-head"><a href="#" class="mo-themes-item-link">Lorem ipsum dolor sit amet,
                            consectetur adipisicing.</a></h3>
                    <p class="mo-themes-item-date">Дата создания темы: 20.01.2018</p>
                    <p class="mo-themes-item-comment">Количество сообщений - 123</p>
                </div>
                <div class="mo-themes-item">
                    <h3 class="mo-themes-item-head"><a href="#" class="mo-themes-item-link">Debitis dolorum nulla odio
                            ratione saepe, ullam!</a></h3>
                    <p class="mo-themes-item-date">Дата создания темы: 20.01.2018</p>
                    <p class="mo-themes-item-comment">Количество сообщений - 123</p>
                </div>
                <div class="mo-themes-item">
                    <h3 class="mo-themes-item-head"><a href="#" class="mo-themes-item-link">Animi aspernatur commodi
                            officia omnis repellendus vel?</a></h3>
                    <p class="mo-themes-item-date">Дата создания темы: 20.01.2018</p>
                    <p class="mo-themes-item-comment">Количество сообщений - 123</p>
                </div>
                <div class="mo-themes-item">
                    <h3 class="mo-themes-item-head"><a href="#" class="mo-themes-item-link">Commodi corporis eaque harum
                            nulla numquam, quaerat.</a></h3>
                    <p class="mo-themes-item-date">Дата создания темы: 20.01.2018</p>
                    <p class="mo-themes-item-comment">Количество сообщений - 123</p>
                </div>
            </div>
            <div class="mo-filter-panel mo-filter-panel--flex-end">
                <ul class="mo-paging ">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                </ul>
            </div>
        </section>


    </main>
</div>



<?php @include_once('footer.php');?>
