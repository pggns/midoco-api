<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\AttributeDefinitionType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AttributeDefinitionType $MidocoAttributeDefinition = null;
    /**
     * Constructor method for GetAttributeDefinitionLocalizationRequest
     * @uses GetAttributeDefinitionLocalizationRequest::setMidocoAttributeDefinition()
     * @param \Pggns\MidocoApi\Crm\StructType\AttributeDefinitionType $midocoAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\AttributeDefinitionType $midocoAttributeDefinition = null)
    {
        $this
            ->setMidocoAttributeDefinition($midocoAttributeDefinition);
    }
    /**
     * Get MidocoAttributeDefinition value
     * @return \Pggns\MidocoApi\Crm\StructType\AttributeDefinitionType|null
     */
    public function getMidocoAttributeDefinition(): ?\Pggns\MidocoApi\Crm\StructType\AttributeDefinitionType
    {
        return $this->MidocoAttributeDefinition;
    }
    /**
     * Set MidocoAttributeDefinition value
     * @param \Pggns\MidocoApi\Crm\StructType\AttributeDefinitionType $midocoAttributeDefinition
     * @return \Pggns\MidocoApi\Crm\StructType\GetAttributeDefinitionLocalizationRequest
     */
    public function setMidocoAttributeDefinition(?\Pggns\MidocoApi\Crm\StructType\AttributeDefinitionType $midocoAttributeDefinition = null): self
    {
        $this->MidocoAttributeDefinition = $midocoAttributeDefinition;
        
        return $this;
    }
}
