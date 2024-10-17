<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc34d64e878bede8793cd0c421c58c5cb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc34d64e878bede8793cd0c421c58c5cb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc34d64e878bede8793cd0c421c58c5cb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc34d64e878bede8793cd0c421c58c5cb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
