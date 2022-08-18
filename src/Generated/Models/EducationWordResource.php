<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationWordResource extends EducationResource implements Parsable 
{
    /**
     * @var string|null $fileUrl Location of the file on disk.
    */
    private ?string $fileUrl = null;
    
    /**
     * Instantiates a new EducationWordResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationWordResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationWordResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationWordResource {
        return new EducationWordResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileUrl' => function (ParseNode $n) use ($o) { $o->setFileUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileUrl property value. Location of the file on disk.
     * @return string|null
    */
    public function getFileUrl(): ?string {
        return $this->fileUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('fileUrl', $this->fileUrl);
    }

    /**
     * Sets the fileUrl property value. Location of the file on disk.
     *  @param string|null $value Value to set for the fileUrl property.
    */
    public function setFileUrl(?string $value ): void {
        $this->fileUrl = $value;
    }

}