<?php

include_once ROOT.'\model\News.php';

class NewsController
{
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();

        require_once(ROOT . '\views\index.php');
        
        return true;
    }

    public function actionView($category, $id)
    {
        $newsList = News::getNewsItemById($id);

        require_once(ROOT . '\views\view.php');

        return true;
    }

    public function actionAddNewArticle()
    {
        //$newsList = News::insertNewData($data);

        require_once(ROOT . '\views\addNewArticle.php');
        echo 'Hi';
        return true;
    }
}