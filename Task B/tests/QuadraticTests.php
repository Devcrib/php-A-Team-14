<?php
use PHPUnit\Framework\TestCase;

 
class QuadraticTests extends TestCase
{
    function quadratic($a, $b, $c, $root = ''){
        $precision = 3; 
    
        $numerator = $b*$b-4*$a*$c;
        if ($numerator < 0) { 
            $plusminusone = " + "; $plusminustwo = " - ";
            $numerator *=-1;
            $complex=(sqrt($numerator)/(2*$a));
            if ($a < 0){ 
                $plusminustwo = " + ";
                $plusminusone = " - ";
                $complex *= -1;
            } 
            $X1 = round(-$b/(2*$a), $precision).$plusminusone.round($complex, $precision).'i';
            $X2 = round(-$b/(2*$a), $precision).$plusminustwo.round($complex, $precision).'i';
        }
    
        else if ($numerator == 0) { 
            $X1 = round(-$b/(2*$a), $precision);
            $X2 = round(-$b/(2*$a), $precision);
        } 
    
        else { 
            $X1 = (-$b+sqrt($numerator))/(2*$a);
            $X1 = round($X1, $precision);
            $X2 = (-$b-sqrt($numerator))/(2*$a);
            $X2 = round($X2, $precision);
        } 
    
        
        if ($root == 'X1') {return $X1;}
        if ($root == 'X2') {return $X2;}
        if ($root == 'both' || $root == '') {return $X1. ' and ' .$X2;}
    }

    public function testThatFunctionExecutesGivenProperParameters()
    {
        $this->assertRegExp('/[0-9]/', $this->quadratic(2,4,5, 'both'));
    }

    public function testIncorrectParameters()
    {
        try{
            $this->assertRegExp('/[0-9]/', $this->quadratic('ddf', 'fdf' , 'dfdf'));
        } catch( Exception $e){
            $this->assertStringStartsWith('Division by zero', $e->getMessage() );
        }
        
    }
    
    public function testMissingArgument()
    {
        try{
            $this->assertEquals('sdfsd', $this->quadratic());
        } catch( Exception $e){
            $this->assertStringStartsWith('Missing argument ', $e->getMessage() );
        }
        
    }

}