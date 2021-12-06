<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoCharge|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoCharge $MidocoCrmMidocoCharge = null;
    /**
     * Constructor method for SaveMidocoChargeRequest
     * @uses SaveMidocoChargeRequest::setMidocoCrmMidocoCharge()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoCharge $midocoCrmMidocoCharge
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoCharge $midocoCrmMidocoCharge = null)
    {
        $this
            ->setMidocoCrmMidocoCharge($midocoCrmMidocoCharge);
    }
    /**
     * Get MidocoCrmMidocoCharge value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoCharge|null
     */
    public function getMidocoCrmMidocoCharge(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoCharge
    {
        return $this->MidocoCrmMidocoCharge;
    }
    /**
     * Set MidocoCrmMidocoCharge value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoCharge $midocoCrmMidocoCharge
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoChargeRequest
     */
    public function setMidocoCrmMidocoCharge(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmMidocoCharge $midocoCrmMidocoCharge = null): self
    {
        $this->MidocoCrmMidocoCharge = $midocoCrmMidocoCharge;
        
        return $this;
    }
}
