<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSellItemDocumentRequest StructType
 * @subpackage Structs
 */
class SaveSellItemDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItemDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\SellItemDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\SellItemDocumentDTO $MidocoSellItemDocument = null;
    /**
     * Constructor method for SaveSellItemDocumentRequest
     * @uses SaveSellItemDocumentRequest::setMidocoSellItemDocument()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SellItemDocumentDTO $midocoSellItemDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\SellItemDocumentDTO $midocoSellItemDocument = null)
    {
        $this
            ->setMidocoSellItemDocument($midocoSellItemDocument);
    }
    /**
     * Get MidocoSellItemDocument value
     * @return \Pggns\MidocoApi\Api\Order\StructType\SellItemDocumentDTO|null
     */
    public function getMidocoSellItemDocument(): ?\Pggns\MidocoApi\Api\Order\StructType\SellItemDocumentDTO
    {
        return $this->MidocoSellItemDocument;
    }
    /**
     * Set MidocoSellItemDocument value
     * @param \Pggns\MidocoApi\Api\Order\StructType\SellItemDocumentDTO $midocoSellItemDocument
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemDocumentRequest
     */
    public function setMidocoSellItemDocument(?\Pggns\MidocoApi\Api\Order\StructType\SellItemDocumentDTO $midocoSellItemDocument = null): self
    {
        $this->MidocoSellItemDocument = $midocoSellItemDocument;
        
        return $this;
    }
}