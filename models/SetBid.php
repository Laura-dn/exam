<?php

class SetBid
{
    public function entrySalon()
    {
        $nameClient = $_POST["name"];
        $desiredDate = $_POST["date"];
        $desiredTime = $_POST["time"];
        $to = $_POST["email"];
        $subj = "Заявка в Имидж-студию ЛАУРА";
        $headers = "From: no-reply@laura.kl.com.ua\r\n" .
                   "MIME-Version: 1.0\r\n" .
                   "Content-type: text/html; charset=utf-8\r\n";
        $msg =  '<html>
                <body>
                    <h3 style="font-family: bold;">Здравствуйте, ' . $nameClient . '! Спасибо за заявку!</h3>
                    <p>Ваша заявка принята Имидж-студией ЛАУРА. В ближайшее время представитель компании свяжется с Вами для уточнения деталей.</p>
                    <p>Желаемое время посещения: ' . $desiredDate . ' на ' . $desiredTime . '.</p>
                    <br>
                    <p>Другие услуги Студии Вы можете найти на сайте <a href="http://laura.kl.com.ua/">Имидж-студия ЛАУРА</a></p>
                    <hr>
                    <p>Телефон: +38 (097) 861-42-90</p>
                    <p>Email: l.avrakhova@gmail.com</p>
                    <p>Адрес: г. Днепр, пр. Дмитрия Яворницкого, 50</p>
                    <p>Всегда рады помочь, коллектив Имидж-студии ЛАУРА.</p>
                </body>
                </html>';

        $send = mail($to, $subj, $msg, $headers);

        return $send;
    }
}
