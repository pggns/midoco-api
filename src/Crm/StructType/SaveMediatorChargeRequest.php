<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorChargeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMediatorChargeRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMediatorCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMediatorCharge
     * @var \Pggns\MidocoApi\Crm\StructType\CrmMediatorChargeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmMediatorChargeDTO $MidocoCrmMediatorCharge = null;
    /**
     * Constructor method for SaveMediatorChargeRequest
     * @uses SaveMediatorChargeRequest::setMidocoCrmMediatorCharge()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge = null)
    {
        $this
            ->setMidocoCrmMediatorCharge($midocoCrmMediatorCharge);
    }
    /**
     * Get MidocoCrmMediatorCharge value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmMediatorChargeDTO|null
     */
    public function getMidocoCrmMediatorCharge(): ?\Pggns\MidocoApi\Crm\StructType\CrmMediatorChargeDTO
    {
        return $this->MidocoCrmMediatorCharge;
    }
    /**
     * Set MidocoCrmMediatorCharge value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMediatorChargeRequest
     */
    public function setMidocoCrmMediatorCharge(?\Pggns\MidocoApi\Crm\StructType\CrmMediatorChargeDTO $midocoCrmMediatorCharge = null): self
    {
        $this->MidocoCrmMediatorCharge = $midocoCrmMediatorCharge;
        
        return $this;
    }
}
