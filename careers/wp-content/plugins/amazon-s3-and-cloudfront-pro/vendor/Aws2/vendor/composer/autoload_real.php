<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6aae2ad87930358e7c7b36cea3852fa0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('DeliciousBrains\WP_Offload_S3\Aws2\Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit6aae2ad87930358e7c7b36cea3852fa0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \DeliciousBrains\WP_Offload_S3\Aws2\Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit6aae2ad87930358e7c7b36cea3852fa0', 'loadClassLoader'));

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

            call_user_func(\DeliciousBrains\WP_Offload_S3\Aws2\Composer\Autoload\ComposerStaticInit6aae2ad87930358e7c7b36cea3852fa0::getInitializer($loader));
        } else {
            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        return $loader;
    }
}