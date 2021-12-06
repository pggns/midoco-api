<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisContactDTO StructType
 * @subpackage Structs
 */
class MisContactDTO extends AbstractStructBase
{
    /**
     * The contactData
     * @var string|null
     */
    protected ?string $contactData = null;
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
    /**
     * The mailingStatus
     * @var string|null
     */
    protected ?string $mailingStatus = null;
    /**
     * The mediaId
     * @var string|null
     */
    protected ?string $mediaId = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for MisContactDTO
     * @uses MisContactDTO::setContactData()
     * @uses MisContactDTO::setContactId()
     * @uses MisContactDTO::setCustomerId()
     * @uses MisContactDTO::setMailingProhibited()
     * @uses MisContactDTO::setMailingStatus()
     * @uses MisContactDTO::setMediaId()
     * @uses MisContactDTO::setOrgUnit()
     * @param string $contactData
     * @param int $contactId
     * @param int $customerId
     * @param bool $mailingProhibited
     * @param string $mailingStatus
     * @param string $mediaId
     * @param string $orgUnit
     */
    public function __construct(?string $contactData = null, ?int $contactId = null, ?int $customerId = null, ?bool $mailingProhibited = null, ?string $mailingStatus = null, ?string $mediaId = null, ?string $orgUnit = null)
    {
        $this
            ->setContactData($contactData)
            ->setContactId($contactId)
            ->setCustomerId($customerId)
            ->setMailingProhibited($mailingProhibited)
            ->setMailingStatus($mailingStatus)
            ->setMediaId($mediaId)
            ->setOrgUnit($orgUnit);
    }
    /**
     * Get contactData value
     * @return string|null
     */
    public function getContactData(): ?string
    {
        return $this->contactData;
    }
    /**
     * Set contactData value
     * @param string $contactData
     * @return \Pggns\MidocoApi\Mis\StructType\MisContactDTO
     */
    public function setContactData(?string $contactData = null): self
    {
        // validation for constraint: string
        if (!is_null($contactData) && !is_string($contactData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactData, true), gettype($contactData)), __LINE__);
        }
        $this->contactData = $contactData;
        
        return $this;
    }
    /**
     * Get contactId value
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \Pggns\MidocoApi\Mis\StructType\MisContactDTO
     */
    public function setContactId(?int $contactId = null): self
    {
        // validation for constraint: int
        if (!is_null($contactId) && !(is_int($contactId) || ctype_digit($contactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisContactDTO
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
     * Get mailingProhibited value
     * @return bool|null
     */
    public function getMailingProhibited(): ?bool
    {
        return $this->mailingProhibited;
    }
    /**
     * Set mailingProhibited value
     * @param bool $mailingProhibited
     * @return \Pggns\MidocoApi\Mis\StructType\MisContactDTO
     */
    public function setMailingProhibited(?bool $mailingProhibited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibited) && !is_bool($mailingProhibited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibited, true), gettype($mailingProhibited)), __LINE__);
        }
        $this->mailingProhibited = $mailingProhibited;
        
        return $this;
    }
    /**
     * Get mailingStatus value
     * @return string|null
     */
    public function getMailingStatus(): ?string
    {
        return $this->mailingStatus;
    }
    /**
     * Set mailingStatus value
     * @param string $mailingStatus
     * @return \Pggns\MidocoApi\Mis\StructType\MisContactDTO
     */
    public function setMailingStatus(?string $mailingStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($mailingStatus) && !is_string($mailingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailingStatus, true), gettype($mailingStatus)), __LINE__);
        }
        $this->mailingStatus = $mailingStatus;
        
        return $this;
    }
    /**
     * Get mediaId value
     * @return string|null
     */
    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }
    /**
     * Set mediaId value
     * @param string $mediaId
     * @return \Pggns\MidocoApi\Mis\StructType\MisContactDTO
     */
    public function setMediaId(?string $mediaId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaId) && !is_string($mediaId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaId, true), gettype($mediaId)), __LINE__);
        }
        $this->mediaId = $mediaId;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\MisContactDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
}
