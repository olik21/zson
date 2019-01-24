<?php @include_once('header.php'); ?>

<?php @include_once('breadcrumbs.php');?>

<div class="container mo-post mo-post-left-sidebar">
    <h1 class="centered mb-50">Личный кабинет Иванова Ивана Ивановича</h1>
    <section class="cabinet-card">
        <h2 class="visually-hidden">Контактная информация</h2>
        <ul class="cabinet-card__info">
            <li>
                <b>Место работы : </b>
                Законодательное собрание Нижегородской области
            </li>

            <li>
                <b>Электронная почта : </b>
                <a href="mailto:name@site.ru">name@site.ru</a>
            </li>

            <li>
                <b>Телефон : </b>
                <a href="tel:+00000000000">+0 000 00 00 000</a>
            </li>
        </ul>
    </section>

    <main class="container-sidebar cabinet-expert">
        <link rel="stylesheet" href="mo-css.css">
        <h2 class="cabinet-expert__title">Направление на публикацию:</h2>

        <form class="cabinet-expert__form" method="POST" action=".">
            <div class="input-wrapper cabinet-expert__input-wrapper">
                <input id="cityInput" type="text" name="city" required="required" class="input-wrapper__input cabinet-expert__input">
                <label for="cityInput" class="input-wrapper__label">Населенный пункт</label>
            </div>

            <div class="input-wrapper cabinet-expert__input-wrapper cabinet-expert__input-wrapper--b">
                <textarea id="nameInput"
                    name="name" rows="10"
                    class="input-wrapper__input cabinet-expert__input" required></textarea>
                <label for="nameInput" class="input-wrapper__label">Наименование объекта</label>
            </div>

            <div class="input-wrapper input-wrapper--inline cabinet-expert__input-wrapper cabinet-expert__input-wrapper--m">
                <span class="input-wrapper__info">Пояснительная записка:</span>
                <div class="input-wrapper__file-block">
                    <input id="explanatoryNoteInput" type="file"
                        name="explanatory_note"
                        class="input-wrapper__input cabinet-expert__input"
                        required>
                    <label for="explanatoryNoteInput" class="input-wrapper__file-label">Выберите файл</label>
                    <span class="input-wrapper__file-text">Файл не выбран</span>
                </div>
            </div>

            <div class="input-wrapper input-wrapper--inline cabinet-expert__input-wrapper cabinet-expert__input-wrapper--m">
                <span class="input-wrapper__info">
                    Ведомость инвентаризации древесно - кустарниковой растительности:
                </span>
                <div class="input-wrapper__file-block">
                    <input id="statementInput" type="file"
                        class="input-wrapper__input cabinet-expert__input"
                        name="statement"
                        required>
                    <label for="statementInput" class="input-wrapper__file-label">Выберите файл</label>
                    <span class="input-wrapper__file-text">Файл не выбран</span>
                </div>
            </div>

            <div class="input-wrapper input-wrapper--inline cabinet-expert__input-wrapper cabinet-expert__input-wrapper--b">
                <span class="input-wrapper__info">
                    Схема расположения зеленых насаждений:
                </span>
                <div class="input-wrapper__file-block">
                    <input id="schemeInput" type="file"
                        name="scheme"
                        class="input-wrapper__input cabinet-expert__input"
                        required>
                    <label for="schemeInput" class="input-wrapper__file-label">Выберите файл</label>
                    <span class="input-wrapper__file-text">Файл не выбран</span>
                </div>
            </div>

            <div class="input-wrapper input-wrapper cabinet-expert__input-wrapper">
                <textarea id="additionalInput"
                    name="additional" rows="10"
                    class="input-wrapper__input cabinet-expert__input" required></textarea>
                <label for="additionalInput" class="input-wrapper__label">Примечание</label>
            </div>

            <button type="submit" class="button cabinet-expert__button">Отправить</button>
        </form>

        <a href="#" class="cabinet-expert__publish-link">Посмотреть все публикации эксперта</a>
    </main>
</div>


<script  src="assets/build/js/main_calendar.min.js"></script>
<?php @include_once('footer.php');?>

