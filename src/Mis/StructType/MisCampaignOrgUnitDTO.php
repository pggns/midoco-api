<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignOrgUnitDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCampaignOrgUnitDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The estimatedNoOfResults
     * @var int|null
     */
    protected ?int $estimatedNoOfResults = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The noOfResults
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The status
     * @var bool|null
     */
    protected ?bool $status = null;
    /**
     * The statusChangedBy
     * @var int|null
     */
    protected ?int $statusChangedBy = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for MisCampaignOrgUnitDTO
     * @uses MisCampaignOrgUnitDTO::setCampaignId()
     * @uses MisCampaignOrgUnitDTO::setEstimatedNoOfResults()
     * @uses MisCampaignOrgUnitDTO::setId()
     * @uses MisCampaignOrgUnitDTO::setNoOfResults()
     * @uses MisCampaignOrgUnitDTO::setStatus()
     * @uses MisCampaignOrgUnitDTO::setStatusChangedBy()
     * @uses MisCampaignOrgUnitDTO::setTimestamp()
     * @uses MisCampaignOrgUnitDTO::setUnitName()
     * @uses MisCampaignOrgUnitDTO::setUserId()
     * @param int $campaignId
     * @param int $estimatedNoOfResults
     * @param int $id
     * @param int $noOfResults
     * @param bool $status
     * @param int $statusChangedBy
     * @param string $timestamp
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?int $campaignId = null, ?int $estimatedNoOfResults = null, ?int $id = null, ?int $noOfResults = null, ?bool $status = null, ?int $statusChangedBy = null, ?string $timestamp = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setEstimatedNoOfResults($estimatedNoOfResults)
            ->setId($id)
            ->setNoOfResults($noOfResults)
            ->setStatus($status)
            ->setStatusChangedBy($statusChangedBy)
            ->setTimestamp($timestamp)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
        return $this;
    }
    /**
     * Get estimatedNoOfResults value
     * @return int|null
     */
    public function getEstimatedNoOfResults(): ?int
    {
        return $this->estimatedNoOfResults;
    }
    /**
     * Set estimatedNoOfResults value
     * @param int $estimatedNoOfResults
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
     */
    public function setEstimatedNoOfResults(?int $estimatedNoOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($estimatedNoOfResults) && !(is_int($estimatedNoOfResults) || ctype_digit($estimatedNoOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($estimatedNoOfResults, true), gettype($estimatedNoOfResults)), __LINE__);
        }
        $this->estimatedNoOfResults = $estimatedNoOfResults;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
    /**
     * Get status value
     * @return bool|null
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param bool $status
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
     */
    public function setStatus(?bool $status = null): self
    {
        // validation for constraint: boolean
        if (!is_null($status) && !is_bool($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get statusChangedBy value
     * @return int|null
     */
    public function getStatusChangedBy(): ?int
    {
        return $this->statusChangedBy;
    }
    /**
     * Set statusChangedBy value
     * @param int $statusChangedBy
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
     */
    public function setStatusChangedBy(?int $statusChangedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($statusChangedBy) && !(is_int($statusChangedBy) || ctype_digit($statusChangedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusChangedBy, true), gettype($statusChangedBy)), __LINE__);
        }
        $this->statusChangedBy = $statusChangedBy;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
