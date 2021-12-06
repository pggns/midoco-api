<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentRequest StructType
 * @subpackage Structs
 */
class GetDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmDocumentId
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocumentId
     * @var \Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $MidocoCrmDocumentId = null;
    /**
     * Constructor method for GetDocumentRequest
     * @uses GetDocumentRequest::setMidocoCrmDocumentId()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null)
    {
        $this
            ->setMidocoCrmDocumentId($midocoCrmDocumentId);
    }
    /**
     * Get MidocoCrmDocumentId value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO|null
     */
    public function getMidocoCrmDocumentId(): ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO
    {
        return $this->MidocoCrmDocumentId;
    }
    /**
     * Set MidocoCrmDocumentId value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $midocoCrmDocumentId
     * @return \Pggns\MidocoApi\Crm\StructType\GetDocumentRequest
     */
    public function setMidocoCrmDocumentId(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentIdDTO $midocoCrmDocumentId = null): self
    {
        $this->MidocoCrmDocumentId = $midocoCrmDocumentId;
        
        return $this;
    }
}
