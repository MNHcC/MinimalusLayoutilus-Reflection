<?php

namespace MNHcC\MinimalusLayoutilus\Reflection;

/**
 * ReflectionObjectMethod is a warpper for methods of objects, 
 * you can call method dynamical from the name (string)
 * @author Michael Hegenbarth (carschrotter)
 * @package MNHcC\Reflection
 * @copyright (c) 2013-2017, Michael Hegenbarth
 */
class ReflectionStaticMethod extends \ReflectionMethod {

    public function __construct($class, $name) {
        parent::__construct($class, $name);
        if (!$this->isStatic()) {
            throw new Exception('Method is not Static');
        }
    }

    public function __invoke() {
        if (func_num_args() > 0) {
            return self::invokeArgs(func_get_args());
        } else {
            return self::invoke();
        }
    }

    /**
     * invokes a static method on the class of the object
     * @param array $args
     * @return mixed the result of method
     */
    public function invokeArgs($args = [], array $placeholder = []) {
        if (!ArrayHelper::isArray($args)) {
            throw new Exception('$args is not array');
        }
        return parent::invokeArgs(null, $args);
    }

    public function getClosureScopeClass() {
        parent::getClosureScopeClass();
    }

    /**
     * Invokes a method on the class
     * @param mixed $parameter [optional] <p>
     * Zero or more parameters to be passed to the method.
     * It accepts a variable number of parameters which are passed to the method.
     * </p>
     * @param mixed $_ [optional]
     * @return mixed the method result.
     */
    public function invoke($parameter = null, $_ = null) {
        if (func_num_args() > 0) {
            return self::invokeArgs(func_get_args());
        } else {
            return parent::invoke(null);
        }
    }

}
