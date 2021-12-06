<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\ComplaintReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\ComplaintReasonDTO $MidocoComplaintReason = null;
    /**
     * Constructor method for DeleteComplaintReasonRequest
     * @uses DeleteComplaintReasonRequest::setMidocoComplaintReason()
     * @param \Pggns\MidocoApi\CrmSD\StructType\ComplaintReasonDTO $midocoComplaintReason
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\ComplaintReasonDTO $midocoComplaintReason = null)
    {
        $this
            ->setMidocoComplaintReason($midocoComplaintReason);
    }
    /**
     * Get MidocoComplaintReason value
     * @return \Pggns\MidocoApi\CrmSD\StructType\ComplaintReasonDTO|null
     */
    public function getMidocoComplaintReason(): ?\Pggns\MidocoApi\CrmSD\StructType\ComplaintReasonDTO
    {
        return $this->MidocoComplaintReason;
    }
    /**
     * Set MidocoComplaintReason value
     * @param \Pggns\MidocoApi\CrmSD\StructType\ComplaintReasonDTO $midocoComplaintReason
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteComplaintReasonRequest
     */
    public function setMidocoComplaintReason(?\Pggns\MidocoApi\CrmSD\StructType\ComplaintReasonDTO $midocoComplaintReason = null): self
    {
        $this->MidocoComplaintReason = $midocoComplaintReason;
        
        return $this;
    }
}
