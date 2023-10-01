<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7397a15cf1a767340ec0e4274c381907
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jonathan\\Week5\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jonathan\\Week5\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7397a15cf1a767340ec0e4274c381907::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7397a15cf1a767340ec0e4274c381907::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7397a15cf1a767340ec0e4274c381907::$classMap;

        }, null, ClassLoader::class);
    }
}
