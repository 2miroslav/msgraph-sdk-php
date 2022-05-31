<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VppToken extends Entity 
{
    /** @var string|null $appleId The apple Id associated with the given Apple Volume Purchase Program Token. */
    private ?string $appleId = null;
    
    /** @var bool|null $automaticallyUpdateApps Whether or not apps for the VPP token will be automatically updated. */
    private ?bool $automaticallyUpdateApps = null;
    
    /** @var string|null $countryOrRegion Whether or not apps for the VPP token will be automatically updated. */
    private ?string $countryOrRegion = null;
    
    /** @var DateTime|null $expirationDateTime The expiration date time of the Apple Volume Purchase Program Token. */
    private ?DateTime $expirationDateTime = null;
    
    /** @var DateTime|null $lastModifiedDateTime Last modification date time associated with the Apple Volume Purchase Program Token. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var DateTime|null $lastSyncDateTime The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token. */
    private ?DateTime $lastSyncDateTime = null;
    
    /** @var VppTokenSyncStatus|null $lastSyncStatus Current sync status of the last application sync which was triggered using the Apple Volume Purchase Program Token. Possible values are: none, inProgress, completed, failed. Possible values are: none, inProgress, completed, failed. */
    private ?VppTokenSyncStatus $lastSyncStatus = null;
    
    /** @var string|null $organizationName The organization associated with the Apple Volume Purchase Program Token */
    private ?string $organizationName = null;
    
    /** @var VppTokenState|null $state Current state of the Apple Volume Purchase Program Token. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM. */
    private ?VppTokenState $state = null;
    
    /** @var string|null $token The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program. */
    private ?string $token = null;
    
    /** @var VppTokenAccountType|null $vppTokenAccountType The type of volume purchase program which the given Apple Volume Purchase Program Token is associated with. Possible values are: business, education. Possible values are: business, education. */
    private ?VppTokenAccountType $vppTokenAccountType = null;
    
    /**
     * Instantiates a new vppToken and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VppToken
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): VppToken {
        return new VppToken();
    }

    /**
     * Gets the appleId property value. The apple Id associated with the given Apple Volume Purchase Program Token.
     * @return string|null
    */
    public function getAppleId(): ?string {
        return $this->appleId;
    }

    /**
     * Gets the automaticallyUpdateApps property value. Whether or not apps for the VPP token will be automatically updated.
     * @return bool|null
    */
    public function getAutomaticallyUpdateApps(): ?bool {
        return $this->automaticallyUpdateApps;
    }

    /**
     * Gets the countryOrRegion property value. Whether or not apps for the VPP token will be automatically updated.
     * @return string|null
    */
    public function getCountryOrRegion(): ?string {
        return $this->countryOrRegion;
    }

    /**
     * Gets the expirationDateTime property value. The expiration date time of the Apple Volume Purchase Program Token.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'appleId' => function (self $o, ParseNode $n) { $o->setAppleId($n->getStringValue()); },
            'automaticallyUpdateApps' => function (self $o, ParseNode $n) { $o->setAutomaticallyUpdateApps($n->getBooleanValue()); },
            'countryOrRegion' => function (self $o, ParseNode $n) { $o->setCountryOrRegion($n->getStringValue()); },
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'lastSyncDateTime' => function (self $o, ParseNode $n) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'lastSyncStatus' => function (self $o, ParseNode $n) { $o->setLastSyncStatus($n->getEnumValue(VppTokenSyncStatus::class)); },
            'organizationName' => function (self $o, ParseNode $n) { $o->setOrganizationName($n->getStringValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(VppTokenState::class)); },
            'token' => function (self $o, ParseNode $n) { $o->setToken($n->getStringValue()); },
            'vppTokenAccountType' => function (self $o, ParseNode $n) { $o->setVppTokenAccountType($n->getEnumValue(VppTokenAccountType::class)); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modification date time associated with the Apple Volume Purchase Program Token.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the lastSyncDateTime property value. The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the lastSyncStatus property value. Current sync status of the last application sync which was triggered using the Apple Volume Purchase Program Token. Possible values are: none, inProgress, completed, failed. Possible values are: none, inProgress, completed, failed.
     * @return VppTokenSyncStatus|null
    */
    public function getLastSyncStatus(): ?VppTokenSyncStatus {
        return $this->lastSyncStatus;
    }

    /**
     * Gets the organizationName property value. The organization associated with the Apple Volume Purchase Program Token
     * @return string|null
    */
    public function getOrganizationName(): ?string {
        return $this->organizationName;
    }

    /**
     * Gets the state property value. Current state of the Apple Volume Purchase Program Token. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM.
     * @return VppTokenState|null
    */
    public function getState(): ?VppTokenState {
        return $this->state;
    }

    /**
     * Gets the token property value. The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program.
     * @return string|null
    */
    public function getToken(): ?string {
        return $this->token;
    }

    /**
     * Gets the vppTokenAccountType property value. The type of volume purchase program which the given Apple Volume Purchase Program Token is associated with. Possible values are: business, education. Possible values are: business, education.
     * @return VppTokenAccountType|null
    */
    public function getVppTokenAccountType(): ?VppTokenAccountType {
        return $this->vppTokenAccountType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appleId', $this->appleId);
        $writer->writeBooleanValue('automaticallyUpdateApps', $this->automaticallyUpdateApps);
        $writer->writeStringValue('countryOrRegion', $this->countryOrRegion);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeEnumValue('lastSyncStatus', $this->lastSyncStatus);
        $writer->writeStringValue('organizationName', $this->organizationName);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('token', $this->token);
        $writer->writeEnumValue('vppTokenAccountType', $this->vppTokenAccountType);
    }

    /**
     * Sets the appleId property value. The apple Id associated with the given Apple Volume Purchase Program Token.
     *  @param string|null $value Value to set for the appleId property.
    */
    public function setAppleId(?string $value ): void {
        $this->appleId = $value;
    }

    /**
     * Sets the automaticallyUpdateApps property value. Whether or not apps for the VPP token will be automatically updated.
     *  @param bool|null $value Value to set for the automaticallyUpdateApps property.
    */
    public function setAutomaticallyUpdateApps(?bool $value ): void {
        $this->automaticallyUpdateApps = $value;
    }

    /**
     * Sets the countryOrRegion property value. Whether or not apps for the VPP token will be automatically updated.
     *  @param string|null $value Value to set for the countryOrRegion property.
    */
    public function setCountryOrRegion(?string $value ): void {
        $this->countryOrRegion = $value;
    }

    /**
     * Sets the expirationDateTime property value. The expiration date time of the Apple Volume Purchase Program Token.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modification date time associated with the Apple Volume Purchase Program Token.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the lastSyncStatus property value. Current sync status of the last application sync which was triggered using the Apple Volume Purchase Program Token. Possible values are: none, inProgress, completed, failed. Possible values are: none, inProgress, completed, failed.
     *  @param VppTokenSyncStatus|null $value Value to set for the lastSyncStatus property.
    */
    public function setLastSyncStatus(?VppTokenSyncStatus $value ): void {
        $this->lastSyncStatus = $value;
    }

    /**
     * Sets the organizationName property value. The organization associated with the Apple Volume Purchase Program Token
     *  @param string|null $value Value to set for the organizationName property.
    */
    public function setOrganizationName(?string $value ): void {
        $this->organizationName = $value;
    }

    /**
     * Sets the state property value. Current state of the Apple Volume Purchase Program Token. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM.
     *  @param VppTokenState|null $value Value to set for the state property.
    */
    public function setState(?VppTokenState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the token property value. The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program.
     *  @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value ): void {
        $this->token = $value;
    }

    /**
     * Sets the vppTokenAccountType property value. The type of volume purchase program which the given Apple Volume Purchase Program Token is associated with. Possible values are: business, education. Possible values are: business, education.
     *  @param VppTokenAccountType|null $value Value to set for the vppTokenAccountType property.
    */
    public function setVppTokenAccountType(?VppTokenAccountType $value ): void {
        $this->vppTokenAccountType = $value;
    }

}