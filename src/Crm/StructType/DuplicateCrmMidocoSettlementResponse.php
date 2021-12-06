<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateCrmMidocoSettlementResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: duplicateCrmMidocoSettlement --- duplicates the Midoco settlement with the given customer. Creates a new settl with a new valid from date
 * @subpackage Structs
 */
class DuplicateCrmMidocoSettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlement
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement $MidocoCrmMidocoSettlement = null;
    /**
     * Constructor method for DuplicateCrmMidocoSettlementResponse
     * @uses DuplicateCrmMidocoSettlementResponse::setMidocoCrmMidocoSettlement()
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
     * @return \Pggns\MidocoApi\Crm\StructType\DuplicateCrmMidocoSettlementResponse
     */
    public function setMidocoCrmMidocoSettlement(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement = null): self
    {
        $this->MidocoCrmMidocoSettlement = $midocoCrmMidocoSettlement;
        
        return $this;
    }
}
