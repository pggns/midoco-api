<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMisCampaignRequest StructType
 * @subpackage Structs
 */
class UpdateMisCampaignRequest extends AbstractStructBase
{
    /**
     * The MidocoMisCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaign
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $MidocoMisCampaign = null;
    /**
     * Constructor method for UpdateMisCampaignRequest
     * @uses UpdateMisCampaignRequest::setMidocoMisCampaign()
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
     * @return \Pggns\MidocoApi\Api\Mis\StructType\UpdateMisCampaignRequest
     */
    public function setMidocoMisCampaign(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null): self
    {
        $this->MidocoMisCampaign = $midocoMisCampaign;
        
        return $this;
    }
}
