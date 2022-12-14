<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6905d174a918935d9df877cca963dbd
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6905d174a918935d9df877cca963dbd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6905d174a918935d9df877cca963dbd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6905d174a918935d9df877cca963dbd::$classMap;

        }, null, ClassLoader::class);
    }
}
