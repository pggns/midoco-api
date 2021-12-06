<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent
     */
    protected \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $MidocoConsent;
    /**
     * Constructor method for SaveConsentRequest
     * @uses SaveConsentRequest::setMidocoConsent()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $midocoConsent
     */
    public function __construct(\Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $midocoConsent)
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent
     */
    public function getMidocoConsent(): \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent
    {
        return $this->MidocoConsent;
    }
    /**
     * Set MidocoConsent value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $midocoConsent
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveConsentRequest
     */
    public function setMidocoConsent(\Pggns\MidocoApi\CrmSD\StructType\MidocoConsent $midocoConsent): self
    {
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
}
