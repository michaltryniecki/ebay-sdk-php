<?php
namespace DTS\eBaySDK\Test\Mocks;

class SimpleClass extends \DTS\eBaySDK\Types\BaseType
{
    private static $propertyTypes = [
        'integer' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'integer'
        ],
        'string' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'string'
        ],
        'double' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'double'
        ],
        'booleanTrue' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'booleanTrue'
        ],
        'booleanFalse' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'booleanFalse'
        ],
        'DateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DateTime'
        ],
        'SimpleClass' => [
            'type' => \DTS\eBaySDK\Test\Mocks\SimpleClass::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SimpleClass'
        ],
        'strings' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'strings'
        ],
        'integers' => [
            'type' => 'integer',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'integers'
        ],
        'base64BinaryType' => [
            'type' => \DTS\eBaySDK\Test\Mocks\Base64BinaryType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'base64BinaryType'
        ],
        'booleanType' => [
            'type' => \DTS\eBaySDK\Test\Mocks\BooleanType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'booleanType'
        ],
        'decimalType' => [
            'type' => \DTS\eBaySDK\Test\Mocks\DecimalType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalType'
        ],
        'doubleType' => [
            'type' => \DTS\eBaySDK\Test\Mocks\DoubleType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'doubleType'
        ],
        'integerType' => [
            'type' => \DTS\eBaySDK\Test\Mocks\IntegerType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'integerType'
        ],
        'stringType' => [
            'type' => \DTS\eBaySDK\Test\Mocks\StringType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'stringType'
        ],
        'tokenType' => [
            'type' => \DTS\eBaySDK\Test\Mocks\TokenType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tokenType'
        ],
        'uriType' => [
            'type' => \DTS\eBaySDK\Test\Mocks\URIType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'uriType'
        ],
        'IntegerAttribute' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'IntegerAttribute'
        ],
        'doubleAttribute' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'doubleAttribute'
        ],
        'BooleanTrueAttribute' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'BooleanTrueAttribute'
        ],
        'booleanFalseAttribute' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'booleanFalseAttribute'
        ],
        'DateTimeAttribute' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'DateTimeAttribute'
        ],
        'decimalTypes' => [
            'type' => \DTS\eBaySDK\Test\Mocks\DecimalType::class,
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'decimalTypes'
        ],
        'decimalTypePosInteger' => [
            'type' => \DTS\eBaySDK\Test\Mocks\DecimalType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalTypePosInteger'
        ],
        'decimalTypePosFloat' => [
            'type' => \DTS\eBaySDK\Test\Mocks\DecimalType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalTypePosFloat'
        ],
        'decimalTypeNegInteger' => [
            'type' => \DTS\eBaySDK\Test\Mocks\DecimalType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalTypeNegInteger'
        ],
        'decimalTypeNegFloat' => [
            'type' => \DTS\eBaySDK\Test\Mocks\DecimalType::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalTypeNegFloat'
        ],
        'anyType' => [
            'type' => 'any',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'anyType'
        ],
        'anyTypes' => [
            'type' => 'any',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'anyTypes'
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

        $this->setValues(self::class, $childValues);
    }
}
