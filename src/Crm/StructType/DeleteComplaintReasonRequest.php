<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteComplaintReasonRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteComplaintReasonRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintReason
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintReason
     * @var \Pggns\MidocoApi\Crm\StructType\ComplaintReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ComplaintReasonDTO $MidocoComplaintReason = null;
    /**
     * Constructor method for DeleteComplaintReasonRequest
     * @uses DeleteComplaintReasonRequest::setMidocoComplaintReason()
     * @param \Pggns\MidocoApi\Crm\StructType\ComplaintReasonDTO $midocoComplaintReason
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ComplaintReasonDTO $midocoComplaintReason = null)
    {
        $this
            ->setMidocoComplaintReason($midocoComplaintReason);
    }
    /**
     * Get MidocoComplaintReason value
     * @return \Pggns\MidocoApi\Crm\StructType\ComplaintReasonDTO|null
     */
    public function getMidocoComplaintReason(): ?\Pggns\MidocoApi\Crm\StructType\ComplaintReasonDTO
    {
        return $this->MidocoComplaintReason;
    }
    /**
     * Set MidocoComplaintReason value
     * @param \Pggns\MidocoApi\Crm\StructType\ComplaintReasonDTO $midocoComplaintReason
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteComplaintReasonRequest
     */
    public function setMidocoComplaintReason(?\Pggns\MidocoApi\Crm\StructType\ComplaintReasonDTO $midocoComplaintReason = null): self
    {
        $this->MidocoComplaintReason = $midocoComplaintReason;
        
        return $this;
    }
}
