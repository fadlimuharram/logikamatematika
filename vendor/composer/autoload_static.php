<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf90ff0aab9c6f1d2f3a2d9976483b2d0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Matematika\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Matematika\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Matematika',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf90ff0aab9c6f1d2f3a2d9976483b2d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf90ff0aab9c6f1d2f3a2d9976483b2d0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}