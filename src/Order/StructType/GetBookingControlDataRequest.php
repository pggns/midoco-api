<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingControlDataRequest StructType
 * @subpackage Structs
 */
class GetBookingControlDataRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingControl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBookingControl
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingControl|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBookingControl $MidocoBookingControl = null;
    /**
     * Constructor method for GetBookingControlDataRequest
     * @uses GetBookingControlDataRequest::setMidocoBookingControl()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingControl $midocoBookingControl
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBookingControl $midocoBookingControl = null)
    {
        $this
            ->setMidocoBookingControl($midocoBookingControl);
    }
    /**
     * Get MidocoBookingControl value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingControl|null
     */
    public function getMidocoBookingControl(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBookingControl
    {
        return $this->MidocoBookingControl;
    }
    /**
     * Set MidocoBookingControl value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingControl $midocoBookingControl
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBookingControlDataRequest
     */
    public function setMidocoBookingControl(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBookingControl $midocoBookingControl = null): self
    {
        $this->MidocoBookingControl = $midocoBookingControl;
        
        return $this;
    }
}
