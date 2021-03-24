<?php

namespace App\Controllers;
use App\Factories\ModelsFactory;

class NewsController extends BaseController
{ 
    public function actionIndex() {
        $newsList = ModelsFactory::getModel('News')->getNewsList();

        require_once(ROOT . '\views\index.php');
    }

    public function actionView($id) {
        $newsItem = ModelsFactory::getModel('News')->getNewsItemById($id);

        require_once(ROOT . '\views\view.php');
    }

    public function actionAddNewArticle() {
        require_once(ROOT . '\views\addNewArticle.php');
    }

    public function actionInsertNewArticle($data) {
        ModelsFactory::getModel('News')->insertArticle($data);

        $this->actionIndex();
    }
}