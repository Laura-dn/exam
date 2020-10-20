<section id="entrySalonBlock" class="index_12">
    <h3>Запись он-лайн</h3>
    <h2>Оставте заявку</h2>
    <p>Просто укажите удобный для Вас день и оставте</p>
    <p>Ваши контакты - мы подберем лучшее время для Вас</p>

    <form action="/sendForm" class="index_6" method="POST">
        <input type="text" name="name" class="index_10" placeholder="Ваше имя">

        <section>
            <input type="phone" name="phone" class="index_5" placeholder="+38 (___) ___-__-__">
            <input type="email" name="email" class="index_5" placeholder="Ваш E-mail">
        </section>

        <section>
            <input type="date" name="date" class="index_5" <?php echo 'min="' . date("Y-m-d") . '"'; ?>>
            <input list="time" name="time" class="index_5" placeholder="--:--">
                <datalist id="time">
                    <option value="09:00">
                    <option value="10:00">
                    <option value="11:00">
                    <option value="12:00">
                    <option value="13:00">
                    <option value="14:00">
                    <option value="15:00">
                    <option value="16:00">
                    <option value="17:00">
                    <option value="18:00">
                    <option value="19:00">
                </datalist>
        </section>

        <section>
            <input type="submit" value="Записаться" id="btnEntrySalon" class="index_2">
            <input type="submit" value="Закрыть" id="btnCloseForm" class="index_2">
        </section>
    </form>

    <p>График работы: пн-сб 9.00 - 20.00, вс 10.00 - 19.00</p>
    <p>г. Днепр, пр. Дмитрия Яворницкого, 50 (<a href="contacts">на карте</a>)</p>
</section>
