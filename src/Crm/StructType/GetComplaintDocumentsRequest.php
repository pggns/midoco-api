<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetComplaintDocumentsRequest StructType
 * @subpackage Structs
 */
class GetComplaintDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintId
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintId
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintIdDTO $MidocoComplaintId = null;
    /**
     * Constructor method for GetComplaintDocumentsRequest
     * @uses GetComplaintDocumentsRequest::setMidocoComplaintId()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId = null)
    {
        $this
            ->setMidocoComplaintId($midocoComplaintId);
    }
    /**
     * Get MidocoComplaintId value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintIdDTO|null
     */
    public function getMidocoComplaintId(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintIdDTO
    {
        return $this->MidocoComplaintId;
    }
    /**
     * Set MidocoComplaintId value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetComplaintDocumentsRequest
     */
    public function setMidocoComplaintId(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId = null): self
    {
        $this->MidocoComplaintId = $midocoComplaintId;
        
        return $this;
    }
}
