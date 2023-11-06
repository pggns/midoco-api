<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSpecifiedSupplierPaymentConditionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSpecifiedSupplierPaymentConditionResponse extends AbstractStructBase
{
    /**
     * The SupplierPaymentConditionInfo
     * @var \Pggns\MidocoApi\Documents\StructType\SupplierPaymentCondDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SupplierPaymentCondDTO $SupplierPaymentConditionInfo = null;
    /**
     * Constructor method for GetSpecifiedSupplierPaymentConditionResponse
     * @uses GetSpecifiedSupplierPaymentConditionResponse::setSupplierPaymentConditionInfo()
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo = null)
    {
        $this
            ->setSupplierPaymentConditionInfo($supplierPaymentConditionInfo);
    }
    /**
     * Get SupplierPaymentConditionInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\SupplierPaymentCondDTO|null
     */
    public function getSupplierPaymentConditionInfo(): ?\Pggns\MidocoApi\Documents\StructType\SupplierPaymentCondDTO
    {
        return $this->SupplierPaymentConditionInfo;
    }
    /**
     * Set SupplierPaymentConditionInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo
     * @return \Pggns\MidocoApi\Documents\StructType\GetSpecifiedSupplierPaymentConditionResponse
     */
    public function setSupplierPaymentConditionInfo(?\Pggns\MidocoApi\Documents\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo = null): self
    {
        $this->SupplierPaymentConditionInfo = $supplierPaymentConditionInfo;
        
        return $this;
    }
}
