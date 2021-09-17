<?php
/**
 * BillingBillingInformationModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Lacuna\Signer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dropsigner (HML)
 *
 * <!--------------------------------------------------------------------------------------------------------------------->    <h2>Authentication</h2>    <p>   In order to call this APIs, you will need an <strong>API key</strong>. Set the API key in the header <span class=\"code\">X-Api-Key</span>:  </p>    <pre>X-Api-Key: your-app|xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</pre>    <!--------------------------------------------------------------------------------------------------------------------->  <br />    <h2>HTTP Codes</h2>    <p>   The APIs will return the following HTTP codes:  </p>    <table>   <thead>    <tr>     <th>Code</th>     <th>Description</th>    </tr>   </thead>   <tbody>    <tr>     <td><strong class=\"model-title\">200 (OK)</strong></td>     <td>Request processed successfully. The response is different for each API, please refer to the operation's documentation</td>    </tr>    <tr>     <td><strong class=\"model-title\">400 (Bad Request)</strong></td>     <td>Syntax error. For instance, when a required field was not provided</td>    </tr>    <tr>     <td><strong class=\"model-title\">401 (Unauthorized)</strong></td>     <td>API key not provided or invalid</td>    </tr>    <tr>     <td><strong class=\"model-title\">403 (Forbidden)</strong></td>     <td>API key is valid, but the application has insufficient permissions to complete the requested operation</td>    </tr>    <tr>     <td><strong class=\"model-title\">422 (Unprocessable Entity)</strong></td>     <td>API error. The response is as defined in <a href=\"#model-ErrorModel\">ErrorModel</a></td>    </tr>   </tbody>  </table>    <br />    <h3>Error Codes</h3>    <p>Some of the error codes returned in a 422 response are provided bellow*:</p>    <ul>   <li>CertificateNotFound</li>   <li>DocumentNotFound</li>   <li>FolderNotFound</li>   <li>CpfMismatch</li>   <li>CpfNotExpected</li>   <li>InvalidFlowAction</li>   <li>DocumentInvalidKey</li>  </ul>    <p style=\"font-size: 0.9em\">   *The codes shown above are the main error codes. Nonetheless, this list is not comprehensive. New codes may be added anytime without previous warning.  </p>    <!--------------------------------------------------------------------------------------------------------------------->    <br />    <h2>Webhooks</h2>    <p>   It is recomended to subscribe to Webhook events <strong>instead</strong> of polling APIs. To do so, enable webhooks and register an URL that will receive a POST request   whenever one of the events bellow occur.  </p>  <p>   All requests have the format described in <a href=\"#model-Webhooks.WebhookModel\">Webhooks.WebhookModel</a>.   The data field varies according to the webhook event type:  </p>      <table>   <thead>    <tr>     <th>Event type</th>     <th>Description</th>     <th>Payload</th>    </tr>   </thead>   <tbody>    <tr>     <td><strong class=\"model-title\">DocumentSigned</strong></td>     <td>Triggered when a document is signed.</td>     <td><a href=\"#model-Webhooks.DocumentSignedModel\">Webhooks.DocumentSignedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentApproved</strong></td>     <td>Triggered when a document is approved.</td>     <td><a href=\"#model-Webhooks.DocumentApprovedModel\">Webhooks.DocumentApprovedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentRefused</strong></td>     <td>Triggered when a document is refused.</td>     <td><a href=\"#model-Webhooks.DocumentRefusedModel\">Webhooks.DocumentRefusedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentConcluded</strong></td>     <td>Triggered when the flow of a document is concluded.</td>     <td><a href=\"#model-Webhooks.DocumentConcludedModel\">Webhooks.DocumentConcludedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentCanceled</strong></td>     <td>Triggered when the document is canceled.</td>     <td><a href=\"#model-Webhooks.DocumentCanceledModel\">Webhooks.DocumentCanceledModel</a></td>    </tr>   </tbody>  </table>    <p>   To register your application URL and enable Webhooks, access the integrations section in your <a href=\"/private/organizations\" target=\"_blank\">organization's details page</a>.  </p>
 *
 * OpenAPI spec version: 1.35.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Lacuna\Signer\Model;

use \ArrayAccess;
use \Lacuna\Signer\ObjectSerializer;

/**
 * BillingBillingInformationModel Class Doc Comment
 *
 * @category Class
 * @package  Lacuna\Signer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingBillingInformationModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Billing.BillingInformationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contactName' => 'string',
'email' => 'string',
'phone' => 'string',
'type' => '\Lacuna\Signer\Model\BillingInformationTypes',
'individual' => '\Lacuna\Signer\Model\BillingIndividualBillingInformationModel',
'company' => '\Lacuna\Signer\Model\BillingCompanyBillingInformationModel',
'streetAddress' => 'string',
'addressNumber' => 'string',
'additionalAddressInfo' => 'string',
'neighborhood' => 'string',
'address' => 'string',
'address2' => 'string',
'zipCode' => 'string',
'city' => 'string',
'state' => 'string',
'cityCode' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contactName' => null,
'email' => 'email',
'phone' => null,
'type' => null,
'individual' => null,
'company' => null,
'streetAddress' => null,
'addressNumber' => null,
'additionalAddressInfo' => null,
'neighborhood' => null,
'address' => null,
'address2' => null,
'zipCode' => null,
'city' => null,
'state' => null,
'cityCode' => null    ];

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
        'contactName' => 'contactName',
'email' => 'email',
'phone' => 'phone',
'type' => 'type',
'individual' => 'individual',
'company' => 'company',
'streetAddress' => 'streetAddress',
'addressNumber' => 'addressNumber',
'additionalAddressInfo' => 'additionalAddressInfo',
'neighborhood' => 'neighborhood',
'address' => 'address',
'address2' => 'address2',
'zipCode' => 'zipCode',
'city' => 'city',
'state' => 'state',
'cityCode' => 'cityCode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contactName' => 'setContactName',
'email' => 'setEmail',
'phone' => 'setPhone',
'type' => 'setType',
'individual' => 'setIndividual',
'company' => 'setCompany',
'streetAddress' => 'setStreetAddress',
'addressNumber' => 'setAddressNumber',
'additionalAddressInfo' => 'setAdditionalAddressInfo',
'neighborhood' => 'setNeighborhood',
'address' => 'setAddress',
'address2' => 'setAddress2',
'zipCode' => 'setZipCode',
'city' => 'setCity',
'state' => 'setState',
'cityCode' => 'setCityCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contactName' => 'getContactName',
'email' => 'getEmail',
'phone' => 'getPhone',
'type' => 'getType',
'individual' => 'getIndividual',
'company' => 'getCompany',
'streetAddress' => 'getStreetAddress',
'addressNumber' => 'getAddressNumber',
'additionalAddressInfo' => 'getAdditionalAddressInfo',
'neighborhood' => 'getNeighborhood',
'address' => 'getAddress',
'address2' => 'getAddress2',
'zipCode' => 'getZipCode',
'city' => 'getCity',
'state' => 'getState',
'cityCode' => 'getCityCode'    ];

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
        $this->container['contactName'] = isset($data['contactName']) ? $data['contactName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['individual'] = isset($data['individual']) ? $data['individual'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['streetAddress'] = isset($data['streetAddress']) ? $data['streetAddress'] : null;
        $this->container['addressNumber'] = isset($data['addressNumber']) ? $data['addressNumber'] : null;
        $this->container['additionalAddressInfo'] = isset($data['additionalAddressInfo']) ? $data['additionalAddressInfo'] : null;
        $this->container['neighborhood'] = isset($data['neighborhood']) ? $data['neighborhood'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['zipCode'] = isset($data['zipCode']) ? $data['zipCode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['cityCode'] = isset($data['cityCode']) ? $data['cityCode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['zipCode'] === null) {
            $invalidProperties[] = "'zipCode' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
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
     * Gets contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string $contactName contactName
     *
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Lacuna\Signer\Model\BillingInformationTypes
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Lacuna\Signer\Model\BillingInformationTypes $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets individual
     *
     * @return \Lacuna\Signer\Model\BillingIndividualBillingInformationModel
     */
    public function getIndividual()
    {
        return $this->container['individual'];
    }

    /**
     * Sets individual
     *
     * @param \Lacuna\Signer\Model\BillingIndividualBillingInformationModel $individual individual
     *
     * @return $this
     */
    public function setIndividual($individual)
    {
        $this->container['individual'] = $individual;

        return $this;
    }

    /**
     * Gets company
     *
     * @return \Lacuna\Signer\Model\BillingCompanyBillingInformationModel
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \Lacuna\Signer\Model\BillingCompanyBillingInformationModel $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets streetAddress
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->container['streetAddress'];
    }

    /**
     * Sets streetAddress
     *
     * @param string $streetAddress streetAddress
     *
     * @return $this
     */
    public function setStreetAddress($streetAddress)
    {
        $this->container['streetAddress'] = $streetAddress;

        return $this;
    }

    /**
     * Gets addressNumber
     *
     * @return string
     */
    public function getAddressNumber()
    {
        return $this->container['addressNumber'];
    }

    /**
     * Sets addressNumber
     *
     * @param string $addressNumber addressNumber
     *
     * @return $this
     */
    public function setAddressNumber($addressNumber)
    {
        $this->container['addressNumber'] = $addressNumber;

        return $this;
    }

    /**
     * Gets additionalAddressInfo
     *
     * @return string
     */
    public function getAdditionalAddressInfo()
    {
        return $this->container['additionalAddressInfo'];
    }

    /**
     * Sets additionalAddressInfo
     *
     * @param string $additionalAddressInfo additionalAddressInfo
     *
     * @return $this
     */
    public function setAdditionalAddressInfo($additionalAddressInfo)
    {
        $this->container['additionalAddressInfo'] = $additionalAddressInfo;

        return $this;
    }

    /**
     * Gets neighborhood
     *
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->container['neighborhood'];
    }

    /**
     * Sets neighborhood
     *
     * @param string $neighborhood neighborhood
     *
     * @return $this
     */
    public function setNeighborhood($neighborhood)
    {
        $this->container['neighborhood'] = $neighborhood;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address International address line 1.  Currently not used
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string $address2 International address line 2.  Currently not used
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     *
     * @param string $zipCode zipCode
     *
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->container['zipCode'] = $zipCode;

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
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets cityCode
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
     * Sets cityCode
     *
     * @param string $cityCode IBGE Code
     *
     * @return $this
     */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;

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
