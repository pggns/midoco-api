<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAttributeDefinitionResponse StructType
 * @subpackage Structs
 */
class GetMidocoAttributeDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSystemAttributeDefinition
     * @var \Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO[]
     */
    protected ?array $MidocoSystemAttributeDefinition = null;
    /**
     * Constructor method for GetMidocoAttributeDefinitionResponse
     * @uses GetMidocoAttributeDefinitionResponse::setMidocoSystemAttributeDefinition()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO[] $midocoSystemAttributeDefinition
     */
    public function __construct(?array $midocoSystemAttributeDefinition = null)
    {
        $this
            ->setMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition);
    }
    /**
     * Get MidocoSystemAttributeDefinition value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO[]
     */
    public function getMidocoSystemAttributeDefinition(): ?array
    {
        return $this->MidocoSystemAttributeDefinition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSystemAttributeDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSystemAttributeDefinition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSystemAttributeDefinitionForArrayConstraintsFromSetMidocoSystemAttributeDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem) {
            // validation for constraint: itemType
            if (!$getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO) {
                $invalidValues[] = is_object($getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem) ? get_class($getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem) : sprintf('%s(%s)', gettype($getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem), var_export($getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSystemAttributeDefinition property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSystemAttributeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO[] $midocoSystemAttributeDefinition
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetMidocoAttributeDefinitionResponse
     */
    public function setMidocoSystemAttributeDefinition(?array $midocoSystemAttributeDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSystemAttributeDefinitionArrayErrorMessage = self::validateMidocoSystemAttributeDefinitionForArrayConstraintsFromSetMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition))) {
            throw new InvalidArgumentException($midocoSystemAttributeDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSystemAttributeDefinition = $midocoSystemAttributeDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoSystemAttributeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetMidocoAttributeDefinitionResponse
     */
    public function addToMidocoSystemAttributeDefinition(\Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSystemAttributeDefinition property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\AttributeDefinitionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSystemAttributeDefinition[] = $item;
        
        return $this;
    }
}
