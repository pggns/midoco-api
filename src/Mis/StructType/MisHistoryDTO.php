<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisHistoryDTO StructType
 * @subpackage Structs
 */
class MisHistoryDTO extends AbstractStructBase
{
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
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The timeOfContact
     * @var string|null
     */
    protected ?string $timeOfContact = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for MisHistoryDTO
     * @uses MisHistoryDTO::setContactId()
     * @uses MisHistoryDTO::setCustomerId()
     * @uses MisHistoryDTO::setDescription()
     * @uses MisHistoryDTO::setOrgUnit()
     * @uses MisHistoryDTO::setTimeOfContact()
     * @uses MisHistoryDTO::setTypeId()
     * @param int $contactId
     * @param int $customerId
     * @param string $description
     * @param string $orgUnit
     * @param string $timeOfContact
     * @param string $typeId
     */
    public function __construct(?int $contactId = null, ?int $customerId = null, ?string $description = null, ?string $orgUnit = null, ?string $timeOfContact = null, ?string $typeId = null)
    {
        $this
            ->setContactId($contactId)
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setOrgUnit($orgUnit)
            ->setTimeOfContact($timeOfContact)
            ->setTypeId($typeId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisHistoryDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisHistoryDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisHistoryDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisHistoryDTO
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
    /**
     * Get timeOfContact value
     * @return string|null
     */
    public function getTimeOfContact(): ?string
    {
        return $this->timeOfContact;
    }
    /**
     * Set timeOfContact value
     * @param string $timeOfContact
     * @return \Pggns\MidocoApi\Mis\StructType\MisHistoryDTO
     */
    public function setTimeOfContact(?string $timeOfContact = null): self
    {
        // validation for constraint: string
        if (!is_null($timeOfContact) && !is_string($timeOfContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeOfContact, true), gettype($timeOfContact)), __LINE__);
        }
        $this->timeOfContact = $timeOfContact;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Mis\StructType\MisHistoryDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
