<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorChargeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveMediatorCharge --- saves a mediator charge
 * @subpackage Structs
 */
class SaveMediatorChargeResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMediatorChargeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMediatorChargeInfo
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmMediatorChargeInfoType|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmMediatorChargeInfoType $MidocoCrmMediatorChargeInfo = null;
    /**
     * Constructor method for SaveMediatorChargeResponse
     * @uses SaveMediatorChargeResponse::setMidocoCrmMediatorChargeInfo()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmMediatorChargeInfoType $midocoCrmMediatorChargeInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmMediatorChargeInfoType $midocoCrmMediatorChargeInfo = null)
    {
        $this
            ->setMidocoCrmMediatorChargeInfo($midocoCrmMediatorChargeInfo);
    }
    /**
     * Get MidocoCrmMediatorChargeInfo value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmMediatorChargeInfoType|null
     */
    public function getMidocoCrmMediatorChargeInfo(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmMediatorChargeInfoType
    {
        return $this->MidocoCrmMediatorChargeInfo;
    }
    /**
     * Set MidocoCrmMediatorChargeInfo value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmMediatorChargeInfoType $midocoCrmMediatorChargeInfo
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveMediatorChargeResponse
     */
    public function setMidocoCrmMediatorChargeInfo(?\Pggns\MidocoApi\Api\Crm\StructType\CrmMediatorChargeInfoType $midocoCrmMediatorChargeInfo = null): self
    {
        $this->MidocoCrmMediatorChargeInfo = $midocoCrmMediatorChargeInfo;
        
        return $this;
    }
}
