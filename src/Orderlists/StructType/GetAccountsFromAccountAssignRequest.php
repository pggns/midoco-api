<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountsFromAccountAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccountsFromAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelInfo
     * @var \Pggns\MidocoApi\Orderlists\StructType\TravelInfoDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\TravelInfoDTO $MidocoTravelInfo = null;
    /**
     * Constructor method for GetAccountsFromAccountAssignRequest
     * @uses GetAccountsFromAccountAssignRequest::setMidocoTravelInfo()
     * @param \Pggns\MidocoApi\Orderlists\StructType\TravelInfoDTO $midocoTravelInfo
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\TravelInfoDTO $midocoTravelInfo = null)
    {
        $this
            ->setMidocoTravelInfo($midocoTravelInfo);
    }
    /**
     * Get MidocoTravelInfo value
     * @return \Pggns\MidocoApi\Orderlists\StructType\TravelInfoDTO|null
     */
    public function getMidocoTravelInfo(): ?\Pggns\MidocoApi\Orderlists\StructType\TravelInfoDTO
    {
        return $this->MidocoTravelInfo;
    }
    /**
     * Set MidocoTravelInfo value
     * @param \Pggns\MidocoApi\Orderlists\StructType\TravelInfoDTO $midocoTravelInfo
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAccountsFromAccountAssignRequest
     */
    public function setMidocoTravelInfo(?\Pggns\MidocoApi\Orderlists\StructType\TravelInfoDTO $midocoTravelInfo = null): self
    {
        $this->MidocoTravelInfo = $midocoTravelInfo;
        
        return $this;
    }
}
