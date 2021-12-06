<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoFlightTimeChangeEmailResponse StructType
 * @subpackage Structs
 */
class DoFlightTimeChangeEmailResponse extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for DoFlightTimeChangeEmailResponse
     * @uses DoFlightTimeChangeEmailResponse::setMidocoMailMessage()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage);
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\DoFlightTimeChangeEmailResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Api\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
