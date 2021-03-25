<?php

namespace App\Factories;

class ModelsFactory
{
    
    public static function getModel($modelName) {
        static $allModels = [];
        
        if (class_exists($modelName)) {
            if (!isset($allModels[$modelName])){
                $allModels[$modelName] = new $modelName();
            }

            return $allModels[$modelName];
        } else {
            return new \Error("This class is not added to the system!");
        }
    }
}