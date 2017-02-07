<?php

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MNHcC\MinimalusLayoutilus\Reflection\Exception;

use MNHcC\MinimalusLayoutilus\StdLib;
use InvalidArgumentException as BaseInvalidArgumentException;

/**
 * 
 * @todo add description to InvalidArgumentException
 * @author Michael Hegenbarth <mnh@mn-hegenbarth.de>
 */
class InvalidArgumentException extends BaseInvalidArgumentException implements ExceptionInterface {

    use StdLib\Exception\ExceptionTrait;
}
