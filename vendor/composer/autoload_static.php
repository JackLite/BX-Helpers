<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26c023eb9e3fc02712d0f3e05433dda5
{
    public static $classMap = array (
        'JackLite\\BX\\Debug' => __DIR__ . '/../..' . '/src/Debug.php',
        'JackLite\\BX\\Timer' => __DIR__ . '/../..' . '/src/Timer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit26c023eb9e3fc02712d0f3e05433dda5::$classMap;

        }, null, ClassLoader::class);
    }
}