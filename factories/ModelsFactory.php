<?php

class ModelsFactory
{
    static $allModels = [];

    public static function getModel($modelName) {
        if (class_exists($modelName)) {
            if (!isset(self::$allModels[$modelName])){
                self::$allModels[$modelName] = new $modelName();
            }

            return self::$allModels[$modelName];
        } else {
            return new Error("This class is not added to the system!");
        }
    }
}