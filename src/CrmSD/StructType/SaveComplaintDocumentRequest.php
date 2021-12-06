<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveComplaintDocumentRequest StructType
 * @subpackage Structs
 */
class SaveComplaintDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintDocument
     * @var \Pggns\MidocoApi\CrmSD\StructType\ComplaintDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\ComplaintDocumentDTO $MidocoComplaintDocument = null;
    /**
     * Constructor method for SaveComplaintDocumentRequest
     * @uses SaveComplaintDocumentRequest::setMidocoComplaintDocument()
     * @param \Pggns\MidocoApi\CrmSD\StructType\ComplaintDocumentDTO $midocoComplaintDocument
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\ComplaintDocumentDTO $midocoComplaintDocument = null)
    {
        $this
            ->setMidocoComplaintDocument($midocoComplaintDocument);
    }
    /**
     * Get MidocoComplaintDocument value
     * @return \Pggns\MidocoApi\CrmSD\StructType\ComplaintDocumentDTO|null
     */
    public function getMidocoComplaintDocument(): ?\Pggns\MidocoApi\CrmSD\StructType\ComplaintDocumentDTO
    {
        return $this->MidocoComplaintDocument;
    }
    /**
     * Set MidocoComplaintDocument value
     * @param \Pggns\MidocoApi\CrmSD\StructType\ComplaintDocumentDTO $midocoComplaintDocument
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveComplaintDocumentRequest
     */
    public function setMidocoComplaintDocument(?\Pggns\MidocoApi\CrmSD\StructType\ComplaintDocumentDTO $midocoComplaintDocument = null): self
    {
        $this->MidocoComplaintDocument = $midocoComplaintDocument;
        
        return $this;
    }
}
