<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecalculateTravelnoRevenueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RecalculateTravelnoRevenueRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumber
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumber|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumber $MidocoTravelNumber = null;
    /**
     * Constructor method for RecalculateTravelnoRevenueRequest
     * @uses RecalculateTravelnoRevenueRequest::setMidocoTravelNumber()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumber $midocoTravelNumber
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumber $midocoTravelNumber = null)
    {
        $this
            ->setMidocoTravelNumber($midocoTravelNumber);
    }
    /**
     * Get MidocoTravelNumber value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumber|null
     */
    public function getMidocoTravelNumber(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumber
    {
        return $this->MidocoTravelNumber;
    }
    /**
     * Set MidocoTravelNumber value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumber $midocoTravelNumber
     * @return \Pggns\MidocoApi\OrderSD\StructType\RecalculateTravelnoRevenueRequest
     */
    public function setMidocoTravelNumber(?\Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumber $midocoTravelNumber = null): self
    {
        $this->MidocoTravelNumber = $midocoTravelNumber;
        
        return $this;
    }
}
