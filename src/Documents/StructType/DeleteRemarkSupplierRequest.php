<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteRemarkSupplierRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteRemarkSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkSupplier
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $MidocoRemarkSupplier = null;
    /**
     * Constructor method for DeleteRemarkSupplierRequest
     * @uses DeleteRemarkSupplierRequest::setMidocoRemarkSupplier()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null)
    {
        $this
            ->setMidocoRemarkSupplier($midocoRemarkSupplier);
    }
    /**
     * Get MidocoRemarkSupplier value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier|null
     */
    public function getMidocoRemarkSupplier(): ?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier
    {
        return $this->MidocoRemarkSupplier;
    }
    /**
     * Set MidocoRemarkSupplier value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $midocoRemarkSupplier
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteRemarkSupplierRequest
     */
    public function setMidocoRemarkSupplier(?\Pggns\MidocoApi\Documents\StructType\MidocoRemarkSupplier $midocoRemarkSupplier = null): self
    {
        $this->MidocoRemarkSupplier = $midocoRemarkSupplier;
        
        return $this;
    }
}
