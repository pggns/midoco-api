<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetValuesFromTableResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getValuesFromTable --- returns the values as strings of the given field from the given table
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetValuesFromTableResponse extends AbstractStructBase
{
    /**
     * The stringValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $stringValue = null;
    /**
     * Constructor method for GetValuesFromTableResponse
     * @uses GetValuesFromTableResponse::setStringValue()
     * @param string[] $stringValue
     */
    public function __construct(?array $stringValue = null)
    {
        $this
            ->setStringValue($stringValue);
    }
    /**
     * Get stringValue value
     * @return string[]
     */
    public function getStringValue(): ?array
    {
        return $this->stringValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setStringValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStringValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringValueForArrayConstraintFromSetStringValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getValuesFromTableResponseStringValueItem) {
            // validation for constraint: itemType
            if (!is_string($getValuesFromTableResponseStringValueItem)) {
                $invalidValues[] = is_object($getValuesFromTableResponseStringValueItem) ? get_class($getValuesFromTableResponseStringValueItem) : sprintf('%s(%s)', gettype($getValuesFromTableResponseStringValueItem), var_export($getValuesFromTableResponseStringValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The stringValue property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set stringValue value
     * @throws InvalidArgumentException
     * @param string[] $stringValue
     * @return \Pggns\MidocoApi\Mis\StructType\GetValuesFromTableResponse
     */
    public function setStringValue(?array $stringValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($stringValueArrayErrorMessage = self::validateStringValueForArrayConstraintFromSetStringValue($stringValue))) {
            throw new InvalidArgumentException($stringValueArrayErrorMessage, __LINE__);
        }
        $this->stringValue = $stringValue;
        
        return $this;
    }
    /**
     * Add item to stringValue value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetValuesFromTableResponse
     */
    public function addToStringValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The stringValue property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->stringValue[] = $item;
        
        return $this;
    }
}
