<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoChargeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getMidocoCharge --- returns the Midoco charge for the given customer id and charge id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoChargeResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoChargeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoChargeInfo
     * @var \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType $MidocoCrmMidocoChargeInfo = null;
    /**
     * Constructor method for GetMidocoChargeResponse
     * @uses GetMidocoChargeResponse::setMidocoCrmMidocoChargeInfo()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType $midocoCrmMidocoChargeInfo
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType $midocoCrmMidocoChargeInfo = null)
    {
        $this
            ->setMidocoCrmMidocoChargeInfo($midocoCrmMidocoChargeInfo);
    }
    /**
     * Get MidocoCrmMidocoChargeInfo value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType|null
     */
    public function getMidocoCrmMidocoChargeInfo(): ?\Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType
    {
        return $this->MidocoCrmMidocoChargeInfo;
    }
    /**
     * Set MidocoCrmMidocoChargeInfo value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType $midocoCrmMidocoChargeInfo
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoChargeResponse
     */
    public function setMidocoCrmMidocoChargeInfo(?\Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType $midocoCrmMidocoChargeInfo = null): self
    {
        $this->MidocoCrmMidocoChargeInfo = $midocoCrmMidocoChargeInfo;
        
        return $this;
    }
}
