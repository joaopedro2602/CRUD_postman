<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5251d8f49ff1422aaa13e284ab02ec5
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5251d8f49ff1422aaa13e284ab02ec5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5251d8f49ff1422aaa13e284ab02ec5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5251d8f49ff1422aaa13e284ab02ec5::$classMap;

        }, null, ClassLoader::class);
    }
}