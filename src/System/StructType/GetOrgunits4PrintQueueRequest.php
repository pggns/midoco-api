<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunits4PrintQueueRequest StructType
 * @subpackage Structs
 */
class GetOrgunits4PrintQueueRequest extends AbstractStructBase
{
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * Constructor method for GetOrgunits4PrintQueueRequest
     * @uses GetOrgunits4PrintQueueRequest::setQueueId()
     * @param int $queueId
     */
    public function __construct(?int $queueId = null)
    {
        $this
            ->setQueueId($queueId);
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
     * @return \Pggns\MidocoApi\Api\System\StructType\GetOrgunits4PrintQueueRequest
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
}
