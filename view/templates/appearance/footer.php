<footer class="index_12">
    <section class="logo index_2">
        <a href="home" class="index_12">
            <section class="logoName siteName index_12">Лаура</section>
            <section class="desName">имидж-студия</section>
        </a>
    </section>

    <section class="phoneFooter index_2">
        <section class="strong">Телефоны для записи:</section>
        <section>+380978614290</section>
        <section>+380506148473</section>
        <a href="mailto:l.avrakhova@gmail.com">Задавайте вопросы по электронной почте</a>
    </section>

    <section class="addressFooter index_2">
        <a href="contacts">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                <g>
                    <circle fill="none" stroke="#A63E51" stroke-width="2" stroke-miterlimit="10" cx="32" cy="22" r="6"/>
                    <path fill="none" stroke="#A63E51" stroke-width="2" stroke-miterlimit="10" d="M53,22.735C52.948,10.73,43.599,1,32,1   s-21,9.73-21,21.735C11,38.271,31.965,63,31.965,63S53.069,38.271,53,22.735z"/>
                </g>
            </svg>
        </a>
        <section class="strong">Днепр</section>
        <section>пр. Дмитрия Яворницкого, 50</section>
    </section>

    <section class="addressFooter index_2">
        <section class="strong">График работы:</section>
        <section>Понедельник - Суббота</section>
        <section>с 9.00 до 20.00</section>
        <section>Воскресенье</section>
        <section>с 10.00 до 19.00</section>
    </section>

    <section class="addressFooter index_2">
        Соц
    </section>
</footer>

<?php
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = trim($url[0], "/");

    switch($url) {
        case "home":
            echo '<script src="../view/homePage/templates/js/main.js" type="module"></script>';
            break;
        case "contacts":
            echo '<script src="../view/contacts/templates/js/main.js" type="module"></script>';
            break;
        case "about":
            echo '<script src="../view/aboutAs/templates/js/main.js" type="module"></script>';
            break;
        default:
            echo '<script src="../view/homePage/templates/js/main.js" type="module"></script>';
            break;
    }
?>

</body>
</html>