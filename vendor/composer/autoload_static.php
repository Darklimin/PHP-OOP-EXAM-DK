<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92b0329744130869cf523115df949772
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DariusKliminskas\\PhpOopExamDk\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DariusKliminskas\\PhpOopExamDk\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit92b0329744130869cf523115df949772::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92b0329744130869cf523115df949772::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92b0329744130869cf523115df949772::$classMap;

        }, null, ClassLoader::class);
    }
}
