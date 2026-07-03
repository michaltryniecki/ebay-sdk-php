<?php
namespace DTS\eBaySDK\Test\Mocks;

class ComplexClass extends \DTS\eBaySDK\Test\Mocks\SimpleClass
{
    private static $propertyTypes = [
        'foo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'foo'
        ],
        'AmountClass' => [
            'type' => \DTS\eBaySDK\Test\Mocks\AmountClass::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountClass'
        ],
        'simpleClasses' => [
            'type' => \DTS\eBaySDK\Test\Mocks\SimpleClass::class,
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'simpleClasses'
        ]
    ];

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

        if (!array_key_exists(self::class, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[self::class] = 'root';
        }

        $this->setValues(self::class, $childValues);
    }
}
