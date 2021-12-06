<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmMidocoSettlementResponse StructType
 * @subpackage Structs
 */
class SaveCrmMidocoSettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlement
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlement|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlement $MidocoCrmMidocoSettlement = null;
    /**
     * Constructor method for SaveCrmMidocoSettlementResponse
     * @uses SaveCrmMidocoSettlementResponse::setMidocoCrmMidocoSettlement()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement = null)
    {
        $this
            ->setMidocoCrmMidocoSettlement($midocoCrmMidocoSettlement);
    }
    /**
     * Get MidocoCrmMidocoSettlement value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlement|null
     */
    public function getMidocoCrmMidocoSettlement(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlement
    {
        return $this->MidocoCrmMidocoSettlement;
    }
    /**
     * Set MidocoCrmMidocoSettlement value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCrmMidocoSettlementResponse
     */
    public function setMidocoCrmMidocoSettlement(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement = null): self
    {
        $this->MidocoCrmMidocoSettlement = $midocoCrmMidocoSettlement;
        
        return $this;
    }
}
