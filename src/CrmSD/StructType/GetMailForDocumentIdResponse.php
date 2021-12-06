<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMailForDocumentIdResponse StructType
 * @subpackage Structs
 */
class GetMailForDocumentIdResponse extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for GetMailForDocumentIdResponse
     * @uses GetMailForDocumentIdResponse::setMidocoMailMessage()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMailForDocumentIdResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
