<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailClusterEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new MailClusterEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailClusterEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailClusterEvidence {
        return new MailClusterEvidence();
    }

    /**
     * Gets the clusterBy property value. The clusterBy property
     * @return string|null
    */
    public function getClusterBy(): ?string {
        return $this->getBackingStore()->get('clusterBy');
    }

    /**
     * Gets the clusterByValue property value. The clusterByValue property
     * @return string|null
    */
    public function getClusterByValue(): ?string {
        return $this->getBackingStore()->get('clusterByValue');
    }

    /**
     * Gets the emailCount property value. The emailCount property
     * @return int|null
    */
    public function getEmailCount(): ?int {
        return $this->getBackingStore()->get('emailCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clusterBy' => fn(ParseNode $n) => $o->setClusterBy($n->getStringValue()),
            'clusterByValue' => fn(ParseNode $n) => $o->setClusterByValue($n->getStringValue()),
            'emailCount' => fn(ParseNode $n) => $o->setEmailCount($n->getIntegerValue()),
            'networkMessageIds' => fn(ParseNode $n) => $o->setNetworkMessageIds($n->getCollectionOfPrimitiveValues()),
            'query' => fn(ParseNode $n) => $o->setQuery($n->getStringValue()),
            'urn' => fn(ParseNode $n) => $o->setUrn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the networkMessageIds property value. The networkMessageIds property
     * @return array<string>|null
    */
    public function getNetworkMessageIds(): ?array {
        return $this->getBackingStore()->get('networkMessageIds');
    }

    /**
     * Gets the query property value. The query property
     * @return string|null
    */
    public function getQuery(): ?string {
        return $this->getBackingStore()->get('query');
    }

    /**
     * Gets the urn property value. The urn property
     * @return string|null
    */
    public function getUrn(): ?string {
        return $this->getBackingStore()->get('urn');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clusterBy', $this->getClusterBy());
        $writer->writeStringValue('clusterByValue', $this->getClusterByValue());
        $writer->writeIntegerValue('emailCount', $this->getEmailCount());
        $writer->writeCollectionOfPrimitiveValues('networkMessageIds', $this->getNetworkMessageIds());
        $writer->writeStringValue('query', $this->getQuery());
        $writer->writeStringValue('urn', $this->getUrn());
    }

    /**
     * Sets the clusterBy property value. The clusterBy property
     *  @param string|null $value Value to set for the clusterBy property.
    */
    public function setClusterBy(?string $value): void {
        $this->getBackingStore()->set('clusterBy', $value);
    }

    /**
     * Sets the clusterByValue property value. The clusterByValue property
     *  @param string|null $value Value to set for the clusterByValue property.
    */
    public function setClusterByValue(?string $value): void {
        $this->getBackingStore()->set('clusterByValue', $value);
    }

    /**
     * Sets the emailCount property value. The emailCount property
     *  @param int|null $value Value to set for the emailCount property.
    */
    public function setEmailCount(?int $value): void {
        $this->getBackingStore()->set('emailCount', $value);
    }

    /**
     * Sets the networkMessageIds property value. The networkMessageIds property
     *  @param array<string>|null $value Value to set for the networkMessageIds property.
    */
    public function setNetworkMessageIds(?array $value): void {
        $this->getBackingStore()->set('networkMessageIds', $value);
    }

    /**
     * Sets the query property value. The query property
     *  @param string|null $value Value to set for the query property.
    */
    public function setQuery(?string $value): void {
        $this->getBackingStore()->set('query', $value);
    }

    /**
     * Sets the urn property value. The urn property
     *  @param string|null $value Value to set for the urn property.
    */
    public function setUrn(?string $value): void {
        $this->getBackingStore()->set('urn', $value);
    }

}
