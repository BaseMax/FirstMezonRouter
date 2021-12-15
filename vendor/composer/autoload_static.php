<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4872604a5f9bedf319bc3b5947d0f4cf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mezon\\Router\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mezon\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/mezon/router/Mezon/Router',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4872604a5f9bedf319bc3b5947d0f4cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4872604a5f9bedf319bc3b5947d0f4cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4872604a5f9bedf319bc3b5947d0f4cf::$classMap;

        }, null, ClassLoader::class);
    }
}