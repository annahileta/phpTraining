<?php

include_once ROOT.'\model\News.php';

class NewsController implements BaseController
{
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getNewsList();

        require_once(ROOT . '\views\index.php');
        
        return true;
    }

    public function actionView($id)
    {
        $newsList = News::getNewsItemById($id);

        require_once(ROOT . '\views\view.php');

        return true;
    }

    public function actionAddNewArticle()
    {
        require_once(ROOT . '\views\addNewArticle.php');
        return true;
    }

    public function actionInsertNewArticle($data)
    {
        News::insertArticle($data);

        $this->actionIndex();
        return true;
    }
}