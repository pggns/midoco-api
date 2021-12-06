<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\AssignedMidocoMdocOUnitDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoMdocOUnitDTO $MidocoAssignedMidocoMdocOUnit = null;
    /**
     * Constructor method for SaveMidocoSettlMDocOrgUnitResponse
     * @uses SaveMidocoSettlMDocOrgUnitResponse::setMidocoAssignedMidocoMdocOUnit()
     * @param \Pggns\MidocoApi\Crm\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit = null)
    {
        $this
            ->setMidocoAssignedMidocoMdocOUnit($midocoAssignedMidocoMdocOUnit);
    }
    /**
     * Get MidocoAssignedMidocoMdocOUnit value
     * @return \Pggns\MidocoApi\Crm\StructType\AssignedMidocoMdocOUnitDTO|null
     */
    public function getMidocoAssignedMidocoMdocOUnit(): ?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoMdocOUnitDTO
    {
        return $this->MidocoAssignedMidocoMdocOUnit;
    }
    /**
     * Set MidocoAssignedMidocoMdocOUnit value
     * @param \Pggns\MidocoApi\Crm\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoSettlMDocOrgUnitResponse
     */
    public function setMidocoAssignedMidocoMdocOUnit(?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoMdocOUnitDTO $midocoAssignedMidocoMdocOUnit = null): self
    {
        $this->MidocoAssignedMidocoMdocOUnit = $midocoAssignedMidocoMdocOUnit;
        
        return $this;
    }
}
