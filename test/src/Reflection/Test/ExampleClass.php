<?php

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MNHcC\MinimalusLayoutilus\Reflection\Test;

/**
 * 
 * @todo add description to ExampleClass
 * @author Michael Hegenbarth <mnh@mn-hegenbarth.de>
 */
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
