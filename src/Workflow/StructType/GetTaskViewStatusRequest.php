<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewStatusRequest StructType
 * @subpackage Structs
 */
class GetTaskViewStatusRequest extends AbstractStructBase
{
    /**
     * The TaskViewContext
     * Meta information extracted from the WSDL
     * - ref: TaskViewContext
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\TaskViewContext|null
     */
    protected ?\Pggns\MidocoApi\Api\Workflow\StructType\TaskViewContext $TaskViewContext = null;
    /**
     * Constructor method for GetTaskViewStatusRequest
     * @uses GetTaskViewStatusRequest::setTaskViewContext()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\TaskViewContext $taskViewContext
     */
    public function __construct(?\Pggns\MidocoApi\Api\Workflow\StructType\TaskViewContext $taskViewContext = null)
    {
        $this
            ->setTaskViewContext($taskViewContext);
    }
    /**
     * Get TaskViewContext value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\TaskViewContext|null
     */
    public function getTaskViewContext(): ?\Pggns\MidocoApi\Api\Workflow\StructType\TaskViewContext
    {
        return $this->TaskViewContext;
    }
    /**
     * Set TaskViewContext value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\TaskViewContext $taskViewContext
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetTaskViewStatusRequest
     */
    public function setTaskViewContext(?\Pggns\MidocoApi\Api\Workflow\StructType\TaskViewContext $taskViewContext = null): self
    {
        $this->TaskViewContext = $taskViewContext;
        
        return $this;
    }
}
