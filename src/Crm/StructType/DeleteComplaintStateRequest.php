<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteComplaintStateRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteComplaintState - removes a complaint state
 * @subpackage Structs
 */
class DeleteComplaintStateRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintState
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintState
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintStateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintStateDTO $MidocoComplaintState = null;
    /**
     * Constructor method for DeleteComplaintStateRequest
     * @uses DeleteComplaintStateRequest::setMidocoComplaintState()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintStateDTO $midocoComplaintState
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintStateDTO $midocoComplaintState = null)
    {
        $this
            ->setMidocoComplaintState($midocoComplaintState);
    }
    /**
     * Get MidocoComplaintState value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintStateDTO|null
     */
    public function getMidocoComplaintState(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintStateDTO
    {
        return $this->MidocoComplaintState;
    }
    /**
     * Set MidocoComplaintState value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintStateDTO $midocoComplaintState
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintStateRequest
     */
    public function setMidocoComplaintState(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoComplaintStateDTO $midocoComplaintState = null): self
    {
        $this->MidocoComplaintState = $midocoComplaintState;
        
        return $this;
    }
}
