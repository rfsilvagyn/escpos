<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ed292834ffd6ccabee18e2d4fc1ddbc
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mike42\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mike42\\' => 
        array (
            0 => __DIR__ . '/..' . '/mike42/escpos-php/src/Mike42',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ed292834ffd6ccabee18e2d4fc1ddbc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ed292834ffd6ccabee18e2d4fc1ddbc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}