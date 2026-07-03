<?php
namespace DTS\eBaySDK\OAuth\Types;

use DTS\eBaySDK\StatusCodeTrait;
use DTS\eBaySDK\HttpHeadersTrait;

/**
 *
 * @property string $access_token
 * @property string $token_type
 * @property integer $expires_in
 * @property string $refresh_token
 * @property string $error
 * @property string $error_description
 * @property string $error_uri
 */
class GetAppTokenRestResponse  extends \DTS\eBaySDK\Types\BaseType
{
    use StatusCodeTrait;
    use HttpHeadersTrait;

    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'access_token' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'access_token'
        ],
        'token_type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'token_type'
        ],
        'expires_in' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expires_in'
        ],
        'refresh_token' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refresh_token'
        ],
        'error' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'error'
        ],
        'error_description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'error_description'
        ],
        'error_uri' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'error_uri'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     * @param int $statusCode Status code
     * @param array $headers HTTP Response headers.
     */
    public function __construct(array $values = [], $statusCode = 200, array $headers = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(self::class, self::$properties)) {
            self::$properties[self::class] = array_merge(self::$properties[parent::class], self::$propertyTypes);
        }

        $this->setValues(self::class, $childValues);

        $this->statusCode = (int)$statusCode;

        $this->setHeaders($headers);
    }
}
