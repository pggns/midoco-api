<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerReference StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerReference extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The externalReference
     * @var string|null
     */
    protected ?string $externalReference = null;
    /**
     * The sender
     * @var string|null
     */
    protected ?string $sender = null;
    /**
     * The recipientInfo
     * @var string|null
     */
    protected ?string $recipientInfo = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for CustomerReference
     * @uses CustomerReference::setCustomerId()
     * @uses CustomerReference::setUnitName()
     * @uses CustomerReference::setExternalReference()
     * @uses CustomerReference::setSender()
     * @uses CustomerReference::setRecipientInfo()
     * @uses CustomerReference::setDescription()
     * @param int $customerId
     * @param string $unitName
     * @param string $externalReference
     * @param string $sender
     * @param string $recipientInfo
     * @param string $description
     */
    public function __construct(?int $customerId = null, ?string $unitName = null, ?string $externalReference = null, ?string $sender = null, ?string $recipientInfo = null, ?string $description = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setUnitName($unitName)
            ->setExternalReference($externalReference)
            ->setSender($sender)
            ->setRecipientInfo($recipientInfo)
            ->setDescription($description);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerReference
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerReference
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get externalReference value
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }
    /**
     * Set externalReference value
     * @param string $externalReference
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerReference
     */
    public function setExternalReference(?string $externalReference = null): self
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReference, true), gettype($externalReference)), __LINE__);
        }
        $this->externalReference = $externalReference;
        
        return $this;
    }
    /**
     * Get sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerReference
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->sender = $sender;
        
        return $this;
    }
    /**
     * Get recipientInfo value
     * @return string|null
     */
    public function getRecipientInfo(): ?string
    {
        return $this->recipientInfo;
    }
    /**
     * Set recipientInfo value
     * @param string $recipientInfo
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerReference
     */
    public function setRecipientInfo(?string $recipientInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientInfo) && !is_string($recipientInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientInfo, true), gettype($recipientInfo)), __LINE__);
        }
        $this->recipientInfo = $recipientInfo;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerReference
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
