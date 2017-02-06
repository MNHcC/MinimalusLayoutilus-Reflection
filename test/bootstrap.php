<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace MNHcC\MinimalusLayoutilus\Reflection\Test;

/**
 * @author Michael Hegenbarth <mnh@mn-hegenbarth.de>
 */
// TODO: check include path
//ini_set('include_path', ini_get('include_path'));




error_reporting(E_ALL | E_STRICT);
chdir(__DIR__);

/**
 * Test bootstrap, for setting up autoloading
 */
class Bootstrap
{
    protected static $serviceManager;

    public static function init()
    {
        require_once '../vendor/autoload.php';
        require_once './src/Reflection/Test/ExampleClass.php';
    }
    
    protected static function initAutoloader()
    {
        
    }


    public static function chroot()
    {
        $rootPath = dirname(static::findParentPath('src'));
        chdir($rootPath);
    }

    protected static function findParentPath($path)
    {
        $dir = __DIR__;
        $previousDir = '.';
        while (!is_dir($dir . DIRECTORY_SEPARATOR . $path)) {
            $dir = dirname($dir);
            if ($previousDir === $dir) {
                return false;
            }
            $previousDir = $dir;
        }
        return $dir . DIRECTORY_SEPARATOR . $path;
    }
}

Bootstrap::init();
Bootstrap::chroot();
