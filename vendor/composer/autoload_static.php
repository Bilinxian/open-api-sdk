<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b836155e83681ee27fcae3e25a09e69
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wsb\\OpenApi\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wsb\\OpenApi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b836155e83681ee27fcae3e25a09e69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b836155e83681ee27fcae3e25a09e69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b836155e83681ee27fcae3e25a09e69::$classMap;

        }, null, ClassLoader::class);
    }
}
