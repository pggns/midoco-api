<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteComplaintRequest StructType
 * @subpackage Structs
 */
class DeleteComplaintRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaint
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaint
     * @var \Pggns\MidocoApi\CrmSD\StructType\ComplaintDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\ComplaintDTO $MidocoComplaint = null;
    /**
     * Constructor method for DeleteComplaintRequest
     * @uses DeleteComplaintRequest::setMidocoComplaint()
     * @param \Pggns\MidocoApi\CrmSD\StructType\ComplaintDTO $midocoComplaint
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\ComplaintDTO $midocoComplaint = null)
    {
        $this
            ->setMidocoComplaint($midocoComplaint);
    }
    /**
     * Get MidocoComplaint value
     * @return \Pggns\MidocoApi\CrmSD\StructType\ComplaintDTO|null
     */
    public function getMidocoComplaint(): ?\Pggns\MidocoApi\CrmSD\StructType\ComplaintDTO
    {
        return $this->MidocoComplaint;
    }
    /**
     * Set MidocoComplaint value
     * @param \Pggns\MidocoApi\CrmSD\StructType\ComplaintDTO $midocoComplaint
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteComplaintRequest
     */
    public function setMidocoComplaint(?\Pggns\MidocoApi\CrmSD\StructType\ComplaintDTO $midocoComplaint = null): self
    {
        $this->MidocoComplaint = $midocoComplaint;
        
        return $this;
    }
}
