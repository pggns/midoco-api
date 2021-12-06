<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingDocumentDocumentRequest StructType
 * @subpackage Structs
 */
class SaveBillingDocumentDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingDocumentDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocumentDocument
     * @var \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $MidocoBillingDocumentDocument = null;
    /**
     * Constructor method for SaveBillingDocumentDocumentRequest
     * @uses SaveBillingDocumentDocumentRequest::setMidocoBillingDocumentDocument()
     * @param \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $midocoBillingDocumentDocument
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $midocoBillingDocumentDocument = null)
    {
        $this
            ->setMidocoBillingDocumentDocument($midocoBillingDocumentDocument);
    }
    /**
     * Get MidocoBillingDocumentDocument value
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO|null
     */
    public function getMidocoBillingDocumentDocument(): ?\Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO
    {
        return $this->MidocoBillingDocumentDocument;
    }
    /**
     * Set MidocoBillingDocumentDocument value
     * @param \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $midocoBillingDocumentDocument
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocumentDocumentRequest
     */
    public function setMidocoBillingDocumentDocument(?\Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $midocoBillingDocumentDocument = null): self
    {
        $this->MidocoBillingDocumentDocument = $midocoBillingDocumentDocument;
        
        return $this;
    }
}
