<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductTypeSupplierRequest StructType
 * @subpackage Structs
 */
class GetProductTypeSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoProductTypeSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoProductTypeSupplier
     * @var \Pggns\MidocoApi\OrderSD\StructType\ProductTypeSupplierDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\ProductTypeSupplierDTO $MidocoProductTypeSupplier = null;
    /**
     * Constructor method for GetProductTypeSupplierRequest
     * @uses GetProductTypeSupplierRequest::setMidocoProductTypeSupplier()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier = null)
    {
        $this
            ->setMidocoProductTypeSupplier($midocoProductTypeSupplier);
    }
    /**
     * Get MidocoProductTypeSupplier value
     * @return \Pggns\MidocoApi\OrderSD\StructType\ProductTypeSupplierDTO|null
     */
    public function getMidocoProductTypeSupplier(): ?\Pggns\MidocoApi\OrderSD\StructType\ProductTypeSupplierDTO
    {
        return $this->MidocoProductTypeSupplier;
    }
    /**
     * Set MidocoProductTypeSupplier value
     * @param \Pggns\MidocoApi\OrderSD\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetProductTypeSupplierRequest
     */
    public function setMidocoProductTypeSupplier(?\Pggns\MidocoApi\OrderSD\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier = null): self
    {
        $this->MidocoProductTypeSupplier = $midocoProductTypeSupplier;
        
        return $this;
    }
}
