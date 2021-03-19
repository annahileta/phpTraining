<?php

include_once ROOT.'\model\News.php';

class NewsController
{
    private News $newsModel;

    public function __construct()
    {
        $this->newsModel = new News();
    }

    public function actionIndex()
    {
        $newsList = array();
        $newsList = $this->newsModel->getNewsList();

        require_once(ROOT . '\views\index.php');
        
        return true;
    }

    public function actionView($id)
    {
        $newsItem = $this->newsModel->getNewsItemById($id);

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
        $this->newsModel->insertArticle($data);

        $this->actionIndex();
        return true;
    }
}