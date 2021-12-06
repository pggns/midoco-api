<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemAttributesForOrderResponse StructType
 * @subpackage Structs
 */
class GetSellItemAttributesForOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoAttributeValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAttributeValue
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue[]
     */
    protected ?array $MidocoAttributeValue = null;
    /**
     * Constructor method for GetSellItemAttributesForOrderResponse
     * @uses GetSellItemAttributesForOrderResponse::setMidocoAttributeValue()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue[] $midocoAttributeValue
     */
    public function __construct(?array $midocoAttributeValue = null)
    {
        $this
            ->setMidocoAttributeValue($midocoAttributeValue);
    }
    /**
     * Get MidocoAttributeValue value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue[]
     */
    public function getMidocoAttributeValue(): ?array
    {
        return $this->MidocoAttributeValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAttributeValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAttributeValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAttributeValueForArrayConstraintsFromSetMidocoAttributeValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellItemAttributesForOrderResponseMidocoAttributeValueItem) {
            // validation for constraint: itemType
            if (!$getSellItemAttributesForOrderResponseMidocoAttributeValueItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue) {
                $invalidValues[] = is_object($getSellItemAttributesForOrderResponseMidocoAttributeValueItem) ? get_class($getSellItemAttributesForOrderResponseMidocoAttributeValueItem) : sprintf('%s(%s)', gettype($getSellItemAttributesForOrderResponseMidocoAttributeValueItem), var_export($getSellItemAttributesForOrderResponseMidocoAttributeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAttributeValue property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue[] $midocoAttributeValue
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesForOrderResponse
     */
    public function setMidocoAttributeValue(?array $midocoAttributeValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAttributeValueArrayErrorMessage = self::validateMidocoAttributeValueForArrayConstraintsFromSetMidocoAttributeValue($midocoAttributeValue))) {
            throw new InvalidArgumentException($midocoAttributeValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoAttributeValue = $midocoAttributeValue;
        
        return $this;
    }
    /**
     * Add item to MidocoAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesForOrderResponse
     */
    public function addToMidocoAttributeValue(\Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue) {
            throw new InvalidArgumentException(sprintf('The MidocoAttributeValue property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoAttributeValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAttributeValue[] = $item;
        
        return $this;
    }
}