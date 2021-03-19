<?php

namespace MVCFramework;
use MVCFramework\BaseModel;

class News extends BaseModel
{
    public function getNewsItemById($id)
    {
        $db = $this->getDbClassInstance()->getConnection();

        $newsItem = $db->query('SELECT * FROM news WHERE id=' . $id);

        return $newsItem;
    }

    public function getNewsList()
    {

        $db = $this->getDbClassInstance()->getConnection();

        $newsList = array();
        $i = 0;

        try {
            foreach($db->query('SELECT * from news') as $row) {
                $newsList[$i] = $row;
                $i++;
            }
            $db = null;
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
        return $newsList;
    }

    public function insertArticle($data)
   {
        $db = $this->getDbClassInstance()->getConnection();

        $sql = sprintf("INSERT INTO news (title, date, content, author_name) VALUES (
            '%s', '%s', '%s', '%s'
        )", 
        mysqli_real_escape_string($db, $data['title']),
        mysqli_real_escape_string($db, $data['date']), 
        mysqli_real_escape_string($db, $data['content']),
        mysqli_real_escape_string($db, $data['author']));
        
        $db->query($sql);
    }
}