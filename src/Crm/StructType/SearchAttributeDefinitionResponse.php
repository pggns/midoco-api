<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAttributeDefinitionResponse StructType
 * @subpackage Structs
 */
class SearchAttributeDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoAttributeDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAttributeDefinition
     * @var \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType[]
     */
    protected ?array $MidocoAttributeDefinition = null;
    /**
     * Constructor method for SearchAttributeDefinitionResponse
     * @uses SearchAttributeDefinitionResponse::setMidocoAttributeDefinition()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType[] $midocoAttributeDefinition
     */
    public function __construct(?array $midocoAttributeDefinition = null)
    {
        $this
            ->setMidocoAttributeDefinition($midocoAttributeDefinition);
    }
    /**
     * Get MidocoAttributeDefinition value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType[]
     */
    public function getMidocoAttributeDefinition(): ?array
    {
        return $this->MidocoAttributeDefinition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAttributeDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAttributeDefinition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAttributeDefinitionForArrayConstraintsFromSetMidocoAttributeDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAttributeDefinitionResponseMidocoAttributeDefinitionItem) {
            // validation for constraint: itemType
            if (!$searchAttributeDefinitionResponseMidocoAttributeDefinitionItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType) {
                $invalidValues[] = is_object($searchAttributeDefinitionResponseMidocoAttributeDefinitionItem) ? get_class($searchAttributeDefinitionResponseMidocoAttributeDefinitionItem) : sprintf('%s(%s)', gettype($searchAttributeDefinitionResponseMidocoAttributeDefinitionItem), var_export($searchAttributeDefinitionResponseMidocoAttributeDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAttributeDefinition property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAttributeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType[] $midocoAttributeDefinition
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchAttributeDefinitionResponse
     */
    public function setMidocoAttributeDefinition(?array $midocoAttributeDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAttributeDefinitionArrayErrorMessage = self::validateMidocoAttributeDefinitionForArrayConstraintsFromSetMidocoAttributeDefinition($midocoAttributeDefinition))) {
            throw new InvalidArgumentException($midocoAttributeDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAttributeDefinition = $midocoAttributeDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoAttributeDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchAttributeDefinitionResponse
     */
    public function addToMidocoAttributeDefinition(\Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType) {
            throw new InvalidArgumentException(sprintf('The MidocoAttributeDefinition property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\AttributeDefinitionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAttributeDefinition[] = $item;
        
        return $this;
    }
}
