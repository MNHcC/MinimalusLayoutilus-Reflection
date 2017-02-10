<?php

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MNHcC\MinimalusLayoutilus\Reflection;

use ReflectionMethod;
use MNHcC\MinimalusLayoutilus\StdLib\Helper\AbstractArrayHelper as ArrayHelper;
/**
 * 
 * @todo add description to CallableReflectionMethod
 * @author Michael Hegenbarth <mnh@mn-hegenbarth.de>
 */
abstract class CallableReflectionMethod extends ReflectionMethod {
    
    protected $objectContext = null;

    protected $newscope = null;
    
    /**
     * 
     * Constructs a ReflectionMethod
     * @param object|string $class <p>
     * Classname or object (instance of the class) that contains the method.
     * </p>
     * @param string $name <p>
     * Name of the method.
     * </p>
     * @throws Exception\ReflectionMethodException
     */
    public function __construct($object, $name = '') {
        if(ArrayHelper::isArray($object)) {
            list($object, $name) = ArrayHelper::toArray($object);
        } elseif(empty($name)) {
            throw new Exception\InvalidArgumentException(sprintf('Missing argument 2 for %s()', __METHOD__));
        }
        if (is_object($object)) {
           $this->objectContext = $object;
        }
        try {
            parent::__construct($object, $name);
        } catch (\Exception $exc) {
            throw new Exception\ReflectionMethodException($object, $name, $exc->getCode(), $exc);
        }
    }

    public function getClosureThis() {
        if($this->objectContext){
            return $this->objectContext; 
        }
        return parent::getClosureThis();
    }

    public function getClosureScopeClass() {
        $scClass = parent::getClosureScopeClass();
        return $scClass ? $scClass : $this->class;
        
    }

    
}
