<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDocumentItemRequest StructType
 * @subpackage Structs
 */
class SearchDocumentItemRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentItemInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentItemInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItemInfoType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItemInfoType $MidocoDocumentItemInfo = null;
    /**
     * Constructor method for SearchDocumentItemRequest
     * @uses SearchDocumentItemRequest::setMidocoDocumentItemInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItemInfoType $midocoDocumentItemInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItemInfoType $midocoDocumentItemInfo = null)
    {
        $this
            ->setMidocoDocumentItemInfo($midocoDocumentItemInfo);
    }
    /**
     * Get MidocoDocumentItemInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItemInfoType|null
     */
    public function getMidocoDocumentItemInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItemInfoType
    {
        return $this->MidocoDocumentItemInfo;
    }
    /**
     * Set MidocoDocumentItemInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItemInfoType $midocoDocumentItemInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\SearchDocumentItemRequest
     */
    public function setMidocoDocumentItemInfo(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDocumentItemInfoType $midocoDocumentItemInfo = null): self
    {
        $this->MidocoDocumentItemInfo = $midocoDocumentItemInfo;
        
        return $this;
    }
}
