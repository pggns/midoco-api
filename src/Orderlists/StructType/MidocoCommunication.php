<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCommunication StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCommunication extends CommunicationDTO
{
    /**
     * The MidocoConsentCommunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoConsentCommunication
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoConsentCommunicationType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoConsentCommunicationType $MidocoConsentCommunication = null;
    /**
     * Constructor method for MidocoCommunication
     * @uses MidocoCommunication::setMidocoConsentCommunication()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoConsentCommunicationType $midocoConsentCommunication
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoConsentCommunicationType $midocoConsentCommunication = null)
    {
        $this
            ->setMidocoConsentCommunication($midocoConsentCommunication);
    }
    /**
     * Get MidocoConsentCommunication value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConsentCommunicationType|null
     */
    public function getMidocoConsentCommunication(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoConsentCommunicationType
    {
        return $this->MidocoConsentCommunication;
    }
    /**
     * Set MidocoConsentCommunication value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoConsentCommunicationType $midocoConsentCommunication
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCommunication
     */
    public function setMidocoConsentCommunication(?\Pggns\MidocoApi\Orderlists\StructType\MidocoConsentCommunicationType $midocoConsentCommunication = null): self
    {
        $this->MidocoConsentCommunication = $midocoConsentCommunication;
        
        return $this;
    }
}
