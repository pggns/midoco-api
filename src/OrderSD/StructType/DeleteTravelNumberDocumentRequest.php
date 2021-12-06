<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTravelNumberDocumentRequest StructType
 * @subpackage Structs
 */
class DeleteTravelNumberDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberDocument
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumberDocument|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumberDocument $MidocoTravelNumberDocument = null;
    /**
     * Constructor method for DeleteTravelNumberDocumentRequest
     * @uses DeleteTravelNumberDocumentRequest::setMidocoTravelNumberDocument()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument = null)
    {
        $this
            ->setMidocoTravelNumberDocument($midocoTravelNumberDocument);
    }
    /**
     * Get MidocoTravelNumberDocument value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumberDocument|null
     */
    public function getMidocoTravelNumberDocument(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumberDocument
    {
        return $this->MidocoTravelNumberDocument;
    }
    /**
     * Set MidocoTravelNumberDocument value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberDocumentRequest
     */
    public function setMidocoTravelNumberDocument(?\Pggns\MidocoApi\OrderSD\StructType\MidocoTravelNumberDocument $midocoTravelNumberDocument = null): self
    {
        $this->MidocoTravelNumberDocument = $midocoTravelNumberDocument;
        
        return $this;
    }
}
