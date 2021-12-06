<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnitModulesForOrgunitRequest StructType
 * @subpackage Structs
 */
class GetUnitModulesForOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoUnitModule
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - ref: MidocoUnitModule
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoUnitModule|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoUnitModule $MidocoUnitModule = null;
    /**
     * Constructor method for GetUnitModulesForOrgunitRequest
     * @uses GetUnitModulesForOrgunitRequest::setMidocoUnitModule()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoUnitModule $midocoUnitModule
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoUnitModule $midocoUnitModule = null)
    {
        $this
            ->setMidocoUnitModule($midocoUnitModule);
    }
    /**
     * Get MidocoUnitModule value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoUnitModule|null
     */
    public function getMidocoUnitModule(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoUnitModule
    {
        return $this->MidocoUnitModule;
    }
    /**
     * Set MidocoUnitModule value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoUnitModule $midocoUnitModule
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetUnitModulesForOrgunitRequest
     */
    public function setMidocoUnitModule(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoUnitModule $midocoUnitModule = null): self
    {
        $this->MidocoUnitModule = $midocoUnitModule;
        
        return $this;
    }
}
