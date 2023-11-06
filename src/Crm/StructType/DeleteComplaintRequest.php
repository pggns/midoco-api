<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteComplaintRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteComplaintRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaint
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaint
     * @var \Pggns\MidocoApi\Crm\StructType\ComplaintDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ComplaintDTO $MidocoComplaint = null;
    /**
     * Constructor method for DeleteComplaintRequest
     * @uses DeleteComplaintRequest::setMidocoComplaint()
     * @param \Pggns\MidocoApi\Crm\StructType\ComplaintDTO $midocoComplaint
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ComplaintDTO $midocoComplaint = null)
    {
        $this
            ->setMidocoComplaint($midocoComplaint);
    }
    /**
     * Get MidocoComplaint value
     * @return \Pggns\MidocoApi\Crm\StructType\ComplaintDTO|null
     */
    public function getMidocoComplaint(): ?\Pggns\MidocoApi\Crm\StructType\ComplaintDTO
    {
        return $this->MidocoComplaint;
    }
    /**
     * Set MidocoComplaint value
     * @param \Pggns\MidocoApi\Crm\StructType\ComplaintDTO $midocoComplaint
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteComplaintRequest
     */
    public function setMidocoComplaint(?\Pggns\MidocoApi\Crm\StructType\ComplaintDTO $midocoComplaint = null): self
    {
        $this->MidocoComplaint = $midocoComplaint;
        
        return $this;
    }
}
