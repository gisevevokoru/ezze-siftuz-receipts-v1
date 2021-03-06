<?php
/**
 * Partner
 *
 * PHP version 5
 *
 * @category Class
 * @package  EzzeSiftuz\ReceiptsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Receipts API
 *
 * Interface for the partner to get receipts information
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EzzeSiftuz\ReceiptsV1\Model;

use \ArrayAccess;
use \EzzeSiftuz\ReceiptsV1\ObjectSerializer;

/**
 * Partner Class Doc Comment
 *
 * @category Class
 * @package  EzzeSiftuz\ReceiptsV1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Partner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Partner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'street' => 'string',
'zip_code' => 'string',
'city' => 'string',
'country' => 'string',
'vat_id' => 'string',
'register_number' => 'string',
'legal_representatives' => 'string',
'district_court' => 'string',
'head_of_supervisory_board' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'street' => null,
'zip_code' => null,
'city' => null,
'country' => null,
'vat_id' => null,
'register_number' => null,
'legal_representatives' => null,
'district_court' => null,
'head_of_supervisory_board' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'name' => 'name',
'street' => 'street',
'zip_code' => 'zipCode',
'city' => 'city',
'country' => 'country',
'vat_id' => 'vatId',
'register_number' => 'registerNumber',
'legal_representatives' => 'legalRepresentatives',
'district_court' => 'districtCourt',
'head_of_supervisory_board' => 'headOfSupervisoryBoard'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'street' => 'setStreet',
'zip_code' => 'setZipCode',
'city' => 'setCity',
'country' => 'setCountry',
'vat_id' => 'setVatId',
'register_number' => 'setRegisterNumber',
'legal_representatives' => 'setLegalRepresentatives',
'district_court' => 'setDistrictCourt',
'head_of_supervisory_board' => 'setHeadOfSupervisoryBoard'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'street' => 'getStreet',
'zip_code' => 'getZipCode',
'city' => 'getCity',
'country' => 'getCountry',
'vat_id' => 'getVatId',
'register_number' => 'getRegisterNumber',
'legal_representatives' => 'getLegalRepresentatives',
'district_court' => 'getDistrictCourt',
'head_of_supervisory_board' => 'getHeadOfSupervisoryBoard'    ];

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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
        $this->container['register_number'] = isset($data['register_number']) ? $data['register_number'] : null;
        $this->container['legal_representatives'] = isset($data['legal_representatives']) ? $data['legal_representatives'] : null;
        $this->container['district_court'] = isset($data['district_court']) ? $data['district_court'] : null;
        $this->container['head_of_supervisory_board'] = isset($data['head_of_supervisory_board']) ? $data['head_of_supervisory_board'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['zip_code'] === null) {
            $invalidProperties[] = "'zip_code' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['vat_id'] === null) {
            $invalidProperties[] = "'vat_id' can't be null";
        }
        if ($this->container['register_number'] === null) {
            $invalidProperties[] = "'register_number' can't be null";
        }
        if ($this->container['legal_representatives'] === null) {
            $invalidProperties[] = "'legal_representatives' can't be null";
        }
        if ($this->container['district_court'] === null) {
            $invalidProperties[] = "'district_court' can't be null";
        }
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier of the partner.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the company.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Street and house number
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code Zip code
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country. Please use countryCode from next versions
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets vat_id
     *
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     *
     * @param string $vat_id Value added tax identification number
     *
     * @return $this
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

        return $this;
    }

    /**
     * Gets register_number
     *
     * @return string
     */
    public function getRegisterNumber()
    {
        return $this->container['register_number'];
    }

    /**
     * Sets register_number
     *
     * @param string $register_number Commercial register number. Unique in context of the district court.
     *
     * @return $this
     */
    public function setRegisterNumber($register_number)
    {
        $this->container['register_number'] = $register_number;

        return $this;
    }

    /**
     * Gets legal_representatives
     *
     * @return string
     */
    public function getLegalRepresentatives()
    {
        return $this->container['legal_representatives'];
    }

    /**
     * Sets legal_representatives
     *
     * @param string $legal_representatives The partner's representative(s).
     *
     * @return $this
     */
    public function setLegalRepresentatives($legal_representatives)
    {
        $this->container['legal_representatives'] = $legal_representatives;

        return $this;
    }

    /**
     * Gets district_court
     *
     * @return string
     */
    public function getDistrictCourt()
    {
        return $this->container['district_court'];
    }

    /**
     * Sets district_court
     *
     * @param string $district_court District court where the company ist registered.
     *
     * @return $this
     */
    public function setDistrictCourt($district_court)
    {
        $this->container['district_court'] = $district_court;

        return $this;
    }

    /**
     * Gets head_of_supervisory_board
     *
     * @return string
     */
    public function getHeadOfSupervisoryBoard()
    {
        return $this->container['head_of_supervisory_board'];
    }

    /**
     * Sets head_of_supervisory_board
     *
     * @param string $head_of_supervisory_board The partner's head of supervisory board.
     *
     * @return $this
     */
    public function setHeadOfSupervisoryBoard($head_of_supervisory_board)
    {
        $this->container['head_of_supervisory_board'] = $head_of_supervisory_board;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
