<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAttributeDefinitionRequest StructType
 * @subpackage Structs
 */
class SaveMidocoAttributeDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeDefinition
     * @var \Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionDTO $MidocoSystemAttributeDefinition = null;
    /**
     * Constructor method for SaveMidocoAttributeDefinitionRequest
     * @uses SaveMidocoAttributeDefinitionRequest::setMidocoSystemAttributeDefinition()
     * @param \Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null)
    {
        $this
            ->setMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition);
    }
    /**
     * Get MidocoSystemAttributeDefinition value
     * @return \Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionDTO|null
     */
    public function getMidocoSystemAttributeDefinition(): ?\Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionDTO
    {
        return $this->MidocoSystemAttributeDefinition;
    }
    /**
     * Set MidocoSystemAttributeDefinition value
     * @param \Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMidocoAttributeDefinitionRequest
     */
    public function setMidocoSystemAttributeDefinition(?\Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null): self
    {
        $this->MidocoSystemAttributeDefinition = $midocoSystemAttributeDefinition;
        
        return $this;
    }
}
