<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Types\URIType;

class URITypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new URIType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf(\DTS\eBaySDK\Types\URIType::class, $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf(\DTS\eBaySDK\Types\BaseType::class, $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 'foo';
        $this->assertEquals('foo', $this->obj->value);
        $this->assertIsString($this->obj->value);
    }
}
