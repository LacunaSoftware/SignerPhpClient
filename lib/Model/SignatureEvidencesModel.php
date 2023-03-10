<?php
/**
 * SignatureEvidencesModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Lacuna\Signer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dropsigner
 *
 * <!--------------------------------------------------------------------------------------------------------------------->    <h2>Authentication</h2>    <p>   In order to call this APIs, you will need an <strong>API key</strong>. Set the API key in the header <span class=\"code\">X-Api-Key</span>:  </p>    <pre>X-Api-Key: your-app|xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</pre>    <!--------------------------------------------------------------------------------------------------------------------->  <br />    <h2>HTTP Codes</h2>    <p>   The APIs will return the following HTTP codes:  </p>    <table>   <thead>    <tr>     <th>Code</th>     <th>Description</th>    </tr>   </thead>   <tbody>    <tr>     <td><strong class=\"model-title\">200 (OK)</strong></td>     <td>Request processed successfully. The response is different for each API, please refer to the operation's documentation</td>    </tr>    <tr>     <td><strong class=\"model-title\">400 (Bad Request)</strong></td>     <td>Syntax error. For instance, when a required field was not provided</td>    </tr>    <tr>     <td><strong class=\"model-title\">401 (Unauthorized)</strong></td>     <td>API key not provided or invalid</td>    </tr>    <tr>     <td><strong class=\"model-title\">403 (Forbidden)</strong></td>     <td>API key is valid, but the application has insufficient permissions to complete the requested operation</td>    </tr>    <tr>     <td><strong class=\"model-title\">422 (Unprocessable Entity)</strong></td>     <td>API error. The response is as defined in <a href=\"#model-ErrorModel\">ErrorModel</a></td>    </tr>   </tbody>  </table>    <br />    <h3>Error Codes</h3>    <p>Some of the error codes returned in a 422 response are provided bellow*:</p>    <ul>   <li>CertificateNotFound</li>   <li>DocumentNotFound</li>   <li>FolderNotFound</li>   <li>CpfMismatch</li>   <li>CpfNotExpected</li>   <li>InvalidFlowAction</li>   <li>DocumentInvalidKey</li>  </ul>    <p style=\"font-size: 0.9em\">   *The codes shown above are the main error codes. Nonetheless, this list is not comprehensive. New codes may be added anytime without previous warning.  </p>    <!--------------------------------------------------------------------------------------------------------------------->    <br />    <h2>Webhooks</h2>    <p>   It is recomended to subscribe to Webhook events <strong>instead</strong> of polling APIs. To do so, enable webhooks and register an URL that will receive a POST request   whenever one of the events bellow occur.  </p>  <p>   All requests have the format described in <a href=\"#model-Webhooks.WebhookModel\">Webhooks.WebhookModel</a>.   The data field varies according to the webhook event type:  </p>      <table>   <thead>    <tr>     <th>Event type</th>     <th>Description</th>     <th>Payload</th>    </tr>   </thead>   <tbody>    <tr>     <td><strong class=\"model-title\">DocumentSigned</strong></td>     <td>Triggered when a document is signed.</td>     <td><a href=\"#model-Webhooks.DocumentSignedModel\">Webhooks.DocumentSignedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentApproved</strong></td>     <td>Triggered when a document is approved.</td>     <td><a href=\"#model-Webhooks.DocumentApprovedModel\">Webhooks.DocumentApprovedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentRefused</strong></td>     <td>Triggered when a document is refused.</td>     <td><a href=\"#model-Webhooks.DocumentRefusedModel\">Webhooks.DocumentRefusedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentConcluded</strong></td>     <td>Triggered when the flow of a document is concluded.</td>     <td><a href=\"#model-Webhooks.DocumentConcludedModel\">Webhooks.DocumentConcludedModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentCanceled</strong></td>     <td>Triggered when the document is canceled.</td>     <td><a href=\"#model-Webhooks.DocumentCanceledModel\">Webhooks.DocumentCanceledModel</a></td>    </tr>    <tr>     <td><strong class=\"model-title\">DocumentsCreated (v1.50.0)</strong></td>     <td>Triggered when one or more documents are created.</td>     <td><a href=\"#model-Webhooks.DocumentsCreatedModel\">Webhooks.DocumentsCreatedModel</a></td>    </tr>   </tbody>  </table>    <p>   To register your application URL and enable Webhooks, access the integrations section in your <a href=\"/private/organizations\" target=\"_blank\">organization's details page</a>.  </p>
 *
 * OpenAPI spec version: 1.55.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
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
 * SignatureEvidencesModel Class Doc Comment
 *
 * @category Class
 * @package  Lacuna\Signer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignatureEvidencesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Signature.EvidencesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ipAddress' => 'string',
'authenticationTypes' => '\Lacuna\Signer\Model\AuthenticationTypes[]',
'accountVerifiedEmail' => 'string',
'authenticatedEmail' => 'string',
'authenticatedPhoneNumberLastDigits' => 'string',
'authenticatedApplication' => '\Lacuna\Signer\Model\ApplicationsApplicationDisplayModel',
'authenticatedSelfie' => '\Lacuna\Signer\Model\SignatureSelfieModel',
'authenticatedPix' => '\Lacuna\Signer\Model\SignaturePixAuthenticationModel',
'geolocation' => '\Lacuna\Signer\Model\SignatureGeolocationModel',
'timestamp' => '\DateTime',
'evidencesSha256' => 'string',
'authenticatedPhoneNumber' => 'string',
'file' => 'string',
'fileTicket' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ipAddress' => null,
'authenticationTypes' => null,
'accountVerifiedEmail' => null,
'authenticatedEmail' => null,
'authenticatedPhoneNumberLastDigits' => null,
'authenticatedApplication' => null,
'authenticatedSelfie' => null,
'authenticatedPix' => null,
'geolocation' => null,
'timestamp' => 'date-time',
'evidencesSha256' => null,
'authenticatedPhoneNumber' => null,
'file' => 'byte',
'fileTicket' => null    ];

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
        'ipAddress' => 'ipAddress',
'authenticationTypes' => 'authenticationTypes',
'accountVerifiedEmail' => 'accountVerifiedEmail',
'authenticatedEmail' => 'authenticatedEmail',
'authenticatedPhoneNumberLastDigits' => 'authenticatedPhoneNumberLastDigits',
'authenticatedApplication' => 'authenticatedApplication',
'authenticatedSelfie' => 'authenticatedSelfie',
'authenticatedPix' => 'authenticatedPix',
'geolocation' => 'geolocation',
'timestamp' => 'timestamp',
'evidencesSha256' => 'evidencesSha256',
'authenticatedPhoneNumber' => 'authenticatedPhoneNumber',
'file' => 'file',
'fileTicket' => 'fileTicket'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ipAddress' => 'setIpAddress',
'authenticationTypes' => 'setAuthenticationTypes',
'accountVerifiedEmail' => 'setAccountVerifiedEmail',
'authenticatedEmail' => 'setAuthenticatedEmail',
'authenticatedPhoneNumberLastDigits' => 'setAuthenticatedPhoneNumberLastDigits',
'authenticatedApplication' => 'setAuthenticatedApplication',
'authenticatedSelfie' => 'setAuthenticatedSelfie',
'authenticatedPix' => 'setAuthenticatedPix',
'geolocation' => 'setGeolocation',
'timestamp' => 'setTimestamp',
'evidencesSha256' => 'setEvidencesSha256',
'authenticatedPhoneNumber' => 'setAuthenticatedPhoneNumber',
'file' => 'setFile',
'fileTicket' => 'setFileTicket'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ipAddress' => 'getIpAddress',
'authenticationTypes' => 'getAuthenticationTypes',
'accountVerifiedEmail' => 'getAccountVerifiedEmail',
'authenticatedEmail' => 'getAuthenticatedEmail',
'authenticatedPhoneNumberLastDigits' => 'getAuthenticatedPhoneNumberLastDigits',
'authenticatedApplication' => 'getAuthenticatedApplication',
'authenticatedSelfie' => 'getAuthenticatedSelfie',
'authenticatedPix' => 'getAuthenticatedPix',
'geolocation' => 'getGeolocation',
'timestamp' => 'getTimestamp',
'evidencesSha256' => 'getEvidencesSha256',
'authenticatedPhoneNumber' => 'getAuthenticatedPhoneNumber',
'file' => 'getFile',
'fileTicket' => 'getFileTicket'    ];

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
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['authenticationTypes'] = isset($data['authenticationTypes']) ? $data['authenticationTypes'] : null;
        $this->container['accountVerifiedEmail'] = isset($data['accountVerifiedEmail']) ? $data['accountVerifiedEmail'] : null;
        $this->container['authenticatedEmail'] = isset($data['authenticatedEmail']) ? $data['authenticatedEmail'] : null;
        $this->container['authenticatedPhoneNumberLastDigits'] = isset($data['authenticatedPhoneNumberLastDigits']) ? $data['authenticatedPhoneNumberLastDigits'] : null;
        $this->container['authenticatedApplication'] = isset($data['authenticatedApplication']) ? $data['authenticatedApplication'] : null;
        $this->container['authenticatedSelfie'] = isset($data['authenticatedSelfie']) ? $data['authenticatedSelfie'] : null;
        $this->container['authenticatedPix'] = isset($data['authenticatedPix']) ? $data['authenticatedPix'] : null;
        $this->container['geolocation'] = isset($data['geolocation']) ? $data['geolocation'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['evidencesSha256'] = isset($data['evidencesSha256']) ? $data['evidencesSha256'] : null;
        $this->container['authenticatedPhoneNumber'] = isset($data['authenticatedPhoneNumber']) ? $data['authenticatedPhoneNumber'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['fileTicket'] = isset($data['fileTicket']) ? $data['fileTicket'] : null;
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
     * Gets ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     *
     * @param string $ipAddress ipAddress
     *
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;

        return $this;
    }

    /**
     * Gets authenticationTypes
     *
     * @return \Lacuna\Signer\Model\AuthenticationTypes[]
     */
    public function getAuthenticationTypes()
    {
        return $this->container['authenticationTypes'];
    }

    /**
     * Sets authenticationTypes
     *
     * @param \Lacuna\Signer\Model\AuthenticationTypes[] $authenticationTypes A list containing the the authentication types used when signing the document.
     *
     * @return $this
     */
    public function setAuthenticationTypes($authenticationTypes)
    {
        $this->container['authenticationTypes'] = $authenticationTypes;

        return $this;
    }

    /**
     * Gets accountVerifiedEmail
     *
     * @return string
     */
    public function getAccountVerifiedEmail()
    {
        return $this->container['accountVerifiedEmail'];
    }

    /**
     * Sets accountVerifiedEmail
     *
     * @param string $accountVerifiedEmail If the user was logged-in when he signed the document this is the verified email of his account.  If Lacuna.Signer.Api.Signature.EvidencesModel.AuthenticationTypes doesn't contains Lacuna.Signer.Api.AuthenticationTypes.Login this will be null.
     *
     * @return $this
     */
    public function setAccountVerifiedEmail($accountVerifiedEmail)
    {
        $this->container['accountVerifiedEmail'] = $accountVerifiedEmail;

        return $this;
    }

    /**
     * Gets authenticatedEmail
     *
     * @return string
     */
    public function getAuthenticatedEmail()
    {
        return $this->container['authenticatedEmail'];
    }

    /**
     * Sets authenticatedEmail
     *
     * @param string $authenticatedEmail The email to which the notification to sign the document was sent.  If Lacuna.Signer.Api.Signature.EvidencesModel.AuthenticationTypes doesn't contains Lacuna.Signer.Api.AuthenticationTypes.Email this will be null.
     *
     * @return $this
     */
    public function setAuthenticatedEmail($authenticatedEmail)
    {
        $this->container['authenticatedEmail'] = $authenticatedEmail;

        return $this;
    }

    /**
     * Gets authenticatedPhoneNumberLastDigits
     *
     * @return string
     */
    public function getAuthenticatedPhoneNumberLastDigits()
    {
        return $this->container['authenticatedPhoneNumberLastDigits'];
    }

    /**
     * Sets authenticatedPhoneNumberLastDigits
     *
     * @param string $authenticatedPhoneNumberLastDigits The last four digits of the phone number to which the SMS confirmation code was sent.  If Lacuna.Signer.Api.Signature.EvidencesModel.AuthenticationTypes doesn't contains Lacuna.Signer.Api.AuthenticationTypes.SMS this will be null.
     *
     * @return $this
     */
    public function setAuthenticatedPhoneNumberLastDigits($authenticatedPhoneNumberLastDigits)
    {
        $this->container['authenticatedPhoneNumberLastDigits'] = $authenticatedPhoneNumberLastDigits;

        return $this;
    }

    /**
     * Gets authenticatedApplication
     *
     * @return \Lacuna\Signer\Model\ApplicationsApplicationDisplayModel
     */
    public function getAuthenticatedApplication()
    {
        return $this->container['authenticatedApplication'];
    }

    /**
     * Sets authenticatedApplication
     *
     * @param \Lacuna\Signer\Model\ApplicationsApplicationDisplayModel $authenticatedApplication authenticatedApplication
     *
     * @return $this
     */
    public function setAuthenticatedApplication($authenticatedApplication)
    {
        $this->container['authenticatedApplication'] = $authenticatedApplication;

        return $this;
    }

    /**
     * Gets authenticatedSelfie
     *
     * @return \Lacuna\Signer\Model\SignatureSelfieModel
     */
    public function getAuthenticatedSelfie()
    {
        return $this->container['authenticatedSelfie'];
    }

    /**
     * Sets authenticatedSelfie
     *
     * @param \Lacuna\Signer\Model\SignatureSelfieModel $authenticatedSelfie authenticatedSelfie
     *
     * @return $this
     */
    public function setAuthenticatedSelfie($authenticatedSelfie)
    {
        $this->container['authenticatedSelfie'] = $authenticatedSelfie;

        return $this;
    }

    /**
     * Gets authenticatedPix
     *
     * @return \Lacuna\Signer\Model\SignaturePixAuthenticationModel
     */
    public function getAuthenticatedPix()
    {
        return $this->container['authenticatedPix'];
    }

    /**
     * Sets authenticatedPix
     *
     * @param \Lacuna\Signer\Model\SignaturePixAuthenticationModel $authenticatedPix authenticatedPix
     *
     * @return $this
     */
    public function setAuthenticatedPix($authenticatedPix)
    {
        $this->container['authenticatedPix'] = $authenticatedPix;

        return $this;
    }

    /**
     * Gets geolocation
     *
     * @return \Lacuna\Signer\Model\SignatureGeolocationModel
     */
    public function getGeolocation()
    {
        return $this->container['geolocation'];
    }

    /**
     * Sets geolocation
     *
     * @param \Lacuna\Signer\Model\SignatureGeolocationModel $geolocation geolocation
     *
     * @return $this
     */
    public function setGeolocation($geolocation)
    {
        $this->container['geolocation'] = $geolocation;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets evidencesSha256
     *
     * @return string
     */
    public function getEvidencesSha256()
    {
        return $this->container['evidencesSha256'];
    }

    /**
     * Sets evidencesSha256
     *
     * @param string $evidencesSha256 SHA-256 Hash (Base64 encoded) of the evidences JSON file
     *
     * @return $this
     */
    public function setEvidencesSha256($evidencesSha256)
    {
        $this->container['evidencesSha256'] = $evidencesSha256;

        return $this;
    }

    /**
     * Gets authenticatedPhoneNumber
     *
     * @return string
     */
    public function getAuthenticatedPhoneNumber()
    {
        return $this->container['authenticatedPhoneNumber'];
    }

    /**
     * Sets authenticatedPhoneNumber
     *
     * @param string $authenticatedPhoneNumber The phone number to which the SMS confirmation code was sent.  If Lacuna.Signer.Api.Signature.EvidencesModel.AuthenticationTypes doesn't contains Lacuna.Signer.Api.AuthenticationTypes.SMS this will be null.
     *
     * @return $this
     */
    public function setAuthenticatedPhoneNumber($authenticatedPhoneNumber)
    {
        $this->container['authenticatedPhoneNumber'] = $authenticatedPhoneNumber;

        return $this;
    }

    /**
     * Gets file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string $file The evidences JSON file in bytes.
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets fileTicket
     *
     * @return string
     */
    public function getFileTicket()
    {
        return $this->container['fileTicket'];
    }

    /**
     * Sets fileTicket
     *
     * @param string $fileTicket Ticket to download the evidences JSON file.
     *
     * @return $this
     */
    public function setFileTicket($fileTicket)
    {
        $this->container['fileTicket'] = $fileTicket;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
