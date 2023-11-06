<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarkSuppliersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRemarkSuppliersRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkSupplier
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoRemarkSupplier|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoRemarkSupplier $MidocoRemarkSupplier = null;
    /**
     * Constructor method for GetRemarkSuppliersRequest
     * @uses GetRemarkSuppliersRequest::setMidocoRemarkSupplier()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null)
    {
        $this
            ->setMidocoRemarkSupplier($midocoRemarkSupplier);
    }
    /**
     * Get MidocoRemarkSupplier value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRemarkSupplier|null
     */
    public function getMidocoRemarkSupplier(): ?\Pggns\MidocoApi\Bank\StructType\MidocoRemarkSupplier
    {
        return $this->MidocoRemarkSupplier;
    }
    /**
     * Set MidocoRemarkSupplier value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     * @return \Pggns\MidocoApi\Bank\StructType\GetRemarkSuppliersRequest
     */
    public function setMidocoRemarkSupplier(?\Pggns\MidocoApi\Bank\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null): self
    {
        $this->MidocoRemarkSupplier = $midocoRemarkSupplier;
        
        return $this;
    }
}
