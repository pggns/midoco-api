<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitsNotAllowedForModuleResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitsNotAllowedForModuleResponse extends AbstractStructBase
{
    /**
     * The UnitNameNotAllowed
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $UnitNameNotAllowed = null;
    /**
     * Constructor method for GetOrgunitsNotAllowedForModuleResponse
     * @uses GetOrgunitsNotAllowedForModuleResponse::setUnitNameNotAllowed()
     * @param string[] $unitNameNotAllowed
     */
    public function __construct(?array $unitNameNotAllowed = null)
    {
        $this
            ->setUnitNameNotAllowed($unitNameNotAllowed);
    }
    /**
     * Get UnitNameNotAllowed value
     * @return string[]
     */
    public function getUnitNameNotAllowed(): ?array
    {
        return $this->UnitNameNotAllowed;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitNameNotAllowed method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitNameNotAllowed method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameNotAllowedForArrayConstraintFromSetUnitNameNotAllowed(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgunitsNotAllowedForModuleResponseUnitNameNotAllowedItem) {
            // validation for constraint: itemType
            if (!is_string($getOrgunitsNotAllowedForModuleResponseUnitNameNotAllowedItem)) {
                $invalidValues[] = is_object($getOrgunitsNotAllowedForModuleResponseUnitNameNotAllowedItem) ? get_class($getOrgunitsNotAllowedForModuleResponseUnitNameNotAllowedItem) : sprintf('%s(%s)', gettype($getOrgunitsNotAllowedForModuleResponseUnitNameNotAllowedItem), var_export($getOrgunitsNotAllowedForModuleResponseUnitNameNotAllowedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitNameNotAllowed property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnitNameNotAllowed value
     * @throws InvalidArgumentException
     * @param string[] $unitNameNotAllowed
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitsNotAllowedForModuleResponse
     */
    public function setUnitNameNotAllowed(?array $unitNameNotAllowed = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameNotAllowedArrayErrorMessage = self::validateUnitNameNotAllowedForArrayConstraintFromSetUnitNameNotAllowed($unitNameNotAllowed))) {
            throw new InvalidArgumentException($unitNameNotAllowedArrayErrorMessage, __LINE__);
        }
        $this->UnitNameNotAllowed = $unitNameNotAllowed;
        
        return $this;
    }
    /**
     * Add item to UnitNameNotAllowed value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitsNotAllowedForModuleResponse
     */
    public function addToUnitNameNotAllowed(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The UnitNameNotAllowed property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitNameNotAllowed[] = $item;
        
        return $this;
    }
}
