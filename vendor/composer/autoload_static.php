<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0a803a12815eb2e3ffbade04b5e01f6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sandhya\\DIExample\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sandhya\\DIExample\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0a803a12815eb2e3ffbade04b5e01f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0a803a12815eb2e3ffbade04b5e01f6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
