<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConsent|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConsent $MidocoConsent = null;
    /**
     * Constructor method for GetConsentRequest
     * @uses GetConsentRequest::setMidocoConsent()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConsent $midocoConsent
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConsent $midocoConsent = null)
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConsent|null
     */
    public function getMidocoConsent(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConsent
    {
        return $this->MidocoConsent;
    }
    /**
     * Set MidocoConsent value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConsent $midocoConsent
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetConsentRequest
     */
    public function setMidocoConsent(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConsent $midocoConsent = null): self
    {
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
}
