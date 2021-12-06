<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\GuiAttributeDefinitionDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\GuiAttributeDefinitionDTO $MidocoGuiAttributeDefinition = null;
    /**
     * Constructor method for SaveMidocoGuiAttributeDefinitionResponse
     * @uses SaveMidocoGuiAttributeDefinitionResponse::setMidocoGuiAttributeDefinition()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null)
    {
        $this
            ->setMidocoGuiAttributeDefinition($midocoGuiAttributeDefinition);
    }
    /**
     * Get MidocoGuiAttributeDefinition value
     * @return \Pggns\MidocoApi\CrmSD\StructType\GuiAttributeDefinitionDTO|null
     */
    public function getMidocoGuiAttributeDefinition(): ?\Pggns\MidocoApi\CrmSD\StructType\GuiAttributeDefinitionDTO
    {
        return $this->MidocoGuiAttributeDefinition;
    }
    /**
     * Set MidocoGuiAttributeDefinition value
     * @param \Pggns\MidocoApi\CrmSD\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMidocoGuiAttributeDefinitionResponse
     */
    public function setMidocoGuiAttributeDefinition(?\Pggns\MidocoApi\CrmSD\StructType\GuiAttributeDefinitionDTO $midocoGuiAttributeDefinition = null): self
    {
        $this->MidocoGuiAttributeDefinition = $midocoGuiAttributeDefinition;
        
        return $this;
    }
}
