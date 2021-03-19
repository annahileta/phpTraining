<?php

namespace MVCFramework;

use News;

class NewsController
{
    private $newsModel;

    public function __construct()
    {
        $this->newsModel = new News();
    }

    public function actionIndex()
    {
        $newsList = array();
        $newsList = $this->newsModel->getNewsList();

        require_once(ROOT . '\views\index.php');
    }

    public function actionView($id)
    {
        $newsItem = $this->newsModel->getNewsItemById($id);

        require_once(ROOT . '\views\view.php');
    }

    public function actionAddNewArticle()
    {
        require_once(ROOT . '\views\addNewArticle.php');
    }

    public function actionInsertNewArticle($data)
    {
        $this->newsModel->insertArticle($data);

        $this->actionIndex();
    }
}