<?php
namespace DTS\eBaySDK\Types;

/**
 * Base class for objects that correspond to double types in the XML.
 *
 * @property double $value
 */
class DoubleType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'value' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(self::class, self::$properties)) {
            self::$properties[self::class] = array_merge(self::$properties[parent::class], self::$propertyTypes);
        }

        $this->setValues(self::class, $childValues);
    }
}
