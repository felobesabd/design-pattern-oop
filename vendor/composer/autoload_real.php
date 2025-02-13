<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitddbab82a92ec396d1f53749e2a1c842f
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

        spl_autoload_register(array('ComposerAutoloaderInitddbab82a92ec396d1f53749e2a1c842f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitddbab82a92ec396d1f53749e2a1c842f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitddbab82a92ec396d1f53749e2a1c842f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
