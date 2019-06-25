<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac79bfdc80e623e05571d55269c07d0b
{
    public static $classMap = array (
        'Interfaces\\ObserverInterface' => __DIR__ . '/../..' . '/Interfaces/ObserverInterface.php',
        'Interfaces\\SubjectInterface' => __DIR__ . '/../..' . '/Interfaces/SubjectInterface.php',
        'Observers\\ObserverOne' => __DIR__ . '/../..' . '/Observers/ObserverOne.php',
        'Observers\\ObserverThree' => __DIR__ . '/../..' . '/Observers/ObserverThree.php',
        'Observers\\ObserverTwo' => __DIR__ . '/../..' . '/Observers/ObserverTwo.php',
        'Subjects\\Subject' => __DIR__ . '/../..' . '/Subjects/Subject.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitac79bfdc80e623e05571d55269c07d0b::$classMap;

        }, null, ClassLoader::class);
    }
}