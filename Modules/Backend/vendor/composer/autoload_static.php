<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0334198e6707f976b172622b9a45a1d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Backend\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0334198e6707f976b172622b9a45a1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0334198e6707f976b172622b9a45a1d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
