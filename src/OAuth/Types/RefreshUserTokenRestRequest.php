<?php
namespace DTS\eBaySDK\OAuth\Types;

/**
 *
 * @property string $grant_type
 * @property string $refresh_token
 * @property string $scope
 */
class RefreshUserTokenRestRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'grant_type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'grant_type'
        ],
        'refresh_token' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'redirect_uri'
        ],
        'scope' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'code'
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
