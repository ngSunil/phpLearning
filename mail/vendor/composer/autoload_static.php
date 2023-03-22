<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec5e353880a14713c5abf9b14f2433a4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec5e353880a14713c5abf9b14f2433a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec5e353880a14713c5abf9b14f2433a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec5e353880a14713c5abf9b14f2433a4::$classMap;

        }, null, ClassLoader::class);
    }
}
