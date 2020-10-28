<main class="index_12">
    <?php
        if($entrySalon === true) {
            echo '<p class="msgSend">Заявка отправлена!</p>';
        } else {
            echo '<p class="msgSend">ОШИБКА! Повторите попытку или свяжитесь с салоном другими каналами связи.</p>';
        }
    ?>

    <a href="/home">На Главную</a>
</main>
