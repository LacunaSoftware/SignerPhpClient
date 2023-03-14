<?php
/**
 * DocumentsDocumentFlowEditRequest
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
 * DocumentsDocumentFlowEditRequest Class Doc Comment
 *
 * @category Class
 * @package  Lacuna\Signer
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentsDocumentFlowEditRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Documents.DocumentFlowEditRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addedFlowActions' => '\Lacuna\Signer\Model\FlowActionsFlowActionCreateModel[]',
'editedFlowActions' => '\Lacuna\Signer\Model\FlowActionsFlowActionEditModel[]',
'deletedFlowActionIds' => 'string[]',
'addedObservers' => '\Lacuna\Signer\Model\ObserversObserverCreateModel[]',
'editedObservers' => '\Lacuna\Signer\Model\ObserversObserverEditModel[]',
'deletedObserverIds' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addedFlowActions' => null,
'editedFlowActions' => null,
'deletedFlowActionIds' => 'uuid',
'addedObservers' => null,
'editedObservers' => null,
'deletedObserverIds' => 'uuid'    ];

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
        'addedFlowActions' => 'addedFlowActions',
'editedFlowActions' => 'editedFlowActions',
'deletedFlowActionIds' => 'deletedFlowActionIds',
'addedObservers' => 'addedObservers',
'editedObservers' => 'editedObservers',
'deletedObserverIds' => 'deletedObserverIds'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addedFlowActions' => 'setAddedFlowActions',
'editedFlowActions' => 'setEditedFlowActions',
'deletedFlowActionIds' => 'setDeletedFlowActionIds',
'addedObservers' => 'setAddedObservers',
'editedObservers' => 'setEditedObservers',
'deletedObserverIds' => 'setDeletedObserverIds'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addedFlowActions' => 'getAddedFlowActions',
'editedFlowActions' => 'getEditedFlowActions',
'deletedFlowActionIds' => 'getDeletedFlowActionIds',
'addedObservers' => 'getAddedObservers',
'editedObservers' => 'getEditedObservers',
'deletedObserverIds' => 'getDeletedObserverIds'    ];

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
        $this->container['addedFlowActions'] = isset($data['addedFlowActions']) ? $data['addedFlowActions'] : null;
        $this->container['editedFlowActions'] = isset($data['editedFlowActions']) ? $data['editedFlowActions'] : null;
        $this->container['deletedFlowActionIds'] = isset($data['deletedFlowActionIds']) ? $data['deletedFlowActionIds'] : null;
        $this->container['addedObservers'] = isset($data['addedObservers']) ? $data['addedObservers'] : null;
        $this->container['editedObservers'] = isset($data['editedObservers']) ? $data['editedObservers'] : null;
        $this->container['deletedObserverIds'] = isset($data['deletedObserverIds']) ? $data['deletedObserverIds'] : null;
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
     * Gets addedFlowActions
     *
     * @return \Lacuna\Signer\Model\FlowActionsFlowActionCreateModel[]
     */
    public function getAddedFlowActions()
    {
        return $this->container['addedFlowActions'];
    }

    /**
     * Sets addedFlowActions
     *
     * @param \Lacuna\Signer\Model\FlowActionsFlowActionCreateModel[] $addedFlowActions The actions to be added to the flow.  The Lacuna.Signer.Api.FlowActions.FlowActionCreateModel.Step must be greater or equal to the current pending step.
     *
     * @return $this
     */
    public function setAddedFlowActions($addedFlowActions)
    {
        $this->container['addedFlowActions'] = $addedFlowActions;

        return $this;
    }

    /**
     * Gets editedFlowActions
     *
     * @return \Lacuna\Signer\Model\FlowActionsFlowActionEditModel[]
     */
    public function getEditedFlowActions()
    {
        return $this->container['editedFlowActions'];
    }

    /**
     * Sets editedFlowActions
     *
     * @param \Lacuna\Signer\Model\FlowActionsFlowActionEditModel[] $editedFlowActions The existing actions to be modified.  Flow actions that have already been completed or are partially completed cannot be edited.
     *
     * @return $this
     */
    public function setEditedFlowActions($editedFlowActions)
    {
        $this->container['editedFlowActions'] = $editedFlowActions;

        return $this;
    }

    /**
     * Gets deletedFlowActionIds
     *
     * @return string[]
     */
    public function getDeletedFlowActionIds()
    {
        return $this->container['deletedFlowActionIds'];
    }

    /**
     * Sets deletedFlowActionIds
     *
     * @param string[] $deletedFlowActionIds The Ids of flow actions to be deleted.  Flow actions that have already been completed or are partially completed cannot be deleted.
     *
     * @return $this
     */
    public function setDeletedFlowActionIds($deletedFlowActionIds)
    {
        $this->container['deletedFlowActionIds'] = $deletedFlowActionIds;

        return $this;
    }

    /**
     * Gets addedObservers
     *
     * @return \Lacuna\Signer\Model\ObserversObserverCreateModel[]
     */
    public function getAddedObservers()
    {
        return $this->container['addedObservers'];
    }

    /**
     * Sets addedObservers
     *
     * @param \Lacuna\Signer\Model\ObserversObserverCreateModel[] $addedObservers The observers to be added to the document.
     *
     * @return $this
     */
    public function setAddedObservers($addedObservers)
    {
        $this->container['addedObservers'] = $addedObservers;

        return $this;
    }

    /**
     * Gets editedObservers
     *
     * @return \Lacuna\Signer\Model\ObserversObserverEditModel[]
     */
    public function getEditedObservers()
    {
        return $this->container['editedObservers'];
    }

    /**
     * Sets editedObservers
     *
     * @param \Lacuna\Signer\Model\ObserversObserverEditModel[] $editedObservers The existing observers to be modified.
     *
     * @return $this
     */
    public function setEditedObservers($editedObservers)
    {
        $this->container['editedObservers'] = $editedObservers;

        return $this;
    }

    /**
     * Gets deletedObserverIds
     *
     * @return string[]
     */
    public function getDeletedObserverIds()
    {
        return $this->container['deletedObserverIds'];
    }

    /**
     * Sets deletedObserverIds
     *
     * @param string[] $deletedObserverIds The Ids of observers to be deleted.
     *
     * @return $this
     */
    public function setDeletedObserverIds($deletedObserverIds)
    {
        $this->container['deletedObserverIds'] = $deletedObserverIds;

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
