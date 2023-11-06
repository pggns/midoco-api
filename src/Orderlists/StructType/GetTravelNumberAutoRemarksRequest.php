<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberAutoRemarksRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelNumberAutoRemarksRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberAutoRemark
     * @var \Pggns\MidocoApi\Orderlists\StructType\TravelNumberAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\TravelNumberAutoRemarkDTO $MidocoTravelNumberAutoRemark = null;
    /**
     * Constructor method for GetTravelNumberAutoRemarksRequest
     * @uses GetTravelNumberAutoRemarksRequest::setMidocoTravelNumberAutoRemark()
     * @param \Pggns\MidocoApi\Orderlists\StructType\TravelNumberAutoRemarkDTO $midocoTravelNumberAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\TravelNumberAutoRemarkDTO $midocoTravelNumberAutoRemark = null)
    {
        $this
            ->setMidocoTravelNumberAutoRemark($midocoTravelNumberAutoRemark);
    }
    /**
     * Get MidocoTravelNumberAutoRemark value
     * @return \Pggns\MidocoApi\Orderlists\StructType\TravelNumberAutoRemarkDTO|null
     */
    public function getMidocoTravelNumberAutoRemark(): ?\Pggns\MidocoApi\Orderlists\StructType\TravelNumberAutoRemarkDTO
    {
        return $this->MidocoTravelNumberAutoRemark;
    }
    /**
     * Set MidocoTravelNumberAutoRemark value
     * @param \Pggns\MidocoApi\Orderlists\StructType\TravelNumberAutoRemarkDTO $midocoTravelNumberAutoRemark
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetTravelNumberAutoRemarksRequest
     */
    public function setMidocoTravelNumberAutoRemark(?\Pggns\MidocoApi\Orderlists\StructType\TravelNumberAutoRemarkDTO $midocoTravelNumberAutoRemark = null): self
    {
        $this->MidocoTravelNumberAutoRemark = $midocoTravelNumberAutoRemark;
        
        return $this;
    }
}
