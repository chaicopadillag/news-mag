<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24d44d58e0ea80d95d21ab780fd19e8a
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit24d44d58e0ea80d95d21ab780fd19e8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24d44d58e0ea80d95d21ab780fd19e8a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
