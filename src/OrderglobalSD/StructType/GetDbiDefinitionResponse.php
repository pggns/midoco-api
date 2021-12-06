<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDbiDefinitionResponse StructType
 * @subpackage Structs
 */
class GetDbiDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoDbiDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoDbiDefinition
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType
     */
    protected \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType $MidocoDbiDefinition;
    /**
     * Constructor method for GetDbiDefinitionResponse
     * @uses GetDbiDefinitionResponse::setMidocoDbiDefinition()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType $midocoDbiDefinition
     */
    public function __construct(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType $midocoDbiDefinition)
    {
        $this
            ->setMidocoDbiDefinition($midocoDbiDefinition);
    }
    /**
     * Get MidocoDbiDefinition value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType
     */
    public function getMidocoDbiDefinition(): \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType
    {
        return $this->MidocoDbiDefinition;
    }
    /**
     * Set MidocoDbiDefinition value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType $midocoDbiDefinition
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiDefinitionResponse
     */
    public function setMidocoDbiDefinition(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefinitionType $midocoDbiDefinition): self
    {
        $this->MidocoDbiDefinition = $midocoDbiDefinition;
        
        return $this;
    }
}
