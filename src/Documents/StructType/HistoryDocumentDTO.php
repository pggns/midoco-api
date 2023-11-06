<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HistoryDocumentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HistoryDocumentDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The diffRepositoryId
     * @var int|null
     */
    protected ?int $diffRepositoryId = null;
    /**
     * The processed
     * @var bool|null
     */
    protected ?bool $processed = null;
    /**
     * The refId
     * @var string|null
     */
    protected ?string $refId = null;
    /**
     * The subType
     * @var string|null
     */
    protected ?string $subType = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The versionId
     * @var int|null
     */
    protected ?int $versionId = null;
    /**
     * The xml
     * @var string|null
     */
    protected ?string $xml = null;
    /**
     * Constructor method for HistoryDocumentDTO
     * @uses HistoryDocumentDTO::setCreationDate()
     * @uses HistoryDocumentDTO::setCreationUser()
     * @uses HistoryDocumentDTO::setDiffRepositoryId()
     * @uses HistoryDocumentDTO::setProcessed()
     * @uses HistoryDocumentDTO::setRefId()
     * @uses HistoryDocumentDTO::setSubType()
     * @uses HistoryDocumentDTO::setType()
     * @uses HistoryDocumentDTO::setUnitName()
     * @uses HistoryDocumentDTO::setVersionId()
     * @uses HistoryDocumentDTO::setXml()
     * @param string $creationDate
     * @param int $creationUser
     * @param int $diffRepositoryId
     * @param bool $processed
     * @param string $refId
     * @param string $subType
     * @param string $type
     * @param string $unitName
     * @param int $versionId
     * @param string $xml
     */
    public function __construct(?string $creationDate = null, ?int $creationUser = null, ?int $diffRepositoryId = null, ?bool $processed = null, ?string $refId = null, ?string $subType = null, ?string $type = null, ?string $unitName = null, ?int $versionId = null, ?string $xml = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDiffRepositoryId($diffRepositoryId)
            ->setProcessed($processed)
            ->setRefId($refId)
            ->setSubType($subType)
            ->setType($type)
            ->setUnitName($unitName)
            ->setVersionId($versionId)
            ->setXml($xml);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get diffRepositoryId value
     * @return int|null
     */
    public function getDiffRepositoryId(): ?int
    {
        return $this->diffRepositoryId;
    }
    /**
     * Set diffRepositoryId value
     * @param int $diffRepositoryId
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
     */
    public function setDiffRepositoryId(?int $diffRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($diffRepositoryId) && !(is_int($diffRepositoryId) || ctype_digit($diffRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($diffRepositoryId, true), gettype($diffRepositoryId)), __LINE__);
        }
        $this->diffRepositoryId = $diffRepositoryId;
        
        return $this;
    }
    /**
     * Get processed value
     * @return bool|null
     */
    public function getProcessed(): ?bool
    {
        return $this->processed;
    }
    /**
     * Set processed value
     * @param bool $processed
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
     */
    public function setProcessed(?bool $processed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($processed) && !is_bool($processed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processed, true), gettype($processed)), __LINE__);
        }
        $this->processed = $processed;
        
        return $this;
    }
    /**
     * Get refId value
     * @return string|null
     */
    public function getRefId(): ?string
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param string $refId
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
     */
    public function setRefId(?string $refId = null): self
    {
        // validation for constraint: string
        if (!is_null($refId) && !is_string($refId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get subType value
     * @return string|null
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }
    /**
     * Set subType value
     * @param string $subType
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
     */
    public function setSubType(?string $subType = null): self
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->subType = $subType;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
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
     * Get versionId value
     * @return int|null
     */
    public function getVersionId(): ?int
    {
        return $this->versionId;
    }
    /**
     * Set versionId value
     * @param int $versionId
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
     */
    public function setVersionId(?int $versionId = null): self
    {
        // validation for constraint: int
        if (!is_null($versionId) && !(is_int($versionId) || ctype_digit($versionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionId, true), gettype($versionId)), __LINE__);
        }
        $this->versionId = $versionId;
        
        return $this;
    }
    /**
     * Get xml value
     * @return string|null
     */
    public function getXml(): ?string
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param string $xml
     * @return \Pggns\MidocoApi\Documents\StructType\HistoryDocumentDTO
     */
    public function setXml(?string $xml = null): self
    {
        // validation for constraint: string
        if (!is_null($xml) && !is_string($xml)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xml, true), gettype($xml)), __LINE__);
        }
        $this->xml = $xml;
        
        return $this;
    }
}
