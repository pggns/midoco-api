<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveHistoryDocumentRequest StructType
 * @subpackage Structs
 */
class SaveHistoryDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoHistoryDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoHistoryDocument
     * @var \Pggns\MidocoApi\Api\Documents\StructType\HistoryDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\HistoryDocumentDTO $MidocoHistoryDocument = null;
    /**
     * Constructor method for SaveHistoryDocumentRequest
     * @uses SaveHistoryDocumentRequest::setMidocoHistoryDocument()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\HistoryDocumentDTO $midocoHistoryDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\HistoryDocumentDTO $midocoHistoryDocument = null)
    {
        $this
            ->setMidocoHistoryDocument($midocoHistoryDocument);
    }
    /**
     * Get MidocoHistoryDocument value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\HistoryDocumentDTO|null
     */
    public function getMidocoHistoryDocument(): ?\Pggns\MidocoApi\Api\Documents\StructType\HistoryDocumentDTO
    {
        return $this->MidocoHistoryDocument;
    }
    /**
     * Set MidocoHistoryDocument value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\HistoryDocumentDTO $midocoHistoryDocument
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveHistoryDocumentRequest
     */
    public function setMidocoHistoryDocument(?\Pggns\MidocoApi\Api\Documents\StructType\HistoryDocumentDTO $midocoHistoryDocument = null): self
    {
        $this->MidocoHistoryDocument = $midocoHistoryDocument;
        
        return $this;
    }
}
