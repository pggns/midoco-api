<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingTextsRequest StructType
 * @subpackage Structs
 */
class GetBookingTextsRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingText
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingText
     * @var \Pggns\MidocoApi\OrderSD\StructType\BookingTextDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\BookingTextDTO $MidocoBookingText = null;
    /**
     * Constructor method for GetBookingTextsRequest
     * @uses GetBookingTextsRequest::setMidocoBookingText()
     * @param \Pggns\MidocoApi\OrderSD\StructType\BookingTextDTO $midocoBookingText
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\BookingTextDTO $midocoBookingText = null)
    {
        $this
            ->setMidocoBookingText($midocoBookingText);
    }
    /**
     * Get MidocoBookingText value
     * @return \Pggns\MidocoApi\OrderSD\StructType\BookingTextDTO|null
     */
    public function getMidocoBookingText(): ?\Pggns\MidocoApi\OrderSD\StructType\BookingTextDTO
    {
        return $this->MidocoBookingText;
    }
    /**
     * Set MidocoBookingText value
     * @param \Pggns\MidocoApi\OrderSD\StructType\BookingTextDTO $midocoBookingText
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetBookingTextsRequest
     */
    public function setMidocoBookingText(?\Pggns\MidocoApi\OrderSD\StructType\BookingTextDTO $midocoBookingText = null): self
    {
        $this->MidocoBookingText = $midocoBookingText;
        
        return $this;
    }
}
