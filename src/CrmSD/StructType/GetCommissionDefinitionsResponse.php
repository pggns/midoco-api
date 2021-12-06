<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommissionDefinitionsResponse StructType
 * @subpackage Structs
 */
class GetCommissionDefinitionsResponse extends AbstractStructBase
{
    /**
     * The MidocoCommissionDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCommissionDefinition
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO[]
     */
    protected ?array $MidocoCommissionDefinition = null;
    /**
     * Constructor method for GetCommissionDefinitionsResponse
     * @uses GetCommissionDefinitionsResponse::setMidocoCommissionDefinition()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO[] $midocoCommissionDefinition
     */
    public function __construct(?array $midocoCommissionDefinition = null)
    {
        $this
            ->setMidocoCommissionDefinition($midocoCommissionDefinition);
    }
    /**
     * Get MidocoCommissionDefinition value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO[]
     */
    public function getMidocoCommissionDefinition(): ?array
    {
        return $this->MidocoCommissionDefinition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCommissionDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCommissionDefinition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCommissionDefinitionForArrayConstraintsFromSetMidocoCommissionDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCommissionDefinitionsResponseMidocoCommissionDefinitionItem) {
            // validation for constraint: itemType
            if (!$getCommissionDefinitionsResponseMidocoCommissionDefinitionItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO) {
                $invalidValues[] = is_object($getCommissionDefinitionsResponseMidocoCommissionDefinitionItem) ? get_class($getCommissionDefinitionsResponseMidocoCommissionDefinitionItem) : sprintf('%s(%s)', gettype($getCommissionDefinitionsResponseMidocoCommissionDefinitionItem), var_export($getCommissionDefinitionsResponseMidocoCommissionDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCommissionDefinition property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCommissionDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO[] $midocoCommissionDefinition
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCommissionDefinitionsResponse
     */
    public function setMidocoCommissionDefinition(?array $midocoCommissionDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCommissionDefinitionArrayErrorMessage = self::validateMidocoCommissionDefinitionForArrayConstraintsFromSetMidocoCommissionDefinition($midocoCommissionDefinition))) {
            throw new InvalidArgumentException($midocoCommissionDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCommissionDefinition = $midocoCommissionDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoCommissionDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCommissionDefinitionsResponse
     */
    public function addToMidocoCommissionDefinition(\Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCommissionDefinition property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CommissionDefinitionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCommissionDefinition[] = $item;
        
        return $this;
    }
}
