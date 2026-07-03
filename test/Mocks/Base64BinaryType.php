<?php
namespace DTS\eBaySDK\Test\Mocks;

class Base64BinaryType extends \DTS\eBaySDK\Types\Base64BinaryType
{
    private static $propertyTypes = [];

    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(self::class, self::$properties)) {
            self::$properties[self::class] = array_merge(self::$properties[parent::class], self::$propertyTypes);
        }

        if (!array_key_exists(self::class, self::$xmlNamespaces)) {
            self::$xmlNamespaces[self::class] = 'xmlns="http://davidtsadler.com"';
        }

        $this->setValues(self::class, $childValues);
    }
}
