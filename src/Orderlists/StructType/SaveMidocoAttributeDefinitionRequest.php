<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionDTO $MidocoSystemAttributeDefinition = null;
    /**
     * Constructor method for SaveMidocoAttributeDefinitionRequest
     * @uses SaveMidocoAttributeDefinitionRequest::setMidocoSystemAttributeDefinition()
     * @param \Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null)
    {
        $this
            ->setMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition);
    }
    /**
     * Get MidocoSystemAttributeDefinition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionDTO|null
     */
    public function getMidocoSystemAttributeDefinition(): ?\Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionDTO
    {
        return $this->MidocoSystemAttributeDefinition;
    }
    /**
     * Set MidocoSystemAttributeDefinition value
     * @param \Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveMidocoAttributeDefinitionRequest
     */
    public function setMidocoSystemAttributeDefinition(?\Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionDTO $midocoSystemAttributeDefinition = null): self
    {
        $this->MidocoSystemAttributeDefinition = $midocoSystemAttributeDefinition;
        
        return $this;
    }
}
