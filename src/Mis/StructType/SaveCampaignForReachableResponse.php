<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCampaignForReachableResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveCampaignForReachable --- saves the campaign, but includes only the customers that does not have the mailing_prohibited field set to TRUE
 * @subpackage Structs
 */
class SaveCampaignForReachableResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaign
     * Meta information extracted from the WSDL
     * - ref: MidocoMisCampaign
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $MidocoMisCampaign = null;
    /**
     * Constructor method for SaveCampaignForReachableResponse
     * @uses SaveCampaignForReachableResponse::setMidocoMisCampaign()
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
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SaveCampaignForReachableResponse
     */
    public function setMidocoMisCampaign(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMisCampaign $midocoMisCampaign = null): self
    {
        $this->MidocoMisCampaign = $midocoMisCampaign;
        
        return $this;
    }
}
