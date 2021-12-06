<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConsentRequest StructType
 * @subpackage Structs
 */
class GetConsentRequest extends AbstractStructBase
{
    /**
     * The MidocoConsent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoConsent
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoConsent|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoConsent $MidocoConsent = null;
    /**
     * Constructor method for GetConsentRequest
     * @uses GetConsentRequest::setMidocoConsent()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoConsent $midocoConsent
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoConsent $midocoConsent = null)
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoConsent|null
     */
    public function getMidocoConsent(): ?\Pggns\MidocoApi\Crm\StructType\MidocoConsent
    {
        return $this->MidocoConsent;
    }
    /**
     * Set MidocoConsent value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoConsent $midocoConsent
     * @return \Pggns\MidocoApi\Crm\StructType\GetConsentRequest
     */
    public function setMidocoConsent(?\Pggns\MidocoApi\Crm\StructType\MidocoConsent $midocoConsent = null): self
    {
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
}
