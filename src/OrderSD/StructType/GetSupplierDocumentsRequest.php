<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierDocumentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDocument
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDocument|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDocument $MidocoSupplierDocument = null;
    /**
     * Constructor method for GetSupplierDocumentsRequest
     * @uses GetSupplierDocumentsRequest::setMidocoSupplierDocument()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDocument $midocoSupplierDocument
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDocument $midocoSupplierDocument = null)
    {
        $this
            ->setMidocoSupplierDocument($midocoSupplierDocument);
    }
    /**
     * Get MidocoSupplierDocument value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDocument|null
     */
    public function getMidocoSupplierDocument(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDocument
    {
        return $this->MidocoSupplierDocument;
    }
    /**
     * Set MidocoSupplierDocument value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDocument $midocoSupplierDocument
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetSupplierDocumentsRequest
     */
    public function setMidocoSupplierDocument(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierDocument $midocoSupplierDocument = null): self
    {
        $this->MidocoSupplierDocument = $midocoSupplierDocument;
        
        return $this;
    }
}
