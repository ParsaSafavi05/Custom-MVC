<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc34d64e878bede8793cd0c421c58c5cb
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc34d64e878bede8793cd0c421c58c5cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc34d64e878bede8793cd0c421c58c5cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc34d64e878bede8793cd0c421c58c5cb::$classMap;

        }, null, ClassLoader::class);
    }
}
