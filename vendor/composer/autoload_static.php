<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit850d310a12386a6f8892ee3223914f35
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kamran\\Login\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kamran\\Login\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit850d310a12386a6f8892ee3223914f35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit850d310a12386a6f8892ee3223914f35::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit850d310a12386a6f8892ee3223914f35::$classMap;

        }, null, ClassLoader::class);
    }
}