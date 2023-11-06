<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReleasePrintQueueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReleasePrintQueueRequest extends AbstractStructBase
{
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * The lastWorkstationId
     * @var string|null
     */
    protected ?string $lastWorkstationId = null;
    /**
     * Constructor method for ReleasePrintQueueRequest
     * @uses ReleasePrintQueueRequest::setQueueId()
     * @uses ReleasePrintQueueRequest::setLastWorkstationId()
     * @param int $queueId
     * @param string $lastWorkstationId
     */
    public function __construct(?int $queueId = null, ?string $lastWorkstationId = null)
    {
        $this
            ->setQueueId($queueId)
            ->setLastWorkstationId($lastWorkstationId);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ReleasePrintQueueRequest
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
     * Get lastWorkstationId value
     * @return string|null
     */
    public function getLastWorkstationId(): ?string
    {
        return $this->lastWorkstationId;
    }
    /**
     * Set lastWorkstationId value
     * @param string $lastWorkstationId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ReleasePrintQueueRequest
     */
    public function setLastWorkstationId(?string $lastWorkstationId = null): self
    {
        // validation for constraint: string
        if (!is_null($lastWorkstationId) && !is_string($lastWorkstationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastWorkstationId, true), gettype($lastWorkstationId)), __LINE__);
        }
        $this->lastWorkstationId = $lastWorkstationId;
        
        return $this;
    }
}
