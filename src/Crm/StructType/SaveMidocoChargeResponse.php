<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoChargeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveMidocoCharge --- saves a Midoco charge
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoChargeResponse extends AbstractStructBase
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
     * Constructor method for SaveMidocoChargeResponse
     * @uses SaveMidocoChargeResponse::setMidocoCrmMidocoChargeInfo()
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
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeResponse
     */
    public function setMidocoCrmMidocoChargeInfo(?\Pggns\MidocoApi\Crm\StructType\CrmMidocoChargeInfoType $midocoCrmMidocoChargeInfo = null): self
    {
        $this->MidocoCrmMidocoChargeInfo = $midocoCrmMidocoChargeInfo;
        
        return $this;
    }
}
