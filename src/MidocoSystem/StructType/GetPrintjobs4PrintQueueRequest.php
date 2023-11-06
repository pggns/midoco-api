<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintjobs4PrintQueueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintjobs4PrintQueueRequest extends AbstractStructBase
{
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * The lastPrintJobId
     * @var int|null
     */
    protected ?int $lastPrintJobId = null;
    /**
     * The workstationId
     * @var string|null
     */
    protected ?string $workstationId = null;
    /**
     * The forceLockQueue
     * @var bool|null
     */
    protected ?bool $forceLockQueue = null;
    /**
     * Constructor method for GetPrintjobs4PrintQueueRequest
     * @uses GetPrintjobs4PrintQueueRequest::setQueueId()
     * @uses GetPrintjobs4PrintQueueRequest::setLastPrintJobId()
     * @uses GetPrintjobs4PrintQueueRequest::setWorkstationId()
     * @uses GetPrintjobs4PrintQueueRequest::setForceLockQueue()
     * @param int $queueId
     * @param int $lastPrintJobId
     * @param string $workstationId
     * @param bool $forceLockQueue
     */
    public function __construct(?int $queueId = null, ?int $lastPrintJobId = null, ?string $workstationId = null, ?bool $forceLockQueue = null)
    {
        $this
            ->setQueueId($queueId)
            ->setLastPrintJobId($lastPrintJobId)
            ->setWorkstationId($workstationId)
            ->setForceLockQueue($forceLockQueue);
    }
    /**
     * Get queueId value
     * @return int|null
     */
    public function getQueueId(): ?int
    {
        return $this->queueId;
    }
    /**
     * Set queueId value
     * @param int $queueId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintjobs4PrintQueueRequest
     */
    public function setQueueId(?int $queueId = null): self
    {
        // validation for constraint: int
        if (!is_null($queueId) && !(is_int($queueId) || ctype_digit($queueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queueId, true), gettype($queueId)), __LINE__);
        }
        $this->queueId = $queueId;
        
        return $this;
    }
    /**
     * Get lastPrintJobId value
     * @return int|null
     */
    public function getLastPrintJobId(): ?int
    {
        return $this->lastPrintJobId;
    }
    /**
     * Set lastPrintJobId value
     * @param int $lastPrintJobId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintjobs4PrintQueueRequest
     */
    public function setLastPrintJobId(?int $lastPrintJobId = null): self
    {
        // validation for constraint: int
        if (!is_null($lastPrintJobId) && !(is_int($lastPrintJobId) || ctype_digit($lastPrintJobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastPrintJobId, true), gettype($lastPrintJobId)), __LINE__);
        }
        $this->lastPrintJobId = $lastPrintJobId;
        
        return $this;
    }
    /**
     * Get workstationId value
     * @return string|null
     */
    public function getWorkstationId(): ?string
    {
        return $this->workstationId;
    }
    /**
     * Set workstationId value
     * @param string $workstationId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintjobs4PrintQueueRequest
     */
    public function setWorkstationId(?string $workstationId = null): self
    {
        // validation for constraint: string
        if (!is_null($workstationId) && !is_string($workstationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workstationId, true), gettype($workstationId)), __LINE__);
        }
        $this->workstationId = $workstationId;
        
        return $this;
    }
    /**
     * Get forceLockQueue value
     * @return bool|null
     */
    public function getForceLockQueue(): ?bool
    {
        return $this->forceLockQueue;
    }
    /**
     * Set forceLockQueue value
     * @param bool $forceLockQueue
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintjobs4PrintQueueRequest
     */
    public function setForceLockQueue(?bool $forceLockQueue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forceLockQueue) && !is_bool($forceLockQueue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forceLockQueue, true), gettype($forceLockQueue)), __LINE__);
        }
        $this->forceLockQueue = $forceLockQueue;
        
        return $this;
    }
}
