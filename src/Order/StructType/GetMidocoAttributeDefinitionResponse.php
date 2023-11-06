<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAttributeDefinitionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoAttributeDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSystemAttributeDefinition
     * @var \Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO[]
     */
    protected ?array $MidocoSystemAttributeDefinition = null;
    /**
     * Constructor method for GetMidocoAttributeDefinitionResponse
     * @uses GetMidocoAttributeDefinitionResponse::setMidocoSystemAttributeDefinition()
     * @param \Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO[] $midocoSystemAttributeDefinition
     */
    public function __construct(?array $midocoSystemAttributeDefinition = null)
    {
        $this
            ->setMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition);
    }
    /**
     * Get MidocoSystemAttributeDefinition value
     * @return \Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO[]
     */
    public function getMidocoSystemAttributeDefinition(): ?array
    {
        return $this->MidocoSystemAttributeDefinition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSystemAttributeDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSystemAttributeDefinition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSystemAttributeDefinitionForArrayConstraintFromSetMidocoSystemAttributeDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem) {
            // validation for constraint: itemType
            if (!$getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem instanceof \Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO) {
                $invalidValues[] = is_object($getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem) ? get_class($getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem) : sprintf('%s(%s)', gettype($getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem), var_export($getMidocoAttributeDefinitionResponseMidocoSystemAttributeDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSystemAttributeDefinition property can only contain items of type \Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSystemAttributeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO[] $midocoSystemAttributeDefinition
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoAttributeDefinitionResponse
     */
    public function setMidocoSystemAttributeDefinition(?array $midocoSystemAttributeDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSystemAttributeDefinitionArrayErrorMessage = self::validateMidocoSystemAttributeDefinitionForArrayConstraintFromSetMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition))) {
            throw new InvalidArgumentException($midocoSystemAttributeDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSystemAttributeDefinition = $midocoSystemAttributeDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoSystemAttributeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoAttributeDefinitionResponse
     */
    public function addToMidocoSystemAttributeDefinition(\Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSystemAttributeDefinition property can only contain items of type \Pggns\MidocoApi\Order\StructType\AttributeDefinitionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSystemAttributeDefinition[] = $item;
        
        return $this;
    }
}
