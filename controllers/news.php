<?php

require_once '../models/news.php';
$news = findAllNews();
require_once '../views/shownews.php';

$d1 = strtotime('today');
echo '<br>';


?>