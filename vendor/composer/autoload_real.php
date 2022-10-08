<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0d3b73e9f9e0ff9fd2ddfa7777aa303d
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit0d3b73e9f9e0ff9fd2ddfa7777aa303d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0d3b73e9f9e0ff9fd2ddfa7777aa303d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0d3b73e9f9e0ff9fd2ddfa7777aa303d::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit0d3b73e9f9e0ff9fd2ddfa7777aa303d::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire0d3b73e9f9e0ff9fd2ddfa7777aa303d($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire0d3b73e9f9e0ff9fd2ddfa7777aa303d($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
