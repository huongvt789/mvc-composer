<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf9d5eaea72b57323c679a5df7240c2e
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf9d5eaea72b57323c679a5df7240c2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf9d5eaea72b57323c679a5df7240c2e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
