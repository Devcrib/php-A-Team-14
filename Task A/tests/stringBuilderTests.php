<?php
use PHPUnit\Framework\TestCase;

 
class StringBuilderTests extends TestCase
{


    //will support method chaining cos d class has a property that
    //that will be used by other calling methods of the same instance
    public function testloadclass()
    {
        $string = new App\String\StringBuilder;

        $this->assertInstanceOf(App\String\StringBuilder::class, $string);
    }

    //added new string
    public function testPut()
    {
        $string = new App\String\StringBuilder('initial string');

        $actual = $string->put(' add string to the end');

        $this->assertSame('initial string add string to the end', $actual);
    }

    public function testInsert()
    {
        $string = new App\String\StringBuilder('initial string');

        $index = 3;
        $this->assertGreaterThan(-1, $index);

        $this->assertStringMatchesFormat('%a', $string->insert( $this->assertGreaterThan(-1, $index), ' new string' ));
    }

    public function testIfIsEmpty() 
    {
        $string = new App\String\StringBuilder(' ');
        $actual = $string->string;
        $this->assertStringMatchesFormat('%a', $actual);
    }

    public function testEmpty()
    {
        $string = new App\String\StringBuilder('string');   

        $this->assertEquals('', $string->empty());
    }

    public function testBuild()
    {
        $string = new App\String\StringBuilder('built string');
        $actual = $string->string;
        $this->assertStringMatchesFormat('%a', $actual);
    }
 
}