<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBookingSourceRequest StructType
 * @subpackage Structs
 */
class DeleteBookingSourceRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingSource
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingSource
     * @var \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO $MidocoBookingSource = null;
    /**
     * Constructor method for DeleteBookingSourceRequest
     * @uses DeleteBookingSourceRequest::setMidocoBookingSource()
     * @param \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO $midocoBookingSource
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO $midocoBookingSource = null)
    {
        $this
            ->setMidocoBookingSource($midocoBookingSource);
    }
    /**
     * Get MidocoBookingSource value
     * @return \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO|null
     */
    public function getMidocoBookingSource(): ?\Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO
    {
        return $this->MidocoBookingSource;
    }
    /**
     * Set MidocoBookingSource value
     * @param \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO $midocoBookingSource
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteBookingSourceRequest
     */
    public function setMidocoBookingSource(?\Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO $midocoBookingSource = null): self
    {
        $this->MidocoBookingSource = $midocoBookingSource;
        
        return $this;
    }
}
