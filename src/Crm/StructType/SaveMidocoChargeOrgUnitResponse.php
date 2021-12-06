<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoChargeOrgUnitResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveMidocoChargeOrgUnit --- saves a MidocoAssignedSettlMdocOUnit
 * @subpackage Structs
 */
class SaveMidocoChargeOrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoAssignedMidocoChargeOu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoChargeOu
     * @var \Pggns\MidocoApi\Crm\StructType\AssignedMidocoChargeOuDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoChargeOuDTO $MidocoAssignedMidocoChargeOu = null;
    /**
     * Constructor method for SaveMidocoChargeOrgUnitResponse
     * @uses SaveMidocoChargeOrgUnitResponse::setMidocoAssignedMidocoChargeOu()
     * @param \Pggns\MidocoApi\Crm\StructType\AssignedMidocoChargeOuDTO $midocoAssignedMidocoChargeOu
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoChargeOuDTO $midocoAssignedMidocoChargeOu = null)
    {
        $this
            ->setMidocoAssignedMidocoChargeOu($midocoAssignedMidocoChargeOu);
    }
    /**
     * Get MidocoAssignedMidocoChargeOu value
     * @return \Pggns\MidocoApi\Crm\StructType\AssignedMidocoChargeOuDTO|null
     */
    public function getMidocoAssignedMidocoChargeOu(): ?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoChargeOuDTO
    {
        return $this->MidocoAssignedMidocoChargeOu;
    }
    /**
     * Set MidocoAssignedMidocoChargeOu value
     * @param \Pggns\MidocoApi\Crm\StructType\AssignedMidocoChargeOuDTO $midocoAssignedMidocoChargeOu
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoChargeOrgUnitResponse
     */
    public function setMidocoAssignedMidocoChargeOu(?\Pggns\MidocoApi\Crm\StructType\AssignedMidocoChargeOuDTO $midocoAssignedMidocoChargeOu = null): self
    {
        $this->MidocoAssignedMidocoChargeOu = $midocoAssignedMidocoChargeOu;
        
        return $this;
    }
}
