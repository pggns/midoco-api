<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveComplaintStateRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: saveComplaintState - adds a complaint state
 * @subpackage Structs
 */
class SaveComplaintStateRequest extends AbstractStructBase
{
    /**
     * The MidocoComplaintState
     * Meta information extracted from the WSDL
     * - ref: MidocoComplaintState
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintStateDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintStateDTO $MidocoComplaintState = null;
    /**
     * Constructor method for SaveComplaintStateRequest
     * @uses SaveComplaintStateRequest::setMidocoComplaintState()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintStateDTO $midocoComplaintState
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintStateDTO $midocoComplaintState = null)
    {
        $this
            ->setMidocoComplaintState($midocoComplaintState);
    }
    /**
     * Get MidocoComplaintState value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintStateDTO|null
     */
    public function getMidocoComplaintState(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintStateDTO
    {
        return $this->MidocoComplaintState;
    }
    /**
     * Set MidocoComplaintState value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintStateDTO $midocoComplaintState
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveComplaintStateRequest
     */
    public function setMidocoComplaintState(?\Pggns\MidocoApi\CrmSD\StructType\MidocoComplaintStateDTO $midocoComplaintState = null): self
    {
        $this->MidocoComplaintState = $midocoComplaintState;
        
        return $this;
    }
}
