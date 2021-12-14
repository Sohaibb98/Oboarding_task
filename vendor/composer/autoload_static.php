<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit337b1974e4877ceca6e3fdee9cfcb2b5
{
    public static $files = array (
        'fc73bab8d04e21bcdda37ca319c63800' => __DIR__ . '/..' . '/mikecao/flight/flight/autoload.php',
        '5b7d984aab5ae919d3362ad9588977eb' => __DIR__ . '/..' . '/mikecao/flight/flight/Flight.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit337b1974e4877ceca6e3fdee9cfcb2b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit337b1974e4877ceca6e3fdee9cfcb2b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit337b1974e4877ceca6e3fdee9cfcb2b5::$classMap;

        }, null, ClassLoader::class);
    }
}