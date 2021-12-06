<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBillingPositionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteBillingPosition --- delete a given billing position
 * @subpackage Structs
 */
class DeleteBillingPositionResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * Constructor method for DeleteBillingPositionResponse
     * @uses DeleteBillingPositionResponse::setMidocoBillingDocument()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteBillingPositionResponse
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
}