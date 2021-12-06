<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

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
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoUnitRuleset|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoUnitRuleset $MidocoUnitRuleset = null;
    /**
     * Constructor method for GetAssignedSystemRulesToOrgunitRequest
     * @uses GetAssignedSystemRulesToOrgunitRequest::setMidocoUnitRuleset()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoUnitRuleset $midocoUnitRuleset
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoUnitRuleset $midocoUnitRuleset = null)
    {
        $this
            ->setMidocoUnitRuleset($midocoUnitRuleset);
    }
    /**
     * Get MidocoUnitRuleset value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoUnitRuleset|null
     */
    public function getMidocoUnitRuleset(): ?\Pggns\MidocoApi\Mis\StructType\MidocoUnitRuleset
    {
        return $this->MidocoUnitRuleset;
    }
    /**
     * Set MidocoUnitRuleset value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoUnitRuleset $midocoUnitRuleset
     * @return \Pggns\MidocoApi\Mis\StructType\GetAssignedSystemRulesToOrgunitRequest
     */
    public function setMidocoUnitRuleset(?\Pggns\MidocoApi\Mis\StructType\MidocoUnitRuleset $midocoUnitRuleset = null): self
    {
        $this->MidocoUnitRuleset = $midocoUnitRuleset;
        
        return $this;
    }
}
