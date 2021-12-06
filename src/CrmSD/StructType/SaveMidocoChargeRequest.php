<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoChargeRequest StructType
 * @subpackage Structs
 */
class SaveMidocoChargeRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoCharge
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoCharge|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoCharge $MidocoCrmMidocoCharge = null;
    /**
     * Constructor method for SaveMidocoChargeRequest
     * @uses SaveMidocoChargeRequest::setMidocoCrmMidocoCharge()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoCharge $midocoCrmMidocoCharge
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoCharge $midocoCrmMidocoCharge = null)
    {
        $this
            ->setMidocoCrmMidocoCharge($midocoCrmMidocoCharge);
    }
    /**
     * Get MidocoCrmMidocoCharge value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoCharge|null
     */
    public function getMidocoCrmMidocoCharge(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoCharge
    {
        return $this->MidocoCrmMidocoCharge;
    }
    /**
     * Set MidocoCrmMidocoCharge value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoCharge $midocoCrmMidocoCharge
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMidocoChargeRequest
     */
    public function setMidocoCrmMidocoCharge(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoCharge $midocoCrmMidocoCharge = null): self
    {
        $this->MidocoCrmMidocoCharge = $midocoCrmMidocoCharge;
        
        return $this;
    }
}
