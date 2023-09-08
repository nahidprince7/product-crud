<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite551d12a3909a20a88343bfdc659ec6f
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nahid\\Crud\\Requests\\' => 20,
            'Nahid\\Crud\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nahid\\Crud\\Requests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Requests',
        ),
        'Nahid\\Crud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite551d12a3909a20a88343bfdc659ec6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite551d12a3909a20a88343bfdc659ec6f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite551d12a3909a20a88343bfdc659ec6f::$classMap;

        }, null, ClassLoader::class);
    }
}