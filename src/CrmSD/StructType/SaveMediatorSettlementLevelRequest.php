<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorSettlementLevelRequest StructType
 * @subpackage Structs
 */
class SaveMediatorSettlementLevelRequest extends AbstractStructBase
{
    /**
     * The MidocoMediatorSettlementLevel
     * Meta information extracted from the WSDL
     * - ref: MidocoMediatorSettlementLevel
     * @var \Pggns\MidocoApi\CrmSD\StructType\MediatorSettlementLevelDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MediatorSettlementLevelDTO $MidocoMediatorSettlementLevel = null;
    /**
     * Constructor method for SaveMediatorSettlementLevelRequest
     * @uses SaveMediatorSettlementLevelRequest::setMidocoMediatorSettlementLevel()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null)
    {
        $this
            ->setMidocoMediatorSettlementLevel($midocoMediatorSettlementLevel);
    }
    /**
     * Get MidocoMediatorSettlementLevel value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MediatorSettlementLevelDTO|null
     */
    public function getMidocoMediatorSettlementLevel(): ?\Pggns\MidocoApi\CrmSD\StructType\MediatorSettlementLevelDTO
    {
        return $this->MidocoMediatorSettlementLevel;
    }
    /**
     * Set MidocoMediatorSettlementLevel value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMediatorSettlementLevelRequest
     */
    public function setMidocoMediatorSettlementLevel(?\Pggns\MidocoApi\CrmSD\StructType\MediatorSettlementLevelDTO $midocoMediatorSettlementLevel = null): self
    {
        $this->MidocoMediatorSettlementLevel = $midocoMediatorSettlementLevel;
        
        return $this;
    }
}
