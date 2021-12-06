<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFirstCustomerForCampaignWSResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getFirstCustomerForCampaignWS --- returns the first result customer from a campaign (for display template)
 * @subpackage Structs
 */
class GetFirstCustomerForCampaignWSResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignResultWS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisCampaignResultWS
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType $MidocoMisCampaignResultWS = null;
    /**
     * The MidocoMisCustomerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisCustomerResult
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $MidocoMisCustomerResult = null;
    /**
     * Constructor method for GetFirstCustomerForCampaignWSResponse
     * @uses GetFirstCustomerForCampaignWSResponse::setMidocoMisCampaignResultWS()
     * @uses GetFirstCustomerForCampaignWSResponse::setMidocoMisCustomerResult()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType $midocoMisCampaignResultWS
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $midocoMisCustomerResult
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType $midocoMisCampaignResultWS = null, ?\Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $midocoMisCustomerResult = null)
    {
        $this
            ->setMidocoMisCampaignResultWS($midocoMisCampaignResultWS)
            ->setMidocoMisCustomerResult($midocoMisCustomerResult);
    }
    /**
     * Get MidocoMisCampaignResultWS value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType|null
     */
    public function getMidocoMisCampaignResultWS(): ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType
    {
        return $this->MidocoMisCampaignResultWS;
    }
    /**
     * Set MidocoMisCampaignResultWS value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType $midocoMisCampaignResultWS
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetFirstCustomerForCampaignWSResponse
     */
    public function setMidocoMisCampaignResultWS(?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultWSType $midocoMisCampaignResultWS = null): self
    {
        $this->MidocoMisCampaignResultWS = $midocoMisCampaignResultWS;
        
        return $this;
    }
    /**
     * Get MidocoMisCustomerResult value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO|null
     */
    public function getMidocoMisCustomerResult(): ?\Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO
    {
        return $this->MidocoMisCustomerResult;
    }
    /**
     * Set MidocoMisCustomerResult value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $midocoMisCustomerResult
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetFirstCustomerForCampaignWSResponse
     */
    public function setMidocoMisCustomerResult(?\Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $midocoMisCustomerResult = null): self
    {
        $this->MidocoMisCustomerResult = $midocoMisCustomerResult;
        
        return $this;
    }
}
