<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $MidocoConsent = null;
    /**
     * Constructor method for GetConsentRequest
     * @uses GetConsentRequest::setMidocoConsent()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $midocoConsent
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $midocoConsent = null)
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent|null
     */
    public function getMidocoConsent(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoConsent
    {
        return $this->MidocoConsent;
    }
    /**
     * Set MidocoConsent value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $midocoConsent
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetConsentRequest
     */
    public function setMidocoConsent(?\Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $midocoConsent = null): self
    {
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
}
