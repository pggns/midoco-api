<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetActiveCrmMidocoSettlementResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getActiveCrmMidocoSettlement --- returns the active Midoco settlement defined for the given customer
 * @subpackage Structs
 */
class GetActiveCrmMidocoSettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlement
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement $MidocoCrmMidocoSettlement = null;
    /**
     * Constructor method for GetActiveCrmMidocoSettlementResponse
     * @uses GetActiveCrmMidocoSettlementResponse::setMidocoCrmMidocoSettlement()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement = null)
    {
        $this
            ->setMidocoCrmMidocoSettlement($midocoCrmMidocoSettlement);
    }
    /**
     * Get MidocoCrmMidocoSettlement value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement|null
     */
    public function getMidocoCrmMidocoSettlement(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement
    {
        return $this->MidocoCrmMidocoSettlement;
    }
    /**
     * Set MidocoCrmMidocoSettlement value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement
     * @return \Pggns\MidocoApi\Crm\StructType\GetActiveCrmMidocoSettlementResponse
     */
    public function setMidocoCrmMidocoSettlement(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement = null): self
    {
        $this->MidocoCrmMidocoSettlement = $midocoCrmMidocoSettlement;
        
        return $this;
    }
}
