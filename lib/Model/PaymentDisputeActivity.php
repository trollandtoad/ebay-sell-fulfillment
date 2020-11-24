<?php
/**
 * PaymentDisputeActivity
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.19.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Fulfillment\Model;

use \ArrayAccess;
use \eBay\Sell\Fulfillment\ObjectSerializer;

/**
 * PaymentDisputeActivity Class Doc Comment
 *
 * @category Class
 * @description This type is used by each recorded activity on a payment dispute, from creation to resolution.
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PaymentDisputeActivity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDisputeActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activity_date' => 'string',
        'activity_type' => 'string',
        'actor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activity_date' => null,
        'activity_type' => null,
        'actor' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activity_date' => 'activityDate',
        'activity_type' => 'activityType',
        'actor' => 'actor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_date' => 'setActivityDate',
        'activity_type' => 'setActivityType',
        'actor' => 'setActor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_date' => 'getActivityDate',
        'activity_type' => 'getActivityType',
        'actor' => 'getActor'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['activity_date'] = $data['activity_date'] ?? null;
        $this->container['activity_type'] = $data['activity_type'] ?? null;
        $this->container['actor'] = $data['actor'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets activity_date
     *
     * @return string|null
     */
    public function getActivityDate()
    {
        return $this->container['activity_date'];
    }

    /**
     * Sets activity_date
     *
     * @param string|null $activity_date The timestamp in this field shows the date/time of the payment dispute activity. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return self
     */
    public function setActivityDate($activity_date)
    {
        $this->container['activity_date'] = $activity_date;

        return $this;
    }

    /**
     * Gets activity_type
     *
     * @return string|null
     */
    public function getActivityType()
    {
        return $this->container['activity_type'];
    }

    /**
     * Sets activity_type
     *
     * @param string|null $activity_type This enumeration value indicates the type of activity that occured on the payment dispute. For example, a value of DISPUTE_OPENED is returned when a payment disute is first created, a value indicating the seller's decision on the dispute, such as SELLER_CONTEST, is returned when seller makes a decision to accept or contest dispute, and a value of DISPUTE_CLOSED is returned when a payment disute is resolved. See ActivityEnum for an explanation of each of the values that may be returned here. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ActivityEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setActivityType($activity_type)
    {
        $this->container['activity_type'] = $activity_type;

        return $this;
    }

    /**
     * Gets actor
     *
     * @return string|null
     */
    public function getActor()
    {
        return $this->container['actor'];
    }

    /**
     * Sets actor
     *
     * @param string|null $actor This enumeration value indicates the actor that performed the action. Possible values include the BUYER, SELLER, CS_AGENT (eBay customer service), or SYSTEM. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ActorEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setActor($actor)
    {
        $this->container['actor'] = $actor;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


