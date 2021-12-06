<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierDocumentShippingRequest StructType
 * @subpackage Structs
 */
class SearchSupplierDocumentShippingRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDocumentShipping
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierDocumentShipping|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierDocumentShipping $MidocoSupplierDocumentShipping = null;
    /**
     * Constructor method for SearchSupplierDocumentShippingRequest
     * @uses SearchSupplierDocumentShippingRequest::setMidocoSupplierDocumentShipping()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping = null)
    {
        $this
            ->setMidocoSupplierDocumentShipping($midocoSupplierDocumentShipping);
    }
    /**
     * Get MidocoSupplierDocumentShipping value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierDocumentShipping|null
     */
    public function getMidocoSupplierDocumentShipping(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierDocumentShipping
    {
        return $this->MidocoSupplierDocumentShipping;
    }
    /**
     * Set MidocoSupplierDocumentShipping value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping
     * @return \Pggns\MidocoApi\Documents\StructType\SearchSupplierDocumentShippingRequest
     */
    public function setMidocoSupplierDocumentShipping(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping = null): self
    {
        $this->MidocoSupplierDocumentShipping = $midocoSupplierDocumentShipping;
        
        return $this;
    }
}
