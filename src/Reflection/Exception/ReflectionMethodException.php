<?php

namespace MNHcC\MinimalusLayoutilus\Reflection\Exception {

    use MNHcC\MinimalusLayoutilus\StdLib;
    use ReflectionException;

    /**
     * Description of ReflectionMethodException
     * 
     * @author Michael Hegenbarth (carschrotter)
     * @package MNHcC\MinimalusLayoutilus
     * @subpackage Reflection 
     */
    class ReflectionMethodException extends ReflectionException implements ExceptionInterface {

        use StdLib\Exception\ExceptionTrait;

        protected $_className = false;
        protected $_methodName = false;

        /**
         * 
         * @param string $method the name of the called method
         * @param string $class the name of the class
         * @param int $code
         * @param \Exception|\Throwable $previous
         */
        public function __construct($method = '', $class = '', $code = 0, $previous = null) {
            if (!empty($method) && !is_int($class)) {
                $message = 'No method ' . $method . '() implement in ' . $class;
                $this->_methodName = $method;
                $this->_className = $class;
            } elseif (is_int($class)) {
                $previous = $code !== 0 ? $code : $previous;
                $code = $class;
                $message = $method;
            }
            parent::__construct($message, $code, $previous);
        }

        public function __toString() {
            return $this->getMessage();
        }

        public function getClassName() {
            return $this->_className;
        }

        public function getMethodName() {
            return $this->_methodName;
        }

    }

}