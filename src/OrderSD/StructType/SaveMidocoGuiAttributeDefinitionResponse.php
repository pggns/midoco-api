<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoGuiAttributeDefinitionResponse StructType
 * @subpackage Structs
 */
class SaveMidocoGuiAttributeDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoGuiAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoGuiAttributeDefinition
     * @var \Pggns\MidocoApi\OrderSD\StructType\GuiAttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\GuiAttributeDefinitionDTO $MidocoGuiAttributeDefinition = null;
    /**
     * Constructor method for SaveMidocoGuiAttributeDefinitionResponse
     * @uses SaveMidocoGuiAttributeDefinitionResponse::setMidocoGuiAttributeDefinition()
     * @param \Pggns\MidocoApi\OrderSD\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null)
    {
        $this
            ->setMidocoGuiAttributeDefinition($midocoGuiAttributeDefinition);
    }
    /**
     * Get MidocoGuiAttributeDefinition value
     * @return \Pggns\MidocoApi\OrderSD\StructType\GuiAttributeDefinitionDTO|null
     */
    public function getMidocoGuiAttributeDefinition(): ?\Pggns\MidocoApi\OrderSD\StructType\GuiAttributeDefinitionDTO
    {
        return $this->MidocoGuiAttributeDefinition;
    }
    /**
     * Set MidocoGuiAttributeDefinition value
     * @param \Pggns\MidocoApi\OrderSD\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoGuiAttributeDefinitionResponse
     */
    public function setMidocoGuiAttributeDefinition(?\Pggns\MidocoApi\OrderSD\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null): self
    {
        $this->MidocoGuiAttributeDefinition = $midocoGuiAttributeDefinition;
        
        return $this;
    }
}
