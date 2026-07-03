<?php
namespace DTS\eBaySDK\FileTransfer\Types;

/**
 *
 * @property string href
 */
class XopInclude extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'href' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'href'
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

        if (!array_key_exists(self::class, self::$xmlNamespaces)) {
            self::$xmlNamespaces[self::class] = 'xmlns:xop="http://www.w3.org/2004/08/xop/include"';
        }

        $this->setValues(self::class, $childValues);
    }
}
