<?php

include_once ROOT.'\components\Db.php';

class News extends BaseModel
{
    public static function getNewsItemById($id)
    {
        $db = Db::getConnection();

        $result = mysqli_query($db, 'SELECT * FROM news WHERE id=' . $id);

        $newsItem = $result;

        Db::closeConnection($db);

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
        Db::closeConnection($db);
        return $newsList;
    }

    public static function insertArticle($data)
   {
        $db = Db::getConnection();

        $sql = sprintf("INSERT INTO news (title, date, content, author_name) VALUES (
            '%s', '%s', '%s', '%s'
        )", 
        mysqli_real_escape_string($db, $data['title']),
        mysqli_real_escape_string($db, $data['date']), 
        mysqli_real_escape_string($db, $data['content']),
        mysqli_real_escape_string($db, $data['author']));

        mysqli_query($db, $sql);

        Db::closeConnection($db);
    }
}