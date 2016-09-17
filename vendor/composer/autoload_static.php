<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit957e593b9a96d09f6ca5e9136e6682ab
{
    public static $classMap = array (
        'postTypes' => __DIR__ . '/../..' . '/classes/class-post-types.php',
        'siteSetup' => __DIR__ . '/../..' . '/classes/class-site-setup.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit957e593b9a96d09f6ca5e9136e6682ab::$classMap;

        }, null, ClassLoader::class);
    }
}