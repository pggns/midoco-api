<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingSourcesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingSourcesRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingSource
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingSource
     * @var \Pggns\MidocoApi\Crm\StructType\BookingSourceDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\BookingSourceDTO $MidocoBookingSource = null;
    /**
     * Constructor method for GetBookingSourcesRequest
     * @uses GetBookingSourcesRequest::setMidocoBookingSource()
     * @param \Pggns\MidocoApi\Crm\StructType\BookingSourceDTO $midocoBookingSource
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\BookingSourceDTO $midocoBookingSource = null)
    {
        $this
            ->setMidocoBookingSource($midocoBookingSource);
    }
    /**
     * Get MidocoBookingSource value
     * @return \Pggns\MidocoApi\Crm\StructType\BookingSourceDTO|null
     */
    public function getMidocoBookingSource(): ?\Pggns\MidocoApi\Crm\StructType\BookingSourceDTO
    {
        return $this->MidocoBookingSource;
    }
    /**
     * Set MidocoBookingSource value
     * @param \Pggns\MidocoApi\Crm\StructType\BookingSourceDTO $midocoBookingSource
     * @return \Pggns\MidocoApi\Crm\StructType\GetBookingSourcesRequest
     */
    public function setMidocoBookingSource(?\Pggns\MidocoApi\Crm\StructType\BookingSourceDTO $midocoBookingSource = null): self
    {
        $this->MidocoBookingSource = $midocoBookingSource;
        
        return $this;
    }
}
