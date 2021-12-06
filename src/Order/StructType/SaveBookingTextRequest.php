<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBookingTextRequest StructType
 * @subpackage Structs
 */
class SaveBookingTextRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingText
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingText
     * @var \Pggns\MidocoApi\Api\Order\StructType\BookingTextDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\BookingTextDTO $MidocoBookingText = null;
    /**
     * Constructor method for SaveBookingTextRequest
     * @uses SaveBookingTextRequest::setMidocoBookingText()
     * @param \Pggns\MidocoApi\Api\Order\StructType\BookingTextDTO $midocoBookingText
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\BookingTextDTO $midocoBookingText = null)
    {
        $this
            ->setMidocoBookingText($midocoBookingText);
    }
    /**
     * Get MidocoBookingText value
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingTextDTO|null
     */
    public function getMidocoBookingText(): ?\Pggns\MidocoApi\Api\Order\StructType\BookingTextDTO
    {
        return $this->MidocoBookingText;
    }
    /**
     * Set MidocoBookingText value
     * @param \Pggns\MidocoApi\Api\Order\StructType\BookingTextDTO $midocoBookingText
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBookingTextRequest
     */
    public function setMidocoBookingText(?\Pggns\MidocoApi\Api\Order\StructType\BookingTextDTO $midocoBookingText = null): self
    {
        $this->MidocoBookingText = $midocoBookingText;
        
        return $this;
    }
}