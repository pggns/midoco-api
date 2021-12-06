<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDestinationDocumentRequest StructType
 * @subpackage Structs
 */
class DeleteDestinationDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationDocument
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDestinationDocument|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDestinationDocument $MidocoDestinationDocument = null;
    /**
     * Constructor method for DeleteDestinationDocumentRequest
     * @uses DeleteDestinationDocumentRequest::setMidocoDestinationDocument()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDestinationDocument $midocoDestinationDocument
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDestinationDocument $midocoDestinationDocument = null)
    {
        $this
            ->setMidocoDestinationDocument($midocoDestinationDocument);
    }
    /**
     * Get MidocoDestinationDocument value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDestinationDocument|null
     */
    public function getMidocoDestinationDocument(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDestinationDocument
    {
        return $this->MidocoDestinationDocument;
    }
    /**
     * Set MidocoDestinationDocument value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDestinationDocument $midocoDestinationDocument
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteDestinationDocumentRequest
     */
    public function setMidocoDestinationDocument(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDestinationDocument $midocoDestinationDocument = null): self
    {
        $this->MidocoDestinationDocument = $midocoDestinationDocument;
        
        return $this;
    }
}
