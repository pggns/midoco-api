<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorSettlementLevelResponse StructType
 * @subpackage Structs
 */
class GetMediatorSettlementLevelResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorSettlementLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMediatorSettlementLevel
     * @var \Pggns\MidocoApi\Crm\StructType\MediatorSettlementLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MediatorSettlementLevelDTO $MidocoMediatorSettlementLevel = null;
    /**
     * Constructor method for GetMediatorSettlementLevelResponse
     * @uses GetMediatorSettlementLevelResponse::setMidocoMediatorSettlementLevel()
     * @param \Pggns\MidocoApi\Crm\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null)
    {
        $this
            ->setMidocoMediatorSettlementLevel($midocoMediatorSettlementLevel);
    }
    /**
     * Get MidocoMediatorSettlementLevel value
     * @return \Pggns\MidocoApi\Crm\StructType\MediatorSettlementLevelDTO|null
     */
    public function getMidocoMediatorSettlementLevel(): ?\Pggns\MidocoApi\Crm\StructType\MediatorSettlementLevelDTO
    {
        return $this->MidocoMediatorSettlementLevel;
    }
    /**
     * Set MidocoMediatorSettlementLevel value
     * @param \Pggns\MidocoApi\Crm\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorSettlementLevelResponse
     */
    public function setMidocoMediatorSettlementLevel(?\Pggns\MidocoApi\Crm\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null): self
    {
        $this->MidocoMediatorSettlementLevel = $midocoMediatorSettlementLevel;
        
        return $this;
    }
}
