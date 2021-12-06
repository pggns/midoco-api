<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryPageLine StructType
 * @subpackage Structs
 */
class MidocoQueryPageLine extends AbstractStructBase
{
    /**
     * The MidocoQueryPageLineValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoQueryPageLineValue
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue[]
     */
    protected ?array $MidocoQueryPageLineValue = null;
    /**
     * Constructor method for MidocoQueryPageLine
     * @uses MidocoQueryPageLine::setMidocoQueryPageLineValue()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue[] $midocoQueryPageLineValue
     */
    public function __construct(?array $midocoQueryPageLineValue = null)
    {
        $this
            ->setMidocoQueryPageLineValue($midocoQueryPageLineValue);
    }
    /**
     * Get MidocoQueryPageLineValue value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue[]
     */
    public function getMidocoQueryPageLineValue(): ?array
    {
        return $this->MidocoQueryPageLineValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQueryPageLineValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryPageLineValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryPageLineValueForArrayConstraintsFromSetMidocoQueryPageLineValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryPageLineMidocoQueryPageLineValueItem) {
            // validation for constraint: itemType
            if (!$midocoQueryPageLineMidocoQueryPageLineValueItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue) {
                $invalidValues[] = is_object($midocoQueryPageLineMidocoQueryPageLineValueItem) ? get_class($midocoQueryPageLineMidocoQueryPageLineValueItem) : sprintf('%s(%s)', gettype($midocoQueryPageLineMidocoQueryPageLineValueItem), var_export($midocoQueryPageLineMidocoQueryPageLineValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryPageLineValue property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryPageLineValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue[] $midocoQueryPageLineValue
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLine
     */
    public function setMidocoQueryPageLineValue(?array $midocoQueryPageLineValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryPageLineValueArrayErrorMessage = self::validateMidocoQueryPageLineValueForArrayConstraintsFromSetMidocoQueryPageLineValue($midocoQueryPageLineValue))) {
            throw new InvalidArgumentException($midocoQueryPageLineValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryPageLineValue = $midocoQueryPageLineValue;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryPageLineValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLine
     */
    public function addToMidocoQueryPageLineValue(\Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryPageLineValue property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryPageLineValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryPageLineValue[] = $item;
        
        return $this;
    }
}
