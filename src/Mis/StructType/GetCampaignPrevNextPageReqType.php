<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignPrevNextPageReqType StructType
 * @subpackage Structs
 */
class GetCampaignPrevNextPageReqType extends AbstractStructBase
{
    /**
     * The MidocoCrmCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $MidocoCrmCampaign = null;
    /**
     * The pageNo
     * @var int|null
     */
    protected ?int $pageNo = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for GetCampaignPrevNextPageReqType
     * @uses GetCampaignPrevNextPageReqType::setMidocoCrmCampaign()
     * @uses GetCampaignPrevNextPageReqType::setPageNo()
     * @uses GetCampaignPrevNextPageReqType::setOrgUnit()
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @param int $pageNo
     * @param string $orgUnit
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null, ?int $pageNo = null, ?string $orgUnit = null)
    {
        $this
            ->setMidocoCrmCampaign($midocoCrmCampaign)
            ->setPageNo($pageNo)
            ->setOrgUnit($orgUnit);
    }
    /**
     * Get MidocoCrmCampaign value
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO|null
     */
    public function getMidocoCrmCampaign(): ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO
    {
        return $this->MidocoCrmCampaign;
    }
    /**
     * Set MidocoCrmCampaign value
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignPrevNextPageReqType
     */
    public function setMidocoCrmCampaign(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null): self
    {
        $this->MidocoCrmCampaign = $midocoCrmCampaign;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignPrevNextPageReqType
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignPrevNextPageReqType
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
