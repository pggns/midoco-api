<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsers4PrintQueueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUsers4PrintQueueRequest extends AbstractStructBase
{
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * Constructor method for GetUsers4PrintQueueRequest
     * @uses GetUsers4PrintQueueRequest::setQueueId()
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetUsers4PrintQueueRequest
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
