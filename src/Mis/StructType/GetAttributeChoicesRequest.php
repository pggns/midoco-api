<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttributeChoicesRequest StructType
 * @subpackage Structs
 */
class GetAttributeChoicesRequest extends AbstractStructBase
{
    /**
     * The MidocoAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoAttributeDefinition
     * @var \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionType|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\AttributeDefinitionType $MidocoAttributeDefinition = null;
    /**
     * Constructor method for GetAttributeChoicesRequest
     * @uses GetAttributeChoicesRequest::setMidocoAttributeDefinition()
     * @param \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionType $midocoAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\AttributeDefinitionType $midocoAttributeDefinition = null)
    {
        $this
            ->setMidocoAttributeDefinition($midocoAttributeDefinition);
    }
    /**
     * Get MidocoAttributeDefinition value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionType|null
     */
    public function getMidocoAttributeDefinition(): ?\Pggns\MidocoApi\Mis\StructType\AttributeDefinitionType
    {
        return $this->MidocoAttributeDefinition;
    }
    /**
     * Set MidocoAttributeDefinition value
     * @param \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionType $midocoAttributeDefinition
     * @return \Pggns\MidocoApi\Mis\StructType\GetAttributeChoicesRequest
     */
    public function setMidocoAttributeDefinition(?\Pggns\MidocoApi\Mis\StructType\AttributeDefinitionType $midocoAttributeDefinition = null): self
    {
        $this->MidocoAttributeDefinition = $midocoAttributeDefinition;
        
        return $this;
    }
}
