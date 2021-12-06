<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintBillingDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: !!!!!!!!!!!!!!! NOT COMPLETED !!!!!!!!!!!!!!!!! printBillingDocument --- create a printjob for a document Increase the printing_count field Retrieve all the postions and create the document using a template (assigned to the OrgUnit,
 * inheritable). The output is a FOP String. (the template must print a COPY indication in case the printing count is already > 1, and it should print a PREVIEW indication in case the document_no is empty) The printjobDTO is referring to an entry in the
 * print-Queue of the workstation. It does not contain the printjob itself !
 * @subpackage Structs
 */
class PrintBillingDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * Constructor method for PrintBillingDocumentResponse
     * @uses PrintBillingDocumentResponse::setMidocoBillingDocument()
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrintBillingDocumentResponse
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
}
