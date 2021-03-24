<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0172b2bd0a1bd31a43442118116b2e03
{
    public static $files = array (
        'ce3c4dc4b47fdf66adf007267d8a79b1' => '/MVCFramework.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Interfaces\\' => 15,
            'App\\Factories\\' => 14,
            'App\\Controllers\\' => 16,
            'App\\Config\\' => 11,
            'App\\Components\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'App\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/interfaces',
        ),
        'App\\Factories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/factories',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'App\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'App\\Components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
    );

    public static $classMap = array (
        'App\\Components\\Db' => __DIR__ . '/../..' . '/components/Db.php',
        'App\\Components\\DefaultPages' => __DIR__ . '/../..' . '/components/DefaultPages.php',
        'App\\Components\\Router' => __DIR__ . '/../..' . '/components/Router.php',
        'App\\Components\\View' => __DIR__ . '/../..' . '/components/View.php',
        'App\\Config\\EnvParser' => __DIR__ . '/../..' . '/config/EnvParser.php',
        'App\\Config\\Routes' => __DIR__ . '/../..' . '/config/Routes.php',
        'App\\Controllers\\AuthorizationController' => __DIR__ . '/../..' . '/controllers/AuthorizationController.php',
        'App\\Controllers\\BaseController' => __DIR__ . '/../..' . '/controllers/BaseController.php',
        'App\\Controllers\\ErrorController' => __DIR__ . '/../..' . '/controllers/ErrorController.php',
        'App\\Controllers\\NewsController' => __DIR__ . '/../..' . '/controllers/NewsController.php',
        'App\\Factories\\ModelsFactory' => __DIR__ . '/../..' . '/factories/ModelsFactory.php',
        'App\\Interfaces\\Handler' => __DIR__ . '/../..' . '/interfaces/Handler.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0172b2bd0a1bd31a43442118116b2e03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0172b2bd0a1bd31a43442118116b2e03::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0172b2bd0a1bd31a43442118116b2e03::$classMap;

        }, null, ClassLoader::class);
    }
}
