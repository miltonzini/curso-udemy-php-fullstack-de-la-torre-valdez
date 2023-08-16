<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf40d6aacb970d352c0a3bbd7f5b32f55
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf40d6aacb970d352c0a3bbd7f5b32f55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf40d6aacb970d352c0a3bbd7f5b32f55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf40d6aacb970d352c0a3bbd7f5b32f55::$classMap;

        }, null, ClassLoader::class);
    }
}