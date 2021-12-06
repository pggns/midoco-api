<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteComplaintReasonRequest StructType
 * @subpackage Structs
 */
class DeleteComplaintReasonRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintReason
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintReason
     * @var \Pggns\MidocoApi\Api\Crm\StructType\ComplaintReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\ComplaintReasonDTO $MidocoComplaintReason = null;
    /**
     * Constructor method for DeleteComplaintReasonRequest
     * @uses DeleteComplaintReasonRequest::setMidocoComplaintReason()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\ComplaintReasonDTO $midocoComplaintReason
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\ComplaintReasonDTO $midocoComplaintReason = null)
    {
        $this
            ->setMidocoComplaintReason($midocoComplaintReason);
    }
    /**
     * Get MidocoComplaintReason value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ComplaintReasonDTO|null
     */
    public function getMidocoComplaintReason(): ?\Pggns\MidocoApi\Api\Crm\StructType\ComplaintReasonDTO
    {
        return $this->MidocoComplaintReason;
    }
    /**
     * Set MidocoComplaintReason value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\ComplaintReasonDTO $midocoComplaintReason
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintReasonRequest
     */
    public function setMidocoComplaintReason(?\Pggns\MidocoApi\Api\Crm\StructType\ComplaintReasonDTO $midocoComplaintReason = null): self
    {
        $this->MidocoComplaintReason = $midocoComplaintReason;
        
        return $this;
    }
}
