<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVATPercentsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVATPercentsResponse extends AbstractStructBase
{
    /**
     * The MidocoVatDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatDefinition
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition[]
     */
    protected ?array $MidocoVatDefinition = null;
    /**
     * Constructor method for GetVATPercentsResponse
     * @uses GetVATPercentsResponse::setMidocoVatDefinition()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition[] $midocoVatDefinition
     */
    public function __construct(?array $midocoVatDefinition = null)
    {
        $this
            ->setMidocoVatDefinition($midocoVatDefinition);
    }
    /**
     * Get MidocoVatDefinition value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition[]
     */
    public function getMidocoVatDefinition(): ?array
    {
        return $this->MidocoVatDefinition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatDefinition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatDefinitionForArrayConstraintFromSetMidocoVatDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVATPercentsResponseMidocoVatDefinitionItem) {
            // validation for constraint: itemType
            if (!$getVATPercentsResponseMidocoVatDefinitionItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition) {
                $invalidValues[] = is_object($getVATPercentsResponseMidocoVatDefinitionItem) ? get_class($getVATPercentsResponseMidocoVatDefinitionItem) : sprintf('%s(%s)', gettype($getVATPercentsResponseMidocoVatDefinitionItem), var_export($getVATPercentsResponseMidocoVatDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatDefinition property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition[] $midocoVatDefinition
     * @return \Pggns\MidocoApi\Documents\StructType\GetVATPercentsResponse
     */
    public function setMidocoVatDefinition(?array $midocoVatDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatDefinitionArrayErrorMessage = self::validateMidocoVatDefinitionForArrayConstraintFromSetMidocoVatDefinition($midocoVatDefinition))) {
            throw new InvalidArgumentException($midocoVatDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatDefinition = $midocoVatDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoVatDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetVATPercentsResponse
     */
    public function addToMidocoVatDefinition(\Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition) {
            throw new InvalidArgumentException(sprintf('The MidocoVatDefinition property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatDefinition[] = $item;
        
        return $this;
    }
}
