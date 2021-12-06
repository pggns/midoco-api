<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionDefinitionResponse StructType
 * @subpackage Structs
 */
class SaveCommissionDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoCommissionDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionDefinition
     * @var \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CommissionDefinitionDTO $MidocoCommissionDefinition = null;
    /**
     * Constructor method for SaveCommissionDefinitionResponse
     * @uses SaveCommissionDefinitionResponse::setMidocoCommissionDefinition()
     * @param \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionDTO $midocoCommissionDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CommissionDefinitionDTO $midocoCommissionDefinition = null)
    {
        $this
            ->setMidocoCommissionDefinition($midocoCommissionDefinition);
    }
    /**
     * Get MidocoCommissionDefinition value
     * @return \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionDTO|null
     */
    public function getMidocoCommissionDefinition(): ?\Pggns\MidocoApi\Crm\StructType\CommissionDefinitionDTO
    {
        return $this->MidocoCommissionDefinition;
    }
    /**
     * Set MidocoCommissionDefinition value
     * @param \Pggns\MidocoApi\Crm\StructType\CommissionDefinitionDTO $midocoCommissionDefinition
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCommissionDefinitionResponse
     */
    public function setMidocoCommissionDefinition(?\Pggns\MidocoApi\Crm\StructType\CommissionDefinitionDTO $midocoCommissionDefinition = null): self
    {
        $this->MidocoCommissionDefinition = $midocoCommissionDefinition;
        
        return $this;
    }
}
