<?php

require_once __DIR__ . '../site_config.php';

function dbConnect()
{
    mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    mysql_select_db(DB_NAME);
}

function dbFindAllByQuery($sql)
{
    dbConnect();
    $res = mysql_query($sql);
    $ret = [];
    while (false !== ($row = mysql_fetch_array($res))) {
        $ret[] = $row;
    }
    return $ret;
}

function dbFindNewsByQuery($sql)
{
    dbConnect();
    return dbFindAllByQuery($sql)[0];
}

function dbAddNews($sql)
{
    dbConnect();
    return mysql_query($sql);
}

?>
