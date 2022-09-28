<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftAuthenticatorAuthenticationMethodTarget extends AuthenticationMethodTarget implements Parsable 
{
    /**
     * @var MicrosoftAuthenticatorAuthenticationMode|null $authenticationMode The authenticationMode property
    */
    private ?MicrosoftAuthenticatorAuthenticationMode $authenticationMode = null;
    
    /**
     * Instantiates a new MicrosoftAuthenticatorAuthenticationMethodTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftAuthenticatorAuthenticationMethodTarget');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAuthenticatorAuthenticationMethodTarget {
        return new MicrosoftAuthenticatorAuthenticationMethodTarget();
    }

    /**
     * Gets the authenticationMode property value. The authenticationMode property
     * @return MicrosoftAuthenticatorAuthenticationMode|null
    */
    public function getAuthenticationMode(): ?MicrosoftAuthenticatorAuthenticationMode {
        return $this->authenticationMode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMode' => function (ParseNode $n) use ($o) { $o->setAuthenticationMode($n->getEnumValue(MicrosoftAuthenticatorAuthenticationMode::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMode', $this->authenticationMode);
    }

    /**
     * Sets the authenticationMode property value. The authenticationMode property
     *  @param MicrosoftAuthenticatorAuthenticationMode|null $value Value to set for the authenticationMode property.
    */
    public function setAuthenticationMode(?MicrosoftAuthenticatorAuthenticationMode $value ): void {
        $this->authenticationMode = $value;
    }

}