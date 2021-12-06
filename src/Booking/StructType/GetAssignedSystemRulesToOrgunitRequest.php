<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedSystemRulesToOrgunitRequest StructType
 * @subpackage Structs
 */
class GetAssignedSystemRulesToOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoUnitRuleset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoUnitRuleset
     * @var \Pggns\MidocoApi\Booking\StructType\MidocoUnitRuleset|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\MidocoUnitRuleset $MidocoUnitRuleset = null;
    /**
     * Constructor method for GetAssignedSystemRulesToOrgunitRequest
     * @uses GetAssignedSystemRulesToOrgunitRequest::setMidocoUnitRuleset()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoUnitRuleset $midocoUnitRuleset
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\MidocoUnitRuleset $midocoUnitRuleset = null)
    {
        $this
            ->setMidocoUnitRuleset($midocoUnitRuleset);
    }
    /**
     * Get MidocoUnitRuleset value
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoUnitRuleset|null
     */
    public function getMidocoUnitRuleset(): ?\Pggns\MidocoApi\Booking\StructType\MidocoUnitRuleset
    {
        return $this->MidocoUnitRuleset;
    }
    /**
     * Set MidocoUnitRuleset value
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoUnitRuleset $midocoUnitRuleset
     * @return \Pggns\MidocoApi\Booking\StructType\GetAssignedSystemRulesToOrgunitRequest
     */
    public function setMidocoUnitRuleset(?\Pggns\MidocoApi\Booking\StructType\MidocoUnitRuleset $midocoUnitRuleset = null): self
    {
        $this->MidocoUnitRuleset = $midocoUnitRuleset;
        
        return $this;
    }
}
