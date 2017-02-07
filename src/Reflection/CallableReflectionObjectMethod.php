<?php

namespace MNHcC\MinimalusLayoutilus\Reflection;

use MNHcC\MinimalusLayoutilus\StdLib;


/**
 * ReflectionObjectMethod is a warpper for methods of objects, 
 * you can call method dynamical from the name (string)
 * @author Michael Hegenbarth (carschrotter)
 * @package MNHcC\MinimalusLayoutilus
 * @subpackage Reflection
 * @copyright (c) 2013-2017, Michael Hegenbarth
 */
class CallableReflectionObjectMethod extends \ReflectionMethod {

    /**
     * is a default value
     * for invoke method
     */
    const defaultArg = '{defaultArg : "true", secure : "Ay0keRT1l8"}';

    protected $object;

    /**
     * @param object $object
     * @param string $name
     * @throws \Exception
     */
    public function __construct($object, $name) {
        if (!is_object($object)) {
            throw new Exception\InvalidArgumentException(sprintf('%s expects parameter 1 to be object, %s given', __METHOD__, gettype($object)), -1);
        }
        try {
            parent::__construct($object, $name);
        } catch (\Exception $exc) {
            throw new Exception\ReflectionMethodException($object, $name, $exc->getCode(), $exc);
        }
        $this->object = $object;
    }

    /**
     * 
     * @return mixed the method result.
     */
    public function __invoke() {
        return $this->invokeArgs($this->object, func_get_args());
    }

    /**
     * invokes a static method on the class of the object
     * @return mixed the result of method
     */
    public function invokeStatic() {
        return $this->invokeArgs(null, func_get_args());
    }
    

    /**
     * Invoke a method whit the given array as arguments on the object
     * @param mixed $parameter [optional] <p>
     * Zero or more parameters to be passed to the method.
     * It accepts a variable number of parameters which are passed to the method.
     * </p>
     * @param mixed $_ [optional]
     * @return mixed the method result.
     */
    public function invoke($parameter = null, $_ = null) {
        return $this->invokeArgs($this->object, func_get_args());
    }
    
    /**
     * Invoke args
     * @param object|array $object <p>
     * The object to invoke the method on. In case of static methods, you can pass
     * null to this parameter or you can use a Array to use the internal object.
     * </p>
     * @param array $args (optional)<p>
     * The parameters to be passed to the function, as an array.
     * </p>
     * @return mixed the method result.
     */
    public function invokeArgs($object, array $args = []) {
        if(is_array($object)) {
            $args = $object;
            $object = $this->object;
        }
        parent::invokeArgs($object, $args);
    }

        /**
     * set another object of the same type.
     * @param object $object
     * @return boolean 
     */
    public function setObject($object) {
        if (is_a($object, $this->class)) {
            $this->object = $object;
            return true;
        } else {
            //@ToDo implement a exeption
            return false;
        }
    }

}
