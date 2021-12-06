<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFirstCustomerForCampaignResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getFirstCustomerForCampaign --- returns the first result customer from a campaign (for display template)
 * @subpackage Structs
 */
class GetFirstCustomerForCampaignResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisCampaignResult
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO $MidocoMisCampaignResult = null;
    /**
     * The MidocoMisCustomerResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMisCustomerResult
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $MidocoMisCustomerResult = null;
    /**
     * Constructor method for GetFirstCustomerForCampaignResponse
     * @uses GetFirstCustomerForCampaignResponse::setMidocoMisCampaignResult()
     * @uses GetFirstCustomerForCampaignResponse::setMidocoMisCustomerResult()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO $midocoMisCampaignResult
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $midocoMisCustomerResult
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO $midocoMisCampaignResult = null, ?\Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $midocoMisCustomerResult = null)
    {
        $this
            ->setMidocoMisCampaignResult($midocoMisCampaignResult)
            ->setMidocoMisCustomerResult($midocoMisCustomerResult);
    }
    /**
     * Get MidocoMisCampaignResult value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO|null
     */
    public function getMidocoMisCampaignResult(): ?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO
    {
        return $this->MidocoMisCampaignResult;
    }
    /**
     * Set MidocoMisCampaignResult value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO $midocoMisCampaignResult
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetFirstCustomerForCampaignResponse
     */
    public function setMidocoMisCampaignResult(?\Pggns\MidocoApi\Api\Mis\StructType\MisCampaignResultDTO $midocoMisCampaignResult = null): self
    {
        $this->MidocoMisCampaignResult = $midocoMisCampaignResult;
        
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
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetFirstCustomerForCampaignResponse
     */
    public function setMidocoMisCustomerResult(?\Pggns\MidocoApi\Api\Mis\StructType\MisCustomerResultDTO $midocoMisCustomerResult = null): self
    {
        $this->MidocoMisCustomerResult = $midocoMisCustomerResult;
        
        return $this;
    }
}
