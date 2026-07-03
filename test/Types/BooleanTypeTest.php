<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Types\BooleanType;

class BooleanTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new BooleanType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf(\DTS\eBaySDK\Types\BooleanType::class, $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf(\DTS\eBaySDK\Types\BaseType::class, $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = true;
        $this->assertEquals(true, $this->obj->value);
        $this->assertIsBool($this->obj->value);
    }
}
