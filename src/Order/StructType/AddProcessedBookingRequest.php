<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddProcessedBookingRequest StructType
 * @subpackage Structs
 */
class AddProcessedBookingRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessedBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessedBooking
     * @var \Pggns\MidocoApi\Api\Order\StructType\ProcessedBookingDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\ProcessedBookingDTO $MidocoProcessedBooking = null;
    /**
     * Constructor method for AddProcessedBookingRequest
     * @uses AddProcessedBookingRequest::setMidocoProcessedBooking()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ProcessedBookingDTO $midocoProcessedBooking
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\ProcessedBookingDTO $midocoProcessedBooking = null)
    {
        $this
            ->setMidocoProcessedBooking($midocoProcessedBooking);
    }
    /**
     * Get MidocoProcessedBooking value
     * @return \Pggns\MidocoApi\Api\Order\StructType\ProcessedBookingDTO|null
     */
    public function getMidocoProcessedBooking(): ?\Pggns\MidocoApi\Api\Order\StructType\ProcessedBookingDTO
    {
        return $this->MidocoProcessedBooking;
    }
    /**
     * Set MidocoProcessedBooking value
     * @param \Pggns\MidocoApi\Api\Order\StructType\ProcessedBookingDTO $midocoProcessedBooking
     * @return \Pggns\MidocoApi\Api\Order\StructType\AddProcessedBookingRequest
     */
    public function setMidocoProcessedBooking(?\Pggns\MidocoApi\Api\Order\StructType\ProcessedBookingDTO $midocoProcessedBooking = null): self
    {
        $this->MidocoProcessedBooking = $midocoProcessedBooking;
        
        return $this;
    }
}
