<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit267c7e165e183147ccdb493c7ba60811
{
    public static $classMap = array (
        'App\\Controllers\\ConferenceController' => __DIR__ . '/../..' . '/app/controllers/ConferenceController.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/controllers/Controller.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Core\\Validator' => __DIR__ . '/../..' . '/core/Validator.php',
        'App\\Models\\Project' => __DIR__ . '/../..' . '/app/models/Project.php',
        'ComposerAutoloaderInit267c7e165e183147ccdb493c7ba60811' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit267c7e165e183147ccdb493c7ba60811' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit267c7e165e183147ccdb493c7ba60811::$classMap;

        }, null, ClassLoader::class);
    }
}
