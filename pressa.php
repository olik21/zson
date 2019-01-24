<?php @include_once('header.php'); ?>

<?php @include_once('breadcrumbs.php'); ?>

<div class="container titles"><h1>Пресс - служба</h1>
    <ul>
        <li><a class="social-button" href="#">
                <span class="visually-hidden">Печать</span>
                <img src="assets/build/img/printer.svg">
            </a></li>
        <li><a class="social-button" href="#">
                <span class="visually-hidden">Плюс</span>
                <img src="assets/build/img/sots-plus.png">
            </a></li>
        <li><a class="social-button" href="#">
                <span class="visually-hidden">в контакте</span>
                <img src="assets/build/img/sots-wk.png">
            </a></li>
        <li><a class="social-button" href="#">
                <span class="visually-hidden">Фейсбук</span>
                <img src="assets/build/img/sots-fb.png">
            </a></li>
        <li><a class="social-button" href="#">
                <span class="visually-hidden">Твиттер</span>
                <img src="assets/build/img/sots-tw.png">
            </a></li>
        <li><a class="social-button" href="#">
                <span class="visually-hidden">Гугл плюс</span>
                <img src="assets/build/img/sots-gl.png">
            </a></li>
        <li><a class="social-button" href="#">
                <span class="visually-hidden">Майл</span>
                <img src="assets/build/img/sots-mail.png">
            </a></li>
        <li><a class="social-button" href="#">
                <span class="visually-hidden">Одноклассники</span>
                <img src="assets/build/img/sots-ok.png">
            </a></li>
    </ul>
</div>
<div class="container yes-sidebar">


    <?php @include_once('sidebar7.php'); ?>


    <main class="container-sidebar">


        <section class="section-tabs ">

            <div class="tabs">

                <input type="radio" name="odin" id="vkl1"/><label for="vkl1">ТВ проекты</label>
                <input type="radio" name="odin" id="vkl2"/><label for="vkl2">Радиопрограммы</label>
                <input type="radio" name="odin" checked="checked" id="vkl3"/><label for="vkl3">Парламентское
                    обозрение</label>
                <p class="hrtb"></p>

                <div class="tvmiting">

                </div>
                <div class="radiomiting">

                </div>

                <div class="parlament">

                    <div class="parlament__item">
                        <a href=""><img src="assets/build/img/pdf.png"/ alt="загрузить файл"></a>
                        <span class="date">02.01.2017</span>
                        <span>Заседание Законодательного Собрания Нижегородской области </span>

                    </div>
                    <div class="parlament__item">
                        <a href=""><img src="assets/build/img/pdf.png"/ alt="загрузить файл"></a>
                        <span class="date">02.01.2017</span>
                        <span>Заседание Законодательного Собрания Нижегородской области </span>

                    </div>
                    


                </div>


            </div>

        </section>

    </main>
</div>


<?php @include_once('footer.php'); ?>
