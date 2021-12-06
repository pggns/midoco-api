<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProductTypeSupplierRequest StructType
 * @subpackage Structs
 */
class SaveProductTypeSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoProductTypeSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoProductTypeSupplier
     * @var \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO $MidocoProductTypeSupplier = null;
    /**
     * Constructor method for SaveProductTypeSupplierRequest
     * @uses SaveProductTypeSupplierRequest::setMidocoProductTypeSupplier()
     * @param \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier = null)
    {
        $this
            ->setMidocoProductTypeSupplier($midocoProductTypeSupplier);
    }
    /**
     * Get MidocoProductTypeSupplier value
     * @return \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO|null
     */
    public function getMidocoProductTypeSupplier(): ?\Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO
    {
        return $this->MidocoProductTypeSupplier;
    }
    /**
     * Set MidocoProductTypeSupplier value
     * @param \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier
     * @return \Pggns\MidocoApi\Documents\StructType\SaveProductTypeSupplierRequest
     */
    public function setMidocoProductTypeSupplier(?\Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO $midocoProductTypeSupplier = null): self
    {
        $this->MidocoProductTypeSupplier = $midocoProductTypeSupplier;
        
        return $this;
    }
}
