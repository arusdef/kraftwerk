<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd462be62363d083fe1822cb31c806ca
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jenssegers\\Agent\\' => 17,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'H' => 
        array (
            'Hashids\\' => 8,
        ),
        'A' => 
        array (
            'Airbrake\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jenssegers\\Agent\\' => 
        array (
            0 => __DIR__ . '/..' . '/jenssegers/agent/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Hashids\\' => 
        array (
            0 => __DIR__ . '/..' . '/hashids/hashids/lib/Hashids',
        ),
        'Airbrake\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Airbrake',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
        'A' => 
        array (
            'Airbrake\\' => 
            array (
                0 => __DIR__ . '/..' . '/dbtlr/php-airbrake/src',
            ),
        ),
    );

    public static $classMap = array (
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd462be62363d083fe1822cb31c806ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd462be62363d083fe1822cb31c806ca::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcd462be62363d083fe1822cb31c806ca::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcd462be62363d083fe1822cb31c806ca::$classMap;

        }, null, ClassLoader::class);
    }
}
