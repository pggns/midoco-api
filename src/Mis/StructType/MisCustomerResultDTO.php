<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCustomerResultDTO StructType
 * @subpackage Structs
 */
class MisCustomerResultDTO extends AbstractStructBase
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
     * The executed
     * @var bool|null
     */
    protected ?bool $executed = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The pageNo
     * @var int|null
     */
    protected ?int $pageNo = null;
    /**
     * Constructor method for MisCustomerResultDTO
     * @uses MisCustomerResultDTO::setCampaignId()
     * @uses MisCustomerResultDTO::setCustomerId()
     * @uses MisCustomerResultDTO::setExecuted()
     * @uses MisCustomerResultDTO::setOrgUnit()
     * @uses MisCustomerResultDTO::setPageNo()
     * @param int $campaignId
     * @param int $customerId
     * @param bool $executed
     * @param string $orgUnit
     * @param int $pageNo
     */
    public function __construct(?int $campaignId = null, ?int $customerId = null, ?bool $executed = null, ?string $orgUnit = null, ?int $pageNo = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCustomerId($customerId)
            ->setExecuted($executed)
            ->setOrgUnit($orgUnit)
            ->setPageNo($pageNo);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO
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
     * Get pageNo value
     * @return int|null
     */
    public function getPageNo(): ?int
    {
        return $this->pageNo;
    }
    /**
     * Set pageNo value
     * @param int $pageNo
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO
     */
    public function setPageNo(?int $pageNo = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNo) && !(is_int($pageNo) || ctype_digit($pageNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
        return $this;
    }
}
