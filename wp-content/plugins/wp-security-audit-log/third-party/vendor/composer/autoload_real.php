<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbc9b2788d841a60d096fa4c5a780a893
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

        spl_autoload_register(array('ComposerAutoloaderInitbc9b2788d841a60d096fa4c5a780a893', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbc9b2788d841a60d096fa4c5a780a893', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbc9b2788d841a60d096fa4c5a780a893::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        return $loader;
    }
}
