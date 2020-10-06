<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10b6562e3c3d4a27f6124db0b56ac5ba
{
    public static $classMap = array (
        'AboutController' => __DIR__ . '/../..' . '/controllers/AboutController.php',
        'BaseModel' => __DIR__ . '/../..' . '/models/BaseModel.php',
        'ComposerAutoloaderInit10b6562e3c3d4a27f6124db0b56ac5ba' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit10b6562e3c3d4a27f6124db0b56ac5ba' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'ContactController' => __DIR__ . '/../..' . '/controllers/ContactController.php',
        'CourseController' => __DIR__ . '/../..' . '/controllers/CourseController.php',
        'CsslearnController' => __DIR__ . '/../..' . '/controllers/CsslearnController.php',
        'HomeController' => __DIR__ . '/../..' . '/controllers/HomeController.php',
        'HtmlcsslearnController' => __DIR__ . '/../..' . '/controllers/HtmlcsslearnController.php',
        'HtmllearnController' => __DIR__ . '/../..' . '/controllers/HtmllearnController.php',
        'JsdatatypesController' => __DIR__ . '/../..' . '/controllers/JsdatatypesController.php',
        'JsfundamentalsController' => __DIR__ . '/../..' . '/controllers/JsfundamentalsController.php',
        'JsvariablesController' => __DIR__ . '/../..' . '/controllers/JsvariablesController.php',
        'LoginController' => __DIR__ . '/../..' . '/controllers/LoginController.php',
        'PhpincludeController' => __DIR__ . '/../..' . '/controllers/PhpincludeController.php',
        'PhpintroController' => __DIR__ . '/../..' . '/controllers/PhpintroController.php',
        'PhpsyntaxController' => __DIR__ . '/../..' . '/controllers/PhpsyntaxController.php',
        'RegisterController' => __DIR__ . '/../..' . '/controllers/RegisterController.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'UserModel' => __DIR__ . '/../..' . '/models/UserModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit10b6562e3c3d4a27f6124db0b56ac5ba::$classMap;

        }, null, ClassLoader::class);
    }
}