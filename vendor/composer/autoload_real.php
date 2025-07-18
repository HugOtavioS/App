<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit48aa53c2fcdb2a5bd4bb59d65533a107
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

        spl_autoload_register(array('ComposerAutoloaderInit48aa53c2fcdb2a5bd4bb59d65533a107', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit48aa53c2fcdb2a5bd4bb59d65533a107', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit48aa53c2fcdb2a5bd4bb59d65533a107::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
