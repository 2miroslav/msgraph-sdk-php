<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudApplicationEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;
/**
* CloudApplicationEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudApplicationEvidence extends AlertEvidence
{
    /**
    * Gets the appId
    *
    * @return int|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    *
    * @param int $val The value of the appId
    *
    * @return CloudApplicationEvidence
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return CloudApplicationEvidence
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the instanceId
    *
    * @return int|null The instanceId
    */
    public function getInstanceId()
    {
        if (array_key_exists("instanceId", $this->_propDict)) {
            return $this->_propDict["instanceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the instanceId
    *
    * @param int $val The value of the instanceId
    *
    * @return CloudApplicationEvidence
    */
    public function setInstanceId($val)
    {
        $this->_propDict["instanceId"] = $val;
        return $this;
    }
    /**
    * Gets the instanceName
    *
    * @return string|null The instanceName
    */
    public function getInstanceName()
    {
        if (array_key_exists("instanceName", $this->_propDict)) {
            return $this->_propDict["instanceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the instanceName
    *
    * @param string $val The value of the instanceName
    *
    * @return CloudApplicationEvidence
    */
    public function setInstanceName($val)
    {
        $this->_propDict["instanceName"] = $val;
        return $this;
    }
    /**
    * Gets the saasAppId
    *
    * @return int|null The saasAppId
    */
    public function getSaasAppId()
    {
        if (array_key_exists("saasAppId", $this->_propDict)) {
            return $this->_propDict["saasAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the saasAppId
    *
    * @param int $val The value of the saasAppId
    *
    * @return CloudApplicationEvidence
    */
    public function setSaasAppId($val)
    {
        $this->_propDict["saasAppId"] = $val;
        return $this;
    }
}
