<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80a37bddbb2a0e7be06dd8bdad428d7b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Site\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Site\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Site',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80a37bddbb2a0e7be06dd8bdad428d7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80a37bddbb2a0e7be06dd8bdad428d7b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
