<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ced8b3beeebd14497ab58f2643fcc27
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'AwesomeMotive\\WPContentImporter2\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'AwesomeMotive\\WPContentImporter2\\' => 
        array (
            0 => __DIR__ . '/..' . '/awesomemotive/wp-content-importer-v2/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ced8b3beeebd14497ab58f2643fcc27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ced8b3beeebd14497ab58f2643fcc27::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}