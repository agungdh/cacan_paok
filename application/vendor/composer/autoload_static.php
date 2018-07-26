<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbca262e1e93c4f2ca194525e8ba41a01
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gumlet\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gumlet\\' => 
        array (
            0 => __DIR__ . '/..' . '/gumlet/php-image-resize/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbca262e1e93c4f2ca194525e8ba41a01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbca262e1e93c4f2ca194525e8ba41a01::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
