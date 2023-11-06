<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CampaignResultsInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CampaignResultsInfo extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerOrgunit
     * @var string|null
     */
    protected ?string $customerOrgunit = null;
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The campaignOrgunit
     * @var string|null
     */
    protected ?string $campaignOrgunit = null;
    /**
     * Constructor method for CampaignResultsInfo
     * @uses CampaignResultsInfo::setCustomerId()
     * @uses CampaignResultsInfo::setCustomerOrgunit()
     * @uses CampaignResultsInfo::setCampaignId()
     * @uses CampaignResultsInfo::setCampaignOrgunit()
     * @param int $customerId
     * @param string $customerOrgunit
     * @param int $campaignId
     * @param string $campaignOrgunit
     */
    public function __construct(?int $customerId = null, ?string $customerOrgunit = null, ?int $campaignId = null, ?string $campaignOrgunit = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setCustomerOrgunit($customerOrgunit)
            ->setCampaignId($campaignId)
            ->setCampaignOrgunit($campaignOrgunit);
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
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo
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
     * Get customerOrgunit value
     * @return string|null
     */
    public function getCustomerOrgunit(): ?string
    {
        return $this->customerOrgunit;
    }
    /**
     * Set customerOrgunit value
     * @param string $customerOrgunit
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo
     */
    public function setCustomerOrgunit(?string $customerOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($customerOrgunit) && !is_string($customerOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerOrgunit, true), gettype($customerOrgunit)), __LINE__);
        }
        $this->customerOrgunit = $customerOrgunit;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo
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
     * Get campaignOrgunit value
     * @return string|null
     */
    public function getCampaignOrgunit(): ?string
    {
        return $this->campaignOrgunit;
    }
    /**
     * Set campaignOrgunit value
     * @param string $campaignOrgunit
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignResultsInfo
     */
    public function setCampaignOrgunit(?string $campaignOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignOrgunit) && !is_string($campaignOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignOrgunit, true), gettype($campaignOrgunit)), __LINE__);
        }
        $this->campaignOrgunit = $campaignOrgunit;
        
        return $this;
    }
}
