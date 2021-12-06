<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintIdDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintIdDTO $MidocoComplaintId = null;
    /**
     * Constructor method for GetComplaintDocumentsRequest
     * @uses GetComplaintDocumentsRequest::setMidocoComplaintId()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintIdDTO $midocoComplaintId
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintIdDTO $midocoComplaintId = null)
    {
        $this
            ->setMidocoComplaintId($midocoComplaintId);
    }
    /**
     * Get MidocoComplaintId value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintIdDTO|null
     */
    public function getMidocoComplaintId(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintIdDTO
    {
        return $this->MidocoComplaintId;
    }
    /**
     * Set MidocoComplaintId value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintIdDTO $midocoComplaintId
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetComplaintDocumentsRequest
     */
    public function setMidocoComplaintId(?\Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintIdDTO $midocoComplaintId = null): self
    {
        $this->MidocoComplaintId = $midocoComplaintId;
        
        return $this;
    }
}
