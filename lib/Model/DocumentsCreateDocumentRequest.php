<?php
/**
 * DocumentsCreateDocumentRequest
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
 * DocumentsCreateDocumentRequest Class Doc Comment
 *
 * @category Class
 * @package  Lacuna\Signer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentsCreateDocumentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Documents.CreateDocumentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'files' => '\Lacuna\Signer\Model\FileUploadModel[]',
'attachments' => '\Lacuna\Signer\Model\AttachmentsAttachmentUploadModel[]',
'xmlNamespaces' => '\Lacuna\Signer\Model\XmlNamespaceModel[]',
'isEnvelope' => 'bool',
'envelopeName' => 'string',
'participantsDataFile' => '\Lacuna\Signer\Model\UploadModel',
'folderId' => 'string',
'description' => 'string',
'flowActions' => '\Lacuna\Signer\Model\FlowActionsFlowActionCreateModel[]',
'observers' => '\Lacuna\Signer\Model\ObserversObserverCreateModel[]',
'disablePendingActionNotifications' => 'bool',
'newFolderName' => 'string',
'forceCadesSignature' => 'bool',
'notifiedEmails' => 'string[]',
'additionalInfo' => '\Lacuna\Signer\Model\DocumentsDocumentAdditionalInfoData',
'tags' => '\Lacuna\Signer\Model\DocumentsDocumentTagData[]',
'expirationDate' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'files' => null,
'attachments' => null,
'xmlNamespaces' => null,
'isEnvelope' => null,
'envelopeName' => null,
'participantsDataFile' => null,
'folderId' => 'uuid',
'description' => null,
'flowActions' => null,
'observers' => null,
'disablePendingActionNotifications' => null,
'newFolderName' => null,
'forceCadesSignature' => null,
'notifiedEmails' => null,
'additionalInfo' => null,
'tags' => null,
'expirationDate' => 'date-time'    ];

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
        'files' => 'files',
'attachments' => 'attachments',
'xmlNamespaces' => 'xmlNamespaces',
'isEnvelope' => 'isEnvelope',
'envelopeName' => 'envelopeName',
'participantsDataFile' => 'participantsDataFile',
'folderId' => 'folderId',
'description' => 'description',
'flowActions' => 'flowActions',
'observers' => 'observers',
'disablePendingActionNotifications' => 'disablePendingActionNotifications',
'newFolderName' => 'newFolderName',
'forceCadesSignature' => 'forceCadesSignature',
'notifiedEmails' => 'notifiedEmails',
'additionalInfo' => 'additionalInfo',
'tags' => 'tags',
'expirationDate' => 'expirationDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'files' => 'setFiles',
'attachments' => 'setAttachments',
'xmlNamespaces' => 'setXmlNamespaces',
'isEnvelope' => 'setIsEnvelope',
'envelopeName' => 'setEnvelopeName',
'participantsDataFile' => 'setParticipantsDataFile',
'folderId' => 'setFolderId',
'description' => 'setDescription',
'flowActions' => 'setFlowActions',
'observers' => 'setObservers',
'disablePendingActionNotifications' => 'setDisablePendingActionNotifications',
'newFolderName' => 'setNewFolderName',
'forceCadesSignature' => 'setForceCadesSignature',
'notifiedEmails' => 'setNotifiedEmails',
'additionalInfo' => 'setAdditionalInfo',
'tags' => 'setTags',
'expirationDate' => 'setExpirationDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'files' => 'getFiles',
'attachments' => 'getAttachments',
'xmlNamespaces' => 'getXmlNamespaces',
'isEnvelope' => 'getIsEnvelope',
'envelopeName' => 'getEnvelopeName',
'participantsDataFile' => 'getParticipantsDataFile',
'folderId' => 'getFolderId',
'description' => 'getDescription',
'flowActions' => 'getFlowActions',
'observers' => 'getObservers',
'disablePendingActionNotifications' => 'getDisablePendingActionNotifications',
'newFolderName' => 'getNewFolderName',
'forceCadesSignature' => 'getForceCadesSignature',
'notifiedEmails' => 'getNotifiedEmails',
'additionalInfo' => 'getAdditionalInfo',
'tags' => 'getTags',
'expirationDate' => 'getExpirationDate'    ];

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
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['xmlNamespaces'] = isset($data['xmlNamespaces']) ? $data['xmlNamespaces'] : null;
        $this->container['isEnvelope'] = isset($data['isEnvelope']) ? $data['isEnvelope'] : null;
        $this->container['envelopeName'] = isset($data['envelopeName']) ? $data['envelopeName'] : null;
        $this->container['participantsDataFile'] = isset($data['participantsDataFile']) ? $data['participantsDataFile'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['flowActions'] = isset($data['flowActions']) ? $data['flowActions'] : null;
        $this->container['observers'] = isset($data['observers']) ? $data['observers'] : null;
        $this->container['disablePendingActionNotifications'] = isset($data['disablePendingActionNotifications']) ? $data['disablePendingActionNotifications'] : null;
        $this->container['newFolderName'] = isset($data['newFolderName']) ? $data['newFolderName'] : null;
        $this->container['forceCadesSignature'] = isset($data['forceCadesSignature']) ? $data['forceCadesSignature'] : null;
        $this->container['notifiedEmails'] = isset($data['notifiedEmails']) ? $data['notifiedEmails'] : null;
        $this->container['additionalInfo'] = isset($data['additionalInfo']) ? $data['additionalInfo'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files' can't be null";
        }
        if ($this->container['flowActions'] === null) {
            $invalidProperties[] = "'flowActions' can't be null";
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
     * Gets files
     *
     * @return \Lacuna\Signer\Model\FileUploadModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Lacuna\Signer\Model\FileUploadModel[] $files The files to submit. Each file will create a document.
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Lacuna\Signer\Model\AttachmentsAttachmentUploadModel[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Lacuna\Signer\Model\AttachmentsAttachmentUploadModel[] $attachments The attachments to submit. Each document will have the same attachments.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets xmlNamespaces
     *
     * @return \Lacuna\Signer\Model\XmlNamespaceModel[]
     */
    public function getXmlNamespaces()
    {
        return $this->container['xmlNamespaces'];
    }

    /**
     * Sets xmlNamespaces
     *
     * @param \Lacuna\Signer\Model\XmlNamespaceModel[] $xmlNamespaces Optional parameter for XML documents. This namespace will be used by all files in Lacuna.Signer.Api.Documents.CreateDocumentRequest.Files.
     *
     * @return $this
     */
    public function setXmlNamespaces($xmlNamespaces)
    {
        $this->container['xmlNamespaces'] = $xmlNamespaces;

        return $this;
    }

    /**
     * Gets isEnvelope
     *
     * @return bool
     */
    public function getIsEnvelope()
    {
        return $this->container['isEnvelope'];
    }

    /**
     * Sets isEnvelope
     *
     * @param bool $isEnvelope If true, groups all files into a single document (the envelope). All files must be in PDF format.
     *
     * @return $this
     */
    public function setIsEnvelope($isEnvelope)
    {
        $this->container['isEnvelope'] = $isEnvelope;

        return $this;
    }

    /**
     * Gets envelopeName
     *
     * @return string
     */
    public function getEnvelopeName()
    {
        return $this->container['envelopeName'];
    }

    /**
     * Sets envelopeName
     *
     * @param string $envelopeName The name of the document if the envelope option is enabled (see \"IsEnvelope\" property).
     *
     * @return $this
     */
    public function setEnvelopeName($envelopeName)
    {
        $this->container['envelopeName'] = $envelopeName;

        return $this;
    }

    /**
     * Gets participantsDataFile
     *
     * @return \Lacuna\Signer\Model\UploadModel
     */
    public function getParticipantsDataFile()
    {
        return $this->container['participantsDataFile'];
    }

    /**
     * Sets participantsDataFile
     *
     * @param \Lacuna\Signer\Model\UploadModel $participantsDataFile participantsDataFile
     *
     * @return $this
     */
    public function setParticipantsDataFile($participantsDataFile)
    {
        $this->container['participantsDataFile'] = $participantsDataFile;

        return $this;
    }

    /**
     * Gets folderId
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->container['folderId'];
    }

    /**
     * Sets folderId
     *
     * @param string $folderId The id of the folder in which the document should be placed or null if it should not be placed in any specific folder.
     *
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->container['folderId'] = $folderId;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A description to be added to the document(s). This will be presented to all participants in the document details screen and   in pending action notifications.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets flowActions
     *
     * @return \Lacuna\Signer\Model\FlowActionsFlowActionCreateModel[]
     */
    public function getFlowActions()
    {
        return $this->container['flowActions'];
    }

    /**
     * Sets flowActions
     *
     * @param \Lacuna\Signer\Model\FlowActionsFlowActionCreateModel[] $flowActions The list of actions (signers and approvers) that will be in the document.
     *
     * @return $this
     */
    public function setFlowActions($flowActions)
    {
        $this->container['flowActions'] = $flowActions;

        return $this;
    }

    /**
     * Gets observers
     *
     * @return \Lacuna\Signer\Model\ObserversObserverCreateModel[]
     */
    public function getObservers()
    {
        return $this->container['observers'];
    }

    /**
     * Sets observers
     *
     * @param \Lacuna\Signer\Model\ObserversObserverCreateModel[] $observers observers
     *
     * @return $this
     */
    public function setObservers($observers)
    {
        $this->container['observers'] = $observers;

        return $this;
    }

    /**
     * Gets disablePendingActionNotifications
     *
     * @return bool
     */
    public function getDisablePendingActionNotifications()
    {
        return $this->container['disablePendingActionNotifications'];
    }

    /**
     * Sets disablePendingActionNotifications
     *
     * @param bool $disablePendingActionNotifications If true the notifications of pending actions won't be sent to the participants of the first step.
     *
     * @return $this
     */
    public function setDisablePendingActionNotifications($disablePendingActionNotifications)
    {
        $this->container['disablePendingActionNotifications'] = $disablePendingActionNotifications;

        return $this;
    }

    /**
     * Gets newFolderName
     *
     * @return string
     */
    public function getNewFolderName()
    {
        return $this->container['newFolderName'];
    }

    /**
     * Sets newFolderName
     *
     * @param string $newFolderName The name of a new folder to be created and associated to the document. If you do not wish to create a new folder you may set this as null.
     *
     * @return $this
     */
    public function setNewFolderName($newFolderName)
    {
        $this->container['newFolderName'] = $newFolderName;

        return $this;
    }

    /**
     * Gets forceCadesSignature
     *
     * @return bool
     */
    public function getForceCadesSignature()
    {
        return $this->container['forceCadesSignature'];
    }

    /**
     * Sets forceCadesSignature
     *
     * @param bool $forceCadesSignature If this property is set to true, then the document will be signed using the CAdES format.
     *
     * @return $this
     */
    public function setForceCadesSignature($forceCadesSignature)
    {
        $this->container['forceCadesSignature'] = $forceCadesSignature;

        return $this;
    }

    /**
     * Gets notifiedEmails
     *
     * @return string[]
     */
    public function getNotifiedEmails()
    {
        return $this->container['notifiedEmails'];
    }

    /**
     * Sets notifiedEmails
     *
     * @param string[] $notifiedEmails The emails to notify when the document is concluded.
     *
     * @return $this
     */
    public function setNotifiedEmails($notifiedEmails)
    {
        $this->container['notifiedEmails'] = $notifiedEmails;

        return $this;
    }

    /**
     * Gets additionalInfo
     *
     * @return \Lacuna\Signer\Model\DocumentsDocumentAdditionalInfoData
     */
    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    /**
     * Sets additionalInfo
     *
     * @param \Lacuna\Signer\Model\DocumentsDocumentAdditionalInfoData $additionalInfo additionalInfo
     *
     * @return $this
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->container['additionalInfo'] = $additionalInfo;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Lacuna\Signer\Model\DocumentsDocumentTagData[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Lacuna\Signer\Model\DocumentsDocumentTagData[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param \DateTime $expirationDate The expiration date of the document. Any time information will be discarded, as the expiration will be set   to the last time available for the chosen date in the default timezone.
     *
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->container['expirationDate'] = $expirationDate;

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
