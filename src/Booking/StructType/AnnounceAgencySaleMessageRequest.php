<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceAgencySaleMessageRequest StructType
 * @subpackage Structs
 */
class AnnounceAgencySaleMessageRequest extends AbstractStructBase
{
    /**
     * The midoco_booking_message
     * Meta information extracted from the WSDL
     * - ref: mbm:midoco-booking-message
     * @var \Pggns\MidocoApi\Booking\StructType\Midoco_booking_message|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\Midoco_booking_message $midoco_booking_message = null;
    /**
     * Constructor method for AnnounceAgencySaleMessageRequest
     * @uses AnnounceAgencySaleMessageRequest::setMidoco_booking_message()
     * @param \Pggns\MidocoApi\Booking\StructType\Midoco_booking_message $midoco_booking_message
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\Midoco_booking_message $midoco_booking_message = null)
    {
        $this
            ->setMidoco_booking_message($midoco_booking_message);
    }
    /**
     * Get midoco_booking_message value
     * @return \Pggns\MidocoApi\Booking\StructType\Midoco_booking_message|null
     */
    public function getMidoco_booking_message(): ?\Pggns\MidocoApi\Booking\StructType\Midoco_booking_message
    {
        return $this->{'midoco-booking-message'};
    }
    /**
     * Set midoco_booking_message value
     * @param \Pggns\MidocoApi\Booking\StructType\Midoco_booking_message $midoco_booking_message
     * @return \Pggns\MidocoApi\Booking\StructType\AnnounceAgencySaleMessageRequest
     */
    public function setMidoco_booking_message(?\Pggns\MidocoApi\Booking\StructType\Midoco_booking_message $midoco_booking_message = null): self
    {
        $this->midoco_booking_message = $this->{'midoco-booking-message'} = $midoco_booking_message;
        
        return $this;
    }
}
