<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveCustomerDocumentIntoLastOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: move a customer document into the last order of the customer
 * @subpackage Structs
 */
class MoveCustomerDocumentIntoLastOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument $MidocoOrderDocument = null;
    /**
     * Constructor method for MoveCustomerDocumentIntoLastOrderResponse
     * @uses MoveCustomerDocumentIntoLastOrderResponse::setMidocoOrderDocument()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument $midocoOrderDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null)
    {
        $this
            ->setMidocoOrderDocument($midocoOrderDocument);
    }
    /**
     * Get MidocoOrderDocument value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument|null
     */
    public function getMidocoOrderDocument(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument
    {
        return $this->MidocoOrderDocument;
    }
    /**
     * Set MidocoOrderDocument value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument $midocoOrderDocument
     * @return \Pggns\MidocoApi\Api\Order\StructType\MoveCustomerDocumentIntoLastOrderResponse
     */
    public function setMidocoOrderDocument(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null): self
    {
        $this->MidocoOrderDocument = $midocoOrderDocument;
        
        return $this;
    }
}
