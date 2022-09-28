<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChangeNotificationEncryptedContent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $data Base64-encoded encrypted data that produces a full resource respresented as JSON. The data has been encrypted with the provided dataKey using an AES/CBC/PKCS5PADDING cipher suite.
    */
    private ?string $data = null;
    
    /**
     * @var string|null $dataKey Base64-encoded symmetric key generated by Microsoft Graph to encrypt the data value and to generate the data signature. This key is encrypted with the certificate public key that was provided during the subscription. It must be decrypted with the certificate private key before it can be used to decrypt the data or verify the signature. This key has been encrypted with the following cipher suite: RSA/ECB/OAEPWithSHA1AndMGF1Padding.
    */
    private ?string $dataKey = null;
    
    /**
     * @var string|null $dataSignature Base64-encoded HMAC-SHA256 hash of the data for validation purposes.
    */
    private ?string $dataSignature = null;
    
    /**
     * @var string|null $encryptionCertificateId ID of the certificate used to encrypt the dataKey.
    */
    private ?string $encryptionCertificateId = null;
    
    /**
     * @var string|null $encryptionCertificateThumbprint Hexadecimal representation of the thumbprint of the certificate used to encrypt the dataKey.
    */
    private ?string $encryptionCertificateThumbprint = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new changeNotificationEncryptedContent and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.changeNotificationEncryptedContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeNotificationEncryptedContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChangeNotificationEncryptedContent {
        return new ChangeNotificationEncryptedContent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the data property value. Base64-encoded encrypted data that produces a full resource respresented as JSON. The data has been encrypted with the provided dataKey using an AES/CBC/PKCS5PADDING cipher suite.
     * @return string|null
    */
    public function getData(): ?string {
        return $this->data;
    }

    /**
     * Gets the dataKey property value. Base64-encoded symmetric key generated by Microsoft Graph to encrypt the data value and to generate the data signature. This key is encrypted with the certificate public key that was provided during the subscription. It must be decrypted with the certificate private key before it can be used to decrypt the data or verify the signature. This key has been encrypted with the following cipher suite: RSA/ECB/OAEPWithSHA1AndMGF1Padding.
     * @return string|null
    */
    public function getDataKey(): ?string {
        return $this->dataKey;
    }

    /**
     * Gets the dataSignature property value. Base64-encoded HMAC-SHA256 hash of the data for validation purposes.
     * @return string|null
    */
    public function getDataSignature(): ?string {
        return $this->dataSignature;
    }

    /**
     * Gets the encryptionCertificateId property value. ID of the certificate used to encrypt the dataKey.
     * @return string|null
    */
    public function getEncryptionCertificateId(): ?string {
        return $this->encryptionCertificateId;
    }

    /**
     * Gets the encryptionCertificateThumbprint property value. Hexadecimal representation of the thumbprint of the certificate used to encrypt the dataKey.
     * @return string|null
    */
    public function getEncryptionCertificateThumbprint(): ?string {
        return $this->encryptionCertificateThumbprint;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'data' => function (ParseNode $n) use ($o) { $o->setData($n->getStringValue()); },
            'dataKey' => function (ParseNode $n) use ($o) { $o->setDataKey($n->getStringValue()); },
            'dataSignature' => function (ParseNode $n) use ($o) { $o->setDataSignature($n->getStringValue()); },
            'encryptionCertificateId' => function (ParseNode $n) use ($o) { $o->setEncryptionCertificateId($n->getStringValue()); },
            'encryptionCertificateThumbprint' => function (ParseNode $n) use ($o) { $o->setEncryptionCertificateThumbprint($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('data', $this->data);
        $writer->writeStringValue('dataKey', $this->dataKey);
        $writer->writeStringValue('dataSignature', $this->dataSignature);
        $writer->writeStringValue('encryptionCertificateId', $this->encryptionCertificateId);
        $writer->writeStringValue('encryptionCertificateThumbprint', $this->encryptionCertificateThumbprint);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the data property value. Base64-encoded encrypted data that produces a full resource respresented as JSON. The data has been encrypted with the provided dataKey using an AES/CBC/PKCS5PADDING cipher suite.
     *  @param string|null $value Value to set for the data property.
    */
    public function setData(?string $value ): void {
        $this->data = $value;
    }

    /**
     * Sets the dataKey property value. Base64-encoded symmetric key generated by Microsoft Graph to encrypt the data value and to generate the data signature. This key is encrypted with the certificate public key that was provided during the subscription. It must be decrypted with the certificate private key before it can be used to decrypt the data or verify the signature. This key has been encrypted with the following cipher suite: RSA/ECB/OAEPWithSHA1AndMGF1Padding.
     *  @param string|null $value Value to set for the dataKey property.
    */
    public function setDataKey(?string $value ): void {
        $this->dataKey = $value;
    }

    /**
     * Sets the dataSignature property value. Base64-encoded HMAC-SHA256 hash of the data for validation purposes.
     *  @param string|null $value Value to set for the dataSignature property.
    */
    public function setDataSignature(?string $value ): void {
        $this->dataSignature = $value;
    }

    /**
     * Sets the encryptionCertificateId property value. ID of the certificate used to encrypt the dataKey.
     *  @param string|null $value Value to set for the encryptionCertificateId property.
    */
    public function setEncryptionCertificateId(?string $value ): void {
        $this->encryptionCertificateId = $value;
    }

    /**
     * Sets the encryptionCertificateThumbprint property value. Hexadecimal representation of the thumbprint of the certificate used to encrypt the dataKey.
     *  @param string|null $value Value to set for the encryptionCertificateThumbprint property.
    */
    public function setEncryptionCertificateThumbprint(?string $value ): void {
        $this->encryptionCertificateThumbprint = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}