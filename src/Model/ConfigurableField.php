<?php
/**
 * ConfigurableField
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

/**
 * ConfigurableField Class Doc Comment
 *
 * @category    Class */
 // @description A configurable field, which is a means of collecting information from a shopper about how they&#39;d like their product configured. This information is then stored alongside the product when added to cart and is reference-able on the order for fulfillment purposes. NOTE: Configurable fields are deprecated, as their complete set of functionality is available via Product Options. They may be removed in a future release.
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConfigurableField implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ConfigurableField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'type' => 'string',
        'file_allowed_types' => 'string[]',
        'file_max_size' => 'int[]',
        'select_options' => 'string[]',
        'required' => 'bool',
        'sort_order' => 'int',
        'id' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'type' => 'type',
        'file_allowed_types' => 'file_allowed_types',
        'file_max_size' => 'file_max_size',
        'select_options' => 'select_options',
        'required' => 'required',
        'sort_order' => 'sort_order',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'file_allowed_types' => 'setFileAllowedTypes',
        'file_max_size' => 'setFileMaxSize',
        'select_options' => 'setSelectOptions',
        'required' => 'setRequired',
        'sort_order' => 'setSortOrder',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'file_allowed_types' => 'getFileAllowedTypes',
        'file_max_size' => 'getFileMaxSize',
        'select_options' => 'getSelectOptions',
        'required' => 'getRequired',
        'sort_order' => 'getSortOrder',
        'id' => 'getId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_TEXT = 'text';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_FILE = 'file';
    const TYPE_SELECT = 'select';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_TEXTAREA,
            self::TYPE_CHECKBOX,
            self::TYPE_FILE,
            self::TYPE_SELECT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['file_allowed_types'] = isset($data['file_allowed_types']) ? $data['file_allowed_types'] : null;
        $this->container['file_max_size'] = isset($data['file_max_size']) ? $data['file_max_size'] : null;
        $this->container['select_options'] = isset($data['select_options']) ? $data['select_options'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 255)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) < 1)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        $allowed_values = ["text", "textarea", "checkbox", "file", "select"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['sort_order']) && ($this->container['sort_order'] > 2147483647)) {
            $invalid_properties[] = "invalid value for 'sort_order', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['sort_order']) && ($this->container['sort_order'] < -2147483648)) {
            $invalid_properties[] = "invalid value for 'sort_order', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
            $invalid_properties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (strlen($this->container['name']) > 255) {
            return false;
        }
        if (strlen($this->container['name']) < 1) {
            return false;
        }
        $allowed_values = ["text", "textarea", "checkbox", "file", "select"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['sort_order'] > 2147483647) {
            return false;
        }
        if ($this->container['sort_order'] < -2147483648) {
            return false;
        }
        if ($this->container['id'] < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name for the configurable field. Will display on the storefront and can be used as a reference point in the Orders API.
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ConfigurableField., must be smaller than or equal to 255.');
        }
        if (!is_null($name) && (strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ConfigurableField., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of the configurable field, which determines what sort of information the field is intended to collect on the storefront. Supported types in include a text input, a multi-line textarea, a checkbox, a file upload, and a dropdown selection.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('text', 'textarea', 'checkbox', 'file', 'select');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'text', 'textarea', 'checkbox', 'file', 'select'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets file_allowed_types
     * @return string[]
     */
    public function getFileAllowedTypes()
    {
        return $this->container['file_allowed_types'];
    }

    /**
     * Sets file_allowed_types
     * @param string[] $file_allowed_types For fields of \"file\" type, this controls the allowed file types for upload.
     * @return $this
     */
    public function setFileAllowedTypes($file_allowed_types)
    {
        $this->container['file_allowed_types'] = $file_allowed_types;

        return $this;
    }

    /**
     * Gets file_max_size
     * @return int[]
     */
    public function getFileMaxSize()
    {
        return $this->container['file_max_size'];
    }

    /**
     * Sets file_max_size
     * @param int[] $file_max_size For fields of \"file\" type, this controls the maximum file size. The platform has a maximum file size of 512MB for all uploads regardless of this setting.
     * @return $this
     */
    public function setFileMaxSize($file_max_size)
    {
        $this->container['file_max_size'] = $file_max_size;

        return $this;
    }

    /**
     * Gets select_options
     * @return string[]
     */
    public function getSelectOptions()
    {
        return $this->container['select_options'];
    }

    /**
     * Sets select_options
     * @param string[] $select_options For fields of \"select\" type, this is an array of the options which should be presented in the dropdown.
     * @return $this
     */
    public function setSelectOptions($select_options)
    {
        $this->container['select_options'] = $select_options;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required Controls whether the field is required to have some input before a product may be added to cart.
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets sort_order
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param int $sort_order Controls the sort order of this field relative to other configurable fields on the product, for purposes of ordering them on the storefront.
     * @return $this
     */
    public function setSortOrder($sort_order)
    {

        if (!is_null($sort_order) && ($sort_order > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ConfigurableField., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($sort_order) && ($sort_order < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ConfigurableField., must be bigger than or equal to -2147483648.');
        }

        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique numeric ID of the configurable field; increments sequentially.
     * @return $this
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ConfigurableField., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


