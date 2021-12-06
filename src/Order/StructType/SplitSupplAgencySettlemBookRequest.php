<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SplitSupplAgencySettlemBookRequest StructType
 * @subpackage Structs
 */
class SplitSupplAgencySettlemBookRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlementBooking
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $MidocoSupplierAgencySettlementBooking = null;
    /**
     * The MidocoSupplierAgencySettlementDetail
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlementDetail
     * @var \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO $MidocoSupplierAgencySettlementDetail = null;
    /**
     * Constructor method for SplitSupplAgencySettlemBookRequest
     * @uses SplitSupplAgencySettlemBookRequest::setMidocoSupplierAgencySettlementBooking()
     * @uses SplitSupplAgencySettlemBookRequest::setMidocoSupplierAgencySettlementDetail()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     * @param \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null, ?\Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail = null)
    {
        $this
            ->setMidocoSupplierAgencySettlementBooking($midocoSupplierAgencySettlementBooking)
            ->setMidocoSupplierAgencySettlementDetail($midocoSupplierAgencySettlementDetail);
    }
    /**
     * Get MidocoSupplierAgencySettlementBooking value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking|null
     */
    public function getMidocoSupplierAgencySettlementBooking(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking
    {
        return $this->MidocoSupplierAgencySettlementBooking;
    }
    /**
     * Set MidocoSupplierAgencySettlementBooking value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking
     * @return \Pggns\MidocoApi\Api\Order\StructType\SplitSupplAgencySettlemBookRequest
     */
    public function setMidocoSupplierAgencySettlementBooking(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlementBooking $midocoSupplierAgencySettlementBooking = null): self
    {
        $this->MidocoSupplierAgencySettlementBooking = $midocoSupplierAgencySettlementBooking;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAgencySettlementDetail value
     * @return \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO|null
     */
    public function getMidocoSupplierAgencySettlementDetail(): ?\Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO
    {
        return $this->MidocoSupplierAgencySettlementDetail;
    }
    /**
     * Set MidocoSupplierAgencySettlementDetail value
     * @param \Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail
     * @return \Pggns\MidocoApi\Api\Order\StructType\SplitSupplAgencySettlemBookRequest
     */
    public function setMidocoSupplierAgencySettlementDetail(?\Pggns\MidocoApi\Api\Order\StructType\SupplAgencySettlemDetDTO $midocoSupplierAgencySettlementDetail = null): self
    {
        $this->MidocoSupplierAgencySettlementDetail = $midocoSupplierAgencySettlementDetail;
        
        return $this;
    }
}
