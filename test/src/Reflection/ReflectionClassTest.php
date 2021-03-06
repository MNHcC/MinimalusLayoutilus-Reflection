<?php

namespace MNHcC\MinimalusLayoutilus\Reflection;
use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-02-06 at 16:16:38.
 */
class ReflectionClassTest extends TestCase {

    /**
     * @var ReflectionClass
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new ReflectionClass(new Test\ExampleClass());
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::replacedMasterClass
     * @todo   Implement testReplacedMasterClass().
     */
    public function testReplacedMasterClass() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::callStatic
     * @todo   Implement testCallStatic().
     */
    public function testCallStatic() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getReplacedMasterClass
     * @todo   Implement testGetReplacedMasterClass().
     */
    public function testGetReplacedMasterClass() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getMethod
     * @todo   Implement testGetMethod().
     */
    public function testGetMethod() {
        $this->assertInstanceOf(\ReflectionMethod::class, $this->object->getMethod('foo'));
        $this->assertInstanceOf(\ReflectionMethod::class, $this->object->getMethod('bar'));
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getConstants
     * @todo   Implement testGetConstants().
     */
    public function testGetConstants() {
        $fwConst = $this->object->getConstants(true);
        $this->assertEmpty($fwConst);
        $this->assertCount(0, $fwConst);
        $allConst = $this->object->getConstants();
        $this->assertInternalType('array', $allConst);
        $this->assertCount(6, $allConst);
        $prefixConst = $this->object->getConstants(false, 'TEST_FOO');
        $this->assertInternalType('array', $prefixConst);
        $this->assertCount(3, $prefixConst);
        $this->assertArrayHasKey('TEST_FOO_APPEL', $prefixConst);
        $this->assertArrayNotHasKey('TEST_BAR_CARROT', $prefixConst);
        $this->assertArraySubset(['TEST_FOO_APPEL' => 'appel'], $prefixConst);
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getFrameworkConstants
     * @todo   Implement testGetFrameworkConstants().
     */
    public function testGetFrameworkConstants() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getPrefixConstants
     * @todo   Implement testGetPrefixConstants().
     */
    public function testGetPrefixConstants() {
        $prefixConst = $this->object->getPrefixConstants('TEST_FOO');
        $this->assertInternalType('array', $prefixConst);
        $this->assertCount(3, $prefixConst);
        $this->assertArrayHasKey('TEST_FOO_APPEL', $prefixConst);
        $this->assertArrayNotHasKey('TEST_BAR_CARROT', $prefixConst);
        $this->assertArraySubset(['TEST_FOO_APPEL' => 'appel'], $prefixConst);
    }
    
    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getClass
     * @todo   Implement testGetClass().
     */
    public function testGetClass() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::__call
     * @todo   Implement test__call().
     */
    public function test__call() {
        $this->expectException(\MNHcC\MinimalusLayoutilus\StdLib\Exception\Exception::class);
        $this->assertSame($this->object->foo(''), 'foo');
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::__callStatic
     * @todo   Implement test__callStatic().
     */
    public function test__callStatic() {
        $this->expectException(\MNHcC\MinimalusLayoutilus\StdLib\Exception\Exception::class);
        $this->assertSame(ReflectionClass::foo(''), 'foo');
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getCalledClass
     * @todo   Implement testGetCalledClass().
     */
    public function testGetCalledClass() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getInstance
     * @todo   Implement testGetInstance().
     */
    public function testGetInstance() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::isInit
     * @todo   Implement testIsInit().
     */
    public function testIsInit() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getInstanceID
     * @todo   Implement testGetInstanceID().
     */
    public function testGetInstanceID() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::setInstanceID
     * @todo   Implement testSetInstanceID().
     */
    public function testSetInstanceID() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::issetInstance
     * @todo   Implement testIssetInstance().
     */
    public function testIssetInstance() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getInstanceArgs
     * @todo   Implement testGetInstanceArgs().
     */
    public function testGetInstanceArgs() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MNHcC\MinimalusLayoutilus\Reflection\ReflectionClass::getInstances
     * @todo   Implement testGetInstances().
     */
    public function testGetInstances() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}
