<?php

require_once '../models/news.php';

$title = $_POST['title'];
$text = $_POST['text'];
$date = $time;
addSiteNews($title, $text, $date);

$news = findAllNews();
require_once '../views/shownews.php'

?>