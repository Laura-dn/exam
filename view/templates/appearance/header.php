<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Avrakhova Laura">
    <meta name="description" content="IT Academy Step Dnipro; graduate work; Avrakhova L.">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/templates/images/logo.png">
    <title>Laura</title>
    <link rel="stylesheet" href="/templates/css/baseStyle.css">
    <link rel="stylesheet" href="/templates/css/gridLayout.css">
    <link rel="stylesheet" href="/templates/css/inputStyle.css">
    <link rel="stylesheet" href="/view/templates/css/header.css">
    <link rel="stylesheet" href="/view/templates/css/entrySalonForm.css">
    
    <?php
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = trim($url[0], "/");

        if(preg_match("/price/", $url)) {
            $url = "price";
        }

        if($url === "") {
            $url = "home";
        }

        switch($url) {
            case "home":
                echo '<link rel="stylesheet" href="/view/homePage/templates/css/main.css">';
                break;
            case "contacts":
                echo '<link rel="stylesheet" href="/view/contacts/templates/css/main.css">
                     <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
                     <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>';
                break;
            case "about":
                echo '<link rel="stylesheet" href="/view/aboutAs/templates/css/main.css">';
                break;
            case "price":
                echo '<link rel="stylesheet" href="/view/services/templates/css/main.css">';
                break;
            case "sendForm":
                echo '<link rel="stylesheet" href="/view/sendForm/templates/css/main.css">';
                break;
            default:
                echo '<link rel="stylesheet" href="/view/page404/templates/css/main.css">';
                break;
        }
    ?>

    <link rel="stylesheet" href="/view/templates/css/footer.css">
</head>
<body>
<header class="heading index_12">
    <section class="logo index_2">
        <a href="/home" class="index_12">
            <section class="logoName siteName index_12">Лаура</section>
            <section class="desName">имидж-студия</section>
        </a>
    </section>

    <section class="entrySalon index_2">
        <button id="btnGetForm" class="index_10">ЗАПИСАТЬСЯ В САЛОН</button>

        <section class="address">
            г. Днепр, пр. Дмитрия Яворницкого, 50
            <a href="/contacts">на карте</a>
        </section>
    </section>

    <section class="search index_2">
        <input type="search" name="search" id="inputSearch" placeholder="Поиск..." class="index_10">

        <button id="btnSearch">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" fill="#A63E51"></path>
                <path d="M0 0h24v24H0z" fill="none"></path>
            </svg>
        </button>
    </section>

    <section class="mirror index_2">
        <button id="mirror" class="index_10">ЗЕРКАЛО</button>
    </section>

    <section class="phoneHeader index_2">
        <section>+380978614290</section>
        <section>+380506148473</section>
    </section>
</header>

<nav class="index_12">
        <a href="/home" class="menuItem" id="home">ГЛАВНАЯ</a>
        <a href="/about" class="menuItem" id="about">О НАС</a>
        <a href="/price" class="menuItem" id="price">УСЛУГИ И ЦЕНЫ</a>
        <a href="" class="menuItem">ЗАЛ КРАСОТЫ</a>
        <a href="" class="menuItem">БУТИК</a>
        <a href="" class="menuItem">БЛОГ</a>
        <a href="contacts" class="menuItem" id="contacts">КОНТАКТЫ</a>
</nav>
