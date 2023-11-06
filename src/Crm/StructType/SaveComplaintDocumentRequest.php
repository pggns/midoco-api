<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveComplaintDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveComplaintDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintDocument
     * @var \Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO $MidocoComplaintDocument = null;
    /**
     * Constructor method for SaveComplaintDocumentRequest
     * @uses SaveComplaintDocumentRequest::setMidocoComplaintDocument()
     * @param \Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO $midocoComplaintDocument
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO $midocoComplaintDocument = null)
    {
        $this
            ->setMidocoComplaintDocument($midocoComplaintDocument);
    }
    /**
     * Get MidocoComplaintDocument value
     * @return \Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO|null
     */
    public function getMidocoComplaintDocument(): ?\Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO
    {
        return $this->MidocoComplaintDocument;
    }
    /**
     * Set MidocoComplaintDocument value
     * @param \Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO $midocoComplaintDocument
     * @return \Pggns\MidocoApi\Crm\StructType\SaveComplaintDocumentRequest
     */
    public function setMidocoComplaintDocument(?\Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO $midocoComplaintDocument = null): self
    {
        $this->MidocoComplaintDocument = $midocoComplaintDocument;
        
        return $this;
    }
}
