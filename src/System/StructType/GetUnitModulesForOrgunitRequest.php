<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\MidocoUnitModule|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoUnitModule $MidocoUnitModule = null;
    /**
     * Constructor method for GetUnitModulesForOrgunitRequest
     * @uses GetUnitModulesForOrgunitRequest::setMidocoUnitModule()
     * @param \Pggns\MidocoApi\System\StructType\MidocoUnitModule $midocoUnitModule
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoUnitModule $midocoUnitModule = null)
    {
        $this
            ->setMidocoUnitModule($midocoUnitModule);
    }
    /**
     * Get MidocoUnitModule value
     * @return \Pggns\MidocoApi\System\StructType\MidocoUnitModule|null
     */
    public function getMidocoUnitModule(): ?\Pggns\MidocoApi\System\StructType\MidocoUnitModule
    {
        return $this->MidocoUnitModule;
    }
    /**
     * Set MidocoUnitModule value
     * @param \Pggns\MidocoApi\System\StructType\MidocoUnitModule $midocoUnitModule
     * @return \Pggns\MidocoApi\System\StructType\GetUnitModulesForOrgunitRequest
     */
    public function setMidocoUnitModule(?\Pggns\MidocoApi\System\StructType\MidocoUnitModule $midocoUnitModule = null): self
    {
        $this->MidocoUnitModule = $midocoUnitModule;
        
        return $this;
    }
}
