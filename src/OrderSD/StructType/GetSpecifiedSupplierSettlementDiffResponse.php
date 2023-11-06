<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSpecifiedSupplierSettlementDiffResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSpecifiedSupplierSettlementDiffResponse extends AbstractStructBase
{
    /**
     * The SupplierSettlemDiffInfo
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlemDiffDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierSettlemDiffDTO $SupplierSettlemDiffInfo = null;
    /**
     * Constructor method for GetSpecifiedSupplierSettlementDiffResponse
     * @uses GetSpecifiedSupplierSettlementDiffResponse::setSupplierSettlemDiffInfo()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlemDiffDTO $supplierSettlemDiffInfo
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierSettlemDiffDTO $supplierSettlemDiffInfo = null)
    {
        $this
            ->setSupplierSettlemDiffInfo($supplierSettlemDiffInfo);
    }
    /**
     * Get SupplierSettlemDiffInfo value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlemDiffDTO|null
     */
    public function getSupplierSettlemDiffInfo(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierSettlemDiffDTO
    {
        return $this->SupplierSettlemDiffInfo;
    }
    /**
     * Set SupplierSettlemDiffInfo value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierSettlemDiffDTO $supplierSettlemDiffInfo
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffResponse
     */
    public function setSupplierSettlemDiffInfo(?\Pggns\MidocoApi\OrderSD\StructType\SupplierSettlemDiffDTO $supplierSettlemDiffInfo = null): self
    {
        $this->SupplierSettlemDiffInfo = $supplierSettlemDiffInfo;
        
        return $this;
    }
}
