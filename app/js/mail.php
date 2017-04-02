<?php

$recepient = "ketino_g@mail.ru";
$sitename = "Quajomeds";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$adress1 = trim($_POST["adress1"]);
$adress2 = trim($_POST["adress2"]);
$zipcode = trim($_POST["zipcode"]);
$message = "Имя: $name \nEmail: $email \nadress1: $adress1 \nadress: $adress2 \nzipcode: $zipcode";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
