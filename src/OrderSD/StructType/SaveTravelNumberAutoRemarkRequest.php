<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelNumberAutoRemarkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTravelNumberAutoRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberAutoRemark
     * @var \Pggns\MidocoApi\OrderSD\StructType\TravelNumberAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberAutoRemarkDTO $MidocoTravelNumberAutoRemark = null;
    /**
     * Constructor method for SaveTravelNumberAutoRemarkRequest
     * @uses SaveTravelNumberAutoRemarkRequest::setMidocoTravelNumberAutoRemark()
     * @param \Pggns\MidocoApi\OrderSD\StructType\TravelNumberAutoRemarkDTO $midocoTravelNumberAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberAutoRemarkDTO $midocoTravelNumberAutoRemark = null)
    {
        $this
            ->setMidocoTravelNumberAutoRemark($midocoTravelNumberAutoRemark);
    }
    /**
     * Get MidocoTravelNumberAutoRemark value
     * @return \Pggns\MidocoApi\OrderSD\StructType\TravelNumberAutoRemarkDTO|null
     */
    public function getMidocoTravelNumberAutoRemark(): ?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberAutoRemarkDTO
    {
        return $this->MidocoTravelNumberAutoRemark;
    }
    /**
     * Set MidocoTravelNumberAutoRemark value
     * @param \Pggns\MidocoApi\OrderSD\StructType\TravelNumberAutoRemarkDTO $midocoTravelNumberAutoRemark
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveTravelNumberAutoRemarkRequest
     */
    public function setMidocoTravelNumberAutoRemark(?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberAutoRemarkDTO $midocoTravelNumberAutoRemark = null): self
    {
        $this->MidocoTravelNumberAutoRemark = $midocoTravelNumberAutoRemark;
        
        return $this;
    }
}
