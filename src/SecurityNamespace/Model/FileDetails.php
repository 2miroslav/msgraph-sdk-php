<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileDetails File
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
* FileDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileDetails extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the fileName
    *
    * @return string|null The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileName
    *
    * @param string $val The value of the fileName
    *
    * @return FileDetails
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    /**
    * Gets the filePath
    *
    * @return string|null The filePath
    */
    public function getFilePath()
    {
        if (array_key_exists("filePath", $this->_propDict)) {
            return $this->_propDict["filePath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filePath
    *
    * @param string $val The value of the filePath
    *
    * @return FileDetails
    */
    public function setFilePath($val)
    {
        $this->_propDict["filePath"] = $val;
        return $this;
    }
    /**
    * Gets the filePublisher
    *
    * @return string|null The filePublisher
    */
    public function getFilePublisher()
    {
        if (array_key_exists("filePublisher", $this->_propDict)) {
            return $this->_propDict["filePublisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filePublisher
    *
    * @param string $val The value of the filePublisher
    *
    * @return FileDetails
    */
    public function setFilePublisher($val)
    {
        $this->_propDict["filePublisher"] = $val;
        return $this;
    }
    /**
    * Gets the fileSize
    *
    * @return int|null The fileSize
    */
    public function getFileSize()
    {
        if (array_key_exists("fileSize", $this->_propDict)) {
            return $this->_propDict["fileSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileSize
    *
    * @param int $val The value of the fileSize
    *
    * @return FileDetails
    */
    public function setFileSize($val)
    {
        $this->_propDict["fileSize"] = $val;
        return $this;
    }
    /**
    * Gets the issuer
    *
    * @return string|null The issuer
    */
    public function getIssuer()
    {
        if (array_key_exists("issuer", $this->_propDict)) {
            return $this->_propDict["issuer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuer
    *
    * @param string $val The value of the issuer
    *
    * @return FileDetails
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
        return $this;
    }
    /**
    * Gets the sha1
    *
    * @return string|null The sha1
    */
    public function getSha1()
    {
        if (array_key_exists("sha1", $this->_propDict)) {
            return $this->_propDict["sha1"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sha1
    *
    * @param string $val The value of the sha1
    *
    * @return FileDetails
    */
    public function setSha1($val)
    {
        $this->_propDict["sha1"] = $val;
        return $this;
    }
    /**
    * Gets the sha256
    *
    * @return string|null The sha256
    */
    public function getSha256()
    {
        if (array_key_exists("sha256", $this->_propDict)) {
            return $this->_propDict["sha256"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sha256
    *
    * @param string $val The value of the sha256
    *
    * @return FileDetails
    */
    public function setSha256($val)
    {
        $this->_propDict["sha256"] = $val;
        return $this;
    }
    /**
    * Gets the signer
    *
    * @return string|null The signer
    */
    public function getSigner()
    {
        if (array_key_exists("signer", $this->_propDict)) {
            return $this->_propDict["signer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signer
    *
    * @param string $val The value of the signer
    *
    * @return FileDetails
    */
    public function setSigner($val)
    {
        $this->_propDict["signer"] = $val;
        return $this;
    }
}
