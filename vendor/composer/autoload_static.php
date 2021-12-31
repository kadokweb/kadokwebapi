<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80ad7a47738870ab81ee5c77fe230d41
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kadokweb\\KadokwebApi\\' => 21,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kadokweb\\KadokwebApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80ad7a47738870ab81ee5c77fe230d41::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80ad7a47738870ab81ee5c77fe230d41::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80ad7a47738870ab81ee5c77fe230d41::$classMap;

        }, null, ClassLoader::class);
    }
}
