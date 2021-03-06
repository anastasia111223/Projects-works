<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe9590c547fbacdb9fb248dad9877dc7
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cakes\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cakes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe9590c547fbacdb9fb248dad9877dc7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe9590c547fbacdb9fb248dad9877dc7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe9590c547fbacdb9fb248dad9877dc7::$classMap;

        }, null, ClassLoader::class);
    }
}
