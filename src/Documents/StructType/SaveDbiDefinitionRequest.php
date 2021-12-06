<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDbiDefinitionRequest StructType
 * @subpackage Structs
 */
class SaveDbiDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoDbiDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoDbiDefinition
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefinitionType
     */
    protected \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefinitionType $MidocoDbiDefinition;
    /**
     * Constructor method for SaveDbiDefinitionRequest
     * @uses SaveDbiDefinitionRequest::setMidocoDbiDefinition()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefinitionType $midocoDbiDefinition
     */
    public function __construct(\Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefinitionType $midocoDbiDefinition)
    {
        $this
            ->setMidocoDbiDefinition($midocoDbiDefinition);
    }
    /**
     * Get MidocoDbiDefinition value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefinitionType
     */
    public function getMidocoDbiDefinition(): \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefinitionType
    {
        return $this->MidocoDbiDefinition;
    }
    /**
     * Set MidocoDbiDefinition value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefinitionType $midocoDbiDefinition
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveDbiDefinitionRequest
     */
    public function setMidocoDbiDefinition(\Pggns\MidocoApi\Api\Documents\StructType\MidocoDbiDefinitionType $midocoDbiDefinition): self
    {
        $this->MidocoDbiDefinition = $midocoDbiDefinition;
        
        return $this;
    }
}