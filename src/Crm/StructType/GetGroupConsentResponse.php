<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGroupConsentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGroupConsentResponse extends AbstractStructBase
{
    /**
     * The MidocoGroupConsent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoGroupConsent
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoGroupConsent|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoGroupConsent $MidocoGroupConsent = null;
    /**
     * Constructor method for GetGroupConsentResponse
     * @uses GetGroupConsentResponse::setMidocoGroupConsent()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoGroupConsent $midocoGroupConsent
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoGroupConsent $midocoGroupConsent = null)
    {
        $this
            ->setMidocoGroupConsent($midocoGroupConsent);
    }
    /**
     * Get MidocoGroupConsent value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoGroupConsent|null
     */
    public function getMidocoGroupConsent(): ?\Pggns\MidocoApi\Crm\StructType\MidocoGroupConsent
    {
        return $this->MidocoGroupConsent;
    }
    /**
     * Set MidocoGroupConsent value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoGroupConsent $midocoGroupConsent
     * @return \Pggns\MidocoApi\Crm\StructType\GetGroupConsentResponse
     */
    public function setMidocoGroupConsent(?\Pggns\MidocoApi\Crm\StructType\MidocoGroupConsent $midocoGroupConsent = null): self
    {
        $this->MidocoGroupConsent = $midocoGroupConsent;
        
        return $this;
    }
}
