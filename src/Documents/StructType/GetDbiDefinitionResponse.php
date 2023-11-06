<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDbiDefinitionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDbiDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoDbiDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoDbiDefinition
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType
     */
    protected \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType $MidocoDbiDefinition;
    /**
     * Constructor method for GetDbiDefinitionResponse
     * @uses GetDbiDefinitionResponse::setMidocoDbiDefinition()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType $midocoDbiDefinition
     */
    public function __construct(\Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType $midocoDbiDefinition)
    {
        $this
            ->setMidocoDbiDefinition($midocoDbiDefinition);
    }
    /**
     * Get MidocoDbiDefinition value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType
     */
    public function getMidocoDbiDefinition(): \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType
    {
        return $this->MidocoDbiDefinition;
    }
    /**
     * Set MidocoDbiDefinition value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType $midocoDbiDefinition
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionResponse
     */
    public function setMidocoDbiDefinition(\Pggns\MidocoApi\Documents\StructType\MidocoDbiDefinitionType $midocoDbiDefinition): self
    {
        $this->MidocoDbiDefinition = $midocoDbiDefinition;
        
        return $this;
    }
}
