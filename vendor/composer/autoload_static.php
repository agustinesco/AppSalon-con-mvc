<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf42e13947764497a144443192caf21d
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'clases\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Model\\' => 6,
            'MVC\\' => 4,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'clases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf42e13947764497a144443192caf21d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf42e13947764497a144443192caf21d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf42e13947764497a144443192caf21d::$classMap;

        }, null, ClassLoader::class);
    }
}