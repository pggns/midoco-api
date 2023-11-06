<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitModulesForOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUnitModulesForOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoUnitModule
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - ref: MidocoUnitModule
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule $MidocoUnitModule = null;
    /**
     * Constructor method for GetUnitModulesForOrgunitRequest
     * @uses GetUnitModulesForOrgunitRequest::setMidocoUnitModule()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule $midocoUnitModule
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule $midocoUnitModule = null)
    {
        $this
            ->setMidocoUnitModule($midocoUnitModule);
    }
    /**
     * Get MidocoUnitModule value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule|null
     */
    public function getMidocoUnitModule(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule
    {
        return $this->MidocoUnitModule;
    }
    /**
     * Set MidocoUnitModule value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule $midocoUnitModule
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetUnitModulesForOrgunitRequest
     */
    public function setMidocoUnitModule(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoUnitModule $midocoUnitModule = null): self
    {
        $this->MidocoUnitModule = $midocoUnitModule;
        
        return $this;
    }
}
