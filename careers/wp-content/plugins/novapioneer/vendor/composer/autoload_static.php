<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4b267d92684debc122e80d841442a3e
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Novapioneer\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Novapioneer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4b267d92684debc122e80d841442a3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4b267d92684debc122e80d841442a3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
