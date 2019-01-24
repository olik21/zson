<?php @include_once('header.php'); ?>

<?php @include_once('breadcrumbs.php');?>

<div class="container mo-post mo-post-left-sidebar">
    <h1>Приёмная граждан</h1>

    <aside class="sidebar sidebar--wide sidebar--float">
        <section class="menu">
            <h2 class="visually-hidden">Меню</h2>
            <ul>
                <li class="active dropdown">
                    <a href="#">Написать сообщение</a>

                    <ul class="dropdown__menu">
                        <li class="dropdown__item"><a href="#">Депутату</a></li>
                        <li class="dropdown__item active"><a href="#">Группе депутатов</a></li>
                        <li class="dropdown__item"><a href="#">Фракции</a></li>
                        <li class="dropdown__item"><a href="#">Законодательному собранию</a></li>
                    </ul>
                </li>

                <li><a href="#">Частые вопросы и ответы</a></li>
                <li><a href="#">Бесплатная юридическая помощ</a></li>
                <li><a href="#">Статистика обращения граждан</a></li>
            </ul>

        </section>
    </aside>

    <main class="reception container-sidebar">
        <link rel="stylesheet" href="mo-css.css">
        <form class="reception__form" method="POST" action=".">
            <div class="input-wrapper reception__input-wrapper">
                <input id="surnameInput" type="text" name="surname" required="required" class="input-wrapper__input reception__input">
                <label for="surnameInput" class="input-wrapper__label">Фамилия</label>
            </div>

            <div class="input-wrapper reception__input-wrapper">
                <input id="nameInput" type="text" name="name" required="required" class="input-wrapper__input reception__input">
                <label for="nameInput" class="input-wrapper__label">Имя</label>
            </div>

            <div class="input-wrapper reception__input-wrapper">
                <input id="patronymicInput" type="text" name="patronymic" required="required" class="input-wrapper__input reception__input">
                <label for="patronymicInput" class="input-wrapper__label">Отчество</label>
            </div>

            <div class="input-wrapper reception__input-wrapper">
                <input id="emailInput" type="email" name="email" required="required" class="input-wrapper__input reception__input">
                <label for="emailInput" class="input-wrapper__label">E-mail</label>
            </div>

            <div class="input-wrapper reception__input-wrapper reception__input-wrapper--b reception__input-wrapper--right-txt">
                <select id="senderInput"  name="sender" required="required" class="input-wrapper__select reception__select">
                    <option value>Отправить от:</option>
                    <option value="1">Другой вариант:</option>
                </select>

                <a class="reception__link" href="#">Войти через Госуслуги</a>
            </div>

            <div class="input-wrapper reception__input-wrapper">
                <input id="deputyInput" type="text" name="deputy" required="required" class="input-wrapper__input reception__input">
                <label for="deputyInput" class="input-wrapper__label">ФИО депутата</label>
            </div>

            <div class="input-wrapper reception__input-wrapper">
                <button id="addDeputyBtn"
                    class="button reception__button reception__button--add reception__button--right"
                    type="button">
                    Добавить депутата
                </button>
            </div>

            <div class="deputies-block tabs">
                <ul class="deputies-block__link-list">
                    <li class="deputies-block__tab-link tabs__link active" data-tab="1">По алфавиту</li>
                    <li class="deputies-block__tab-link tabs__link" data-tab="2">По фракции</li>
                    <li class="deputies-block__tab-link tabs__link" data-tab="3">По округу</li>
                    <li class="deputies-block__tab-link tabs__link" data-tab="4">По комитету</li>
                </ul>

                <div class="deputies-block__content">
                    <select id="fractionInput"  name="fraction"
                        required="required"
                        class="input-wrapper__select reception__select deputies-block__select">
                        <option value>Выбрать фракцию:</option>
                    </select>

                    <div class="deputies-block__tabs">
                        <div class="deputies-block__tab tabs__tab active" data-tab="1">
                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="#" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="#" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="#" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="#" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="#" class="deputies-block__link">Добавить</a>
                            </article>
                        </div>

                        <div class="deputies-block__tab tabs__tab" data-tab="2">
                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="" class="deputies-block__link">Добавить</a>
                            </article>

                            <article class="deputies-block__item">
                                <div class="deputies-block__card">
                                    <img src="https://placehold.it/86x117" alt="test alt">
                                    <div class="deputies-block__card-info">
                                        <h3 class="deputies-block__card-title">Иванов Иван Иванович</h3>

                                        <p>Электронная почта: name@site.ru</p>
                                        <p>Телефон : +0 000 00 00 000</p>
                                    </div>
                                </div>
                                <a href="" class="deputies-block__link">Добавить</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-wrapper reception__input-wrapper">
                <input id="subjectInput" type="text" name="subject" required="required" class="input-wrapper__input reception__input">
                <label for="subjectInput" class="input-wrapper__label">Тема сообщения</label>
            </div>

            <div class="input-wrapper input-wrapper reception__input-wrapper">
                <textarea id="textInput"
                    name="text" rows="10"
                    class="input-wrapper__input" required></textarea>
                <label for="textInput" class="input-wrapper__label">Текст сообщения</label>
            </div>

            <button type="submit" class="button reception__button">Отправить</button>
        </form>


    </main>
</div>

<script  src="/markup/assets/build/js/add-deputies.js"></script>
<?php @include_once('footer.php');?>

