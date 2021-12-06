<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\AttributeDefinitionType|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\AttributeDefinitionType $MidocoAttributeDefinition = null;
    /**
     * Constructor method for GetAttributeChoicesRequest
     * @uses GetAttributeChoicesRequest::setMidocoAttributeDefinition()
     * @param \Pggns\MidocoApi\System\StructType\AttributeDefinitionType $midocoAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\AttributeDefinitionType $midocoAttributeDefinition = null)
    {
        $this
            ->setMidocoAttributeDefinition($midocoAttributeDefinition);
    }
    /**
     * Get MidocoAttributeDefinition value
     * @return \Pggns\MidocoApi\System\StructType\AttributeDefinitionType|null
     */
    public function getMidocoAttributeDefinition(): ?\Pggns\MidocoApi\System\StructType\AttributeDefinitionType
    {
        return $this->MidocoAttributeDefinition;
    }
    /**
     * Set MidocoAttributeDefinition value
     * @param \Pggns\MidocoApi\System\StructType\AttributeDefinitionType $midocoAttributeDefinition
     * @return \Pggns\MidocoApi\System\StructType\GetAttributeChoicesRequest
     */
    public function setMidocoAttributeDefinition(?\Pggns\MidocoApi\System\StructType\AttributeDefinitionType $midocoAttributeDefinition = null): self
    {
        $this->MidocoAttributeDefinition = $midocoAttributeDefinition;
        
        return $this;
    }
}
