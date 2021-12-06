<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelDocumentRequest StructType
 * @subpackage Structs
 */
class SaveTravelDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument $MidocoTravelDocument = null;
    /**
     * Constructor method for SaveTravelDocumentRequest
     * @uses SaveTravelDocumentRequest::setMidocoTravelDocument()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument $midocoTravelDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument $midocoTravelDocument = null)
    {
        $this
            ->setMidocoTravelDocument($midocoTravelDocument);
    }
    /**
     * Get MidocoTravelDocument value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument|null
     */
    public function getMidocoTravelDocument(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument
    {
        return $this->MidocoTravelDocument;
    }
    /**
     * Set MidocoTravelDocument value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument $midocoTravelDocument
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveTravelDocumentRequest
     */
    public function setMidocoTravelDocument(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelDocument $midocoTravelDocument = null): self
    {
        $this->MidocoTravelDocument = $midocoTravelDocument;
        
        return $this;
    }
}
