<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmMidocoSettlementRequest StructType
 * @subpackage Structs
 */
class SaveCrmMidocoSettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmMidocoSettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmMidocoSettlement
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmMidocoSettlement|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmMidocoSettlement $MidocoCrmMidocoSettlement = null;
    /**
     * Constructor method for SaveCrmMidocoSettlementRequest
     * @uses SaveCrmMidocoSettlementRequest::setMidocoCrmMidocoSettlement()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement = null)
    {
        $this
            ->setMidocoCrmMidocoSettlement($midocoCrmMidocoSettlement);
    }
    /**
     * Get MidocoCrmMidocoSettlement value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmMidocoSettlement|null
     */
    public function getMidocoCrmMidocoSettlement(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmMidocoSettlement
    {
        return $this->MidocoCrmMidocoSettlement;
    }
    /**
     * Set MidocoCrmMidocoSettlement value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCrmMidocoSettlementRequest
     */
    public function setMidocoCrmMidocoSettlement(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCrmMidocoSettlement $midocoCrmMidocoSettlement = null): self
    {
        $this->MidocoCrmMidocoSettlement = $midocoCrmMidocoSettlement;
        
        return $this;
    }
}