<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSkippedBookingRequest StructType
 * @subpackage Structs
 */
class AddSkippedBookingRequest extends AbstractStructBase
{
    /**
     * The MidocoSkippedBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoSkippedBooking
     * @var \Pggns\MidocoApi\Api\Order\StructType\SkippedBookingDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\SkippedBookingDTO $MidocoSkippedBooking = null;
    /**
     * Constructor method for AddSkippedBookingRequest
     * @uses AddSkippedBookingRequest::setMidocoSkippedBooking()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SkippedBookingDTO $midocoSkippedBooking
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\SkippedBookingDTO $midocoSkippedBooking = null)
    {
        $this
            ->setMidocoSkippedBooking($midocoSkippedBooking);
    }
    /**
     * Get MidocoSkippedBooking value
     * @return \Pggns\MidocoApi\Api\Order\StructType\SkippedBookingDTO|null
     */
    public function getMidocoSkippedBooking(): ?\Pggns\MidocoApi\Api\Order\StructType\SkippedBookingDTO
    {
        return $this->MidocoSkippedBooking;
    }
    /**
     * Set MidocoSkippedBooking value
     * @param \Pggns\MidocoApi\Api\Order\StructType\SkippedBookingDTO $midocoSkippedBooking
     * @return \Pggns\MidocoApi\Api\Order\StructType\AddSkippedBookingRequest
     */
    public function setMidocoSkippedBooking(?\Pggns\MidocoApi\Api\Order\StructType\SkippedBookingDTO $midocoSkippedBooking = null): self
    {
        $this->MidocoSkippedBooking = $midocoSkippedBooking;
        
        return $this;
    }
}
