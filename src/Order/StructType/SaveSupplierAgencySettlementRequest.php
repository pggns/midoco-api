<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAgencySettlementRequest StructType
 * @subpackage Structs
 */
class SaveSupplierAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlement
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement $MidocoSupplierAgencySettlement = null;
    /**
     * Constructor method for SaveSupplierAgencySettlementRequest
     * @uses SaveSupplierAgencySettlementRequest::setMidocoSupplierAgencySettlement()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement = null)
    {
        $this
            ->setMidocoSupplierAgencySettlement($midocoSupplierAgencySettlement);
    }
    /**
     * Get MidocoSupplierAgencySettlement value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement|null
     */
    public function getMidocoSupplierAgencySettlement(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement
    {
        return $this->MidocoSupplierAgencySettlement;
    }
    /**
     * Set MidocoSupplierAgencySettlement value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSupplierAgencySettlementRequest
     */
    public function setMidocoSupplierAgencySettlement(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement = null): self
    {
        $this->MidocoSupplierAgencySettlement = $midocoSupplierAgencySettlement;
        
        return $this;
    }
}
