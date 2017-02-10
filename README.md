### Status
[![Build Status](https://travis-ci.org/MNHcC/MinimalusLayoutilus-Reflection.svg?branch=master)](https://travis-ci.org/MNHcC/MinimalusLayoutilus-Reflection)
[![Coverage Status](https://coveralls.io/repos/github/MNHcC/MinimalusLayoutilus-Reflection/badge.svg?branch=master)](https://coveralls.io/github/MNHcC/MinimalusLayoutilus-Reflection?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/589dda42940b230032da58e7/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/589dda42940b230032da58e7)
#MinimalusLayoutilus Reflection
a set of custom reflection classes for the MNHcC MinimalusLayoutilus framework and projects or other projects
##installation
###composer on shell
```shell
composer config "repositories.MNHcC/MinimalusLayoutilus-Reflection" vcs https://github.com/MNHcC/MinimalusLayoutilus-Reflection.git
composer config "repositories.MNHcC/MinimalusLayoutilus-Stdlib" vcs https://github.com/MNHcC/MinimalusLayoutilus-Stdlib.git
composer require "MNHcC/MinimalusLayoutilus-Reflection:*@dev"
```
###composer.json
```json
{
    "repositories": {
        "MNHcC/MinimalusLayoutilus-Reflection": {
            "type": "vcs",
            "url": "https://github.com/MNHcC/MinimalusLayoutilus-Reflection.git"
        },
        "MNHcC/MinimalusLayoutilus-Stdlib": {
            "type": "vcs",
            "url": "https://github.com/MNHcC/MinimalusLayoutilus-Stdlib.git"
        }
    },
    "require": {
        "MNHcC/MinimalusLayoutilus-Reflection": "*@dev"
    }
}
```
##Examples
```php
<?php

class ExampleClass {
    
    const TEST_FOO_APPEL = 'appel';
    const TEST_FOO_PEAR = 'pear';
    const TEST_FOO_BANANA = 'banana';
    
    const TEST_BAR_CARROT = 'carrot';
    const TEST_BAR_RADISH = 'radish';
    const TEST_BAR_CAULIFLOWER = 'cauliflower';
    
    public function foo($e){
        return 'foo';
    }
    static public function bar($e){
        return 'bar';
    }
}
$reflM = new MNHcC\MinimalusLayoutilus\Reflection\CallableReflectionObjectMethod(new ExampleClass(), 'foo'); 
$reflM('baz'); //call ExampleClass::foo('baz') and return 'foo'
$reflM->invoke(1, 2, 3)//call ExampleClass::foo(1, 2, 3) and return 'foo'
$reflM->invokeArgs([1, 2, 3])//call ExampleClass::foo(1, 2, 3) and return 'foo'
```