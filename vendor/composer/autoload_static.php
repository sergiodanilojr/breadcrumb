<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit882f0b4133effe85586c9b5fdd4e0388
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ElePHPant\\Breadcrumb\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ElePHPant\\Breadcrumb\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit882f0b4133effe85586c9b5fdd4e0388::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit882f0b4133effe85586c9b5fdd4e0388::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit882f0b4133effe85586c9b5fdd4e0388::$classMap;

        }, null, ClassLoader::class);
    }
}
