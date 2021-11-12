<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Team File
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
* Team class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Team extends Entity
{
    /**
    * Gets the classification
    * An optional label. Typically describes the data or business sensitivity of the team. Must match one of a pre-configured set in the tenant's directory.
    *
    * @return string|null The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            return $this->_propDict["classification"];
        } else {
            return null;
        }
    }

    /**
    * Sets the classification
    * An optional label. Typically describes the data or business sensitivity of the team. Must match one of a pre-configured set in the tenant's directory.
    *
    * @param string $val The classification
    *
    * @return Team
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Timestamp at which the team was created.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict) && !is_null($this->_propDict["createdDateTime"])) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Timestamp at which the team was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Team
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the description
    * An optional description for the team. Maximum length: 1024 characters.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * An optional description for the team. Maximum length: 1024 characters.
    *
    * @param string $val The description
    *
    * @return Team
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The name of the team.
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
    * The name of the team.
    *
    * @param string $val The displayName
    *
    * @return Team
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the funSettings
    * Settings to configure use of Giphy, memes, and stickers in the team.
    *
    * @return TeamFunSettings|null The funSettings
    */
    public function getFunSettings()
    {
        if (array_key_exists("funSettings", $this->_propDict) && !is_null($this->_propDict["funSettings"])) {
            if (is_a($this->_propDict["funSettings"], "\Microsoft\Graph\Model\TeamFunSettings")) {
                return $this->_propDict["funSettings"];
            } else {
                $this->_propDict["funSettings"] = new TeamFunSettings($this->_propDict["funSettings"]);
                return $this->_propDict["funSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the funSettings
    * Settings to configure use of Giphy, memes, and stickers in the team.
    *
    * @param TeamFunSettings $val The funSettings
    *
    * @return Team
    */
    public function setFunSettings($val)
    {
        $this->_propDict["funSettings"] = $val;
        return $this;
    }

    /**
    * Gets the guestSettings
    * Settings to configure whether guests can create, update, or delete channels in the team.
    *
    * @return TeamGuestSettings|null The guestSettings
    */
    public function getGuestSettings()
    {
        if (array_key_exists("guestSettings", $this->_propDict) && !is_null($this->_propDict["guestSettings"])) {
            if (is_a($this->_propDict["guestSettings"], "\Microsoft\Graph\Model\TeamGuestSettings")) {
                return $this->_propDict["guestSettings"];
            } else {
                $this->_propDict["guestSettings"] = new TeamGuestSettings($this->_propDict["guestSettings"]);
                return $this->_propDict["guestSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the guestSettings
    * Settings to configure whether guests can create, update, or delete channels in the team.
    *
    * @param TeamGuestSettings $val The guestSettings
    *
    * @return Team
    */
    public function setGuestSettings($val)
    {
        $this->_propDict["guestSettings"] = $val;
        return $this;
    }

    /**
    * Gets the internalId
    * A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
    *
    * @return string|null The internalId
    */
    public function getInternalId()
    {
        if (array_key_exists("internalId", $this->_propDict)) {
            return $this->_propDict["internalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internalId
    * A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
    *
    * @param string $val The internalId
    *
    * @return Team
    */
    public function setInternalId($val)
    {
        $this->_propDict["internalId"] = $val;
        return $this;
    }

    /**
    * Gets the isArchived
    * Whether this team is in read-only mode.
    *
    * @return bool|null The isArchived
    */
    public function getIsArchived()
    {
        if (array_key_exists("isArchived", $this->_propDict)) {
            return $this->_propDict["isArchived"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isArchived
    * Whether this team is in read-only mode.
    *
    * @param bool $val The isArchived
    *
    * @return Team
    */
    public function setIsArchived($val)
    {
        $this->_propDict["isArchived"] = boolval($val);
        return $this;
    }

    /**
    * Gets the memberSettings
    * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
    *
    * @return TeamMemberSettings|null The memberSettings
    */
    public function getMemberSettings()
    {
        if (array_key_exists("memberSettings", $this->_propDict) && !is_null($this->_propDict["memberSettings"])) {
            if (is_a($this->_propDict["memberSettings"], "\Microsoft\Graph\Model\TeamMemberSettings")) {
                return $this->_propDict["memberSettings"];
            } else {
                $this->_propDict["memberSettings"] = new TeamMemberSettings($this->_propDict["memberSettings"]);
                return $this->_propDict["memberSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the memberSettings
    * Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
    *
    * @param TeamMemberSettings $val The memberSettings
    *
    * @return Team
    */
    public function setMemberSettings($val)
    {
        $this->_propDict["memberSettings"] = $val;
        return $this;
    }

    /**
    * Gets the messagingSettings
    * Settings to configure messaging and mentions in the team.
    *
    * @return TeamMessagingSettings|null The messagingSettings
    */
    public function getMessagingSettings()
    {
        if (array_key_exists("messagingSettings", $this->_propDict) && !is_null($this->_propDict["messagingSettings"])) {
            if (is_a($this->_propDict["messagingSettings"], "\Microsoft\Graph\Model\TeamMessagingSettings")) {
                return $this->_propDict["messagingSettings"];
            } else {
                $this->_propDict["messagingSettings"] = new TeamMessagingSettings($this->_propDict["messagingSettings"]);
                return $this->_propDict["messagingSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the messagingSettings
    * Settings to configure messaging and mentions in the team.
    *
    * @param TeamMessagingSettings $val The messagingSettings
    *
    * @return Team
    */
    public function setMessagingSettings($val)
    {
        $this->_propDict["messagingSettings"] = $val;
        return $this;
    }

    /**
    * Gets the specialization
    * Optional. Indicates whether the team is intended for a particular use case.  Each team specialization has access to unique behaviors and experiences targeted to its use case.
    *
    * @return TeamSpecialization|null The specialization
    */
    public function getSpecialization()
    {
        if (array_key_exists("specialization", $this->_propDict) && !is_null($this->_propDict["specialization"])) {
            if (is_a($this->_propDict["specialization"], "\Microsoft\Graph\Model\TeamSpecialization")) {
                return $this->_propDict["specialization"];
            } else {
                $this->_propDict["specialization"] = new TeamSpecialization($this->_propDict["specialization"]);
                return $this->_propDict["specialization"];
            }
        }
        return null;
    }

    /**
    * Sets the specialization
    * Optional. Indicates whether the team is intended for a particular use case.  Each team specialization has access to unique behaviors and experiences targeted to its use case.
    *
    * @param TeamSpecialization $val The specialization
    *
    * @return Team
    */
    public function setSpecialization($val)
    {
        $this->_propDict["specialization"] = $val;
        return $this;
    }

    /**
    * Gets the visibility
    * The visibility of the group and team. Defaults to Public.
    *
    * @return TeamVisibilityType|null The visibility
    */
    public function getVisibility()
    {
        if (array_key_exists("visibility", $this->_propDict) && !is_null($this->_propDict["visibility"])) {
            if (is_a($this->_propDict["visibility"], "\Microsoft\Graph\Model\TeamVisibilityType")) {
                return $this->_propDict["visibility"];
            } else {
                $this->_propDict["visibility"] = new TeamVisibilityType($this->_propDict["visibility"]);
                return $this->_propDict["visibility"];
            }
        }
        return null;
    }

    /**
    * Sets the visibility
    * The visibility of the group and team. Defaults to Public.
    *
    * @param TeamVisibilityType $val The visibility
    *
    * @return Team
    */
    public function setVisibility($val)
    {
        $this->_propDict["visibility"] = $val;
        return $this;
    }

    /**
    * Gets the webUrl
    * A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
    *
    * @param string $val The webUrl
    *
    * @return Team
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }


     /**
     * Gets the channels
    * The collection of channels &amp; messages associated with the team.
     *
     * @return Channel[]|null The channels
     */
    public function getChannels()
    {
        if (array_key_exists('channels', $this->_propDict) && !is_null($this->_propDict['channels'])) {
            $channels = [];
            if (count($this->_propDict['channels']) > 0 && is_a($this->_propDict['channels'][0], 'Channel')) {
                return $this->_propDict['channels'];
            }
            foreach ($this->_propDict['channels'] as $singleValue) {
                $channels []= new Channel($singleValue);
            }
            $this->_propDict['channels'] = $channels;
            return $this->_propDict['channels'];
        }
        return null;
    }

    /**
    * Sets the channels
    * The collection of channels &amp; messages associated with the team.
    *
    * @param Channel[] $val The channels
    *
    * @return Team
    */
    public function setChannels($val)
    {
        $this->_propDict["channels"] = $val;
        return $this;
    }

    /**
    * Gets the group
    *
    * @return Group|null The group
    */
    public function getGroup()
    {
        if (array_key_exists("group", $this->_propDict) && !is_null($this->_propDict["group"])) {
            if (is_a($this->_propDict["group"], "\Microsoft\Graph\Model\Group")) {
                return $this->_propDict["group"];
            } else {
                $this->_propDict["group"] = new Group($this->_propDict["group"]);
                return $this->_propDict["group"];
            }
        }
        return null;
    }

    /**
    * Sets the group
    *
    * @param Group $val The group
    *
    * @return Team
    */
    public function setGroup($val)
    {
        $this->_propDict["group"] = $val;
        return $this;
    }


     /**
     * Gets the installedApps
    * The apps installed in this team.
     *
     * @return TeamsAppInstallation[]|null The installedApps
     */
    public function getInstalledApps()
    {
        if (array_key_exists('installedApps', $this->_propDict) && !is_null($this->_propDict['installedApps'])) {
            $installedApps = [];
            if (count($this->_propDict['installedApps']) > 0 && is_a($this->_propDict['installedApps'][0], 'TeamsAppInstallation')) {
                return $this->_propDict['installedApps'];
            }
            foreach ($this->_propDict['installedApps'] as $singleValue) {
                $installedApps []= new TeamsAppInstallation($singleValue);
            }
            $this->_propDict['installedApps'] = $installedApps;
            return $this->_propDict['installedApps'];
        }
        return null;
    }

    /**
    * Sets the installedApps
    * The apps installed in this team.
    *
    * @param TeamsAppInstallation[] $val The installedApps
    *
    * @return Team
    */
    public function setInstalledApps($val)
    {
        $this->_propDict["installedApps"] = $val;
        return $this;
    }


     /**
     * Gets the members
    * Members and owners of the team.
     *
     * @return ConversationMember[]|null The members
     */
    public function getMembers()
    {
        if (array_key_exists('members', $this->_propDict) && !is_null($this->_propDict['members'])) {
            $members = [];
            if (count($this->_propDict['members']) > 0 && is_a($this->_propDict['members'][0], 'ConversationMember')) {
                return $this->_propDict['members'];
            }
            foreach ($this->_propDict['members'] as $singleValue) {
                $members []= new ConversationMember($singleValue);
            }
            $this->_propDict['members'] = $members;
            return $this->_propDict['members'];
        }
        return null;
    }

    /**
    * Sets the members
    * Members and owners of the team.
    *
    * @param ConversationMember[] $val The members
    *
    * @return Team
    */
    public function setMembers($val)
    {
        $this->_propDict["members"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * The async operations that ran or are running on this team.
     *
     * @return TeamsAsyncOperation[]|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists('operations', $this->_propDict) && !is_null($this->_propDict['operations'])) {
            $operations = [];
            if (count($this->_propDict['operations']) > 0 && is_a($this->_propDict['operations'][0], 'TeamsAsyncOperation')) {
                return $this->_propDict['operations'];
            }
            foreach ($this->_propDict['operations'] as $singleValue) {
                $operations []= new TeamsAsyncOperation($singleValue);
            }
            $this->_propDict['operations'] = $operations;
            return $this->_propDict['operations'];
        }
        return null;
    }

    /**
    * Sets the operations
    * The async operations that ran or are running on this team.
    *
    * @param TeamsAsyncOperation[] $val The operations
    *
    * @return Team
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }

    /**
    * Gets the primaryChannel
    * The general channel for the team.
    *
    * @return Channel|null The primaryChannel
    */
    public function getPrimaryChannel()
    {
        if (array_key_exists("primaryChannel", $this->_propDict) && !is_null($this->_propDict["primaryChannel"])) {
            if (is_a($this->_propDict["primaryChannel"], "\Microsoft\Graph\Model\Channel")) {
                return $this->_propDict["primaryChannel"];
            } else {
                $this->_propDict["primaryChannel"] = new Channel($this->_propDict["primaryChannel"]);
                return $this->_propDict["primaryChannel"];
            }
        }
        return null;
    }

    /**
    * Sets the primaryChannel
    * The general channel for the team.
    *
    * @param Channel $val The primaryChannel
    *
    * @return Team
    */
    public function setPrimaryChannel($val)
    {
        $this->_propDict["primaryChannel"] = $val;
        return $this;
    }

    /**
    * Gets the template
    * The template this team was created from. See available templates.
    *
    * @return TeamsTemplate|null The template
    */
    public function getTemplate()
    {
        if (array_key_exists("template", $this->_propDict) && !is_null($this->_propDict["template"])) {
            if (is_a($this->_propDict["template"], "\Microsoft\Graph\Model\TeamsTemplate")) {
                return $this->_propDict["template"];
            } else {
                $this->_propDict["template"] = new TeamsTemplate($this->_propDict["template"]);
                return $this->_propDict["template"];
            }
        }
        return null;
    }

    /**
    * Sets the template
    * The template this team was created from. See available templates.
    *
    * @param TeamsTemplate $val The template
    *
    * @return Team
    */
    public function setTemplate($val)
    {
        $this->_propDict["template"] = $val;
        return $this;
    }

    /**
    * Gets the schedule
    * The schedule of shifts for this team.
    *
    * @return Schedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict) && !is_null($this->_propDict["schedule"])) {
            if (is_a($this->_propDict["schedule"], "\Microsoft\Graph\Model\Schedule")) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new Schedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    * The schedule of shifts for this team.
    *
    * @param Schedule $val The schedule
    *
    * @return Team
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }

}
