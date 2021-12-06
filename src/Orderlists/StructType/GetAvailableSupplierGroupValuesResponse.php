<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableSupplierGroupValuesResponse StructType
 * @subpackage Structs
 */
class GetAvailableSupplierGroupValuesResponse extends AbstractStructBase
{
    /**
     * The groupValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $groupValue = null;
    /**
     * Constructor method for GetAvailableSupplierGroupValuesResponse
     * @uses GetAvailableSupplierGroupValuesResponse::setGroupValue()
     * @param string[] $groupValue
     */
    public function __construct(?array $groupValue = null)
    {
        $this
            ->setGroupValue($groupValue);
    }
    /**
     * Get groupValue value
     * @return string[]
     */
    public function getGroupValue(): ?array
    {
        return $this->groupValue;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupValueForArrayConstraintsFromSetGroupValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableSupplierGroupValuesResponseGroupValueItem) {
            // validation for constraint: itemType
            if (!is_string($getAvailableSupplierGroupValuesResponseGroupValueItem)) {
                $invalidValues[] = is_object($getAvailableSupplierGroupValuesResponseGroupValueItem) ? get_class($getAvailableSupplierGroupValuesResponseGroupValueItem) : sprintf('%s(%s)', gettype($getAvailableSupplierGroupValuesResponseGroupValueItem), var_export($getAvailableSupplierGroupValuesResponseGroupValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The groupValue property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set groupValue value
     * @throws InvalidArgumentException
     * @param string[] $groupValue
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierGroupValuesResponse
     */
    public function setGroupValue(?array $groupValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($groupValueArrayErrorMessage = self::validateGroupValueForArrayConstraintsFromSetGroupValue($groupValue))) {
            throw new InvalidArgumentException($groupValueArrayErrorMessage, __LINE__);
        }
        $this->groupValue = $groupValue;
        
        return $this;
    }
    /**
     * Add item to groupValue value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierGroupValuesResponse
     */
    public function addToGroupValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The groupValue property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->groupValue[] = $item;
        
        return $this;
    }
}
