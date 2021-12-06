<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceGdsMessageRequest StructType
 * @subpackage Structs
 */
class AnnounceGdsMessageRequest extends AbstractStructBase
{
    /**
     * The MidocoGDSBooking
     * Meta information extracted from the WSDL
     * - ref: gds_message:MidocoGDSBooking
     * @var \Pggns\MidocoApi\Api\Booking\StructType\MidocoGDSBooking|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\MidocoGDSBooking $MidocoGDSBooking = null;
    /**
     * Constructor method for AnnounceGdsMessageRequest
     * @uses AnnounceGdsMessageRequest::setMidocoGDSBooking()
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoGDSBooking $midocoGDSBooking
     */
    public function __construct(?\Pggns\MidocoApi\Api\Booking\StructType\MidocoGDSBooking $midocoGDSBooking = null)
    {
        $this
            ->setMidocoGDSBooking($midocoGDSBooking);
    }
    /**
     * Get MidocoGDSBooking value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\MidocoGDSBooking|null
     */
    public function getMidocoGDSBooking(): ?\Pggns\MidocoApi\Api\Booking\StructType\MidocoGDSBooking
    {
        return $this->MidocoGDSBooking;
    }
    /**
     * Set MidocoGDSBooking value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoGDSBooking $midocoGDSBooking
     * @return \Pggns\MidocoApi\Api\Booking\StructType\AnnounceGdsMessageRequest
     */
    public function setMidocoGDSBooking(?\Pggns\MidocoApi\Api\Booking\StructType\MidocoGDSBooking $midocoGDSBooking = null): self
    {
        $this->MidocoGDSBooking = $midocoGDSBooking;
        
        return $this;
    }
}
