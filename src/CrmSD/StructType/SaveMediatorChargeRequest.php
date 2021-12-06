<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorChargeRequest StructType
 * @subpackage Structs
 */
class SaveMediatorChargeRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMediatorCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMediatorCharge
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeDTO $MidocoCrmMediatorCharge = null;
    /**
     * Constructor method for SaveMediatorChargeRequest
     * @uses SaveMediatorChargeRequest::setMidocoCrmMediatorCharge()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge = null)
    {
        $this
            ->setMidocoCrmMediatorCharge($midocoCrmMediatorCharge);
    }
    /**
     * Get MidocoCrmMediatorCharge value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeDTO|null
     */
    public function getMidocoCrmMediatorCharge(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeDTO
    {
        return $this->MidocoCrmMediatorCharge;
    }
    /**
     * Set MidocoCrmMediatorCharge value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMediatorChargeRequest
     */
    public function setMidocoCrmMediatorCharge(?\Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge = null): self
    {
        $this->MidocoCrmMediatorCharge = $midocoCrmMediatorCharge;
        
        return $this;
    }
}
