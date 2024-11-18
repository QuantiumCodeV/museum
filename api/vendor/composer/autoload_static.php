<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedcf22dd6343aa00a9d6ee8ec3b3e8d8
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitedcf22dd6343aa00a9d6ee8ec3b3e8d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedcf22dd6343aa00a9d6ee8ec3b3e8d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitedcf22dd6343aa00a9d6ee8ec3b3e8d8::$classMap;

        }, null, ClassLoader::class);
    }
}