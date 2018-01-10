<?php
use PHPUnit\Framework\TestCase;

 
class FibonacciTests extends TestCase
{
    function fibonacciSequence($position){
        $fibarray = array(0, 1);
            for ( $i=2; $i<=$position; ++$i ) {
                $fibarray[$i] = $fibarray[$i-1] + $fibarray[$i-2];
            }
        return $fibarray[$position];
    }

    public function testPositionIsInteger()
    {
        $this->assertTrue(is_int($this->fibonacciSequence(3)));
    }
    
    public function testPositionIsString()
    {
        try {
            $this->assertTrue(is_int($this->fibonacciSequence(null)));
        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "Undefined index: ");
        }
    }

    public function testFibbyIsCalledWithoutArgument()
    {
        try {
            $this->assertTrue(is_int($this->fibonacciSequence()));
        } catch (Exception $e) {
            $this->assertStringStartsWith('Missing argument 1 for', $e->getMessage());
        }
         
    }
    
}