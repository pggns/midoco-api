<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendSMSMessageRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendSMSMessageRequest extends AbstractStructBase
{
    /**
     * The sender
     * @var string|null
     */
    protected ?string $sender = null;
    /**
     * The recipient
     * @var string|null
     */
    protected ?string $recipient = null;
    /**
     * The smsText
     * @var string|null
     */
    protected ?string $smsText = null;
    /**
     * Constructor method for SendSMSMessageRequest
     * @uses SendSMSMessageRequest::setSender()
     * @uses SendSMSMessageRequest::setRecipient()
     * @uses SendSMSMessageRequest::setSmsText()
     * @param string $sender
     * @param string $recipient
     * @param string $smsText
     */
    public function __construct(?string $sender = null, ?string $recipient = null, ?string $smsText = null)
    {
        $this
            ->setSender($sender)
            ->setRecipient($recipient)
            ->setSmsText($smsText);
    }
    /**
     * Get sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SendSMSMessageRequest
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->sender = $sender;
        
        return $this;
    }
    /**
     * Get recipient value
     * @return string|null
     */
    public function getRecipient(): ?string
    {
        return $this->recipient;
    }
    /**
     * Set recipient value
     * @param string $recipient
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SendSMSMessageRequest
     */
    public function setRecipient(?string $recipient = null): self
    {
        // validation for constraint: string
        if (!is_null($recipient) && !is_string($recipient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipient, true), gettype($recipient)), __LINE__);
        }
        $this->recipient = $recipient;
        
        return $this;
    }
    /**
     * Get smsText value
     * @return string|null
     */
    public function getSmsText(): ?string
    {
        return $this->smsText;
    }
    /**
     * Set smsText value
     * @param string $smsText
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SendSMSMessageRequest
     */
    public function setSmsText(?string $smsText = null): self
    {
        // validation for constraint: string
        if (!is_null($smsText) && !is_string($smsText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smsText, true), gettype($smsText)), __LINE__);
        }
        $this->smsText = $smsText;
        
        return $this;
    }
}
