<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateInvoiceFileResponse StructType
 * @subpackage Structs
 */
class GenerateInvoiceFileResponse extends AbstractStructBase
{
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for GenerateInvoiceFileResponse
     * @uses GenerateInvoiceFileResponse::setMessage()
     * @uses GenerateInvoiceFileResponse::setMidocoMailMessage()
     * @param string $message
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?string $message = null, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setMessage($message)
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Api\Order\StructType\GenerateInvoiceFileResponse
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Api\Order\StructType\GenerateInvoiceFileResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}