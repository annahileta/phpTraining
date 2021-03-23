<?php

class ModelsFactory
{
    private $allModels = array();
    private $news;
    private $authorization;
    
    public function __construct()
    {
        $possibleModelsFile = ROOT.'/factories/PossibleModels.php';
        $this->allModels = require_once($possibleModelsFile);
    }

    public static function getModel($modelName) {
        if (in_array($modelName, self::$allModels)) {
            $getModelMethod = 'get'. $modelName .'Model';
            return self::$getModelMethod();
        } else {
            return new Error("The model is not registered in possible models.");
        }
    }

    private static function getNewsModel() {
        if (isset(self::$news) === false) { 
            self::$news = new News();
        }

        return self::$news;
    }

    private static function getAuthorizationModel() {
        if (isset(self::$authorization) === false) { 
            self::$authorization = new Authorization();
        }

        return self::$authorization;
    }
}