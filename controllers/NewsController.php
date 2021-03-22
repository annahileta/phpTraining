<?php

class NewsController extends BaseController
{ 
    public function actionIndex() {
        $newsList = NewsFactory::CreateNews()->getNewsList();

        require_once(ROOT . '\views\index.php');
    }

    public function actionView($id) {
        $newsItem = NewsFactory::CreateNews()->getNewsItemById($id);

        require_once(ROOT . '\views\view.php');
    }

    public function actionAddNewArticle() {
        require_once(ROOT . '\views\addNewArticle.php');
    }

    public function actionInsertNewArticle($data) {
        NewsFactory::CreateNews()->insertArticle($data);

        $this->actionIndex();
    }

    public static function GetInstance() {
        return new self();
    }
}