<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSettlMDocOrgUnitResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveMidocoSettlMDocOrgUnit --- saves a MidocoAssignedSettlMdocOUnit
 * @subpackage Structs
 */
class SaveMidocoSettlMDocOrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoAssignedMidocoMdocOUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoMdocOUnit
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoMdocOUnitDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $MidocoAssignedMidocoMdocOUnit = null;
    /**
     * Constructor method for SaveMidocoSettlMDocOrgUnitResponse
     * @uses SaveMidocoSettlMDocOrgUnitResponse::setMidocoAssignedMidocoMdocOUnit()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit = null)
    {
        $this
            ->setMidocoAssignedMidocoMdocOUnit($midocoAssignedMidocoMdocOUnit);
    }
    /**
     * Get MidocoAssignedMidocoMdocOUnit value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoMdocOUnitDTO|null
     */
    public function getMidocoAssignedMidocoMdocOUnit(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoMdocOUnitDTO
    {
        return $this->MidocoAssignedMidocoMdocOUnit;
    }
    /**
     * Set MidocoAssignedMidocoMdocOUnit value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveMidocoSettlMDocOrgUnitResponse
     */
    public function setMidocoAssignedMidocoMdocOUnit(?\Pggns\MidocoApi\Api\CrmSD\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit = null): self
    {
        $this->MidocoAssignedMidocoMdocOUnit = $midocoAssignedMidocoMdocOUnit;
        
        return $this;
    }
}