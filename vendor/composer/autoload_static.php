<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94a463faeacead1d8a60e69c3a66bd9f
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit94a463faeacead1d8a60e69c3a66bd9f::$classMap;

        }, null, ClassLoader::class);
    }
}
