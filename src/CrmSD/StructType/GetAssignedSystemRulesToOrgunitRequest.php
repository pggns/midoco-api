<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoUnitRuleset|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoUnitRuleset $MidocoUnitRuleset = null;
    /**
     * Constructor method for GetAssignedSystemRulesToOrgunitRequest
     * @uses GetAssignedSystemRulesToOrgunitRequest::setMidocoUnitRuleset()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoUnitRuleset $midocoUnitRuleset
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoUnitRuleset $midocoUnitRuleset = null)
    {
        $this
            ->setMidocoUnitRuleset($midocoUnitRuleset);
    }
    /**
     * Get MidocoUnitRuleset value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoUnitRuleset|null
     */
    public function getMidocoUnitRuleset(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoUnitRuleset
    {
        return $this->MidocoUnitRuleset;
    }
    /**
     * Set MidocoUnitRuleset value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoUnitRuleset $midocoUnitRuleset
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAssignedSystemRulesToOrgunitRequest
     */
    public function setMidocoUnitRuleset(?\Pggns\MidocoApi\CrmSD\StructType\MidocoUnitRuleset $midocoUnitRuleset = null): self
    {
        $this->MidocoUnitRuleset = $midocoUnitRuleset;
        
        return $this;
    }
}
