<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4aad1af4a32c9d7f615ef9eee843ae86
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4aad1af4a32c9d7f615ef9eee843ae86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4aad1af4a32c9d7f615ef9eee843ae86::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
