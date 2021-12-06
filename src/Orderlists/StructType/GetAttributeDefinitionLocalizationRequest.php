<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttributeDefinitionLocalizationRequest StructType
 * @subpackage Structs
 */
class GetAttributeDefinitionLocalizationRequest extends AbstractStructBase
{
    /**
     * The MidocoAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoAttributeDefinition
     * @var \Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionType $MidocoAttributeDefinition = null;
    /**
     * Constructor method for GetAttributeDefinitionLocalizationRequest
     * @uses GetAttributeDefinitionLocalizationRequest::setMidocoAttributeDefinition()
     * @param \Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionType $midocoAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionType $midocoAttributeDefinition = null)
    {
        $this
            ->setMidocoAttributeDefinition($midocoAttributeDefinition);
    }
    /**
     * Get MidocoAttributeDefinition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionType|null
     */
    public function getMidocoAttributeDefinition(): ?\Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionType
    {
        return $this->MidocoAttributeDefinition;
    }
    /**
     * Set MidocoAttributeDefinition value
     * @param \Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionType $midocoAttributeDefinition
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAttributeDefinitionLocalizationRequest
     */
    public function setMidocoAttributeDefinition(?\Pggns\MidocoApi\Orderlists\StructType\AttributeDefinitionType $midocoAttributeDefinition = null): self
    {
        $this->MidocoAttributeDefinition = $midocoAttributeDefinition;
        
        return $this;
    }
}
