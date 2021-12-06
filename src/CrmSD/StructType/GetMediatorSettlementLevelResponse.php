<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MediatorSettlementLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MediatorSettlementLevelDTO $MidocoMediatorSettlementLevel = null;
    /**
     * Constructor method for GetMediatorSettlementLevelResponse
     * @uses GetMediatorSettlementLevelResponse::setMidocoMediatorSettlementLevel()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null)
    {
        $this
            ->setMidocoMediatorSettlementLevel($midocoMediatorSettlementLevel);
    }
    /**
     * Get MidocoMediatorSettlementLevel value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MediatorSettlementLevelDTO|null
     */
    public function getMidocoMediatorSettlementLevel(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MediatorSettlementLevelDTO
    {
        return $this->MidocoMediatorSettlementLevel;
    }
    /**
     * Set MidocoMediatorSettlementLevel value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetMediatorSettlementLevelResponse
     */
    public function setMidocoMediatorSettlementLevel(?\Pggns\MidocoApi\Api\CrmSD\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null): self
    {
        $this->MidocoMediatorSettlementLevel = $midocoMediatorSettlementLevel;
        
        return $this;
    }
}
