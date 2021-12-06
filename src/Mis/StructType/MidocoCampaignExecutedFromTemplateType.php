<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCampaignExecutedFromTemplateType StructType
 * @subpackage Structs
 */
class MidocoCampaignExecutedFromTemplateType extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The campaignOrgUnit
     * @var string|null
     */
    protected ?string $campaignOrgUnit = null;
    /**
     * The campaignNoOfResutls
     * @var int|null
     */
    protected ?int $campaignNoOfResutls = null;
    /**
     * Constructor method for MidocoCampaignExecutedFromTemplateType
     * @uses MidocoCampaignExecutedFromTemplateType::setCampaignId()
     * @uses MidocoCampaignExecutedFromTemplateType::setCampaignOrgUnit()
     * @uses MidocoCampaignExecutedFromTemplateType::setCampaignNoOfResutls()
     * @param int $campaignId
     * @param string $campaignOrgUnit
     * @param int $campaignNoOfResutls
     */
    public function __construct(?int $campaignId = null, ?string $campaignOrgUnit = null, ?int $campaignNoOfResutls = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCampaignOrgUnit($campaignOrgUnit)
            ->setCampaignNoOfResutls($campaignNoOfResutls);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType
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
     * Get campaignOrgUnit value
     * @return string|null
     */
    public function getCampaignOrgUnit(): ?string
    {
        return $this->campaignOrgUnit;
    }
    /**
     * Set campaignOrgUnit value
     * @param string $campaignOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType
     */
    public function setCampaignOrgUnit(?string $campaignOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignOrgUnit) && !is_string($campaignOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignOrgUnit, true), gettype($campaignOrgUnit)), __LINE__);
        }
        $this->campaignOrgUnit = $campaignOrgUnit;
        
        return $this;
    }
    /**
     * Get campaignNoOfResutls value
     * @return int|null
     */
    public function getCampaignNoOfResutls(): ?int
    {
        return $this->campaignNoOfResutls;
    }
    /**
     * Set campaignNoOfResutls value
     * @param int $campaignNoOfResutls
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCampaignExecutedFromTemplateType
     */
    public function setCampaignNoOfResutls(?int $campaignNoOfResutls = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignNoOfResutls) && !(is_int($campaignNoOfResutls) || ctype_digit($campaignNoOfResutls))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignNoOfResutls, true), gettype($campaignNoOfResutls)), __LINE__);
        }
        $this->campaignNoOfResutls = $campaignNoOfResutls;
        
        return $this;
    }
}
