<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTaskPriorityRequest StructType
 * @subpackage Structs
 */
class GetMidocoTaskPriorityRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskPriority
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskPriority
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\TaskPriorityDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Workflow\StructType\TaskPriorityDTO $MidocoTaskPriority = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for GetMidocoTaskPriorityRequest
     * @uses GetMidocoTaskPriorityRequest::setMidocoTaskPriority()
     * @uses GetMidocoTaskPriorityRequest::setOrgunit()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\TaskPriorityDTO $midocoTaskPriority
     * @param string $orgunit
     */
    public function __construct(?\Pggns\MidocoApi\Api\Workflow\StructType\TaskPriorityDTO $midocoTaskPriority = null, ?string $orgunit = null)
    {
        $this
            ->setMidocoTaskPriority($midocoTaskPriority)
            ->setOrgunit($orgunit);
    }
    /**
     * Get MidocoTaskPriority value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\TaskPriorityDTO|null
     */
    public function getMidocoTaskPriority(): ?\Pggns\MidocoApi\Api\Workflow\StructType\TaskPriorityDTO
    {
        return $this->MidocoTaskPriority;
    }
    /**
     * Set MidocoTaskPriority value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\TaskPriorityDTO $midocoTaskPriority
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetMidocoTaskPriorityRequest
     */
    public function setMidocoTaskPriority(?\Pggns\MidocoApi\Api\Workflow\StructType\TaskPriorityDTO $midocoTaskPriority = null): self
    {
        $this->MidocoTaskPriority = $midocoTaskPriority;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetMidocoTaskPriorityRequest
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
