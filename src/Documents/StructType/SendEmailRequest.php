<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendEmailRequest StructType
 * @subpackage Structs
 */
class SendEmailRequest extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for SendEmailRequest
     * @uses SendEmailRequest::setMidocoMailMessage()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Documents\StructType\SendEmailRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Documents\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
