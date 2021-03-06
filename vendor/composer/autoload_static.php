<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitccd106b2a85c2947296a7d4a470bebea
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitccd106b2a85c2947296a7d4a470bebea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitccd106b2a85c2947296a7d4a470bebea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitccd106b2a85c2947296a7d4a470bebea::$classMap;

        }, null, ClassLoader::class);
    }
}
