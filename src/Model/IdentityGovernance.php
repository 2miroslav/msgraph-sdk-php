<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityGovernance File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* IdentityGovernance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityGovernance implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new IdentityGovernance
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the IdentityGovernance
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the accessReviews
    *
    * @return AccessReviewSet|null The accessReviews
    */
    public function getAccessReviews()
    {
        if (array_key_exists("accessReviews", $this->_propDict) && !is_null($this->_propDict["accessReviews"])) {
            if (is_a($this->_propDict["accessReviews"], "\Microsoft\Graph\Model\AccessReviewSet")) {
                return $this->_propDict["accessReviews"];
            } else {
                $this->_propDict["accessReviews"] = new AccessReviewSet($this->_propDict["accessReviews"]);
                return $this->_propDict["accessReviews"];
            }
        }
        return null;
    }

    /**
    * Sets the accessReviews
    *
    * @param AccessReviewSet $val The accessReviews
    *
    * @return IdentityGovernance
    */
    public function setAccessReviews($val)
    {
        $this->_propDict["accessReviews"] = $val;
        return $this;
    }

    /**
    * Gets the appConsent
    *
    * @return AppConsentApprovalRoute|null The appConsent
    */
    public function getAppConsent()
    {
        if (array_key_exists("appConsent", $this->_propDict) && !is_null($this->_propDict["appConsent"])) {
            if (is_a($this->_propDict["appConsent"], "\Microsoft\Graph\Model\AppConsentApprovalRoute")) {
                return $this->_propDict["appConsent"];
            } else {
                $this->_propDict["appConsent"] = new AppConsentApprovalRoute($this->_propDict["appConsent"]);
                return $this->_propDict["appConsent"];
            }
        }
        return null;
    }

    /**
    * Sets the appConsent
    *
    * @param AppConsentApprovalRoute $val The appConsent
    *
    * @return IdentityGovernance
    */
    public function setAppConsent($val)
    {
        $this->_propDict["appConsent"] = $val;
        return $this;
    }

    /**
    * Gets the termsOfUse
    *
    * @return TermsOfUseContainer|null The termsOfUse
    */
    public function getTermsOfUse()
    {
        if (array_key_exists("termsOfUse", $this->_propDict) && !is_null($this->_propDict["termsOfUse"])) {
            if (is_a($this->_propDict["termsOfUse"], "\Microsoft\Graph\Model\TermsOfUseContainer")) {
                return $this->_propDict["termsOfUse"];
            } else {
                $this->_propDict["termsOfUse"] = new TermsOfUseContainer($this->_propDict["termsOfUse"]);
                return $this->_propDict["termsOfUse"];
            }
        }
        return null;
    }

    /**
    * Sets the termsOfUse
    *
    * @param TermsOfUseContainer $val The termsOfUse
    *
    * @return IdentityGovernance
    */
    public function setTermsOfUse($val)
    {
        $this->_propDict["termsOfUse"] = $val;
        return $this;
    }

    /**
    * Gets the entitlementManagement
    *
    * @return EntitlementManagement|null The entitlementManagement
    */
    public function getEntitlementManagement()
    {
        if (array_key_exists("entitlementManagement", $this->_propDict) && !is_null($this->_propDict["entitlementManagement"])) {
            if (is_a($this->_propDict["entitlementManagement"], "\Microsoft\Graph\Model\EntitlementManagement")) {
                return $this->_propDict["entitlementManagement"];
            } else {
                $this->_propDict["entitlementManagement"] = new EntitlementManagement($this->_propDict["entitlementManagement"]);
                return $this->_propDict["entitlementManagement"];
            }
        }
        return null;
    }

    /**
    * Sets the entitlementManagement
    *
    * @param EntitlementManagement $val The entitlementManagement
    *
    * @return IdentityGovernance
    */
    public function setEntitlementManagement($val)
    {
        $this->_propDict["entitlementManagement"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return IdentityGovernance
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_array($val) && !empty($val)) {
                $serializableProperties[$property] = array_map(function ($element) {
                    return $this->serializeUniqueTypes($element);
                }, $val);
                continue;
            }
            $serializableProperties[$property] = $this->serializeUniqueTypes($val);
        }
        return $serializableProperties;
    }

    /**
    * Returns serialized value of \DateTime, \Microsoft\Graph\Core\Enum & \Microsoft\Graph\Entity types
    *
    * @return mixed
    **/
    private function serializeUniqueTypes($val)
    {
        if (is_a($val, '\DateTime')) {
            return $val->format(\DateTimeInterface::RFC3339);
        } else if (is_a($val, '\Microsoft\Graph\Core\Enum')) {
            return $val->value();
        } else if (is_a($val, "\Entity")) {
            return $val->jsonSerialize();
        } else {
            return $val;
        }
    }
}
