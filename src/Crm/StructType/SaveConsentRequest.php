<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveConsentRequest StructType
 * @subpackage Structs
 */
class SaveConsentRequest extends AbstractStructBase
{
    /**
     * The MidocoConsent
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoConsent
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoConsent
     */
    protected \Pggns\MidocoApi\Api\Crm\StructType\MidocoConsent $MidocoConsent;
    /**
     * Constructor method for SaveConsentRequest
     * @uses SaveConsentRequest::setMidocoConsent()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoConsent $midocoConsent
     */
    public function __construct(\Pggns\MidocoApi\Api\Crm\StructType\MidocoConsent $midocoConsent)
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoConsent
     */
    public function getMidocoConsent(): \Pggns\MidocoApi\Api\Crm\StructType\MidocoConsent
    {
        return $this->MidocoConsent;
    }
    /**
     * Set MidocoConsent value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoConsent $midocoConsent
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveConsentRequest
     */
    public function setMidocoConsent(\Pggns\MidocoApi\Api\Crm\StructType\MidocoConsent $midocoConsent): self
    {
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
}
