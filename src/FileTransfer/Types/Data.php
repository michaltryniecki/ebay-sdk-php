<?php
namespace DTS\eBaySDK\FileTransfer\Types;

/**
 *
 * @property \DTS\eBaySDK\FileTransfer\Types\XopInclude $xopInclude
 */
class Data extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'xopInclude' => [
            'type' => \DTS\eBaySDK\FileTransfer\Types\XopInclude::class,
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'xop:Include'
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
            self::$xmlNamespaces[self::class] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(self::class, $childValues);
    }
}
