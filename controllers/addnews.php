<?php

require_once '../models/news.php';

$title = $_POST['title'];
$text = $_POST['text'];
$date = date('Y-m-d');
if (!empty($_POST)) {
    // + добавить проверку того что внутри $title, $text перед отправкой в фунцию
    addSiteNews($title, $text, $date);
}
header('Location:' . '../controllers/news.php')


?>