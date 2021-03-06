<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad997ffdbb31ae1e8ce271b44e0a2777
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitad997ffdbb31ae1e8ce271b44e0a2777::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad997ffdbb31ae1e8ce271b44e0a2777::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitad997ffdbb31ae1e8ce271b44e0a2777::$classMap;

        }, null, ClassLoader::class);
    }
}
