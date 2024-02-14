<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd751713988987e9331980363e24189ce
{
    public static $classMap = array (
        'ComposerAutoloaderInitd751713988987e9331980363e24189ce' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitd751713988987e9331980363e24189ce' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/queryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/request.php',
        'Router' => __DIR__ . '/../..' . '/core/router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd751713988987e9331980363e24189ce::$classMap;

        }, null, ClassLoader::class);
    }
}