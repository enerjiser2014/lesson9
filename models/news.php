<?php

require_once __DIR__ . '../core/db.php';

function findAllNews()
{
    dbConnect();
    $sql = 'SELECT * FROM news ORDER BY date DESC ';
    $ret = dbFindAllByQuery($sql);
    return $ret;
}

function findNewsById($id)
{
    dbConnect();
    $sql = 'SELECT * FROM news WHERE id=' . $id;
    $ret = dbFindNewsByQuery($sql);
    return $ret;
}

function addSiteNews($title, $text, $date)
{
    dbConnect();
    $sql = <<<EOD
INSERT INTO news (text, title, date) VALUES ('{$text}', '{$title}', '{$date}')
EOD;
    $ret = dbAddNews($sql);
    return $sql;
}

?>
