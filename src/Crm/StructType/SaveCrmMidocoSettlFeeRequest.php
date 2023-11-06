<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmMidocoSettlFeeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCrmMidocoSettlFeeRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlFee
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlFee
     * @var \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO $MidocoCrmMidocoSettlFee = null;
    /**
     * Constructor method for SaveCrmMidocoSettlFeeRequest
     * @uses SaveCrmMidocoSettlFeeRequest::setMidocoCrmMidocoSettlFee()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO $midocoCrmMidocoSettlFee
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO $midocoCrmMidocoSettlFee = null)
    {
        $this
            ->setMidocoCrmMidocoSettlFee($midocoCrmMidocoSettlFee);
    }
    /**
     * Get MidocoCrmMidocoSettlFee value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO|null
     */
    public function getMidocoCrmMidocoSettlFee(): ?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO
    {
        return $this->MidocoCrmMidocoSettlFee;
    }
    /**
     * Set MidocoCrmMidocoSettlFee value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO $midocoCrmMidocoSettlFee
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmMidocoSettlFeeRequest
     */
    public function setMidocoCrmMidocoSettlFee(?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO $midocoCrmMidocoSettlFee = null): self
    {
        $this->MidocoCrmMidocoSettlFee = $midocoCrmMidocoSettlFee;
        
        return $this;
    }
}
