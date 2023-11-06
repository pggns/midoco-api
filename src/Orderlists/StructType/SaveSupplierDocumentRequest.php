<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDocument
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierDocument|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierDocument $MidocoSupplierDocument = null;
    /**
     * Constructor method for SaveSupplierDocumentRequest
     * @uses SaveSupplierDocumentRequest::setMidocoSupplierDocument()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierDocument $midocoSupplierDocument
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierDocument $midocoSupplierDocument = null)
    {
        $this
            ->setMidocoSupplierDocument($midocoSupplierDocument);
    }
    /**
     * Get MidocoSupplierDocument value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierDocument|null
     */
    public function getMidocoSupplierDocument(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierDocument
    {
        return $this->MidocoSupplierDocument;
    }
    /**
     * Set MidocoSupplierDocument value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierDocument $midocoSupplierDocument
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveSupplierDocumentRequest
     */
    public function setMidocoSupplierDocument(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierDocument $midocoSupplierDocument = null): self
    {
        $this->MidocoSupplierDocument = $midocoSupplierDocument;
        
        return $this;
    }
}
