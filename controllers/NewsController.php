<?php

namespace App\Controllers;
use App\Factories\ModelsFactory;
use App\Components\View;

class NewsController
{ 
    public function actionIndex() {
        $newsList = ModelsFactory::getModel('News')->getNewsList();

        View::create('index', [$newsList]);
    }

    public function actionView($id) {
        $newsItem = ModelsFactory::getModel('News')->getNewsItemById($id);

        View::create('view', [$newsItem]);
    }

    public function actionAddNewArticle() {
        View::create('addNewArticle');
    }

    public function actionInsertNewArticle($data) {
        ModelsFactory::getModel('News')->insertArticle($data);

        $this->actionIndex();
    }
}