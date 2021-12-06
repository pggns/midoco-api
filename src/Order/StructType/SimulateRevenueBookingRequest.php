<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimulateRevenueBookingRequest StructType
 * @subpackage Structs
 */
class SimulateRevenueBookingRequest extends AbstractStructBase
{
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType $RevenueBookingInfo = null;
    /**
     * Constructor method for SimulateRevenueBookingRequest
     * @uses SimulateRevenueBookingRequest::setRevenueBookingInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null)
    {
        $this
            ->setRevenueBookingInfo($revenueBookingInfo);
    }
    /**
     * Get RevenueBookingInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType|null
     */
    public function getRevenueBookingInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType
    {
        return $this->RevenueBookingInfo;
    }
    /**
     * Set RevenueBookingInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\SimulateRevenueBookingRequest
     */
    public function setRevenueBookingInfo(?\Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null): self
    {
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
}
