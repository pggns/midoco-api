<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignAssignDTO StructType
 * @subpackage Structs
 */
class MisCampaignAssignDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The done
     * @var bool|null
     */
    protected ?bool $done = null;
    /**
     * The executed
     * @var bool|null
     */
    protected ?bool $executed = null;
    /**
     * The feedback
     * @var bool|null
     */
    protected ?bool $feedback = null;
    /**
     * The importedCampaignId
     * @var int|null
     */
    protected ?int $importedCampaignId = null;
    /**
     * The isImported
     * @var bool|null
     */
    protected ?bool $isImported = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for MisCampaignAssignDTO
     * @uses MisCampaignAssignDTO::setCampaignId()
     * @uses MisCampaignAssignDTO::setCustomerId()
     * @uses MisCampaignAssignDTO::setDone()
     * @uses MisCampaignAssignDTO::setExecuted()
     * @uses MisCampaignAssignDTO::setFeedback()
     * @uses MisCampaignAssignDTO::setImportedCampaignId()
     * @uses MisCampaignAssignDTO::setIsImported()
     * @uses MisCampaignAssignDTO::setOrgUnit()
     * @param int $campaignId
     * @param int $customerId
     * @param bool $done
     * @param bool $executed
     * @param bool $feedback
     * @param int $importedCampaignId
     * @param bool $isImported
     * @param string $orgUnit
     */
    public function __construct(?int $campaignId = null, ?int $customerId = null, ?bool $done = null, ?bool $executed = null, ?bool $feedback = null, ?int $importedCampaignId = null, ?bool $isImported = null, ?string $orgUnit = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCustomerId($customerId)
            ->setDone($done)
            ->setExecuted($executed)
            ->setFeedback($feedback)
            ->setImportedCampaignId($importedCampaignId)
            ->setIsImported($isImported)
            ->setOrgUnit($orgUnit);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignAssignDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignAssignDTO
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
     * Get done value
     * @return bool|null
     */
    public function getDone(): ?bool
    {
        return $this->done;
    }
    /**
     * Set done value
     * @param bool $done
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignAssignDTO
     */
    public function setDone(?bool $done = null): self
    {
        // validation for constraint: boolean
        if (!is_null($done) && !is_bool($done)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($done, true), gettype($done)), __LINE__);
        }
        $this->done = $done;
        
        return $this;
    }
    /**
     * Get executed value
     * @return bool|null
     */
    public function getExecuted(): ?bool
    {
        return $this->executed;
    }
    /**
     * Set executed value
     * @param bool $executed
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignAssignDTO
     */
    public function setExecuted(?bool $executed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($executed) && !is_bool($executed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($executed, true), gettype($executed)), __LINE__);
        }
        $this->executed = $executed;
        
        return $this;
    }
    /**
     * Get feedback value
     * @return bool|null
     */
    public function getFeedback(): ?bool
    {
        return $this->feedback;
    }
    /**
     * Set feedback value
     * @param bool $feedback
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignAssignDTO
     */
    public function setFeedback(?bool $feedback = null): self
    {
        // validation for constraint: boolean
        if (!is_null($feedback) && !is_bool($feedback)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feedback, true), gettype($feedback)), __LINE__);
        }
        $this->feedback = $feedback;
        
        return $this;
    }
    /**
     * Get importedCampaignId value
     * @return int|null
     */
    public function getImportedCampaignId(): ?int
    {
        return $this->importedCampaignId;
    }
    /**
     * Set importedCampaignId value
     * @param int $importedCampaignId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignAssignDTO
     */
    public function setImportedCampaignId(?int $importedCampaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($importedCampaignId) && !(is_int($importedCampaignId) || ctype_digit($importedCampaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importedCampaignId, true), gettype($importedCampaignId)), __LINE__);
        }
        $this->importedCampaignId = $importedCampaignId;
        
        return $this;
    }
    /**
     * Get isImported value
     * @return bool|null
     */
    public function getIsImported(): ?bool
    {
        return $this->isImported;
    }
    /**
     * Set isImported value
     * @param bool $isImported
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignAssignDTO
     */
    public function setIsImported(?bool $isImported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImported) && !is_bool($isImported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImported, true), gettype($isImported)), __LINE__);
        }
        $this->isImported = $isImported;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignAssignDTO
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
