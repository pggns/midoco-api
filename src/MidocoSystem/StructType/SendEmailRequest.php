<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendEmailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendEmailRequest extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for SendEmailRequest
     * @uses SendEmailRequest::setMidocoMailMessage()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SendEmailRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
