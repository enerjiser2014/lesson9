<?php

require_once __DIR__ . '../models/news.php';
$news = findAllNews();
require_once __DIR__ . '../views/shownews.php';

?>