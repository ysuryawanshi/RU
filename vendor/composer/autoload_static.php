<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce5719e8f949d2a556dfbab091d490f7
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FileReader\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FileReader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Package',
        ),
    );

    public static $classMap = array (
        'FileReader\\ReadMyFile' => __DIR__ . '/../..' . '/Package/ReadMyFile.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce5719e8f949d2a556dfbab091d490f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce5719e8f949d2a556dfbab091d490f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce5719e8f949d2a556dfbab091d490f7::$classMap;

        }, null, ClassLoader::class);
    }
}
