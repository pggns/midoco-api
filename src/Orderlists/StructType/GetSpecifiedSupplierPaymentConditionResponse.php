<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierPaymentCondDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierPaymentCondDTO $SupplierPaymentConditionInfo = null;
    /**
     * Constructor method for GetSpecifiedSupplierPaymentConditionResponse
     * @uses GetSpecifiedSupplierPaymentConditionResponse::setSupplierPaymentConditionInfo()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo = null)
    {
        $this
            ->setSupplierPaymentConditionInfo($supplierPaymentConditionInfo);
    }
    /**
     * Get SupplierPaymentConditionInfo value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierPaymentCondDTO|null
     */
    public function getSupplierPaymentConditionInfo(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierPaymentCondDTO
    {
        return $this->SupplierPaymentConditionInfo;
    }
    /**
     * Set SupplierPaymentConditionInfo value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetSpecifiedSupplierPaymentConditionResponse
     */
    public function setSupplierPaymentConditionInfo(?\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierPaymentCondDTO $supplierPaymentConditionInfo = null): self
    {
        $this->SupplierPaymentConditionInfo = $supplierPaymentConditionInfo;
        
        return $this;
    }
}
