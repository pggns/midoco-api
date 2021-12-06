<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTaskQueueRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoTaskQueueRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskQueue
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskQueue
     */
    protected \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskQueue $MidocoTaskQueue;
    /**
     * Constructor method for DeleteMidocoTaskQueueRequest
     * @uses DeleteMidocoTaskQueueRequest::setMidocoTaskQueue()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue
     */
    public function __construct(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue)
    {
        $this
            ->setMidocoTaskQueue($midocoTaskQueue);
    }
    /**
     * Get MidocoTaskQueue value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskQueue
     */
    public function getMidocoTaskQueue(): \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskQueue
    {
        return $this->MidocoTaskQueue;
    }
    /**
     * Set MidocoTaskQueue value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskQueueRequest
     */
    public function setMidocoTaskQueue(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoTaskQueue $midocoTaskQueue): self
    {
        $this->MidocoTaskQueue = $midocoTaskQueue;
        
        return $this;
    }
}
