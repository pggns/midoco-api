<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentItemRequest StructType
 * @subpackage Structs
 */
class SaveDocumentItemRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentItem
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentItem
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItem|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItem $MidocoDocumentItem = null;
    /**
     * Constructor method for SaveDocumentItemRequest
     * @uses SaveDocumentItemRequest::setMidocoDocumentItem()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItem $midocoDocumentItem
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItem $midocoDocumentItem = null)
    {
        $this
            ->setMidocoDocumentItem($midocoDocumentItem);
    }
    /**
     * Get MidocoDocumentItem value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItem|null
     */
    public function getMidocoDocumentItem(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItem
    {
        return $this->MidocoDocumentItem;
    }
    /**
     * Set MidocoDocumentItem value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItem $midocoDocumentItem
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveDocumentItemRequest
     */
    public function setMidocoDocumentItem(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItem $midocoDocumentItem = null): self
    {
        $this->MidocoDocumentItem = $midocoDocumentItem;
        
        return $this;
    }
}