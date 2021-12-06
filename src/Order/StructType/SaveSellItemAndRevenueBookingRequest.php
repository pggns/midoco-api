<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSellItemAndRevenueBookingRequest StructType
 * @subpackage Structs
 */
class SaveSellItemAndRevenueBookingRequest extends AbstractStructBase
{
    /**
     * The SellItemProvision
     * Meta information extracted from the WSDL
     * - ref: SellItemProvision
     * @var \Pggns\MidocoApi\Api\Order\StructType\SellItemProvisionType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\SellItemProvisionType $SellItemProvision = null;
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType $RevenueBookingInfo = null;
    /**
     * Constructor method for SaveSellItemAndRevenueBookingRequest
     * @uses SaveSellItemAndRevenueBookingRequest::setSellItemProvision()
     * @uses SaveSellItemAndRevenueBookingRequest::setRevenueBookingInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SellItemProvisionType $sellItemProvision
     * @param \Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\SellItemProvisionType $sellItemProvision = null, ?\Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null)
    {
        $this
            ->setSellItemProvision($sellItemProvision)
            ->setRevenueBookingInfo($revenueBookingInfo);
    }
    /**
     * Get SellItemProvision value
     * @return \Pggns\MidocoApi\Api\Order\StructType\SellItemProvisionType|null
     */
    public function getSellItemProvision(): ?\Pggns\MidocoApi\Api\Order\StructType\SellItemProvisionType
    {
        return $this->SellItemProvision;
    }
    /**
     * Set SellItemProvision value
     * @param \Pggns\MidocoApi\Api\Order\StructType\SellItemProvisionType $sellItemProvision
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAndRevenueBookingRequest
     */
    public function setSellItemProvision(?\Pggns\MidocoApi\Api\Order\StructType\SellItemProvisionType $sellItemProvision = null): self
    {
        $this->SellItemProvision = $sellItemProvision;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAndRevenueBookingRequest
     */
    public function setRevenueBookingInfo(?\Pggns\MidocoApi\Api\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null): self
    {
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
}
