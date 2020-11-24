<?php
/**
 * LineItemFulfillmentInstructions
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
 * LineItemFulfillmentInstructions Class Doc Comment
 *
 * @category Class
 * @description This type contains the specifications for processing the fulfillment of a line item, including the handling window and the delivery window. These fields provide guidance for eBay Guaranteed Delivery as well as for non-guaranteed delivery.
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LineItemFulfillmentInstructions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItemFulfillmentInstructions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'guaranteed_delivery' => 'bool',
        'max_estimated_delivery_date' => 'string',
        'min_estimated_delivery_date' => 'string',
        'ship_by_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'guaranteed_delivery' => null,
        'max_estimated_delivery_date' => null,
        'min_estimated_delivery_date' => null,
        'ship_by_date' => null
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
        'guaranteed_delivery' => 'guaranteedDelivery',
        'max_estimated_delivery_date' => 'maxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'minEstimatedDeliveryDate',
        'ship_by_date' => 'shipByDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guaranteed_delivery' => 'setGuaranteedDelivery',
        'max_estimated_delivery_date' => 'setMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'setMinEstimatedDeliveryDate',
        'ship_by_date' => 'setShipByDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guaranteed_delivery' => 'getGuaranteedDelivery',
        'max_estimated_delivery_date' => 'getMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'getMinEstimatedDeliveryDate',
        'ship_by_date' => 'getShipByDate'
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
        $this->container['guaranteed_delivery'] = $data['guaranteed_delivery'] ?? null;
        $this->container['max_estimated_delivery_date'] = $data['max_estimated_delivery_date'] ?? null;
        $this->container['min_estimated_delivery_date'] = $data['min_estimated_delivery_date'] ?? null;
        $this->container['ship_by_date'] = $data['ship_by_date'] ?? null;
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
     * Gets guaranteed_delivery
     *
     * @return bool|null
     */
    public function getGuaranteedDelivery()
    {
        return $this->container['guaranteed_delivery'];
    }

    /**
     * Sets guaranteed_delivery
     *
     * @param bool|null $guaranteed_delivery This field is returned as true if the order line item is qualified for eBay Guaranteed Delivery, or false if it is not eligible. Only domestic shipments are available for eBay Guaranteed Delivery. At this time, eBay Guaranteed Delivery is only available to a select number of sellers on the US and Australia sites, but this feature will be enabled on more eBay sites in 2019. There are two different eBay Guaranteed Delivery options - 'Handling time' option and 'Door-to-Door' option. With both options, the seller is commiting to getting the order delivered to the buyer within three business days after purchase. With the 'Handling time' option, the seller's stated handling time for a listing must be 'same-day' or '1-day', and at least one of the available shipping service options should have a shipping time that guarantees that the buyer receives the order on time. With this option, eBay will set the 'ship-by date' and expected delivery window for the seller, and the seller should just make sure they physically ship the order by the shipToDate. With the 'Door-to-door' option, the seller must create regional shipping rate tables (with shipping costs and delivery times based on destination regions), and then apply these regional shipping rates/delivery times to the listing. If a 'Door-to-door' order does not arrive on time, the seller must refund the buyer the full shipping cost (if any), and the buyer also has the option of returning the item for a full refund, and the seller will also have to pay the return shipping cost. With 'Handling time' option, as long as the seller meets the stated handling time, and ships using the correct shipping service option, eBay will refund the buyer the shipping cost and pay for return shipping label (if buyer wants to return item) if the order arrives after the expected delivery time. For more information on the details and requirements of eBay Guaranteed Delivery, see the Offering eBay Guaranteed Delivery help topic. This field will always be returned regardless of whether the listing site offers eBay Guaranteed Delivery or if the seller is opted in to the feature.
     *
     * @return self
     */
    public function setGuaranteedDelivery($guaranteed_delivery)
    {
        $this->container['guaranteed_delivery'] = $guaranteed_delivery;

        return $this;
    }

    /**
     * Gets max_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['max_estimated_delivery_date'];
    }

    /**
     * Sets max_estimated_delivery_date
     *
     * @param string|null $max_estimated_delivery_date The estimated latest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options. If the listing is eligible for eBay Guaranteed Delivery (value of guaranteedDelivery field is true, the seller must pay extra attention to this date, as a failure to deliver by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. Note: This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return self
     */
    public function setMaxEstimatedDeliveryDate($max_estimated_delivery_date)
    {
        $this->container['max_estimated_delivery_date'] = $max_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets min_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['min_estimated_delivery_date'];
    }

    /**
     * Sets min_estimated_delivery_date
     *
     * @param string|null $min_estimated_delivery_date The estimated earliest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options. Note: This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return self
     */
    public function setMinEstimatedDeliveryDate($min_estimated_delivery_date)
    {
        $this->container['min_estimated_delivery_date'] = $min_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets ship_by_date
     *
     * @return string|null
     */
    public function getShipByDate()
    {
        return $this->container['ship_by_date'];
    }

    /**
     * Sets ship_by_date
     *
     * @param string|null $ship_by_date The latest date and time by which the seller should ship line item in order to meet the expected delivery window. This timestamp will be set by eBay based on time of purchase and the seller's stated handling time. If the listing is eligible for eBay Guaranteed Delivery (value of guaranteedDelivery field is true, the seller must pay extra attention to this date, as a failure to physically ship the line item by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. Note: This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z
     *
     * @return self
     */
    public function setShipByDate($ship_by_date)
    {
        $this->container['ship_by_date'] = $ship_by_date;

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


