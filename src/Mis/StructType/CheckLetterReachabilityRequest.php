<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckLetterReachabilityRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckLetterReachabilityRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $MidocoCrmCampaign = null;
    /**
     * Constructor method for CheckLetterReachabilityRequest
     * @uses CheckLetterReachabilityRequest::setMidocoCrmCampaign()
     * @param \Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null)
    {
        $this
            ->setMidocoCrmCampaign($midocoCrmCampaign);
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
     * @return \Pggns\MidocoApi\Mis\StructType\CheckLetterReachabilityRequest
     */
    public function setMidocoCrmCampaign(?\Pggns\MidocoApi\Mis\StructType\CrmCampaignDTO $midocoCrmCampaign = null): self
    {
        $this->MidocoCrmCampaign = $midocoCrmCampaign;
        
        return $this;
    }
}
