<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionType|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionType $MidocoAttributeDefinition = null;
    /**
     * Constructor method for GetAttributeDefinitionLocalizationRequest
     * @uses GetAttributeDefinitionLocalizationRequest::setMidocoAttributeDefinition()
     * @param \Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionType $midocoAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionType $midocoAttributeDefinition = null)
    {
        $this
            ->setMidocoAttributeDefinition($midocoAttributeDefinition);
    }
    /**
     * Get MidocoAttributeDefinition value
     * @return \Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionType|null
     */
    public function getMidocoAttributeDefinition(): ?\Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionType
    {
        return $this->MidocoAttributeDefinition;
    }
    /**
     * Set MidocoAttributeDefinition value
     * @param \Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionType $midocoAttributeDefinition
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAttributeDefinitionLocalizationRequest
     */
    public function setMidocoAttributeDefinition(?\Pggns\MidocoApi\CrmSD\StructType\AttributeDefinitionType $midocoAttributeDefinition = null): self
    {
        $this->MidocoAttributeDefinition = $midocoAttributeDefinition;
        
        return $this;
    }
}
