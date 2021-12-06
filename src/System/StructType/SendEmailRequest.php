<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for SendEmailRequest
     * @uses SendEmailRequest::setMidocoMailMessage()
     * @param \Pggns\MidocoApi\System\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\System\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\System\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\System\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\System\StructType\SendEmailRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\System\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
