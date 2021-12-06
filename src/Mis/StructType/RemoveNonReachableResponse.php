<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveNonReachableResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: removeNonReachable --- remove the non-reachable customers for a given campaign
 * @subpackage Structs
 */
class RemoveNonReachableResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaign
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisCampaign
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $MidocoMisCampaign = null;
    /**
     * Constructor method for RemoveNonReachableResponse
     * @uses RemoveNonReachableResponse::setMidocoMisCampaign()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null)
    {
        $this
            ->setMidocoMisCampaign($midocoMisCampaign);
    }
    /**
     * Get MidocoMisCampaign value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign|null
     */
    public function getMidocoMisCampaign(): ?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign
    {
        return $this->MidocoMisCampaign;
    }
    /**
     * Set MidocoMisCampaign value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign
     * @return \Pggns\MidocoApi\Mis\StructType\RemoveNonReachableResponse
     */
    public function setMidocoMisCampaign(?\Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null): self
    {
        $this->MidocoMisCampaign = $midocoMisCampaign;
        
        return $this;
    }
}
