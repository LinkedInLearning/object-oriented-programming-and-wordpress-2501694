<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitde5cc7a89cbc98235ae3397dc6c0f512
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

        spl_autoload_register(array('ComposerAutoloaderInitde5cc7a89cbc98235ae3397dc6c0f512', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitde5cc7a89cbc98235ae3397dc6c0f512', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitde5cc7a89cbc98235ae3397dc6c0f512::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitde5cc7a89cbc98235ae3397dc6c0f512::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirede5cc7a89cbc98235ae3397dc6c0f512($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirede5cc7a89cbc98235ae3397dc6c0f512($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}