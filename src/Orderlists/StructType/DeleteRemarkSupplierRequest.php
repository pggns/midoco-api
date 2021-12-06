<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteRemarkSupplierRequest StructType
 * @subpackage Structs
 */
class DeleteRemarkSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkSupplier
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkSupplier|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkSupplier $MidocoRemarkSupplier = null;
    /**
     * Constructor method for DeleteRemarkSupplierRequest
     * @uses DeleteRemarkSupplierRequest::setMidocoRemarkSupplier()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null)
    {
        $this
            ->setMidocoRemarkSupplier($midocoRemarkSupplier);
    }
    /**
     * Get MidocoRemarkSupplier value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkSupplier|null
     */
    public function getMidocoRemarkSupplier(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkSupplier
    {
        return $this->MidocoRemarkSupplier;
    }
    /**
     * Set MidocoRemarkSupplier value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteRemarkSupplierRequest
     */
    public function setMidocoRemarkSupplier(?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null): self
    {
        $this->MidocoRemarkSupplier = $midocoRemarkSupplier;
        
        return $this;
    }
}
