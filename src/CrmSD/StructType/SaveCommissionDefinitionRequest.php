<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionDefinitionRequest StructType
 * @subpackage Structs
 */
class SaveCommissionDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoCommissionDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionDefinition
     * @var \Pggns\MidocoApi\CrmSD\StructType\CommissionDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CommissionDefinitionDTO $MidocoCommissionDefinition = null;
    /**
     * Constructor method for SaveCommissionDefinitionRequest
     * @uses SaveCommissionDefinitionRequest::setMidocoCommissionDefinition()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CommissionDefinitionDTO $midocoCommissionDefinition
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CommissionDefinitionDTO $midocoCommissionDefinition = null)
    {
        $this
            ->setMidocoCommissionDefinition($midocoCommissionDefinition);
    }
    /**
     * Get MidocoCommissionDefinition value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CommissionDefinitionDTO|null
     */
    public function getMidocoCommissionDefinition(): ?\Pggns\MidocoApi\CrmSD\StructType\CommissionDefinitionDTO
    {
        return $this->MidocoCommissionDefinition;
    }
    /**
     * Set MidocoCommissionDefinition value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CommissionDefinitionDTO $midocoCommissionDefinition
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCommissionDefinitionRequest
     */
    public function setMidocoCommissionDefinition(?\Pggns\MidocoApi\CrmSD\StructType\CommissionDefinitionDTO $midocoCommissionDefinition = null): self
    {
        $this->MidocoCommissionDefinition = $midocoCommissionDefinition;
        
        return $this;
    }
}
