<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSpecifiedSupplierPaymentConditionResponse StructType
 * @subpackage Structs
 */
class GetSpecifiedSupplierPaymentConditionResponse extends AbstractStructBase
{
    /**
     * The SupplierPaymentConditionInfo
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierPaymentCondDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierPaymentCondDTO $SupplierPaymentConditionInfo = null;
    /**
     * Constructor method for GetSpecifiedSupplierPaymentConditionResponse
     * @uses GetSpecifiedSupplierPaymentConditionResponse::setSupplierPaymentConditionInfo()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo = null)
    {
        $this
            ->setSupplierPaymentConditionInfo($supplierPaymentConditionInfo);
    }
    /**
     * Get SupplierPaymentConditionInfo value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierPaymentCondDTO|null
     */
    public function getSupplierPaymentConditionInfo(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierPaymentCondDTO
    {
        return $this->SupplierPaymentConditionInfo;
    }
    /**
     * Set SupplierPaymentConditionInfo value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionResponse
     */
    public function setSupplierPaymentConditionInfo(?\Pggns\MidocoApi\OrderSD\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo = null): self
    {
        $this->SupplierPaymentConditionInfo = $supplierPaymentConditionInfo;
        
        return $this;
    }
}
