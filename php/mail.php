<?php

$recepient = "ivivzu2@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$replyto = trim($_POST["_replyto"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nПошта: $_replyto \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");