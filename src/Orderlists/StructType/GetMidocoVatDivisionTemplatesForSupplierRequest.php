<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoVatDivisionTemplatesForSupplierRequest StructType
 * @subpackage Structs
 */
class GetMidocoVatDivisionTemplatesForSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for GetMidocoVatDivisionTemplatesForSupplierRequest
     * @uses GetMidocoVatDivisionTemplatesForSupplierRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoVatDivisionTemplatesForSupplierRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
