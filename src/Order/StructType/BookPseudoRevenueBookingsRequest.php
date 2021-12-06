<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookPseudoRevenueBookingsRequest StructType
 * @subpackage Structs
 */
class BookPseudoRevenueBookingsRequest extends AbstractStructBase
{
    /**
     * The PseudoRevenueBookingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PseudoRevenueBookingInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\PseudoRevenueBookingInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\PseudoRevenueBookingInfo $PseudoRevenueBookingInfo = null;
    /**
     * Constructor method for BookPseudoRevenueBookingsRequest
     * @uses BookPseudoRevenueBookingsRequest::setPseudoRevenueBookingInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PseudoRevenueBookingInfo $pseudoRevenueBookingInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\PseudoRevenueBookingInfo $pseudoRevenueBookingInfo = null)
    {
        $this
            ->setPseudoRevenueBookingInfo($pseudoRevenueBookingInfo);
    }
    /**
     * Get PseudoRevenueBookingInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\PseudoRevenueBookingInfo|null
     */
    public function getPseudoRevenueBookingInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\PseudoRevenueBookingInfo
    {
        return $this->PseudoRevenueBookingInfo;
    }
    /**
     * Set PseudoRevenueBookingInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\PseudoRevenueBookingInfo $pseudoRevenueBookingInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookPseudoRevenueBookingsRequest
     */
    public function setPseudoRevenueBookingInfo(?\Pggns\MidocoApi\Api\Order\StructType\PseudoRevenueBookingInfo $pseudoRevenueBookingInfo = null): self
    {
        $this->PseudoRevenueBookingInfo = $pseudoRevenueBookingInfo;
        
        return $this;
    }
}
