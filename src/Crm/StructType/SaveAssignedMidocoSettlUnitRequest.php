<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAssignedMidocoSettlUnitRequest StructType
 * @subpackage Structs
 */
class SaveAssignedMidocoSettlUnitRequest extends AbstractStructBase
{
    /**
     * The MidocoAssignedMidocoSettlOUnit
     * Meta information extracted from the WSDL
     * - ref: MidocoAssignedMidocoSettlOUnit
     * @var \Pggns\MidocoApi\Api\Crm\StructType\AssignedMidocoSettlOUnitDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\AssignedMidocoSettlOUnitDTO $MidocoAssignedMidocoSettlOUnit = null;
    /**
     * Constructor method for SaveAssignedMidocoSettlUnitRequest
     * @uses SaveAssignedMidocoSettlUnitRequest::setMidocoAssignedMidocoSettlOUnit()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit = null)
    {
        $this
            ->setMidocoAssignedMidocoSettlOUnit($midocoAssignedMidocoSettlOUnit);
    }
    /**
     * Get MidocoAssignedMidocoSettlOUnit value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AssignedMidocoSettlOUnitDTO|null
     */
    public function getMidocoAssignedMidocoSettlOUnit(): ?\Pggns\MidocoApi\Api\Crm\StructType\AssignedMidocoSettlOUnitDTO
    {
        return $this->MidocoAssignedMidocoSettlOUnit;
    }
    /**
     * Set MidocoAssignedMidocoSettlOUnit value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveAssignedMidocoSettlUnitRequest
     */
    public function setMidocoAssignedMidocoSettlOUnit(?\Pggns\MidocoApi\Api\Crm\StructType\AssignedMidocoSettlOUnitDTO $midocoAssignedMidocoSettlOUnit = null): self
    {
        $this->MidocoAssignedMidocoSettlOUnit = $midocoAssignedMidocoSettlOUnit;
        
        return $this;
    }
}
