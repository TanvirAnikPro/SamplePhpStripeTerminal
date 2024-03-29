<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit819db1237f958f39eb6f8db83f360c2e
{
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit819db1237f958f39eb6f8db83f360c2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit819db1237f958f39eb6f8db83f360c2e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit819db1237f958f39eb6f8db83f360c2e::$classMap;

        }, null, ClassLoader::class);
    }
}
