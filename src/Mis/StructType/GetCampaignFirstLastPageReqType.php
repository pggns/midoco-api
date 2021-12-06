<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignFirstLastPageReqType StructType
 * @subpackage Structs
 */
class GetCampaignFirstLastPageReqType extends AbstractStructBase
{
    /**
     * The MidocoCrmCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCampaign
     * @var \Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $MidocoCrmCampaign = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for GetCampaignFirstLastPageReqType
     * @uses GetCampaignFirstLastPageReqType::setMidocoCrmCampaign()
     * @uses GetCampaignFirstLastPageReqType::setOrgUnit()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @param string $orgUnit
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null, ?string $orgUnit = null)
    {
        $this
            ->setMidocoCrmCampaign($midocoCrmCampaign)
            ->setOrgUnit($orgUnit);
    }
    /**
     * Get MidocoCrmCampaign value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO|null
     */
    public function getMidocoCrmCampaign(): ?\Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO
    {
        return $this->MidocoCrmCampaign;
    }
    /**
     * Set MidocoCrmCampaign value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFirstLastPageReqType
     */
    public function setMidocoCrmCampaign(?\Pggns\MidocoApi\Api\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null): self
    {
        $this->MidocoCrmCampaign = $midocoCrmCampaign;
        
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
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFirstLastPageReqType
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
