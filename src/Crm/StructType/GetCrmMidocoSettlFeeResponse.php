<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmMidocoSettlFeeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: GetCrmMidocoSettlFee --- returns the Midoco settlement levels defined for the given fee id
 * @subpackage Structs
 */
class GetCrmMidocoSettlFeeResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlFee
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlFee
     * @var \Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO $MidocoCrmMidocoSettlFee = null;
    /**
     * Constructor method for GetCrmMidocoSettlFeeResponse
     * @uses GetCrmMidocoSettlFeeResponse::setMidocoCrmMidocoSettlFee()
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
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmMidocoSettlFeeResponse
     */
    public function setMidocoCrmMidocoSettlFee(?\Pggns\MidocoApi\Crm\StructType\CrmMidocoSettlFeeDTO $midocoCrmMidocoSettlFee = null): self
    {
        $this->MidocoCrmMidocoSettlFee = $midocoCrmMidocoSettlFee;
        
        return $this;
    }
}
