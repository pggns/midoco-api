<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorChargeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getMediatorCharge --- returns the mediator charge for the given mediator id (customer id) and charge id
 * @subpackage Structs
 */
class GetMediatorChargeResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMediatorChargeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMediatorChargeInfo
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeInfoType|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeInfoType $MidocoCrmMediatorChargeInfo = null;
    /**
     * Constructor method for GetMediatorChargeResponse
     * @uses GetMediatorChargeResponse::setMidocoCrmMediatorChargeInfo()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeInfoType $midocoCrmMediatorChargeInfo
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeInfoType $midocoCrmMediatorChargeInfo = null)
    {
        $this
            ->setMidocoCrmMediatorChargeInfo($midocoCrmMediatorChargeInfo);
    }
    /**
     * Get MidocoCrmMediatorChargeInfo value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeInfoType|null
     */
    public function getMidocoCrmMediatorChargeInfo(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeInfoType
    {
        return $this->MidocoCrmMediatorChargeInfo;
    }
    /**
     * Set MidocoCrmMediatorChargeInfo value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeInfoType $midocoCrmMediatorChargeInfo
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetMediatorChargeResponse
     */
    public function setMidocoCrmMediatorChargeInfo(?\Pggns\MidocoApi\CrmSD\StructType\CrmMediatorChargeInfoType $midocoCrmMediatorChargeInfo = null): self
    {
        $this->MidocoCrmMediatorChargeInfo = $midocoCrmMediatorChargeInfo;
        
        return $this;
    }
}
