<?php

//Создадим переменную, которая будет содержать то, чтонам нужно.

$Peremenaya="https://api.telegram.org/bot197861322:AAGiXRO2U4ILuc7t9R_JiIvOQQmlEOdLOFA/sendMessage?disable_web_page_preview=true&chat_id=459282062&text=Нам написали тикет скорее отвечайте http://we4u.ru";

// создание нового ресурса cURL

$ch = curl_init();

// установка URL и других необходимых параметров

curl_setopt($ch, CURLOPT_URL, "$Peremenaya");

//а это что бы на страницу не выводилось

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

//это в справочнике прочтете

curl_setopt($ch, CURLOPT_HEADER, 0);

// загрузка страницы и выдача её браузеру другими словами при открытии страницы где вы этот скрипт сделаете автоматически отправится сообщение в заданный вами телеграм чат.

curl_exec($ch);

// завершение сеанса и освобождение ресурсов


curl_close($ch);

?>