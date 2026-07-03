<?php
namespace DTS\eBaySDK\Test\OAuth\Types;

use DTS\eBaySDK\OAuth\Types\RefreshUserTokenRestRequest;

class RefreshUserTokenRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new RefreshUserTokenRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf(\DTS\eBaySDK\OAuth\Types\RefreshUserTokenRestRequest::class, $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf(\DTS\eBaySDK\Types\BaseType::class, $this->obj);
    }

    public function testProperties()
    {
        $this->obj->grant_type = 'foo';
        $this->obj->refresh_token = 'bar';
        $this->obj->scope = ['foo', 'bar', 'baz'];

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->refresh_token);
        $this->assertInstanceOf(\DTS\eBaySDK\Types\RepeatableType::class, $this->obj->scope);
    }
}
