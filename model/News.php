<?php

include_once ROOT.'\components\Db.php';

class News
{
    public static function getNewsItemById($id)
    {
        $db = Db::getConnection();

        $result = mysqli_query($db, 'SELECT * FROM news WHERE id=' . $id);

        $newsItem = $result;
        return $newsItem;
    }

    public static function getNewsList()
    {
        $db = Db::getConnection();

        $newsList = array();

        $result = mysqli_query($db, 'SELECT * FROM news ORDER BY date DESC LIMIT 10');

        $i = 0;
        foreach ($result as $row) {
            $newsList[$i] = $row;
            $i++;
        }
        return $newsList;
    }
}