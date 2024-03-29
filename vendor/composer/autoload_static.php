<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf52bcfa7bb890ec2501bc1be3f0d1a8d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'atk4\\ui\\' => 8,
            'atk4\\dsql\\' => 10,
            'atk4\\data\\' => 10,
            'atk4\\core\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'atk4\\ui\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/ui/src',
        ),
        'atk4\\dsql\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/dsql/src',
        ),
        'atk4\\data\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/data/src',
        ),
        'atk4\\core\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/core/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf52bcfa7bb890ec2501bc1be3f0d1a8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf52bcfa7bb890ec2501bc1be3f0d1a8d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
