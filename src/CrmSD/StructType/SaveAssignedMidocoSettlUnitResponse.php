<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAssignedMidocoSettlUnitResponse StructType
 * @subpackage Structs
 */
class SaveAssignedMidocoSettlUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoAssignedMidocoSettlOUnit
     * Meta information extracted from the WSDL
     * - ref: MidocoAssignedMidocoSettlOUnit
     * @var \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO $MidocoAssignedMidocoSettlOUnit = null;
    /**
     * Constructor method for SaveAssignedMidocoSettlUnitResponse
     * @uses SaveAssignedMidocoSettlUnitResponse::setMidocoAssignedMidocoSettlOUnit()
     * @param \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit = null)
    {
        $this
            ->setMidocoAssignedMidocoSettlOUnit($midocoAssignedMidocoSettlOUnit);
    }
    /**
     * Get MidocoAssignedMidocoSettlOUnit value
     * @return \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO|null
     */
    public function getMidocoAssignedMidocoSettlOUnit(): ?\Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO
    {
        return $this->MidocoAssignedMidocoSettlOUnit;
    }
    /**
     * Set MidocoAssignedMidocoSettlOUnit value
     * @param \Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveAssignedMidocoSettlUnitResponse
     */
    public function setMidocoAssignedMidocoSettlOUnit(?\Pggns\MidocoApi\CrmSD\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit = null): self
    {
        $this->MidocoAssignedMidocoSettlOUnit = $midocoAssignedMidocoSettlOUnit;
        
        return $this;
    }
}
