<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNonReachableResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: removeNonReachable --- remove the non-reachable customers for a given campaign
 * @subpackage Structs
 */
class GetNonReachableResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaign
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisCampaign
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $MidocoMisCampaign = null;
    /**
     * Constructor method for GetNonReachableResponse
     * @uses GetNonReachableResponse::setMidocoMisCampaign()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null)
    {
        $this
            ->setMidocoMisCampaign($midocoMisCampaign);
    }
    /**
     * Get MidocoMisCampaign value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign|null
     */
    public function getMidocoMisCampaign(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign
    {
        return $this->MidocoMisCampaign;
    }
    /**
     * Set MidocoMisCampaign value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetNonReachableResponse
     */
    public function setMidocoMisCampaign(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null): self
    {
        $this->MidocoMisCampaign = $midocoMisCampaign;
        
        return $this;
    }
}
