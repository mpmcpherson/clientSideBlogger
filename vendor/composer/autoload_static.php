<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bca5e5058bf356f14f52ae1d26add17
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'rest\\api\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'rest\\api\\' => 
        array (
            0 => __DIR__ . '/..' . '/michaelmcpherson/php-insecure-rest/api/config',
            1 => __DIR__ . '/..' . '/michaelmcpherson/php-insecure-rest/api/objects',
            2 => __DIR__ . '/..' . '/michaelmcpherson/php-insecure-rest/api/shared',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bca5e5058bf356f14f52ae1d26add17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bca5e5058bf356f14f52ae1d26add17::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0bca5e5058bf356f14f52ae1d26add17::$classMap;

        }, null, ClassLoader::class);
    }
}
