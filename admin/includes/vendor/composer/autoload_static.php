<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd17e5ce222b48c8848a54946c7d76c6
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'classes\\Cat' => __DIR__ . '/../..' . '/classes/Cat.php',
        'classes\\Comment' => __DIR__ . '/../..' . '/classes/Comment.php',
        'classes\\Database' => __DIR__ . '/../..' . '/classes/Database.php',
        'classes\\Db_object' => __DIR__ . '/../..' . '/classes/Db_object.php',
        'classes\\Post' => __DIR__ . '/../..' . '/classes/Post.php',
        'classes\\Session' => __DIR__ . '/../..' . '/classes/Session.php',
        'classes\\User' => __DIR__ . '/../..' . '/classes/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd17e5ce222b48c8848a54946c7d76c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd17e5ce222b48c8848a54946c7d76c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd17e5ce222b48c8848a54946c7d76c6::$classMap;

        }, null, ClassLoader::class);
    }
}