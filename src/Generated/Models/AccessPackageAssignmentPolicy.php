<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentPolicy extends Entity implements Parsable 
{
    /**
     * @var AccessPackage|null $accessPackage Access package containing this policy. Read-only.
    */
    private ?AccessPackage $accessPackage = null;
    
    /**
     * @var AllowedTargetScope|null $allowedTargetScope Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
    */
    private ?AllowedTargetScope $allowedTargetScope = null;
    
    /**
     * @var AccessPackageAutomaticRequestSettings|null $automaticRequestSettings This property is only present for an auto assignment policy; if absent, this is a request-based policy.
    */
    private ?AccessPackageAutomaticRequestSettings $automaticRequestSettings = null;
    
    /**
     * @var AccessPackageCatalog|null $catalog Catalog of the access package containing this policy. Read-only.
    */
    private ?AccessPackageCatalog $catalog = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description of the policy.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the policy.
    */
    private ?string $displayName = null;
    
    /**
     * @var ExpirationPattern|null $expiration The expiration date for assignments created in this policy.
    */
    private ?ExpirationPattern $expiration = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * @var AccessPackageAssignmentApprovalSettings|null $requestApprovalSettings Specifies the settings for approval of requests for an access package assignment through this policy. For example, if approval is required for new requests.
    */
    private ?AccessPackageAssignmentApprovalSettings $requestApprovalSettings = null;
    
    /**
     * @var AccessPackageAssignmentRequestorSettings|null $requestorSettings Provides additional settings to select who can create a request for an access package assignment through this policy, and what they can include in their request.
    */
    private ?AccessPackageAssignmentRequestorSettings $requestorSettings = null;
    
    /**
     * @var AccessPackageAssignmentReviewSettings|null $reviewSettings Settings for access reviews of assignments through this policy.
    */
    private ?AccessPackageAssignmentReviewSettings $reviewSettings = null;
    
    /**
     * @var array<SubjectSet>|null $specificAllowedTargets The principals that can be assigned access from an access package through this policy.
    */
    private ?array $specificAllowedTargets = null;
    
    /**
     * Instantiates a new accessPackageAssignmentPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageAssignmentPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentPolicy {
        return new AccessPackageAssignmentPolicy();
    }

    /**
     * Gets the accessPackage property value. Access package containing this policy. Read-only.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        return $this->accessPackage;
    }

    /**
     * Gets the allowedTargetScope property value. Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
     * @return AllowedTargetScope|null
    */
    public function getAllowedTargetScope(): ?AllowedTargetScope {
        return $this->allowedTargetScope;
    }

    /**
     * Gets the automaticRequestSettings property value. This property is only present for an auto assignment policy; if absent, this is a request-based policy.
     * @return AccessPackageAutomaticRequestSettings|null
    */
    public function getAutomaticRequestSettings(): ?AccessPackageAutomaticRequestSettings {
        return $this->automaticRequestSettings;
    }

    /**
     * Gets the catalog property value. Catalog of the access package containing this policy. Read-only.
     * @return AccessPackageCatalog|null
    */
    public function getCatalog(): ?AccessPackageCatalog {
        return $this->catalog;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of the policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the expiration property value. The expiration date for assignments created in this policy.
     * @return ExpirationPattern|null
    */
    public function getExpiration(): ?ExpirationPattern {
        return $this->expiration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'allowedTargetScope' => fn(ParseNode $n) => $o->setAllowedTargetScope($n->getEnumValue(AllowedTargetScope::class)),
            'automaticRequestSettings' => fn(ParseNode $n) => $o->setAutomaticRequestSettings($n->getObjectValue([AccessPackageAutomaticRequestSettings::class, 'createFromDiscriminatorValue'])),
            'catalog' => fn(ParseNode $n) => $o->setCatalog($n->getObjectValue([AccessPackageCatalog::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'expiration' => fn(ParseNode $n) => $o->setExpiration($n->getObjectValue([ExpirationPattern::class, 'createFromDiscriminatorValue'])),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'requestApprovalSettings' => fn(ParseNode $n) => $o->setRequestApprovalSettings($n->getObjectValue([AccessPackageAssignmentApprovalSettings::class, 'createFromDiscriminatorValue'])),
            'requestorSettings' => fn(ParseNode $n) => $o->setRequestorSettings($n->getObjectValue([AccessPackageAssignmentRequestorSettings::class, 'createFromDiscriminatorValue'])),
            'reviewSettings' => fn(ParseNode $n) => $o->setReviewSettings($n->getObjectValue([AccessPackageAssignmentReviewSettings::class, 'createFromDiscriminatorValue'])),
            'specificAllowedTargets' => fn(ParseNode $n) => $o->setSpecificAllowedTargets($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the requestApprovalSettings property value. Specifies the settings for approval of requests for an access package assignment through this policy. For example, if approval is required for new requests.
     * @return AccessPackageAssignmentApprovalSettings|null
    */
    public function getRequestApprovalSettings(): ?AccessPackageAssignmentApprovalSettings {
        return $this->requestApprovalSettings;
    }

    /**
     * Gets the requestorSettings property value. Provides additional settings to select who can create a request for an access package assignment through this policy, and what they can include in their request.
     * @return AccessPackageAssignmentRequestorSettings|null
    */
    public function getRequestorSettings(): ?AccessPackageAssignmentRequestorSettings {
        return $this->requestorSettings;
    }

    /**
     * Gets the reviewSettings property value. Settings for access reviews of assignments through this policy.
     * @return AccessPackageAssignmentReviewSettings|null
    */
    public function getReviewSettings(): ?AccessPackageAssignmentReviewSettings {
        return $this->reviewSettings;
    }

    /**
     * Gets the specificAllowedTargets property value. The principals that can be assigned access from an access package through this policy.
     * @return array<SubjectSet>|null
    */
    public function getSpecificAllowedTargets(): ?array {
        return $this->specificAllowedTargets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->accessPackage);
        $writer->writeEnumValue('allowedTargetScope', $this->allowedTargetScope);
        $writer->writeObjectValue('automaticRequestSettings', $this->automaticRequestSettings);
        $writer->writeObjectValue('catalog', $this->catalog);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('expiration', $this->expiration);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeObjectValue('requestApprovalSettings', $this->requestApprovalSettings);
        $writer->writeObjectValue('requestorSettings', $this->requestorSettings);
        $writer->writeObjectValue('reviewSettings', $this->reviewSettings);
        $writer->writeCollectionOfObjectValues('specificAllowedTargets', $this->specificAllowedTargets);
    }

    /**
     * Sets the accessPackage property value. Access package containing this policy. Read-only.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value ): void {
        $this->accessPackage = $value;
    }

    /**
     * Sets the allowedTargetScope property value. Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
     *  @param AllowedTargetScope|null $value Value to set for the allowedTargetScope property.
    */
    public function setAllowedTargetScope(?AllowedTargetScope $value ): void {
        $this->allowedTargetScope = $value;
    }

    /**
     * Sets the automaticRequestSettings property value. This property is only present for an auto assignment policy; if absent, this is a request-based policy.
     *  @param AccessPackageAutomaticRequestSettings|null $value Value to set for the automaticRequestSettings property.
    */
    public function setAutomaticRequestSettings(?AccessPackageAutomaticRequestSettings $value ): void {
        $this->automaticRequestSettings = $value;
    }

    /**
     * Sets the catalog property value. Catalog of the access package containing this policy. Read-only.
     *  @param AccessPackageCatalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?AccessPackageCatalog $value ): void {
        $this->catalog = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of the policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the expiration property value. The expiration date for assignments created in this policy.
     *  @param ExpirationPattern|null $value Value to set for the expiration property.
    */
    public function setExpiration(?ExpirationPattern $value ): void {
        $this->expiration = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the requestApprovalSettings property value. Specifies the settings for approval of requests for an access package assignment through this policy. For example, if approval is required for new requests.
     *  @param AccessPackageAssignmentApprovalSettings|null $value Value to set for the requestApprovalSettings property.
    */
    public function setRequestApprovalSettings(?AccessPackageAssignmentApprovalSettings $value ): void {
        $this->requestApprovalSettings = $value;
    }

    /**
     * Sets the requestorSettings property value. Provides additional settings to select who can create a request for an access package assignment through this policy, and what they can include in their request.
     *  @param AccessPackageAssignmentRequestorSettings|null $value Value to set for the requestorSettings property.
    */
    public function setRequestorSettings(?AccessPackageAssignmentRequestorSettings $value ): void {
        $this->requestorSettings = $value;
    }

    /**
     * Sets the reviewSettings property value. Settings for access reviews of assignments through this policy.
     *  @param AccessPackageAssignmentReviewSettings|null $value Value to set for the reviewSettings property.
    */
    public function setReviewSettings(?AccessPackageAssignmentReviewSettings $value ): void {
        $this->reviewSettings = $value;
    }

    /**
     * Sets the specificAllowedTargets property value. The principals that can be assigned access from an access package through this policy.
     *  @param array<SubjectSet>|null $value Value to set for the specificAllowedTargets property.
    */
    public function setSpecificAllowedTargets(?array $value ): void {
        $this->specificAllowedTargets = $value;
    }

}
