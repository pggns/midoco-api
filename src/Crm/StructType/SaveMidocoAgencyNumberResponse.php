<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAgencyNumberResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoAgencyNumberResponse extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for SaveMidocoAgencyNumberResponse
     * @uses SaveMidocoAgencyNumberResponse::setMidocoMailMessage()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoAgencyNumberResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Crm\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
