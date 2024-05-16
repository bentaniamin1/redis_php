<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee236f9ea750ec2ea71ec60bc853dd92
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Predis\\' => 7,
        ),
        'A' => 
        array (
            'AminBentani\\RedisPhp\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
        'AminBentani\\RedisPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitee236f9ea750ec2ea71ec60bc853dd92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee236f9ea750ec2ea71ec60bc853dd92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee236f9ea750ec2ea71ec60bc853dd92::$classMap;

        }, null, ClassLoader::class);
    }
}
