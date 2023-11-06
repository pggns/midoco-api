<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendEmailResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendEmailResponse extends AbstractStructBase
{
    /**
     * The mailQueueId
     * @var int|null
     */
    protected ?int $mailQueueId = null;
    /**
     * The mailRelay
     * @var string|null
     */
    protected ?string $mailRelay = null;
    /**
     * Constructor method for SendEmailResponse
     * @uses SendEmailResponse::setMailQueueId()
     * @uses SendEmailResponse::setMailRelay()
     * @param int $mailQueueId
     * @param string $mailRelay
     */
    public function __construct(?int $mailQueueId = null, ?string $mailRelay = null)
    {
        $this
            ->setMailQueueId($mailQueueId)
            ->setMailRelay($mailRelay);
    }
    /**
     * Get mailQueueId value
     * @return int|null
     */
    public function getMailQueueId(): ?int
    {
        return $this->mailQueueId;
    }
    /**
     * Set mailQueueId value
     * @param int $mailQueueId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SendEmailResponse
     */
    public function setMailQueueId(?int $mailQueueId = null): self
    {
        // validation for constraint: int
        if (!is_null($mailQueueId) && !(is_int($mailQueueId) || ctype_digit($mailQueueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mailQueueId, true), gettype($mailQueueId)), __LINE__);
        }
        $this->mailQueueId = $mailQueueId;
        
        return $this;
    }
    /**
     * Get mailRelay value
     * @return string|null
     */
    public function getMailRelay(): ?string
    {
        return $this->mailRelay;
    }
    /**
     * Set mailRelay value
     * @param string $mailRelay
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SendEmailResponse
     */
    public function setMailRelay(?string $mailRelay = null): self
    {
        // validation for constraint: string
        if (!is_null($mailRelay) && !is_string($mailRelay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailRelay, true), gettype($mailRelay)), __LINE__);
        }
        $this->mailRelay = $mailRelay;
        
        return $this;
    }
}
