<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintDocumentDTO StructType
 * @subpackage Structs
 */
class ComplaintDocumentDTO extends AbstractStructBase
{
    /**
     * The MidocoCrmDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocument
     * @var \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $MidocoCrmDocument = null;
    /**
     * The MidocoComplaintId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoComplaintId
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO $MidocoComplaintId = null;
    /**
     * Constructor method for ComplaintDocumentDTO
     * @uses ComplaintDocumentDTO::setMidocoCrmDocument()
     * @uses ComplaintDocumentDTO::setMidocoComplaintId()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument)
            ->setMidocoComplaintId($midocoComplaintId);
    }
    /**
     * Get MidocoCrmDocument value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO|null
     */
    public function getMidocoCrmDocument(): ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO
    {
        return $this->MidocoCrmDocument;
    }
    /**
     * Set MidocoCrmDocument value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument
     * @return \Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO
     */
    public function setMidocoCrmDocument(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument = null): self
    {
        $this->MidocoCrmDocument = $midocoCrmDocument;
        
        return $this;
    }
    /**
     * Get MidocoComplaintId value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO|null
     */
    public function getMidocoComplaintId(): ?\Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO
    {
        return $this->MidocoComplaintId;
    }
    /**
     * Set MidocoComplaintId value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId
     * @return \Pggns\MidocoApi\Crm\StructType\ComplaintDocumentDTO
     */
    public function setMidocoComplaintId(?\Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId = null): self
    {
        $this->MidocoComplaintId = $midocoComplaintId;
        
        return $this;
    }
}
