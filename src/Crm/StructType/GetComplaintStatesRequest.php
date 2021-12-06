<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetComplaintStatesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: lists the complaint states
 * @subpackage Structs
 */
class GetComplaintStatesRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintId
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintId
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO $MidocoComplaintId = null;
    /**
     * Constructor method for GetComplaintStatesRequest
     * @uses GetComplaintStatesRequest::setMidocoComplaintId()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId = null)
    {
        $this
            ->setMidocoComplaintId($midocoComplaintId);
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetComplaintStatesRequest
     */
    public function setMidocoComplaintId(?\Pggns\MidocoApi\Crm\StructType\MidocoComplaintIdDTO $midocoComplaintId = null): self
    {
        $this->MidocoComplaintId = $midocoComplaintId;
        
        return $this;
    }
}
