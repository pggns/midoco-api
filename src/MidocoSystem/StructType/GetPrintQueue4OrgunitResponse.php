<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintQueue4OrgunitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintQueue4OrgunitResponse extends AbstractStructBase
{
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * Constructor method for GetPrintQueue4OrgunitResponse
     * @uses GetPrintQueue4OrgunitResponse::setQueueId()
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintQueue4OrgunitResponse
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
